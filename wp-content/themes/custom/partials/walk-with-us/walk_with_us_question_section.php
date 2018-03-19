<div class="row">
    <div class="question-section-header col-sm-8 offset-sm-2 col-xs-12 mb2">
        <div class="question-section-title">
            <h3 class="bold">
                <span class="page-hero-title-english english"><?php echo $section['title']['english']; ?><span class="page-hero-title-slash">/</span></span>
                <span class="page-hero-title-espanol espanol"><?php echo $section['title']['espanol']; ?></span>
            </h3>
        </div>
        <div class="row">
            <div class="col-sm-6 mt1">
                <p class="english"><?php echo $section['section_description']['english']; ?></p>
            </div>
            <div class="col-sm-6 mt3">
                <p class="espanol"><?php echo $section['section_description']['espanol']; ?></p>
            </div>
        </div>

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
</div>
