<?php
    $id = get_the_ID();
    $callout_title = get_field('callout_title', $id );
    $callout_information = get_field('callout_information', $id );
?>
<?php if ( $callout_title['english'] != '' || $callout_title['espanol'] != ''  || $callout_information['english'] != '' || $callout_information['espanol'] != '') : ?>
<section class="walk-with-us-callout container-fluid mb2 mt2">
    <div class="row">
        <div class="question-section-header col-sm-8 offset-sm-2 col-xs-12 mb2">
            <div class="question-section-title">
                <h3 class="bold">
                    <span class="page-hero-title-english link bold"><?php echo $callout_title['english']; ?><span class="page-hero-title-slash link">/</span></span>
                    <span class="page-hero-title-espanol link bold"><?php echo $callout_title['espanol']; ?></span>
                </h3>
            </div>
            <div class="row">
                <div class="col-sm-6 mt1">
                    <p class="link">Email <a href="mailto:plantonmovil@gmail.com">Lucia Monge</a> with questions, comments, or requests for more information!</p>
                </div>
                <div class="col-sm-6 mt3">
                    <p class="link">Envíe un correo electrónico a <a href="mailto:plantonmovil@gmail.com">Lucia Monge</a> con preguntas, comentarios o solicitudes para obtener más información!</p>
                </div>
            </div>

        </div>
    </div>
</section>
<?php endif; ?>
