<?php get_header(); ?>

<main class="site-main">
    <div class="container mx-auto px-4 py-2">

        <!-- Sección de PNF Disponibles -->
        <?php if ( has_nav_menu( 'pnf-menu' ) ) : ?>
            <?php
            $locations = get_nav_menu_locations();
            $menu_items = isset( $locations['pnf-menu'] ) ? wp_get_nav_menu_items( $locations['pnf-menu'] ) : false;
            if ( $menu_items ) :
            ?>
                <section id="pnf" class="py-16">
                    <h2 class="text-2xl font-bold mb-4 text-center">Programas Nacionales de Formación </br> "PNF" Disponibles en Nuestra <?php echo get_bloginfo('name'); ?></h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 py-10">
                        <?php
                        foreach ( $menu_items as $item ) :
                            if ( $item->object === 'page' ) :
                                $page = get_post( $item->object_id );
                                if ( $page ) :
                        ?>
                                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                                        <?php if ( has_post_thumbnail( $page ) ) : ?>
                                            <div class="w-full h-48 overflow-hidden">
                                                <a href="<?php echo esc_url( $item->url ); ?>">
                                                    <?php echo get_the_post_thumbnail( $page, 'medium', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                        <div class="p-4">
                                            <h3 class="font-bold text-lg mb-2">
                                                <a href="<?php echo esc_url( $item->url ); ?>" class="text-gray-900 hover:text-blue-600"><?php echo esc_html( $page->post_title ); ?></a>
                                            </h3>
                                        </div>
                                    </div>
                        <?php
                                endif;
                            endif;
                        endforeach;
                        ?>
                    </div>
                </section>
            <?php else : ?>
                <p class="text-center py-12">El menú "PNF Disponibles" está asignado pero no tiene páginas agregadas.</p>
            <?php endif; ?>
        <?php else : ?>
            <p class="text-center py-12">No hay menú asignado a la ubicación "PNF Disponibles".</p>
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
