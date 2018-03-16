<?php
    $image = get_field('header_image', $post->ID );
    $location = get_field('location', $post->ID );
    $date = DateTime::createFromFormat( 'Ymd', get_field('date', $post->ID ) );
    $color = get_field('color', $post->ID );

?>

<div class="row walk-card mb8" data-id="<?php echo $post->ID; ?>">
    <div class="col-xs-10 offset-xs-1 col-sm-7 offset-sm-<?php echo ($even) ? '4' : '1'; ?>">
        <a class="walk-card-box" href="<?php echo get_permalink( $post->ID ); ?>">

            <div class="clipped-blob" data-color="<?php echo $color; ?>"></div>
            <img class="clipped-image" src="<?php echo $image['sizes']['large']; ?>"/>
            <div class="walk-card-data">
                <div class="walk-card-location">
                    <h4><?php echo $location; ?></h4>
                </div>
                <div class="walk-card-date">
                    <h3><?php echo $date->format( 'F, Y' ); ?></h3>
                </div>

            </div>
        </a>
    </div>
</div>
