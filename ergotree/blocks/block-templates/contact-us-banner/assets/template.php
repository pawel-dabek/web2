<?php

$class = '';
$class2 = '';
$class3 = '';
$class4 = '';
$class5 = '';

if (get_field('text')) :
  $class2 = " with-text";
endif;

if (get_field('margin_top')) :
  $class = " margin-top";
  if (get_field('mniejszy_margines')) {
    $class = " margin-top-small";
  }
endif;

if (get_field('bigger_font')) :
  $class3 = " s-34-18";
  $class4 = ' bigger-font';
endif;

if (get_field('turn_off_button')) :
  $class5 = ' turn-off-button';
endif;


?>

<div class="my-container<?php echo $class; ?>">
  <div class="wrapper">
    <div class="left<?php echo $class2;
                    echo $class5; ?>">
      <h3 class="title w-600<?php echo $class3; ?>"><?php the_field('title'); ?></h3>
      <?php if (get_field('text')) : ?><p class="text"><?php echo get_field('text', false, false); ?></p><?php endif; ?>
    </div>
    <?php if (!get_field('turn_off_button')) : ?>
      <div class="right">
        <div class="btn-wrapper<?php echo $class4; ?>">
          <?php et_link('button', 'btn-red-full'); ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</div>