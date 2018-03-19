<?php

    $id = get_the_ID();
    $sections = get_field('sections', $id);
    $hero_image = get_field( 'background_image', $id );
    $color = $hero_image['image_tint_color'];

?>
<section class="story-sections container-fluid mt2">
    <?php foreach ($sections as $i => $section ) : ?>
        <div class="row">

            <?php if ( $section['section_type'] == 'text' ) : ?>

                <?php include(locate_template('partials/story/story_section_text.php')); ?>

            <?php else : ?>

                <?php include( locate_template('partials/story/story_section_image.php') ); ?>

            <?php endif; ?>

        </div>

    <?php endforeach; ?>
</section>
