<?php
/**
 * Mobile-specific layout for regional reports
 * This file is conditionally included for small viewports only
 */

// Access the same variables that are available in the main template
// No need to redefine them if they're already in the parent scope
?>

<div id="regional-reports-mobile" class="container">
 <h3 class="text-center mb-4">Fishing Reports</h3>

 <!-- Rivers Section -->
 <div class="card mb-3">
	<div class="card-header p-0">
	 <button class="btn btn-link w-100 text-start p-3" type="button"
					 data-bs-toggle="collapse" data-bs-target="#mobile-rivers-content"
					 aria-expanded="false" aria-controls="mobile-rivers-content">
		<strong>Rivers Reports</strong>
		<i class="fas fa-chevron-down float-end mt-1"></i>
	 </button>
	</div>
    <div id="mobile-rivers-content" class="collapse">
        <div class="card-body">
            <div class="report-buttons-mobile">
            <!-- ##fall-river-report -->
            <button class="btn btn-tfs w-100 text-start mb-2" id="fall-river-tab" type="button" data-bs-toggle="modal" data-bs-target="#fall-river-modal">Fall River:&nbsp;&nbsp;
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
            <!-- ##hat-creek-report -->
            <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#hat-creek-modal">Hat Creek:&nbsp;
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
            <!-- ##klamath-river-report -->
            <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#klamath-river-modal">Klamath River:&nbsp
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
            <!-- ##lower-sac-report -->
            <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#lower-sac-modal">Lower Sacramento River:&nbsp
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
            <!-- ##mccloudriver-river-report -->
            <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#mccloud-river-modal">McCloud River:&nbsp
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
            <!-- ##pitriver-river-report -->
            <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#pit-river-modal">Pit River:&nbsp
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
            <!-- ##trinityriver-river-report -->
            <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#trinity-river-modal">Trinity River:&nbsp
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
            <!-- ##upper-sac-report -->
            <button class="btn btn-tfs w-100 text-start mb-2" type="button" data-bs-toggle="modal" data-bs-target="#upper-sac-modal">Upper Sacramento River:&nbsp
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
        </div>
    </div>
 </div>

 <!-- Still Waters Section -->
 <div class="card mb-3">
	<div class="card-header p-0">
	 <button class="btn btn-link w-100 text-start p-3" type="button"
					 data-bs-toggle="collapse" data-bs-target="#mobile-still-waters-content"
					 aria-expanded="false" aria-controls="mobile-still-waters-content">
		<strong>Still Waters Reports</strong>
		<i class="fas fa-chevron-down float-end mt-1"></i>
	 </button>
	</div>
	<div id="mobile-still-waters-content" class="collapse">
	 <div class="card-body">
		<?php // Still waters reports with the same data as desktop version ?>
	 </div>
	</div>
 </div>

 <!-- Private Waters Section -->
 <div class="card mb-3">
	<div class="card-header p-0">
	 <button class="btn btn-link w-100 text-start p-3" type="button"
					 data-bs-toggle="collapse" data-bs-target="#mobile-private-waters-content"
					 aria-expanded="false" aria-controls="mobile-private-waters-content">
		<strong>Private Waters Reports</strong>
		<i class="fas fa-chevron-down float-end mt-1"></i>
	 </button>
	</div>
	<div id="mobile-private-waters-content" class="collapse">
	 <div class="card-body">
		<?php // Private waters reports with the same data as desktop version ?>
	 </div>
	</div>
 </div>
</div>

<style>
    /* Custom styles for mobile reports */
    #v-pills-tab button {
        margin-top: 1rem;
    }
    #regional-reports-mobile .btn-link {
        text-decoration: none;
        color: #333;
    }

    #regional-reports-mobile .card-header {
        background-color: #f8f9fa;
    }

    #regional-reports-mobile .fishing-report {
        border-bottom: 1px solid #eee;
        padding-bottom: 1rem;
    }

    #regional-reports-mobile .fishing-report:last-child {
        border-bottom: none;
    }
</style>

