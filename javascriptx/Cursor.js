var Cursor = function(el){
    this.element = el;

    this.__shouldCallback = false;

    // binding an instance method...
    this.movement = this.movement.bind(this);

    this.callbacks = [];
    this.moveEndCallbacks = [];
    this.moveStartCallbacks = [];

    var moveStart = this.moveStart.bind(this),
        moveEnd = this.moveEnd.bind(this);

    document.addEvents({
        'mousedown': moveStart('mousemove'),
        'touchstart': moveStart('touchmove'),
        'mouseup': moveEnd('mousemove'),
        'touchend': moveEnd('touchmove'),
        'touchcancel': moveEnd('touchmove')
    });
};

Cursor.prototype = {

    isEventFromElement: function(event) {
        var isFromElement = false;
        var source = event.srcElement;
        while (source != null) {
            if (source == this.element) {
                isFromElement = true;
                break;
            }
            source = source.parentNode;
        }
        return isFromElement;
    },

    moveStart: function(eventName){
        var movement = this.movement; // this has be statically bound...
        return (function(event){
            this.__shouldCallback = this.isEventFromElement(event);
            if (this.__shouldCallback) {
                event.preventDefault();
                this.reset();
                document.addEvent(eventName, movement); // move on subsequent moves
                this.moveStartCallbacks.forEach(function(callback){
                    callback();
                });
            }
        }).bind(this);
    },

    moveEnd: function(eventName){
        var movement = this.movement; // this has be statically bound...
        return (function(){
            if (this.__shouldCallback) {
                document.removeEvent(eventName, movement);
                this.momentum();
                this.moveEndCallbacks.forEach(function(callback){
                    callback();
                });
                this.__shouldCallback = false;
            }
        }).bind(this);
    },

    reset: function(){
        delete this.previous;
        this.stopMomentum();
    },

    movement: function(event, delta){
        if (!delta) delta = this.calculateDelta(event);
        this.callbacks.forEach(function(callback){
            callback(delta);
        });
    },

    calculateDelta: function(event){
        if (event.touches) event = event.touches[0];
        var position = new Vector(event.pageX, event.pageY);

        if (!this.previous) this.previous = position;

        var delta = position.subtract(this.previous);
        this.previous = position;

        return this.lastDelta = delta;
    },

    stopMomentum: function(){
        this.momentumTimer = clearTimeout(this.momentumTimer);
    },

    momentum: function(){
        if (this.__shouldCallback) {

        var delta = this.lastDelta,
            damp = 0.94, delay = 30;

        if (this.momentumTimer) this.stopMomentum();

        var calcMomentum = (function(){
            if (delta.length() < 0.1) return;

            this.movement(null, (delta = delta.scale(damp)));

            this.momentumTimer = setTimeout(calcMomentum, delay);
        }).bind(this);

        calcMomentum();

    }
    },

    addMovementListener: function(callback){
        this.callbacks.push(callback);
    },

    addMoveEndListener: function(callback) {
        this.moveEndCallbacks.push(callback);
    },

    addMoveStartListener: function(callback) {
        this.moveStartCallbacks.push(callback);
    }
};