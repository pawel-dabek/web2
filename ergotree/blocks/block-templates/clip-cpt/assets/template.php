<h3 class="title s-34-18 w-600 c-gray"><?php the_field('title'); ?></h3>
<div class="video">
  <div class="thumbnail">
    <div class="play"><?php echo et_svg('wp-content/themes/ergotree/assets/img/play.svg'); ?></div>
    <div class="after"></div>
  </div>
  <iframe width="100%" data-src="<?php the_field('video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="wrapper-text">
  <?php if (have_rows('texts')) : while (have_rows('texts')) : the_row(); ?>
      <p class="desc w-500"><?php the_sub_field('text'); ?></p>
  <?php endwhile;
  endif; ?>
</div>