<div class="read-also-wrapper">
  <div class="label">Czytaj również:</div>
  <div class="related-posts">
    <ul>
      <?php
      global $post;
      $related = new WP_Query(
        array(
          'category__in'   => wp_get_post_categories($post->ID),
          'posts_per_page' => 3,
          'orderby' => 'rand',
          'post__not_in'   => array($post->ID)
        )
      );
      if ($related->have_posts()) {
        while ($related->have_posts()) {
          $related->the_post();
      ?>
          <?php setup_postdata($post); ?>
          <li><a href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></li>
      <?php
        }
        wp_reset_postdata();
      }
      ?>
    </ul>
  </div>
</div>