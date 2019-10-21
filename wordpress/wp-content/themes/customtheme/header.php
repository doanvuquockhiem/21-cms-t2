<!-- <h2>The Header!</h2>
	<hr> -->
	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<link rel="profile" href="http://gmgp.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="container">
			<header id="header">
                   <?php cms_logo(); ?>
                   <?php cms_menu( 'primary-menu' ); ?>
              </header>
              <div class="header-search">
      <?php get_search_form(); ?>
 </div>

