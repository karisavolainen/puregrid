
  <?php

  $imgs = get_field('images');

  if( $imgs ): ?>

    <?php foreach( $imgs as $image):  ?>


          <a class="<?php
            $class = "landscape";
            if ($image['width'] < $image['height']) {
              $class = "portrait";
            };
            echo $class; ?>"
            href="<?php echo $image['url']; ?>">
            <img src="<?php echo $image['sizes']['large']; ?>"
            alt="<?php echo $image['alt']; ?>" />
          </a>
    <?php endforeach; ?>

  <?php endif; ?>


<!--p><?php echo $image['caption']; ?></p-->
<!-- class="fresco"   data-fresco-group="unique_name" -->
