<?php

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
    <a href="<?php the_permalink(); ?>">
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
        <a href="<?php the_permalink(); ?>">
          <h4 class="small-title s-16-16 c-red"><?php the_title(); ?></h4>
        </a>
        <p class="excerpt s-13-14"><?php echo get_the_excerpt(); ?></p>
      </div>
      <ul class="categories">
        <?php
        $tags = get_the_tags(get_post()->post_id);
        foreach ($tags as $tag) :
          if ($querytype == 2) {
            if (isset($_GET['tag']) && $_GET['tag']) {
              $arraytag = $_GET['tag'];
            } else {
              $arraytag = [];
            }
            if (in_array($tag->slug, $arraytag)) {
              $active = 'tag-active';
            } else {
              $active = '';
            }
          } else {
            $active = "";
          }
        ?>
          <li class="single single-tag <?= $active; ?>"><a href="/blog/?tag[]=<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
        <?php endforeach; ?>
        <?php
        $categories = get_the_category(get_post()->post_id);
        foreach ($categories as $category) :
          if ($querytype == 2) {
            if (get_queried_object()->taxonomy == 'category' || isset($_GET['categories']) && $_GET['categories']) {
              if (get_queried_object()->slug == $category->slug || $category->slug == $_GET['categories']) {
                $activecat = "tag-active";
              } else {
                $activecat = "";
              }
            }
          }
        ?>
          <li class="single single-category <?= $activecat; ?>">
            <a href="/blog/?categories=<?php echo $category->slug; ?>">
              <?= get_field('skrocony_tytul', 'category_' . $category->term_id); ?></a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </article>
</div>