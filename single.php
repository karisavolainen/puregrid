
<?php
/*
 * Template Name: Article - no gallery
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

<?php get_footer(); ?>
