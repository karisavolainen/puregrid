<div class="masonry">
  <?php

  $imgs = get_field('images');

  if( $imgs ): ?>

    <?php foreach( $imgs as $image ): ?>
      <div class="item">
          <a href="<?php echo $image['url']; ?>" class="fresco"   data-fresco-group="unique_name">
            <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
          </a>
          <p><?php echo $image['caption']; ?></p>
        </div>
      <?php endforeach; ?>

  <?php endif; ?>
</div>
