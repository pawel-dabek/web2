<div <?php if (is_front_page()) : echo 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
      endif; ?> class="wrapper">
  <h2 class="s-60-30 w-600 title c-gray"><?php pll_e('Kontakt z'); ?></h2>
  <div class="row">
    <div class="col-md-6 col-sm-7">
      <div class="outer-wrapper left">
        <h4 class="s-18-16 w-600 c-gray small-title"><?php pll_e('Lokalizacja'); ?></h4>
        <p class="s-16-14 desc"><?php pll_e('Jesteśmy w samym centrum'); ?></p>
        <div class="btn-wrapper">
          <?php et_link('google_maps_button', 'btn-red-border s-16-14'); ?>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-sm-5">
      <div class="outer-wrapper right">
        <h4 class="s-18-16 w-600 c-red small-title"><?php pll_e('Umów wizytę już teraz'); ?></h4>
        <div class="contact-blocks">
          <div class="single-block">
            <div class="icon"><?php echo et_svg('wp-content/themes/ergotree/assets/img/phone.svg'); ?></div>
            <div class="text">
              <div class="label s-13-16"><?php pll_e('Telefon'); ?></div>
              <a class="s-16-14" href="tel: <?php the_field('phone', 'options'); ?>"><?php the_field('phone', 'options'); ?></a>
            </div>
          </div>
          <div class="single-block">
            <div class="icon"><?php echo et_svg('wp-content/themes/ergotree/assets/img/mail.svg'); ?></div>
            <div class="text">
              <div class="label s-13-16"><?php pll_e('Wiadomość'); ?></div>
              <a class="s-16-14" href="tel: <?php the_field('email', 'options'); ?>"><?php pll_e('Napisz do Nas'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>