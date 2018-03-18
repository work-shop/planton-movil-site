<?php if ( $shows ) : ?>
<div class="col-sm-4">
    <div class="col-sm-12">
        <h5 class="page-hero-tagline tagline bold">
            <span class="section-title-english english bold">Events<span class="page-hero-title-slash">/</span></span>
            <span class="section-title-espanol espanol bold">Eventos</span>
        </h5>
    </div>
    <div class="col-sm-12">
    <div class="row">
    <?php foreach ($shows as $i => $item) : ?>
        <div class="col-sm-12 mb2">
            <a class="publicity-link" href="<?php echo get_field('link', $item->ID ); ?>">
                <?php $date = DateTime::createFromFormat( 'Ymd', get_field('date', $item->ID ) ); ?>
                <p class="page-press-title dark"><?php echo $item->post_title; ?></p>
                <p class="smaller medium"><?php echo $date->format('F, Y'); ?></p>
            </a>
        </div>
    <?php endforeach; ?>
    </div>
    </div>
</div>
<?php endif; ?>
