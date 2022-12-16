<h2 class="title w-600 c-gray"><?php the_field('title'); ?></h2>

<div class="blog-generator--wrapper">
  <div class="row">
    <?php
    $category = get_field('wybrany_autor');

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 3,
      'cat' => $category[0],
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();

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
                <?php the_post_thumbnail('large'); ?>
                <div class="read-article">
                  <p><?php pll_e('Czytaj artykuł'); ?></p>
                  <div class="icon"><?php et_svg('wp-content/themes/ergotree/assets/img/arrow-right-long.svg'); ?></div>
                </div>
              </div>
            </a>
            <div class="text">
              <div class="top">
                <div class="date c-gray"><?php echo get_the_date('d.m.Y'); ?></div>
                <div class="line"></div>
                <div class="author c-gray"><?php echo $author_name; ?></div>
              </div>
              <div class="content">
                <a href="<?php echo $permalink; ?>">
                  <h4 class="small-title s-16-16 c-red"><?php echo get_the_title(); ?></h4>
                </a>
                <p class="excerpt s-13-14"><?php echo get_the_excerpt(); ?></p>
              </div>
              <ul class="categories">
                <?php
                $tags = get_the_tags(); ?>
                <?php foreach ($tags as $tag) : ?>
                  <li class="single single-tag"><a href="/blog/?tag[]=<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
                <?php endforeach; ?>
                <?php
                $categories = get_the_category();
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
    <?php endwhile;
    endif; ?>
  </div>
</div>

<div class="btn-wrapper">
  <?php et_link('button', 'btn-red-border s-13-14'); ?>
</div>