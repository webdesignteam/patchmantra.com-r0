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
		.how_nitof_works .how_nitof_works_content {
		    display: flex;
		    flex-direction: column;
		    align-items: unset !important;
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
			<a href="<?php echo base_url();?>hetriva">Hetriva Patches</a>
			<span class="separator"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<a href="<?php echo base_url();?>hetriva-9-patch"><strong>Hetriva 9 Patches</strong></a>
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
								<h3>Hetriva Patch</h3>
								<p>Your Daily Partner for a Stronger Memory</p>
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
								<h3>Hetriva Patch</h3>
								<p>Reliable Cognitive Care for Your Patients</p>
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
						<h5>What is Hetriva Patch?</h5>
						<p>Hetriva is a patch you apply once a day to improve <b>memory, thinking, and behavior</b> in people with mild to moderate dementia from <b>Alzheimer’s or Parkinson’s disease</b>.</p>
						<h5>Site of Application</h5>
						<ul class="pl-5">
						    <li>You can apply the Hetriva patch to your upper back, chest, or upper arm. It should be applied once a day.</li>
						</ul>
						<h5>Dosage & Administration</h5>
						<p>The typical dosage is as follows:</p>
						<ul class="pl-5">
						    <li><strong>Initiate: </strong>9 mg patch</li>
						    <li><strong>Maintenance: </strong>18 mg patch (after 4 weeks)</li>
						    <li><strong>Continue: </strong>27 mg patch (after 4 weeks)</li>
						</ul>
						<h5>Storage & Precautions</h5>
						<p><strong>Storage: </strong></p>
						<p>Store the patch in a <b>cool, dry place below 25°C</b> and keep it sealed until use. </p>
						<p><strong>Additional Precautions:</strong></p>
						<ul class="pl-5">
						    <li>Keep <b>out of reach of children</b>.</li>
						    <li>Do <b>not apply</b> on broken, inflamed, or scarred skin.</li>
						    <li>Replace immediately if a patch <b>falls off</b>.</li>
						    <li>If missed for <b>more than 3 days</b>, consult your doctor.</li>
						    <li>Tell your doctor <b>if pregnant, breastfeeding, or have other health problems</b>.</li>
						    <li>Do <b>not use</b> if allergic to <b>rivastigmine or similar patches</b>.</li>
						</ul>
						<h5>Benefits</h5>
						<ul class="pl-5">
							<li>Supports <b>memory and daily functioning</b></li>
							<li>Improves <b>thinking and attention</b></li>
							<li>Reduces <b>confusion and behavioral changes</b></li>
							<li>Fewer stomach side effects than oral pills</li>
							<li>Easy <b>once-daily use</b></li>
							<li>Continuous delivery for <b>steady cognitive support</b></li>
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
		
		<section class="faq_section " id="faq">
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
														1. What is Hetriva Patch?
													</a>
												</h5>
											</div>
											<div id="collapse-1" class="collapse show" data-parent="#accordion2"
												aria-labelledby="qstn-1" style="">
												<div class="card-body">
													<p>A once-daily patch to support memory, thinking, and behavior in mild to moderate dementia (Alzheimer’s or Parkinson’s).</p>
												</div>
											</div>
										</div>
										<div class="cardf">
											<div class="card-header borderPurpose w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
														2. Who Can Use It?
													</a>
												</h5>
											</div>
											<div id="collapse-2" class="collapse" data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
												    <ul class="pl-5">
												        <li>Patients with mild to moderate dementia.</li>
												        <li>Those who have difficulty swallowing pills.</li>
												        <li>Patients who prefer a once-daily treatment.</li>
												    </ul>
													<p>️ Always consult your doctor before use.</p>
												</div>
											</div>
										</div>
										 <div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														3. How to apply?
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p> Place on <b>upper back, chest, or upper arm</b>. Wash hands before and after.</p>
												</div>
											</div>
										</div>
										
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														4. Who should avoid Hetriva Patch?
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p> If you’re allergic to Hetriva Patch or similar patches, pregnant or breastfeeding, or have certain health problems, it’s best to check with your doctor first.</p>
												</div>
											</div>
										</div>
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														5. Is Hetriva Patch safe for long-term use? 
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p> Yes, under medical supervision. Long-term use helps maintain cognitive function and daily activities.</p>
												</div>
											</div>
										</div>
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														6. What are the most common side effects of Hetriva Patch?
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p> You might notice mild skin redness or itching, slight nausea, less hunger than usual, headache, or feeling dizzy</p>
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

	</div>
	
	
	
	
	
	
	
	
	<div id="doctors_content" class="tab-content" style="display:none;">
		<div class="container">
			<hr>
			<div class="row">
				<div class="col-md-8">
					<div class="nitof_content_details">
						<h5>Product Overview:</h5>
						<p>The Hetriva Transdermal Patch is a brand of <b>Rivastigmine</b>, a medicine used to treat dementia.</p>
						<p><strong>Composition: </strong>Each patch contains Rivastigmine in dosages of 9, 18, and 27 mg.</p>
						<h5>Mechanism of Action:</h5>
						<ul class="pl-5">
						    <li><strong>Dual inhibition: </strong>Rivastigmine blocks both acetylcholinesterase and butyrylcholinesterase, boosting acetylcholine levels in the brain and improving cognitive function.</li>
						</ul>
						<h5>Pharmacokinetics:</h5>
						<ul class="pl-5">
							<li><strong>Bioavailability: </strong>About 60-72% of the medicine is absorbed into the body.</li>
							<li><strong>Metabolism: </strong>The medicine is processed by the liver.</li>
							<li><strong>Elimination: </strong>The body gets rid of the medicine in about 2 hours, and 97% of it is excreted in urine.</li>
						</ul>
						<h5>Dosing & Administration:</h5>
						<p>The Hetriva patch is prescribed in a step-up or "titration" process:</p>
						<ul class="pl-5">
							<li><b>Start:</b> Use the <b>9 mg patch</b> to begin treatment. </li>
							<li><b>Maintenance:</b> After 4 weeks, the dosage is increased to the <b>18 mg patch</b>.</li>
							<li><b>Continue:</b> After another 4 weeks, the dosage can be increased to the <b>27 mg patch</b>.</li>
						</ul>
						<p><b>Note:</b> For severe GI side effects or if treatment is missed >3 days, pause or restart with the 9 mg patch.</p>
						<h5>Switching from Oral to Patch</h5>
						<ul class="pl-5">
							<li><strong>For patients on low oral dose (< 6 mg/day):</strong>Switch directly to <b>9 mg patch</b>. </li>
							<li><strong>For patients on higher oral dose (6–12 mg/day):</strong> Switch directly to <b>18 mg patch</b>. </li>
							<!--<li>No further NRT required after completion</li>-->
						</ul>
						<h5>Contraindications:</h5>
						<ul class="pl-5">
						    <li><strong>Hypersensitivity:</strong> History of reaction to carbamate derivatives </li>
						    <li><strong>Skin reactions:</strong> History of <b>allergic dermatitis to patches</b></li>
						    <li><strong>Hepatic/Renal impairment:</strong> Use with caution in severe cases </li>
						    <li><strong>Pregnancy:</strong> Use only if potential benefit outweighs risk</li>
						    <li><strong>Breastfeeding:</strong> Use only if potential benefit outweighs risk</li>
						    <li><strong>Cardiac conduction abnormalities:</strong> Monitor closely</li>
						</ul>
						<h5>Drug Interactions:</h5>
						<ul class="pl-5">
							<li><b>Avoid concomitant use</b> with other <b>cholinesterase inhibitors</b></li>
							<li>Use caution with drugs like <b>digoxin, diazepam, warfarin, or fluoxetine</b> due to potential interactions. </li>
							<!--<li>Allows endogenous receptor reset and craving resistance</li>-->
						</ul>
						
						
						<h5>Clinical Evidence</h5>
						<ul class="pl-5">
							<li>RCTs confirm improved cognition and daily functioning in Alzheimer’s and Parkinson’s dementia.</li>
							<li>Patch shows ~30–40% fewer GI side effects compared to oral rivastigmine.</li>
							<li>Demonstrates higher adherence (>70%) versus oral formulations (~50%).</li>
							<li>Well-tolerated with sustained efficacy in long-term therapy.</li>
						</ul>
						<h5>Storage & Handling </h5>
						<ul class="pl-5">
							<li><b>Storage:</b> Store at <b>20–25°C</b> in a dry place. </li>
							<li>Dispose of used patches responsibly</li>
							<li>Keep sealed until use to prevent drug loss</li>
						</ul>
						<h5>Patient Suitability</h5>
						<ul class="pl-5">
							<li>Mild to moderate Alzheimer’s or Parkinson’s dementia.</li>
							<li>Patients unable to swallow pills.</li>
							<li>Those needing steady once-daily therapy with better GI tolerance.</li>
						</ul>
						<h5>Supporting Tools & Resources</h5>
						<ul class="pl-5">
							<li><strong>Patient Guides:</strong> Patch application & titration instructions</li>
							<li><strong>Monitoring Charts:</strong> Track cognition & daily function</li>
							<li><strong>Clinic Posters:</strong> Reinforce adherence & caregiver education</li>
							<li><strong>Mantra Bot:</strong> Smart reminders & adherence tracking for your patients</li>
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
														1. What is Hetriva Patch?
													</a>
												</h5>
											</div>
											<div id="collapse-1" class="collapse show" data-parent="#accordion2"
												aria-labelledby="qstn-1" style="">
												<div class="card-body">
													<p>A once-daily patch to support memory, thinking, and behavior in mild to moderate dementia (Alzheimer’s or Parkinson’s).</p>
												</div>
											</div>
										</div>
										<div class="cardf">
											<div class="card-header borderPurpose w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
														2. Who Can Use It?
													</a>
												</h5>
											</div>
											<div id="collapse-2" class="collapse" data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
												    <ul class="pl-5">
												        <li>Patients with mild to moderate dementia.</li>
												        <li>Those who have difficulty swallowing pills.</li>
												        <li>Patients who prefer a once-daily treatment.</li>
												    </ul>
													<p>️ Always consult your doctor before use.</p>
												</div>
											</div>
										</div>
										 <div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														3. How to apply?
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p> Place on <b>upper back, chest, or upper arm</b>. Wash hands before and after.</p>
												</div>
											</div>
										</div>
										
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														4. Who should avoid Hetriva Patch?
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p> If you’re allergic to Hetriva Patch or similar patches, pregnant or breastfeeding, or have certain health problems, it’s best to check with your doctor first.</p>
												</div>
											</div>
										</div>
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														5. Is Hetriva Patch safe for long-term use? 
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p> Yes, under medical supervision. Long-term use helps maintain cognitive function and daily activities.</p>
												</div>
											</div>
										</div>
										
										<div class="cardf">
											<div class="card-header w-100" id="qstn-1">
												<h5 class="mb-0 forText hdng">
													<a class="collapsed" role="button" data-toggle="collapse"
														href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
														6. What are the most common side effects of Hetriva Patch?
													</a>
												</h5>
											</div>
											<div id="collapse-3" class="collapse " data-parent="#accordion2"
												aria-labelledby="qstn-1">
												<div class="card-body">
													<p> You might notice mild skin redness or itching, slight nausea, less hunger than usual, headache, or feeling dizzy</p>
												</div>
											</div>
										</div>
										
										
										
									</div>
									<div class="col-md-6 faq_style backgroung d-none">									
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