<?php
if (get_field('mobile_nav')) : ?>
  <div class="mobile-nav-okruszki">
  <?php endif;
if (function_exists('yoast_breadcrumb')) {
  yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
}

if (get_field('mobile_nav')) : ?>
    <div class="my-container-nav">
      <div class="btn-wrapper">
        <?php et_link('przycisk_1', 'btn-black'); ?>
        <div class="line"></div>
        <?php et_link('przycisk_2', 'btn-black'); ?>
        <div class="line"></div>
        <?php et_link('przycisk_3', 'btn-black'); ?>
        <div class="line"></div>
        <?php et_link('przycisk_4', 'btn-black'); ?>
      </div>
    </div>
  </div>
<?php endif; ?>