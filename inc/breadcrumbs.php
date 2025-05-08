<?php
// Breadcrumbs function
function the_fly_shop_breadcrumbs() {
 // Prefix the breadcrumbs trail with "Home"
 echo '<nav class="breadcrumb"><a href="' . home_url() . '">Home</a>';

 if ((is_page() || is_singular('guide_service')) && !is_front_page()) {
	// Handle breadcrumbs for pages and guide_service post type
	$parent_id = wp_get_post_parent_id(get_the_ID());
	$breadcrumbs = [];

	// Loop through parent pages/posts
	while ($parent_id) {
	 $parent = get_post($parent_id);
	 $breadcrumbs[] = '<a href="' . get_permalink($parent->ID) . '">' . get_the_title($parent->ID) . '</a>';
	 $parent_id = wp_get_post_parent_id($parent->ID);
	}

	// Reverse and display the breadcrumbs
	$breadcrumbs = array_reverse($breadcrumbs);
	foreach ($breadcrumbs as $crumb) {
	 echo '<span class="breadcrumb-separator">/</span>'
 . $crumb;
	}

	// Current page/post
	echo '<span class="breadcrumb-separator">/</span>'
 . get_the_title();
 }
 elseif (is_category()) {
	// Handle category archives
	$category = get_category(get_query_var('cat'));

	if ($category->parent != 0) {
	 // Display parent categories
	 echo '<span class="breadcrumb-separator">/</span>'
 . get_category_parents($category->parent, true, '<span class="breadcrumb-separator">/</span>'
);
	}

	// Current category
	echo '<span class="breadcrumb-separator">/</span>'
 . single_cat_title('', false);
 }
 elseif (is_tax()) {
	// Handle taxonomy archives
	$term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

	if ($term->parent != 0) {
	 // Get parent terms
	 $parents = [];
	 $parent_id = $term->parent;

	 while ($parent_id) {
		$parent = get_term($parent_id, get_query_var('taxonomy'));
		$parents[] = '<a href="' . get_term_link($parent) . '">' . $parent->name . '</a>';
		$parent_id = $parent->parent;
	 }

	 // Reverse and display parent terms
	 $parents = array_reverse($parents);
	 foreach ($parents as $parent) {
		echo '<span class="breadcrumb-separator">/</span>'
 . $parent;
	 }
	}

	// Current term
	echo '<span class="breadcrumb-separator">/</span>'
 . single_term_title('', false);
 }
 elseif (is_single() && get_post_type() != 'guide_service') {
	// Handle breadcrumbs for regular posts (not guide_service)
	$post_type = get_post_type();

	if ($post_type != 'post') {
	 // Handle other custom post types
	 $post_type_obj = get_post_type_object($post_type);
	 $post_type_archive = get_post_type_archive_link($post_type);

	 if ($post_type_archive) {
		echo '<span class="breadcrumb-separator">/</span><a href="' . $post_type_archive . '">' . $post_type_obj->labels->name . '</a>';
	 }

	 // Add taxonomy terms if available
	 $taxonomies = get_object_taxonomies($post_type, 'objects');
	 foreach ($taxonomies as $taxonomy) {
		if ($taxonomy->hierarchical) {
		 $terms = get_the_terms(get_the_ID(), $taxonomy->name);
		 if ($terms && !is_wp_error($terms)) {
			// Get deepest term in hierarchy
			$term_depths = [];
			foreach ($terms as $term) {
			 $ancestors = get_ancestors($term->term_id, $taxonomy->name);
			 $term_depths[$term->term_id] = count($ancestors);
			}
			arsort($term_depths);
			$deepest_term_id = key($term_depths);
			$deepest_term = get_term($deepest_term_id, $taxonomy->name);

			// Get term ancestry
			$term_ancestors = get_ancestors($deepest_term->term_id, $taxonomy->name);
			$term_ancestors = array_reverse($term_ancestors);

			// Display term ancestry
			foreach ($term_ancestors as $ancestor_id) {
			 $ancestor = get_term($ancestor_id, $taxonomy->name);
			 echo '<span class="breadcrumb-separator">/</span><a href="' . get_term_link($ancestor) . '">' . $ancestor->name . '</a>';
			}

			echo '<span class="breadcrumb-separator">/</span><a href="' . get_term_link($deepest_term) . '">' . $deepest_term->name . '</a>';
			break; // Only use the first hierarchical taxonomy
		 }
		}
	 }
	} else {
	 // Handle regular blog posts with categories
	 $categories = get_the_category();

	 if (!empty($categories)) {
		// Find deepest category (with most ancestors)
		$category_depths = [];
		foreach ($categories as $category) {
		 $ancestors = get_ancestors($category->term_id, 'category');
		 $category_depths[$category->term_id] = count($ancestors);
		}

		arsort($category_depths);
		$deepest_category_id = key($category_depths);
		$deepest_category = get_category($deepest_category_id);

		// Get complete path for deepest category including all ancestors
		echo '<span class="breadcrumb-separator">/</span>'
 . get_category_parents($deepest_category, true, '<span class="breadcrumb-separator">/</span>'
);
	 }
	}

	// Current post title
	echo '<span class="breadcrumb-separator">/</span>' . get_the_title();
 }
 elseif (is_archive()) {
	// Handle other archive types
	if (is_post_type_archive()) {
	 // Custom post type archives
	 echo '<span class="breadcrumb-separator">/</span>' . post_type_archive_title('', false);
	} elseif (is_day()) {
	 echo '<span class="breadcrumb-separator">/</span>' . get_the_date();
	} elseif (is_month()) {
	 echo '<span class="breadcrumb-separator">/</span>' . get_the_date('F Y');
	} elseif (is_year()) {
	 echo '<span class="breadcrumb-separator">/</span>' . get_the_date('Y');
	} elseif (is_author()) {
	 echo '<span class="breadcrumb-separator">/</span>Author: ' . get_the_author();
	}
 }
 elseif (is_search()) {
	echo '<span class="breadcrumb-separator">/</span>Search Results for "' . get_search_query() . '"';
 }

 echo '</nav>';
}