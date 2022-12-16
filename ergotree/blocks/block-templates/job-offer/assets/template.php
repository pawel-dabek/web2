<div class="wrapper-left">
  <div class="upper">
    <h3 class="title w-600 c-red"><?php the_title(); ?></h3>
    <p class="description"><?php the_field('gray_text'); ?></p>
    <div class="btn-wrapper main-button">
      <a class="btn-red-full" href="#kontakt"><?php pll_e('Aplikuj'); ?></a>
    </div>
  </div>
  <div class="lower">
    <p class="small-title"><?php the_field('opis_label'); ?></p>
    <p class="small-desc"><?php the_field('opis_text'); ?></p>
  </div>
  <?php if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
      <div class="job-offer--repeater--inner">
        <p class="small-title w-700"><?php the_sub_field('title'); ?></p>
        <ul class="list">
          <?php if (have_rows('subsections')) : while (have_rows('subsections')) : the_row(); ?>
              <li><?php the_sub_field('podpunkt'); ?></li>
          <?php endwhile;
          endif; ?>
        </ul>
      </div>
  <?php endwhile;
  endif; ?>
</div>
<div class="sidebar">
  <div class="card">
    <div class="logo"><?php et_the_logo('97px', '18px'); ?></div>
    <div class="wrap">
      <div class="upper-wrap">
        <h4><?php the_title(); ?></h4>
        <p class="small"><?php pll_e('Złóż swoje CV teraz!'); ?></p>
      </div>
      <div class="btn-wrapper">
        <a class="btn-white-border" href="#kontakt"><?php pll_e('Aplikuj'); ?></a>
      </div>
    </div>
  </div>
</div>