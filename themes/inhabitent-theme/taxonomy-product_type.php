<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<h1><?php echo str_replace("Product Type: ", "", get_the_archive_title()); ?></h1>
			
            <?php the_archive_description('<div class="taxonomy-description">', '</div>');?>

		<div class="archive-product-list">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'shop');
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>	

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

