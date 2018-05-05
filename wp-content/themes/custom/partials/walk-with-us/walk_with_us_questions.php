<?php
    $sections = get_field( 'sections', $id );
?>

<section class="walk-with-us-questions container-fluid mb2">

    <?php foreach ( $sections as $i => $section ) : ?>

        <?php $even = ($i % 2) == 0; ?>
        <?php include( locate_template('partials/walk-with-us/walk_with_us_question_section.php') ); ?>

    <?php endforeach; ?>

</section>
