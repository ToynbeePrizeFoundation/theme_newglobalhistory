<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Lato:300,300italic,700italic,700|Josefin+Slab:300,300italic|Vollkorn:400italic,700italic,400,700" rel="stylesheet" type="text/css">
	
    <?php wp_enqueue_script( 'modernizr.custom.55350', get_template_directory_uri() . '/js/modernizr.custom.55350.js', array('jquery'), 'true' ); ?>	
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" media="screen" type="text/css" />
	<![endif]-->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div class="wrap">
	
	<section id="content" <?php post_class(); ?>>