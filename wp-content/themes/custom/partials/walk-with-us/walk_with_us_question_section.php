<div class="row mb4">
    <div class="question-section-header col-sm-8 offset-sm-2 col-xs-12 mb2">
        <div class="question-section-title">
            <?php $title = $section['title']; ?>
            <?php $tag = 'h3'; ?>
            <?php $classes = 'bold'; ?>
            <?php include( locate_template('partials/heading_english_espanol.php')); ?>
        </div>
        <?php if ( $section['section_description']['english'] && $section['section_description']['english'] ) : ?>
        <div class="row">
            <div class="col-xs-6 col-sm-6 mt1">
                <p class="english"><?php echo $section['section_description']['english']; ?></p>
            </div>
            <div class="col-xs-6 col-sm-6 mt3">
                <p class="espanol"><?php echo $section['section_description']['espanol']; ?></p>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <div class="question-section-answers col-sm-12">
        <div class="row">

            <?php $questions = $section['questions']; ?>

            <?php if( $even ) : ?>

                <?php include( locate_template('partials/walk-with-us/walk_with_us_question_section_text.php') ); ?>

                <?php include( locate_template('partials/walk-with-us/walk_with_us_question_section_image.php') ); ?>

            <?php else : ?>

                <?php include( locate_template('partials/walk-with-us/walk_with_us_question_section_image.php') ); ?>

                <?php include( locate_template('partials/walk-with-us/walk_with_us_question_section_text.php') ); ?>

            <?php endif; ?>

        </div>
    </div>
    <?php if ( $section['download_link']['name'] ) : ?>
    <?php $positioning = ( $even ) ? 'col-sm-8 offset-sm-0' : 'col-sm-8 offset-sm-2' ; ?>
    <div class="question-document <?php echo $positioning; ?> col-xs-12 mb2 centered">
        <?php if ( $section['download_link']['link_type'] ) : ?>
            <a class="home-page-link" target="_blank" href="<?php echo $section['download_link']['url']; ?>"><?php echo $section['download_link']['name']; ?></a>
        <?php else : ?>
            <a class="home-page-link" target="_blank" href="<?php echo $section['download_link']['file']['url']; ?>"><?php echo $section['download_link']['name']; ?></a>
        <?php endif; ?>
    </div>
    <?php endif; ?>
</div>
