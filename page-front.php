
<?php get_header();
/*
 * Template Name: Frontpage
 * Template Post Type: post, page, product
 */

?>
<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>

<div class="front-grid" style="background: url(<?php echo $image_url; ?>);" >

  <div class="grid-item hero" >
    <?php
  	  if ( have_posts() ) : while ( have_posts() ) : the_post();

  		  get_template_part( 'content', get_post_format() );

  	  endwhile; endif;
  	?>
  </div>

    <div class="grid-item bglight travel">
      <h2> Reissut </h2>

        <?php $catquery = new WP_Query( 'cat=4&posts_per_page=5' ); ?>
        <ul>
        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
        <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?>

    </div>
    <div class="grid-item bglight mac">
      <h2> Mac </h2>

      <?php $catquery = new WP_Query( 'cat=2&posts_per_page=5' ); ?>
      <ul>
      <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
      <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
      </li>
      <?php endwhile; ?>

    </div>
    <div class="grid-item bglight opinion">
      <h2> Mielipideosasto </h2>

      <?php $catquery = new WP_Query( 'cat=5&posts_per_page=5' ); ?>
      <ul>
      <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
      <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
      </li>
      <?php endwhile; ?>

    </div>



<?php get_footer(); ?>
