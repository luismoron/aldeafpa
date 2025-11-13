<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aldeafpa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'aldeafpa' ); ?></a>

	<header id="masthead" class="site-header bg-white shadow-sm">
		<!-- Site branding removed for static page -->
		<!-- Navigation menu removed - using custom menu in front-page.php -->

		<!-- Global Banner Image - appears on all pages -->
		<div class="container mx-auto px-4 py-6">
			<div class="flex justify-center">
				<?php
				$banner_image = get_theme_mod( 'aldeafpa_banner_image' );
				$alt_text = get_theme_mod( 'aldeafpa_banner_alt_text', get_bloginfo( 'name' ) . ' Cintillo' );
				if ( $banner_image ) {
					echo '<img src="' . esc_url( $banner_image ) . '" alt="' . esc_attr( $alt_text ) . '" class="banner-image h-auto max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-4xl w-full">';
				} else {
					// Imagen por defecto si no hay ninguna configurada
					echo '<img src="http://localhost:8081/wp-content/uploads/2025/11/R-e1762806611441.png" alt="' . esc_attr( $alt_text ) . '" class="banner-image h-auto max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-4xl w-full">';
				}
				?>
			</div>
		</div>

		<!-- Site Title, Description and Menu - appears on all pages except front page -->
		<?php if ( ! is_front_page() ) : ?>
		<div class="container mx-auto px-4 py-8">
			<div class="text-center">
				<h1 class="text-4xl sm:text-3xl md:text-4xl lg:text-6xl font-serif font-bold text-gray-800 mb-4 tracking-wide leading-tight">
					<?php bloginfo('name'); ?>
				</h1>
				<div class="w-16 sm:w-20 md:w-24 h-1 bg-blue-600 mx-auto mb-1 rounded-full"></div>
				<p class="text-base sm:text-lg text-gray-600 max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl mx-auto leading-relaxed px-4 site-description-text">
					<?php
					$site_description = get_theme_mod( 'aldeafpa_site_description', 'Institución educativa comprometida con la excelencia académica' );
					echo esc_html( $site_description );
					?>
				</p>

				<!-- Navigation Menu -->
				<nav class="mt-8">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class'     => 'flex flex-col sm:flex-row flex-wrap justify-center space-y-2 sm:space-y-0 sm:space-x-6 text-base sm:text-lg font-medium',
							'container'      => false,
							'fallback_cb'    => 'aldeafpa_default_menu',
						)
					);
					?>
				</nav>
			</div>
		</div>
		<?php endif; ?>
	</header><!-- #masthead -->
