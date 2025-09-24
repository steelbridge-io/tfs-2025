<?php
/**
 * Template Name: Schools Template

 * Template Post Type: schools_cpt
 * Developed for The Fly Shop
 * @package tfsSchools
 * @since		1.2.8
 * Author: Chris Parsons
 * Author URL: https://steelbridgemedia.com
 */
include_once('post-meta/post-meta-schools.php');

get_header(); ?>
 <!-- Banner -->
 <style class="schoolshack"></style>
 <section id="banner">

  <div class="inner">

   <img src="<?php echo $schools_waters_logo;?>" class="img-fluid mx-auto d-block" alt="The Fly Shop Schools">

   <h2 id="schools-title"><?php the_title();?></h2>

	 <?php if ( get_post_meta($post->ID, 'schools-description', true) )
		echo '<p class="template-description">' . $schools_waters_description . '</p>' ?>

   <h3 id="schools-tel">800 &bull; 669 &bull; 3474</h3>

  </div>

  <a href="#main" class="more scrolly">Read more here!</a>

 </section>

<?php if ( !empty( $guidesvc_temp_video ) && !empty($guidesvc_temp_video_poster) ) : ?>
 <div id="banner" class="container-fluid travel-template-hero p-0">
  <div class="hero-image position-relative guidesvc-temp-hero-overlay video-control">
   <div class="overlay"></div>
   <video id="sections-private-background-video" class="private-temp-video"
          autoplay
          playsinline loop
          muted
          poster="<?php echo $guidesvc_temp_video_poster; ?>">
    <source src="<?php echo $guidesvc_temp_video; ?>" type="video/mp4">
   </video>
   <!-- Overlay Content -->
   <div class="hero-overlay position-absolute top-50 start-50 translate-middle text-center">
    <!-- Page Title -->
    <h1 class="hero-title display-4 text-white"><?php echo get_the_title(); ?></h1>
   </div>
  </div>
 </div>
