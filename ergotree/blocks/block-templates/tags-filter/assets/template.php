<?php
if (isset($_GET['tag[]']) && $_GET['tag[]']) {
	$tag = $_GET['tag[]'];
}
?>
<form action="/blog/#blog" method="GET" name="form-taxonomy" id="form-taxonomy">
	<input type="hidden" name="categories" value="<?php if (isset($_GET['categories'])) {
																									echo $_GET['categories'];
																								} ?>" />
	<div class="stage stage-2">
		<h4 class="authors-title s-34-18 w-600"><?php pll_e('Autorzy:'); ?></h4>
		<div class="stage-2-wrapper">
			<div class="arrow-prev"><?php echo et_svg('wp-content/themes/ergotree/assets/img/arrow-big-left.svg'); ?></div>
			<div class="splide splide-authors">
				<div class="splide__track">
					<ul class="splide__list">
						<?php
						$categories = get_categories(array(
							'hide_empty' => false
						));
						foreach ($categories as $category) :
							if ($category->slug !== 'ogolne') { ?>
								<li class="splide__slide">
									<?php

									$active = '';
									$currentCat = '';

									if (isset($_GET['categories'])) {
										$currentCat = $_GET['categories'];
									}
									if ($currentCat == $category->slug) {
										$active = ' active';
									}

									?>
									<div class="category-item<?php echo $active; ?>" data-value="<?= $category->slug; ?>">
										<div class="wrap-img"><?= wp_get_attachment_image(get_field('grafika_kategorii', 'category_' . $category->term_id)); ?></div>
										<div class="text">
											<span class="description"><?= $category->description; ?></span>
											<span class="name" data-title="<?= $category->name; ?>"><?= $category->name; ?></span>
										</div>
									</div>
								</li>
						<?php }
						endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="arrow-next"><?php echo et_svg('wp-content/themes/ergotree/assets/img/arrow-big-right.svg'); ?></div>
		</div>
	</div>
	<div class="stage-1-trigger-wrapper">
		<h4 class="authors-title s-34-18 w-600"><?php pll_e('Lub wybierz interesujący Cię temat:'); ?></h4>
		<div class="btn-wrapper">
			<div class="btn-red-full"><?php pll_e('Filtruj kategorię'); ?></div>
		</div>
	</div>
	<div class="stage stage-1">
		<h4 class="authors-title desktop-filters filters-title s-34-18 w-600"><?php pll_e('Lub tematykę:'); ?></h4>
		<h4 class="authors-title mobile-filters filters-title s-34-18 w-600"><?php pll_e('Wybierz kategorię:'); ?></h4>
		<div class="close-stage-1"><?php et_svg('wp-content/themes/ergotree/assets/img/close.svg'); ?></div>
		<div class="stage-1-wrapper">
			<div class="clear-filters<?php if (!isset($_GET['tag'])) {
																	echo ' active';
																} ?> "><?php pll_e('Wyczyść filtry'); ?> (<?php $count = wp_count_posts()->publish;
																																					echo $count; ?>)</div>
			<?php
			$terms = get_tags(array(
				'hide_empty' => false
			));
			foreach ($terms as $term) :
			?>
				<input type="checkbox" name="tag[]" id="tag-<?= $term->slug; ?>" value="<?= $term->slug ?>" <?php checked((isset($_GET['tag']) && in_array($term->slug, $_GET['tag'])) || $term->slug == get_queried_object()->slug); ?> />
				<label class="tag-item" for="tag-<?= $term->slug; ?>">
					<?= $term->name; ?> (<?php echo $term->count; ?>)
				</label>
			<?php endforeach; ?>
		</div>
		<div class="btn-wrapper">
			<div data-less="Zwiń" class="more more-tags"><?php pll_e('Więcej'); ?></div>
			<div class="btn-red-full accept-filters"><?php pll_e('Zaakceptuj'); ?></div>
		</div>
	</div>
</form>