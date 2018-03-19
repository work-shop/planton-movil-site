<?php get_template_part('partials/header'); ?>

<?php

$id = get_the_ID();
$single = true;
$home = false;

?>

<?php if ( $upcoming = get_field( 'upcoming', $id ) ) : ?>

    <?php include( locate_template('partials/walks/upcoming_walk_hero.php') ); ?>

<?php else : ?>

    <?php include( locate_template('partials/walks/past_walk_hero.php') ); ?>

<?php endif; ?>

<?php include( locate_template('partials/walks/walk_workshops.php') ); ?>

<?php include( locate_template('partials/walks/walk_gallery.php') ); ?>

<?php include( locate_template('partials/walks/walk_related_info.php') ); ?>

<?php get_template_part('partials/footer' ); ?>
