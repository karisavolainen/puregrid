
<?php get_header();
/*
 * Template Name: Frontpage
 * Template Post Type: post, page, product
 */

?>

<div class="grid-container">

  <div class="grid-item gallery">
    <!--?php get_sidebar(); ?-->
  </div>

  <div class="grid-item content">
    <?php
  	  if ( have_posts() ) : while ( have_posts() ) : the_post();

  		  get_template_part( 'content', get_post_format() );

  	  endwhile; endif;
  	?>
  </div>


<?php get_footer(); ?>
