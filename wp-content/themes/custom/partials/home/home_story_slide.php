<?php
    $page_ID = 292;
?>
<div class="home-slide row">
    <div class="home-slide-content-scrolling page-hero-content row">
        <div class="col-sm-8 offset-sm-2">
            <?php /** @todo factor into module. */ ?>
            <?php $title = get_field('page_name', $page_ID ); ?>
            <?php $desc = get_field('page_description', $page_ID ); ?>
            <h1 class="page-hero-tagline tagline bold">
                <span class="page-hero-title-english english"><?php echo $title['english']; ?><span class="page-hero-title-slash">/</span></span>
                <span class="page-hero-title-espanol espanol"><?php echo $title['espanol']; ?></span>
            </h1>
            <div class="page-hero-description row mb2">
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
            <div class="row">
                <div class="offset-sm-3 col-sm-6 centered">
                    <a class="home-page-link" href="<?php echo get_permalink( $page_ID ); ?>">More <span>/</span> Más</a>
                </div>
            </div>
        </div>
    </div>
</div>
