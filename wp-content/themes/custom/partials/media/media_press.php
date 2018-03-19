<?php
    $press = get_posts(array(
        'post_type' => 'publicity',
        'posts_per_page' => -1,
        'category' => 2
    ));
?>

<?php if ( count($press) > 0 ) : ?>
<section class="media-press container-fluid mb4">
    <div class="row">

        <div class="col-sm-3 offset-sm-1">
            <h5 class="page-hero-tagline tagline bold">
                <span class="section-title-english english bold">Press<span class="page-hero-title-slash">/</span></span>
                <span class="section-title-espanol espanol bold">Prensa</span>
            </h5>
        </div>
        <div class="col-sm-7">
            <?php foreach ($press as $i => $item) : ?>

                <div class="press-item row">
                    <div class="col-sm-12 mb2">
                        <a class="" href="<?php echo get_field('link', $item->ID ); ?>">
                            <?php $date = DateTime::createFromFormat( 'Ymd', get_field('date', $item->ID ) ); ?>
                            <p class="page-press-title bold medium-dark mb0"><span class="publicity-link"><?php echo $item->post_title; ?></span></p>
                            <p class="small medium"><?php echo $date->format('Y'); ?>. <?php echo get_field('name', $item->ID ); ?>.</p>
                        </a>
                    </div>
                </div>



            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
