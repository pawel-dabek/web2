<h1>Price list PC</h1>
Plik można edytować w <b>"/usr/home/thesuit1995/domains/et17.ergotree.pl/public_html/wp-content/themes/ergotree/blocks/block-templates/price-list-pc/assets/template.php"</b>


<div class="price-list-pc--title">
<?php if(have_rows( 'title' )): while( have_rows('title')): the_row();?>
<div class="price-list-pc--title--inner">
<div class="s-34 w-600 c-gray">
<?php the_sub_field('gray');?>
</div>
<div class="s-34 w-600 c-red">
<?php the_sub_field('red');?>
</div>
</div>
<?php endwhile; endif;?>
</div>


<div class="price-list-pc--main_repeater">
<div class="et_accordion et_accordion_main_repeater">
<?php if(have_rows( 'main_repeater' )): while( have_rows('main_repeater')): the_row();?>
<div class="et_accordion__single-wrapper is-contracted">
<div class="s-16 w-700 c-red">
<?php the_sub_field('small_title');?>
</div>

<div class="price-list-pc--pricel_list">
<?php if(have_rows( 'pricel_list' )): while( have_rows('pricel_list')): the_row();?>
<div class="price-list-pc--pricel_list--inner">
<div class="s-14 w-500 c-black">
<?php the_sub_field('text');?>
</div>
<div class="s-14 w-500 c-black">
<?php the_sub_field('price');?>
</div>
</div>
<?php endwhile; endif;?>
</div>

</div>
<?php endwhile; endif;?>
</div>
</div>

<div class="btn-red">
<?php the_field('button');?>
</div>
<div class="s-13 w-700 c-red">
<?php the_field('label');?>
</div>
<div class="price-list-pc--phone">
<?php the_field('phone');?>
</div>
<div class="btn-wrapper">
<?php et_link("back", "s-13 w-700 c-gray"); ?>
</div>
