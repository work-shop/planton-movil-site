<?php $home_id = 8; ?>
<?php $tagline = get_field('site_tagline', $home_id ); ?>
<?php $image = get_field('site_social_media_image', $home_id ); ?>
<?php $twitter = get_field('twitter', $home_id ); ?>

<!-- General search -->
<meta name="author" content="Lucia Monge" />
<meta name="copyright" content="Lucia Monge" />
<meta name="description" content="<?php echo $tagline; ?>">


<!-- Facebook tags -->
<meta property="og:title" content="<?php bloginfo('title'); ?>" />
<meta property="og:type" content="website" />
<meta property="og:image" content="<?php echo $image['sizes']['large']; ?>" />

<!-- Twitter tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="<?php echo $twitter; ?>" />
<meta name="twitter:creator" content="<?php echo $twitter; ?>" />
<meta name="twitter:title" content="<?php bloginfo('title'); ?>" />
<meta name="twitter:description" content="<?php echo $tagline; ?>" />
<meta name="twitter:image" content="<?php echo $image['sizes']['large']; ?>" />
