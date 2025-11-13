<?php
/**
 * Template part for displaying blog card posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aldeafpa
 */

?>

<div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden relative">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="w-full h-48 overflow-hidden">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'medium', array( 'class' => 'w-full h-full object-cover' ) ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="p-4">
        <div class="mb-2">
            <span class="text-sm text-gray-500"><?php echo get_the_date(); ?></span>
        </div>

        <h3 class="font-bold text-lg mb-2">
            <a href="<?php the_permalink(); ?>" class="text-gray-900 hover:text-blue-600"><?php the_title(); ?></a>
        </h3>

        <p class="text-gray-700 text-sm mb-4"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>

        <div class="flex items-center">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 32, '', '', array( 'class' => 'rounded-full mr-3' ) ); ?>
            <div>
                <p class="text-sm font-medium text-gray-900"><?php the_author(); ?></p>
                <p class="text-sm text-gray-500">Autor</p> <!-- Placeholder para cargo, puedes usar un campo custom -->
            </div>
        </div>
    </div>

    <a href="<?php the_permalink(); ?>" class="absolute bottom-4 right-4 bg-gradient-to-r from-green-500 to-green-700 text-white px-4 py-2 rounded-full shadow-lg hover:shadow-xl hover:from-green-600 hover:to-green-800 transform hover:scale-105 transition-all duration-300 font-semibold text-sm">Leer más</a>
</div>