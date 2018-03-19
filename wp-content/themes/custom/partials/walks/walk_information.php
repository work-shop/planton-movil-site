<?php
    $overview = get_field('overview', $id);
    $started = get_field('started_from', $id);
    $ended = get_field('ended_at', $id);
    $participants = get_field('participants', $id);
    $posters = get_field('posters', $id);
?>

<div class="row">
    <div class="walk-poster col-xs-6 col-sm-4 hidden-xs">

        <?php if ( count( $posters ) === 1 ) : ?>

        <div class="row">
            <div class="col-sm-12">
                <img class="enlargeable-image poster shadow" src="<?php echo $posters[0]['sizes']['large']; ?>" />
                <p class="smaller medium"><?php echo $posters[0]['caption']; ?></p>
            </div>
        </div>

        <?php else: ?>

            <?php foreach ( $posters as $i => $poster) : ?>
                <?php if ($i % 2 == 0) : ?>
                <div class="row">
                <?php endif; ?>
                    <div class="col-sm-6">
                        <img class="enlargeable-image poster shadow" src="<?php echo $poster['sizes']['large']; ?>" />
                        <p class="smaller medium"><?php echo $poster['caption']; ?></p>
                    </div>
                <?php if ($i % 2 == 1) : ?>
                </div>
                <?php endif; ?>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>
    <div class="walk-overview col-sm-8 col-md-4 col-xs-6">
        <p class="english"><?php echo $overview['english']; ?></p>
        <p class="espanol"><?php echo $overview['espanol']; ?></p>
    </div>
    <div class="offset-xs-0 offset-sm-4 offset-md-0 col-sm-8 col-xs-12 col-md-4">
        <div class="row">
            <div class="metadata-block mb2 col-md-12 col-xs-4">
                <h6 class="metadata-header"><span class="english bold">
                    <?php if ( $upcoming ) : ?>Starts At <?php else : ?> Started From <?php endif; ?>
                </span></h6>
                <p class=" metadata-content small "><?php echo $started; ?></p>
            </div>
            <div class="metadata-block mb2 col-md-12  col-xs-4">
                <h6 class="metadata-header bold"><span class="english bold">
                    <?php if ( $upcoming ) : ?>Will End At <?php else : ?> Ended At <?php endif; ?>
                </span></h6>
                <p class=" metadata-content small "><?php echo $ended; ?></p>
            </div>
            <?php if ( !$upcoming ) : ?>
            <div class="metadata-block col-md-12 col-xs-4">
                <h6 class="metadata-header bold"><span class="english bold">Participants</span></h6>
                <p class=" metadata-content small "><?php echo $participants; ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
