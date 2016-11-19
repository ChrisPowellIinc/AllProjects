var init = function()
{
	var pages = [ "ic.html", "sp.html", "tr.html", "lr.html", "tm.html", "crepm.html", "fpm.html", "fis.html", "pdm.html", "gm.html", "scm.html" ];
	var carousel = new Carousel3D(document.getElementById('carousel2'), pages);
	var axisButton = document.getElementById('toggle-axis');
	var navButtons = document.querySelectorAll('#navigation button');
	var pgButtons = document.querySelectorAll('#go-to button');
	
	var onNavButtonClick = function( event ) {
        var increment = parseInt( event.target.getAttribute('data-increment') );
        if (increment > 0)
        	carousel.next();
        else
        	carousel.previous();
	};
    var onPageButtonClick = function( event ){
        var increment = parseInt( event.target.getAttribute('data-increment') ) - 1;
        carousel.turnToSide(increment);
    };

 	// populate on startup
	axisButton.addEventListener( 'click', function(){
		carousel.isHorizontal = !carousel.isHorizontal;
	}, false);

	for (var i=0; i < 2; i++) {
		navButtons[i].addEventListener( 'click', onNavButtonClick, false);
	}

	for (var i=0; i < pgButtons.length; i++) {
		pgButtons[i].addEventListener( 'click', onPageButtonClick, false);
	}

	setTimeout( function(){
		document.body.addClassName('ready');
	}, 0);
};

init();