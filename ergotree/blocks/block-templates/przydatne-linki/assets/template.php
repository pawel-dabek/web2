<div class="przydatne-wrapper">
  <div class="label">Przydatne linki:</div>
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