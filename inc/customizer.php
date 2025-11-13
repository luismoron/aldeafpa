<?php
/**
 * aldeafpa Theme Customizer
 *
 * @package aldeafpa
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aldeafpa_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// Sección para imágenes del tema
	$wp_customize->add_section( 'aldeafpa_images_section', array(
		'title'    => __( 'Imágenes del Tema', 'aldeafpa' ),
		'priority' => 30,
	) );

	// Configuración para la imagen del cintillo
	$wp_customize->add_setting( 'aldeafpa_banner_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aldeafpa_banner_image', array(
		'label'    => __( 'Imagen del Cintillo/Banner', 'aldeafpa' ),
		'section'  => 'aldeafpa_images_section',
		'settings' => 'aldeafpa_banner_image',
		'description' => __( 'Sube o selecciona la imagen del cintillo que aparecerá en la página principal.', 'aldeafpa' ),
	) ) );

	// Configuración para el texto alternativo del banner
	$wp_customize->add_setting( 'aldeafpa_banner_alt_text', array(
		'default'           => get_bloginfo( 'name' ) . ' Cintillo',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'aldeafpa_banner_alt_text', array(
		'label'    => __( 'Texto Alternativo del Banner', 'aldeafpa' ),
		'section'  => 'aldeafpa_images_section',
		'settings' => 'aldeafpa_banner_alt_text',
		'type'     => 'text',
		'description' => __( 'Texto descriptivo para la imagen del banner (importante para accesibilidad).', 'aldeafpa' ),
	) );

	// Configuración para la descripción del sitio
	$wp_customize->add_setting( 'aldeafpa_site_description', array(
		'default'           => 'Institución educativa comprometida con la excelencia académica',
		'sanitize_callback' => 'sanitize_text_field',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( 'aldeafpa_site_description', array(
		'label'    => __( 'Descripción del Sitio', 'aldeafpa' ),
		'section'  => 'aldeafpa_images_section',
		'settings' => 'aldeafpa_site_description',
		'type'     => 'textarea',
		'description' => __( 'Texto descriptivo que aparecerá debajo del título en la página principal.', 'aldeafpa' ),
	) );

	// Configuración para la imagen debajo del menú
	$wp_customize->add_setting( 'aldeafpa_menu_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'postMessage',
	) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'aldeafpa_menu_image', array(
		'label'    => __( 'Imagen Debajo del Menú', 'aldeafpa' ),
		'section'  => 'aldeafpa_images_section',
		'settings' => 'aldeafpa_menu_image',
		'description' => __( 'Sube o selecciona una imagen que aparecerá debajo del menú de navegación.', 'aldeafpa' ),
	) ) );

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'aldeafpa_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'aldeafpa_customize_partial_blogdescription',
			)
		);

		// Refresh parcial para la imagen del banner
		$wp_customize->selective_refresh->add_partial( 'aldeafpa_banner_image', array(
			'selector'        => '.banner-image',
			'render_callback' => 'aldeafpa_customize_partial_banner_image',
		) );

		// Refresh parcial para la descripción del sitio
		$wp_customize->selective_refresh->add_partial( 'aldeafpa_site_description', array(
			'selector'        => '.site-description-text',
			'render_callback' => 'aldeafpa_customize_partial_site_description',
		) );

		// Refresh parcial para la imagen debajo del menú
		$wp_customize->selective_refresh->add_partial( 'aldeafpa_menu_image', array(
			'selector'        => '.menu-image',
			'render_callback' => 'aldeafpa_customize_partial_menu_image',
		) );
	}
}
add_action( 'customize_register', 'aldeafpa_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function aldeafpa_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function aldeafpa_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render the banner image for the selective refresh partial.
 *
 * @return void
 */
function aldeafpa_customize_partial_banner_image() {
	$banner_image = get_theme_mod( 'aldeafpa_banner_image' );
	$alt_text = get_theme_mod( 'aldeafpa_banner_alt_text', get_bloginfo( 'name' ) . ' Cintillo' );
	if ( $banner_image ) {
		echo '<img src="' . esc_url( $banner_image ) . '" alt="' . esc_attr( $alt_text ) . '" class="h-auto max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-4xl w-full">';
	}
}

/**
 * Render the site description for the selective refresh partial.
 *
 * @return void
 */
function aldeafpa_customize_partial_site_description() {
	$site_description = get_theme_mod( 'aldeafpa_site_description', 'Institución educativa comprometida con la excelencia académica' );
	echo esc_html( $site_description );
}

/**
 * Render the menu image for the selective refresh partial.
 *
 * @return void
 */
function aldeafpa_customize_partial_menu_image() {
	$menu_image = get_theme_mod( 'aldeafpa_menu_image' );
	if ( $menu_image ) {
		echo '<img src="' . esc_url( $menu_image ) . '" alt="' . esc_attr__( 'Imagen debajo del menú', 'aldeafpa' ) . '" class="menu-image h-auto max-w-full mx-auto">';
	}
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function aldeafpa_customize_preview_js() {
	wp_enqueue_script( 'aldeafpa-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'aldeafpa_customize_preview_js' );
