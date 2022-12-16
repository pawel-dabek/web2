<?php if (get_field('title')) : ?>
  <h3 class="title s-34-18 c-gray w-600"><?php the_field('title'); ?></h3>
<?php endif; ?>
<p class="desc s-16-14"><?php the_field('text', false, false); ?></p>