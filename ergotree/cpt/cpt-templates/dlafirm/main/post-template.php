<article class="single-post-wrapper">
  <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
  <div class="text">
    <h3 class="title c-gray s-34-18"><?php the_title(); ?></h3>
    <p class="excerpt s-16-16 c-gray"><?php echo get_the_excerpt(); ?></p>
    <div class="btn-wrapper">
      <a href="<?php the_permalink(); ?>" class="btn-red-full"><?php pll_e('Czytaj więcej'); ?></a>
    </div>
  </div>
</article>