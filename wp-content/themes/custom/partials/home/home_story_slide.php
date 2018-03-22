<?php
    $page_ID = 292;
?>
<div class=" home-slide">
    <div class="home-slide-content-relative page-hero-content row">
        <div class="col-sm-10 offset-sm-1">
            <?php $title = get_field('page_name', $page_ID ); ?>
            <?php $desc = get_field('page_description', $page_ID ); ?>
            <div class="row">
                <div class="col-sm-6 offset-sm-3">
                    <?php $tag = 'h3'; ?>
                    <?php include( locate_template('partials/heading_english_espanol.php') ); ?>
                </div>
            </div>
            <div class="page-hero-description row mb2">
                <div class="col-sm-6">
                    <p class="page-hero-description-english english">
                        <span class="color-backed bold small"><?php echo $desc['english']; ?>
                    </p>
                </div>
                <div class="col-sm-6">
                    <p class="page-hero-description-espanol espanol">
                        <span class="color-backed bold small"><?php echo $desc['espanol']; ?></span>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="offset-sm-3 col-sm-6 centered">
                    <a class="home-page-link" href="<?php echo get_permalink( $page_ID ); ?>">More <span>/</span> Más</a>
                </div>
            </div>
        </div>
    </div>
</div>
