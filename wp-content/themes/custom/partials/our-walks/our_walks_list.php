<?php

$posts = get_posts( array(
    'posts_per_page' => -1,
    'post_type' => 'walks'
) );

$single = false;

?>
<div class="container-fluid">
    <?php foreach( $posts as $i => $post) : ?>

        <?php

            $even = ($i % 2) === 0;

            if ( get_field( 'upcoming', $post->ID ) ) {

                include( locate_template( 'partials/cards/upcoming_walk.php' ) );

            } else {

                include( locate_template( 'partials/cards/past_walk.php' ) );

            }

        ?>

    <?php endforeach; ?>

</div>
