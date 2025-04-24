<?php
/**
 * Front Page - The Fly Shop 2025
 */
get_header();

// Get carousel items
$carousel_items = get_option('tfs_carousel_items', []);
?>

<?php if (!empty($carousel_items)): ?>
 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="8000">
  <div class="carousel-inner">
	 <?php foreach ($carousel_items as $index => $item): ?>
    <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
     <img class="img-fluid object-fit-cover d-block w-100" src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>">

     <div class="carousel-overlay" data-aos="fade-up" data-aos-delay="800">
      <h1><?php echo esc_html($item['title']); ?></h1>
      <h2><?php echo esc_html($item['subtitle']); ?></h2>
			<?php if (!empty($item['button_text']) && !empty($item['button_url'])): ?>
       <a href="<?php echo esc_url($item['button_url']); ?>" class="cta-button"><?php echo esc_html($item['button_text']); ?></a>
			<?php endif; ?>
     </div>
    </div>
	 <?php endforeach; ?>

   <!-- Add Scrolly -->
   <div id="scrolly" class="scrolly"><i class="lni lni-arrow-downward"></i></div>
  </div>

	<?php if (count($carousel_items) > 1): ?>
   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
   </button>
   <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
   </button>
	<?php endif; ?>
 </div>

 <!-- Wave Section -->
 <div class="wave-section">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
   <path fill="#ffffff" d="M0,64L60,80C120,96,240,128,360,170.7C480,213,600,267,720,245.3C840,224,960,128,1080,85.3C1200,43,1320,53,1380,58.7L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
  </svg>
 </div>
<?php else: ?>
 <!-- No carousel items found, don't display the carousel -->
<?php endif; ?>

<section id="front-page-into">
    <div id="fp-logo-background" class="mt-3">
        <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2021/05/social_tfs_logo_og.png" alt="The Fly Shop">
    </div>
    <div class="container container-row front-page-into-container mb-5">
        <!-- <h1><span id="typing-area"></h1> -->
        <div class="well text-center">
        <h1>Northern California's Fly Fishing Retail, Travel, and Adventure Resource</h1>
        <h2>(800) 669-3474</h2>
        </div>
    </div>
</section>

<?php
// Get card grid settings
$card_grid_options = get_option('tfs_card_grid_options', array());
$cards = isset($card_grid_options['cards']) ? $card_grid_options['cards'] : array();

// Display card grid
if (!empty($cards)) :
 ?>
 <section id="card-grid-container" class="content-section mt-4 mb-5" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true">
  <div id="front-page-content" class="container-fluid container-row">
   <div class="container">
    <div class="row g-4">
		 <?php
		 // Feature style classes to cycle through
		 $style_classes = array(
			'top-card-feature-left',
			'top-card-feature-right',
			'bottom-card-feature-left',
			'bottom-card-feature-right'
		 );

		 foreach ($cards as $index => $card) :
			// Get style class based on index (cycle through the classes)
			$style_class = $style_classes[$index % count($style_classes)];
			?>
      <!-- Card <?php echo $index + 1; ?> -->
      <div class="col-md-4 card-feature <?php echo esc_attr($style_class); ?>" data-aos="" data-aos-offset="200" data-aos-duration="1000">
       <div class="card-container">
        <img src="<?php echo esc_url($card['image']); ?>" alt="<?php echo esc_attr($card['image_alt']); ?>" class="card-img">
        <h3 class="card-title-overlay"><?php echo esc_html($card['title']); ?></h3>
        <div class="card-hover-content">
         <p class="lead"><?php echo wp_kses_post($card['description']); ?></p>
				 <?php if (!empty($card['button_url'])) : ?>
          <a href="<?php echo esc_url($card['button_url']); ?>" class="btn btn-tfs btn-sm"><?php echo esc_html($card['button_text']); ?></a>
				 <?php endif; ?>
        </div>
       </div>
      </div>
		 <?php endforeach; ?>
    </div>
   </div>
  </div>
 </section>
<?php endif; ?>

<!-- <section class="content-section mt-4 mb-5" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true">
<div id="front-page-content" class="container-fluid container-row">
<div class="container">
    <div class="row g-4">

        <div class="col-md-4 card-feature top-card-feature-left" data-aos="" data-aos-offset="200" data-aos-duration="1000">
            <div class="card-container">
                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/02/FP_StormShadow_RollingCarryOn.webp" alt="Card 1" class="card-img">
                <h3 class="card-title-overlay">Shop Online</h3>
                <div class="card-hover-content">
                    <p class="lead">This text is only for demo purposes. You will be able to update this text. We just add it so we can see how this will look with text.</p>
                    <a href="#" class="btn btn-tfs btn-sm">Read More</a>
                </div>
            </div>
        </div>


        <div class="col-md-4 card-feature top-card-feature-right" data-aos="" data-aos-offset="200" data-aos-duration="1000">
            <div class="card-container">
                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/06/Bollibokka_Getting-1.jpg" alt="Card 2" class="card-img">
                <h3 class="card-title-overlay">Regional Vacations</h3>
                <div class="card-hover-content">
                    <p class="lead">Although there are only 9 "Cards" in this grid, there could be many more or less. You get to choose. If you only want three? Then add only three from within the associated editor in the admin dashboard.</p>
                    <a href="#" class="btn btn-tfs btn-sm">Read More</a>
                </div>
            </div>
        </div>


        <div class="col-md-4 card-feature bottom-card-feature-left" data-aos="" data-aos-offset="200" data-aos-duration="1000">
            <div class="card-container">
                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/09/LowerSac_Main3.jpg" alt="Card 3" class="card-img">
                <h3 class="card-title-overlay">Guided Fly Fishing</h3>
                <div class="card-hover-content">
                    <p class="lead">This is an excerpt of the card content. It's a test. The content here is purposed for conceltual reasons only. You will replace it with content related to a service, product, destination.</p>
                    <a href="#" class="btn btn-tfs btn-sm">Read More</a>
                </div>
            </div>
        </div>


        <div class="col-md-4 card-feature bottom-card-feature-right" data-aos="" data-aos-offset="200" data-aos-duration="1000">
            <div class="card-container">
                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/08/3Day_Itinerary.jpg" alt="Card 4" class="card-img">
                <h3 class="card-title-overlay">Fly Fishing Schools</h3>
                <div class="card-hover-content">
                    <p class="lead">This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information.</p>
                    <a href="#" class="btn btn-tfs btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 card-feature bottom-card-feature-right" data-aos="" data-aos-offset="200" data-aos-duration="1000">
            <div class="card-container">
                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/12/Providence_Report1.jpg" alt="Card 4" class="card-img">
                <h3 class="card-title-overlay">International Travel</h3>
                <div class="card-hover-content">
                    <p class="lead">This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information.</p>
                    <a href="#" class="btn btn-tfs btn-sm">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 card-feature bottom-card-feature-right" data-aos="" data-aos-offset="200" data-aos-duration="1000">
            <div class="card-container">
                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2017/10/Species_BrownTrout_MFFL.jpg" alt="Card 4" class="card-img">
                <h3 class="card-title-overlay">Local Fishing Reports</h3>
                <div class="card-hover-content">
                    <p class="lead">This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information. This is an excerpt of the card content. It slides up on hover to reveal additional information.</p>
                    <a href="#" class="btn btn-tfs btn-sm">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section> -->

