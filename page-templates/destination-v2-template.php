<?php
declare(strict_types=1);
/*
Template Name: Destination V2 Template
Template Post Type: post, page, travel_cpt, lower48, guide_service
*/

//get_header('destination-header');

if (get_post_type() === 'travel_cpt') {
    get_header('travel-header');
} else {
    get_header('destination-header');
}


/**
 * Write the get header where if this template is used in the travel_cpt custom post typ, get_header('travel-header'); is used.
 */


include_once( 'post-meta/post-meta-travel.php' ); // Includes all the custom meta-data
 ?>

<?php
/**
	*  The below includes are for conditionally loaded sections associated with post or page IDs
	*/
/*include_once( 'cta-sections/news-signup-blog-esb-lodge.php' );
include_once( 'cta-sections/news-signup-blog-lava-creek.php' );
include_once( 'cta-sections/news-signup-blog-estancia-maria-behety-lodge.php' );
include_once( 'cta-sections/news-signup-blog-la-villa-de-maria-behety.php' );
include_once('cta-sections/news-signup-blog-rio-marie.php' );*/

if (has_post_thumbnail()) : ?>

	<div class="container-fluid travel-template-hero p-0">
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
<div class="container-fluid travel-template-hero p-0">
	<div class="hero-image position-relative">
		<!-- Full-Width Featured Image -->
		<img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/01/Staff_Main6.webp" class="img-fluid w-100" alt="<?php echo get_the_title(); ?>">
		<!-- Overlay Content -->
		<div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">

		 <?php if( $dest_travel_logo !== ''	) : ?>
      <img src="<?php echo $dest_travel_logo; ?>" class="hero-logo mb-3" alt="Website Logo">
		 <?php else : ?>
      <!-- Logo -->
      <img src="<?php echo esc_url(get_template_directory_uri() . '/images/the-fly-shop-logo-white.png'); ?>" class="hero-logo mb-3" alt="Website Logo">
		 <?php endif; ?>

			<!-- Page Title -->
			<h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
		</div>
	</div>
</div>
<?php endif; ?>

 <!-- Breadcrumbs -->
 <div class="container mt-4">
	<?php the_fly_shop_breadcrumbs(); ?>
 </div>

<section class="content-destination-template content">
    <div class="container">
        <!--<div id="scrollto"></div>-->
        <div id="primary" class="content-area row">
            <main id="main-main" class="site-main col-md-12" role="main">

                <?php
                // WordPress Blog Content
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page' );

                endwhile; // End of the loop.
                ?>

            </main>
        </div>
    </div>
</section>

<?php if ($travel_costs_image !== '') : ?>
<section id="inclusions-section" class="container-fluid">
    <div class="container">
        <div class="row h-100">
            <div class="col-md-4 d-flex featured-image">
                <img class="img-fluid inclusions-image w-100 " src="<?php echo $travel_costs_image; ?>" alt="The
                Fly Shop Travel Image" style="object-fit: cover;">
            </div>
            <div class="col-md-8 d-flex inclusions-content-wrapper">
                <div class="inclusions-content d-flex flex-column justify-content-center">
                    <h2><?php echo $feature_1_title ?></h2>
                    <?php
                    echo '<div><p>' . $feature_1_cost_textarea . '</p></div>';
                    echo '<div><p><b>Inclusions:</b>&nbsp;' . $feature_1_inclusions_textarea . '</p></div>';
                    echo '<div><p><b>Non-Inclusions:</b>&nbsp;' . $feature_1_noninclusions_textarea . '</p></div>';
                    echo '<div><p><b>Travel Insurance:</b>&nbsp;' . $feature_1_travelins_textarea . '</p></div>';
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
 <section id="inclusions-section" class="container-fluid">
  <div class="container">
   <div class="row h-100">
    <div class="col-md-12">
     <div class="inclusions-content">
      <h2><?php echo $feature_1_title ?></h2>
			<?php
			echo '<div><p>' . $feature_1_cost_textarea . '</p></div>';
			echo '<div><p><b>Inclusions:</b>&nbsp;' . $feature_1_inclusions_textarea . '</p></div>';
			echo '<div><p><b>Non-Inclusions:</b>&nbsp;' . $feature_1_noninclusions_textarea . '</p></div>';
			echo '<div><p><b>Travel Insurance:</b>&nbsp;' . $feature_1_travelins_textarea . '</p></div>';
			?>
     </div>
    </div>
   </div>
  </div>
 </section>
