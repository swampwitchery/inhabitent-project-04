<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

		<h1>
                <?php echo str_replace("Product Type: ", "", get_the_archive_title()); ?>
            </h1>
            <?php the_archive_description('<div class="taxonomy-description">', '</div>');
            ?>

      <section class="product-loop">
			<?php $product_items=get_terms('product_type');?>
           <?php foreach ( $product_items as $term ) : setup_postdata( $term ); ?>
              <div class="product-stuff">
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?></a>
              </div>
           <?php endforeach; wp_reset_postdata(); ?>
			</section>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'template-parts/content', 'shop');
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>

