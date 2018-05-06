<div id="contact" class="home-slide row">
    <div class="home-slide-content-relative col-sm-6 offset-sm-1">
        <div class="row">


        <div class="col-sm-6 offset-sm-3">
            <?php $title = array('english' => 'Contact', 'espanol' => 'Contacto'); ?>
            <?php $tag = 'h3'; ?>
            <?php include( locate_template('partials/heading_english_espanol.php')); ?>
        </div>
        <div class="col-sm-12 contact-form">
            <?php gravity_form( 1, false, false, false, '', true ); ?>
        </div>
        </div>
    </div>
    <div class="home-slide-content-relative">
        <div class="col-sm-4">
            <?php $contact_image = get_field('contact_image', 8); ?>
            <img src="<?php echo $contact_image['sizes']['large']; ?>" alt="<?php echo $contact_image['alt']; ?>">
        </div>
    </div>
</div>
