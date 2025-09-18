<?php
/*
	* Template Name: Regional Waters Template v2
	* Template Post Type: guide_service
	* Developed for The Fly Shop
	* Author: Chris Parsons
	* Author URL: https://steelbridgemedia.com
*/

 include_once( 'post-meta/post-meta-guide.php' ); // Includes all the custom meta-data
 $default = '';

 get_header('regional-waters-header');

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

  <div class="container">
   <div id="primary" class="content-area row mt-5">
    <main id="main" class="site-main col-md-12" role="main">

     <?php
     // WordPress Blog Content
     while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/content', 'page-basic' );

     endwhile; // End of the loop.
     ?>

    </main>
   </div>
  </div>

	<div id="regional-v2" class="container">
 <!-- Two -->
   <section class="spotlight d-flex">
    <!-- First spotlight - Image on RIGHT (default) -->
    <div class="row d-flex regional-waters">
     <div class="col-md-6 col-lg-6 regional-waters-container">
      <div class="image position-relative">
       <!-- Feature #1 Video/Text/Image Option -->
			 <?php
			 if (!empty($video_gsfeature_one)) { ?>
        <!-- start with above get the check box -->
        <div class="ratio ratio-16x9 video-poster">
         <video id="videoPlayer"
                src="<?php echo $video_gsfeature_one; ?>"
                poster="<?php echo $feature_gs1_image; ?>"
                controls allowfullscreen>
         </video>
        </div>
			 <?php } else {
				if (!empty($feature_gs1_image)) { ?>
         <img src="<?php echo $feature_gs1_image; ?>"
              alt="The Fly Shop Guide Service Image"/>
				<?php }
			 } ?>

       <!-- Overlay containers that will be toggled with JS -->
			 <?php if (!empty($feature_gs1_inclusions_textarea)) : ?>
        <div id="inclusionsOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>Inclusions</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs1_inclusions_textarea; ?></p>
         </div>
        </div>
			 <?php endif; ?>

			 <?php if (!empty($feature_gs1_noninclusions_textarea)) : ?>
        <div id="nonInclusionsOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>Non-Inclusions</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs1_noninclusions_textarea; ?></p>
         </div>
        </div>
			 <?php endif; ?>

			 <?php if (!empty($feature_gs1_packagedeal_textarea)) : ?>
        <div id="packageDealOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>Package Deal</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs1_packagedeal_textarea; ?></p>
         </div>
        </div>
			 <?php endif; ?>
      </div>
     </div>
     <div class="col-md-6 col-lg-6">
      <div class="content">
       <div id="travel-style" class="privatewaters1">
        <h2><?php echo $feature_gs1_title; ?></h2>
        <p class="travel"><?php echo $feature_gs1_cost_textarea; ?></p>
        <div class="content-buttons">
				 <?php if (!empty($feature_gs1_inclusions_textarea)) : ?>
          <button class="info-button" data-target="inclusionsOverlay">
           <i class="lni lni-chevron-left"></i>Inclusions
          </button>
				 <?php endif; ?>

				 <?php if (!empty($feature_gs1_noninclusions_textarea)) : ?>
          <button class="info-button" data-target="nonInclusionsOverlay">
           <i class="lni lni-chevron-left"></i>Non-Inclusions
          </button>
				 <?php endif; ?>

				 <?php if (!empty($feature_gs1_packagedeal_textarea)) : ?>
          <button class="info-button" data-target="packageDealOverlay">
           <i class="lni lni-chevron-left"></i>Package Deal
          </button>
				 <?php endif; ?>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>

		<!-- Second spotlight - Image on LEFT (flipped order) -->
   <section class="spotlight d-flex flex-row-reverse">
    <div class="row flex-row-reverse regional-waters">
     <div class="col-md-6 col-lg-6 regional-waters-container">
      <div class="image position-relative">
       <!-- Seasons Video/Text/Image Option -->
			 <?php
			 if (!empty($video_gsfeature_two)) : ?>
        <div class="ratio ratio-16x9 video-poster">
         <video id="videoPlayer"
                src="<?php echo $video_gsfeature_two; ?>"
                poster="<?php echo $feature_gs2_image; ?>"
                controls allowfullscreen>
         </video>
        </div>
			 <?php else: ?>
        <img src="<?php echo $feature_gs2_image; ?>"
             alt="The Fly Shop Guide Service Image"/>
			 <?php endif; ?>

       <!-- Overlay containers for seasons information -->
			 <?php if (!empty($feature_gs2_seasons_readmore)) : ?>
        <div id="readMoreOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>More Details</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs2_seasons_readmore; ?></p>
         </div>
        </div>
			 <?php endif; ?>

			 <?php if (!empty($feature_gs2_spring_textarea)) : ?>
        <div id="springOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>Spring</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs2_spring_textarea; ?></p>
         </div>
        </div>
			 <?php endif; ?>

			 <?php if (!empty($feature_gs2_summer_textarea)) : ?>
        <div id="summerOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>Summer</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs2_summer_textarea; ?></p>
         </div>
        </div>
			 <?php endif; ?>

			 <?php if (!empty($feature_gs2_autumn_textarea)) : ?>
        <div id="fallOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>Fall</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs2_autumn_textarea; ?></p>
         </div>
        </div>
			 <?php endif; ?>

			 <?php if (!empty($feature_gs2_winter_textarea)) : ?>
        <div id="winterOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>Winter</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs2_winter_textarea; ?></p>
         </div>
        </div>
			 <?php endif; ?>
      </div>
     </div>
     <div class="col-md-6 col-lg-6">
      <div class="content">
       <div id="travel-style" class="privatewaters2">
        <!-- Feature #2 Seasons -->
        <h2><?php echo $feature_gs2_title; ?></h2>
        <p class="travel"><?php echo $feature_gs2_seasons_textarea; ?></p>

        <!-- Replace accordions with buttons -->
        <div class="content-buttons">
				 <?php if (!empty($feature_gs2_seasons_readmore)) : ?>
          <button class="info-button" data-target="readMoreOverlay">
           Read More<i class="lni lni-chevron-right"></i>
					 <?php if (!empty($feature_gs2_seasons_readmore_info)) {
						echo '<span class="readmore-info">'
								 . $feature_gs2_seasons_readmore_info
								 . '</span>';
					 } ?>
          </button>
				 <?php endif; ?>

				 <?php if (!empty($feature_gs2_spring_textarea)) : ?>
          <button class="info-button" data-target="springOverlay">
           Spring<i class="lni lni-chevron-right"></i>
          </button>
				 <?php endif; ?>

				 <?php if (!empty($feature_gs2_summer_textarea)) : ?>
          <button class="info-button" data-target="summerOverlay">
           Summer<i class="lni lni-chevron-right"></i>
          </button>
				 <?php endif; ?>

				 <?php if (!empty($feature_gs2_autumn_textarea)) : ?>
          <button class="info-button" data-target="fallOverlay">
           Fall<i class="lni lni-chevron-right"></i>
          </button>
				 <?php endif; ?>

				 <?php if (!empty($feature_gs2_winter_textarea)) : ?>
          <button class="info-button" data-target="winterOverlay">
           Winter<i class="lni lni-chevron-right"></i>
          </button>
				 <?php endif; ?>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>

		<!-- Third spotlight - Image on RIGHT (default) -->
   <section class="spotlight d-flex">
    <div class="row regional-waters">
     <div class="col-md-6 col-lg-6 regional-waters-container">
      <div class="image position-relative">
       <!-- Feature #3 Video/Text/Image Option -->
			 <?php
			 if (!empty($video_gsfeature_three)) :?>
        <div class="ratio ratio-16x9 video-poster">
         <video id="videoPlayer"
                src="<?php echo $video_gsfeature_three; ?>"
                poster="<?php echo $feature_gs3_fishing_image; ?>"
                controls allowfullscreen>
         </video>
        </div>
			 <?php else: ?>
        <img src="<?php echo $feature_gs3_fishing_image; ?>"
             alt="The Fly Shop Guide Service Image"/>
			 <?php endif; ?>

       <!-- Overlay container for read more content -->
			 <?php if (!empty($feature_gs3_fishing_readmore)) : ?>
        <div id="fishingReadMoreOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>More Details</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs3_fishing_readmore; ?></p>
         </div>
        </div>
			 <?php endif; ?>
      </div>
     </div>
     <div class="col-md-6 col-lg-6">
      <!-- Feature #3 Seasons. Includes two options that are selectable within the Customizer. -->
      <div class="content">
       <div id="travel-style" class="privatewaters3">
        <h2><?php echo $feature_gs3_fishing_title; ?></h2>
        <p class="travel"><?php echo $feature_gs3_fishing_content; ?></p>

        <!-- Replace accordion with button -->
				<?php if (!empty($feature_gs3_fishing_readmore)) : ?>
         <div class="content-buttons">
          <button class="info-button" data-target="fishingReadMoreOverlay">
           <i class="lni lni-chevron-left"></i>Read More
					 <?php if (!empty($feature_gs3_fishing_readmore_info)) {
						echo '<span class="readmore-info">'
								 . $feature_gs3_fishing_readmore_info
								 . '</span>';
					 } ?>
          </button>
         </div>
				<?php endif; ?>
       </div>
      </div>
     </div>
    </div>
   </section>

		<!-- Fourth spotlight - Image on LEFT (flipped order) -->
   <section class="spotlight">  <!-- Added flex-row-reverse class -->
    <div class="row flex-row-reverse regional-waters">
     <div class="col-md-6 col-lg-6 regional-waters-container">
      <div class="image position-relative">
       <!-- Guide Service Video/Text/Image Option -->
			 <?php
			 if (!empty($video_gsfeature_four)) : ?>
        <div class="ratio ratio-16x9 video-poster">
         <video id="videoPlayer"
                src="<?php echo $video_gsfeature_four; ?>"
                poster="<?php echo $feature_4_gslodging_image; ?>"
                controls allowfullscreen>
         </video>
        </div>
			 <?php else: ?>
        <img src="<?php echo $feature_4_gslodging_image; ?>"
             alt="The Fly Shop Guide Service Waters Image"/>
			 <?php endif; ?>

       <!-- Overlay container for read more content -->
			 <?php if (!empty($feature_4_gslodging_readmore)) : ?>
        <div id="lodgingReadMoreOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>More Details</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_4_gslodging_readmore; ?></p>
         </div>
        </div>
			 <?php endif; ?>
      </div>
     </div>
     <div class="col-md-6 col-lg-6">
      <div class="content">
       <div id="travel-style" class="privatewaters4">
        <h2><?php echo $feature_4_gslodging_title; ?></h2>
        <p class="travel"><?php echo $feature_4_gslodging_content; ?></p>

        <!-- Replace accordion with button -->
				<?php if (!empty($feature_4_gslodging_readmore)) : ?>
         <div class="content-buttons">
          <button class="info-button" data-target="lodgingReadMoreOverlay">
           Read More<i class="lni lni-chevron-right"></i>
          </button>
         </div>
				<?php endif; ?>
       </div>
      </div>
     </div>
    </div>
   </section>

		<!-- Fifth spotlight - Image on RIGHT (default) -->
   <section class="spotlight d-flex">
    <div class="row regional-waters">
     <div class="col-md-6 col-lg-6 regional-waters-container">
      <div class="image position-relative">
       <!-- Video/Text/Image Option -->
			 <?php
			 if (!empty($video_gsfeature_five)) : ?>
        <div class="ratio ratio-16x9 video-poster">
         <video id="videoPlayer"
                src="<?php echo $video_gsfeature_five; ?>"
                poster="<?php echo $feature_gs5_gettingto_image; ?>"
                controls allowfullscreen>
         </video>
        </div>
			 <?php else: ?>
        <img src="<?php echo $feature_gs5_gettingto_image; ?>"
             alt="The Fly Shop Travel Image"/>
			 <?php endif; ?>

       <!-- Overlay container for read more content -->
			 <?php if (!empty($feature_gs5_get_to_readmore)) : ?>
        <div id="gettingToReadMoreOverlay" class="content-overlay">
         <div class="overlay-header">
          <h3>More Details</h3>
          <button class="close-overlay">&times;</button>
         </div>
         <div class="overlay-content">
          <p class="travel"><?php echo $feature_gs5_get_to_readmore; ?></p>
         </div>
        </div>
			 <?php endif; ?>
      </div>
     </div>
     <div class="col-md-6 col-lg-6">
      <div class="content">
       <div id="travel-style" class="privatewaters5">
        <h2><?php echo $feature_gs5_get_to_title; ?></h2>
        <p class="travel"><?php echo $feature_gs5_get_to_content; ?></p>

        <!-- Replace accordion with button -->
				<?php if (!empty($feature_gs5_get_to_readmore)) : ?>
         <div class="content-buttons">
          <button class="info-button" data-target="gettingToReadMoreOverlay">
           <i class="lni lni-chevron-left"></i>Read More
					 <?php if (!empty($feature_gs5_readmore_info)) {
						echo '<span class="readmore-info">'
								 . $feature_gs5_readmore_info
								 . '</span>';
					 } ?>
          </button>
         </div>
				<?php endif; ?>
       </div>
      </div>
     </div>
    </div>
   </section>

	</div>

