<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>
		Plantón Móvil <?php wp_title('–'); ?>
	</title>

	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/compiled/images/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/compiled/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/compiled/images/favicon-96x96.png">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-icon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <?php get_template_part('partials/site_social'); ?>

    <?php get_template_part('partials/site_analytics'); ?>

	<?php wp_head(); ?>

</head>
<body <?php body_class('loading before-scroll modal-off menu-closed'); ?>>

	<?php get_template_part('partials/nav'); ?>

	<main id="content">
