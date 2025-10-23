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
			<a href="<?php echo base_url();?>k-plast">K-Plast Patches</a>
			<span class="separator"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<a href="<?php echo base_url();?>k-plast-patch"><strong>K-Plast Patch</strong></a>
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
								<h1 class="d-none">Achieve Lasting Freedom with Nitof 7 mg Nicotine Patch</h1>
								<h4 class="patients_info_title">For Patients</h4>
								<h3>K-Plast Patch</h3>
								<p>Your Step Towards a Pain-Free Life</p>
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
								<h3>K-Plast Patch</h3>
								<p>Trusted Solution for Consistent Pain Relief</p>
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
						<p>K-Plast is a medicated patch that helps relieve pain steadily and effectively. It works by delivering medicine directly through your skin into your bloodstream, so you don’t have to take pills. This method helps reduce stomach problems and other side effects that can happen with oral pain medicines.</p>
						
							
							
							
						<h5>Use K-Plast for:</h5>
						<ul class="pl-5">
							<li>Post-surgery pain</li>
							<li>Muscle aches, sprains, or strains</li>
							<li>Chronic pain that lasts all day</li>
						</ul>
						<h5>Storage & Precautions:</h5>
						<ul class="pl-5">
							<li><strong>Storage:</strong> Keep in a cool, dry place, away from direct sunlight and heat.</li>
							<li>
							    <strong>Precautions: </strong>
							    <ul class="pl-5">
							        <li>For external use only.</li>
							        <li>Avoid applying to broken, irritated, or infected skin.</li>
							        <li>Keep out of reach of children.</li>
							        <li>Do not use if allergic to ketoprofen or other NSAIDs</li>
							        <li>Consult your doctor before use if you have a history of liver or kidney problems.</li>
							        <li>Remove the patch before undergoing MRI scans.</li>
							        
							    </ul>
							</li>
						</ul>
						<h5>Site of Application </h5>
						<ul class="pl-5">
						    <li><strong>Clean, dry skin</strong> – make sure the area is dry.</li>
						    <li><strong>Where to put it</strong> – upper arm, chest, or back.</li>
						    <li><strong>Don’t use on</strong> – broken, red, or scarred skin.</li>
						</ul>
						<h5>Dosage & Administration</h5>
						<ul class="pl-5">
						    <li>One patch to be applied and left in place for 24 hours.</li>
						    <li>Follow your healthcare provider’s instructions for the duration of use.</li>
						    <li>After 24 hours, remove the patch and apply a new one to a different skin site to avoid irritation.</li>
						</ul>
						<h5>Benefits (Why K-Plast Patch is Good for You)</h5>
						<ul class="pl-5">
						    <li>Controls pain with steady drug release for 24 hours</li>
						    <li>Avoids GI, renal, and liver side effects common to oral NSAIDs</li>
						    <li>Bypasses first-pass metabolism for better bioavailability</li>
						    <li>Improves patient compliance with once-daily use </li>
						    <li>Easy termination by removing the patch</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 product_img d-none">
					<img class="w-100 prodcutbnr sticky-top"
						src="<?php echo base_url();?>assets/img/nitof_7.png?Version=<?php echo Version; ?>"
						alt="nitof_14">
				</div>
			</div>
		</div>

		<section class="faq_section" id="faq">
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
														1. Can I use K-Plast if I have a history of stomach ulcers?
													</a>
												</h5>
											</div>
											<div id="collapse-1" class="collapse show" data-parent="#accordion"
												aria-labelledby="qstn-1" style="">
												<div class="card-body">
													<p>Consult your doctor before using K-Plast if you have a history of stomach ulcers or gastrointestinal issues.</p>
												</div>
											</div>
										</div>
										<div class="cardf">
											<div class="card-header borderPurpose w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
														2. Is K-Plast suitable for children?
													</a>
												</h5>
											</div>
											<div id="collapse-2" class="collapse" data-parent="#accordion"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>K-Plast is generally intended for adult use. Consult a pediatrician for use in children.</p>
												</div>
											</div>
										</div>
										 <div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														3. Can I use K-Plast with other medications? 
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Inform your doctor about all other medications you are taking, as interactions may occur.</p>
												</div>
											</div>
										</div>
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-4" aria-expanded="false" aria-controls="collapse-2">
														4. What should I do if I experience skin irritation? 
													</a>
												</h5>
											</div>
											<div id="collapse-4" class="collapse " data-parent="#accordion"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Remove the patch and consult your healthcare provider if irritation occurs.</p>
												</div>
											</div>
										</div>
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-5" aria-expanded="false" aria-controls="collapse-2">
														5. Can I apply the patch to my face or near my eyes?
													</a>
												</h5>
											</div>
											<div id="collapse-5" class="collapse " data-parent="#accordion"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Avoid applying the patch to the face, eyes, or mucous membranes.</p>
												</div>
											</div>
										</div>
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
										<img src="<?php echo base_url();?>assets/img/nitof_14.png?Version=<?php echo Version; ?>"
											alt="how_nifof_works_img1">
									</div>
									<div class="nitof_content">
										<h5 style="color: #000">Nitof nicotine patch 14 mg</h5>
										<p>Mid-way support for continued progress</p>
										<div class="buy_now_section">
											<a class="primary_btn" href="<?php echo base_url();?>nitof-14-mg-nicotine-patch">Patient
												Guide</a>
											<a class="primary_btn" href="<?php echo base_url();?>nitof-14-mg-nicotine-patch">Doctor
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
						<p><strong>Active Ingredient:</strong>Ketoprofen 30 mg per patch </p>
						
						
						
						<!--<p>Nitof 7 mg is a low-dose nicotine patch formulated for the final stage of nicotine withdrawal. It is intended for patients who have successfully completed earlier stages of NRT (21 mg and 14 mg). This patch supports long-term cessation by gradually eliminating nicotine dependence.</p>-->
						<h5>Mechanism of Action: </h5>
						<ul class="pl-5">
						    <li>Inhibits COX enzymes, reducing prostaglandin synthesis to decrease inflammation and pain.</li>
						    <li>Transdermal delivery provides steady plasma drug levels over 24 hours, avoiding peaks and troughs seen with oral therapy.</li>
						    <li>Minimizes gastrointestinal irritation and systemic exposure. </li>
						 
						</ul>
						
						<h5>Indications: </h5>
						<ul class="pl-5">
							<li>Post-operative pain management</li>
							<li>Chronic low back pain</li>
							<li>Sprains, strains, and traumatic injuries</li>
							<li>Muscle spasms and localized inflammatory conditions</li>
							<li>Patients requiring continuous analgesia or unable to take oral therapy</li>
						</ul>
						
						
						<h5>Dosage & Administration: </h5>
						<ul class="pl-5">
							<li>Monitor for <b>skin reactions</b>; discontinue if severe irritation occurs.</li>
							<li>Can be <b>combined with other analgesics</b> if additional pain control is needed, considering total NSAID exposure. </li>
							<li>No further NRT required after completion</li>
						</ul>
						<h5>Site of Application:</h5>
						<p>Apply on clean, dry, hairless skin of the upper arm, back, or chest; avoid broken, irritated, or scarred area</p>
						<h5>Pharmacokinetics: </h5>
						<ul class="pl-5">
							<li><strong>Absorption:</strong> Gradual and controlled through the skin over 24 hours.</li>
							<li><strong>Distribution:</strong> Maintains uniform plasma concentrations. </li>
							<li><strong>Metabolism:</strong> Minimal first-pass hepatic metabolism. </li>
							<li><strong>Excretion:</strong> Primarily renal. </li>
						</ul>
						<h5>Contraindications: </h5>
						<ul class="pl-5">
							<li>Do <b>not</b> use if allergic to ketoprofen or other NSAIDs</li>
							<li>Avoid in patients with <b>active stomach ulcers, bleeding, or serious GI problems</b></li>
							<li>Avoid in <b>severe liver, kidney, or heart disease</b> </li>
							<li>Use with caution in <b>asthma</b> or NSAID-sensitive patients </li>
							<li><strong>Pregnancy or breastfeeding:</strong> only if benefits outweigh risks </li>
						</ul>
						
						
						<!--<h3 class="sub">Patient Suitability</h3>-->
						<h5>Clinical Evidence: </h5>
						<ul class="pl-5">
							<li>Comparable efficacy to oral ketoprofen for pain relief in post-operative, musculoskeletal, and dental pain.</li>
							<li>Reduced gastrointestinal and systemic side effects versus oral NSAIDs.</li>
							<li>Hot Melt Technology ensures superior patch adhesion and consistent drug delivery.</li>
							<li>Studies report <b>high patient adherence</b> due to 24-hour sustained release and ease of use. </li>
						</ul>
						
						<h5>Storage & Handling</h5>
						<ul class="pl-5">
							<li>Store at room temperature, ≤25°C, in a dry area. </li>
							<li>Avoid direct sunlight, heat, and moisture.</li>
							<li>Discard damaged patches responsibly.</li>
						</ul>
						<h5>Supporting Tools & Resources</h5>
						<ul class="pl-5">
							<li>Patient leaflets with application instructions.</li>
							<li>Pain tracking charts to monitor therapy progress.</li>
							<li>Clinic posters to encourage proper patch use and adherence.</li>
							<li><b>MantraBot:</b> Supports reminders, adherence tracking, and post-therapy guidance.</li>
						</ul>
					</div>
				</div>
				<div class="col-md-4 product_img d-none">
					<img class="w-100 prodcutbnr sticky-top"
						src="<?php echo base_url();?>assets/img/nitof_7.png?Version=<?php echo Version; ?>"
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
														1. Is follow-up needed after Nitof 7 mg ends?
													</a>
												</h5>
											</div>
											<div id="collapse-1" class="collapse show" data-parent="#accordion2"
												aria-labelledby="qstn-1" style="">
												<div class="card-body">
													<p>Yes – schedule check-ins to reinforce behavioral change.</p>
												</div>
											</div>
										</div>
										<div class="cardf">
											<div class="card-header borderPurpose w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
														2. Can patients continue past 12 weeks?
													</a>
												</h5>
											</div>
											<div id="collapse-2" class="collapse" data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p>Only under physician supervision; taper extension may be considered case-by-case.</p>
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
										<img src="<?php echo base_url();?>assets/img/nitof_14.png?Version=<?php echo Version; ?>"
											alt="how_nifof_works_img1">
									</div>
									<div class="nitof_content">
										<h5 style="color: #000">Nitof nicotine patch 14 mg</h5>
										<p>Mid-way support for continued progress</p>
										<div class="buy_now_section">
											<a class="primary_btn" href="<?php echo base_url();?>nitof-14-mg-nicotine-patch">Patient
												Guide</a>
											<a class="primary_btn" href="<?php echo base_url();?>nitof-14-mg-nicotine-patch">Doctor
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