<?php endif; ?>


<section id="destination-features" class="container-fluid">
    <?php if ($travel_seasons_image !== '') : ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 feature-image">
                <img class="img-fluid" src="<?php echo $travel_seasons_image; ?>" alt="The Fly Shop Travel Image">
                <div id="seasonsReadmore" class="readmore-info">
                    <div class="overlay-header">
                        <h3>Seasons Details</h3>
                        <button class="close-overlay">&times;</button>
                    </div>
                    <div class="overlay-content">
                        <p><?php echo $feature_2_seasons_readmore ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 feature-content">
                <h2><?php echo $feature_2_seasons_title ?></h2>
                <?php
                echo '<div><p>' . $feature_2_seasons_content . '</p></div>';
                echo '<button type="button" class="btn destination btn-tfs" data-target="seasonsReadmore">Read more...</button>';
                ?>
            </div>
        </div>
    </div>

		<?php else: ?>
     <div class="container">
      <div class="row seasons-row">
       <div class="col-12 feature-text seasons-readmore" id="seasonsReadmoreContainer">
        <div class="seasons-text-content">
         <div class="text-header">
          <h3>Seasons Details</h3>
          <button class="close-text">&times;</button>
         </div>
         <div class="text-content">
          <p><?php echo $feature_2_seasons_readmore ?></p>
         </div>
        </div>
       </div>
       <div class="col-12 feature-content seasons-content">
        <h2><?php echo $feature_2_seasons_title ?></h2>
				<?php
				echo '<div><p>' . $feature_2_seasons_content . '</p></div>';
				echo '<button type="button" class="btn destination btn-tfs seasons-expand-btn">Read more...</button>';
				?>
       </div>
      </div>
     </div>
		<?php endif; ?>


 <?php if ($feature_3_gettingto_image !== '') : ?>
  <div class="container">
   <div class="row flex-row-reverse">
    <div class="col-md-6 feature-image">
     <img class="img-fluid" src="<?php echo $feature_3_gettingto_image; ?>" alt="The Fly Shop Travel Image">
     <div id="gettingToReadmore" class="readmore-info">
      <div class="overlay-header">
       <h3>Getting There Details</h3>
       <button class="close-overlay">&times;</button>
      </div>
      <div class="overlay-content">
       <p><?php echo $feature_3_get_to_readmore ?></p>
      </div>
     </div>
    </div>
    <div class="col-md-6 feature-content">
     <h2><?php echo $feature_3_get_to_title ?></h2>
		 <?php
		 echo '<div><p>' . $feature_3_get_to_content . '</p></div>';
		 echo '<button type="button" class="btn destination btn-tfs" data-target="gettingToReadmore">Read more...</button>';
		 ?>
    </div>
   </div>
  </div>
 <?php else: ?>
  <div class="container">
   <div class="row getting-there-row flex-row-reverse">
    <div class="col-12 feature-text getting-there-readmore">
     <div class="getting-there-text-content">
      <div class="text-header">
       <h3>Getting There Details</h3>
       <button class="close-text">&times;</button>
      </div>
      <div class="text-content">
       <p><?php echo $feature_3_get_to_readmore ?></p>
      </div>
     </div>
    </div>
    <div class="col-12 feature-content">
     <h2><?php echo $feature_3_get_to_title ?></h2>
		 <?php
		 echo '<div><p>' . $feature_3_get_to_content . '</p></div>';
		 echo '<button type="button" class="btn btn-tfs destination getting-there-expand-btn">Read more...</button>';
		 ?>
    </div>
   </div>
  </div>
 <?php endif; ?>

 <?php if ($feature_4_lodging_image !== '') : ?>
  <div class="container">
   <div class="row">
    <div class="col-md-6 feature-image">
     <img class="img-fluid" src="<?php echo $feature_4_lodging_image; ?>" alt="The Fly Shop Travel Image">
     <div id="lodgingReadmore" class="readmore-info">
      <div class="overlay-header">
       <h3>Lodging Details</h3>
       <button class="close-overlay">&times;</button>
      </div>
      <div class="overlay-content">
       <p><?php echo $feature_4_lodging_readmore ?></p>
      </div>
     </div>
    </div>
    <div class="col-md-6 feature-content">
     <h2><?php echo $feature_4_lodging_title ?></h2>
		 <?php
		 echo '<div><p>' . $feature_4_lodging_content . '</p></div>';
		 echo '<button type="button" class="btn destination btn-tfs" data-target="lodgingReadmore">Read more...</button>';
		 ?>
    </div>
   </div>
  </div>
 <?php else: ?>
  <div class="container">
   <div class="row lodging-row">
    <div class="col-12 feature-text lodging-readmore">
     <div class="lodging-text-content">
      <div class="text-header">
       <h3>Lodging Details</h3>
       <button class="close-text">&times;</button>
      </div>
      <div class="text-content">
       <p><?php echo $feature_4_lodging_readmore ?></p>
      </div>
     </div>
    </div>
    <div class="col-12 feature-content">
     <h2><?php echo $feature_4_lodging_title ?></h2>
		 <?php
		 echo '<div><p>' . $feature_4_lodging_content . '</p></div>';
		 echo '<button type="button" class="btn destination btn-tfs lodging-expand-btn">Read more...</button>';
		 ?>
    </div>
   </div>
  </div>
 <?php endif; ?>

 <?php if ($feature_5_angling_image !== '') : ?>
  <div class="container">
   <div class="row flex-row-reverse">
    <div class="col-md-6 feature-image">
     <img class="img-fluid" src="<?php echo $feature_5_angling_image; ?>" alt="The Fly Shop Travel Image">
     <div id="anglingAtdestination" class="readmore-info">
      <div class="overlay-header">
       <h3>Angling Details</h3>
       <button class="close-overlay">&times;</button>
      </div>
      <div class="overlay-content">
       <p><?php echo $feature_5_angling_readmore ?></p>
      </div>
     </div>
    </div>
    <div class="col-md-6 feature-content">
     <h2><?php echo $feature_5_angling_title ?></h2>
		 <?php
		 echo '<div><p>' . $feature_5_angling_content . '</p></div>';
		 echo '<button type="button" class="btn destination btn-tfs" data-target="anglingAtdestination">Read more...</button>';
		 ?>
    </div>
   </div>
  </div>
 <?php else: ?>
  <div class="container">
   <div class="row angling-row flex-row-reverse">
    <div class="col-12 feature-text angling-readmore">
     <div class="angling-text-content">
      <div class="text-header">
       <h3>Angling Details</h3>
       <button class="close-text">&times;</button>
      </div>
      <div class="text-content">
       <p><?php echo $feature_5_angling_readmore ?></p>
      </div>
     </div>
    </div>
    <div class="col-12 feature-content">
     <h2><?php echo $feature_5_angling_title ?></h2>
		 <?php
		 echo '<div><p>' . $feature_5_angling_content . '</p></div>';
		 echo '<button type="button" class="btn btn-tfs destination angling-expand-btn">Read more...</button>';
		 ?>
    </div>
   </div>
  </div>
 <?php endif; ?>
