var init = function() {
  var card = document.getElementById('thankyou');
  
  document.getElementById('signupbtn').addEventListener( 'click', function(){ 
  card.toggleClassName('visiblety');
  }, false);
  
    document.getElementById('signupbtn').addEventListener( 'touchstart', function(){
    card.toggleClassName('visiblety');
  }, false);

  
};

window.addEventListener('DOMContentLoaded', init, false);