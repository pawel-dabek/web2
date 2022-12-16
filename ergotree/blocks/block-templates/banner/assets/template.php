<?php

$class = '';

if (get_field('smaller_margin')) {
  $class = ' smaller-margin';
}

?>


<div class="my-container<?php echo $class; ?>">
  <?php if (get_field('link')) : ?>
    <a href="<?php the_field('link'); ?>">
    <?php endif; ?>
    <div class="banner-desktop"><?php et_image('baner_desktop', 'large'); ?></div>
    <div class="banner-mobile"><?php et_image('baner_mobile', 'large'); ?></div>
    <?php if (get_field('link')) : ?>
    </a>
  <?php endif; ?>
</div>