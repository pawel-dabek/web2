<article class="single-post-wrapper">
  <a href="<?php the_permalink(); ?>" class="wrapper-link">
    <div class="mobile-wrapper">
      <p class="title s-16-14"><?php the_title(); ?></p>
      <div class="inner-wrapper">
        <div class="salary s-16-14"><?php the_field('kwota'); ?></div>
        <div class="btn-wrapper">
          <div class="btn-red-full"><?php pll_e('Sprawdź'); ?></div>
        </div>
      </div>
    </div>
    <div class="mobile-icon"><?php echo et_svg('wp-content/themes/ergotree/assets/img/arrow-oferta.svg'); ?></div>
  </a>
</article>