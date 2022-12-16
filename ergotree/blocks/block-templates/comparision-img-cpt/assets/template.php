<h3 class="title s-34-18 w-600 c-gray"><?php the_field('title'); ?></h3>
<div class="pictures">
  <div class="img1">
    <?php et_image("img_1", "full", false, "comparision-img-cpt--img_1"); ?>
    <p class="text1"><?php the_field('text_1'); ?></p>
  </div>
  <div class="img2">
    <?php et_image("img_2", "full", false, "comparision-img-cpt--img_2"); ?>
    <p class="text2"><?php the_field('text_2'); ?></p>
  </div>
</div>