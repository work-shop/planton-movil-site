<div id="background" class="background">
<?php foreach ( get_field( 'images', 8 ) as $key => $object ) : ?>

    <div class="home-image-block" data-vertical-position="<?php echo $object['position'] ?>">
        <img class="home-image" src="<?php echo $object['image']['sizes']['large']; ?>" />
        <div class="home-image-mask" data-tint-color="<?php echo $object['masking']['tint_color']; ?>" data-opacity="<?php echo $object['masking']['opacity']?>"></div>
    </div>

<?php endforeach; ?>
</div>
