<?php
    $shows = get_posts(array(
        'post_type' => 'publicity',
        'posts_per_page' => -1,
        'category' => 3
    ));
?>

<?php if ( count($shows) > 0 ) : ?>
<section class="media-press container-fluid mb6">
    <div class="row">

        <div class="col-sm-3 offset-sm-1">
            <h5 class="page-hero-tagline tagline bold">
                <span class="section-title-english english bold">Events<span class="section-title-slash">/</span></span>
                <span class="section-title-espanol espanol bold">Eventos</span>
            </h5>
        </div>
        <div class="col-sm-7">
            <?php foreach ($shows as $j => $item) : ?>

                <?php if ($j % 2 == 0) : ?><div class="press-item row"><?php endif; ?>

                    <div class="col-sm-6 mb2">
                        <div class="row">
                            <?php $image_url = wp_get_attachment_url( get_post_thumbnail_id( $item->ID ), 'thumbnail' ); ?>
                            <div class="col-xs-4 col-sm-4">
                                <img class="show-bg-image" src="<?php echo $image_url; ?>" alt="" />
                            </div>
                            <div class="col-xs-8 col-sm-8">
                                <a class="" href="<?php echo get_field('link', $item->ID ); ?>" target="_blank">
                                    <?php $date = DateTime::createFromFormat( 'Ymd', get_field('date', $item->ID ) ); ?>
                                    <p class="page-press-title bold medium-dark mb0"><span class="publicity-link"><?php echo $item->post_title; ?></span></p>
                                    <p class="small medium"><?php echo $date->format('Y'); ?>. <?php echo get_field('name', $item->ID); ?></p>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php if ($j % 2 == 1) : ?></div><?php endif; ?>

            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
