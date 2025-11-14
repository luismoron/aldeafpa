<!-- Cabecera -->
<?php get_header(); ?>

<!-- Inicio del contenido principal -->
<main class="site-main">
    <div class="container mx-auto px-4 py-2">

        <!-- Sección de PNF Disponibles -->
        <?php if ( has_nav_menu( 'pnf-menu' ) ) : ?>
            <?php
            $locations = get_nav_menu_locations();
            $menu_items = isset( $locations['pnf-menu'] ) ? wp_get_nav_menu_items( $locations['pnf-menu'] ) : false;
            if ( $menu_items ) :
            ?>
                <section id="pnf" class="py-20 sm:py-16">
                    <h2 class="text-3xl sm:text-2xl font-bold mb-8 sm:mb-6 text-center">Programas Nacionales de Formación </br> "PNF" Disponibles en Nuestra <?php echo get_bloginfo('name'); ?></h2>
                    <div class="flex flex-wrap justify-center gap-6 py-10 mx-auto max-w-7xl">
                        <?php
                        foreach ( $menu_items as $item ) :
                            if ( $item->object === 'page' ) :
                                $page = get_post( $item->object_id );
                                if ( $page ) :
                        ?>
                                    <a href="<?php echo esc_url( $item->url ); ?>" class="bg-white rounded-lg shadow-lg hover:shadow-xl hover:-translate-y-2 transition-all duration-300 overflow-hidden block w-96">
                                        <?php if ( has_post_thumbnail( $page ) ) : ?>
                                        <div class="w-full h-64 sm:h-80 overflow-hidden">
                                            <?php echo get_the_post_thumbnail( $page, 'medium', array( 'class' => 'w-full h-full object-cover' ) ); ?>
                                        </div>
                                    <?php endif; ?>
                                        <div class="p-6">
                                            <h3 class="font-bold text-xl mb-2 text-center">
                                                <?php echo esc_html( $page->post_title ); ?>
                                            </h3>
                                        </div>
                                    </a>
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

        <!-- Línea separadora -->
        <div class="w-full h-px bg-gray-300 shadow-sm my-8"></div>

        <!-- Sección de Noticias -->
        <section id="noticias" class="py-16 sm:py-12">
            <h2 class="text-4xl sm:text-3xl font-bold text-center mb-16 sm:mb-12">Últimas Noticias</h2>
            <?php
            // Query para obtener las últimas noticias (posts)
            $noticias_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 8, // Número de noticias a mostrar
                'post_status' => 'publish'
            ));

            if ($noticias_query->have_posts()) :
            ?>
                <div class="columns-1 sm:columns-2 md:columns-3 gap-8 sm:gap-10">
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

        <!-- Línea separadora -->
        <div class="w-full h-px bg-gray-300 shadow-sm my-8"></div>

        <!-- Sección Nosotros -->
        <section id="nosotros" class="py-16">
            <?php
            $nosotros_page = get_page_by_title('Nosotros');
            if ($nosotros_page) :
                global $post;
                $post = $nosotros_page;
                setup_postdata($post);
            ?>
                <div class="container mx-auto px-4">
                    <div class="prose prose-lg mx-auto text-justify">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php
                wp_reset_postdata();
            else :
            ?>
                <p class="text-center">La página "Nosotros" no existe aún. Crea una página con ese título en WordPress.</p>
            <?php endif; ?>
        </section>

    </div>
</main>

<!-- Footer -->
<?php get_footer(); ?>
