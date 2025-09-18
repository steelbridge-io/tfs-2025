<?php
/**
 * Template Name: Blog Template Travel
 * Template Post Type: travel-blog, esb_lodge, fish_report
 * Developed for The Fly Shop
 * @package The_Fly_Shop_2025
 * Author: Chris Parsons
 * Author URL: https://steelbridge.io
 */

$the_blogpost_img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
$the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
$new_blog_logo = get_theme_mod('blog_logo_new');
$blog_template_logo = get_post_meta(get_the_ID(), 'blog-template-logo', true);
$basic_page_description = get_post_meta(get_the_ID(), 'blog-description-new', true);
$hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true);
$default = '';

include_once('post-meta/post-meta-blog.php');

get_header();

if ($hero_video_url !== $default) : ?>
 <div class="container-fluid p-0">
	<div class="hero-image position-relative">
	 <!-- Full-Width Featured Image -->
	 <div class="fades fadeOut" id="narf">
		<section id="heroheader" class="video-control">
		 <div class="overlay"></div>
		 <video class="h-video" playsinline autoplay muted loop preload >
			<source src="<?php  echo $hero_video_url; ?>" type="video/mp4">
		 </video>
		 <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
			<!-- Page Title -->
			<h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
		 </div>
		</section>
	 </div>
	</div>
 </div>
<?php elseif (has_post_thumbnail()) :
 ?>
 <div class="container-fluid p-0">
	<div class="hero-image position-relative">
	 <!-- Full-Width Featured Image -->
	 <img src="<?php echo esc_url(
		has_post_thumbnail() ?
		 get_the_post_thumbnail_url(get_the_ID(), 'full') :
		 get_template_directory_uri() . '/images/the-fly-shop-logo-white.png'
	 ); ?>"
				class="img-fluid w-100"
				alt="<?php the_title_attribute(); ?>">

	 <!-- Overlay Content -->
	 <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
		<!-- Page Title -->
		<h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
	 </div>
	</div>
 </div>
<?php else:  ?>
 <div class="container-fluid p-0">
	<div class="hero-image position-relative">
	 <!-- Full-Width Featured Image -->
	 <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/01/Staff_Main6.webp" class="img-fluid w-100" alt="<?php echo get_the_title(); ?>">
	 <!-- Overlay Content -->
	 <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
		<!-- Page Title -->
		<h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
	 </div>
	</div>
 </div>
<?php endif; ?>

 <div class="container-fluid top-fade p-0"></div>
 <div class="container mt-6 mb-7">
	<div class="container mt-4">
	 <?php the_fly_shop_breadcrumbs(); ?>
	</div>
	<div class="row">
	 <div class="col-md-8">
		<main id="primary" class="site-main">

		 <?php
		 while (have_posts()) :
			the_post();

			//get_template_part( 'template-parts/content', get_post_type() );
			get_template_part( 'template-parts/content', 'basic' );

			the_post_navigation(
			 array(
				'prev_text' => '<i class="lni lni-chevron-left me-2"></i><span class="nav-content"><span class="nav-subtitle">' . esc_html__( 'Previous:', 'the-fly-shop-2025' ) . '</span> <span class="nav-title">%title</span></span>',
				'next_text' => '<span class="nav-content"><span class="nav-subtitle">' . esc_html__( 'Next:', 'the-fly-shop-2025' ) . '</span> <span class="nav-title">%title</span></span><i class="lni lni-chevron-right ms-2"></i>',
			 )
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if (comments_open() || get_comments_number()) :
			 comments_template();
			endif;

		 endwhile; // End of the loop.
		 ?>

		</main><!-- #main -->
	 </div>
	 <div class="col-md-4 page-sidebar">
		<?php
		$select_sidebar = get_post_meta(get_the_ID(), 'select-sidebar', true );
		get_sidebar($select_sidebar); ?>
	 </div>
	</div>
 </div>
 <section id="front-page-cta">
  <div class="container-fluid container-row background-image-cta d-flex align-items-center mt-5">
   <div class="container text-center text-md-end">
    <div class="row justify-content-end">
     <div class="col-md-6 col-lg-5 form-container shadow-lg p-5">
      <div class="row">
       <div class="col-6">
        <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop Logo" />
       </div>
       <div class="col-6">
        <h5 class="mb-4 fw-bold">Stay Updated</h5>
        <p class="lead text-muted mb-4">Subscribe to our newsletter and never miss an update!</p>
       </div>
      </div>
      <form id="subscribe-form">
       <div class="form-floating mb-3">
        <input
         type="email"
         class="form-control shadow-sm"
         id="subscriberEmail"
         placeholder="name@example.com"
         required
        />
        <label for="subscriberEmail" class="text-muted">Enter your email</label>
       </div>
       <button type="submit" class="btn btn-tfs btn-lg px-4 shadow-sm">
        Subscribe
       </button>
      </form>
     </div>
    </div>
   </div>
  </div>
 </section>
<?php
get_footer();


