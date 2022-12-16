<?php

$choice1 = '1';
$class1 = '';
$class2 = '';
$class3 = '';

if (get_field('uklad_mobile')) {
  $choice1 = '3';
  $class1 = " mobile-different";
}

if (get_field('wiekszy_margines')) {
  $class2 = " margin-top";
}

if (get_field('czarne_podpisy')) {
  $class3 = " black-text";
}

?>

<div class="my-container<?php echo $class2; ?>">
  <h3 class="title w-600 s-34-18 c-gray"><?php the_field('title'); ?></h3>
  <div class="icons<?php echo $class1; ?>">
    <div class="row row-cols-lg-5 row-cols-md-4 row-cols-sm-3 row-cols-<?php echo $choice1; ?>">
      <?php if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
          <div class="col">
            <div class="single<?php echo $class3; ?>">
              <div class="icon"><?php et_image('icon'); ?></div>
              <p class="desc c-red s-13-16"><?php the_sub_field('text'); ?></p>
              <?php if (get_sub_field('black_text')) : ?>
                <p class="desc-black"><?php the_sub_field('black_text'); ?></p>
              <?php endif; ?>
            </div>
          </div>
      <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>