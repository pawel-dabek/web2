<?php
get_header();
include('cpt/config-src-cpt.php');
?>
<main id="main-search" class="main-search">

	<section class="hero">
		<div class="my-container">
			<div class="form-wrapper">
				<?php get_search_form(); ?>
				<div class="search-icon"><?php echo et_svg('wp-content/themes/ergotree/assets/img/search-white.svg'); ?></div>
			</div>
			<div class="search-result-info">
				<?php
				$key = esc_html($s);
				if (have_posts()) :
					$allsearch = new WP_Query("s=$s&showposts=-1&post_type[]=zabiegi&post_type[]=konsultacje&post_type[]=post&post_type[]=lekarz&post_type[]=kariera&post_type[]=cennik&post_type[]=dlafirm");
					$count = $allsearch->post_count;
					wp_reset_query();
				else :
					$count = 0;
				endif;
				pll_e('Wyniki wyszukiwania:');
				echo ' ' . $count . ' ';
				pll_e('stron z hasłem');
				echo ' "' . $key . '"';
				?>
			</div>
		</div>
		<div class="scroll-down"><?php echo et_svg('wp-content/themes/ergotree/assets/img/scroll-down.svg'); ?></div>
	</section>

	<section class="okruszki">
		<div class="my-container">
			<?php
			if (function_exists('yoast_breadcrumb')) {
				yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
			}
			?>
		</div>
	</section>

	<section class="search">
		<div class="my-container">
			<div class="wrapper-posts">
				<?php
				if (have_posts()) :
					while (have_posts()) :
						the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="single-post">
							<div class="type s-14-13"><?php echo get_cpt_title(get_post_type()); ?></div>
							<h4 class="title s-18-16"><?php search_title_highlight_similar(); ?></h4>
							<p class="excerpt s-13-14"><?php echo get_the_excerpt(); ?></p>
						</a>
					<?php endwhile;
				else :
					?>
			</div>
			<div class="not-found">
				<h4 class="title s-18-16 w-600"><?php pll_e('Przepraszamy, wprowadzone hasło nie znalezione.'); ?></h4>
				<div class="desc s-16-14"><?php pll_e('Nie znaleziono'); ?></div>
			</div>
		<?php endif; ?>
		</div>
	</section>
</main>
<?php get_footer(); ?>