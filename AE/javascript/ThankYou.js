var init = function() {
  var card = document.getElementById('thankyou');
  
  document.getElementById('SubmitTY').addEventListener( 'click', function(){ 
  card.toggleClassName('visiblety');
  }, false);
  
    document.getElementById('SubmitTY').addEventListener( 'touchstart', function(){
    card.toggleClassName('visiblety');
  }, false);

  
};

window.addEventListener('DOMContentLoaded', init, false);