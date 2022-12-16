<?php

$args = array(
  'post_type' => 'page',
  'title' => 'Kariera'
);

$your_query = new WP_Query($args);
while ($your_query->have_posts()) : $your_query->the_post();
  the_content();
endwhile;

?>
<section class="kariera-categories">
  <div class="my-container">
    <div class="wrapper-categories">
      <?php
      $args = array(
        'taxonomy' => 'sektor',
        'hide_empty' => false,
      );

      $cats = get_categories($args);

      foreach ($cats as $cat) {
        include("cat-template.php");
      }
      ?>
    </div>
  </div>
</section>
<section class="kariera-posts">
  <div class="my-container">
    <h3 class="title w-600 s-34-18 c-gray"><?php pll_e('Aktualne'); ?></h3>
    <div class="wrapper-posts">
      <?php
      if (have_posts()) :
        while (have_posts()) :
          the_post();
          include("post-template.php");
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>