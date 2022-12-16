<section class="breadcrumbs">
  <div class="my-container">
    <div class="okruszki">
      <?php if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
    </div>
  </div>
</section>
<section class="article">
  <div class="my-container">
    <div class="single-info--wrapper">
      <div class="thumbnail"><?php the_post_thumbnail('full'); ?></div>
      <div class="info-wrapper">
        <span class="date"><? echo get_the_date('d.m.Y'); ?></span>
        <h1 class="single-title"><?php the_title(); ?></h1>
        <ul class="category">
          <?php
          $gettag = get_the_tags(get_post()->post_id);
          foreach ($gettag as $key) : ?>
            <li><a href="/blog/?tag[]=<?php echo $key->slug; ?>"><?php echo $key->name; ?></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="single-wrapper">
      <article><?php the_content(); ?></article>
      <aside class="sidebar">
        <div class="author-wrapper">
          <div class="label"><?php pll_e('Autor:'); ?></div>
          <?php
          global $post;
          $postauthor = get_the_category($post->ID);
          if (!empty($postauthor)) {
            foreach ($postauthor  as $category) ?>
            <?php
            $image = get_field('grafika_kategorii', 'category_' . $category->term_id);
            echo wp_get_attachment_image($image, 'full'); ?>
            <div class="wrapper">
              <span class="name"><?php echo $category->name; ?></span>
              <span class="position"><?php echo $category->description; ?></span>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="content-list-wrapper">
          <div class="label"><?php pll_e('Spis treści:'); ?></div>
          <?php echo do_shortcode('[ez-toc]') ?>
        </div>
        <div class="banner-wrapper">
          <?php if (have_rows('baner')) : ?>
            <?php while (have_rows('baner')) : the_row(); ?>
              <?php
              $link = get_sub_field('link');
              if ($link) : ?>
                <div class="baner">
                  <a class="button" href="<?php echo esc_url($link); ?>">
                    <?php
                    $image = get_sub_field('image');
                    $size = 'full';
                    if ($image) {
                      echo wp_get_attachment_image($image, $size);
                    }
                    ?>
                  </a>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="read-also-wrapper">
          <div class="label"><?php pll_e('Czytaj również:'); ?></div>
          <div class="related-posts">
            <ul>
              <?php
              $related = new WP_Query(
                array(
                  'category__in'   => wp_get_post_categories($post->ID),
                  'posts_per_page' => 3,
                  'orderby' => 'rand',
                  'post__not_in'   => array($post->ID)
                )
              );
              if ($related->have_posts()) {
                while ($related->have_posts()) {
                  $related->the_post();
              ?>
                  <?php setup_postdata($post); ?>
                  <li><a href="<?php echo get_permalink(); ?>"><?php echo $post->post_title; ?></a></li>
              <?php
                }
                wp_reset_postdata();
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="przydatne-wrapper">
          <div class="label"><?php pll_e('Przydatne linki:'); ?></div>
          <ul>
            <?php
            if (have_rows('linki')) : while (have_rows('linki')) : the_row();
                $linkObject = get_sub_field('pojedynczy_link');
                $url = $linkObject['url'];
                $title = $linkObject['title'];
                $target = $linkObject['target'] ? $linkObject['target'] : '_self';
            ?>
                <li><a target="<?php echo $target; ?>" href="<?php echo $url; ?>"><?php echo $title; ?></a></li>
            <?php
              endwhile;
            endif;
            ?>
          </ul>
        </div>
      </aside>
    </div>
    <div class="article-footer">
      <div class="join-us">
        <div class="label"><?php pll_e('Dołącz do nas:'); ?></div>
        <div class="social">
          <a href="<?php the_field('facebook', 'options'); ?>" target="_blank"><?php echo et_svg('wp-content/themes/ergotree/assets/img/facebook-b.svg'); ?></a>
          <a href="<?php the_field('instagram', 'options'); ?>" target="_blank"><?php echo et_svg('wp-content/themes/ergotree/assets/img/instagram-b.svg'); ?></a>
          <a href="<?php the_field('linkedin', 'options'); ?>" target="_blank"><?php echo et_svg('wp-content/themes/ergotree/assets/img/linkedin-b.svg'); ?></a>
          <a href="<?php the_field('youtube', 'options'); ?>" target="_blank"><?php echo et_svg('wp-content/themes/ergotree/assets/img/youtube-b.svg'); ?></a>
        </div>
      </div>
      <a href="#" class="back-to-top"><span><?php pll_e('Do góry'); ?></span><?php echo et_svg('wp-content/themes/ergotree/assets/img/arrow-up.svg'); ?></a>
    </div>
  </div>
</section>

<?php
$args = array(
  'post_type' => 'page',
  'title' => 'Post - After'
);

$your_query = new WP_Query($args);
while ($your_query->have_posts()) : $your_query->the_post();
  the_content();
endwhile;
?>