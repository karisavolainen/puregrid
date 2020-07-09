
<?php get_header();
/*
 * Template Name: Frontpage
 * Template Post Type: post, page, product
 */

?>
<?php $image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>

  <div class="front-container">

    <div class="hero" style="background: url(<?php echo $image_url; ?>);">
      <div class="center-content">
        <?php
      	  if ( have_posts() ) : while ( have_posts() ) : the_post();

      		  get_template_part( 'content', get_post_format() );

      	  endwhile; endif;
      	?>
    </div>
  </div>

    <div class="cat">
      <img class="icon" src="wp-content/uploads/2020/07/airplane.png">
      <h2 class="center-text"> Reissut </h2>

        <?php $catquery = new WP_Query( 'cat=4&posts_per_page=5' ); ?>
        <ul>
        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
        <li> &ocir; <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php wp_reset_postdata(); ?>
    </div>

    <div class="cat">
      <img class="icon" src="wp-content/uploads/2020/07/brand.png">
      <h2 class="center-text"> Mac </h2>

      <?php $catquery = new WP_Query( 'cat=2&posts_per_page=5' ); ?>
      <ul>
      <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
      <li> &ocir; <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
      </li>
      <?php endwhile; ?>
    </div>

    <div class="cat">
      <img class="icon" src="wp-content/uploads/2020/07/camera.png">
      <h2 class="center-text"> Valokuvaus </h2>

      <?php $catquery = new WP_Query( 'cat=3&posts_per_page=5' ); ?>
      <ul>
      <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
      <li> &ocir; <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
      </li>
      <?php endwhile; ?>
    </div>

<?php get_footer(); ?>
