<?php
$description = get_field('about_the_walk', $id);
$sound = get_field('sound', $id);
$images = get_field('images', $id);
$color = get_field( 'color', $id );
?>

<?php if ( $images ) : ?>
<section class="walk-gallery container-fluid mb8">
    <div class="walk-gallery-title row">
        <div class="col-sm-6">
            <h5 class="page-hero-tagline tagline bold">
                <span class="section-title-english english bold">The Walk<span class="section-title-slash">/</span></span>
                <span class="section-title-espanol espanol bold">El Caminar</span>
            </h5>
        </div>
    </div>
    <?php if ($description) : ?>
    <div class="walk-gallery-description row mb1">
        <div class="col-sm-4 col-xs-6">
            <p class="small english"><?php echo $description['english']; ?></p>
        </div>
        <div class="col-sm-4 col-xs-6">
            <p class="small espanol"><?php echo $description['espanol']; ?></p>
        </div>
    </div>
    <?php endif; ?>
    <?php if ($sound) : ?>

        <?php include( locate_template('partials/walks/walk_sound.php') ) ?>

    <?php endif; ?>

    <?php include( locate_template('partials/walks/walk_gallery_images.php') ); ?>

</section>
<?php endif; ?>
