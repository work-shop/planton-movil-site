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
                <span class="section-title-english english bold">Press<span class="section-title-slash">/</span></span>
                <span class="section-title-espanol espanol bold">Prensa</span>
            </h5>
        </div>
        <div class="col-sm-7">
            <?php foreach ($press as $i => $item) : ?>

                <?php $pdf = get_field('publication_document', $item->ID); ?>
                <?php $link = get_field('link', $item->ID );  ?>

                <div class="press-item row">
                    <div class="col-sm-12 mb3">

                        <?php if ( $link ) : ?><a class="" href="<?php echo $link ?>"><?php else : ?><span><?php endif; ?>

                            <?php $date = DateTime::createFromFormat( 'Ymd', get_field('date', $item->ID ) ); ?>
                            <p class="page-press-title bold medium-dark mb0"><span class="publicity-link"><?php echo $item->post_title; ?></span></p>
                            <p class="small medium"><?php echo $date->format('Y'); ?>. <?php echo get_field('name', $item->ID ); ?>.</p>
                        <?php if ( $link ) : ?></a><?php else : ?></span><?php endif; ?>

                        <?php if ( $pdf ) : ?>
                            <a class="small home-page-link" href="<?php echo $pdf['url']; ?>" target="_blank">
                                View PDF
                            </a>
                        <?php endif; ?>

                    </div>
                </div>



            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
