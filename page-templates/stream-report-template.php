<?php
/* 	 Template Name: Stream Report
 *   Template Post Type: page
 *		 Developed for The Fly Shop
 *		 SteelBridge Media
*/

include_once('post-meta/post-meta-stream-report.php');

get_header();
?>
			<section class="">
				<div class="container">
					<h2 class="text-center">Northern California Stream Report</h2>

					<div class="wide text-justify">

						<?php if (have_posts()) :

							while (have_posts()) : the_post();

								the_content();

							endwhile;

						else :

						endif; ?>

					</div>
				</div>
			</section>

			<section class="">

				<!-- ====== FEATURED REPORTS ====== -->

				<div class="container text-center">
					<h2>Featured Reports</h2>
					<div class="row">

						<div class="col-xs-6 col-md-3">
							<a data-toggle="modal" href="#stream-report.php" data-target=".featuredreport1" role="button" class="thumbnail featuredreport clicky"><img src="<?php echo $featured1_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
						</div>

						<div class="col-xs-6 col-md-3">
							<a data-toggle="modal" data-target=".featuredreport2" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured2_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
						</div>

						<div class="col-xs-6 col-md-3">
							<a data-toggle="modal" data-target=".featuredreport3" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured3_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
						</div>

						<div class="col-xs-6 col-md-3">
							<a data-toggle="modal" data-target=".featuredreport4" role="button" class="thumbnail featuredreport"><img src="<?php echo $featured4_image; ?>" alt="Northern California - The Fly Shop - Stream Report"></a>
						</div>

					</div>
				</div>

				<!-- ====== /FEATURED REPORTS ====== -->

				<div class="container">

					<div class="text-center">
						<h2>All Regional Reports</h2>
					</div>

                <div class="well">
                    <h4>Regional Rivers</h4>
                </div>
				<div id="report-tab-selector-rivers" class="d-flex align-items-start">

                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                    <button class="btn btn-tfs active" id="fall-river-tab" data-bs-toggle="pill" data-bs-target="#fall-river-report" type="button" role="tab" aria-controls="fall-river-report" aria-selected="true">Fall River:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'fallriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $fallriver_closed_checkbox; ?>"><?php echo $fallriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $fallriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $fallriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $fallriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $fallriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $fallriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="hat-creek-tab" data-bs-toggle="pill" data-bs-target="#hat-creek-report" type="button" role="tab" aria-controls="hat-creek-report" aria-selected="false">Hat Creek:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'hatcreek-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $hatcreek_closed_checkbox;?>"><?php echo $hatcreek_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $hatcreek_checkbox_poor;?>">Poor</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_fair;?>">Fair</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_fairgood;?>">Fair to Good</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_good;?>">Good</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_great;?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="klamath-river-tab" data-bs-toggle="pill" data-bs-target="#klamath-river-report" type="button" role="tab" aria-controls="klamath-river-report" aria-selected="false">Klamath River:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'klamathriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $klamathriver_closed_checkbox;?>"><?php echo $klamathriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $klamathriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="lower-sac-tab" data-bs-toggle="pill" data-bs-target="#lower-sac-report" type="button" role="tab" aria-controls="lower-sac-report" aria-selected="false">Lower Sacramento River:&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'lowersacramento-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $lowersacramento_closed_checkbox;?>"><?php echo $lowersacramento_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="mccloud-river-tab" data-bs-toggle="pill" data-bs-target="#mccloud-river-report" type="button" role="tab" aria-controls="mccloud-river-report" aria-selected="false">McCloud River:&nbsp;
                     <?php $mccloudriver_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $mccloudriver_closed_checkbox;?>"><?php echo $mccloudriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_poor;?>">Poor</span>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_fair;?>">Fair</span>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_fairgood;?>">Fair to Good</span>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_good;?>">Good</span>
                         <span class="label label-default<?php echo $mccloudriver_checkbox_great;?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="pit-river-tab" data-bs-toggle="pill" data-bs-target="#pit-river-report" type="button" role="tab" aria-controls="pit-river-report" aria-selected="false">Pit River:&nbsp;
                     <?php $pitriver_closed_checkbox = get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $pitriver_closed_checkbox;?>"><?php echo $pitriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $pitriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="trinity-river-tab" data-bs-toggle="pill" data-bs-target="#trinity-river-report" type="button" role="tab" aria-controls="trinity-river-report" aria-selected="false">Trinity River:&nbsp;
                     <?php $trinityriver_closed_checkbox = get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $trinityriver_closed_checkbox;?>"><?php echo $trinityriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $trinityriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    </button>
                    <button class="btn btn-tfs" id="upper-sac-tab" data-bs-toggle="pill" data-bs-target="#upper-sac-report" type="button" role="tab" aria-controls="upper-sac-report" aria-selected="false">Upper Sacramento River:&nbsp;
                    <?php if(get_post_meta(get_the_ID(), 'uppersac-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $uppersac_closed_checkbox; ?>"><?php echo $uppersac_closed_message; ?></span>
                    <?php else: ?>
                         <span class="label label-default<?php echo $uppersac_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_great; ?>">Great</span>
                    <?php endif; ?>
                    </button>

                </div>

                <div class="tab-content" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="fall-river-report" role="tabpanel" aria-labelledby="fall-river-tab" tabindex="0">
                    <h4>Fall River - Updated:&nbsp;<?php echo $fallriver_report_date; ?></h4>

                        <p><b>Fishing conditions:</b>&nbsp;
                        <?php if(get_post_meta(get_the_ID(), 'fallriver-closed-checkbox', true) == '-danger') :?>
                        <span class="label label-default<?php echo $fallriver_closed_checkbox; ?>"><?php echo $fallriver_closed_message; ?></span>
                        <?php else: ?>
                        <span class="label label-default<?php echo $fallriver_checkbox_poor; ?>">Poor</span>
                        <span class="label label-default<?php echo $fallriver_checkbox_fair; ?>">Fair</span>
                        <span class="label label-default<?php echo $fallriver_checkbox_fairgood; ?>">Fair to Good</span>
                        <span class="label label-default<?php echo $fallriver_checkbox_good; ?>">Good</span>
                        <span class="label label-default<?php echo $fallriver_checkbox_great; ?>">Great</span>
                        <?php endif; ?>
                        </p>

                        <div class="report"><b>Report:</b>&nbsp;<?php echo $fallriver_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $fallriver_hot_flies; ?></div>

                    </div>
                    <div class="tab-pane fade" id="hat-creek-report" role="tabpanel" aria-labelledby="hat-creek-tab" tabindex="0">
                        <h4>Hat Creek - Updated:&nbsp;<?php echo $hatcreek_report_update; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'hatcreek-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $hatcreek_closed_checkbox;?>"><?php echo $hatcreek_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $hatcreek_checkbox_poor;?>">Poor</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_fair;?>">Fair</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_fairgood;?>">Fair to Good</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_good;?>">Good</span>
                         <span class="label label-default<?php echo $hatcreek_checkbox_great;?>">Great</span>
                     <?php endif; ?>

                        <div class="report"><b>Report:</b>&nbsp;<?php echo $hatcreek_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $hatcreek_hot_flies; ?></div>

                    </div>
                    <div class="tab-pane fade" id="klamath-river-report" role="tabpanel" aria-labelledby="klamath-river-tab" tabindex="0">
                    <h4>Klamath River - Updated:&nbsp;<?php echo $klamathriver_updated; ?></h4>
                    <p><b>Fishing conditions:</b>&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'klamathriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $klamathriver_closed_checkbox;?>"><?php echo $klamathriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $klamathriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $klamathriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>

                    <div class="report"><b>Report:</b>&nbsp;<?php echo $klamathriver_report; ?></div>
                    <div><b>Hot Flies:</b><?php echo $klamathriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="lower-sac-report" role="tabpanel" aria-labelledby="lower-sac-tab" tabindex="0">
                        <h4>Lower Sacramento River - Updated:&nbsp;<?php echo $lowersacramento_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'lowersacramento-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $lowersacramento_closed_checkbox;?>"><?php echo $lowersacramento_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $lowersacramento_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                     <div class="report"><b>Report:</b>&nbsp;<?php echo $lowersacramento_report; ?></div>
                     <div><b>Hot Flies:</b><?php echo $lowersacramento_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="mccloud-river-report" role="tabpanel" aria-labelledby="mccloud-river-tab" tabindex="0">
                        <h4>McCloud River - Updated:&nbsp;<?php echo $mccloudriver_updated; ?></h4>
                        <p><b>Fishing conditions:</b>&nbsp;
                         <?php $mccloudriver_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true);
                         if(get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true) == '-danger') :?>
                             <span class="label label-default<?php echo $mccloudriver_closed_checkbox;?>"><?php echo $mccloudriver_closed_message; ?></span>
                         <?php else: ?>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_poor;?>">Poor</span>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_fair;?>">Fair</span>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_fairgood;?>">Fair to Good</span>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_good;?>">Good</span>
                             <span class="label label-default<?php echo $mccloudriver_checkbox_great;?>">Great</span>
                         <?php endif; ?>
                        <div class="report"><b>Report:</b>&nbsp;<?php echo $mccloudriver_report; ?></div>
                        <div><b>Hot Flies:</b><?php echo $mccloudriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="pit-river-report" role="tabpanel" aria-labelledby="pit-river-tab" tabindex="0">
                    <h4>Pit River - Updated:&nbsp;<?php echo $pitriver_updated ?></h4>
                    <p><b>Fishing conditions:</b>&nbsp;
                     <?php $pitriver_closed_checkbox = get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $pitriver_closed_checkbox;?>"><?php echo $pitriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $pitriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $pitriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                    <div class="report"><b>Report:</b>&nbsp;<?php echo $pitriver_report; ?></div>
                    <div><b>Hot Flies:</b><?php echo $pitriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="trinity-river-report" role="tabpanel" aria-labelledby="trinity-river-tab" tabindex="0">
                     <h4>Trinity River - Updated:&nbsp;<?php echo $trinityriver_updated ?></h4>
                     <p><b>Fishing conditions:</b>&nbsp;
                     <?php $trinityriver_closed_checkbox = get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true);
                     if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $trinityriver_closed_checkbox;?>"><?php echo $trinityriver_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $trinityriver_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $trinityriver_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                     <div class="report"><b>Report:</b>&nbsp;<?php echo $trinityriver_report; ?></div>
                     <div><b>Hot Flies:</b><?php echo$trinityriver_hot_flies; ?></div>
                    </div>
                    <div class="tab-pane fade" id="upper-sac-report" role="tabpanel" aria-labelledby="upper-sac-tab" tabindex="0">
                     <h4>Upper Sacramento River - Updated:&nbsp;<?php echo $uppersac_updated; ?></h4>
                     <p><b>Fishing conditions:</b>&nbsp;
                     <?php if(get_post_meta(get_the_ID(), 'uppersac-closed-checkbox', true) == '-danger') :?>
                         <span class="label label-default<?php echo $uppersac_closed_checkbox; ?>"><?php echo $uppersac_closed_message; ?></span>
                     <?php else: ?>
                         <span class="label label-default<?php echo $uppersac_checkbox_poor; ?>">Poor</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_fair; ?>">Fair</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_fairgood; ?>">Fair to Good</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_good; ?>">Good</span>
                         <span class="label label-default<?php echo $uppersac_checkbox_great; ?>">Great</span>
                     <?php endif; ?>
                     <div class="report"><b>Report:</b>&nbsp;<?php echo $uppersac_report; ?></div>
                     <div><b>Hot Flies:</b><?php echo $uppersac_hot_flies; ?></div>
                    </div>

                </div>
				</div>


                    <div class="well">
                        <h4>Regional Still Waters</h4>
                    </div>
                    <div id="report-tab-selector-still-waters" class="d-flex align-items-start">

                        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                            <button class="btn btn-tfs active" id="baum-lake-tab" data-bs-toggle="pill" data-bs-target="#baum-lake-report" type="button" role="tab" aria-controls="baum-lake-report" aria-selected="true">Baum Lake:&nbsp;
														 <?php if(get_post_meta(get_the_ID(), 'baumlake-closed-checkbox', true) == '-danger') :?>
                                 <span class="label label-default<?php echo $baumlake_closed_checkbox; ?>"><?php echo $baumlake_closed_message; ?></span>
														 <?php else: ?>
                                 <span class="label label-default<?php echo $baumlake_checkbox_poor; ?>">Poor</span>
                                 <span class="label label-default<?php echo $baumlake_checkbox_fair; ?>">Fair</span>
                                 <span class="label label-default<?php echo $baumlake_checkbox_fairgood; ?>">Fair to Good</span>
                                 <span class="label label-default<?php echo $baumlake_checkbox_good; ?>">Good</span>
                                 <span class="label label-default<?php echo $baumlake_checkbox_great; ?>">Great</span>
														 <?php endif; ?>
                            </button>
                            <button class="btn btn-tfs" id="iron-cyn-tab" data-bs-toggle="pill" data-bs-target="#iron-cyn-report" type="button" role="tab" aria-controls="iron-cyn-report" aria-selected="false">Iron Canyon Reservoir:&nbsp;
                             <?php if(get_post_meta(get_the_ID(), 'ironcanyonres-closed-checkbox', true) == '-danger') :?>
                                 <span class="label label-default<?php echo $ironcanyonres_closed_checkbox; ?>"><?php echo $ironcanyonres_closed_message; ?></span>
                             <?php else: ?>
                                 <span class="label label-default<?php echo $ironcanyonres_checkbox_poor; ?>">Poor</span>
                                 <span class="label label-default<?php echo $ironcanyonres_checkbox_fair;  ?>">Fair</span>
                                 <span class="label label-default<?php echo $ironcanyonres_checkbox_fairgood; ?>">Fair to Good</span>
                                 <span class="label label-default<?php echo $ironcanyonres_checkbox_good; ?>">Good</span>
                                 <span class="label label-default<?php echo $ironcanyonres_checkbox_great; ?>">Great</span>
                             <?php endif; ?>
                            </button>
                            <button class="btn btn-tfs" id="keswick-res-tab" data-bs-toggle="pill" data-bs-target="#keswick-res-report" type="button" role="tab" aria-controls="keswick-res-report" aria-selected="false">Keswick Reservoir:&nbsp;
                             <?php if(get_post_meta(get_the_ID(), 'keswickres-closed-checkbox', true) == '-danger') :?>
                                 <span class="label label-default<?php echo $keswickres_closed_checkbox; ?>"><?php echo $keswickres_closed_message; ?></span>
                             <?php else: ?>
                                 <span class="label label-default<?php echo $keswickres_checkbox_poor; ?>">Poor</span>
                                 <span class="label label-default<?php echo $keswickres_checkbox_fair;  ?>">Fair</span>
                                 <span class="label label-default<?php echo $keswickres_checkbox_fairgood; ?>">Fair to Good</span>
                                 <span class="label label-default<?php echo $keswickres_checkbox_good; ?>">Good</span>
                                 <span class="label label-default<?php echo $keswickres_checkbox_great; ?>">Great</span>
                             <?php endif; ?>
                            </button>
                            <button class="btn btn-tfs" id="lake-shasta-tab" data-bs-toggle="pill" data-bs-target="#lake-shasta-report" type="button" role="tab" aria-controls="lake-shasta-report" aria-selected="false">Lake Shasta:&nbsp;
                             <?php $lakeshasta_closed_checkbox = get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true);
                             if(get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true) == '-danger') :?>
                                 <span class="label label-default<?php echo $lakeshasta_closed_checkbox;?>"><?php echo $lakeshasta_closed_message; ?></span>
                             <?php else: ?>
                                 <span class="label label-default<?php echo $lakeshasta_checkbox_poor; ?>">Poor</span>
                                 <span class="label label-default<?php echo $lakeshasta_checkbox_fair; ?>">Fair</span>
                                 <span class="label label-default<?php echo $lakeshasta_checkbox_fairgood; ?>">Fair to Good</span>
                                 <span class="label label-default<?php echo $lakeshasta_checkbox_good; ?>">Good</span>
                                 <span class="label label-default<?php echo $lakeshasta_checkbox_great; ?>">Great</span>
                             <?php endif; ?>
                            </button>
                            <button class="btn btn-tfs" id="lewiston-lake-tab" data-bs-toggle="pill" data-bs-target="#lewiston-lake-report" type="button" role="tab" aria-controls="lewiston-lake-report" aria-selected="false">Lewsiton Lake:&nbsp;
                             <?php $lewistonlake_closed_checkbox = get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true);
                             if(get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true) == '-danger') :?>
                                 <span class="label label-default<?php echo $lewistonlake_closed_checkbox;?>"><?php echo $lewistonlake_closed_message; ?></span>
                             <?php else: ?>
                                 <span class="label label-default<?php echo $lewistonlake_checkbox_poor; ?>">Poor</span>
                                 <span class="label label-default<?php echo $lewistonlake_checkbox_fair; ?>">Fair</span>
                                 <span class="label label-default<?php echo $lewistonlake_checkbox_fairgood; ?>">Fair to Good</span>
                                 <span class="label label-default<?php echo $lewistonlake_checkbox_good; ?>">Good</span>
                                 <span class="label label-default<?php echo $lewistonlake_checkbox_great; ?>">Great</span>
                             <?php endif; ?>
                            </button>
                            <button class="btn btn-tfs" id="manzanita-lake-tab" data-bs-toggle="pill" data-bs-target="#manzanita-lake-report" type="button" role="tab" aria-controls="manzanita-lake-report" aria-selected="false">Manzanita Lake:&nbsp;
                             <?php $manzanitalake_closed_checkbox = get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true);
                             if(get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true) == '-danger') :?>
                                 <span class="label label-default<?php echo $manzanitalake_closed_checkbox;?>"><?php echo $manzanitalake_closed_message; ?></span>
                             <?php else: ?>
                                 <span class="label label-default<?php echo $manzanitalake_checkbox_poor; ?>">Poor</span>
                                 <span class="label label-default<?php echo $manzanitalake_checkbox_fair; ?>">Fair</span>
                                 <span class="label label-default<?php echo $manzanitalake_checkbox_fairgood; ?>">Fair to Good</span>
                                 <span class="label label-default<?php echo $manzanitalake_checkbox_good; ?>">Good</span>
                                 <span class="label label-default<?php echo $manzanitalake_checkbox_great; ?>">Great</span>
                             <?php endif; ?>
                            </button>
                            <button class="btn btn-tfs" id="mccloud-res-tab" data-bs-toggle="pill" data-bs-target="#mccloud-res-report" type="button" role="tab" aria-controls="mccloud-res-report" aria-selected="false">McCloud Reservoir:&nbsp;
														 <?php $mccloudreservoir_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true);
														 if(get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true) == '-danger') :?>
                                 <span class="label label-default<?php echo $mccloudreservoir_closed_checkbox;?>"><?php echo $mccloudreservoir_closed_message; ?></span>
														 <?php else: ?>
                                 <span class="label label-default<?php echo $mccloudreservoir_checkbox_poor; ?>">Poor</span>
                                 <span class="label label-default<?php echo $mccloudreservoir_checkbox_fair; ?>">Fair</span>
                                 <span class="label label-default<?php echo $mccloudreservoir_checkbox_fairgood; ?>">Fair to Good</span>
                                 <span class="label label-default<?php echo $mccloudreservoir_checkbox_good; ?>">Good</span>
                                 <span class="label label-default<?php echo $mccloudreservoir_checkbox_great; ?>">Great</span>
														 <?php endif; ?>
                            </button>
                            <button class="btn btn-tfs" id="pyramid-lake-tab" data-bs-toggle="pill" data-bs-target="#pyramid-lake-report" type="button" role="tab" aria-controls="pyramid-lake-report" aria-selected="false">Pyramid Lake:&nbsp;
                             <?php $pyramidlake_closed_checkbox = get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true);
                             if(get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true) == '-danger') :?>
                                 <span class="label label-default<?php echo $pyramidlake_closed_checkbox;?>"><?php echo $pyramidlake_closed_message; ?></span>
                             <?php else: ?>
                                 <span class="label label-default<?php echo $pyramidlake_checkbox_poor; ?>">Poor</span>
                                 <span class="label label-default<?php echo $pyramidlake_checkbox_fair;  ?>">Fair</span>
                                 <span class="label label-default<?php echo $pyramidlake_checkbox_fairgood; ?>">Fair to Good</span>
                                 <span class="label label-default<?php echo $pyramidlake_checkbox_good; ?>">Good</span>
                                 <span class="label label-default<?php echo $pyramidlake_checkbox_great; ?>">Great</span>
                             <?php endif; ?>
                            </button>

                        </div>

                        <div class="tab-content" id="v-pills-tabContent">

                            <div class="tab-pane fade show active" id="baum-lake-report" role="tabpanel" aria-labelledby="baum-lake-tab" tabindex="0">
                                <h4>Baum Lake - Updated:&nbsp;<?php echo $baumlake_updated; ?></h4>
                                <p><b>Fishing conditions:</b>&nbsp;
                                 <?php if(get_post_meta(get_the_ID(), 'baumlake-closed-checkbox', true) == '-danger') :?>
                                     <span class="label label-default<?php echo $baumlake_closed_checkbox; ?>"><?php echo $baumlake_closed_message; ?></span>
                                 <?php else: ?>
                                     <span class="label label-default<?php echo $baumlake_checkbox_poor; ?>">Poor</span>
                                     <span class="label label-default<?php echo $baumlake_checkbox_fair; ?>">Fair</span>
                                     <span class="label label-default<?php echo $baumlake_checkbox_fairgood; ?>">Fair to Good</span>
                                     <span class="label label-default<?php echo $baumlake_checkbox_good; ?>">Good</span>
                                     <span class="label label-default<?php echo $baumlake_checkbox_great; ?>">Great</span>
                                 <?php endif; ?>
                                </p>

                                <div class="report"><b>Report:</b>&nbsp;<?php echo $baumlake_report; ?></div>
                                <div><b>Hot Flies:</b><?php echo $baumlake_hot_flies; ?></div>

                            </div>
                            <div class="tab-pane fade" id="iron-cyn-report" role="tabpanel" aria-labelledby="iron-cyn-tab" tabindex="0">
                                <h4>Iron Canyon Reservoir - Updated:&nbsp;<?php echo $ironcanyonres_updated; ?></h4>
                                <p><b>Fishing conditions:</b>&nbsp;
                                 <?php if(get_post_meta(get_the_ID(), 'ironcanyonres-closed-checkbox', true) == '-danger') :?>
                                     <span class="label label-default<?php echo $ironcanyonres_closed_checkbox; ?>"><?php echo $ironcanyonres_closed_message; ?></span>
                                 <?php else: ?>
                                     <span class="label label-default<?php echo $ironcanyonres_checkbox_poor; ?>">Poor</span>
                                     <span class="label label-default<?php echo $ironcanyonres_checkbox_fair;  ?>">Fair</span>
                                     <span class="label label-default<?php echo $ironcanyonres_checkbox_fairgood; ?>">Fair to Good</span>
                                     <span class="label label-default<?php echo $ironcanyonres_checkbox_good; ?>">Good</span>
                                     <span class="label label-default<?php echo $ironcanyonres_checkbox_great; ?>">Great</span>
                                 <?php endif; ?>
                                <div class="report"><b>Report:</b>&nbsp;<?php echo $ironcanyonres_report; ?></div>
                                <div><b>Hot Flies:</b><?php echo $ironcanyonres_hot_flies; ?></div>
                            </div>
                            <div class="tab-pane fade" id="keswick-res-report" role="tabpanel" aria-labelledby="keswick-res-tab" tabindex="0">
                                <h4>Keswick Reservoir - Updated:&nbsp;<?php echo $keswickres_updated; ?></h4>
                                <p><b>Fishing conditions:</b>&nbsp;
                                 <?php if(get_post_meta(get_the_ID(), 'keswickres-closed-checkbox', true) == '-danger') :?>
                                     <span class="label label-default<?php echo $keswickres_closed_checkbox; ?>"><?php echo $keswickres_closed_message; ?></span>
                                 <?php else: ?>
                                     <span class="label label-default<?php echo $keswickres_checkbox_poor; ?>">Poor</span>
                                     <span class="label label-default<?php echo $keswickres_checkbox_fair;  ?>">Fair</span>
                                     <span class="label label-default<?php echo $keswickres_checkbox_fairgood; ?>">Fair to Good</span>
                                     <span class="label label-default<?php echo $keswickres_checkbox_good; ?>">Good</span>
                                     <span class="label label-default<?php echo $keswickres_checkbox_great; ?>">Great</span>
                                 <?php endif; ?>
                                <div class="report"><b>Report:</b>&nbsp;<?php echo $keswickres_report; ?></div>
                                <div><b>Hot Flies:</b><?php echo $keswickres_hot_flies; ?></div>
                            </div>
                            <div class="tab-pane fade" id="lake-shasta-report" role="tabpanel" aria-labelledby="lake-shasta-tab" tabindex="0">
                                <h4>Lake Shasta - Updated:&nbsp;<?php echo $lakeshasta_updated; ?></h4>
                                <p><b>Fishing conditions:</b>&nbsp;
                                 <?php $lakeshasta_closed_checkbox = get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true);
                                 if(get_post_meta(get_the_ID(), 'lakeshasta-closed-checkbox', true) == '-danger') :?>
                                     <span class="label label-default<?php echo $lakeshasta_closed_checkbox;?>"><?php echo $lakeshasta_closed_message; ?></span>
                                 <?php else: ?>
                                     <span class="label label-default<?php echo $lakeshasta_checkbox_poor; ?>">Poor</span>
                                     <span class="label label-default<?php echo $lakeshasta_checkbox_fair; ?>">Fair</span>
                                     <span class="label label-default<?php echo $lakeshasta_checkbox_fairgood; ?>">Fair to Good</span>
                                     <span class="label label-default<?php echo $lakeshasta_checkbox_good; ?>">Good</span>
                                     <span class="label label-default<?php echo $lakeshasta_checkbox_great; ?>">Great</span>
                                 <?php endif; ?>
                                <div class="report"><b>Report:</b>&nbsp;<?php echo $lakeshasta_report; ?></div>
                                <div><b>Hot Flies:</b><?php echo $lakeshasta_hot_flies; ?></div>
                            </div>
                            <div class="tab-pane fade" id="lewiston-lake-report" role="tabpanel" aria-labelledby="lewiston-lake-tab" tabindex="0">
                                <h4>Lewiston Lake - Updated:&nbsp;<?php echo $lewistonlake_updated; ?></h4>
                                <p><b>Fishing conditions:</b>&nbsp;
                                 <?php $lewistonlake_closed_checkbox = get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true);
                                 if(get_post_meta(get_the_ID(), 'lewistonlake-closed-checkbox', true) == '-danger') :?>
                                     <span class="label label-default<?php echo $lewistonlake_closed_checkbox;?>"><?php echo $lewistonlake_closed_message; ?></span>
                                 <?php else: ?>
                                     <span class="label label-default<?php echo $lewistonlake_checkbox_poor; ?>">Poor</span>
                                     <span class="label label-default<?php echo $lewistonlake_checkbox_fair; ?>">Fair</span>
                                     <span class="label label-default<?php echo $lewistonlake_checkbox_fairgood; ?>">Fair to Good</span>
                                     <span class="label label-default<?php echo $lewistonlake_checkbox_good; ?>">Good</span>
                                     <span class="label label-default<?php echo $lewistonlake_checkbox_great; ?>">Great</span>
                                 <?php endif; ?>
                                <div class="report"><b>Report:</b>&nbsp;<?php echo $lewistonlake_report; ?></div>
                                <div><b>Hot Flies:</b><?php echo $lewistonlake_hot_flies; ?></div>
                            </div>
                            <div class="tab-pane fade" id="manzanita-lake-report" role="tabpanel" aria-labelledby="manzanita-lake-tab" tabindex="0">
                                <h4>Manzanita Lake - Updated:&nbsp;<?php echo $manzanitalake_updated ?></h4>
                                <p><b>Fishing conditions:</b>&nbsp;
                                 <?php $manzanitalake_closed_checkbox = get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true);
                                 if(get_post_meta(get_the_ID(), 'manzanitalake-closed-checkbox', true) == '-danger') :?>
                                     <span class="label label-default<?php echo $manzanitalake_closed_checkbox;?>"><?php echo $manzanitalake_closed_message; ?></span>
                                 <?php else: ?>
                                     <span class="label label-default<?php echo $manzanitalake_checkbox_poor; ?>">Poor</span>
                                     <span class="label label-default<?php echo $manzanitalake_checkbox_fair; ?>">Fair</span>
                                     <span class="label label-default<?php echo $manzanitalake_checkbox_fairgood; ?>">Fair to Good</span>
                                     <span class="label label-default<?php echo $manzanitalake_checkbox_good; ?>">Good</span>
                                     <span class="label label-default<?php echo $manzanitalake_checkbox_great; ?>">Great</span>
                                 <?php endif; ?>
                                <div class="report"><b>Report:</b>&nbsp;<?php echo $manzanitalake_report; ?></div>
                                <div><b>Hot Flies:</b><?php echo $manzanitalake_hot_flies; ?></div>
                            </div>
                            <div class="tab-pane fade" id="mccloud-res-report" role="tabpanel" aria-labelledby="mccloud-res-tab" tabindex="0">
                                <h4>McCloud Reservoir - Updated:&nbsp;<?php echo $mccloudreservoir_updated ?></h4>
                                <p><b>Fishing conditions:</b>&nbsp;
                                 <?php $mccloudreservoir_closed_checkbox = get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true);
                                 if(get_post_meta(get_the_ID(), 'mccloudreservoir-closed-checkbox', true) == '-danger') :?>
                                     <span class="label label-default<?php echo $mccloudreservoir_closed_checkbox;?>"><?php echo $mccloudreservoir_closed_message; ?></span>
                                 <?php else: ?>
                                     <span class="label label-default<?php echo $mccloudreservoir_checkbox_poor; ?>">Poor</span>
                                     <span class="label label-default<?php echo $mccloudreservoir_checkbox_fair; ?>">Fair</span>
                                     <span class="label label-default<?php echo $mccloudreservoir_checkbox_fairgood; ?>">Fair to Good</span>
                                     <span class="label label-default<?php echo $mccloudreservoir_checkbox_good; ?>">Good</span>
                                     <span class="label label-default<?php echo $mccloudreservoir_checkbox_great; ?>">Great</span>
                                 <?php endif; ?>
                                <div class="report"><b>Report:</b>&nbsp;<?php echo $mccloudreservoir_report; ?></div>
                                <div><b>Hot Flies:</b><?php echo$mccloudreservoir_hot_flies; ?></div>
                            </div>
                            <div class="tab-pane fade" id="pyramid-lake-report" role="tabpanel" aria-labelledby="pyramid-lake-tab" tabindex="0">
                                <h4>Pyramid Lake - Updated:&nbsp;<?php echo $pyramidlake_updated; ?></h4>
                                <p><b>Fishing conditions:</b>&nbsp;
                                 <?php $pyramidlake_closed_checkbox = get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true);
                                 if(get_post_meta(get_the_ID(), 'pyramidlake-closed-checkbox', true) == '-danger') :?>
                                     <span class="label label-default<?php echo $pyramidlake_closed_checkbox;?>"><?php echo $pyramidlake_closed_message; ?></span>
                                 <?php else: ?>
                                     <span class="label label-default<?php echo $pyramidlake_checkbox_poor; ?>">Poor</span>
                                     <span class="label label-default<?php echo $pyramidlake_checkbox_fair;  ?>">Fair</span>
                                     <span class="label label-default<?php echo $pyramidlake_checkbox_fairgood; ?>">Fair to Good</span>
                                     <span class="label label-default<?php echo $pyramidlake_checkbox_good; ?>">Good</span>
                                     <span class="label label-default<?php echo $pyramidlake_checkbox_great; ?>">Great</span>
                                 <?php endif; ?>
                                <div class="report"><b>Report:</b>&nbsp;<?php echo $pyramidlake_report; ?></div>
                                <div><b>Hot Flies:</b><?php echo $pyramidlake_hot_flies; ?></div>
                            </div>

                        </div>
                    </div>






                    <div class="panel-group" id="accordion1">




						<!-- ====== STILL WATERS ======= -->

						<div class="panel panel-default">
							<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseThree1">
								<img src="<?php echo $lakes_image; ?>" alt="lakes report" class="img-responsive center-block thumbnail">
								<h3>Expand All Still Waters Reports&nbsp;<span class="arrow-down"></span></h3>
							</div>
							<div id="collapseThree1" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="panel-group" id="accordion-lakes" role="tablist" aria-multiselectable="true">



										<!-- ====== MANZANITA LAKE ====== -->


										<!-- ====== MCCLOUD RESERVOIR ====== -->


										<!-- ====== PYRAMID LAKE ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingThirtythree" data-toggle="collapse" data-parent="#accordion-lakes" href="#collapseThirtythree" aria-expanded="true" aria-controls="collapseThirtythree">
												<div class="row">

													<div class="col-sm-6">
														<h4>PYRAMID LAKE&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">

														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->


														<!-- === END EDIT SECTION === -->

													</div>
												</div>
											</div>


											<div id="collapseThirtythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirtythree">
												<div class="report-panel">
													<div id="baumlakereport">
														<div class="container-fluid">
															<div class="row">

																<div class="col-sm-6">
																	<h4>Pyramid Lake Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $pyramidlake_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
															<div class="row">

																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $pyramidlake_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->


																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $pyramidlake_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->

																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- ====== PRIVATE WATERS ====== -->

						<div class="panel panel-default">
							<div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" data-target="#collapseFour1">
								<img src="<?php echo $private_waters_image; ?>" alt="private waters" class="img-responsive center-block thumbnail">
								<h3>Expand All Private Waters Reports&nbsp;<span class="arrow-down"></span></h3>
							</div>
							<div id="collapseFour1" class="panel-collapse collapse">
								<div class="panel-body">
									<div class="panel-group" id="accordion-private" role="tablist" aria-multiselectable="true">

										<!-- ====== ANTELOPE CREEK LODGE ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingSixteen" data-toggle="collapse" data-parent="#accordion-private" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
												<div class="row">

													<div class="col-sm-6">
														<h4>Antelope Creek Lodge&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">

														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php //$antelopecreek_closed_checkbox = get_post_meta(get_the_ID(), 'antelopecreek-closed-checkbox', true);
														if(get_post_meta(get_the_ID(), 'antelopecreek-closed-checkbox', true) == '-danger') :?>
															<span class="label label-default<?php echo $antelopecreek_closed_checkbox;?>"><?php echo $antelopecreek_closed_message; ?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $antelopecreek_checkbox_poor;?>">Poor</span>
															<span class="label label-default<?php echo $antelopecreek_checkbox_fair;?>">Fair</span>
															<span class="label label-default<?php echo $antelopecreek_checkbox_fairgood;?>">Fair to Good</span>
															<span class="label label-default<?php echo $antelopecreek_checkbox_good;?>">Good</span>
															<span class="label label-default<?php echo $antelopecreek_checkbox_great;?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->

													</div>
												</div>
											</div>

											<div id="collapseSixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSixteen">
												<div class="report-panel">
													<div id="antelopecreekreport">
														<div class="container-fluid">
															<div class="row">

																<div class="col-sm-6">
																	<h4>Antelope Creek Lodge Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $antelopecreek_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->

																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $antelopecreek_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->


																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $antelopecreek_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->

																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== BAILEY CREEK LODGE ====== -->


										<!-- ====== BATTLE CREEK RANCH ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingEighteen" data-toggle="collapse" data-parent="#accordion-private" href="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
												<div class="row">

													<div class="col-sm-6">
														<h4>Battle Creek&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">

														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php //$battlecreek_closed_checkbox = get_post_meta(get_the_ID(), 'battlecreek-closed-checkbox', true);
														if(get_post_meta(get_the_ID(), 'battlecreek-closed-checkbox', true) == '-danger') :?>
															<span class="label label-default<?php echo $battlecreek_closed_checkbox;?>"><?php echo $battlecreek_closed_message; ?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $battlecreek_checkbox_poor;?>">Poor</span>
															<span class="label label-default<?php echo $battlecreek_checkbox_fair;?>">Fair</span>
															<span class="label label-default<?php echo $battlecreek_checkbox_fairgood;?>">Fair to Good</span>
															<span class="label label-default<?php echo $battlecreek_checkbox_good;?>">Good</span>
															<span class="label label-default<?php echo $battlecreek_checkbox_great;?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->

													</div>
												</div>
											</div>

											<div id="collapseEighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEighteen">
												<div class="report-panel">
													<div id="battlecreekreport">
														<div class="container-fluid">
															<div class="row">
																<div class="col-sm-6">
																	<h4>Battle Creek Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $battlecreek_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $battlecreek_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->


																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $battlecreek_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->


																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== BOLLIBOKKA FISHING CLUB ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingNineteen" data-toggle="collapse" data-parent="#accordion-private" href="#collapseNineteen" aria-expanded="true" aria-controls="collapseNineteen">
												<div class="row">

													<div class="col-sm-6">
														<h4>Bollibokka&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">


														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php $bollibokka_closed_checkbox = get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true);
														if(get_post_meta(get_the_ID(), 'bollibokka-closed-checkbox', true) == '-danger') :?>
															<span class="label label-default<?php echo $bollibokka_closed_checkbox;?>"><?php echo $bollibokka_closed_message; ?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $bollibokka_checkbox_poor; ?>">Poor</span>
															<span class="label label-default<?php echo $bollibokka_checkbox_fair; ?>">Fair</span>
															<span class="label label-default<?php echo $bollibokka_checkbox_fairgood; ?>">Fair to Good</span>
															<span class="label label-default<?php echo $bollibokka_checkbox_good; ?>">Good</span>
															<span class="label label-default<?php echo $bollibokka_checkbox_great; ?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->


													</div>
												</div>
											</div>


											<div id="collapseNineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNineteen">
												<div class="report-panel">
													<div id="bollibokkareport">
														<div class="container-fluid">
															<div class="row">
																<div class="col-sm-6">
																	<h4>Bollibokka Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $bollibokka_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $bollibokka_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->


																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $bollibokka_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->


																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== CIRCLE SEVEN GUEST RANCH ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentynine" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseTwentynine" aria-expanded="false" aria-controls="collapseTwentynine">
												<div class="row">

													<div class="col-sm-6">
														<h4>Circle Seven&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">


														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php $circle7_closed_checkbox = get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true);
														if(get_post_meta(get_the_ID(), 'circle7-closed-checkbox', true) == '-danger') :?>
															<span class="label label-default<?php echo $circle7_closed_checkbox;?>"><?php echo $circle7_closed_message; ?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $circle7_checkbox_poor; ?>">Poor</span>
															<span class="label label-default<?php echo $circle7_checkbox_fair; ?>">Fair</span>
															<span class="label label-default<?php echo $circle7_checkbox_fairgood; ?>">Fair to Good</span>
															<span class="label label-default<?php echo $circle7_checkbox_good; ?>">Good</span>
															<span class="label label-default<?php echo $circle7_checkbox_great; ?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->


													</div>
												</div>
											</div>


											<div id="collapseTwentynine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentynine">
												<div class="report-panel">
													<div id="circlesevenreport">
														<div class="container-fluid">
															<div class="row">

																<div class="col-sm-6">
																	<h4>Circle Seven Guest Ranch Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $circle7_updated;  ?>

																		<!-- === END EDIT SECTION: DATE === -->

																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $circle7_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->

																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $circle7_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->


																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== CLEAR CREEK RANCH ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwenty" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwenty" aria-expanded="true" aria-controls="collapseTwenty">
												<div class="row">

													<div class="col-sm-6">
														<h4>Clear Creek Ranch&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">


														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php $clearcreek_closed_checkbox = get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true);
														if(get_post_meta(get_the_ID(), 'clearcreek-closed-checkbox', true) == '-danger') :?>
															<span class="label label-default<?php echo $clearcreek_closed_checkbox; ?>"><?php echo $clearcreek_closed_message; ?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $clearcreek_checkbox_poor; ?>">Poor</span>
															<span class="label label-default<?php echo $clearcreek_checkbox_fair; ?>">Fair</span>
															<span class="label label-default<?php echo $clearcreek_checkbox_fairgood; ?>">Fair to Good</span>
															<span class="label label-default<?php echo $clearcreek_checkbox_good; ?>">Good</span>
															<span class="label label-default<?php echo $clearcreek_checkbox_great; ?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->

													</div>
												</div>
											</div>


											<div id="collapseTwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwenty">
												<div id="clearcreekreport">
													<div class="report-panel">
														<div class="container-fluid">
															<div class="row">

																<div class="col-sm-6">
																	<h4>Clear Creek Ranch Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $clearcreek_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
														</div>
														<div class="container-fluid">
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $clearcreek_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->


																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $clearcreek_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->


																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== GOLD RIVER ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentyeight" data-toggle="collapse" data-parent="#accordion-rivers" href="#collapseTwentyeight" aria-expanded="false" aria-controls="collapseTwentyeight">
												<div class="row">

													<div class="col-sm-6">
														<h4>Gold River Lodge&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">


														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php //$goldriver_closed_checkbox = get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true);
														if(get_post_meta(get_the_ID(), 'goldriver-closed-checkbox', true) == '-danger'):?>
															<span class="label label-default<?php echo $goldriver_closed_checkbox; ?>"><?php echo $goldriver_closed_message;?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $goldriver_checkbox_poor; ?>">Poor</span>
															<span class="label label-default<?php echo $goldriver_checkbox_fair; ?>">Fair</span>
															<span class="label label-default<?php echo $goldriver_checkbox_fairgood; ?>">Fair to Good</span>
															<span class="label label-default<?php echo $goldriver_checkbox_good; ?>">Good</span>
															<span class="label label-default<?php echo $goldriver_checkbox_great; ?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->


													</div>
												</div>
											</div>


											<div id="collapseTwentyeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyeight">
												<div class="report-panel">
													<div id="goldriverreport">
														<div class="container-fluid">
															<div class="row">
																<div class="col-sm-6">
																	<h4>Gold River Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $goldriver_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $goldriver_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->


																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $goldriver_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->


																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== LUK LAKE ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentythree" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwentythree" aria-expanded="true" aria-controls="collapseTwentythree">
												<div class="row">

													<div class="col-sm-6">
														<h4>Luk Lake&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">


														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php //$luklake_closed_checkbox = get_post_meta(get_the_ID(), 'luklake-closed-checkbox', true);
														if(get_post_meta(get_the_ID(), 'luklake-closed-checkbox', true) == '-danger'):?>
															<span class="label label-default<?php echo $luklake_closed_checkbox;?>"><?php echo $luklake_closed_message; ?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $luklake_checkbox_poor; ?>">Poor</span>
															<span class="label label-default<?php echo $luklake_checkbox_fair; ?>">Fair</span>
															<span class="label label-default<?php echo $luklake_checkbox_fairgood; ?>">Fair to Good</span>
															<span class="label label-default<?php echo $luklake_checkbox_good; ?>">Good</span>
															<span class="label label-default<?php echo $luklake_checkbox_great; ?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->


													</div>
												</div>
											</div>


											<div id="collapseTwentythree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentythree">
												<div class="report-panel">
													<div id="luklakereport">
														<div class="container-fluid">
															<div class="row">

																<div class="col-sm-6">
																	<h4>Luk Lake Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $luklake_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $luklake_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->

																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $luklake_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->

																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== OASIS SPRINGS ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentyseven" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwentyseven" aria-expanded="false" aria-controls="collapseTwentyseven">
												<div class="row">

													<div class="col-sm-6">
														<h4>Oasis Springs&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">

														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php if(get_post_meta(get_the_ID(), 'oasissprings-closed-checkbox', true) == '-danger'):?>
															<span class="label label-default<?php echo $oasissprings_closed_checkbox; ?>"><?php echo $oasissprings_closed_message; ?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $oasissprings_checkbox_poor; ?>">Poor</span>
															<span class="label label-default<?php echo $oasissprings_checkbox_fair; ?>">Fair</span>
															<span class="label label-default<?php echo $oasissprings_checkbox_fairgood; ?>">Fair to Good</span>
															<span class="label label-default<?php echo $oasissprings_checkbox_good; ?>">Good</span>
															<span class="label label-default<?php echo $oasissprings_checkbox_great; ?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->

													</div>
												</div>
											</div>

											<div id="collapseTwentyseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyseven">
												<div class="report-panel">
													<div id="oasisspringsreport">
														<div class="container-fluid">
															<div class="row">

																<div class="col-sm-6">
																	<h4>Oasis Springs Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $oasissprings_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $oasissprings_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->


																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $oasissprings_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->


																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== PEDROTTI PONDS ====== -->

										<!-- ====== ROCK CREEK LAKE ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingTwentyfour" data-toggle="collapse" data-parent="#accordion-private" href="#collapseTwentyfour" aria-expanded="true" aria-controls="collapseTwentyfour">
												<div class="row">

													<div class="col-sm-6">
														<h4>Rock Creek Lake&nbsp;<a name="lowersac"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">

														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php if(get_post_meta(get_the_ID(), 'rockcreek-closed-checkbox', true) == '-danger'):?>
															<span class="label label-default<?php echo $rockcreek_closed_checkbox; ?>"><?php echo $rockcreek_closed_message; ?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $rockcreek_checkbox_poor; ?>">Poor</span>
															<span class="label label-default<?php echo $rockcreek_checkbox_fair; ?>">Fair</span>
															<span class="label label-default<?php echo $rockcreek_checkbox_fairgood; ?>">Fair to Good</span>
															<span class="label label-default<?php echo $rockcreek_checkbox_good; ?>">Good</span>
															<span class="label label-default<?php echo $rockcreek_checkbox_great; ?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->

													</div>
												</div>
											</div>

											<div id="collapseTwentyfour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwentyfour">
												<div class="report-panel">
													<div id="rockcreeklakereport">
														<div class="container-fluid">
															<div class="row">

																<div class="col-sm-6">
																	<h4>Rock Creek Lake Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $rockcreek_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>


																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $rockcreek_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->


																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $rockcreek_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->


																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- ====== SPINNER FALL LODGE ====== -->

										<!-- ====== SUGAR CREEK RANCH ====== -->
										<div class="panel panel-default">

											<div class="panel-heading accordion-toggle collapsed" role="tab" id="headingThirtyone" data-toggle="collapse" data-parent="#accordion-private" href="#collapseThirtyone" aria-expanded="true" aria-controls="collapseThirtyone">
												<div class="row">

													<div class="col-sm-6">
														<h4>Sugar Creek&nbsp;<a name="sugarcreek"></a><span class="arrow-down">Expand</span></h4>
													</div>

													<div class="col-sm-6">

														<!-- === BEGIN EDIT SECTION: REPLACE 'label-default' with 'label-danger' to select any given rating === -->
														<?php if(get_post_meta(get_the_ID(), 'sugarcreek-closed-checkbox', true) == '-danger'):?>
															<span class="label label-default<?php echo $sugarcreek_closed_checkbox;?>"><?php echo $sugarcreek_closed_message;?></span>
														<?php else: ?>
															<span class="label label-default<?php echo $sugarcreek_checkbox_poor; ?>">Poor</span>
															<span class="label label-default<?php echo $sugarcreek_checkbox_fair; ?>">Fair</span>
															<span class="label label-default<?php echo $sugarcreek_checkbox_fairgood; ?>">Fair to Good</span>
															<span class="label label-default<?php echo $sugarcreek_checkbox_good; ?>">Good</span>
															<span class="label label-default<?php echo $sugarcreek_checkbox_great; ?>">Great</span>
														<?php endif; ?>

														<!-- === END EDIT SECTION === -->

													</div>
												</div>
											</div>

											<div id="collapseThirtyone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirtyone">
												<div class="report-panel">
													<div id="sugarcreekranchreport">
														<div class="container-fluid">
															<div class="row">

																<div class="col-sm-6">
																	<h4>Sugar Creek Ranch Report</h4>
																</div>

																<div class="col-sm-6">
																	<h4><strong>Updated:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: DATE === -->

																		<?php echo $sugarcreek_updated; ?>

																		<!-- === END EDIT SECTION: DATE === -->


																	</h4>
																</div>
															</div>
															<div class="row">
																<div class="col-sm-12">
																	<p><strong>Report:</strong>

																		<!-- === BEGIN EDIT SECTION: REPORT === -->

																		<?php echo $sugarcreek_report; ?>

																		<!-- === END EDIT SECTION: REPORT === -->

																	</p>

																	<p><strong>Hot Flies:&nbsp;</strong>


																		<!-- === BEGIN EDIT SECTION: HOT FLIES === -->

																		<?php echo $sugarcreek_hot_flies; ?>

																		<!-- === END EDIT SECTION: HOT FLIES === -->

																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

	<!-- CTA -->
	<section id="cta" class="wrapper style4">
		<div class="inner">
			<header class="text-center">
				<h2 class="h2"><?php _e($cta_streamReport_intro ); ?></h2>
				<p class="lead text-center text-justify"><?php echo $cta_streamReport_content; ?></p>
			</header>
		</div>
	</section>

<?php get_footer('streamreport');

