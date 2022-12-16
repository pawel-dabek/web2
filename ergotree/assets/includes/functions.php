<?php

function et_load_more_button($attr)
{

	add_js_theme('et-alm', '/assets/js/et-ajax-load-more.js');

	$args = shortcode_atts(array(
		'offset' 			=> 0,
		'per_load' 			=> 3,
		'post_type' 		=> get_post_type(),
		'search' 			=> isset($GLOBALS["search_query"]) ? $GLOBALS["search_query"] : "",
		'tag' 				=> '',
		'taxonomy_name'		=> isset($GLOBALS["tax_name"]) ? $GLOBALS["tax_name"] : "",
		'taxonomy_field'	=> 'slug',
		'taxonomy_term'		=> isset($GLOBALS["term_name"]) ? $GLOBALS["term_name"] : "",
		'order' 			=> 'DESC',
		'orderby' 			=> 'date',
		'template_path' 	=> $GLOBALS["post_template_src"],
		'label_text' 		=> 'Load more',
		'loading_text' 		=> 'loading...',
		'button_class' 		=> 'btn-theme',
		'container_class' 	=> 'wrapper-posts',
	), $attr);

	$taxonomy = '';

	if ($args['taxonomy_name'] != '' && $args['taxonomy_field'] != '' && $args['taxonomy_term'] != '') {
		$taxonomy = array(
			'taxonomy'	=> $args['taxonomy_name'],
			'field'		=> $args['taxonomy_field'],
			'terms'		=> $args['taxonomy_term'],
		);
	}

	$query_args = array(
		'tag' 				=> $args['tag'],
		'post_type'      	=> $args['post_type'],
		'posts_per_page' 	=> $args['per_load'],
		'offset'         	=> $args['offset'],
		's'              	=> $args['search'],
		'tax_query'			=> array($taxonomy),
	);

	$obj_name = new WP_Query($query_args);

	$output = '';
	$output .= '<div';
	$output .= ' data-tag="' . $args['tag'] . '"';
	$output .= ' data-allposts=' . $obj_name->found_posts . ' data-offset="' . $args['offset'] . '"';
	$output .= ' data-perload="' . $args['per_load'] . '" data-posttype="' . $args['post_type'] . '"';
	$output .= ' data-templatepath="' . $args['template_path'] . '" data-loadingtext="' . $args['loading_text'] . '"';
	$output .= ' data-labeltext="' . $args['label_text'] . '" data-order="' . $args['order'] . '"';
	$output .= ' data-search="' . $args['search'] . '" data-containerclass="' . $args['container_class'] . '"';
	$output .= ' data-orderby="' . $args['orderby'] . '" data-taxonomyname="' . $args['taxonomy_name'] . '"';
	$output .= ' data-taxonomyfield="' . $args['taxonomy_field'] . '" data-taxonomyterm="' . $args['taxonomy_term'] . '"';
	$output .= ' class="load-more-button ' . $args['button_class'] . '">' . $args['label_text'];
	$output .= '</div>';

	if (!file_exists(get_template_directory() . $args['template_path'])) {
		return "Nie podano ścieżki do post template bądź podany plik nie istnieje.";
	} elseif ($obj_name->found_posts > 0) {
		return $output;
	}
}

add_shortcode('et_load_more_button', 'et_load_more_button');

add_action('wp_ajax_et_load_more_posts', 'et_load_more_posts');
add_action('wp_ajax_nopriv_et_load_more_posts', 'et_load_more_posts');

function et_load_more_posts()
{

	if ($_POST['taxonomy_name'] != '' && $_POST['taxonomy_field'] != '' && $_POST['taxonomy_term'] != '') {
		$taxonomy = array(
			'taxonomy'	=> $_POST['taxonomy_name'],
			'field'		=> $_POST['taxonomy_field'],
			'terms'		=> $_POST['taxonomy_term'],
		);
	}

	$args = array(
		'tag' 				=> $_POST['tag'],
		'post_type'      	=> 	array($_POST['post_type']),
		'posts_per_page' 	=> 	$_POST['per_load'],
		'offset'         	=> 	$_POST['offset'],
		's'             	=> 	$_POST['search'],
		'order'				=> 	$_POST['order'],
		'orderby'			=> 	$_POST['orderby'],
		'tax_query'			=> 	array($taxonomy),
	);

	$templatePath = preg_replace("/(.+)\.php$/", "$1", $_POST['template_path']);

	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) :

		while ($the_query->have_posts()) : $the_query->the_post();

			get_template_part($templatePath);

		endwhile;

	endif;

	die();
}

/* Custom search form */
function et_search_form($form)
{
	$form = '<form role="search" method="get" id="searchform" action="' . home_url('/') . '" >
	<label hidden class="screen-reader-text" for="s">' . __('Search for:') . '</label>
	<input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="" />
	<input type="hidden" name="post_type[]" value="zabiegi" />
	<input type="hidden" name="post_type[]" value="konsultacje" />
	<input type="hidden" name="post_type[]" value="post" />
	<input type="hidden" name="post_type[]" value="lekarz" />
	<input type="hidden" name="post_type[]" value="kariera" />
	<input type="hidden" name="post_type[]" value="cennik" />
	<input type="hidden" name="post_type[]" value="dlafirm" />
	<input type="submit" id="searchsubmit" value="' . esc_attr__('Search') . '" />
	</form>';

	return $form;
}

add_filter('get_search_form', 'et_search_form');

/* Search only titles */
function __search_by_title_only($search, $wp_query)
{
	global $wpdb;

	if (empty($search))
		return $search;

	$q = $wp_query->query_vars;
	$n = !empty($q['exact']) ? '' : '%';

	$search =
		$searchand = '';

	foreach ((array) $q['search_terms'] as $term) {
		$term = $term;
		$search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
		$searchand = ' AND ';
	}

	if (!empty($search)) {
		$search = " AND ({$search}) ";
		if (!is_user_logged_in())
			$search .= " AND ($wpdb->posts.post_password = '') ";
	}

	return $search;
}
add_filter('posts_search', '__search_by_title_only', 500, 2);

/* Highlight search keyword in excerpt */
function search_excerpt_highlight()
{
	$excerpt = get_the_excerpt();
	$keys = implode('|', explode(' ', get_search_query()));
	$excerpt = preg_replace('/(' . $keys . ')/iu', '<strong class="search-highlight">\0</strong>', $excerpt);

	echo '<p>' . $excerpt . '</p>';
}

/* Highlight search keyword in title */
function search_title_highlight()
{
	$title = get_the_title();
	$keys = implode('|', explode(' ', get_search_query()));
	$title = preg_replace('/(' . $keys . ')/iu', '<strong class="search-highlight">\0</strong>', $title);

	echo $title;
}

/* Highlight search keyword in title and words with similiar letters */
function search_title_highlight_similar()
{
	$title = get_the_title();
	$keys = implode('|', explode(' ', get_search_query()));

	$similarLetters = array('[aą]', '[cć]', '[eę]', '[lł]', '[nń]', '[oó]', '[sś]', '[zżź]');

	foreach ($similarLetters as $key) {
		if (preg_match('/' . $key . '/', $keys)) {
			$keys = preg_replace('/(' . $key . ')/iu', $key, $keys);
			unset($similarLetters[$key]);
		}
	}

	$title = preg_replace('/(' . $keys . ')/iu', '<strong class="search-highlight">\0</strong>', $title);

	echo $title;
}

/* Display cpt title */
function get_cpt_title($post_type)
{
	$obj = get_post_type_object($post_type);
	return $obj->labels->name;
}
