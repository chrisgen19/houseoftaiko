<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package houseoftaiko
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

	<style>
		@font-face {
			font-family: 'harukaze';
			src: url('<?php echo get_template_directory_uri() . '/fonts/harukaze.ttf'; ?>') format('truetype');
			font-weight: normal;
			font-style: normal;
		}

		body {
			font-family: 'harukaze', sans-serif;
		}
	</style>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'houseoftaiko' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="site-head">
				<div class="site-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php
						the_custom_logo();
						?>
					</a>
				</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle menu-btn" aria-controls="primary-menu" aria-expanded="false">
						<div class="menu-btn-burger" ></div>
					</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->