<?php if ( ! empty( $guideservice_additional_info_image1 ) ) { ?>
 <section id="three" class="wrapper style7 special">
	<div class="inner container">

		<h2>Additional Information</h2>
		<div class="row g-4 additional-listing regional-waters">

			<?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', TRUE)) {
			 echo '<div class="col-6 col-md-3 regional-waters-container">
			 <div class="thumbnail">
				 <img src="' . $guideservice_additional_info_image1 . '" 
							class="img-fluid gallery-trigger" 
							data-bs-toggle="modal" 
							data-bs-target=".guide-modal" 
							data-bs-slide-to="0" 
							alt="The Fly Shop Images">
			 </div>
		 	</div>';
			} ?>

			<?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', TRUE)) {
			 echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image2 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="1" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
			} ?>

			<?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', TRUE)) {
			 echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image3 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="2" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
			} ?>

			<?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', TRUE)) {
			 echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image4 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="3" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
			} ?>

		<!-- Second Row Travel Images -->

			<?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', TRUE)) {
			 echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image5 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="4" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
			} ?>

			<?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', TRUE)) {
			 echo '<div class="col-6 col-md-3 regional-waters-container">
				 <div class="thumbnail">
					 <img src="' . $guideservice_additional_info_image6 . '" 
								class="img-fluid gallery-trigger" 
								data-bs-toggle="modal" 
								data-bs-target=".guide-modal" 
								data-bs-slide-to="5" 
								alt="The Fly Shop Images">
				 </div>
			 </div>';
			} ?>

			<?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', TRUE)) {
			 echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image7 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="6" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
			} ?>

			<?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', TRUE)) {
			 echo '<div class="col-6 col-md-3 regional-waters-container">
				<div class="thumbnail">
					<img src="' . $guideservice_additional_info_image8 . '" 
							 class="img-fluid gallery-trigger" 
							 data-bs-toggle="modal" 
							 data-bs-target=".guide-modal" 
							 data-bs-slide-to="7" 
							 alt="The Fly Shop Images">
				</div>
			</div>';
			} ?>

		 </div>
	</div>
 </section>
