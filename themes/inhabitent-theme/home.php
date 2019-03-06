<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="journal-content-area">
		<main id="main" class="site-main journal-page" role="main">

			 <?php if ( is_home() && ! is_front_page() ) : ?>
			
			<div class="article-area">
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content' ); ?>
					<a href=<?php echo get_permalink();?>>Read More &rarr;</a>

				<?php endwhile; ?>
				
				<?php the_posts_navigation(); ?>

				<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
		</div>
		<?php get_sidebar(); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
