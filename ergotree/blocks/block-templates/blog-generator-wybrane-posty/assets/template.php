<h2 class="title w-600 c-gray"><?php the_field('title'); ?></h2>

<div class="blog-generator--wrapper">
  <div class="row">
    <?php
    $featured_posts = get_field('wybrane_posty');
    if ($featured_posts) : ?>
      <?php foreach ($featured_posts as $post) :
        $permalink = get_permalink($post->ID);
        $title = get_the_title($post->ID);
        $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'post');
        $author_name = '';


        $categories = get_the_category(get_post()->post_id);
        $x = 0;
        foreach ($categories as $category) :

          $single_name = $category->name;
          $single_desc = $category->description;

          $final_name = $single_desc . ' ' . $single_name;

          $author_name .= $final_name;
          if ($x > 0) {
            $author_name .= ', ';
          }

          $x++;

        endforeach;

      ?>
        <div class="col-lg-4 col-sm-6">
          <article class="post-wrapper">
            <a href="<?php echo $permalink; ?>">
              <div class="thumbnail">
                <img src="<?php echo $thumb[0]; ?>" alt="">
                <div class="read-article">
                  <p><?php pll_e('Czytaj artykuł'); ?></p>
                  <div class="icon"><?php et_svg('wp-content/themes/ergotree/assets/img/arrow-right-long.svg'); ?></div>
                </div>
              </div>
            </a>
            <div class="text">
              <div class="top">
                <div class="date c-gray"><?php echo get_the_date('d.m.Y', $post->ID); ?></div>
                <div class="line"></div>
                <div class="author c-gray"><?php echo $author_name; ?></div>
              </div>
              <div class="content">
                <a href="<?php echo $permalink; ?>">
                  <h4 class="small-title s-16-16 c-red"><?php echo get_the_title($post->ID); ?></h4>
                </a>
                <p class="excerpt s-13-14"><?php echo get_the_excerpt($post->ID); ?></p>
              </div>
              <ul class="categories">
                <?php
                $tags = get_the_tags($post->ID); ?>
                <?php foreach ($tags as $tag) : ?>
                  <li class="single single-tag"><a href="/blog/?tag[]=<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
                <?php endforeach; ?>
                <?php
                $categories = get_the_category($post->ID);
                foreach ($categories as $category) : ?>
                  <li class="single single-category">
                    <a href="/blog/?categories=<?php echo $category->slug; ?>">
                      <?= get_field('skrocony_tytul', 'category_' . $category->term_id); ?></a>
                  </li>
                <?php endforeach; ?>
              </ul>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>

<div class="btn-wrapper">
  <?php et_link('button', 'btn-red-border s-13-14'); ?>
</div>