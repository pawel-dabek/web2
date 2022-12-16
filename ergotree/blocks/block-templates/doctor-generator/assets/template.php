<h3 class="title w-600"><?php pll_e('Specjalizacje'); ?></h3>
<ul class="terms">
  <?php

  $terms = get_terms([
    'taxonomy' => 'specjalizacja',
    'hide_empty' => false,
  ]);

  foreach ($terms as $term) {
    echo '<li class="term s-14-14" type="button" data-filter=".' . $term->slug . '">' . $term->name . '</li>';
  }

  ?>
</ul>
<div class="show-more-wrapper">
  <div class="show-more" data-less="<?php pll_e('Zobacz mniej'); ?>"><?php pll_e('Zobacz więcej'); ?></div>
</div>
<div class="row">
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post(); ?>
      <?php

      $term_obj_list = get_the_terms($post->ID, 'specjalizacja');
      $terms_string = join(' ', wp_list_pluck($term_obj_list, 'slug'));

      ?>
      <div class="col-md-4 col-6 mix <?php echo $terms_string; ?>">
        <a class="article-wrapper" href="<?php the_permalink(); ?>">
          <article class="single">
            <?php if (has_post_thumbnail()) : ?>
              <div class="thumbnail"><?php the_post_thumbnail(); ?></div>
            <?php else : ?>
              <div class="thumbnail"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="></div>
            <?php endif; ?>
            <div class="name"><?php the_title(); ?></div>
          </article>
        </a>
      </div>
  <?php endwhile;
  endif; ?>
</div>