<?php $page_ID = get_the_ID(); ?>
<div class="page-hero container-fluid">

    <?php if ( $hero_image = get_field( 'background_image', $page_ID ) ) : ?>
        <div class="page-hero-image-box image-box">
            <div class="masked-image" data-tint-color="<?php echo $hero_image['image_tint_color']; ?>" data-opacity="<?php echo $hero_image['image_mask_tint_opacity']; ?>" data-image-width="<?php echo $hero_image['image']['sizes']['large-width']; ?>" data-image-height="<?php echo $hero_image['image']['sizes']['large-height'];?>" style="background-image:url('<?php echo $hero_image['image']['sizes']['large']; ?>');">
                <div class="page-hero-image-mask image-mask" data-tint-color="<?php echo $hero_image['image_tint_color']; ?>" data-opacity="<?php echo $hero_image['image_mask_tint_opacity']; ?>"></div>
            </div>
        </div>
    <?php endif; ?>

    <div class="page-hero-content row">
        <div class="col-sm-8 offset-sm-2">
            <?php /** @todo factor into module. */ ?>
            <?php $title = get_field('page_name', $page_ID ); ?>
            <?php $desc = get_field('page_description', $page_ID ); ?>
            <h1 class="page-hero-tagline tagline bold">
                <span class="page-hero-title-english english"><?php echo $title['english']; ?><span class="page-hero-title-slash">/</span></span>
                <span class="page-hero-title-espanol espanol"><?php echo $title['espanol']; ?></span>
            </h1>
            <div class="page-hero-description row">
                <div class="col-sm-6">
                    <p class="page-hero-description-english english">
                        <?php echo $desc['english']; ?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <p class="page-hero-description-espanol espanol">
                        <?php echo $desc['espanol']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
