<div id="contact" class="home-slide row">
    <div class="home-slide-content-relative col-sm-6 offset-sm-1">
        <div class="col-sm-6 offset-sm-3">
            <?php $title = array('english' => 'Contact', 'espanol' => 'Contacto'); ?>
            <?php $tag = 'h3'; ?>
            <?php include( locate_template('partials/heading_english_espanol.php')); ?>
        </div>
        <div class="contact-form">
            <?php gravity_form( 1, false, false, false, '', true ); ?>
        </div>
    </div>
    <div class="col-sm-4">
        
    </div>
</div>
