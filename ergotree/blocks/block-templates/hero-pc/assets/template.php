<?php

$args = array(
  'post_type' => 'cennik',
  'posts_per_page' => -1,
  'orderby' => 'title',
  'order' => 'ASC'
);

$query = new WP_Query($args);

?>

<h1 class="title"><?php the_field('title'); ?></h1>

<script>
  const data = {
    src: [<?php
          $x = 0;
          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
              $post_id = get_the_ID();
              $post_slug = get_post_field('post_name', $post_id);
              $blocks = parse_blocks(get_the_content());
              if ($x > 0) {
                echo ',';
              }
              echo '"' . get_the_title() . '"';
              foreach ($blocks as $block) {
                if ('acf/price-list' === $block['blockName']) {
                  $i = 0;
                  do {
                    $field_name = 'main_repeater_' . $i . '_small_title';
                    $block_data = $block["attrs"]["data"][$field_name];
                    $x = 0;
                    do {
                      $field_name_text = 'main_repeater_' . $i . '_pricel_list_' . $x . '_text';
                      $block_data = $block["attrs"]["data"][$field_name_text];
                      $c = $i + 1;
                      echo ',"' . $block_data . '"';
                      $x++;
                      $field_name_text = 'main_repeater_' . $i . '_pricel_list_' . $x . '_text';
                    } while ($block["attrs"]["data"][$field_name_text]);
                    $i++;
                    $field_name = 'main_repeater_' . $i . '_small_title';
                  } while ($block["attrs"]["data"][$field_name]);
                }
              }
              $x++;
            }
          }
          ?>]
  };
  const placeHolder = '<?php pll_e('Wyszukaj usługę po nazwie'); ?>';
</script>

<div class="datalist">
  <input id="autoComplete_07">
  <datalist id="uslugi-datalist">
    <?php
    if ($query->have_posts()) :
      while ($query->have_posts()) :
        $query->the_post();
        $post_id = get_the_ID();
        $post_slug = get_post_field('post_name', $post_id);
        $blocks = parse_blocks(get_the_content());
        echo '<option data-slug="/cennik/' . $post_slug . '" value="' . get_the_title() . '">';
        foreach ($blocks as $block) {
          if ('acf/price-list' === $block['blockName']) {
            $i = 0;
            do {
              $field_name = 'main_repeater_' . $i . '_small_title';
              $block_data = $block["attrs"]["data"][$field_name];
              $x = 0;
              do {
                $field_name_text = 'main_repeater_' . $i . '_pricel_list_' . $x . '_text';
                $block_data = $block["attrs"]["data"][$field_name_text];
                $c = $i + 1;
                echo '<option data-slug="/cennik/' . $post_slug . '#zabiegi' . $c . '" value="' . $block_data . '">';
                $x++;
                $field_name_text = 'main_repeater_' . $i . '_pricel_list_' . $x . '_text';
              } while ($block["attrs"]["data"][$field_name_text]);
              $i++;
              $field_name = 'main_repeater_' . $i . '_small_title';
            } while ($block["attrs"]["data"][$field_name]);
          }
        }
      endwhile;
      wp_reset_postdata();
    endif;

    ?>
  </datalist>
</div>
<p class="desc"><?php the_field('text'); ?></p>

<div class="scroll-down"><?php echo et_svg('wp-content/themes/ergotree/assets/img/scroll-down.svg'); ?></div>