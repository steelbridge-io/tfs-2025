<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package The_Fly_Shop_2025
 */

?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	 <?php
	 if ( is_singular() ) :
		the_title( '<h1 class="entry-title">', '</h1>' );
	 else :
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	 endif;

	 if ( 'post' === get_post_type() ) :
		?>
		<div class="entry-meta">
		 <?php
		 the_fly_shop_2025_posted_on();
		 the_fly_shop_2025_posted_by();
		 ?>
		</div><!-- .entry-meta -->
	 <?php endif; ?>
	</header><!-- .entry-header -->

	<?php //the_fly_shop_2025_post_thumbnail(); ?>

	<div class="entry-content">
	 <?php
	 the_content(
		sprintf(
		 wp_kses(
		 /* translators: %s: Name of current post. Only visible to screen readers */
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'the-fly-shop-2025' ),
			array(
			 'span' => array(
				'class' => array(),
			 ),
			)
		 ),
		 wp_kses_post( get_the_title() )
		)
	 );

	 wp_link_pages(
		array(
		 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'the-fly-shop-2025' ),
		 'after'  => '</div>',
		)
	 );
	 ?>
	</div><!-- .entry-content -->
 </article><!-- #post-<?php the_ID(); ?> -->

	<footer class="entry-footer">
	 <?php the_fly_shop_2025_entry_footer(); ?>
	</footer><!-- .entry-footer -->
