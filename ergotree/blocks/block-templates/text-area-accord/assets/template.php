<div class="s-34-18 title w-600 c-gray"><?php the_field('title'); ?></div>
<div class="subtitle w-500"><?php the_field('line'); ?></div>

<div class="text-area-accord--accord">
  <div class="et_accordion et_accordion_accord">
    <?php if (have_rows('accord')) : while (have_rows('accord')) : the_row(); ?>
        <div class="et_accordion__single-wrapper is-contracted">
          <div class="small-title w-700 c-red">
            <div class="icon"><?php et_svg('wp-content/themes/ergotree/assets/img/caret-red.svg'); ?></div><?php the_sub_field('red'); ?>
          </div>
          <div class="desc">
            <?php the_sub_field('text'); ?>
            <div class="mobile-hide-wrapper">
              <div class="mobile-hide"><?php pll_e('Zwiń'); ?></div>
            </div>
          </div>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</div>