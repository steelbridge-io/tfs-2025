<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package The_Fly_Shop_2025
 */

get_header();

if (has_post_thumbnail()) :
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
                <!-- Logo -->
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/the-fly-shop-logo-white.png'); ?>"
                     class="hero-logo mb-3"
                     alt="Website Logo">

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
            <!-- Logo -->
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/the-fly-shop-logo-white.png'); ?>"
                 class="hero-logo mb-3"
                 alt="Website Logo">

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

                         get_template_part( 'template-parts/content', get_post_type() );

                        the_post_navigation(
                         array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'the-fly-shop-2025' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'the-fly-shop-2025' ) . '</span> <span class="nav-title">%title</span>',
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
         <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer();
