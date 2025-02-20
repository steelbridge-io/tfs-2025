<?php
/**
	* The template for displaying archive pages
	*
	* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	*
	* @package The_Fly_Shop_2025
	*/

get_header();
?>
    <div id="archive-template" class="container mt-10 mb-5">
    <div class="row">
    <div class="col-md-8">
    <main id="primary" class="site-main">

     <?php if ( have_posts() ) : ?>

         <header class="page-header text-center mb-4">
            <?php
            the_archive_title( '<h1 class="page-title display-4">', '</h1>' );
            the_archive_description( '<div class="archive-description lead text-muted">', '</div>' );
            ?>
         </header><!-- .page-header -->

         <div class="list-group"> <!-- List layout for posts -->
                <?php
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    ?>
              <div class="list-group-item py-4"> <!-- Post layout -->
                  <div class="row g-3 align-items-center">
                    <?php if ( has_post_thumbnail() ) : ?>
                       <div class="col-md-5">
                           <a href="<?php the_permalink(); ?>">
                               <img src="<?php the_post_thumbnail_url('medium-large'); ?>" class="img-fluid-archive rounded" alt="<?php the_title_attribute(); ?>" />
                           </a>
                       </div>
																			<?php endif; ?>
                      <div class="col-md-7">
                          <h2 class="h5 mb-2">
                              <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
                          </h2>
                          <p class="text-muted small mb-2">
                              <span><?php echo get_the_date(); ?></span> | <span><?php the_author(); ?></span>
                          </p>
                          <div class="post-excerpt mb-3">
																											<?php the_excerpt(); ?>
                          </div>
                          <a href="<?php the_permalink(); ?>" class="btn btn-link p-0 text-decoration-none">Read More</a>
                      </div>
                  </div>
              </div>

            <?php endwhile; ?>

         </div> <!-- End list group -->

         <div class="d-flex justify-content-center my-4">
            <?php the_posts_pagination( array(
                'prev_text' => '<span aria-hidden="true">&laquo;</span>',
                'next_text' => '<span aria-hidden="true">&raquo;</span>',
                'type'      => 'list',
                'class'     => 'pagination justify-content-center',
            ) ); ?>
         </div>

         <?php else : ?>

         <div class="alert alert-warning text-center" role="alert">
            <?php esc_html_e( 'No posts found.', 'the-fly-shop-2025' ); ?>
         </div>

         <?php endif; ?>

    </main><!-- #main -->
    </div>
<div class="col-md-4 page-sidebar">
<?php get_sidebar(); ?>
</div>
</div>
</div>
<?php
get_footer();