<?php

$slug = get_queried_object()->slug;

$title = 'Konsultacje - ' . get_queried_object()->name;

$args = array(
  'post_type' => 'page',
  'title' => $title,
);

$your_query = new WP_Query($args);
while ($your_query->have_posts()) : $your_query->the_post();
  the_content();
endwhile;
wp_reset_postdata();
