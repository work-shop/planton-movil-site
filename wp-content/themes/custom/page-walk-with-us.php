<?php get_template_part('partials/header'); ?>

<div class="walk-with-us-stage">

    <?php $id = get_the_ID() ?>

    <?php get_template_part( 'partials/page_hero' ); ?>

    <?php get_template_part( 'partials/walk-with-us/walk_with_us_upcoming_walk' ); ?>

    <?php get_template_part( 'partials/walk-with-us/walk_with_us_questions' ); ?>

    <?php get_template_part( 'partials/walk-with-us/walk_with_us_callout' ); ?>

</div>

<?php get_template_part('partials/footer' ); ?>
