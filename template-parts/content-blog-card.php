<?php
/**
 * Template part for displaying blog card posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aldeafpa
 */

?>

<a href="<?php the_permalink(); ?>" class="bg-white rounded-lg shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 overflow-hidden relative block break-inside-avoid">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="w-full h-48 overflow-hidden">
            <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-full object-cover' ) ); ?>
        </div>
    <?php endif; ?>

    <div class="p-4 pb-20">
        <div class="mb-2">
            <span class="text-sm text-gray-500"><?php echo get_the_date(); ?></span>
        </div>

        <h3 class="font-bold text-lg mb-2 text-center">
            <?php the_title(); ?>
        </h3>

        <p class="text-gray-700 text-sm mb-4 mt-2 text-justify"><?php echo wp_trim_words( get_the_excerpt(), 60 ); ?></p>
    </div>

    <div class="absolute bottom-4 left-4 flex items-center">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', '', array( 'class' => 'rounded-full mr-3' ) ); ?>
        <div>
            <p class="text-sm font-medium text-gray-900">Autor <?php the_author(); ?></p>
        </div>
    </div>
</a>