<h3 class="trusted-us--title s-34-18 c-gray"><?php the_field('title'); ?></h3>
<div class="trusted-us--logotypy">
  <div class="row row-cols-md-5 row-cols-sm-4 row-cols-2">
    <?php if (have_rows('logotypy')) : while (have_rows('logotypy')) : the_row(); ?>
        <div class="trusted-us--logotypy--inner">
          <?php et_image("logotyp", "full", false, "trusted-us--logotyp"); ?>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</div>