
<?php
/*
 * Template Name: Article with gallery
 * Template Post Type: post, page, product
 */

get_header(); ?>
<div class="grid-container">
  <div class="grid-item content">
    <?php
  	  if ( have_posts() ) : while ( have_posts() ) : the_post();

  		  get_template_part( 'content', get_post_format() );

  	  endwhile; endif;
  	?>
  </div>

  <div class="grid-item gallery-grid">
    <?php get_sidebar(); ?>
  </div>

<?php get_footer(); ?>
