<div <?php if (is_front_page()) : echo 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
      endif; ?> class="wrapper">
  <h2 class="s-60-30 title c-gray"><?php the_field('title'); ?></h2>
  <ul class="splide__indicator">
    <?php $x = 1;
    if (have_rows('main_repeater')) : while (have_rows('main_repeater')) : the_row(); ?>
        <?php
        $active = '';
        if ($x == 1) {
          $active = ' is-active';
        }
        ?>
        <li data-tab="tab-<?php echo $x; ?>" class="<?php echo $active; ?>"><?php the_sub_field('tab'); ?></li>
        <?php $x++; ?>
    <?php endwhile;
    endif; ?>
  </ul>
  <div class="slider">
    <div class="splide splide-opinions">
      <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev"><?php echo et_svg('wp-content/themes/ergotree/assets/img/slider_arrow_left.svg'); ?></button>
        <button class="splide__arrow splide__arrow--next"><?php echo et_svg('wp-content/themes/ergotree/assets/img/slider_arrow_right.svg'); ?></button>
      </div>
      <div class="splide__track">
        <ul class="splide__list">
          <?php $x = 1; ?>
          <?php if (have_rows('main_repeater')) : while (have_rows('main_repeater')) : the_row(); ?>
              <?php if (have_rows('opinion')) : while (have_rows('opinion')) : the_row(); ?>
                  <li class="splide__slide tab-<?php echo $x; ?>" data-tab="tab-<?php echo $x; ?>">
                    <div class=" opinion-wrapper">
                      <div class="upper">
                        <div class="name s-16-16"><?php the_sub_field('name'); ?></div>
                        <div class="stars">
                          <?php
                          $stars_number = get_sub_field('ilosc_gwiazdek');
                          for ($i = 0; $i < $stars_number; $i++) {
                            echo et_svg('wp-content/themes/ergotree/assets/img/star.svg');
                          }
                          ?>
                        </div>
                        <p class="desc s-13-14"><?php the_sub_field('opinion'); ?></p>
                      </div>
                      <a target="_blank" href="<?php the_sub_field('link'); ?>" class="logo"><?php et_image('logo', 'medium', false); ?></a>
                    </div>
                  </li>
              <?php
                endwhile;
                $x++;
              endif; ?>
          <?php endwhile;
          endif; ?>
        </ul>
      </div>
    </div>
  </div>
</div>