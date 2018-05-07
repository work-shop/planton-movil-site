<?php
    $image = ( $img = get_field('header_image', $post->ID ) ) ? $img : $upcoming_walk_image;
    $location = get_field('location', $post->ID );
    $date = DateTime::createFromFormat( 'Ymd', get_field('date', $post->ID ) );
    $color = get_field('color', $post->ID );
    $offset = ($single || $home) ? '0' : (($even) ? '4' : '1');
    $image_url = ($single || $home) ? $image['url'] : $image['sizes']['large'];
    $image_url = ( $upcoming_walk_image ) ? $image['sizes']['large'] : $image_url;
    $title_tag = ($single || $home) ? 'h2' : 'h4';
    $date_tag = ($single || $home) ? 'h1' : 'h3';

?>

<div class="row upcoming-walk-card walk-card mb8" data-id="<?php echo $post->ID; ?>" <?php echo ($single) ? 'data-single' : 'data-list'; ?>>
    <div class="col-xs-12 col-sm-<?php echo ($single || $home) ? '12' : '7'; ?> offset-sm-<?php echo $offset; ?>">
        <?php if (!$single) : ?>
        <a class="walk-card-box" href="<?php echo get_permalink( $post->ID ); ?>">
        <?php else :?>
        <div class="walk-card-box">
        <?php endif; ?>

            <?php if ( $upcoming_walk_image ) : ?>
                <img class="clipped-image" src="<?php echo $image_url; ?>"/>
            <?php else: ?>
                <div class="clipped-blob clipped-image" data-color="<?php echo $color; ?>"></div>
            <?php endif; ?>

            <div class="walk-card-data">
                <?php if ( !$home ) : ?>
                    <div class="walk-card-location">
                        <<?php echo $title_tag; ?> class="bold"><?php echo $location; ?></<?php echo $title_tag; ?>>
                    </div>
                    <?php if ( $date ) : ?>
                        <div class="walk-card-date">
                            <<?php echo $date_tag; ?> class="bolder"><?php echo $date->format( 'F d, Y' ); ?></<?php echo $date_tag; ?>>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <div class="walk-card-upcoming">
                    <?php if ( $home ) :  ?>
                        <?php $title = array('english' => 'Upcoming Walk!', 'espanol' => 'El siguiente bosque!') ?>
                    <?php else : ?>
                        <?php $title = array('english' => 'Join an upcoming walk!', 'espanol' => '¡Únete al siguiente bosque!') ?>
                    <?php endif; ?>
                    <?php $tag = 'h2' ?>
                    <?php $classes = 'link bolder'; ?>
                    <?php include( locate_template('partials/heading_english_espanol.php')); ?>
                </div>
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
