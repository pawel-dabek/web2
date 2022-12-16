<div class="w-700 sign"><?php echo et_svg('wp-content/themes/ergotree/assets/img/quote.svg'); ?></div>
<p class="w-500 s-18-14 text c-red"><?php the_field('text'); ?></p>
<?php if (get_field('name')) : ?>
  <div class="w-700 author c-gray"><?php the_field('name'); ?></div>
<?php else : ?>
  <div class="w-700 author c-gray"><?php the_title(); ?></div>
<?php endif; ?>