<?php
$carousel_items = get_option('fppc_carousel_items') ?: []; // Retrieve the carousel items
if (!empty($carousel_items)): ?>
    <section id="retail-front-page-carousel" class="custom-carousel-container mt-5 mb-5">
        <div class="container no-padding-lr" id="custom-cards">
        <h2 class="pb-2 border-bottom">Shop</h2>
        <div id="productCarousel" class="custom-carousel">
            <div class="carousel-inner-custom">
						 <?php foreach ($carousel_items as $item): ?>
                 <div class="carousel-item-custom">
                     <div class="custom-card">
                         <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>" class="custom-card-image" />
                         <div class="custom-card-body">
                             <h5 class="custom-card-title"><?php echo esc_html($item['title']); ?></h5>
                             <p class="custom-card-text"><?php echo esc_html($item['description']); ?></p>
                             <a href="<?php echo esc_url($item['url']); ?>" class="custom-card-link">View Product</a>
                         </div>
                     </div>
                 </div>
						 <?php endforeach; ?>
            </div>

            <!-- Navigation buttons -->
            <button id="customPrev" class="custom-nav-btn custom-prev"><i class="bi bi-chevron-compact-left"></i>
            </button>
            <button id="customNext" class="custom-nav-btn custom-next"><i class="bi bi-chevron-compact-right"></i>
            </button>
        </div>
        </div>
    </section>
<?php endif; ?>

<section id="front-page-news">
    <div class="container px-4 py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">News</h2>

		 <?php
		 // WP Query to fetch the 3 most recent posts
		 $recent_posts = new WP_Query(array(
			'post_type'      => 'post',
			'posts_per_page' => 3,
			'orderby'        => 'date',
			'order'          => 'DESC'
		 ));

		 // Check if there are posts
		 if ($recent_posts->have_posts()) : ?>
			<div class="row row-cols-1 row-cols-md-3 g-4">
			 <?php while ($recent_posts->have_posts()) : $recent_posts->the_post();
				// Get the featured image URL
				$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
				// If no featured image, use a placeholder
				if (!$featured_img_url) {
				 $featured_img_url = 'https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png';
				}

				// Get the time difference
				$time_diff = human_time_diff(get_the_time('U'), current_time('timestamp'));
				?>
				<div class="col">
				 <div class="card card-news card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('<?php echo esc_url($featured_img_url); ?>');">
					<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
					 <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">
						<a href="<?php the_permalink(); ?>" class="text-white text-decoration-none">
						 <?php the_title(); ?>
						</a>
					 </h3>
					 <ul class="d-flex list-unstyled mt-auto">
						<li class="me-auto">
						 <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="<?php bloginfo('name'); ?>" width="52" height="52" class="border border-white">
						</li>
						<li class="d-flex align-items-center me-3">
						 <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
						 <small><?php
							// Display the first category
							$categories = get_the_category();
							if (!empty($categories)) {
							 echo esc_html($categories[0]->name);
							} else {
							 echo 'Uncategorized';
							}
							?></small>
						</li>
						<li class="d-flex align-items-center">
						 <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
						 <small><?php echo esc_html($time_diff . ' ago'); ?></small>
						</li>
					 </ul>
					</div>
				 </div>
				</div>
			 <?php endwhile; ?>
			</div>
			<?php
			// Restore original post data
			wp_reset_postdata();
		 endif;
		 ?>

        <!--<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-news card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/02/NFR_Extra3.webp');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Destination News, And Info</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="Bootstrap" width="52" height="52" class="border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Destination Title</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-news card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/02/NFR_Extra5.webp');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">How To Make The Most Of Your Day</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="Bootstrap" width="52" height="52" class="border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Destination Name</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-news card-cover h-100 overflow-hidden text-bg-dark shadow-lg" style="background-image: url('https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2025/02/ESB020225_11-scaled.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">This Destination Is: A Path To Peace</h3>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://tfs-spaces.sfo2.digitaloceanspaces.com/theflyshop/uploads/2018/01/TFSLogo-red.png" alt="Bootstrap" width="52" height="52" class="border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Destination Name</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>-->
    </div>
</section>

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