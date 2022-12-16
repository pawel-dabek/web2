<div class="upper">
  <div class="left">
    <h3 class="title s-34-18 w-600 c-gray"><?php the_field('title'); ?></h3>
    <?php if (!have_rows('repeater')) : ?>
      <div class="no-photos">
        <p><?php pll_e('Napisz do nas na') ?></p>
      </div>
    <?php endif; ?>
  </div>
  <div class="right">
    <?php if (have_rows('contact')) : while (have_rows('contact')) : the_row(); ?>
        <h4 class="small-title c-red w-600"><?php the_sub_field('title_c'); ?></h4>
        <p class="text"><?php the_sub_field('text_c'); ?></p>
        <div class="contact">
          <div class="single-contact">
            <div class="icon">
              <?php et_image('icon_1') ?>
            </div>
            <div class="wrap">
              <div class="label"><?php the_sub_field('phone'); ?></div>
              <a href="<?php the_sub_field('contact_1'); ?>"><?php the_sub_field('label_1'); ?></a>
            </div>
          </div>
          <div class="single-contact">
            <div class="icon">
              <?php et_image('icon_2') ?>
            </div>
            <div class="wrap">
              <div class="label"><?php the_sub_field('message'); ?></div>
              <a href="<?php the_sub_field('contact_2'); ?>"><?php the_sub_field('label_2'); ?></a>
            </div>
          </div>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</div>
<?php if (have_rows('repeater')) : ?>
  <div class="lower">
    <p class="text s-13-14"><?php the_field('text'); ?></p>
    <div class="show-examples"><?php pll_e('Zobacz przykłady'); ?></div>
    <div class="examples">
      <?php $y = 1;
      if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
          <div class="single-example is-contracted">
            <div class="example-name">
              <div class="name s-13-16 c-gray w-700"><?php the_sub_field('procedure'); ?></div>
              <div data-hide="<?php pll_e('Zwiń galerię'); ?>" class="show c-gray w-700"><?php pll_e('Zobacz efekty zabiegu') ?></div>
              <div class="triangle"><?php echo et_svg('wp-content/themes/ergotree/assets/img/caret-gray.svg'); ?></div>
            </div>
            <?php if (have_rows('accord')) : while (have_rows('accord')) : the_row(); ?>
                <div class="wrapper">
                  <div class="splide splide-example-gallery">
                    <div class="splide__track">
                      <ul class="splide__list">
                        <?php if (have_rows('gallery')) : while (have_rows('gallery')) : the_row(); ?>
                            <li class="splide__slide">
                              <div class="single">
                                <?php
                                $galleryid = 'gallery' . $y;
                                ?>
                                <a class="<?php echo $galleryid; ?>" href="<?php echo et_image('zdjecie', 'large', true); ?>"><?php et_image('zdjecie', 'large'); ?></a>
                                <div class="after open-gallery">
                                  <div class="text"><?php pll_e('Zobacz zdjęcie'); ?></div>
                                </div>
                              </div>
                            </li>
                        <?php endwhile;
                        endif; ?>
                      </ul>
                    </div>
                  </div>
                  <p class="desc"><?php the_sub_field('description'); ?></p>
                </div>
            <?php endwhile;
            endif; ?>
          </div>
      <?php
          $y++;
        endwhile;
      endif; ?>
    </div>
  </div>
<?php endif; ?>