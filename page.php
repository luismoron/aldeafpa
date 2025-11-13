<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aldeafpa
 */

get_header();
?>

<main id="primary" class="site-main bg-gray-50 py-12">
    <div class="container mx-auto px-4 max-w-4xl">

        <?php
        while ( have_posts() ) :
            the_post();
        ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-md p-8 md:p-12'); ?>>
                <header class="entry-header mb-8">
                    <?php
                    the_title( '<h1 class="entry-title text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight text-center">', '</h1>' );
                    ?>
                </header><!-- .entry-header -->

                <div class="entry-content text-gray-800 leading-relaxed text-lg mb-8 text-justify">
                    <?php
                    the_content();

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aldeafpa' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div><!-- .entry-content -->

                <div class="text-center mt-8 mb-8">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block bg-gradient-to-r from-blue-500 to-blue-700 text-white px-8 py-4 rounded-full shadow-lg hover:shadow-xl hover:from-blue-600 hover:to-blue-800 transform hover:scale-105 transition-all duration-300 font-semibold text-lg">Regresar a la Página de Inicio</a>
                </div>

                <?php if ( get_edit_post_link() ) : ?>
                    <footer class="entry-footer mt-12 pt-8 border-t border-gray-200">
                        <?php
                        edit_post_link(
                            sprintf(
                                wp_kses(
                                    /* translators: %s: Name of current post. Only visible to screen readers */
                                    __( 'Edit <span class="screen-reader-text">%s</span>', 'aldeafpa' ),
                                    array(
                                        'span' => array(
                                            'class' => array(),
                                        ),
                                    )
                                ),
                                wp_kses_post( get_the_title() )
                            ),
                            '<span class="edit-link">',
                            '</span>'
                        );
                        ?>
                    </footer><!-- .entry-footer -->
                <?php endif; ?>
            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </div>
</main><!-- #main -->

<?php
get_footer();

