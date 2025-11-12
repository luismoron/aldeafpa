<?php get_header(); ?>

<main class="site-main">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center mb-8">
            <?php
            $banner_image = get_theme_mod( 'aldeafpa_banner_image' );
            if ( $banner_image ) {
                echo '<img src="' . esc_url( $banner_image ) . '" alt="' . esc_attr( get_bloginfo( 'name' ) ) . ' Cintillo" class="banner-image h-auto max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-4xl w-full">';
            } else {
                // Imagen por defecto si no hay ninguna configurada
                echo '<img src="http://localhost:8081/wp-content/uploads/2025/11/R-e1762806611441.png" alt="' . esc_attr( get_bloginfo( 'name' ) ) . ' Cintillo" class="banner-image h-auto max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl xl:max-w-4xl w-full">';
            }
            ?>
        </div>
        
        <div class="text-center">
            <h1 class="text-4xl sm:text-3xl md:text-4xl lg:text-6xl font-serif font-bold text-gray-800 mb-4 tracking-wide leading-tight">
                <?php bloginfo('name'); ?>
            </h1>
            <div class="w-16 sm:w-20 md:w-24 h-1 bg-blue-600 mx-auto mb-1 rounded-full"></div>
            <p class="text-base sm:text-lg text-gray-600 max-w-sm sm:max-w-md md:max-w-lg lg:max-w-2xl mx-auto leading-relaxed px-4">
                Institución educativa comprometida con la excelencia académica
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
</main>

<?php get_footer(); ?>
