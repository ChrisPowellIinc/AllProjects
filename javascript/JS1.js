 var transformProp = Modernizr.prefixed('transform');

    function Carousel3D ( el ) {
      this.element = el;

      this.rotation = 0;
      this.panelCount = 10;
      this.totalPanelCount = this.element.children.length;
      this.theta = 0;
      //NEW CODE
      this.activePanel = -(this.rotation/(360/this.panelCount)) + 1;
      //NEW CODE

      this.isHorizontal = true;

    }

    Carousel3D.prototype.modify = function() {

      var panel, angle, i;

      this.panelSize = this.element[ this.isHorizontal ? 'offsetWidth' : 'offsetHeight' ];
      this.rotateFn = this.isHorizontal ? 'rotateY' : 'rotateX';
      this.theta = 360 / this.panelCount;

      // do some trig to figure out how big the carousel
      // is in 3D space
      this.radius = Math.round( ( this.panelSize / 2) / Math.tan( Math.PI / this.panelCount ) );

      for ( i = 0; i < this.panelCount; i++ ) {
        panel = this.element.children[i];
        angle = this.theta * i; 
        panel.style.opacity = 1;
        panel.style.backgroundColor = 'hsla(' + angle + ', 100%, 50%, 0.8)';
        // rotate panel, then push it out in 3D space
        //Handles if count < 3. Automates the panel size

        //NEW CODE (resolves pixelation on Z-Index)
        panel.style[ transformProp ] = this.rotateFn + '(' + angle + 'deg) translateZ(' + this.radius + 'px)';
      }

      // NEW CODE
      for ( ; i < this.totalPanelCount; i++ ) {
        panel = this.element.children[i];
        panel.style.opacity = 1;
        panel.style[ transformProp ] = 'none';
      }
      // NEW CODE

      // adjust rotation so panels are always flat
      this.rotation = Math.round( this.rotation / this.theta ) * this.theta;

      this.transform();

    };

    Carousel3D.prototype.transform = function() {
      // push the carousel back in 3D space,
      // and rotate it

      // NEW CODE (handles pixelation of z-index)
      this.element.style[ transformProp ] = 'translateZ(-' + this.radius + 'px) ' + this.rotateFn + '(' + this.rotation + 'deg)'; 
      //Turn off current display. 
      //Gets the panel to rotate to (slide to pg3 => 3)
    };



    var init = function() {


      var carousel = new Carousel3D( document.getElementById('carousel') ),
          axisButton = document.getElementById('toggle-axis'),
          navButtons = document.querySelectorAll('#navigation button'),
          pgButtons = document.querySelectorAll('#go-to button'),

          onNavButtonClick = function( event ){
            var increment = parseInt( event.target.getAttribute('data-increment') );
            carousel.rotation += carousel.theta * increment * -1;
            carousel.transform();
          },

          onPageButtonClick = function( event ){
            var increment = parseInt( event.target.getAttribute('data-increment') ) - 1;
            carousel.rotation = 0;
            carousel.rotation += carousel.theta * increment * -1;
            carousel.transform();
          };

      // populate on startup
      carousel.modify();


      axisButton.addEventListener( 'click', function(){
        carousel.isHorizontal = !carousel.isHorizontal;
        carousel.modify();
      }, false);

      for (var i=0; i < 2; i++) {
        navButtons[i].addEventListener( 'click', onNavButtonClick, false);
      }

      for (var i=0; i < pgButtons.length; i++) {
        pgButtons[i].addEventListener( 'click', onPageButtonClick, false);
      }

      document.getElementById('toggle-backface-visibility').addEventListener( 'click', function(){
        carousel.element.toggleClassName('panels-backface-invisible');
      }, false);

      setTimeout( function(){
        document.body.addClassName('ready');
      }, 0);


    };

    window.addEventListener( 'DOMContentLoaded', init, false);
    window.addEventListener( 'DOMContentLoaded', init, false);