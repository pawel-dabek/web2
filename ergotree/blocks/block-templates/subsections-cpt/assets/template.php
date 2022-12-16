<?php

$withTitle = get_field('select');
$withButtons = get_field('select_2');
$twoTitles = "";

if (get_field('tytul_2')) {
  $twoTitles = " two-titles";
}

?>
<?php if (get_field('title')) : ?>
  <h3 class="title s-34-18 c-gray w-600"><?php the_field('title'); ?></h3>
<?php endif; ?>
<div class="my-container <?php echo $withTitle; ?>">
  <div class="wrapper<?php echo $twoTitles; ?>">
    <?php if (get_field('tytul_2')) : ?>
      <div class="title-wrapper">
        <h4 class="small-title order-1"><?php the_field('tytul_1'); ?></h4>
        <h4 class="small-title order-3"><?php the_field('tytul_2'); ?></h4>
      </div>
    <?php else : ?>
      <h4 class="small-title"><?php the_field('tytul_1'); ?></h4>
    <?php endif; ?>
    <?php if (get_field('subsection_area_2')) : ?>
      <div class="text-wrapper">
        <div class="wrap s-16-14">
          <?php the_field('subsection_area_1', false, false); ?>
          <?php if (get_field('button_1')) : ?>
            <div class="btn-wrapper">
              <?php et_link('button_1', 'btn-red-full'); ?>
            </div>
          <?php endif; ?>
        </div>
        <div class="wrap">
          <?php the_field('subsection_area_2', false, false); ?>
          <?php if (get_field('button_1')) : ?>
            <div class="btn-wrapper">
              <?php et_link('button_2', 'btn-red-full'); ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php else : ?>
      <?php the_field('subsection_area_1', false, false); ?>
    <?php endif; ?>
  </div>
</div>