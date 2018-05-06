<?php
    $id = get_the_ID();
    $callout_title = get_field('callout_title', $id );
    $callout_information = get_field('callout_information', $id );
    $callout_links =  get_field('callout_links', $id )
?>
<?php if ( $callout_title['english'] != '' || $callout_title['espanol'] != ''  || $callout_information['english'] != '' || $callout_information['espanol'] != '') : ?>
<section class="walk-with-us-callout container-fluid mb2 mt2">
    <div class="row">
        <div class="question-section-header col-sm-8 offset-sm-2 col-xs-12 mb2">
            <div class="question-section-title">
                <?php $title = $callout_title; ?>
                <?php $classes = 'bold'; ?>
                <?php $tag = 'h3'; ?>
                <?php include( locate_template('partials/heading_english_espanol.php') ); ?>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p class="small"><?php echo $callout_information['english']; ?></p>
                </div>
                <div class="col-sm-6">
                    <p class="small"><?php echo $callout_information['espanol']; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 centered">
                    <?php foreach ($callout_links as $i => $link) : ?>

                        <a class="home-page-link" href="<?php echo $link['url']; ?>"><?php echo $link['link_name']; ?></a>

                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>
