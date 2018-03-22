<div class="home-slide row">
    <div class="home-slide-content-relative col-xs-12 offset-xs-0 offset-sm-1 col-sm-10">
        <h1 class="home-slide-tagline bolder mb1"><?php echo get_field('site_tagline', 8); ?></h1>
        <?php if ( $links = get_field('links', 8) ) : ?>
        <div class="home-slide-links">
            <?php foreach ($links as $i => $link) : ?>

                <a class="home-page-link" href="<?php echo $link['url']; ?>"><?php echo $link['link_text']; ?></a>

            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
