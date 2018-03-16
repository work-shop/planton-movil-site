<div class="home-slide row">
    <div class="home-slide-content-relative offset-sm-1 col-sm-9">
        <h1 class="home-slide-tagline bold mb1"><?php echo get_field('site_tagline', 8); ?></h1>
        <?php if ( $links = get_field('links', 8) ) : ?>
        <div class="home-slide-links">
            <?php foreach ($links as $i => $link) : ?>

                <a class="home-page-link" href="<?php echo $link['url']; ?>"><?php echo $link['link_text']; ?></a>

            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
