<?php get_header(); ?>

<main class="site-main">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-center mb-8">
            <img src="http://localhost:8081/wp-content/uploads/2025/11/R-e1762806611441.png" alt="Cintillo" class="h-auto max-w-md">
        </div>
        
        <div class="text-center">
            <h1 class="text-7xl md:text-8xl font-serif font-bold text-gray-800 mb-4 tracking-wide leading-tight">
                <?php bloginfo('name'); ?>
            </h1>
            <div class="w-24 h-1 bg-blue-600 mx-auto mb-1 rounded-full"></div>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto leading-relaxed">
                Institución educativa comprometida con la excelencia académica
            </p>
            
            <!-- Navigation Menu -->
            <nav class="mt-8">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'menu_class'     => 'flex flex-wrap justify-center space-x-6 text-lg font-medium',
                        'container'      => false,
                        'fallback_cb'    => false,
                    )
                );
                ?>
            </nav>
        </div>
        
    </div>
</main>

<?php get_footer(); ?>
