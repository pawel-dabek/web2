<h3 class="title w-600 s-34-18 c-gray"><?php the_field('title'); ?></h3>
<div class="row row-cols-md-4 row-cols-sm-2 row-cols-1">
  <?php $x = 1;
  $time = 100;
  if (have_rows('kroki')) : while (have_rows('kroki')) : the_row(); ?>
      <div data-aos="fade" data-aos-id="step" data-aos-once="true" data-aos-delay="<?php echo $time;
                                                                                    $time = $time + 100; ?>" class="col">
        <div class="single">
          <div class="number"><?php echo $x; ?></div>
          <div class="text">
            <h4 class="small-title w-600 c-gray"><?php the_sub_field('tytul'); ?></h4>
            <p class="desc c-gray"><?php the_sub_field('tekst'); ?></p>
          </div>
        </div>
      </div>
  <?php
      $x++;
    endwhile;
  endif; ?>
</div>