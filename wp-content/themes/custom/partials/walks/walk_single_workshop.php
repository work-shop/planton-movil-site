<?php
    $date = DateTime::createFromFormat( 'Ymd', get_field('date', $workshop['date'] ) );
?>

<div class="walk-workshop row">
    <div class="col-sm-12">
        <div class="row mb2 accordian-toggle">
            <div class="col-xs-12 ">
                <div class="walk-workshop-header-row">
                    <span class="workshop-date mr2"><?php echo $date->format('F d, Y'); ?></span>
                    <span class="workshop-name bold brand"><?php echo $workshop['workshop_name']; ?></span>
                    <span class="accordian-state righted closed pictogram"> Ó </span>
                </div>
            </div>
        </div>

        <div class="row accordian-target">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-xs-6">
                        <p class="english small">
                            <?php echo $workshop['workshop_description']['english']; ?>
                        </p>
                    </div>
                    <div class="col-xs-6">
                        <p class="espanol small">
                            <?php echo $workshop['workshop_description']['espanol']; ?>
                        </p>
                    </div>

                </div>
                <div class="row hidden">

                    <?php foreach ($workshop['images'] as $j => $image) : ?>


                        <div class="col-sm-6 col-xs-12">
                            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</div>
