<?php
  /**
   * Template Name: Fly Fishing Schools Template
   * Template Post Type: schools_cpt
   * Developed for The Fly Shop
   * @package The_Fly_Shop
   * Author: Chris Parsons
   * Author URL: https://steelbridge.io
   */

  $the_post_img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full');
  $the_post_default = get_bloginfo('template_directory') . '/images/default/default-page-header.png';
  $basic_logo_upload = get_theme_mod ('basic_page_logo');
  $hero_video_url = get_post_meta(get_the_ID(), 'hero-video-url', true );

  include_once('post-meta/post-meta-signature.php');
  $default = '';
  get_header();
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
 <div class="container-fluid travel-template-hero p-0">
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

<?php
        // Carousel Images
if(get_post_meta(get_the_ID(), 'signature-csel-checkbox', true) == 'yes') :?>

<div class="container-fluid">

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="carousel carousel-showallmove1 slide" id="itemslider">
        <div class="carousel-inner">

          <div class="item active">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="<?php echo $csel_1_link; ?>"><img src="<?php echo esc_url($csel_1_img); ?>" class="img-responsive center-block"></a>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="<?php echo $csel_2_link; ?>"><img src="<?php echo esc_url($csel_2_img); ?>" class="img-responsive center-block"></a>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="<?php echo $csel_3_link; ?>"><img src="<?php echo esc_url($csel_3_img); ?>" class="img-responsive center-block"></a>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="<?php echo $csel_4_link; ?>"><img src="<?php echo esc_url($csel_4_img); ?>" class="img-responsive center-block"></a>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="<?php echo $csel_5_link; ?>"><img src="<?php echo esc_url($csel_5_img); ?>" class="img-responsive center-block"></a>
            </div>
          </div>

          <div class="item">
            <div class="col-xs-12 col-sm-6 col-md-2">
              <a href="<?php echo $csel_6_link; ?>"><img src="<?php echo esc_url($csel_6_img); ?>" class="img-responsive center-block"></a>
            </div>
          </div>

        </div>

        <div id="slider-control">
          <a class="left carousel-control" href="#itemslider" data-slide="prev"><i class="fa fa-chevron-left fa-4x" aria-hidden="true"></i></a>
          <a class="right carousel-control" href="#itemslider" data-slide="next"><i class="fa fa-chevron-right fa-4x" aria-hidden="true"></i></a>
        </div>

      </div>
    </div>
  </div>
</div><!-- Item slider end-->
<?php endif;

if ($signature_image_1 !== '' ) { ?>

      <!-- ==== GRID SECTION ==== -->
<div id="fly-fishing-school-image-container" class="mt-5 container signature_bg_color">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_1_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_1_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_image_1_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_1; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption">
            <h4 class="widget-title"><?php echo $signature_image_1_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_image_1_caption; ?></p>
          </div>
        </section>
      </div>
    </div>

    <?php if($signature_image_2 !== '' ) { ?>

    <div class="col-md-4">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_2_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_2_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_image_2_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_2; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption">
            <h4 class="widget-title"><?php echo $signature_image_2_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_image_2_caption; ?></p>
          </div>
        </section>
      </div>
    </div>

      <?php }
    if($signature_image_3 !== '' ) { ?>

    <div class="col-md-4">
      <div class="thumbnail signature-text-color">
        <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_3_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_3_title; ?></a></h3>
        <a class="thumbnail-h3" href="<?php echo $signature_image_3_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_3; ?>"></a>
        <section id="" class="widget-section">
          <div class="caption">
            <h4 class="widget-title"><?php echo $signature_image_3_sub_title; ?></h4>
            <p class="text-justify"><?php echo $signature_image_3_caption; ?></p>
          </div>
        </section>
      </div>
    </div>
    <?php } ?>
  </div>

  <?php
    // Optional images 4, 5, 6
    if($signature_image_4 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_4_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_4_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_4_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_4; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_4_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_4_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if($signature_image_5 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_5_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_5_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_5_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_5; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_5_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_5_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }

      if($signature_image_6 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_6_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_6_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_6_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_6; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_6_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_6_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <?php } ?>
      </div>

  <?php }
    // Optional images 7, 8, 9
    if($signature_image_7 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_7_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_7_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_7_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_7; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_7_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_7_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_8 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_8_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_8_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_8_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_8; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_8_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_8_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }
        if( $signature_image_9 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_9_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_9_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_9_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_9; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_9_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_9_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <?php } ?>
      </div>

  <?php }
    // Optional images 10, 11, 12
    if( $signature_image_10 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_10_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_10_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_10_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_10; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_10_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_10_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_11 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_11_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_11_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_11_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_11; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_11_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_11_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

          <?php }
    if( $signature_image_12 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_12_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_12_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_12_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_12; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_12_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_12_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
        <?php } ?>
      </div>

      <?php }
      // Optional images 13, 14, 15
    if( $signature_image_13 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_13_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_13_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_13_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_13; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_13_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_13_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_14 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_14_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_14_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_14_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_14; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_14_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_14_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

          <?php }
    if( $signature_image_15 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_15_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_15_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_15_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_15; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_15_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_15_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

  <?php }
    // Optional images 16, 17, 18
    if( $signature_image_16 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_16_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_16_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_16_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_16; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_16_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_16_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_17 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_17_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_17_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_17_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_17; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_17_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_17_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

          <?php }
    if( $signature_image_18 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_18_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_18_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_18_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_18; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_18_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_18_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

    <?php }
    // Optional images 19, 20, 21
    if( $signature_image_19 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_19_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_19_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_19_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_19; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_19_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_19_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_20 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_20_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_20_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_20_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_20; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_20_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_20_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }
      if( $signature_image_21 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_21_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_21_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_21_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_21; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_21_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_21_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

  <?php }
    // Optional images 22, 23, 24