</section>

<section id="set-the-hook-destination-template" class="mt-5 mb-5">
    <div class="container">
        <h2>What Makes This Destination Special and Unique?</h2>
        <div class="travel setthehook-p"><?php _e( $sth_content_1 ); ?></div>
    </div>
</section>

<section id="destination-template-carousel" class="wrapper mt-5">
    <div class="inner container">
        <header class="major">
            <h2>Additional Photos</h2>
            <div class="row">
                <div class="additional-listing">

                    <?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image1',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="0"><img class="destination-img" src="'
                            . $additional_travel_image1
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal"  alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                    <?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image2',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="1"><img class="destination-img" src="'
                            . $additional_travel_image2
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                    <?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image3',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="2"><img class="destination-img" src="'
                            . $additional_travel_image3
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                    <?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image4',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                            '<div class="thumbnail">' .

                            '<a href="#travel-carousel" data-slide-to="3"><img class="destination-img" src="'
                            . $additional_travel_image4
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                </div>
            </div>
            <!-- Second Row Travel Images -->
            <div class="row">
                <div class="additional-listing">

                    <?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image5',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="4"><img class="destination-img" src="'
                            . $additional_travel_image5
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                    <?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image6',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="5"><img class="destination-img" src="'
                            . $additional_travel_image6
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                    <?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image7',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="6"><img class="destination-img" src="'
                            . $additional_travel_image7
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                    <?php if ( get_post_meta( get_the_ID(),
                        'additional-info-image8',
                        TRUE )
                    ) {

                        echo '<div class="col-xs-6 col-md-3">',

                        '<div class="thumbnail">',

                            '<a href="#travel-carousel" data-slide-to="7"><img class="destination-img" src="'
                            . $additional_travel_image8
                            . '" data-bs-toggle="modal" data-bs-target="#travelTableModal" alt="The Fly Shop Images"></a>',

                        '</div>',

                        '</div>';

                    } ?>

                </div>
            </div>
    </div>
