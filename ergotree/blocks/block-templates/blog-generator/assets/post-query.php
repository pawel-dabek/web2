<?php

$args_sticky = [
  'post__in' => get_option('sticky_posts'),
  'post_status' => 'publish'
];

$posts = new WP_Query($args_sticky);

$sticky_count = $posts->post_count;

$count = 3 - $sticky_count;

if ($count < 0) {
  $count = 0;
}

$args = array(
  "post_type" => "post",
  "posts_per_page" => $count,
);

$my_custom_query = new WP_Query($args);
if ($my_custom_query->have_posts()) :
  while ($my_custom_query->have_posts()) :
    // $post_count++;
    $my_custom_query->the_post();
    include('post-template.php');
  endwhile;
else :
  include('no-posts.php');
  wp_reset_postdata();
endif;
