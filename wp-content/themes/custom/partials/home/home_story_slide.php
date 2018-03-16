<?php if ( $sections = get_field('story_sections', 8) ) : ?>
<div class="home-slide row">
    <div class="home-slide-content-scrolling offset-sm-1 col-sm-10">
        <h3>Our Story</h3>
        <div class="wysiwyg">

            <?php foreach ($sections as $i => $section) : ?>

                <?php if ($section['section_type'] == "english") : ?>

                    <div class="story-section-type-english-text english-text mb2">
                        <?php echo $section['text_block']; ?>
                    </div>

                <?php elseif ($section['section_type'] == "spanish") : ?>

                    <div class="story-section-type-spanish-text spanish-text mb2">
                        <?php echo $section['text_block']; ?>
                    </div>

                <?php elseif ($section['section_type'] == "image") : ?>

                    <div class="story-section-type-image image-position-<?php echo $section['position']; ?> mb2">
                        <img src="<?php echo $section['image']['sizes']['large']; ?>" alt=""/>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>
    </div>
</div>
<?php endif; ?>
