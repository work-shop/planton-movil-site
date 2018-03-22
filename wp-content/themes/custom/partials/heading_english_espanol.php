<?php $tag = (isset( $tag )) ? $tag : 'h3'; ?>
<?php $classes = (isset( $classes )) ? $classes : 'bolder'; ?>

<<?php echo $tag ?> class="page-hero-tagline tagline row">
    <div class="col-xs-6">
        <span class="page-hero-title-english english <?php echo $classes; ?>"><?php echo $title['english']; ?></span>
    </div>
    <div class="offset-xs-6 col-xs-6">
        <span class="page-hero-title-slash <?php echo $classes; ?>">/</span>
    </div>
    <div class="offset-xs-6 col-xs-6">
        <span class="page-hero-title-espanol espanol <?php echo $classes; ?>"><?php echo $title['espanol']; ?></span>
    </div>
</<?php echo $tag ?>>
