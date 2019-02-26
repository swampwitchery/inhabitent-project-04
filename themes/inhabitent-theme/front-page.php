<?php
/**
 * The template file for home page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">  
      <section class="main-logo">
      <img src=<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-full.svg'?>>
</section>

      <h2 class="shop"> Shop Stuff </h2>

		<section class="shopping-area">
           <?php $product_items=get_terms('product_type');?>
           <?php foreach ( $product_items as $term ) : setup_postdata( $term ); ?>
              <div class="product-stuff">
                 <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/' . $term->slug . '.svg'?>>
                 <p><?php echo $term->description ?></p>
                 <a href=<?php echo get_term_link($term)?> class="item-button"> <?php echo $term->name?> Stuff</a>
              </div>
           <?php endforeach; wp_reset_postdata(); ?>
		</section>

      <h2 class="shop"> Inhabitent Journal </h2>
      
      <section class="latest-post">

                <?php $product_posts = inhabitent_get_latest_posts(); ?>
                <div class="three-post">
                <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
               <div class="single-three-post">
                
                  <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail('medium'); ?>


                  <?php
                     the_date();
                     echo comments_number();
                     the_title();
                     ?>
                  <a href="<?php the_permalink(); ?>" class="read-entry">Read Entry</a>

                  <?php endif; ?>

                  </div>
                  <?php endforeach; wp_reset_postdata(); ?>
               </div>
         </section>

         <section class="latest-adventures">
         <h2 class="adventure-heading"> Latest Adventures </h2>
         <p>Getting Back to Nature in a Canoe</p>
            <p>A Night with Friends at the Beach</p>
            <p>Taking in the View at Big Mountain</p>
            <p>Star-Gazing at the Night Sky</p>
         </section>   
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>