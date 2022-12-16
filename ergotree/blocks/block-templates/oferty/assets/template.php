<h3 class="title w-600 s-34-18 c-gray"><?php the_field('oferty_pracy_title', 'options'); ?></h3>
<div class="wrapper-posts">
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post(); ?>
      <article class="single-post-wrapper">
        <a href="<?php the_permalink(); ?>" class="wrapper-link">
          <div class="mobile-wrapper">
            <p class="title s-16-14"><?php the_title(); ?></p>
            <div class="inner-wrapper">
              <div class="salary s-16-14"><?php the_field('kwota', get_the_ID()); ?></div>
              <div class="btn-wrapper">
                <div class="btn-red-full"><?php the_field('check_button_label', 'options'); ?></div>
              </div>
            </div>
          </div>
          <div class="mobile-icon"><?php echo et_svg('wp-content/themes/ergotree/assets/img/arrow-oferta.svg'); ?></div>
        </a>
      </article>
    <?php endwhile;
  else : ?>
    <p class="no-offers"><?php pll_e('Brak ofert'); ?></p>
  <?php endif;
  ?>
</div>