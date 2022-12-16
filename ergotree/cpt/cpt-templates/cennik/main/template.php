<?php

$args = array(
  'post_type' => 'page',
  'title' => 'Cennik'
);

$your_query = new WP_Query($args);
while ($your_query->have_posts()) : $your_query->the_post();
  the_content();
endwhile;
