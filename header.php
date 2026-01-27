<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Infiniti
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jost:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'infiniti'); ?></a>
		<div class="container container-header">
			<header id="masthead" class="site-header">

				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$infiniti_description = get_bloginfo('description', 'display');
					if ($infiniti_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $infiniti_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'infiniti'); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="call-header">
					<a class="call-header-link" href="#"><img src="<?php echo get_template_directory_uri() . '/img/icon-call.png' ?>" alt="Иконка телефонной трубки"></a>
				</div>
			</header><!-- #masthead -->
			<div class="header-bottom">
				<div class="header-work">
					<img src="<?php echo get_template_directory_uri() . '/img/solar_calendar-bold.png' ?>" alt="Иконка часов работы">
					<p class="work-description">Пн–Пт с 11:00 до 20:00; Cб-Вс — по договорённости</p>
				</div>
				<div class="header-adress">
					<p class="adress-description">г. Москва, Загородное шоссе, 7Ас3</p>
					<a class="adress-link" href="#"><img src="<?php echo get_template_directory_uri() . '/img/gis_route.png' ?>" alt="Иконка маршрута">Начать поездку</a>
				</div>
			</div>
		</div>