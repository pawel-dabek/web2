<article class="single-category-wrapper">
  <div class="thumbnail"><?php echo wp_get_attachment_image(get_field('grafika_kategorii', $cat), 'full'); ?></div>
  <div class="text">
    <h3 class="title c-gray s-34-18"><?php echo get_field('tytul_alternatywny', $cat); ?></h3>
    <p class="excerpt s-16-16 c-gray"><?php echo $cat->category_description; ?></p>
    <div class="btn-wrapper">
      <a href="<?php echo get_category_link($cat->term_id) ?>#oferty" class="btn-red-full"><?php pll_e('Oferty pracy'); ?></a>
      <a href="<?php echo get_category_link($cat->term_id) ?>" class="btn-red-underline"><?php pll_e('Dowiedz się'); ?></a>
    </div>
  </div>
</article>