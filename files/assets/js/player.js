if(document.querySelector('audio')) {
  const allPlayers = document.querySelectorAll('audio');
  let globalAudioPlaying = false;

  const minTommss = (minutes) => {
    const sign = minutes < 0 ? "-" : "";
    const min = Math.floor(Math.abs(minutes));
    const sec = Math.floor((Math.abs(minutes) * 60) % 60);
    return sign + (min < 10 ? "0" : "") + min + ":" + (sec < 10 ? "0" : "") + sec;
  }

  const pauseAllPlayers = () => {
    allPlayers.forEach(player => {
      const playButton = player.parentElement.querySelector('.media-player-play');
      playButton.classList.remove('playing');
      player.pause();
    })
  }

  allPlayers.forEach(player => {
    const playButton = player.parentElement.querySelector('.media-player-play');
    const backButton = player.parentElement.querySelector('.media-player-previous');
    const progressBar = player.parentElement.querySelector('.progress-bar progress');

    player.onloadedmetadata = () => {
      progressBar.parentElement.querySelector('.end-time').innerHTML = minTommss((player.duration / 60).toString());
    }

    player.onended = () => {
      globalAudioPlaying = false;
      playButton.classList.remove('playing');
    }

    playButton.addEventListener('click', function() {
      if(player.paused && !globalAudioPlaying) {
        player.play();
        globalAudioPlaying = true;
        playButton.classList.add('playing');
      } else if(player.paused && globalAudioPlaying) {
        pauseAllPlayers();
        playButton.classList.add('playing');
        player.play();
      } else if(!player.paused) {
        player.pause();
        globalAudioPlaying = false;
        playButton.classList.remove('playing');
      }
    });

    backButton.addEventListener('click', function() {
      player.currentTime = 0;
    })

    player.addEventListener('timeupdate', function() {
      progressBar.setAttribute('value', (player.currentTime / player.duration).toString());
      progressBar.parentElement.querySelector('.start-time').innerHTML = minTommss((player.currentTime / 60).toString());
    })

  })
}

if(document.querySelector('video')) {
  const allPlayers = document.querySelectorAll('video');
  let globalVideoPlaying = false;

  const pauseAllPlayers = () => {
    allPlayers.forEach(player => {
      const playButton = player.parentElement.querySelector('.media-player-play');
      playButton.style.display = 'block';
      player.pause();
    })
  }

  allPlayers.forEach(player => {
    const playButton = player.parentElement.querySelector('.media-player-play');
    const videoElement = player.parentElement.querySelector('.media-player');

    player.onended = () => {
      globalVideoPlaying = false;
      playButton.style.display = 'block';
    }

    videoElement.addEventListener('click', function() {
      if(player.paused && !globalVideoPlaying) {
        player.play();
        globalVideoPlaying = true;
        playButton.style.display = 'none';
      } else if(player.paused && globalVideoPlaying) {
        pauseAllPlayers();
        playButton.style.display = 'none';
        player.play();
      } else if(!player.paused) {
        player.pause();
        globalVideoPlaying = false;
        playButton.style.display = 'block';
      }
    })
  })
}
