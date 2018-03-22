<?php if ($walk = get_field( 'upcoming_walk', 8 )[0] ) : ?>
    <div class="home-slide row">
        <div class="home-slide-content-relative col-sm-8 offset-sm-2">
            <?php
                $single = false;
                $home = true;
                $even = true;
                $post = $walk;
                $upcoming = get_field('upcoming', $walk->ID);

            ?>
            <?php if ( $upcoming ) : ?>
                <?php include( locate_template('partials/cards/upcoming_walk.php') ); ?>
            <?php else: ?>
                <?php include( locate_template('partials/cards/past_walk.php') ); ?>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
