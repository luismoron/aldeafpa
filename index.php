<?php
/**
 * The main template file - Página de entradas/noticias
 *
 * @package aldeafpa
 */

get_header();
?>

<main class="site-main">
    <div class="container mx-auto px-4 py-8">
        <header class="page-header mb-8">
            <h1 class="text-4xl md:text-5xl font-serif font-bold text-gray-800 mb-4 text-center">
                <?php
                if (is_home() && !is_front_page()) {
                    single_post_title();
                } else {
                    _e('Últimas Noticias', 'aldeafpa');
                }
                ?>
            </h1>
            <div class="w-24 h-1 bg-blue-600 mx-auto rounded-full"></div>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300'); ?>>

                        <div class="p-6">
                            <header class="entry-header mb-4">
                                <h2 class="text-xl font-bold text-gray-800 mb-2 leading-tight">
                                    <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </header>

                            <div class="entry-content">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="flex gap-4">
                                        <div class="shrink-0 w-24 h-24 overflow-hidden rounded-lg">
                                            <a href="<?php the_permalink(); ?>" class="block">
                                                <?php the_post_thumbnail('thumbnail', array('class' => 'w-full h-full object-cover hover:scale-105 transition-transform duration-300')); ?>
                                            </a>
                                        </div>
                                        <div class="flex-1">
                                            <p class="text-gray-600 leading-relaxed">
                                                <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p class="text-gray-600 leading-relaxed">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>

                            <footer class="entry-footer mt-4">
                                <a href="<?php the_permalink(); ?>" class="text-blue-600 hover:text-blue-800 font-medium">
                                    Leer más
                                </a>
                            </footer>
                        </div>
                    </article>
                    <?php
                endwhile;

                // Paginación
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => __('« Anterior', 'aldeafpa'),
                    'next_text' => __('Siguiente »', 'aldeafpa'),
                ));

            else :
                ?>
                <div class="col-span-full text-center py-12">
                    <div class="max-w-md mx-auto">
                        <svg class="mx-auto h-24 w-24 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">
                            <?php _e('No hay entradas', 'aldeafpa'); ?>
                        </h3>
                        <p class="text-gray-500">
                            <?php _e('No se encontraron entradas para mostrar.', 'aldeafpa'); ?>
                        </p>
                    </div>
                </div>
                <?php
            endif;
            ?>
        </div>
    </div>
</main>

<?php
get_footer();
