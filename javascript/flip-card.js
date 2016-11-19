var cardflipx = function() {
  var card = document.getElementById('card');
  
  document.getElementById('M1logo').addEventListener( 'click', function(){ 
  card.toggleClassName('flipped');
  }, false);
  
    document.getElementById('M1logo').addEventListener( 'touchstart', function(){
    card.toggleClassName('flipped');
  }, false);

  
};

window.addEventListener('DOMContentLoaded', cardflipx, false);
