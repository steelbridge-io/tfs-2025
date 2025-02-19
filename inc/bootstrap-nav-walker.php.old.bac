<?php
class Bootstrap_NavWalker extends Walker_Nav_Menu {
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat("\t", $depth);
		$submenu_class = $depth > 0 ? 'dropdown-submenu' : 'dropdown-menu';
		$output .= "\n$indent<ul class=\"$submenu_class\">\n";
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = 'nav-item';
		if ($args->walker->has_children) {
			$classes[] = 'dropdown';
		}
		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropdown-submenu';
		}
		if (in_array('current-menu-item', $classes, true)) {
			$classes[] = 'active';
		}
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = $id ? ' id="' . esc_attr($id) . '"' : '';
		$output .= $indent . '<li' . $id . $class_names . '>';
		$atts = array();
		$atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
		$atts['target'] = !empty($item->target) ? $item->target : '';
		$atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
		$atts['href'] = !empty($item->url) ? $item->url : '';
		if ($depth === 0 && $args->walker->has_children) {
			$atts['class'] = 'nav-link dropdown-toggle';
			$atts['data-toggle'] = 'dropdown';
			$atts['aria-haspopup'] = 'true';
			$atts['aria-expanded'] = 'false';
		} else {
			$atts['class'] = 'nav-link';
		}
		$attributes = '';
		foreach ($atts as $attr => $value) {
			if (!empty($value)) {
				$value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}
