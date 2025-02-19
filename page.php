<?php
/**
	* The template for displaying all pages
	*
	* This is the template that displays all pages by default.
	* Please note that this is the WordPress construct of pages
	* and that other 'pages' on your WordPress site may use a
	* different template.
	*
	* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
                        get_template_directory_uri() . '/images/the-fly-shop-logo.png'
                ); ?>"
                 class="img-fluid w-100"
                 alt="<?php the_title_attribute(); ?>">

            <!-- Overlay Content -->
            <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
                <!-- Logo -->
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/the-fly-shop-logo.png'); ?>"
                     class="hero-logo mb-3"
                     alt="Website Logo">

                <!-- Page Title -->
                <h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
            </div>
        </div>
    </div>
<?php endif; ?>
    <div class="container mt-6 mb-7">
        <div class="row">
            <div class="col-md-8">
                <main id="primary" class="site-main">

                    <?php
                    while (have_posts()) :
                    the_post();

                    get_template_part('template-parts/content', 'page');

                    // If comments are open or we have at least one comment, load up the comment template.
                    if (comments_open() || get_comments_number()) :
                    comments_template();
                    endif;

                    endwhile; // End of the loop.
                    ?>

                </main><!-- #main -->
            </div>
            <div class="col-md-4">
            <?php
            get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php
get_footer();
