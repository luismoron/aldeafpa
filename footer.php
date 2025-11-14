<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aldeafpa
 */

?>

	<footer id="contactanos" class="site-footer bg-gray-100 py-8 sm:py-16">
		<?php
		$contactanos_page = get_page_by_title('Contactanos');
		if ($contactanos_page) :
			global $post;
			$post = $contactanos_page;
			setup_postdata($post);
		?>
			<div class="container mx-auto px-4">
				<div class="prose prose-base sm:prose-lg mx-auto text-center sm:text-left">
					<?php the_content(); ?>
				</div>
			</div>
		<?php
			wp_reset_postdata();
		else :
		?>
			<p class="text-center">La página "Contactanos" no existe aún. Crea una página con ese título en WordPress.</p>
		<?php endif; ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
