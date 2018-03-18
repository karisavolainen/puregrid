<div id="gallery2">
<!--div class="masonry"-->
    <?php

  $imgs = get_field('images');

  if( $imgs ): ?>

    <?php foreach( $imgs as $image ): ?>
      <!-- div class="item" -->
          <a href="<?php echo $image['url']; ?>" class="fresco"   data-fresco-group="unique_name">
            <?php
              /* list($x, $y) = getimagesize($image['url']); */
              $x = $image['sizes'][ 'large' . '-width' ];
              $y = $image['sizes'][ 'large' . '-height' ];
              if ($x > $y) {
                $class = "landscape";
              } else {
                $class = "portrait";
              }
            ?>
            <img src="<?php echo $image['sizes']['large']; ?>"  class="<?php echo $class; ?>" alt="<?php echo $image['alt']; ?>" />
          </a>
        <!--/div-->
      <?php endforeach; ?>

  <?php endif; ?>
</div>
