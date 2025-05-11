document.addEventListener('DOMContentLoaded', function () {
    const audio = document.getElementById('audio-player');
    const playPauseButton = document.getElementById('play-pause');
    const playPauseIcon = playPauseButton.querySelector('i');
    const seekBar = document.getElementById('seek-bar');
    const volumeSlider = document.getElementById('volume-slider');
    const currentTimeDisplay = document.getElementById('current-time');
    const durationDisplay = document.getElementById('duration');

    // Play/Pause functionality
    playPauseButton.addEventListener('click', function () {
        if (audio.paused) {
            audio.play();
            playPauseIcon.classList.remove('fa-play');
            playPauseIcon.classList.add('fa-pause');
        } else {
            audio.pause();
            playPauseIcon.classList.remove('fa-pause');
            playPauseIcon.classList.add('fa-play');
        }
    });

    // Volume control functionality
    volumeSlider.addEventListener('input', function () {
        audio.volume = volumeSlider.value;
        const volumeValue = volumeSlider.value * 100; // Convert to percentage
        volumeSlider.style.background = `linear-gradient(to right, #fffc04 ${volumeValue}%, #444 ${volumeValue}%)`; // Update filled portion
    });

    // Update seek bar and time display
    audio.addEventListener('timeupdate', function () {
        const currentTime = Math.floor(audio.currentTime);
        const duration = Math.floor(audio.duration);
        seekBar.value = (audio.currentTime / audio.duration) * 100 || 0;
        seekBar.style.background = `linear-gradient(to right, #fffc04 ${seekBar.value}%, #444 ${seekBar.value}%)`; // Update listened portion
        currentTimeDisplay.textContent = formatTime(currentTime);
        durationDisplay.textContent = formatTime(duration);
    });

    // Seek functionality
    seekBar.addEventListener('input', function () {
        audio.currentTime = (seekBar.value / 100) * audio.duration;
    });

    // Format time in mm:ss
    function formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = seconds % 60;
        return `${minutes}:${remainingSeconds < 10 ? '0' : ''}${remainingSeconds}`;
    }
});