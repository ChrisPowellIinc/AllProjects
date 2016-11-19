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

    callbacks: [],
    moveEndCallbacks: [],
    moveStartCallbacks: [],

    moveStart: function(eventName){
        var movement = this.movement; // this has be statically bound...
        return (function(event){
            event.preventDefault();
            this.reset();
            document.addEvent(eventName, movement); // move on subsequent moves
            this.moveStartCallbacks.forEach(function(callback){
                callback();
            });
        }).bind(this);
    },

    moveEnd: function(eventName){
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
    },

    addMoveStartListener: function(callback) {
        this.moveStartCallbacks.push(callback);
    }
};

var Cube = function(element){
    this.elements = {
        container: element,//document.querySelector('div.cube-container'),
        //wrapper: element.querySelector('div.cube-wrapper'),//document.querySelector('div.cube-wrapper'),
        cube: element.querySelector('div.cube')//document.querySelector('div.cube')
    };

    this.orientationAnimationTimer = null;
    this.initResize();
};

Cube.prototype = {

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
        this.initAutopilot();
        this.initInteraction();
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

    initAutopilot: function(){
        var cube = this.elements.cube,
            randomPerspective = this.randomPerspective.bind(this),
            movementTimer, autopilotTimer;

        var autopilot = function(){

            cube.removeClass('autopilot');

            clearTimeout(movementTimer);
            clearInterval(autopilotTimer);

            movementTimer = setTimeout(function(){

                cube.addClass('autopilot');

                clearInterval(autopilotTimer);

                //autopilotTimer = setInterval(randomPerspective, 2000);

            }, 5000);

            return autopilot;
        };

        this.autopilot = autopilot();
    },

    initInteraction: function(){
        /*new Cursor().addMovementListener((function(delta){
            this.autopilot();
            this.shiftPerspective(delta);
        }).bind(this));*/
        var c = new Cursor();
        c.addMovementListener((function(delta){
            console.log('movement')
            this.shiftPerspective(delta);
            clearInterval(this.orientationAnimationTimer);
            this.orientationAnimationTimer = null;
        }).bind(this));
        c.addMoveStartListener((function(){
            console.log('move start')
            clearInterval(this.orientationAnimationTimer);
            this.orientationAnimationTimer = null;
        }).bind(this));
        c.addMoveEndListener((function(){
            console.log('move end')
                var self = this;

                setTimeout(function() {
                    c.stopMomentum();
                    var x = self.perspective.x;
                    var y = self.perspective.y;

                    var numSides = self.elements.cube.children.length;
                    var rotationAmount = 1.0 / numSides;
                    var newY = rotationAmount * Math.round(y / rotationAmount)

                    self.animateToPerspectiveWithDuration(new Vector(x, newY), 500);
                }, 1000);
        }).bind(this));
    },

    animateToPerspectiveWithDuration: function(perspective, duration) {
        console.log('anim with duration')
        // Create an animation to animate the y value of the perspective.
        var anim = new NumberAnimation();
        anim.startValue = this.perspective.y;
        anim.endValue = perspective.y;
        anim.easingCurve = EasingCurves.EaseInOut;
        anim.stepAmount = 0.01;

        // Start the timer for the animation.
        var self = this;
        if (this.orientationAnimationTimer == null) {
            this.orientationAnimationTimer = setInterval(function() {
                // Update the animation and use the value to update the perspective.
                anim.step();
                var stepPerspective = new Vector(perspective.x, anim.currentValue());
                self.updatePerspective(stepPerspective);
                // If the animation is done, clear the timer. Otherwise, it will keep adjusting
                // to the end value of the animation as you try to interact with the carousel.
                if (anim.isDone()) {
                    clearInterval(self.orientationAnimationTimer);
                    self.orientationAnimationTimer = null;
                }
            }, duration * anim.stepAmount);
        }
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

function initCube(container) {
    if (!Modernizr.csstransforms){
        container.addClass('not-supported');
        //support.addClass('visible');
    } else {
        var cube = new Cube(container);
        if (Modernizr.csstransforms3d){
            cube.makeInteractive();
        } else {
            container.addClass('partially-supported');
            //support.addClass('visible');
        }
    }
}
