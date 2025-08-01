<?php
/**
 * The Fly Shop 2025 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package The_Fly_Shop_2025
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

include_once get_template_directory() . '/inc/bootstrap-nav-walker.php';
include_once get_template_directory() . '/inc/breadcrumbs.php';
include_once get_template_directory() . '/inc/login-page.php';
require_once get_template_directory() . '/front-page-loader.php';
require_once get_template_directory() . '/front-page/footer-admin.php';
require_once get_template_directory() . '/class-tfs-menu-position-handler.php';
require_once get_template_directory() . '/inc/register-sidebars.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_fly_shop_2025_setup() {
 load_theme_textdomain( 'the-fly-shop-2025', get_template_directory() . '/languages' );

 // Other support functions.
 add_theme_support( 'automatic-feed-links' );
 add_theme_support( 'title-tag' );
 add_theme_support( 'post-thumbnails' );

 // Register navigation menus.
 register_nav_menus(
	array(
	 'home-page' => esc_html__( 'Home Page', 'the-fly-shop-2025' ),
	 'travel-menu' => esc_html__( 'Travel Menu', 'the-fly-shop-2025' ),
	 'destination-menu' => esc_html__( 'Destination Menu', 'the-fly-shop-2025' ),
	 'guided-fishing' => esc_html__( 'Guided Fishing', 'the-fly-shop-2025' ),
	 'private-waters' => esc_html__( 'Private Waters', 'the-fly-shop-2025' ),
	 'fly-fishing-schools' => esc_html__( 'Fly Fishing Schools', 'the-fly-shop-2025' ),
	 'fish-camp' => esc_html__( 'Fish Camp', 'the-fly-shop-2025' ),
	)
 );

 load_theme_textdomain( 'the-fly-shop-2025', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'the_fly_shop_2025_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'the_fly_shop_2025_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_fly_shop_2025_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_fly_shop_2025_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_fly_shop_2025_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_fly_shop_2025_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'the-fly-shop-2025' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'the-fly-shop-2025' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'the_fly_shop_2025_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_fly_shop_2025_scripts() {
 /* Critical CSS First */
 wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3', 'all');
 wp_enqueue_style('the-fly-shop-2025-style', get_stylesheet_uri(), array('bootstrap-css'), _S_VERSION);

 /* Non-critical CSS with lower priority */
 wp_enqueue_style('lineicons', 'https://pro-cdn.lineicons.com/5.0/regular/lineicons.css', array(), '5.0', 'all');
 wp_enqueue_style('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css', array(), '2.3.4', 'all');

 wp_style_add_data('the-fly-shop-2025-style', 'rtl', 'replace');

 /* Scripts */
 wp_enqueue_script('bootstarp-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true);
 wp_enqueue_script('the-fly-shop-2025-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
 wp_enqueue_script('aos-js', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array(), '2.3.4', true);

 // Conditional scripts remain the same
 if (is_page_template('page-templates/destination-template.php')) {
	wp_enqueue_script('destination-features', get_template_directory_uri() . '/js/destination-slider-and-features.js', array('jquery'), _S_VERSION, true);
 }
 if (is_page_template('page-templates/stream-report-template.php')) {
	wp_enqueue_script('stream-report-js', get_template_directory_uri() . '/js/stream-report.js', array('jquery'), _S_VERSION, true);
 }

 if (is_page_template('page-templates/guide-service-template.php')) {
	wp_enqueue_script('guide-service-js', get_template_directory_uri() . '/js/guide-service.js', array('jquery'), _S_VERSION, true);
 }

 if (is_page_template('page-templates/private-waters-template.php')) {
	wp_enqueue_script('private-waters-js', get_template_directory_uri() . '/js/private-waters.js', array('jquery'),
	 _S_VERSION,
	 true);
 }

 if (is_page_template('page-templates/fly-fishing-schools-template.php')) {
	wp_enqueue_script('fly-fishing-schools-js', get_template_directory_uri() . '/js/fly-fishing-schools.js', array('jquery'),
	 _S_VERSION, true);
 }

 if (is_page_template('page-templates/fish-camp-template.php')) {
	wp_enqueue_script('fish-camp-js', get_template_directory_uri() . '/js/fish-camp.js', array('jquery'),
	 _S_VERSION, true);
 }

 if (is_page_template('page-templates/news-blog-template.php')) {
	wp_enqueue_script('fishing-news-js', get_template_directory_uri() . '/js/fishing-news.js', array('jquery'),
	 _S_VERSION, true);
 }

 if (is_page_template('page-templates/travel-template.php')) {
	wp_enqueue_script('travel-js', get_template_directory_uri() . '/js/travel-template.js', array('jquery'),
	 _S_VERSION, true);
 }

 if (is_page_template('page-templates/regional-waters-template.php')) {
	wp_enqueue_script('regional-waters-js', get_template_directory_uri() . '/js/regional-waters.js', array('jquery'), _S_VERSION, true);
 }

 if (is_page_template('page-templates/regional-waters-template-v2.php')) {
	wp_enqueue_script('regional-waters-js-v2', get_template_directory_uri() . '/js/regional-waters-v2.js', array('jquery'), _S_VERSION, true);
 }

 if (is_page_template('page-templates/sections-template.php')) {
	wp_enqueue_script('sections-template-js', get_template_directory_uri() . '/js/sections-template.js', array('jquery'),
	 _S_VERSION, true);
 }

 if (is_page_template('page-templates/signature-template.php')) {
	wp_enqueue_script('signature-template-js', get_template_directory_uri() . '/js/signature-template.js', array('jquery'),
	 _S_VERSION, true);
 }

 if (is_page_template('page-templates/staff-template.php')) {
	wp_enqueue_script('signature-template-js', get_template_directory_uri() . '/js/staff-template.js', array('jquery'),
	 _S_VERSION, true);
 }

 if (is_front_page()) {
	 wp_enqueue_script('front-page-js', get_template_directory_uri() . '/js/front-page.js', array(), '20200415', true);
 }

 if (is_singular() && comments_open() && get_option('thread_comments')) {
	wp_enqueue_script('comment-reply');
 }
}
add_action( 'wp_enqueue_scripts', 'the_fly_shop_2025_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// Add link to excerpt
function custom_excerpt_more($more) {
 global $post;
 return ' <a href="' . get_permalink($post->ID) . '">' . __('(more…)') . '</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');
