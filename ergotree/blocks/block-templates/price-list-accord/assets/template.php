<div class="price-list-accord--main_repeater">
  <?php if (have_rows('main_repeater')) : while (have_rows('main_repeater')) : the_row(); ?>
      <div class="price-list-accord--main_repeater--inner">
        <div class="w-600 title c-red">
          <?php the_sub_field('red'); ?>
        </div>
        <div class="price-list-accord--repeater">
          <div class="et_accordion et_accordion_repeater">
            <?php if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
                <div class="et_accordion__single-wrapper is-contracted">
                  <div class="small-title">
                    <div class="icon"><?php echo et_svg('wp-content/themes/ergotree/assets/img/caret.svg'); ?></div>
                    <div class="name"><?php the_sub_field('packet'); ?></div>
                    <div class="price"><?php the_sub_field('price'); ?></div>
                  </div>
                  <div class="c-black desc"><?php the_sub_field('text'); ?></div>
                </div>
            <?php endwhile;
            endif; ?>
          </div>
        </div>
      </div>
  <?php endwhile;
  endif; ?>
</div>