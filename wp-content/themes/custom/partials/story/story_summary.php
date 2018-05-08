<?php $page_ID = get_the_ID(); ?>
<?php $desc = get_field('page_description', $page_ID ); ?>

<section class="container-fluid mb4 about-summary">
    <div class=" row">
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
</section>
