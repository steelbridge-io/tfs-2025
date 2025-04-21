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

        <nav id="site-navigation" class="navbar fixed-top navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand/Logo -->
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <!-- Add loading="eager" to prevent image FOUC -->
                    <img class="tfs-nav-logo scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />
                    <img class="tfs-nav-logo no-scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/TFSLogo.png" alt="The Fly Shop 2025" />
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#home-page" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'the-fly-shop-2025'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="private-waters">
								 <?php
								 wp_nav_menu(array(
									'theme_location' => 'private-waters',
									'menu_id'       => 'private-waters',
									'depth'         => 3,
									'container'     => false,
									'menu_class'    => 'navbar-nav me-auto mb-2 mb-md-0',
									'fallback_cb'   => '__return_false',
									'items_wrap'    => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
									'walker'        => new bootstrap_5_wp_nav_menu_walker()
								 ));
								 ?>
                </div>
            </div>
        </nav>
	</header><!-- #masthead -->
