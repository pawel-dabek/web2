<div <?php if (is_front_page()) : echo 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
      endif; ?> class="wrapper">
  <h2 class="s-60-30 c-red title w-600"><?php the_field('title'); ?></h2>
  <p class="newsletter--tekst s-16-14"><?php the_field('tekst'); ?></p>
  <div class="form-wrap">
    <?php $formid = get_field("formularz")[0]->ID; ?>
    <?= et_form($formid); ?>
  </div>
</div>