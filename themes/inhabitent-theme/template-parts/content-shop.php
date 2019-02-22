<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Academy_Theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
		<?php endif; ?>

		<?php the_title( '<p class="entry-title">', '</p>' ); ?>

	<p><?php echo CFS()->get('product_price'); ?></p>


	<footer class="entry-footer">
		<?php inhabitent_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
