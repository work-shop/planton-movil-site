<?php if ($walk = get_field( 'upcoming_walk', 8 )[0] ) : ?>
    <div class="home-slide row">
        <div class="home-slide-content-relative col-sm-12">
            <?php
                $single = false;
                $home = true;
                $even = true;
                $post = $walk;

            ?>
            <?php include( locate_template('partials/cards/past_walk.php') ); ?>
        </div>
    </div>
<?php endif; ?>
