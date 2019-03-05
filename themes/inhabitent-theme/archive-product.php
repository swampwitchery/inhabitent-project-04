<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div class="container">
			<header class="page-header">
				<h2>Shop Stuff</h2>
			</header><!-- .page-header -->

			<div class="product-loop">
				<?php if ( have_posts() ) : ?>
				<?php $product_items=get_terms('product_type');?>
				<?php foreach ( $product_items as $term ) : setup_postdata( $term ); ?>
				<a href=<?php echo get_term_link($term)?>> <?php echo $term->name?></a>
				<?php endforeach; wp_reset_postdata(); ?>
			</div>

			<div class="archive-product-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content', 'shop');?>
				<?php endwhile; ?>

				<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</div>

</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>