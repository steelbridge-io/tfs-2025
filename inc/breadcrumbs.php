<?php
// Breadcrumbs function
function the_fly_shop_breadcrumbs() {
 // Prefix the breadcrumbs trail with "Home"
 echo '<nav class="breadcrumb"><a href="' . home_url() . '">Home</a>';

 if (is_page() && !is_front_page()) {
	// Handle breadcrumbs for pages
	$parent_id  = wp_get_post_parent_id(get_the_ID());
	$breadcrumbs = [];

	// Loop through parent pages
	while ($parent_id) {
	 $page = get_page($parent_id);
	 $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
	 $parent_id  = wp_get_post_parent_id($page->ID);
	}

	// Reverse and display the breadcrumbs
	$breadcrumbs = array_reverse($breadcrumbs);
	foreach ($breadcrumbs as $crumb) {
	 echo ' &raquo; ' . $crumb;
	}

	// Current page
	echo ' &raquo; ' . get_the_title();
 }

 if (is_single()) {
	// Handle breadcrumbs for posts
	$categories = get_the_category();

	// If the post belongs to at least one category
	if (!empty($categories)) {
	 $cat = $categories[0]; // Use the first category
	 $cat_parents = get_category_parents($cat, true, ' &raquo; ');

	 // Display category hierarchy
	 echo ' &raquo; ' . rtrim($cat_parents, ' &raquo; ');
	}

	// Current post title
	echo ' &raquo; ' . get_the_title();
 }

 echo '</nav>';
}
