(function(){
    let video = document.querySelector('.video-js');
    let playPauseBtn = document.querySelector('playerPauseBtn');

    function bindEvents(){
        playPauseBtn.addEventListener('click',playPause);
    }
    bindEvents()

    function playPause(){
        if(video.pause){
            playPauseBtn.classList.remove("fa-pause");
            playPauseBtn.classList.ad("fa-play");
            video.pause();
        }
    }
})();