var SpinnableCarousel = function(element, isHorizontal)
{
    ////////////////////////////////////////////
    // For loading in a page as the carousel orients itself.
    this.jsonSource;
    ////////////////////////////////////////////
    this.isHorizontal = isHorizontal;

    this.__perspective = 0;
    this.__orientationAnimationTimer = null;
    this.__elements = {
        container: element,
        carousel: element.querySelector('div.spinnable-carousel')
    };

    this.__init();
};

SpinnableCarousel.prototype = {

    ////////////////////////////////////////////
    // For loading in a page as the carousel orients itself.
    setJsonSource: function(s) {
        this.jsonSource = s;
        loadJsonIntoElement(this.jsonSource.carousel[0], this.__elements.carousel.children[0]);
    },
    ////////////////////////////////////////////

    __init: function() {
        this.__initResize();
        this.__init3d();
        this.__initInteraction();
        this.__updatePerspective(0);
    },

    __initResize: function() {
        var container = this.__elements.container,
            caro = this.__elements.carousel;

        var resize = (function(){

            var width = container.clientWidth,
                height = container.clientHeight,
                dimension = Math.min(width, height);

            caro.size = dimension;

            return resize;
        }).bind(this);

        window.addEventListener('resize', resize(), false);
    },

    __init3d: function() {
        var caro = this.__elements.carousel;

        for (var i = 0; i < 6; i++) {
            var side = document.createElement('div');
            caro.appendChild(side);
        }
    },

    __initInteraction: function() {
        var c = new Cursor(this.__elements.carousel);
        // As the cursor drags the carousel, turn it and
        // turn off the auto-orientation timer.
        c.addMovementListener((function(delta) {
            if (this.isHorizontal)
                this.__shiftPerspective(-delta.x);
            else
                this.__shiftPerspective(delta.y);
            clearInterval(this.__orientationAnimationTimer);
            this.__orientationAnimationTimer = null;
        }).bind(this));
        // When the cursor starts dragging the carousel,
        // turn off the auto-orientation timer.
        c.addMoveStartListener((function() {
            clearInterval(this.__orientationAnimationTimer);
            this.__orientationAnimationTimer = null;
        }).bind(this));
        // When the cursor is done dragging the carousel,
        // stop the momentum after a bit, then auto-orient
        // the carousel to the nearest side.
        c.addMoveEndListener((function() {
                var self = this;

                setTimeout(function() {
                    c.stopMomentum();

                    var numSides = self.__elements.carousel.children.length;
                    var rotationAmount = 1.0 / numSides;
                    var newPerspective = rotationAmount * Math.round(self.__perspective / rotationAmount)

                    self.__animateToPerspectiveWithDuration(newPerspective, 500);
                }, 1000);
        }).bind(this));
    },

    __animateToPerspectiveWithDuration: function(perspective, duration) {
        // Create an animation to animate the y value of the perspective.
        var anim = new NumberAnimation();
        anim.startValue = this.__perspective;
        anim.endValue = perspective;
        anim.easingCurve = EasingCurves.EaseInOut;
        anim.stepAmount = 0.01;

        // Start the timer for the animation.
        var self = this;
        // Make sure the timer is null before setting it again to avoid getting
        // the carousel stuck.
        if (this.__orientationAnimationTimer == null) {
            this.__orientationAnimationTimer = setInterval(function() {
                // Update the animation and use the value to update the perspective.
                anim.step();
                var stepPerspective = anim.currentValue();
                self.__updatePerspective(stepPerspective);
                // If the animation is done, clear the timer. Otherwise, it will keep adjusting
                // to the end value of the animation as you try to interact with the carousel.
                if (anim.isDone()) {
                    clearInterval(self.__orientationAnimationTimer);
                    self.__orientationAnimationTimer = null;
                    ////////////////////////////////////////////
                    // For loading in a page as the carousel orients itself.
                    var panelNum = self.getPanelNumberFromPerspective(self.__perspective);
                    loadJsonIntoElement(self.jsonSource.carousel[panelNum], self.__elements.carousel.children[panelNum]);
                    ////////////////////////////////////////////
                }
            }, duration * anim.stepAmount);
        }
    },

    __shiftPerspective: function(shift) {
        var width = this.__elements.carousel.size;
        this.__updatePerspective(this.__perspective + shift * (1 / width));
    },

    __updatePerspective: function(perspective) {
        this.__perspective = perspective;

        var caro = this.__elements.carousel;
        var rotateFn = this.isHorizontal ? 'rotateY' : 'rotateX';

        // do some trig to figure out how big the carousel
        // is in 3D space
        var panelSize = caro[ this.isHorizontal ? 'offsetWidth' : 'offsetHeight' ];
        var numSides = caro.children.length;
        var radius = Math.round((panelSize / 2) / Math.tan( Math.PI / numSides ));
        var degrees = -perspective * 360;
        var rotation = degrees % 360;

        var theta = 360 / numSides;

        // Rotate each of the panels.
        for (var i = 0; i < numSides; i++ ) {
            var panel = caro.children[i];
            var angle = Math.round(theta * i);

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
        caro.style[CSS.transform] = 'translateZ(-' + radius + 'px) ' + rotateFn + '(' + rotation + 'deg)';  
    },

    /**
     * @param {double} perspective - the desired perspective of the carousel
     * @return {int} the number of the panel that will be facing the user
     *      if the carousel is turned to that perspective
     */
    getPanelNumberFromPerspective: function(perspective)
    {
        // Because the carousel starts at 0deg and rotates clockwise,
        // the rotation becomes -theta, -2*theta, -3*theta, etc. as
        // it goes to the next page. Therefore, the first panel should
        // be shown not when rotation is theta, but when it is -theta.
        var numSides = this.__elements.carousel.children.length;
        var theta = 360 / numSides;
        var rotation = perspective * 360;
        var pageNum = Math.round(rotation / theta);
        var panelNum = pageNum % numSides;
        if (panelNum < 0)
            return numSides + panelNum;
        return panelNum;
    }
};
