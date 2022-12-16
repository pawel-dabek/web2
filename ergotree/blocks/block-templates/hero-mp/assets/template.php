<?php

$red = '';

if (get_field('red_font')) {
  $red = ' red';
}

$smaller = '';

if (get_field('smaller_title_font')) {
  $smaller = ' smaller';
}

?>

<div class="wrap<?php if (!get_field('button')) {
                  echo " without-buttons";
                } ?>">
  <h1 class="title w-600<?php echo $red;
                        echo $smaller; ?>"><?php the_field('title'); ?></h1>
  <p class="s-16-16 desc<?php echo $red; ?>"><?php the_field('text'); ?></p>
  <?php if (get_field('button')) : ?>
    <div class="btn-wrapper">
      <?php et_link("button", "btn-white-full s-16-14"); ?>
      <?php if (get_field('button_1')) : ?>
        <div class="btn-second s-16-14">
          <?php if (get_field('label')) : ?>
            <div class="label"><?php the_field('label'); ?></div>
          <?php endif; ?>
          <?php et_link('button_1'); ?>
        </div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if (!get_field('button')) { ?>
    <div class="scroll-down<?php echo $red; ?>"><?php echo et_svg('wp-content/themes/ergotree/assets/img/scroll-down.svg'); ?></div>
  <?php } ?>
</div>