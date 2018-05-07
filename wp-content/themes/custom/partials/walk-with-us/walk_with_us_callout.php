<section class="walk-with-us-callout container-fluid mt4 mb2">
    <div class="row">
        <div class="question-section-header col-sm-8 offset-sm-2 col-xs-12 mb2">
            <div class=" question-section-title">
                <?php $title = array('english' => 'More Questions', 'espanol' => 'Más preguntas?'); ?>
                <?php $classes = 'bold'; ?>
                <?php $tag = 'h3'; ?>
                <?php include( locate_template('partials/heading_english_espanol.php') ); ?>
            </div>
            <div class="row">
                <div class="col-sm-12 mt1">
                    <div class="row">
                        <?php $email = get_field('contact_email', $id ); ?>
                        <div class="col-sm-6">
                            <p class="small">Email <a class="link"href="<?php echo $email; ?>">Lucia Monge</a> with questions, comments, or requests for more information!</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="small">Envíe un correo electrónico a <a class="link"href="mailto:<?php echo $email; ?>">Lucia Monge</a> con preguntas, comentarios o solicitudes para obtener más información!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
