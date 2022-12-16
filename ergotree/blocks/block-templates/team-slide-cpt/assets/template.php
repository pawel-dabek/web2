<h3 class="title s-34-18 w-600 c-gray"><?php the_field('title'); ?></h3>
<h4 class="subtitle s-18-16 w-600 c-gray"><?php the_field('subtitle'); ?></h4>
<p class="text s-13-14"><?php the_field('text'); ?></p>
<div class="wrapper">
  <div class="splide splide-zespol">
    <div class="splide__track">
      <ul class="splide__list">
        <?php
        $x = 0;
        $featured_posts = get_field('zespol');
        if ($featured_posts) :
          foreach ($featured_posts as $featured_post) : ?>
            <li class="splide__slide">
              <div class="single">
                <a href="<?php the_permalink($featured_post->ID); ?>">
                  <div class="thumbnail"><?php echo get_the_post_thumbnail($featured_post->ID, 'large'); ?></div>
                  <p class="name"><?php echo get_the_title($featured_post->ID); ?></p>
                </a>
              </div>
            </li>
        <?php
            $x++;
          endforeach;
          wp_reset_postdata();
        endif; ?>
      </ul>
    </div>
  </div>
  <button class="splide__arrow<?php echo ' splide-count-' . $x; ?> splide__arrow--prev"><?php echo et_svg('wp-content/themes/ergotree/assets/img/slider_arrow_left.svg'); ?></button>
  <button class="splide__arrow<?php echo ' splide-count-' . $x; ?> splide__arrow--next"><?php echo et_svg('wp-content/themes/ergotree/assets/img/slider_arrow_right.svg'); ?></button>
</div>
<script>
  let splideCountZespol = <?php echo $x; ?>;
</script>