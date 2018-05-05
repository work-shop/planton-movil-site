<?php $page_ID = get_the_ID(); ?>
<div class="page-hero container-fluid">

    <?php if ( $hero_image = get_field( 'background_image', $page_ID ) ) : ?>
        <div class="page-hero-image-box image-box">
            <div class="masked-image" data-tint-color="<?php echo $hero_image['image_tint_color']; ?>" data-opacity="<?php echo $hero_image['image_mask_tint_opacity']; ?>" data-image-width="<?php echo $hero_image['image']['sizes']['large-width']; ?>" data-image-height="<?php echo $hero_image['image']['sizes']['large-height'];?>" style="background-image:url('<?php echo $hero_image['image']['sizes']['large']; ?>');">
                <div class="page-hero-image-mask image-mask" data-tint-color="<?php echo $hero_image['image_tint_color']; ?>" data-opacity="<?php echo $hero_image['image_mask_tint_opacity']; ?>"></div>
            </div>
        </div>
    <?php endif; ?>

    <div class="page-hero-content row mb4">
        <div class="col-xs-12 offset-xs-0">
            <?php /** @todo factor into module. */ ?>
            <?php $title = get_field('page_name', $page_ID ); ?>
            <?php $desc = get_field('page_description', $page_ID ); ?>
            <?php $tag = 'h1' ?>
            <?php include( locate_template('partials/heading_english_espanol.php') ); ?>
        </div>
        <div class="col-sm-10 offset-sm-1">
            <div class="page-hero-description row hidden-xs">
                <div class="col-sm-6">
                    <p class="page-hero-description-english english">
                        <span class="color-backed bold"><?php echo $desc['english']; ?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <p class="page-hero-description-espanol espanol">
                        <span class="color-backed bold"><?php echo $desc['espanol']; ?></span>
                    </p>
                </div>
            </div>
            <?php if ( $page_ID == 5 ) : ?>
                <div class="row centered mt2">
                    <a class="home-page-link mr1" href="/#contact">Contact / Contacto</a>
                </div>
            <?php endif; ?>
            <div class="page-down-arrow row visible-xs">
                <div class="col-xs-8 offset-xs-2">
                    <a href="#content" class="page-down-arrow-button home-page-link centered mt8"><span class="icon icon large " data-icon="Ï"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
