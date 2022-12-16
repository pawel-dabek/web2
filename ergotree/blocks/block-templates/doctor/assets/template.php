<div class="row">
  <div class="col-md-6">
    <div class="mobile-only-wrap">
      <h3 class="c-red w-600 title-name"><?php the_field('name'); ?></h3>
      <p class="opis w-500 c-red"><?php the_field('spec'); ?></p>
    </div>
    <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
  </div>
  <div class="col-md-6">
    <div class="text">
      <h3 class="c-red w-600 title-name desktop-only-class"><?php the_field('name'); ?></h3>
      <p class="opis w-500 c-red desktop-only-class"><?php the_field('spec'); ?></p>
      <div class="doctor--repeater">
        <div class="doctor--repeater--inner">
          <p class="w-500 c-red"><?php the_field('specjalizacje', 'options'); ?>:</p>
          <?php if (get_field('specjalizacje')) : ?>
            <p class="w-500"><?php the_field('specjalizacje'); ?></p>
          <?php else : ?>
            <?php
            $terms = get_the_terms($post->ID, 'specjalizacja');
            $term_names = array();
            foreach ($terms as $term) {
              $term_names[] = $term->name;
            }
            $term_names = implode(', ', $term_names);
            ?>
            <p class="w-500"><?php echo $term_names; ?></p>
          <?php endif; ?>
        </div>
        <?php if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
            <div class="doctor--repeater--inner">
              <p class="w-500 c-red"><?php the_sub_field('red'); ?></p>
              <p class="w-500"><?php the_sub_field('text'); ?></p>
            </div>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
  </div>
</div>