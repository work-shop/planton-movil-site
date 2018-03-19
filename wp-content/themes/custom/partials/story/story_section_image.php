<div class="image">

    <?php

        $linked = $section['image_link'] != '';
        $tag = $linked ? 'a' : 'div';
        $href = $linked ? 'href="' . $section['image_link'] . '"' : '';
        $target = $linked ? 'target="_blank"' : '';

        $sizing = array(
            'left' => array(
                'portrait' => '4',
                'landscape' => '6'
            ),
            'right' => array(
                'portrait' => '4',
                'landscape' => '6'
            ),
            'full' => array(
                'portrait' => '4',
                'landscape' => '10'
            )
        );

        $offsets = array(
            'left' => array(
                'portrait' => '0',
                'landscape' => '0'
            ),
            'right' => array(
                'portrait' => '8',
                'landscape' => '6'
            ),
            'full' => array(
                'portrait' => '4',
                'landscape' => '1'
            )
        );

        $orientation = ( WS_Site::portrait( $section['image'] ) ) ? 'portrait' : 'landscape';

        $size = $sizing[ $section['position'] ][ $orientation ];
        $offset = $offsets[ $section['position'] ][ $orientation ];

    ?>

    <div class="col-xs-<?php echo $size; ?> offset-sm-<?php echo $offset; ?> mb2 mt2">

        <<?php echo $tag; ?> class="walk-gallery-image-block" <?php echo $href; ?> <?php echo $target; ?>>
            <img class="walk-gallery-image walk-gallery-image-large enlargeable-image" src="<?php echo $section['image']['url']; ?>">

            <?php if ( $linked ) : ?>
                <span class="bold icon large walk-gallery-image-link-icon" data-icon="Å"></span>
            <?php endif; ?>

            <div class="walk-gallery-image-mask" data-tint-color="<?php echo $color; ?>">
                <?php if ( $linked ) : ?>
                <h4 class="walk-gallery-image-link-title brand">
                    <?php echo $section['image_link']; ?>
                </h4>
                <?php endif; ?>
            </div>
        </<?php echo $tag; ?>>
    </div>

</div>
