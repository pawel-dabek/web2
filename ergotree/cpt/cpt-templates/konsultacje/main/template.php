<div class="wrapper-posts" style="display: flex; flex-wrap: wrap; justify-content: center;">
  <?php

  if (have_posts()) :
    while (have_posts()) :
      the_post();
      include("post-template.php");
    endwhile;
  endif; ?>
</div>
<?php if ($paginationType == "Ajax") :
  echo do_shortcode("[et_load_more_button]");
else :
  echo get_the_posts_pagination();
endif;

?>