<?php elseif ( empty( $guidesvc_temp_video )) : ?>
 <div id="banner" class="container-fluid travel-template-hero p-0">
  <div class="hero-image position-relative guidesvc-temp-hero-overlay">
   <div class="overlay"></div>
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

 <!-- One -->
 <section id="one" class="wrapper style5 special">
  <span id="main"></span>
  <div class="inner">

	 <?php
	 // Page content from editor
	 while ( have_posts() ) : the_post();?>
		<?php the_content();?>
	 <?php
	 endwhile;
	 wp_reset_query();?>

  </div>
 </section>

 <!-- Two -->
 <section id="schools-two" class="wrapper alt style2">
  <div class="container">
   <div class="row align-items-center">
    <div class="col-md-6">
     <div class="image">
      <!-- Video/Text/Image Option -->
			<?php
			if(get_post_meta(get_the_ID(), 'feature-sch1-checkbox', true) == 'yes') :?>
       <div class="ratio ratio-16x9">
        <iframe class="w-100" src="<?php echo $video_schfeature_one; ?>" allowfullscreen></iframe>
       </div>
			<?php else: ?>
       <img src="<?php echo $feature_sch1_image;?>" alt="The Fly Shop Schools Image" class="img-fluid" />
			<?php endif; ?>
     </div>
    </div>

    <div class="col-md-6">
     <div class="content">
      <div id="travel-style" class="schools1">

       <h2><?php echo $feature_sch1_title;?></h2>

       <div class="travel"><?php echo $feature_sch1_cost_textarea;?></div>

       <div class="accordion" id="accordion1">

        <div class="accordion-item schools1">
         <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
           Inclusions&nbsp;<span class="arrow-down"></span>
          </button>
         </h2>

         <div id="collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordion1">
          <div class="accordion-body">
           <div class="travel"><?php echo $feature_sch1_inclusions_textarea;?></div>
          </div>
         </div>
        </div>

        <div class="accordion-item schools1">
         <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree1">
           Non-Inclusions&nbsp;<span class="arrow-down"></span>
          </button>
         </h2>
         <div id="collapseThree1" class="accordion-collapse collapse" data-bs-parent="#accordion1">
          <div class="accordion-body">
           <div class="travel"><?php echo $feature_sch1_noninclusions_textarea;?></div>
          </div>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- === SCHOOLS DATES === -->
  <div class="container">
   <div class="row align-items-center flex-row-reverse">
    <div class="col-md-6">
     <div class="image">
      <!-- Schools Dates Video/Text/Image Option -->
			<?php
			if(get_post_meta(get_the_ID(), 'feature-sch2-checkbox', true) == 'yes') :?>
       <div class="ratio ratio-16x9">
        <iframe class="w-100" src="<?php echo $video_schfeature_two; ?>" allowfullscreen></iframe>
       </div>
			<?php else: ?>
       <img src="<?php echo $feature_sch2_image;?>" alt="The Fly Shop Schools Image" class="img-fluid" />
			<?php endif; ?>
     </div>
    </div>

    <div class="col-md-6">
     <div class="content">
      <div id="travel-style" class="schools2">

       <!-- Dates title -->
       <h2><?php echo $feature_sch2_title;?></h2>

       <div class="travel"><?php echo $feature_sch2_dates_textarea;?></div>

       <div class="accordion" id="accordionDates">
        <div class="accordion-item schools2">

				 <?php
				 // Read more option
				 if(get_post_meta(get_the_ID(), 'sch-dates-readmore-checkbox', true) == 'yes') :?>

          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneDates" aria-expanded="false" aria-controls="collapseOneDates">
            Read More&nbsp;<span class="arrow-down"></span>
           </button>
          </h2>

          <div id="collapseOneDates" class="accordion-collapse collapse" data-bs-parent="#accordionDates">
           <div class="accordion-body">
            <div class="travel"><?php echo $sch_dates_readmore_textarea;?></div>
           </div>
          </div>

				 <?php endif; ?>

        </div>
       </div>

      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- === SCHOOLS LODGING === -->
  <div class="container">
   <div class="row align-items-center">
    <div class="col-md-6">
     <div class="image">
      <!-- Schools Video/Text/Image Option -->
			<?php

			if(get_post_meta(get_the_ID(), 'feature-sch4-checkbox', true) == 'yes') :?>
       <div class="ratio ratio-16x9">
        <iframe class="w-100" src="<?php echo $video_schfeature_four; ?>" allowfullscreen></iframe>
       </div>
			<?php else: ?>
       <img src="<?php echo $feature_4_schlodging_image;?>" alt="The Fly Shop Schools Image" class="img-fluid" />
			<?php endif; ?>
     </div>
    </div>

    <div class="col-md-6">
     <div class="content">
      <div id="travel-style" class="schools3">

       <h2><?php echo $feature_4_schlodging_title;?></h2>

       <div class="travel"><?php echo $feature_4_schlodging_content;?></div>

       <div class="accordion" id="accordion3">
        <div class="accordion-item schools3">

				 <?php
				 // Readmore option
				 if(get_post_meta(get_the_ID(), 'sch-lodging-readmore-checkbox', true) == 'yes') :?>

          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
            Read More&nbsp;<span class="arrow-down"></span>
           </button>
          </h2>

          <div id="collapseOne3" class="accordion-collapse collapse" data-bs-parent="#accordion3">
           <div class="accordion-body">
            <div class="travel"><?php echo $feature_4_schlodging_readmore;?></div>
           </div>
          </div>

				 <?php endif; ?>

        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- === GETTING THERE === -->
  <div class="container">
   <div class="row align-items-center flex-row-reverse">
    <div class="col-md-6">
     <div class="image">
      <!-- Itinerary/Text/Image Option -->
			<?php
			if(get_post_meta(get_the_ID(), 'feature-sch5-checkbox', true) == 'yes') :?>
       <div class="ratio ratio-16x9">
        <!-- Itinerary map -->
        <iframe class="w-100" src="<?php echo $video_schfeature_five; ?>" allowfullscreen></iframe>
       </div>
			<?php else: ?>
       <!-- Itinerary image -->
       <img src="<?php echo $feature_sch5_gettingto_image;?>" alt="The Fly Shop Travel Image" class="img-fluid" />
			<?php endif; ?>
     </div>
    </div>

    <div class="col-md-6">
     <div class="content">
      <div id="travel-style" class="schools4">
       <!-- Itineray title -->
       <h2><?php echo $feature_sch5_get_to_title;?></h2>
       <!-- Itineray content -->
       <div class="travel"><?php echo $feature_sch5_get_to_content;?></div>

       <div class="accordion" id="accordion4">
        <div class="accordion-item schools4">

				 <?php
				 // Readmore option
				 if(get_post_meta(get_the_ID(), 'sch-gettingthere-readmore-checkbox', true) == 'yes') :?>

          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne4" aria-expanded="false" aria-controls="collapseOne4">
            Read More&nbsp;<span class="arrow-down"></span>
           </button>
          </h2>
          <div id="collapseOne4" class="accordion-collapse collapse" data-bs-parent="#accordion4">
           <div class="accordion-body">
            <div class="travel"><?php echo $feature_sch5_get_to_readmore;?></div>
           </div>
          </div>

				 <?php endif; ?>

        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

  <!-- === ITINERARY === -->

  <div class="container">
   <div class="row align-items-center">
    <div class="col-md-6">
     <div class="image">
      <!-- Itinerary Video/Text/Image Option -->
			<?php
			if(get_post_meta(get_the_ID(), 'feature-sch3-checkbox', true) == 'yes') :?>
       <div class="ratio ratio-16x9">
        <iframe class="w-100" src="<?php echo $video_schfeature_three; ?>" allowfullscreen></iframe>
       </div>
			<?php else: ?>
       <img src="<?php echo $feature_sch3_itinerary_image;?>" alt="The Fly Shop Travel Image" class="img-fluid" />
			<?php endif; ?>
     </div>
    </div>

    <!-- === ITINERARY === -->
    <div class="col-md-6">
     <div class="content">
      <div id="travel-style" class="schools5">
       <h2><?php echo $feature_sch3_fishing_title;?></h2>
       <div class="travel"><?php echo $feature_sch3_fishing_content;?></div>

       <div class="accordion" id="accordion5">
        <div class="accordion-item schools5">

				 <?php
				 // Readmore option
				 if(get_post_meta(get_the_ID(), 'sch-itinerary-readmore-checkbox', true) == 'yes') :?>

          <h2 class="accordion-header">
           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne5" aria-expanded="false" aria-controls="collapseOne5">
            Read More&nbsp;<span class="arrow-down"></span>
           </button>
          </h2>
          <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordion5">
           <div class="accordion-body">
            <div class="travel"><?php echo $feature_sch3_fishing_readmore;?></div>
           </div>
          </div>

				 <?php endif; ?>

        </div>
       </div>

      </div>
     </div>
    </div>
   </div>
  </div>

 </section>

 <section id="three" class="wrapper style7 special">
  <div class="inner">

   <header class="major">
    <h2>Additional Information</h2>
    <hr class="fancy1">
    <div class="row">
     <div class="additional-listing">

			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {

			 echo	'<div class="col-6 col-md-3">',

			 '<div class="card">',

				'<a href="#schools-carousel" data-bs-slide-to="0"><img src="'. $schools_additional_info_image1 .'" class="card-img-top img-fluid" data-bs-toggle="modal" data-bs-target=".schools-modal" alt="The Fly Shop Images"></a>',

			 '</div>',

			 '</div>';

			} ?>

			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {

			 echo	'<div class="col-6 col-md-3">',

			 '<div class="card">',

				'<a href="#schools-carousel" data-bs-slide-to="1"><img src=" ' . $schools_additional_info_image2 . '" class="card-img-top img-fluid" data-bs-toggle="modal" data-bs-target=".schools-modal" alt="The Fly Shop Images"></a>',

			 '</div>',

			 '</div>';

			} ?>

			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {

			 echo	'<div class="col-6 col-md-3">',

			 '<div class="card">',

				'<a href="#schools-carousel" data-bs-slide-to="2"><img src=" ' . $schools_additional_info_image3 . '" class="card-img-top img-fluid" data-bs-toggle="modal" data-bs-target=".schools-modal" alt="The Fly Shop Images"></a>',

			 '</div>',

			 '</div>';

			} ?>

			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {

			 echo	'<div class="col-6 col-md-3">',

			 '<div class="card">',

				'<a href="#schools-carousel" data-bs-slide-to="3"><img src=" ' . $schools_additional_info_image4 . ' " class="card-img-top img-fluid" data-bs-toggle="modal" data-bs-target=".schools-modal" alt="The Fly Shop Images"></a>',

			 '</div>',

			 '</div>';

			} ?>

     </div>
    </div>
    <!-- Second Row Travel Images -->
    <div class="row">
     <div class="additional-listing">

			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {

			 echo'<div class="col-6 col-md-3">',

			 '<div class="card">',

				'<a href="#schools-carousel" data-bs-slide-to="4"><img src=" ' . $schools_additional_info_image5 . ' " class="card-img-top img-fluid" data-bs-toggle="modal" data-bs-target=".schools-modal" alt="The Fly Shop Images"></a>',

			 '</div>',

			 '</div>';

			} ?>

			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {

			 echo	'<div class="col-6 col-md-3">',

			 '<div class="card">',

				'<a href="#schools-carousel" data-bs-slide-to="5"><img src=" ' . $schools_additional_info_image6 . ' " class="card-img-top img-fluid" data-bs-toggle="modal" data-bs-target=".schools-modal" alt="The Fly Shop Images"></a>',

			 '</div>',

			 '</div>';

			} ?>

			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {

			 echo	'<div class="col-6 col-md-3">',

			 '<div class="card">',

				'<a href="#schools-carousel" data-bs-slide-to="6"><img src=" ' . $schools_additional_info_image7 . ' " class="card-img-top img-fluid" data-bs-toggle="modal" data-bs-target=".schools-modal" alt="The Fly Shop Images"></a>',

			 '</div>',

			 '</div>';

			} ?>

			<?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {

			 echo	'<div class="col-6 col-md-3">',

			 '<div class="card">',

				'<a href="#schools-carousel" data-bs-slide-to="7"><img src=" ' . $schools_additional_info_image8 . ' " class="card-img-top img-fluid" data-bs-toggle="modal" data-bs-target=".schools-modal" alt="The Fly Shop Images"></a>',

			 '</div>',

			 '</div>';

			} ?>

     </div>
    </div>
  </div>
  </header>
 </section>

 <!-- ====== MODAL SLIDER ====== -->

 <div class="additional-img modal fade schools-modal" tabindex="-1" role="dialog" aria-labelledby="schoolsModalLabel">
  <div class="additional-img modal-dialog" role="document">

   <div id="schools-carousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators -->
    <div class="carousel-indicators">

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {

			echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {

			echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {

			echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {

			echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {

			echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {

			echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="5" aria-label="Slide 6"></button>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {

			echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="6" aria-label="Slide 7"></button>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {

			echo '<button type="button" data-bs-target="#schools-carousel" data-bs-slide-to="7" aria-label="Slide 8"></button>';

		 } ?>

    </div>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image1', true)) {

			echo	'<div class="carousel-item active">',

			 '<img src="' . $schools_additional_info_image1 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';
		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image2', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $schools_additional_info_image2 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image3', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $schools_additional_info_image3 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image4', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $schools_additional_info_image4 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image5', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $schools_additional_info_image5 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image6', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $schools_additional_info_image6 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image7', true)) {

			echo  '<div class="carousel-item">',

			 '<img src="' . $schools_additional_info_image7 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

		 <?php if(get_post_meta(get_the_ID(), 'schools-additional-info-image8', true)) {

			echo	'<div class="carousel-item">',

			 '<img src="' . $schools_additional_info_image8 . '" class="d-block w-100" alt="The Fly Shop World Fly Fishing Travel">',

			'</div>';

		 } ?>

    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#schools-carousel" data-bs-slide="prev">
     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#schools-carousel" data-bs-slide="next">
     <span class="carousel-control-next-icon" aria-hidden="true"></span>
     <span class="visually-hidden">Next</span>
    </button>
   </div>
  </div>
 </div>

 <!-- CALL TO ACTION ROW -->
 <section id="cta" class="wrapper style4">
  <div class="inner">

   <header class="text-center">
    <h2><?php echo $cta_schools_strong_intro;?></h2>
    <p><?php echo $cta_schools_content;?></p>
   </header>

  </div>
 </section>

<?php
get_footer();
get_footer();