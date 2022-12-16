<div class="big-accordion-cpt--accord">
  <div class="et_accordion-big et_accordion_accord">
    <?php if (have_rows('accord')) : while (have_rows('accord')) : the_row(); ?>
        <div class="et_accordion__single-wrapper is-contracted">
          <div class="title-wrapper">
            <div class="icon-d"><?php et_svg('wp-content/themes/ergotree/assets/img/circle-caret.svg'); ?></div>
            <div class="icon-m"><?php et_svg('wp-content/themes/ergotree/assets/img/circle-caret-mobile.svg'); ?></div>
            <h3 class="s-34-16 title w-600 c-gray"><?php the_sub_field('title'); ?></h3>
          </div>
          <div class="to-contract">
            <div class="big-accordion-cpt--icons">
              <?php if (have_rows('icons')) : while (have_rows('icons')) : the_row(); ?>
                  <div class="big-accordion-cpt--icons--inner">
                    <div class="image"><?php et_image("svg", "full", false, "big-accordion-cpt--svg"); ?></div>
                    <div class="text">
                      <h4 class="s-14-10 w-500 c-red"><?php the_sub_field('red'); ?></h4>
                      <p class="s-13-10 w-500 c-black"><?php the_sub_field('black'); ?></p>
                    </div>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
            <div class="big-accordion-cpt--texts">
              <?php if (have_rows('texts')) : while (have_rows('texts')) : the_row(); ?>
                  <?php

                  $readMore = get_sub_field('czytaj_wiecej');
                  $class = '';

                  if ($readMore) {
                    $class = ' read-more';
                  }

                  ?>
                  <div class="big-accordion-cpt--texts--inner<?php echo $class; ?>">
                    <h4 class="s-18-12 small-title w-600 c-red"><?php the_sub_field('title'); ?></h4>
                    <p class="s-13-12 text-small"><?php the_sub_field('text', false, false); ?></p>
                    <?php if ($readMore) : ?>
                      <span data-initial="<?php pll_e('Czytaj więcej'); ?>" data-change="<?php pll_e('Zwiń'); ?>"><?php pll_e("Czytaj więcej"); ?></span>
                    <?php endif; ?>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>
          </div>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</div>