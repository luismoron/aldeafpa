<?php get_header(); ?>

<main class="site-main">
    <div class="container mx-auto px-4 py-2">

        <!-- Sección de PNF Disponibles -->
        <?php if ( has_nav_menu( 'pnf-menu' ) ) : ?>
            <section id="pnf" class="py-12">
                <h2 class="text-2xl font-bold mb-4 text-center">Programas Nacionales De Formación "PNF" </br> Disponibles En Nuestra Aldea</h2>
                <div class="pnf-content">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'pnf-menu',
                        'menu_class'     => 'list-disc list-inside space-y-2',
                        'container'      => false,
                        'fallback_cb'    => false,
                    ) );
                    ?>
                </div>
            </section>
        <?php endif; ?>

        <!-- Sección de Noticias -->
        <section id="noticias" class="py-12">
            <h2 class="text-3xl font-bold text-center mb-8">Últimas Noticias</h2>
            <?php
            // Query para obtener las últimas noticias (posts)
            $noticias_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 8, // Número de noticias a mostrar
                'post_status' => 'publish'
            ));

            if ($noticias_query->have_posts()) :
            ?>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <?php
                    while ($noticias_query->have_posts()) :
                        $noticias_query->the_post();
                        get_template_part('template-parts/content-blog-card');
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            <?php else : ?>
                <p class="text-center">No hay noticias disponibles.</p>
            <?php endif; ?>
        </section>

    </div>
</main>

<?php get_footer(); ?>
