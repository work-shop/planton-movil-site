<div class="walk-gallery-sounds row mb1">
    <div class="col-sm-6">
        <div class="audio row">
            <div class="col-sm-6">
                <p class="small english">Listen to audio from this walk.</p>
            </div>
            <div class="col-sm-6">
                <p class="small espanol">Escucha el audio de esta caminata.</p>
            </div>
        </div>
        <audio controls>
            <source src="<?php echo $sound['url']; ?>" type="<?php echo $sound['mime_type']; ?>">
            <div class="col-sm-6"><p class="english">This walk has an audio recording, but your browser doesn't support HTML5 Audio!</p></div>
            <div class="col-sm-6"><p class="espanol">¡Esta caminata tiene una grabación de audio, pero su navegador no admite nuestro archivo!</p></div>
        </audio>
    </div>
</div>
