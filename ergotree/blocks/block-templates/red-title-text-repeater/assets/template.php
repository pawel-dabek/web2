<?php

$class1 = '';
$class2 = '';

$font = get_field('select');
$layout = get_field('select_2');

if (get_field('smaller_margin')) {
  $class1 = ' smaller-margin';
}

if (get_field('smaller_margin_top')) {
  $class2 = ' smaller-margin-top';
}

?>
<div <?php if (is_front_page()) : echo 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
      endif; ?> class="wrapper <?php echo $font;
                                echo $class1;
                                echo $class2; ?>">
  <?php if ($layout === 'with-title') : ?>
    <h2 class="title s-34-18 c-gray w-600"><?php the_field('title'); ?></h2>
  <?php endif; ?>
  <div class="row">
    <?php $x = 100; ?>
    <?php if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
        <div class="col-md-6">
          <div class="single-wrapper">
            <?php if (get_sub_field('repeater_title')) : ?>
              <h3 class="c-red s-34-18 small-title w-600"><?php the_sub_field('repeater_title'); ?></h3>
            <?php endif; ?>
            <p class="s-16-14"><?php echo get_sub_field('text', false); ?></p>
          </div>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</div>