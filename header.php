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
	</header><!-- #masthead -->
