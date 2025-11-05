
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
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homepage" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'the-fly-shop-2025'); ?>">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <span class="tel-number"><a href="tel:1-800-669-3474">1-800-669-3474</a></span>

             <div class="collapse navbar-collapse" id="homepage">
                 <?php
                 // Left side menu
                 wp_nav_menu(array(
                     'theme_location' => 'lower-48',
                     'menu_id'        => 'left-menu',
                     'depth'          => 3,
                     'container'      => false,
                     'menu_class'     => 'navbar-nav left-menu',
                     'fallback_cb'    => '__return_false',
                     'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                     'walker'         => new bootstrap_5_wp_nav_menu_walker(),
                     'center_logo'    => true,
                     'menu_part'      => 'left'
                 ));
                 ?>

                 <!-- Brand/Logo (Centered) - Hidden initially, shows on scroll -->
                 <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                     <img class="tfs-nav-logo scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />
                     <!-- <img class="tfs-nav-logo no-scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/TFSLogo.png" alt="The Fly Shop 2025" />-->
                 </a>

                 <?php
                 // Right side menu
                 wp_nav_menu(array(
                     'theme_location' => 'lower-48',
                     'menu_id'        => 'right-menu',
                     'depth'          => 3,
                     'container'      => false,
                     'menu_class'     => 'navbar-nav right-menu',
                     'fallback_cb'    => '__return_false',
                     'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                     'walker'         => new bootstrap_5_wp_nav_menu_walker(),
                     'center_logo'    => true,
                     'menu_part'      => 'right'
                 ));
                 ?>
             </div>
         </div>
     </nav>

     <?php $dest_travel_logo	= get_post_meta( get_the_ID(), 'dest-travel-logo', true ); ?>

     <!-- Below navigation logo container - Shows initially, hides on scroll -->
     <div id="below-nav-logo" class="below-nav-logo-container">
      <a href="<?php echo esc_url(home_url('/')); ?>">
       <img class="tfs-nav-logo scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop 2025" />
			 <?php if ($dest_travel_logo !== '') : ?>
        <img class="tfs-nav-logo no-scroll mb-5" loading="eager" src="<?php echo $dest_travel_logo; ?>" alt="The Fly Shop 2025" />
			 <?php else: ?>
       <img class="tfs-nav-logo no-scroll" loading="eager" src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/TFSLogo.png" alt="The Fly Shop 2025" />
      </a>
			<?php endif; ?>
     </div>
    </header><!-- #masthead -->