<div <?php if (is_front_page()) : echo 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
      endif; ?> class="wrapper">
  <h2 class="s-60-30 title c-gray"><?php the_field('title'); ?></h2>
  <div class="big-img-slide--slider">
    <div class="splide splide_slider">
      <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev"><?php echo et_svg('wp-content/themes/ergotree/assets/img/slider_arrow_left.svg'); ?></button>
        <button class="splide__arrow splide__arrow--next"><?php echo et_svg('wp-content/themes/ergotree/assets/img/slider_arrow_right.svg'); ?></button>
      </div>
      <div class="splide__track">
        <ul class="splide__list">
          <?php if (have_rows('slider')) : while (have_rows('slider')) : the_row(); ?>
              <li class="splide__slide">
                <?php et_image("image", "full", false, "big-img-slide--image"); ?>
              </li>
          <?php endwhile;
          endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>