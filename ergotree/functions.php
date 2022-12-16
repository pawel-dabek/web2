<?php

/* Remove title from search result breadcrumbs */
function remove_breadcrumb_title($link_output)
{
    if (is_search()) {
        $breadcrumbACF = pll__('Wyniki wyszukiwania okruszek');
        if (strpos($link_output, 'breadcrumb_last') !== false) {
            $link_output = '<span class="breadcrumb_last" aria-current="page">' . $breadcrumbACF . '</span>';
        }
    }
    return $link_output;
}

add_filter('wpseo_breadcrumb_single_link', 'remove_breadcrumb_title');

/* Add excerpt page support */
add_post_type_support('page', 'excerpt');

/* Set max posts for Zespół archive to -1 */
function set_posts_per_page_for_zespol($query)
{
    if (is_post_type_archive('lekarz') && !is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', -1);
    }
}
add_action('pre_get_posts', 'set_posts_per_page_for_zespol');

/* Set max posts for Cennik archive to -1 */
function set_posts_per_page_for_cennik($query)
{
    if (is_post_type_archive('cennik') && !is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', -1);
    }
}
add_action('pre_get_posts', 'set_posts_per_page_for_cennik');

/* Set max posts for Search page to -1 */
function set_posts_per_page_for_search($query)
{
    if (is_search() && !is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', -1);
    }
}
add_action('pre_get_posts', 'set_posts_per_page_for_search');

/* Custom markup for popular posts widget */
function my_custom_single_popular_post($post_html, $popular_post, $instance)
{
    $output = '';
    $output .= '<div class="col-lg-4 col-sm-6">';
    $output .= '<article class="post-wrapper">';
    $output .= '<a href="' . get_permalink($popular_post->id) . '">';
    $output .= '<div class="thumbnail">';
    $output .= get_the_post_thumbnail($popular_post->id, 'large');
    $output .= '<div class="read-article">';
    $output .= '<p>' . pll__('Czytaj artykuł') . '</p>';
    $output .= '<div class="icon"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg></div>';
    $output .= '</div>';
    $output .= '</div>';
    $output .= '</a>';
    $output .= '<div class="text">';
    $output .= '<div class="top">';
    $output .= '<div class="date c-gray">' . get_the_date('d.m.Y', $popular_post->id) . '</div>';
    $output .= '<div class="line"></div>';

    $author_name = '';

    $categories = get_the_category($popular_post->id);
    $x = 0;
    foreach ($categories as $category) :

        $single_name = $category->name;
        $single_desc = $category->description;

        $final_name = $single_desc . ' ' . $single_name;

        $author_name .= $final_name;
        if ($x > 0) {
            $author_name .= ', ';
        }

        $x++;

    endforeach;

    $output .= '<div class="author c-gray">' . $author_name . '</div>';
    $output .= '</div>';
    $output .= '<div class="content">';
    $output .= '<a href="' . get_permalink($popular_post->id) . '">';
    $output .= '<h4 class="small-title c-red">' . get_the_title($popular_post->id) . '</h4>';
    $output .= '</a>';
    $output .= '<p class="excerpt">' . get_the_excerpt($popular_post->id) . '</p>';
    $output .= '</div>';
    $output .= '<ul class="categories">';
    $tags = get_the_tags($popular_post->id);
    foreach ($tags as $tag) :
        $output .= '<li class="single single-tag"><a href="/blog/?tag[]=' . $tag->slug . '">' . $tag->name . '</a></li>';
    endforeach;
    $categories = get_the_category($popular_post->id);
    foreach ($categories as $category) :
        $output .= '<li class="single single-category">';
        $output .= '<a href="/blog/?categories=' . $category->slug . '">';
        $output .= get_field('skrocony_tytul', 'category_' . $category->term_id);
        $output .= '</a>';
        $output .= '</li>';
    endforeach;
    $output .= '</ul>';
    $output .= '</div>';
    $output .= '</article>';
    $output .= '</div>';
    return $output;
}
add_filter('wpp_post', 'my_custom_single_popular_post', 10, 3);

/* Remove cpt name from zabiegi single page breadcrumbs */
function my_breadcrumb_filter_function($crumbs)
{
    if (is_singular('zabiegi')) {
        $crumbs[1] = '';
    }
    return $crumbs;
}
add_filter('wpseo_breadcrumb_links', 'my_breadcrumb_filter_function');

/* Remove cpt name from konsultacje single page breadcrumbs */
function my_breadcrumb_filter_function_konsultacje($crumbs)
{
    if (is_singular('konsultacje')) {
        $crumbs[1] = '';
    }
    return $crumbs;
}
add_filter('wpseo_breadcrumb_links', 'my_breadcrumb_filter_function_konsultacje');

/* Alter cennik query and set 'orderby' => 'menu_order' and DESC order */
function alter_cennik_query($query)
{
    if (is_post_type_archive('cennik') && !is_admin() && $query->is_main_query()) {
        $query->set('orderby', 'menu_order');
        $query->set('order', 'DESC');
    }
}

/* Set max posts to 3 */
function set_posts_per_page_for_blog($query)
{
    if (is_home() && !is_admin() && $query->is_main_query()) {
        $query->set('posts_per_page', 9);
        $query->set('ignore_sticky_posts', 1);
    }
}
add_action('pre_get_posts', 'set_posts_per_page_for_blog');

/* Set category for blog page */
function set_cat_for_blog($query)
{
    if (is_home() && !is_admin() && $query->is_main_query() && isset($_GET['categories'])) {

        $categories = $_GET['categories'];
        $query->set('category_name', $categories);
    }
}
add_action('pre_get_posts', 'set_cat_for_blog');