if( $signature_image_22 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_22_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_22_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_22_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_22; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_22_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_22_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_23 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_23_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_23_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_23_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_23; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_23_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_23_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }
        if( $signature_image_24 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_24_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_24_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_24_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_24; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_24_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_24_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

  <?php }
    // Optional images 25, 26, 27
    if( $signature_image_25 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_25_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_25_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_25_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_25; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_25_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_25_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_26 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_26_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_26_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_26_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_26; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_26_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_26_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }
        if( $signature_image_27 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_27_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_27_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_27_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_27; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_27_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_27_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

      <?php }
      // Optional images 28, 29, 30
    if( $signature_image_28 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_28_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_28_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_28_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_28; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_28_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_28_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_29 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_29_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_29_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_29_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_29; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_29_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_29_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }
        if( $signature_image_30 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_30_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_30_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_30_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_30; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_30_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_30_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

      <?php }
      // Optional images 31, 32, 33
    if( $signature_image_31 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_31_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_31_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_31_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_31; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_31_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_31_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_32 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_32_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_32_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_32_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_32; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_32_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_32_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } if( $signature_image_33 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_33_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_33_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_33_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_33; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_33_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_33_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

      <?php }
      // Optional images 34, 35, 36
    if( $signature_image_34 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_34_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_34_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_34_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_34; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_34_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_34_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_35 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_35_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_35_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_35_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_35; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_35_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_35_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }
  if( $signature_image_36 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_36_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_36_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_36_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_36; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_36_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_36_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

      <?php }
      // Optional images 37, 38, 39
    if( $signature_image_37 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_37_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_37_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_37_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_37; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_37_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_37_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_38 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_38_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_38_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_38_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_38; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_38_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_38_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }
        if( $signature_image_39 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_39_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_39_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_39_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_39; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_39_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_39_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

      <?php }
    // Optional images 40, 41, 42
    if( $signature_image_40 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_40_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_40_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_40_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_40; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_40_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_40_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_41 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_41_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_41_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_41_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_41; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_41_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_41_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php }
  if( $signature_image_42 !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_42_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_42_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_42_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_42; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_42_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_42_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

      <?php }

    // Optional images 43, 44, 45
    if( $signature_image_43 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_43_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_43_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_43_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_43; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_43_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_43_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_44 !== '' ) { ?>

          <div class="col-md-4">
            <div class="thumbnail signature-text-color">
              <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_44_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_44_title; ?></a></h3>
              <a class="thumbnail-h3" href="<?php echo $signature_image_44_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_44; ?>"></a>
              <section id="" class="widget-section">
                <div class="caption">
                  <h4 class="widget-title"><?php echo $signature_image_44_sub_title; ?></h4>
                  <p class="text-justify"><?php echo $signature_image_44_caption; ?></p>
                </div>
              </section>
            </div>
          </div>

        <?php }
          if( $signature_image_45 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_45_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_45_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_45_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_45; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_45_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_45_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
    // Optional images 46, 47, 48
    if( $signature_image_46 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_46_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_46_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_46_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_46; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_46_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_46_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_47 !== '' ) { ?>

          <div class="col-md-4">
            <div class="thumbnail signature-text-color">
              <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_47_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_47_title; ?></a></h3>
              <a class="thumbnail-h3" href="<?php echo $signature_image_47_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_47; ?>"></a>
              <section id="" class="widget-section">
                <div class="caption">
                  <h4 class="widget-title"><?php echo $signature_image_47_sub_title; ?></h4>
                  <p class="text-justify"><?php echo $signature_image_47_caption; ?></p>
                </div>
              </section>
            </div>
          </div>

        <?php }
          if( $signature_image_48 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_48_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_48_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_48_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_48; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_48_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_48_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php } ?>

      </div>

    <?php }

    // Optional images 49, 50, 51
    if( $signature_image_49 !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_49_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_49_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_image_49_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_49; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_image_49_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_image_49_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php if( $signature_image_50 !== '' ) { ?>

          <div class="col-md-4">
            <div class="thumbnail signature-text-color">
              <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_50_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_50_title; ?></a></h3>
              <a class="thumbnail-h3" href="<?php echo $signature_image_50_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_50; ?>"></a>
              <section id="" class="widget-section">
                <div class="caption">
                  <h4 class="widget-title"><?php echo $signature_image_50_sub_title; ?></h4>
                  <p class="text-justify"><?php echo $signature_image_50_caption; ?></p>
                </div>
              </section>
            </div>
          </div>

        <?php }
          if( $signature_image_51 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_51_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_51_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_51_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_51; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_51_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_51_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_52 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_52_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_52_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_52_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_52; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_52_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_52_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_53 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_53_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_53_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_53_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_53; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_53_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_53_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_54 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_54_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_54_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_54_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_54; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_54_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_54_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_55 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_55_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_55_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_55_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_55; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_55_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_55_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_56 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_56_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_56_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_56_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_56; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_56_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_56_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_57 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_57_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_57_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_57_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_57; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_57_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_57_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_58 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_58_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_58_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_58_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_58; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_58_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_58_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_59 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_59_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_59_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_59_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_59; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_59_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_59_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_60 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_60_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_60_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_60_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_60; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_60_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_60_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_61 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_61_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_61_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_61_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_61; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_61_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_61_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php }
          if( $signature_image_62 !== '' ) { ?>

            <div class="col-md-4">
              <div class="thumbnail signature-text-color">
                <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_image_62_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_image_62_title; ?></a></h3>
                <a class="thumbnail-h3" href="<?php echo $signature_image_62_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_image_62; ?>"></a>
                <section id="" class="widget-section">
                  <div class="caption">
                    <h4 class="widget-title"><?php echo $signature_image_62_sub_title; ?></h4>
                    <p class="text-justify"><?php echo $signature_image_62_caption; ?></p>
                  </div>
                </section>
              </div>
            </div>

          <?php } ?>

      </div>

    <?php }

    // Optional centered left and right images
    if( $signature_centered_l !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_centered_l_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_centered_l_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_centered_l_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_centered_l; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_centered_l_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_centered_l_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } if( $signature_centered_r !== '' ) { ?>

        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_centered_r_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_centered_r_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_centered_r_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_centered_r; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_centered_r_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_centered_r_caption; ?></p>
              </div>
            </section>
          </div>
        </div>

        <?php } ?>

      </div>

     <?php }
     // Optional final centered image
      if( $signature_centered_image !== '' ) { ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail signature-text-color">
            <h3 class="widget-title"><a class="thumbnail-h3" href="<?php echo $signature_centered_image_title_link; ?>" target="_self" title="Signature Destination"><?php echo $signature_centered_image_title; ?></a></h3>
            <a class="thumbnail-h3" href="<?php echo $signature_centered_image_title_link; ?>" target="_self" title="Signature Destination"><img src="<?php echo $signature_centered_image; ?>"></a>
            <section id="" class="widget-section">
              <div class="caption">
                <h4 class="widget-title"><?php echo $signature_centered_image_sub_title; ?></h4>
                <p class="text-justify"><?php echo $signature_centered_image_caption; ?></p>
              </div>
            </section>
          </div>
        </div>
      </div>

    <?php } ?>

  <!-- ./end of template content -->
</div><!-- ./container-fluid -->
<?php } ?>
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



<?php
  get_footer();
