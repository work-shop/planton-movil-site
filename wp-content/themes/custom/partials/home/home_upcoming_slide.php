<?php if ($walk = get_field( 'upcoming_walk', 8 )[0] ) : ?>
    <div class="home-slide row">
        <div class="home-slide-content-relative offset-sm-2 col-sm-8">
            <a href="<?php echo get_the_permalink( $walk ); ?>">
                <h2 class="home-slide-upcoming-walk bold mb1"><?php echo get_field( 'date', $walk ); ?></h2>
                <h2 class="home-slide-upcoming-walk bold mb1"><?php echo get_field( 'location', $walk ); ?></h2>
            </a>
        </div>
    </div>
<?php endif; ?>
