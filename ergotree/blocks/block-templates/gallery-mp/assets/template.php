<?php

$class = '';

if (get_field('smaller_margin')) {
  $class = ' smaller-margin';
}

?>

<div class="my-container<?php echo $class; ?>">
  <h2 class="s-60-30 c-gray title"><?php the_field('title'); ?></h2>
  <p class="desc s-16-14"><?php the_field('text'); ?></p>
</div>
<?php if (have_rows('gallery')) : while (have_rows('gallery')) : the_row(); ?>
    <?php

    if (get_sub_field('obraz_podmiana_1')) {
      $class =  ' to-transition';
    }

    ?>
    <div <?php if (is_front_page()) : echo 'data-aos="fade-up" data-aos-once="true" data-aos-duration="1000"';
          endif; ?> class="gallery-container<?php echo $class; ?>">
      <div class="left">
        <div class="square-1">
          <?php et_image('obraz_1', 'full', false, 'original no-lazyload'); ?>
          <?php if (get_sub_field('obraz_podmiana_1')) {
            echo '<div class="podmiana-1">';
            et_image('obraz_podmiana_1', 'full', false, 'transitioned');
            echo '</div>';
          } ?>
        </div>
        <div class="square-2">
          <?php et_image('obraz_2', 'full', false, 'original no-lazyload'); ?>
          <?php if (get_sub_field('obraz_podmiana_2')) {
            echo '<div class="podmiana-2">';
            et_image('obraz_podmiana_2', 'full', false, 'transitioned');
            echo '</div>';
          } ?>
        </div>
        <div class="square-big">
          <?php et_image('obraz_6', 'full', false, 'original no-lazyload'); ?>
          <?php if (get_sub_field('obraz_podmiana_6')) {
            echo '<div class="podmiana-6">';
            et_image('obraz_podmiana_6', 'full', false, 'transitioned');
            echo '</div>';
          } ?>
        </div>
      </div>
      <div class="middle-tall">
        <?php et_image('obraz_3', 'full', false, 'original no-lazyload'); ?>
        <?php if (get_sub_field('obraz_podmiana_3')) {
          echo '<div class="podmiana-3">';
          et_image('obraz_podmiana_3', 'full', false, 'transitioned');
          echo '</div>';
        } ?>
      </div>
      <div class="middle-short">
        <?php et_image('obraz_7', 'full', false, 'original no-lazyload'); ?>
        <?php if (get_sub_field('obraz_podmiana_7')) {
          echo '<div class="podmiana-7">';
          et_image('obraz_podmiana_7', 'full', false, 'transitioned');
          echo '</div>';
        } ?>
      </div>
      <div class="right-upper">
        <div class="upper-1">
          <?php et_image('obraz_4', 'full', false, 'original no-lazyload'); ?>
          <?php if (get_sub_field('obraz_podmiana_4')) {
            echo '<div class="podmiana-4">';
            et_image('obraz_podmiana_4', 'full', false, 'transitioned');
            echo '</div>';
          } ?>
        </div>
        <div class="upper-2">
          <?php et_image('obraz_5', 'full', false, 'original no-lazyload'); ?>
          <?php if (get_sub_field('obraz_podmiana_5')) {
            echo '<div class="podmiana-5">';
            et_image('obraz_podmiana_5', 'full', false, 'transitioned');
            echo '</div>';
          } ?>
        </div>
      </div>
      <div class="lower-1">
        <?php et_image('obraz_8', 'full', false, 'original no-lazyload'); ?>
        <?php if (get_sub_field('obraz_podmiana_8')) {
          echo '<div class="podmiana-8">';
          et_image('obraz_podmiana_8', 'full', false, 'transitioned');
          echo '</div>';
        } ?>
      </div>
      <div class="lower-2">
        <?php et_image('obraz_9', 'full', false, 'original no-lazyload'); ?>
        <?php if (get_sub_field('obraz_podmiana_9')) {
          echo '<div class="podmiana-9">';
          et_image('obraz_podmiana_9', 'full', false, 'transitioned');
          echo '</div>';
        } ?>
      </div>
      <div class="lower-3">
        <?php et_image('obraz_10', 'full', false, 'original no-lazyload'); ?>
        <?php if (get_sub_field('obraz_podmiana_10')) {
          echo '<div class="podmiana-10">';
          et_image('obraz_podmiana_10', 'full', false, 'transitioned');
          echo '</div>';
        } ?>
      </div>
    </div>
<?php endwhile;
endif; ?>