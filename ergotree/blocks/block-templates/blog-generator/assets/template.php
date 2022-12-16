<div <?php if (is_front_page()) : echo 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
      endif; ?> class="wrapper">
  <?php

  $fontClass = 's-60-30';

  if (get_field('smaller_font')) {
    $fontClass = 'smaller-font';
  }

  ?>

  <?php if (get_field('title')) : ?>
    <h2 class="<?php echo $fontClass; ?> w-600 title c-gray"><?php the_field('title'); ?></h2>
  <?php endif; ?>

  <div class="blog-generator--wrapper" id="blog">
    <div class="row blog-container">
      <?php
      $querytype = get_field('typ_query');
      if ($querytype == 1) :

        include('post-query.php');

      elseif ($querytype == 2) :

        if (have_posts()) :
          while (have_posts()) :
            the_post();
            include('post-template.php');
          endwhile;
        else :
          include('no-posts.php');
        endif;

      endif;
      ?>
    </div>

    <?php
    if ($querytype == 2) :
      $args = array(
        'mid_size' => 2,
        'prev_text' => __('<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.22 6.71985C0.0793075 6.57934 0.000175052 6.3887 0 6.18985V5.80985C0.00230401 5.61144 0.081116 5.42157 0.22 5.27985L5.36 0.149852C5.45388 0.055196 5.58168 0.00195312 5.715 0.00195312C5.84832 0.00195312 5.97612 0.055196 6.07 0.149852L6.78 0.859852C6.87406 0.952016 6.92707 1.07816 6.92707 1.20985C6.92707 1.34154 6.87406 1.46769 6.78 1.55985L2.33 5.99985L6.78 10.4399C6.87466 10.5337 6.9279 10.6615 6.9279 10.7949C6.9279 10.9282 6.87466 11.056 6.78 11.1499L6.07 11.8499C5.97612 11.9445 5.84832 11.9978 5.715 11.9978C5.58168 11.9978 5.45388 11.9445 5.36 11.8499L0.22 6.71985Z" fill="#9C9296"/></svg>'),
        'next_text' => __('<svg width="7" height="12" viewBox="0 0 7 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.78 6.71985C6.92069 6.57934 6.99982 6.3887 7 6.18985V5.80985C6.9977 5.61144 6.91888 5.42157 6.78 5.27985L1.64 0.149852C1.54612 0.055196 1.41832 0.00195312 1.285 0.00195312C1.15168 0.00195312 1.02388 0.055196 0.93 0.149852L0.22 0.859852C0.125936 0.952016 0.0729284 1.07816 0.0729284 1.20985C0.0729284 1.34154 0.125936 1.46769 0.22 1.55985L4.67 5.99985L0.22 10.4399C0.125343 10.5337 0.0721006 10.6615 0.0721006 10.7949C0.0721006 10.9282 0.125343 11.056 0.22 11.1499L0.93 11.8499C1.02388 11.9445 1.15168 11.9978 1.285 11.9978C1.41832 11.9978 1.54612 11.9445 1.64 11.8499L6.78 6.71985Z" fill="#C82749"/></svg>'),
      );
      echo get_the_posts_pagination($args);
      wp_reset_postdata();
    endif;
    ?>
  </div>

  <?php if (get_field('button')) : ?>
    <div class="btn-wrapper">
      <?php et_link('button', 'btn-red-border s-13-14'); ?>
    </div>
  <?php endif; ?>
</div>