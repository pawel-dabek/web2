<?php

$smallerMargin = '';

if (get_field('mniejszy_margines')) {
  $smallerMargin = ' smaller-margin';
}

?>
<div class="my-container<?php echo $smallerMargin; ?>">
  <div class="btn-wrapper">
    <?php et_link('przycisk_1', 'btn-red-border'); ?>
    <?php et_link('przycisk_2', 'btn-red-border'); ?>
    <?php et_link('przycisk_3', 'btn-red-border'); ?>
    <?php et_link('przycisk_4', 'btn-red-border'); ?>
  </div>
</div>