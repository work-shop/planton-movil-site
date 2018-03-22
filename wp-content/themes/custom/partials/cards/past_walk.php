<?php
    $image = get_field('header_image', $post->ID );
    $location = get_field('location', $post->ID );
    $date = DateTime::createFromFormat( 'Ymd', get_field('date', $post->ID ) );
    $color = get_field('color', $post->ID );
    $offset = ($single || $home) ? '0' : (($even) ? '4' : '1');
    $image_url = ($single || $home) ? $image['url'] : $image['sizes']['large'];
    $title_tag = ($single || $home) ? 'h2' : 'h4';
    $date_tag = ($single || $home) ? 'h1' : 'h3';

?>

<div class="row walk-card mb8" data-id="<?php echo $post->ID; ?>" <?php echo ($single) ? 'data-single' : 'data-list'; ?>>
    <div class="col-xs-10 offset-xs-1 col-sm-<?php echo ($single || $home) ? '12' : '7'; ?> offset-sm-<?php echo $offset; ?>">
        <?php if (!$single) : ?>
        <a class="walk-card-box" href="<?php echo ( !$home ) ? get_permalink( $post->ID ) : get_permalink( 83 ); ?>">
        <?php else :?>
        <div class="walk-card-box">
        <?php endif; ?>

            <!-- <div class="clipped-blob clipped-image" data-color="<?php echo $color; ?>"></div> -->
            <img class="clipped-image" src="<?php echo $image_url; ?>"/>
            <div class="walk-card-data">
            <?php if( !$home ) : ?>


                    <div class="walk-card-location bold">
                        <<?php echo $title_tag; ?> class="bold"><?php echo $location; ?></<?php echo $title_tag; ?>>
                    </div>
                    <div class="walk-card-date bold">
                        <<?php echo $date_tag; ?> class="bolder"><?php echo $date->format( 'Y' ); ?></<?php echo $date_tag; ?>>
                    </div>


            <?php else: ?>
                <div class="walk-card-upcoming">
                    <?php $title = array('english' => 'See all our walks!', 'espanol' => '¡Mira todos nuestros paseos!') ?>
                    <?php $tag = 'h2' ?>
                    <?php $classes = 'link bolder'; ?>
                    <?php include( locate_template('partials/heading_english_espanol.php')); ?>
                </div>
            <?php endif; ?>
                <div class="walk-card-link">
                    <span class="centered"><span class="icon large " data-icon="Î"></span></span>
                </div>
            </div>
        <?php if (!$single) : ?>
        </a>
        <?php else :?>
        </div>
        <?php endif; ?>
    </div>
</div>
