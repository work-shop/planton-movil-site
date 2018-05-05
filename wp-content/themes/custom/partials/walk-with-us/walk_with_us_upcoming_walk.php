<?php
    $walk = get_field('upcoming_walk', $id );
?>

<?php if ( $walk ) : ?>
    <?php $walk = $walk[0]; ?>
    <section class="walk-with-us-upcoming-walk container-fluid mb2">

        <?php
            $single = false;
            $home = true;
            $even = true;
            $post = $walk;
            $upcoming = get_field('upcoming', $walk->ID);
            $upcoming_walk_image = get_field('upcoming_walk_image', $id );
        ?>
        <div class="row mb2">
            <div class="col-sm-8 offset-sm-2">
                <?php include( locate_template('partials/cards/upcoming_walk.php') ); ?>
            </div>
        </div>
    </section>
<?php endif; ?>
