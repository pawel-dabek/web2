<div class="col-lg-4 col-sm-6">
  <article class="post-wrapper">
    <a href="<?php the_permalink(); ?>">
      <div class="thumbnail"><?php the_post_thumbnail('large'); ?></div>
    </a>
    <div class="text">
      <div class="top">
        <div class="date c-gray"><?php echo get_the_date('d.m.Y'); ?></div>
        <div class="line"></div>
        <div class="author c-gray"><?php the_author(); ?></div>
      </div>
      <div class="content">
        <a href="<?php the_permalink(); ?>">
          <h4 class="small-title c-red"><?php the_title(); ?></h4>
        </a>
        <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
      </div>
      <ul class="categories">
        <?php
        $tags = get_the_tags(get_post()->post_id);
        foreach ($tags as $tag) :
          if ($_POST['tag']) {
            $arraytag = $_POST['tag'];
          } else {
            $arraytag = '';
          }
          if (str_contains($arraytag, $tag->slug)) {
            $active = 'tag-active';
          } else {
            $active = '';
          }
        ?>
          <li class="single single-tag <?= $active; ?>"><a href="/blog/?tag[]=<?php echo $tag->slug; ?>"><?php echo $tag->name; ?></a></li>
        <?php endforeach; ?>
        <?php
        $categories = get_the_category(get_post()->post_id);
        foreach ($categories as $category) :
          if (get_queried_object()->taxonomy == 'category' || $_POST['taxonomy_term']) {
            if (get_queried_object()->slug == $category->slug || $category->slug == $_POST['taxonomy_term']) {
              $activecat = "tag-active";
            } else {
              $activecat = "";
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