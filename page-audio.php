<?php
/**
 * Template Name: Audio Page
 *
 * @package Exit_Game_Theme
 */

get_header(); ?>

<div class="main-content">
    <div class="container">
        <h1 class="h1" style="text-align: center;">Mįslė</h1>

        <div class="audio-wrapper">
            <div class="audio-info">
                <p class="audio-author">Madcap</p>
                <p class="audio-caption">Coming Your Way</p>
            </div>
            <div class="audio-frame">
            <div class="custom-audio-player">
    <audio id="audio-player" src="<?php echo get_template_directory_uri(); ?>/assets/audio/sample-audio.mp3" preload="auto"></audio>
    <div class="controls">
        <button id="play-pause">
            <i class="fas fa-play"></i> <!-- Play Icon -->
        </button>
        <input type="range" id="seek-bar" value="0">
        <span id="current-time">0:00</span> / <span id="duration">0:00</span>
        <input type="range" id="volume-slider" min="0" max="1" step="0.1" value="1"> <!-- Volume Slider -->
    </div>
</div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>