<!-- ##### River Report Modals #### -->

<!-- ##fall-river-modal -->
<div class="modal fade" id="fall-river-modal" tabindex="-1" aria-labelledby="fall-river-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="fall-river-modal-label">Fall River Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $fallriver_report_date . '</div>'; ?>
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
                <?php
                // Include the same content that's in your pill tab content
                $fallriver_report = get_post_meta(get_the_ID(), 'fallriver-report', true);
                if(!empty($fallriver_report)) {
                    echo '<div class="mobile-report">' . $fallriver_report . '</div>';
                    echo '<div class="hot-flies"><b>Hot Flies:</b>' . $fallriver_hot_flies . '</div>';
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##hat-creek-modal -->
<div class="modal fade" id="hat-creek-modal" tabindex="-1" aria-labelledby="hat-creek-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="hat-creek-modal-label">Hat Creek Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $hatcreek_report_update . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
                    <?php if(get_post_meta(get_the_ID(), 'hatcreek-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $hatcreek_closed_checkbox; ?>"><?php echo $hatcreek_closed_message; ?></span>
                    <?php else: ?>
                     <span class="label label-default<?php echo $hatcreek_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $hatcreek_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $hatcreek_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $hatcreek_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $hatcreek_checkbox_great; ?>">Great</span>
                    <?php endif; ?>
                </p>
                <?php
                $hatcreek_report = get_post_meta(get_the_ID(), 'hatcreek-report', true);
                if(!empty($hatcreek_report)) {
                    echo '<div class="mobile-report">' . $hatcreek_report . '</div>';
                    echo '<div><b>Hot Flies:</b>' . $hatcreek_hot_flies . '</div>';
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##klamath-river-modal -->
<div class="modal fade" id="klamath-river-modal" tabindex="-1" aria-labelledby="klamath-river-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="klamath-river-modal-label">Klamath River Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $klamathriver_updated . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
                <?php if(get_post_meta(get_the_ID(), 'klamathriver-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $klamathriver_closed_checkbox; ?>"><?php echo $klamathriver_closed_message; ?></span>
                    <?php else: ?>
                     <span class="label label-default<?php echo $klamathriver_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $klamathriver_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $klamathriver_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $klamathriver_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $klamathriver_checkbox_great; ?>">Great</span>
                    <?php endif; ?>
                </p>
                    <?php
                    $klamathriver_report = get_post_meta(get_the_ID(), 'klamathriver-report', true);
                    if(!empty($klamathriver_report)) {
                        echo '<div class="report">' . $klamathriver_report . '</div>';
                        echo '<div><b>Hot Flies:</b>' . $klamathriver_hot_flies . '</div>';
                    }
                    ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##lower-sac-modal -->
<div class="modal fade" id="lower-sac-modal" tabindex="-1" aria-labelledby="lower-sac-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="lower-sac-modal-label">Lower Sacramento River Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $lowersacramento_updated . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
                    <?php if(get_post_meta(get_the_ID(), 'lowersacramento-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $lowersacramento_closed_checkbox; ?>"><?php echo $lowersacramento_closed_message; ?></span>
                    <?php else: ?>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $lowersacramento_checkbox_great; ?>">Great</span>
                    <?php endif; ?>
                </p>
                <?php
                $lowersacramento_report = get_post_meta(get_the_ID(), 'lowersacramento-report', true);
                if(!empty($lowersacramento_report)) {
                    echo '<div class="report">' . $lowersacramento_report . '</div>';
                    echo '<div><b>Hot Flies:</b>' . $lowersacramento_hot_flies . '</div>';
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##mccloud-river-modal -->
<div class="modal fade" id="mccloud-river-modal" tabindex="-1" aria-labelledby="mccloud-river-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mccloud-river-modal-label">McCloud River Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $mccloudriver_updated . '</div>'; ?>
                <p><b>Fishing conditions:</b>&nbsp;
                    <?php if(get_post_meta(get_the_ID(), 'mccloudriver-closed-checkbox', true) == '-danger') :?>
                     <span class="label label-default<?php echo $mccloudriver_closed_checkbox; ?>"><?php echo $mccloudriver_closed_message; ?></span>
																	<?php else: ?>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_poor; ?>">Poor</span>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_fair; ?>">Fair</span>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_fairgood; ?>">Fair to Good</span>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_good; ?>">Good</span>
                     <span class="label label-default<?php echo $mccloudriver_checkbox_great; ?>">Great</span>
																	<?php endif; ?>
                </p>
                    <?php
                    $mccloudriver_report = get_post_meta(get_the_ID(), 'mccloudriver-report', true);
                    if(!empty($mccloudriver_report)) {
                        echo '<div class="report">' . $mccloudriver_report . '</div>';
                        echo '<div><b>Hot Flies:</b>' . $mccloudriver_hot_flies . '</div>';
                    }
                    ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ##pit-river-modal -->
<div class="modal fade" id="pit-river-modal" tabindex="-1" aria-labelledby="pit-river-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="pit-river-modal-label">Pit River Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $pitriver_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
					<?php if(get_post_meta(get_the_ID(), 'pitriver-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $pitriver_closed_checkbox; ?>"><?php echo $pitriver_closed_message; ?></span>
					<?php else: ?>
						<span class="label label-default<?php echo $pitriver_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $pitriver_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $pitriver_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $pitriver_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $pitriver_checkbox_great; ?>">Great</span>
					<?php endif; ?>
				</p>
				<?php
				$pitriver_report = get_post_meta(get_the_ID(), 'pitriver-report', true);
				if(!empty($pitriver_report)) {
					echo '<div class="report">' . $pitriver_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $pitriver_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##trinity-river-modal -->
<div class="modal fade" id="trinity-river-modal" tabindex="-1" aria-labelledby="trinity-river-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="trinity-river-modal-label">Trinity River Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $trinityriver_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
					<?php if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $trinityriver_closed_checkbox; ?>"><?php echo $trinityriver_closed_message; ?></span>
					<?php else: ?>
						<span class="label label-default<?php echo $trinityriver_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $trinityriver_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $trinityriver_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $trinityriver_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $trinityriver_checkbox_great; ?>">Great</span>
					<?php endif; ?>
				</p>
				<?php
				$trinityriver_report = get_post_meta(get_the_ID(), 'trinityriver-report', true);
				if(!empty($trinityriver_report)) {
					echo '<div class="report">' . $trinityriver_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $trinityriver_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<!-- ##upper-sac-modal -->
<div class="modal fade" id="upper-sac-modal" tabindex="-1" aria-labelledby="trinity-river-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="upper-sac-modal-label">Upper Sacramento River Report</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php echo '<div class="report-date"><strong>Updated:&nbsp;</strong>' . $uppersac_updated . '</div>'; ?>
				<p><b>Fishing conditions:</b>&nbsp;
					<?php if(get_post_meta(get_the_ID(), 'trinityriver-closed-checkbox', true) == '-danger') :?>
						<span class="label label-default<?php echo $uppersac_closed_checkbox; ?>"><?php echo $uppersac_closed_message; ?></span>
					<?php else: ?>
						<span class="label label-default<?php echo $uppersac_checkbox_poor; ?>">Poor</span>
						<span class="label label-default<?php echo $uppersac_checkbox_fair; ?>">Fair</span>
						<span class="label label-default<?php echo $uppersac_checkbox_fairgood; ?>">Fair to Good</span>
						<span class="label label-default<?php echo $uppersac_checkbox_good; ?>">Good</span>
						<span class="label label-default<?php echo $uppersac_checkbox_great; ?>">Great</span>
					<?php endif; ?>
				</p>
				<?php
				$uppersac_report = get_post_meta(get_the_ID(), 'trinityriver-report', true);
				if(!empty($uppersac_report)) {
					echo '<div class="report">' . $uppersac_report . '</div>';
					echo '<div><b>Hot Flies:</b>' . $uppersac_hot_flies . '</div>';
				}
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
