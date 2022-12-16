<div <?php if (is_front_page()) : echo 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
      endif; ?> class="wrapper">
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      attachText = '<?php pll_e('Załącz CV'); ?>';
      attachedText = '<?php pll_e('Załączono'); ?>';
    });
  </script>

  <?php if (!get_field('czy_schowac')) : ?>
    <div class="outer-wrapper right">
      <h4 class="s-18-16 w-600 c-red small-title"><?php the_field('call_now_title', 'options'); ?></h4>
      <div class="contact-blocks">
        <div class="single-block">
          <div class="icon"><?php echo et_svg('wp-content/themes/ergotree/assets/img/phone.svg'); ?></div>
          <div class="text">
            <div class="label s-13-16"><?php the_field('phone_title', 'options'); ?></div>
            <a class="s-16-14" href="tel: <?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a>
          </div>
        </div>
      </div>
    </div>
  <?php else : ?>
    <div class="spacer"></div>
  <?php endif; ?>
  <div class="title c-gray w-600"><?php the_field('tytul'); ?></div>
  <div class="form-wrap">
    <?php $formid = get_field("formularz")[0]->ID; ?>
    <?= et_form($formid); ?>
  </div>
</div>