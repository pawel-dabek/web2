<h3 class="title c-gray w-600"><?php the_field('tytul'); ?></h3>

<ul class="categories-list">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <li><a class="s-16-14" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
  <?php endwhile;
  endif; ?>
</ul>