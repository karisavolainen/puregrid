
<?php get_header(); ?>

<div class="grid-item textarea">
  <?php
	  if ( have_posts() ) : while ( have_posts() ) : the_post();

		  get_template_part( 'content', get_post_format() );

	  endwhile; endif;
	?>
</div>

<div id="gallery" class="grid-item">
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
