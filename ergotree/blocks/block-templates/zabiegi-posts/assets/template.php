<div class="row">
  <?php
  $x = 0;
  if (have_posts()) :
    while (have_posts()) :
      the_post(); ?>
      <div class="col-md-6">
        <article>
          <h4 class="title"><?php the_title(); ?></h4>
          <p class="excerpt s-16-16"><?php echo get_the_excerpt(); ?></p>
          <div class="btn-wrapper">
            <a class="btn-red-border" href="<?php the_permalink(); ?>" class="button"><?php pll_e('Przejdź do konsultacji') ?></a>
          </div>
        </article>
      </div>
      <?php $x++;
      if ($x == 2 || $x == 4) : ?>
</div>
<div class="line"></div>
<div class="row">
<?php endif; ?>
<? endwhile;
  endif; ?>
</div>