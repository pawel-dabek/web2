<h1>Job offer list</h1>
Plik można edytować w <b>"/usr/home/thesuit1995/domains/et17.ergotree.pl/public_html/wp-content/themes/ergotree/blocks/block-templates/job-offer-list/assets/template.php"</b>


<div class="job-offer-list--title">
<?php if(have_rows( 'title' )): while( have_rows('title')): the_row();?>
<div class="job-offer-list--title--inner">
<div class="s-34 w-600 c-gray">
<?php the_sub_field('gray');?>
</div>
<div class="s-34 w-600 c-red">
<?php the_sub_field('red');?>
</div>
</div>
<?php endwhile; endif;?>
</div>


<div class="job-offer-list--accordion">
<div class="et_accordion et_accordion_accordion">
<?php if(have_rows( 'accordion' )): while( have_rows('accordion')): the_row();?>
<div class="et_accordion__single-wrapper is-contracted">
<div class="s-14 w-500 c-black">
<?php the_sub_field('job');?>
</div>
<div class="s-14 w-500 c-black">
<?php the_sub_field('salary');?>
</div>
</div>
<?php endwhile; endif;?>
</div>
</div>

