<?php
    $image = get_field('header_image', $post->ID );
    $location = get_field('location', $post->ID );
    $date = DateTime::createFromFormat( 'Ymd', get_field('date', $post->ID ) );
    $color = get_field('color', $post->ID );
    $offset = ($single || $home) ? '0' : (($even) ? '4' : '1');
    $image_url = ($single) ? $image['url'] : $image['sizes']['large'];
    $title_tag = ($single) ? 'h2' : 'h4';
    $date_tag = ($single) ? 'h2' : 'h3';

?>

<div class="row walk-card mb8" data-id="<?php echo $post->ID; ?>" <?php echo ($single) ? 'data-single' : 'data-list'; ?>>
    <div class="col-xs-10 offset-xs-1 col-sm-<?php echo ($single || $home) ? '12' : '7'; ?> offset-sm-<?php echo $offset; ?>">
        <?php if (!$single) : ?>
        <a class="walk-card-box" href="<?php echo get_permalink( $post->ID ); ?>">
        <?php else :?>
        <div class="walk-card-box">
        <?php endif; ?>

            <div class="clipped-blob" data-color="<?php echo $color; ?>"></div>
            <img class="clipped-image" src="<?php echo $image_url; ?>"/>
            <div class="walk-card-data">
                <div class="walk-card-location">
                    <<?php echo $title_tag; ?>><?php echo $location; ?></<?php echo $title_tag; ?>>
                </div>
                <div class="walk-card-date">
                    <<?php echo $date_tag; ?>><?php echo $date->format( 'F, Y' ); ?></<?php echo $date_tag; ?>>
                </div>

            </div>
        <?php if (!$single) : ?>
        </a>
        <?php else :?>
        </div>
        <?php endif; ?>
    </div>
</div>
