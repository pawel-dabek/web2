<h3 class="title c-gray"><?php the_field('title'); ?></h3>
<div class="pricel-list">
  <?php if (have_rows('main_repeater')) : while (have_rows('main_repeater')) : the_row(); ?>
      <div class="price-list-single mobile-hidden-wrap" id="zabiegi<?php echo get_row_index(); ?>">
        <p class="main-title"><?php the_sub_field('small_title'); ?></p>
        <div class="prices-inner">
          <?php if (have_rows('pricel_list')) : while (have_rows('pricel_list')) : the_row(); ?>
              <div class="single-price">
                <div class="first">
                  <p class="name"><?php the_sub_field('text'); ?></p>
                  <p class="cost"><?php the_sub_field('price'); ?></p>
                </div>
                <div class="line"></div>
                <?php if (get_sub_field('turn_on')) { ?>
                  <p class="additional-info"><?php the_sub_field('additional_info'); ?></p>
                <?php } ?>
              </div>
          <?php endwhile;
          endif; ?>
          <div class="btn-wrapper">
            <?php et_link('button', 'btn-red-full'); ?>
            <div class="hide"><?php pll_e('Zwiń'); ?></div>
          </div>
        </div>
      </div>
  <?php endwhile;
  endif; ?>
</div>
<div class="btn-wrapper outside">
  <?php et_link('button', 'btn-red-full'); ?>
  <a href="tel: <?php the_field('phone'); ?>" class="phone"><?php the_field('label'); ?></a>
  <a href="/cennik/" class="back"><?php pll_e('Powrót'); ?></a>
</div>