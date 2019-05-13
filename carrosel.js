var flkty = new Flickity( '.carousel', {
    autoPlay: 2500
  });


 


  



 
  var playButton = document.querySelector('.play-button');
  playButton.addEventListener( 'click', function() {
    flkty.playPlayer();
  });
 
  var stopButton = document.querySelector('.stop-button');
  stopButton.addEventListener( 'click', function() {
    flkty.stopPlayer();
  });
 
  var pauseButton = document.querySelector('.pause-button');
  pauseButton.addEventListener( 'click', function() {
    flkty.pausePlayer();
  });
 
  var unpauseButton = document.querySelector('.unpause-button');
  unpauseButton.addEventListener( 'click', function() {
    flkty.unpausePlayer();
  });
 