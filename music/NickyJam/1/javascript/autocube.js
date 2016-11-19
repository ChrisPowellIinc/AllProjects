(function(){

Array.slice = function(){
    var slice = Array.prototype.slice;
    return slice.apply(arguments[0], slice.call(arguments, 1));
};

var scaleTransform = Modernizr.csstransforms3d ? function(scale){
    return 'scale3d(' + [scale, scale, scale].join(',') + ')';
} : function(scale){
    return 'scale(' + scale + ')';
};

var methods = {

    rotate: function(value){
        this.style[CSS.transform] = 'rotate(' + (value * 360) + 'deg)';
    },

    scale: function(scale){
        this.style[CSS.transform] = scaleTransform(scale);
    },

    rotateX: function(x){
        var rotateFn = "rotateX";
        //var rotateFn = this.isHorizontal ? 'rotateY' : 'rotateX';

        // do some trig to figure out how big the carousel
        // is in 3D space
        var panelSize = this[ this.isHorizontal ? 'offsetWidth' : 'offsetHeight' ];
        var numSides = this.children.length;
        var radius = Math.round((panelSize / 2) / Math.tan( Math.PI / numSides ));
        var rotation = x % 360;

        var theta = 360 / numSides;

        // Rotate each of the panels.
        for (var i = 0; i < numSides; i++ ) {
            var panel = this.children[i];
            var angle = theta * i;

            // Make the panel visible only if it is
            // the current panel.
            // Comment out these four lines if you
            // want all sides to be visible.
            /*if (i == curPanel)
                panel.style.opacity = 1;
            else
                panel.style.opacity = 0;*/

            // Resolves pixelation on Z-Index
            panel.style[CSS.transform] = rotateFn + '(' + angle + 'deg) translateZ(' + radius + 'px)';
        }

        // push the carousel back in 3D space,
        // and rotate it
        // (handles pixelation of z-index)
        this.style[CSS.transform] = 'translateZ(-' + radius + 'px) ' + rotateFn + '(' + rotation + 'deg)';  
    },

    position: function(x, y){
        this.style.left = x + 'px';
        this.style.top = y + 'px';
    },

    addClass: function(){
        var existing = this.className.split(' ');

        Array.slice(arguments).forEach(function(className){
            if (existing.indexOf(className) < 0) existing.push(className);
        });

        this.className = existing.join(' ');
    },

    removeClass: function(){
        var existing = this.className.split(' '),
            args = Array.slice(arguments);

        this.className = existing.filter(function(className){
            return args.indexOf(className) < 0;
        }).join(' ');
    }

};

for(var method in methods){
    HTMLElement.prototype[method] = methods[method];
}

document.addEvent = function(eventName, eventHandler){
    this.addEventListener(eventName, eventHandler, false);
};

document.addEvents = function(events){
    for (var eventName in events){
        this.addEvent(eventName, events[eventName]);}
};

document.removeEvent = function(eventName, eventHandler){
    this.removeEventListener(eventName, eventHandler, false);
};

})(); // end prototype modifications.

var Helper = {
    cap: function(value, min, max){
        return Math.min(Math.max(value, min), max);
    },
    random: function(min, max){
        return Math.random() * (max - min) + min;
    }
};

var Cursor = function(){

    // binding an instance method...
    this.movement = this.movement.bind(this);

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

    isPressed: false,
    callbacks: [],
    moveEndCallbacks: [],

    moveStart: function(eventName){
        this.isPressed = true;
        var movement = this.movement; // this has be statically bound...
        return (function(event){
            event.preventDefault();
            this.reset();
            document.addEvent(eventName, movement); // move on subsequent moves
        }).bind(this);
    },

    moveEnd: function(eventName){
        this.isPressed = false;
        var movement = this.movement; // this has be statically bound...
        return (function(){
            document.removeEvent(eventName, movement);
            this.momentum();
            this.moveEndCallbacks.forEach(function(callback){
                callback();
            });
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
        var delta = this.lastDelta,
            damp = 0.94, delay = 30;

        if (this.momentumTimer) this.stopMomentum();

        var calcMomentum = (function(){
            if (delta.length() < 0.1) return;

            this.movement(null, (delta = delta.scale(damp)));

            this.momentumTimer = setTimeout(calcMomentum, delay);
        }).bind(this);

        calcMomentum();
    },

    addMovementListener: function(callback){
        this.callbacks.push(callback);
    },

    addMoveEndListener: function(callback) {
        this.moveEndCallbacks.push(callback);
    }

};

var AutoCube = function(element, interval, delay){
    this.elements = {
        container: element,//document.querySelector('div.cube-container'),
        //wrapper: element.querySelector('div.cube-wrapper'),//document.querySelector('div.cube-wrapper'),
        cube: element.querySelector('div.cube')//document.querySelector('div.cube')
    };

    this.__i = 1;
    var self = this;
    setTimeout(function() {
        self.updatePerspective(new Vector(0.0, 1.0 / 6 * self.__i++));
        setInterval(function() {
            //console.log(self.__i);
            self.updatePerspective(new Vector(0.0, 1.0 / 6 * self.__i++));
        }, interval);
    }, delay);

    this.initResize();
};

AutoCube.prototype = {

    initResize: function(){
        var container = this.elements.container,
            cube = this.elements.cube;

        var resize = (function(){
            if (this.autopilot) this.autopilot();

            var width = container.clientWidth,
                height = container.clientHeight,
                dimension = Math.min(width, height);

            cube.size = dimension;

            return resize;
        }).bind(this);

        window.addEventListener('resize', resize(), false);
    },

    makeInteractive: function(){
        this.init3d();
        this.frontPerspective();
    },

    init3d: function(){
        var cubes = Array.slice(this.elements.container.querySelectorAll('div.cube'));

        cubes.forEach(function(cube) {
            for (var i = 0; i < 6; i++) {
                var side = document.createElement('div');
                cube.appendChild(side);
            }
        });
    },

    shiftPerspective: function(shift){
        var width = this.elements.cube.size;
        this.updatePerspective(this.perspective.add(shift.scale(1 / width)));
    },

    randomPerspective: function(){
        var x = Helper.random(-0.20, 0.20),
            y = Helper.random(-0.10, 0.10);
        this.updatePerspective(new Vector(x, y));
    },

    frontPerspective: function(){
        this.updatePerspective(new Vector(0, 0));
    },

    updatePerspective: function(perspective){
        this.perspective = perspective;
        this.elements.cube.rotateX(-perspective.y * 360);
    }
};

function initAutoCube(container, interval, delay) {
    if (!Modernizr.csstransforms){
        container.addClass('not-supported');
        //support.addClass('visible');
    } else {
        var cube = new AutoCube(container, interval, delay);
        if (Modernizr.csstransforms3d){
            cube.makeInteractive();
        } else {
            container.addClass('partially-supported');
            //support.addClass('visible');
        }
    }
}
