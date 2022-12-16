<h1>How it works CPT</h1>
Plik można edytować w <b>"/usr/home/thesuit1995/domains/et17.ergotree.pl/public_html/wp-content/themes/ergotree/blocks/block-templates/how-it-works-cpt/assets/template.php"</b>


<div class="how-it-works-cpt--main_title">
<?php if(have_rows( 'main_title' )): while( have_rows('main_title')): the_row();?>
<div class="how-it-works-cpt--main_title--inner">
<div class="s-34 w-600 c-gray">
<?php the_sub_field('gray');?>
</div>
<div class="s-34 w-600 c-red">
<?php the_sub_field('red');?>
</div>
</div>
<?php endwhile; endif;?>
</div>


<div class="how-it-works-cpt--top_text">
<?php if(have_rows( 'top_text' )): while( have_rows('top_text')): the_row();?>
<div class="how-it-works-cpt--top_text--inner">
<div class="s-18 w-600 c-red">
<?php the_sub_field('title_g');?>
</div>
<div class="s-13 w-500 c-black">
<?php the_sub_field('text g');?>
</div>
</div>
<?php endwhile; endif;?>
</div>


<div class="how-it-works-cpt--middle">
<?php if(have_rows( 'middle' )): while( have_rows('middle')): the_row();?>
<div class="how-it-works-cpt--middle--inner">
<?php et_image("graphic","full",false,"how-it-works-cpt--graphic"); ?>
<?php et_image("logo","full",false,"how-it-works-cpt--logo"); ?>
<div class="s-18 w-500 c-white">
<?php the_sub_field('text_m');?>
</div>
<div class="s-9 w-700 c-white">
<?php the_sub_field('signature');?>
</div>
</div>
<?php endwhile; endif;?>
</div>


<div class="how-it-works-cpt--bottom">
<?php if(have_rows( 'bottom' )): while( have_rows('bottom')): the_row();?>
<div class="how-it-works-cpt--bottom--inner">
<div class="s18 w-600 c-red">
<?php the_sub_field('title_b');?>
</div>
<div class="s-13 w-500 c-black">
<?php the_sub_field('text_b');?>
</div>
</div>
<?php endwhile; endif;?>
</div>

