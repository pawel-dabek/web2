<?php

$args = array(
  'post_type' => 'page',
  'title' => 'Dla firm'
);

$your_query = new WP_Query($args);
while ($your_query->have_posts()) : $your_query->the_post();
  the_content();
endwhile;

?>
<section class="dla-firm-posts">
  <div class="my-container">
    <div class="wrapper-posts">
      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
          include("post-template.php");
        endwhile;
      endif; ?>
    </div>
  </div>
</section>