<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Fly_Shop_2025
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'the-fly-shop-2025' ); ?></a>

	<header id="masthead" class="site-header">
		 <!-- .site-branding -->

        <nav id="site-navigation" class="navbar fixed-top navbar-expand-lg">

            <div class="container">
                <!-- Brand/Logo -->
                <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<?php //bloginfo( 'name' ); ?>
                    <img class="tfs-nav-logo scroll" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />

                    <img class="tfs-nav-logo no-scroll" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/TFSLogo.png" alt="The Fly Shop 2025" />
                </a>

                <!-- Mobile Menu Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-menu" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'the-fly-shop-2025' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- WordPress Menu -->
                <div class="collapse navbar-collapse" id="primary-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'menu-1', // Registered menu location
							'menu_id'         => 'primary-menu',
							'container'       => false,   // Don't wrap the menu in a container
							'menu_class'      => 'navbar-nav me-auto mb-2 mb-lg-0', // Add Bootstrap classes
							'fallback_cb'     => '__return_false',
							'depth'           => 2, // Allow dropdowns up to 2 levels
							'walker'          => new Bootstrap_NavWalker(), // Use a custom walker class
						)
					);
					?>
                </div>
            </div>
        </nav>
	</header><!-- #masthead -->
