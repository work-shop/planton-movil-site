<?php
    $sponsors = get_field('sponsors', $id);
    $partners = get_field('partners', $id);
    $shows = get_field('shows', $id);
    $press = get_field('press', $id);
?>

<section class="walk-related-info container-fluid mb4">
    <div class="row">

        <?php include(locate_template('partials/walks/walk_sponsors_and_partners.php') ); ?>

        <?php include(locate_template('partials/walks/walk_press.php') ); ?>

        <?php include(locate_template('partials/walks/walk_shows.php') ); ?>

    </div>
</section>
