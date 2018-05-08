<div class="walk-gallery-images row">
    <?php foreach ($images as $i => $image) : ?>
        <?php


            $linked = $image['link'] != '';
            $tag = $linked ? 'a' : 'div';
            $href = $linked ? 'href="' . $image['link'] . '"' : '';
            $target = $linked ? 'target="_blank"' : '';
            $sizing = array(
                'large' => array(
                    'portrait' => '6',
                    'landscape' => '12'
                ),
                'medium' => array(
                    'portrait' => '4',
                    'landscape' => '6'
                ),
                'small' => array(
                    'portrait' => '3',
                    'landscape' => '4'
                )
            );

            $orientation = ( WS_Site::portrait( $image['image'] ) ) ? 'portrait' : 'landscape';
            $size = $sizing[ $image['display_size'] ][ $orientation ];

        ?>

        <div class="col-xs-<?php echo $size; ?> mb2">

            <<?php echo $tag; ?> class="walk-gallery-image-block" <?php echo $href; ?> <?php echo $target; ?>>
                <img class="walk-gallery-image walk-gallery-image-large enlargeable-image" src="<?php echo $image['image']['url']; ?>">

                <?php if ( $image['link'] != '') : ?>
                    <span class="bold icon large walk-gallery-image-link-icon" data-icon="Å"></span>
                <?php endif; ?>

                <div class="walk-gallery-image-mask" data-tint-color="<?php echo $color; ?>">
                    <?php if ( $image['link'] != '') : ?>
                    <h4 class="walk-gallery-image-link-title white">
                        <?php echo $image['link']; ?>
                    </h4>
                    <?php endif; ?>
                </div>


                <?php if ( $image['image']['caption']) : ?>
                    <p class="smaller walk-gallery-image-caption mt1"><?php echo $image['image']['caption']; ?></p>
                <?php endif; ?>

            </<?php echo $tag; ?>>
        </div>

    <?php endforeach; ?>
</div>
