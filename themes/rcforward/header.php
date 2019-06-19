<?php
/**
 * The header for our theme.
 *
 * @package RC Forward
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
					<div class="site-logo">
						<a href="<?php echo home_url('/'); ?>" rel="home">
							<h1 class="rcforward-logo">Rc Forward</h1>
						</a>
					</div>	
					
					<div class="hamburger">
						<button id="toggle-nav" class="hamburger--boring menu-toggle " type="button" aria-controls="primary-menu" aria-expanded="false">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
					</div>
			
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					</nav>
			</header><!-- .site-header -->

		<div id="content" class="site-content">