<?php } ?>

 <!-- CALL TO ACTION ROW -->
 <section id="cta" class="mt-5 mb-5">
	<div class="container">
	 <div class="text-center">
		<h2><?php echo $cta_guideservice_strong_intro; ?></h2>
		<p><?php echo $cta_guideservice_content; ?></p>
	 </div>
	</div>
 </section>

 <!-- ====== MODAL SLIDER  ====== -->
 <div class="modal fade guide-modal" tabindex="-1" aria-labelledby="guideModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
	 <div class="modal-content">
		<div class="modal-body p-0">
		 <!-- Carousel -->
		 <div id="guide-carousel" class="carousel slide">
			<!-- Carousel indicators -->
			<div class="carousel-indicators">
			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', TRUE)) {
				echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', TRUE)) {
				echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', TRUE)) {
				echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', TRUE)) {
				echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', TRUE)) {
				echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', TRUE)) {
				echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', TRUE)) {
				echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', TRUE)) {
				echo '<button type="button" data-bs-target="#guide-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>';
			 } ?>
			</div>

			<!-- Carousel items -->
			<div class="carousel-inner">
			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image1', TRUE)) {
				echo '<div class="carousel-item active">
                <img src="' . $guideservice_additional_info_image1 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image2', TRUE)) {
				echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image2 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image3', TRUE)) {
				echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image3 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image4', TRUE)) {
				echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image4 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image5', TRUE)) {
				echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image5 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image6', TRUE)) {
				echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image6 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image7', TRUE)) {
				echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image7 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
			 } ?>

			 <?php if (get_post_meta(get_the_ID(), 'guideservice-additional-info-image8', TRUE)) {
				echo '<div class="carousel-item">
                <img src="' . $guideservice_additional_info_image8 . '" class="d-block w-100" alt="The Fly Shop Guided Fly Fishing">
              </div>';
			 } ?>
			</div>

			<!-- Carousel controls -->
			<button class="carousel-control-prev" type="button" data-bs-target="#guide-carousel" data-bs-slide="prev">
			 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			 <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#guide-carousel" data-bs-slide="next">
			 <span class="carousel-control-next-icon" aria-hidden="true"></span>
			 <span class="visually-hidden">Next</span>
			</button>
		 </div>
		</div>
	 </div>
	</div>
 </div>

 <section id="front-page-cta">
	<div class="container-fluid container-row background-image-cta d-flex align-items-center mt-5" data-aos="fade-in" data-aos-duration="1500" data-aos-delay="500" data-aos-once="true">
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

<?php get_footer();
