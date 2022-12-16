<h3 class="title s-34-18 w-600 c-gray"><?php the_field('title'); ?></h3>


<div class="faq-accord-cpt--repeater">
  <div class="accordion-wrapper">
    <?php if (have_rows('repeater')) : while (have_rows('repeater')) : the_row(); ?>
        <div class="accordion-single-wrapper accordion is-contracted">
          <div class="single-title">
            <p class="w-700 c-gray s-13-16 name"><?php the_sub_field('question'); ?></p>
            <div data-hide="<?php pll_e('Ukryj odpowiedź'); ?>" class="show-faq c-gray s-13-16 w-700"><?php pll_e('Pokaż odpowiedź'); ?></div>
            <div class="triangle"><?php echo et_svg('wp-content/themes/ergotree/assets/img/caret-gray.svg'); ?></div>
          </div>
          <p class="answer s-13-14 w-500"><?php the_sub_field('anwser'); ?></p>
        </div>
    <?php endwhile;
    endif; ?>
  </div>
</div>