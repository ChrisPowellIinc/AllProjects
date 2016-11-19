var infouserboxex = function() {
	  var arrowposx = document.getElementById('arrowpos');
	  var adboxboxx = document.getElementById('Adboxbox');
	  var infoboxx = document.getElementById('InfoBox');
	  var coverall = document.getElementById('profileimage');

		document.getElementById('arrowpos').addEventListener( 'click', function(){
	  arrowposx.toggleClassName('downarrow');
	  adboxboxx.toggleClassName('adboxboxup');
	  infoboxx.toggleClassName('infoboxup');
	  coverall.toggleClassName('procollapse');
	  }, false);
	  
		document.getElementById('arrowpos').addEventListener( 'touchstart', function(){
	  arrowposx.toggleClassName('downarrow');
	  adboxboxx.toggleClassName('adboxboxup');
	  infoboxx.toggleClassName('infoboxup');
	  coverall.toggleClassName('procollapse');
	  }, false);
	
	  
	};
	
	window.addEventListener('DOMContentLoaded', infouserboxex, false);