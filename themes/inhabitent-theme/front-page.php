<?php
/**
 * The template file for home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

        <div class="banner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" />
        </div>

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

                <?php $product_posts = inhabitent_get_latest_posts(); ?>
                <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <div>
       <?php if(has_post_thumbnail()): ?>
       <?php the_post_thumbnail('medium'); ?>
       <?php endif; ?>

       <a href="<?php the_permalink(); ?>">Read Entry</a>

       <?php
         the_date();
         echo comments_number();
         the_title();

       endforeach;

       wp_reset_postdata();
       ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>