<?php
$description = get_field('workshop_description', $id);
$workshops = get_field('workshops', $id);
?>

<?php if ( $workshops ) : ?>
<section class="walk-gallery container-fluid mb8">
    <div class="walk-gallery-title row">
        <div class="col-sm-6">
            <h5 class="page-hero-tagline tagline bold">
                <span class="section-title-english english bold">Workshops<span class="section-title-slash">/</span></span>
                <span class="section-title-espanol espanol bold">Workshops</span>
            </h5>
        </div>
    </div>
    <?php if ($description) : ?>
    <div class="walk-gallery-description row mb1">
        <div class="col-sm-4 col-xs-6">
            <p class="small english"><?php echo $description['english']; ?></p>
        </div>
        <div class="col-sm-4 col-xs-6">
            <p class="small espanol"><?php echo $description['espanol']; ?></p>
        </div>
    </div>
    <?php endif; ?>

    <?php foreach ($workshops as $i => $workshop): ?>

        <?php include( locate_template('partials/walks/walk_single_workshop.php') ); ?>

    <?php endforeach; ?>

</section>
<?php endif; ?>
