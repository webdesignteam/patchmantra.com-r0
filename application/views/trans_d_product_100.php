<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.breadcrumb-wrapper.scrolled .breadcrumb {
			width: 640px;
		}
		.breadcrumb-wrapper .breadcrumb {
			width: 760px;
		}
		.faq_img {
			display: flex;
			justify-content: end;
		}
		.tab-buttons {
			padding-bottom: 0px;
			display: flex;
			justify-content: center;
			margin: 30px 0 20px 0px;
		}
		.tab-button {
			padding: 16px 30px;
			border: none;
			transition: background-color 0.3s;
			font-size: 14px;
			border-radius: 10px;
			background: #fff;
		}
		.tab-buttons .buttons {
			background: #fff;
			border-radius: 10px;
			display: flex;
			justify-content: center;
			align-items: center;
			gap: 4px;
		}
		.tab-button.active {
			background-color: rgba(97, 51, 35, 1);
			color: #fff;
			border-radius: 8px;
			box-shadow: 0px 0px 12.2px 0px #0000001C;
		}
		.faq_section {
    padding: 50px 0px 50px 0px;
}
		.therapy_details{
			padding-bottom: 50px;
		}
		#customers_content .faq_section .faq_style {
    display: flex
;
    gap: 20px;
    flex-direction: column;
    /*align-items: center;*/
    justify-content: center;
}
	</style>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="loading"></div>
	<!-- Nav Menu  -->
	<?php $this->load->view('layout/nav');  ?>
	<div class="breadcrumb-wrapper">
		<div class="breadcrumb">
			<a href="<?php echo base_url();?>">Home</a>
			<span class="separator"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<a href="<?php echo base_url();?>explore-our-patches">Explore Our Patches</a>
			<span class="separator"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<a href="<?php echo base_url();?>trans-d">Trans-D Patches</a>
			<span class="separator"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<a href="<?php echo base_url();?>trans-d-100-patch"><strong>Trans-D 100mg Patch</strong></a>
		</div>
	</div>
	<div class="nitof_products_details_section">
		<img class="w-100 prodcutbnr destop_block"
			src="<?php echo base_url();?>assets/img/nitof_bg.png?Version=<?php echo Version; ?>" alt="nitof_bg">
		<img class="w-100 prodcutbnr mb_display"
			src="<?php echo base_url();?>assets/img/nitof_bg_mobile.png?Version=<?php echo Version; ?>" alt="nitof_bg">
		<div class="w-100 mdbanner_content">
			    <div class="tab-buttons">
				<div class="buttons">
					<div class="buttons">
                      <button class="tab-button customers <?php echo ($_GET['tab'] ?? 'patients') == 'patients' ? 'active' : ''; ?>">
                        For Patients
                      </button>
                      <button class="tab-button doctors <?php echo ($_GET['tab'] ?? 'patients') == 'doctors' ? 'active' : ''; ?>">
                        For Doctors
                      </button>
                    </div>
				</div>
			</div>
			<div id="customers" class="tab-content">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="patients_info">
								<h1 class="d-none">Stay Smoke-Free with Nitof 14 mg Nicotine Patch</h1>
								<h4 class="patients_info_title">For Patients</h4>
								<h3>Trans-D Patch</h3>
								<p>Helping You Live Pain-Free Every Day.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="doctors" class="tab-content" style="display:none;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="patients_info">
								<h2 class="patients_info_title">For Doctors</h2>
								<h3>Trans-D Patch</h3>
								<p>Simplifying Daily Pain Management</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="customers_content" class="tab-content">
		<div class="container">
			<hr>
			<div class="row">
				<div class="col-md-8">
					<div class="nitof_content_details">
						<h5>Description</h5>
						<p>Trans-D Patch is an innovative transdermal therapy that delivers medicine directly through the skin into the bloodstream, bypassing the stomach and liver. It provides steady, all-day pain relief with just one patch per day, making therapy convenient and hassle-free.</p>
						<h5>Available Strengths:</h5>
						<ul class="pl-5">
						    <li>Trans D-100 mg</li>
						    <li>Trans D-200mg</li>
						</ul>
						
						
						<!--<p><strong>Active: </strong>Nicotine USP - 14 mg</p>-->
						<!--<p><strong>Inactive: </strong>Acrylic adhesive, release liner, polyester backing</p>-->
						<h5>Site of Application</h5>
						<ul class="pl-5">
						    <li><strong>Clean, dry skin</strong> – make sure the area is dry.</li>
						    <li><strong>Where to put it</strong> – upper arm, chest, or back. </li>
						    <li><strong>Don’t use on</strong> – broken, red, or scarred skin.</li>
						</ul>
						
						
						<h5>Dosage & Administration</h5>
						<ul class="pl-5">
						    <li><b>One patch a day</b> – put it on in the morning. </li>
						    <li><b>Take off the old patch</b> before putting on a new one.</li>
						    <li><b>Use a different spot</b> each time to protect your skin. </li>
						</ul>
						
						
						
						<h5>Storage & Precautions</h5>
						<ul class="pl-5">
							<li>Keep it cool – store below 25°C (77°F), away from sunlight and moisture.</li>
							<li>Keep out of reach of children.</li>
							<li>Don’t cut or change the patch.</li>
							<li>Remove before MRI or X-ray if needed.</li>
							<li>Ask your doctor if you are pregnant, breastfeeding, or have skin problems. </li>
						</ul>
						<h5>Benefits Why Trans-D Patch is Good for You</h5>
						<ul class="pl-5">
							<li><strong>All-day relief</strong> – one patch works 24 hours</li>
							<li><strong>Steady pain control</strong> – works slowly and evenly.</li>
							<li><strong>Easy on your stomach</strong> – gentler than taking tablets.</li>
							<li><strong>No pills to remember</strong> – just one patch a day.</li>
							<li><strong>Comfortable and hidden</strong> – you can wear it under clothes.</li>
							<li><strong>Stays in place</strong> – won’t fall off easily.</li>
							<li><strong>Flexible use</strong> – can be removed anytime</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 product_img d-none">
					<img class="w-100 prodcutbnr sticky-top"
						src="<?php echo base_url();?>assets/img/nitof_14.png?Version=<?php echo Version; ?>"
						alt="nitof_14">
				</div>
			</div>
		</div>

		<section class="faq_section " id="faq">
			<div class="faq_section_bacground">
				<div class="container">
					<div class="row">
						<div class="col-md-12 faq_details">
							<h3>Frequently Asked Questions ?</h3>
						</div>
						<div class="col-md-12">
							<div id="accordion" class="mt_3em faq">
								<div class="row">
									<div class="col-md-6 faq_style padding">
										<div class="cardf">
											<div class="card-header borderPurpose w-100" onClick="faq1()" id="qstn-1">
												<h5 class="mb-0	forText hdng">
													<a class="collapsed first_anchor" role="button" data-toggle="collapse"
														href="#collapse-1" aria-expanded="true" aria-controls="collapse-2">
														Can I shower or bathe with the patch on?
													</a>
												</h5>
											</div>
											<div id="collapse-1" class="collapse show" data-parent="#accordion"
												aria-labelledby="qstn-1" style="">
												<div class="card-body">
													<p>Yes, you can. The patch won’t come off with water, but <b>don’t rub or scrub it</b>.</p>
												</div>
											</div>
										</div>
										 <div class="cardf">
											<div class="card-header borderPurpose w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
														Can I use more than one patch at a time?
													</a>
												</h5>
											</div>
											<div id="collapse-2" class="collapse" data-parent="#accordion"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>No, use only <b>one patch per 24 hours</b> unless prescribed by your doctor.</p>
												</div>
											</div>
										</div>
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														What if the patch falls off?
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Replace it immediately or apply a new patch to a different clean, dry site.</p>
												</div>
											</div>
										</div>
										
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-4" aria-expanded="false" aria-controls="collapse-2">
														Can I use the patch on sensitive skin?
													</a>
												</h5>
											</div>
											<div id="collapse-4" class="collapse " data-parent="#accordion"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Avoid broken, irritated, or allergic-prone areas. Consult your doctor if unsure.</p>
												</div>
											</div>
										</div>
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-5" aria-expanded="false" aria-controls="collapse-2">
														How soon will I feel relief?
													</a>
												</h5>
											</div>
											<div id="collapse-5" class="collapse " data-parent="#accordion"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Most patients experience <b>steady relief within a few hours</b> of application.</p>
												</div>
											</div>
										</div>
										
										
										
										
										
									</div>
									<div class="col-md-6 faq_style backgroung">									
										<div class="faq_img">
											<img class="w-75"
												src="<?php echo base_url();?>assets/img/faq_img2.png?Version=<?php echo Version; ?>"
												alt="Nitof">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="therapy_plan d-none">
			<div class="container">
				<div class="row">
					<div class="col-md-12 therapy_details">
						<h3>Explore Other Nitof Patch Variants</h3>						
					</div>
					<div class="col-md-12 nitof_product_details">
						<div class="row d-flex justify-content-center">
						    <div class="col-md-4">
								<div class="nitof_details">
									<div class="nitof_img">
										<img src="<?php echo base_url();?>assets/img/nitof_7.png?Version=<?php echo Version; ?>"
											alt="how_nifof_works_img1">
									</div>
									<div class="nitof_content">
										<h5 style="color: #000">Nitof nicotine patch 7 mg</h5>
										<p>Final step to a smoke-free life</p>
										<div class="buy_now_section">
											<a class="primary_btn" href="<?php echo base_url();?>nitof-7-mg-nicotine-patch">Patient
												Guide</a>
											<a class="primary_btn" href="<?php echo base_url();?>nitof-7-mg-nicotine-patch">Doctor
												Guide</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="nitof_details">
									<div class="nitof_img">
										<img src="<?php echo base_url();?>assets/img/nitof_21.png?Version=<?php echo Version; ?>"
											alt="how_nifof_works_img1">
									</div>
									<div class="nitof_content">
										<h5 style="color: #000">Nitof nicotine patch 21 mg</h5>
										<p>Start your quit journey here</p>
										<div class="buy_now_section">
											<a class="primary_btn" href="<?php echo base_url();?>nitof-21-mg-nicotine-patch">Patient
												Guide</a>
											<a class="primary_btn" href="<?php echo base_url();?>nitof-21-mg-nicotine-patch">Doctor
												Guide</a>
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
	
	
	
	
	
	<div id="doctors_content" class="tab-content" style="display:none;">
		<div class="container">
			<hr>
			<div class="row">
				<div class="col-md-8">
					<div class="nitof_content_details">
					    <p><strong>Active ingredient:</strong> Diclofenac Diethylamine </p>
					    <p><strong>Strength per patch:</strong> 100 mg (Trans-D-100) / 200 mg (Trans-D 200) </p>
						<h5>Mechanism of Action</h5>
						<p>Trans-D Patch provides <b>gradual, controlled absorption</b> of the active ingredient into systemic circulation. This ensures <b>steady analgesic effect</b>, avoids peaks and troughs seen with oral therapy, and reduces gastrointestinal irritation.</p>
						
						<h5>Indications</h5>
						<ul class="pl-5">
							<li>Acute and chronic pain management</li>
							<li>Post-operative pain</li>
							<li>Musculoskeletal pain and localized inflammatory conditions</li>
							<li>Patients needing <b>continuous analgesia</b> or unable to take oral therapy </li>
						</ul>
						<h5>Site of Application</h5>
						<ul class="pl-5">
							<li>Upper arm, chest, or back</li>
							<li>Clean, dry, and hairless skin preferred</li>
							<li>Avoid broken, irritated, or scarred areas</li>
						</ul>
						
						<h5>Pharmacokinetics</h5>
						<ul class="pl-5">
							<li><strong>Absorption:</strong> Gradual and steady through the skin </li>
							<li><strong>Distribution:</strong> Stable plasma concentrations over 24 hours</li>
							<li><strong>Metabolism:</strong> Minimal first-pass metabolism </li>
							<li><strong>Excretion:</strong> Primarily renal </li>
						</ul>
						<h5>Contraindications & Warnings</h5>
						<ul class="pl-5">
							<li>Hypersensitivity to patch ingredients</li>
							<li>Severe dermatologic conditions at the application site </li>
							<li>Caution in hepatic or renal impairment</li>
							<li>Use in pregnancy or lactation only if <b>benefit outweighs risk</b>.</li>
						</ul>
						<h5>Clinical Evidence</h5>
						<ul class="pl-5">
							<li>Comparable efficacy to oral NSAIDs for pain control</li>
							<li>Reduced gastrointestinal side effects versus oral therapy</li>
							<li>High patient adherence and satisfaction reported.</li>
						</ul>
						<h5>Storage & Handling</h5>
						<ul class="pl-5">
							<li>Store at <b>≤25°C</b>, away from sunlight and moisture</li>
							<li>Dispose of used patches responsibly</li>
							<!--<li>Fold used patch and discard safely</li>-->
						</ul>
						<h5>Supporting Tools & Resources</h5>
						<ul class="pl-5">
							<li>Easy patient guides & leaflets for patch use</li>
							<li>Simple pain tracking charts for monitoring progress</li>
							<li>Clinic posters to encourage proper use and adherence</li>
							<li>MantraBot : Enables patient reminders, adherence tracking, and post-therapy support </li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 product_img d-none">
					<img class="w-100 prodcutbnr sticky-top"
						src="<?php echo base_url();?>assets/img/nitof_14.png?Version=<?php echo Version; ?>"
						alt="nitof_21">
				</div>
			</div>
		</div>

		<section class="faq_section d-none" id="faq">
			<div class="faq_section_bacground">
				<div class="container">
					<div class="row">
						<div class="col-md-12 faq_details">
							<h3>Frequently Asked Questions ?</h3>
						</div>
						<div class="col-md-12">
							<div id="accordion2" class="mt_3em faq">
								<div class="row">
									<div class="col-md-6 faq_style padding">
										<div class="cardf">
											<div class="card-header borderPurpose w-100" onClick="faq1()" id="qstn-1">
												<h5 class="mb-0	forText hdng">
													<a class="collapsed first_anchor" role="button" data-toggle="collapse"
														href="#collapse-1" aria-expanded="true" aria-controls="collapse-2">
														1. What if the patient still experiences cravings?
													</a>
												</h5>
											</div>
											<div id="collapse-1" class="collapse show" data-parent="#accordion2"
												aria-labelledby="qstn-1" style="">
												<div class="card-body">
													<p>Review compliance, consider counseling, and assess if they need prolonged use of 21 mg.</p>
												</div>
											</div>
										</div>
										<div class="cardf">
											<div class="card-header borderPurpose w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
														2. Is it okay to skip to 7 mg early?
													</a>
												</h5>
											</div>
											<div id="collapse-2" class="collapse" data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Not advised unless patient is symptom-free; abrupt tapering may cause relapse.</p>
												</div>
											</div>
										</div>
										<!-- <div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														3. Can Nitof be used in pregnancy?
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Only if benefit outweighs risk; behavioral therapy preferred as first line.</p>
												</div>
											</div>
										</div> -->
									</div>
									<div class="col-md-6 faq_style backgroung">									
										<div class="faq_img">
											<img class="w-75"
												src="<?php echo base_url();?>assets/img/faq_img2.webp?Version=<?php echo Version; ?>"
												alt="Nitof">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="therapy_plan d-none">
			<div class="container">
				<div class="row">
					<div class="col-md-12 therapy_details">
						<h3>Explore Other Nitof Patch Variants</h3>						
					</div>
					<div class="col-md-12 nitof_product_details">
						<div class="row d-flex justify-content-center">
						    <div class="col-md-4">
								<div class="nitof_details">
									<div class="nitof_img">
										<img src="<?php echo base_url();?>assets/img/nitof_7.png?Version=<?php echo Version; ?>"
											alt="how_nifof_works_img1">
									</div>
									<div class="nitof_content">
										<h5 style="color: #000">Nitof nicotine patch 7 mg</h5>
										<p>Final step to a smoke-free life</p>
										<div class="buy_now_section">
											<a class="primary_btn" href="<?php echo base_url();?>nitof-7-mg-nicotine-patch">Patient
												Guide</a>
											<a class="primary_btn" href="<?php echo base_url();?>nitof-7-mg-nicotine-patch">Doctor
												Guide</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="nitof_details">
									<div class="nitof_img">
										<img src="<?php echo base_url();?>assets/img/nitof_21.png?Version=<?php echo Version; ?>"
											alt="how_nifof_works_img1">
									</div>
									<div class="nitof_content">
										<h5 style="color: #000">Nitof nicotine patch 21 mg</h5>
										<p>Start your quit journey here</p>
										<div class="buy_now_section">
											<a class="primary_btn" href="<?php echo base_url();?>nitof-21-mg-nicotine-patch">Patient
												Guide</a>
											<a class="primary_btn" href="<?php echo base_url();?>nitof-21-mg-nicotine-patch">Doctor
												Guide</a>
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
	
	<?php $this->load->view('layout/footer');  ?>
	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
	<?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
	<?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
	<?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
	<script>
		window.addEventListener("scroll", function() {
			const breadcrumbWrapper = document.querySelector(".breadcrumb-wrapper");
			if (window.scrollY > 50) {
				breadcrumbWrapper.classList.add("scrolled");
			} else {
				breadcrumbWrapper.classList.remove("scrolled");
			}
		});
	</script>
	<script>
		$(document).ready(function() {
			$(".tab-button").click(function() {
				var tabId = $(this).hasClass("customers") ? "customers" : "doctors";
				// Hide all tab contents
				$("#customers, #customers_content, #doctors, #doctors_content").hide();
				// Remove active class from all buttons
				$(".tab-button").removeClass("active");
				// Show the selected tab + its content
				$("#" + tabId).show();
				$("#" + tabId + "_content").show();
				// Make the clicked button active
				$(this).addClass("active");
			});
		});
	</script>
	<script>
		$(document).ready(function() {
			$("#close").click(function() {
				$("#video_model").hide(300);
			});
			var url1 = $("#Video_1").attr('src');
			$("#myModal1").on('hide.bs.modal', function() {
				$("#Video_1").attr('src', '');
			});
			$("#myModal1").on('show.bs.modal', function() {
				$("#Video_1").attr('src', url1);
			});
			var url2 = $("#Video_2").attr('src');
			$("#myModal2").on('hide.bs.modal', function() {
				$("#Video_2").attr('src', '');
			});
			$("#myModal2").on('show.bs.modal', function() {
				$("#Video_2").attr('src', url2);
			});
		});
	</script>
</body>
</html>