</section>

<!-- ====== MODAL SLIDER ====== -->
<div class="modal fade travel-modal additional-img" tabindex="-1" id="travelTableModal" aria-labelledby="travelTableModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- Carousel -->
        <div id="travel-carousel" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
        <?php if (get_post_meta(get_the_ID(), 'additional-info-image1', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image2', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image3', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image4', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image5', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image6', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image7', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image8', true)) { ?>
        <button type="button" data-bs-target="#travel-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>
        <?php } ?>
        </div>

        <!-- Carousel items -->
        <div class="carousel-inner">
        <?php if (get_post_meta(get_the_ID(), 'additional-info-image1', true)) { ?>
        <div class="carousel-item active">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image1; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image2', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image2; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image3', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image3; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image4', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image4; ?>" data-bs-toggle="modal"
            data-bs-target="#travelTableModal"
            alt="The Fly Shop World Fly Fishing Travel">
        </div>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image5', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image5; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image6', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image6; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image7', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image7; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
        <?php } ?>

        <?php if (get_post_meta(get_the_ID(), 'additional-info-image8', true)) { ?>
        <div class="carousel-item">
        <img class="d-block w-100 destination-img" src="<?php echo $additional_info_image8; ?>" data-bs-toggle="modal"
             data-bs-target="#travelTableModal"
             alt="The Fly Shop World Fly Fishing Travel">
        </div>
        <?php } ?>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#travel-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#travel-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
        </div>
        <!-- End Carousel -->

        </div>
    </div>
</div>
<!-- CALL TO ACTION ROW -->
<section id="cta" class="wrapper mt-5 mb-5">
    <div class="inner container">
        <header class="text-center">
            <h2><?php echo $cta_strong_intro; ?></h2>
            <p class="lead text-center text-justify"><?php echo $cta_content; ?></p>
        </header>
    </div>
</section>
	<!-- Table Modal -->
	<div id="travelmodal-table" class="modal fade travel-table-modal" tabindex="-1"
	     role="dialog"
	     aria-labelledby="travelTableModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="table-bg-img modal-content">
				<div class="table-header modal-header">
					<button type="button" class="btn-close close" data-bs-dismiss="modal"
					        aria-label="Close"><span
							aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"
					    id="myModalLabel"><?php echo $rr_table_title; ?></h4>
				</div>
				<div class="modal-body">
					<?php
					$tbl_textarea = get_post_meta( get_the_ID(),
						'rr-table-content-textarea',
						TRUE );
					if ( ! empty( $tbl_textarea ) ) : ?>
						<div class="modal-body-content mb-1618"><?php echo $tbl_textarea; ?></div>
					<?php endif; ?>
					<div class="table-responsive">
						<table class="table-travel table table-hover"><?php echo $rr_table_textarea; ?></table>
					</div>
					<h4>Inclusions:</h4>
					<?php echo '<p>' . $feature_1_inclusions_textarea . '</p>'; ?>
					<h4>Non-Inclusions</h4>
					<?php echo '<p>' . $feature_1_noninclusions_textarea
						. '</p>'; ?>

				</div>
			</div>
		</div>
	</div>
<?php
include get_template_directory() . '/page-templates/template-modals/destination-template-modals.php'; ?>

<?php get_footer();