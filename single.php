<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                    if ( is_singular() ) :
                        the_title( '<h1 class="entry-title text-3xl md:text-4xl font-bold text-gray-900 mb-4 leading-tight">', '</h1>' );
                    else :
                        the_title( '<h2 class="entry-title text-2xl font-bold mb-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-gray-900 hover:text-blue-600">', '</a></h2>' );
                    endif;

                    if ( 'post' === get_post_type() ) :
                    ?>
                        <div class="entry-meta text-sm text-gray-600 mb-6 flex flex-wrap items-center gap-4">
                            <span><?php echo get_the_date(); ?></span>
                            <span><?php the_author(); ?></span>
                            <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) :
                                echo '<span>' . esc_html( $categories[0]->name ) . '</span>';
                            endif;
                            ?>
                        </div><!-- .entry-meta -->
                    <?php endif; ?>
                </header><!-- .entry-header -->

                <?php aldeafpa_post_thumbnail(); ?>

                <div class="entry-content text-gray-800 leading-relaxed text-lg mb-8">
                    <?php
                    the_content(
                        sprintf(
                            wp_kses(
                                /* translators: %s: Name of current post. Only visible to screen readers */
                                __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'aldeafpa' ),
                                array(
                                    'span' => array(
                                        'class' => array(),
                                    ),
                                )
                            ),
                            wp_kses_post( get_the_title() )
                        )
                    );

                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aldeafpa' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div><!-- .entry-content -->

                <footer class="entry-footer mt-12 pt-8 border-t border-gray-200">
                    <?php aldeafpa_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-<?php the_ID(); ?> -->

            <?php
            the_post_navigation(
                array(
                    'prev_text' => '<span class="nav-subtitle font-medium text-gray-600">' . esc_html__( 'Anterior:', 'aldeafpa' ) . '</span> <span class="nav-title block text-lg font-bold text-gray-900 hover:text-blue-600">%title</span>',
                    'next_text' => '<span class="nav-subtitle font-medium text-gray-600">' . esc_html__( 'Siguiente:', 'aldeafpa' ) . '</span> <span class="nav-title block text-lg font-bold text-gray-900 hover:text-blue-600">%title</span>',
                )
            );

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

