<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bicefal
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta name="theme-color" content="#46412E">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bicefal' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<!-- <div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div> -->

		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bicefal' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav> -->

		<div class="site-top-section">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-top-section-logo">
				<?php get_template_part('logo') ?>
			</a>
		</div>
		<div class="ticket-button-section">
			<a href="http://bicefal.org/?page_id=105" class="program-btn">Program</a>
			<a href="https://entradium.com/entradas/bicefal-barcelona" class="ticket-btn" target="_blank">
				<span class="ticket-btn-pre">Get</span>
				<span class="ticket-btn-main">tickets</span>
			</a>
		</div>

		<div class="date-info-section">
			<div class="date-info date-info-main">8·9·10 / DECEMBER / 2016</div>
			<div class="date-info">BARCELONA — FREEDONIA — SALA UPLOAD</div>
		</div>

	</header><!-- #masthead -->

	<div class="cut-lines">
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
		<div class="cut-line"></div>
	</div>

	<div id="content" class="site-content">
