<?php get_header(); ?>

<main class="site-main">
    <div class="container mx-auto px-4 py-4">
        
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
</main>

<?php get_footer(); ?>
