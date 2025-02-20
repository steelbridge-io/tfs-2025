<?php
// Breadcrumbs function
function the_fly_shop_breadcrumbs() {
 // Prefix for breadcrumbs
 echo '<nav class="breadcrumb"><a href="' . home_url() . '">Home</a>';

 if (is_page() && !is_front_page()) {
	$parent_id  = wp_get_post_parent_id(get_the_ID());
	$breadcrumbs = [];

	// Loop through parent pages
	while ($parent_id) {
	 $page = get_page($parent_id);
	 $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
	 $parent_id  = wp_get_post_parent_id($page->ID);
	}

	$breadcrumbs = array_reverse($breadcrumbs);
	foreach ($breadcrumbs as $crumb) {
	 echo ' &raquo; ' . $crumb;
	}

	// Current page
	echo ' &raquo; ' . get_the_title();
 }

 echo '</nav>';
}
?>