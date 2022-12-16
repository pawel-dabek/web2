<div class="left">
  <div class="single-block order-1">
    <p class="label s-16-16 w-700"><?php the_field('godziny'); ?></p>
    <p class="desc s-16-16"><?php the_field('txt_area'); ?></p>
  </div>
  <div class="single-block order-2">
    <p class="label s-16-16 w-700"><?php the_field('register'); ?></p>
    <p class="links s-16-16"><?php echo get_field('rejestracja_text', false, false); ?></p>
  </div>
  <div class="single-block order-3">
    <p class="label s-16-16 w-700"><?php the_field('coop'); ?></p>
    <p class="links s-16-16"><?php echo get_field('wspolpraca_i_kariera_text', false, false); ?></p>
  </div>
  <div class="single-block order-5">
    <p class="label s-16-16 w-700"><?php the_field('info'); ?></p>
    <div class="s-16-16"><?php echo get_field('info_text', false); ?></div>
  </div>
</div>
<div class="right order-4">
  <h3 class="title s-34-18 c-red w-600"><?php the_field('title'); ?></h3>
  <p class="desc s-16-16"><?php the_field('desc'); ?></p>
  <div class="btn-wrapper"><?php et_link('przycisk', 'btn-red-border s-16-14'); ?></div>
  <div class="map-wrapper" id="map"></div>
</div>