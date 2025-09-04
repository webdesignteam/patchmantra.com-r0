<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>	
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">	
	<div id="loading"></div>
	<!-- Nav Menu  -->
	 
	<?php $this->load->view('layout/nav');  ?>	
	
	<div class="healthcare_section ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 healthcare_content_sec">
					<div class="healthcare_content">
					    <h6 class="healthcare_title">Healthcare Professionals</h6>	
						<h1 class="healthcare_sub_title">ReMASH™ (Resmetirom) Clinical Overview</h1>					
						<p class="healthcare_text"><i>Tablets for oral use</i></p>						
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Indication</h5>
						<p>ReMASH™ is indicated for use in conjunction with diet and exercise to treat adults with Metabolic Dysfunction-Associated Steatohepatitis (MASH) and moderate to advanced hepatic fibrosis (F2–F3), confirmed by histologic or imaging assessment.</p>
						<p>It is not indicated for patients with cirrhosis or decompensated liver disease.</p>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Mechanism of Action</h5>
						<p>Resmetirom is a selective thyroid hormone receptor beta (THR-β) agonist that targets the liver. By activating THR-β, ReMASH™ enhances mitochondrial activity and reduces lipotoxicity in hepatocytes, leading to: </p>
						<ul>
							<li>Reduction of hepatic steatosis</li>
							<li>Suppression of liver inflammation</li>
							<li>Improvement in fibrosis markers</li>
							<li>Enhanced lipid metabolism (↓ LDL-C, ↓ triglycerides, ↓ ApoB)</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Dosing & Administration</h5>
						<ul>
							<li>Recommended starting dose: 80 mg or 100 mg once daily, based on patient’s weight and tolerability</li>
							<li>Administer orally, with or without food</li>
							<li>Tablets should be swallowed whole, not crushed or split</li>
							<li>Dosing adjustments not required in mild to moderate renal impairment</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">How to Use</h5>
						<ul>
							<li>Take orally once a day at a consistent time</li>
							<li>Can be co-administered with statins, insulin, or antidiabetic medications</li>
							<li>Not recommended in combination with <strong>gemfibrozil</strong> or <strong>cyclosporine</strong></li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Precautions and Warnings</h5>
						<ul>
							<li><strong>Liver Injury: </strong>Monitor ALT, AST, and bilirubin prior to initiation and during therapy. Discontinue if signs of hepatotoxicity develop.</li>
							<li><strong>Gallbladder Disease: </strong>Use with caution in patients with pre-existing gallstones or gallbladder dysfunction.</li>
							<li><strong>Thyroid Axis Disturbance: </strong>Although ReMASH™ is liver-selective, monitor TSH and free T3 in patients with thyroid dysfunction.</li>
							<li><strong>Use in Pregnancy: </strong>Not recommended. Teratogenicity has not been ruled out.</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Drug Interactions</h5>
						<p><strong>Avoid concomitant use with</strong></p>
						<ul>
							<li><strong>Gemfibrozil: </strong>May significantly increase resmetirom levels</li>
							<li><strong>Cyclosporine: </strong>Can alter metabolism, leading to adverse effects Use with caution:</li>
							<li><strong>Clopidogrel and statins: </strong>Adjust doses based on tolerability</li>
							<li>CYP3A4 inducers may reduce efficacy</li>
							<li>Bile acid sequestrants may reduce absorption</li>
						</ul>
					</div>
					<div class="healthcare_details destop_block">
						<h5 class="sub_title">Side Effects</h5>
						<p><strong>Common (≥5%)</strong></p>
						<div class="side_effects_section ">
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Nausea</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Diarrhoea</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Constipation</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Dizziness</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Abdominal pain</p>
							</div>
							<div class="side_effect_img">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Pruritus</p>
							</div>
						</div>
						<p><strong>Serious/Rare</strong></p>
						<div class="side_effects_section ">
							<div class="side_effect_img ">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Hepatotoxicity</p>
							</div>
							<div class="side_effect_img ">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p>Gallbladder disease</p>
							</div>
							<div class="side_effect_img ">
								<img loading="eager"
							src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="" />
							<p style="width: 100px">Pancreatitis secondary to biliary complications </p>
							</div>
						</div>
					</div>
					<div class="healthcare_details mb_display">
						<h5 class="sub_title">Side Effects</h5>
						<p><strong>Common (≥5%)</strong></p>
						<div class="side_effects_section ">
							<div class="mobile_flex">
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Nausea</p>
								</div>
								<div class="side_effect_img ml-3">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Diarrhoea</p>
								</div>
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Constipation</p>
								</div>
							</div>
							<div class="mobile_flex">
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Dizziness</p>
								</div>
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Abdominal pain</p>
								</div>
								<div class="side_effect_img">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Pruritus</p>
								</div>
							</div>
						</div>
						<p><strong>Serious/Rare</strong></p>
						<div class="side_effects_section ">
							<div class="mobile_flex">
								<div class="side_effect_img ">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Hepatotoxicity</p>
								</div>
								<div class="side_effect_img ">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p>Gallbladder disease</p>
								</div>
								<div class="side_effect_img ">
									<img loading="eager"
								src="<?php echo base_url();?>/assets/img/side_effects_img.png?Version=<?php echo Version; ?>"
								alt="Banner- Image" class="" />
								<p style="width: 100px">Pancreatitis secondary to biliary complications </p>
								</div>
							</div>
						</div>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Monitoring Recommendations</h5>
						<ul>
							<li><strong>Baseline and periodic LFTs</strong></li>
							<li><strong>Fibrosis progression via imaging (MRI-PDFF or FibroScan) </strong>every 6-12 months</li>
							<li><strong>Lipid profile: </strong>LDL-C, triglycerides, ApoB</li>
							<li><strong>HbA1c and fasting glucose </strong>in patients with metabolic comorbidities</li>
							<li>Monitor for signs of gallbladder dysfunction</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Features and Clinical Details</h5>
						<ul>
							<li>First and only oral <strong>FDA-approved therapy</strong> for MASH with fibrosis (F2-F3)</li>
							<li>Targets the root pathophysiology-hepatic steatosis and lipotoxicity</li>
							<li>Demonstrated fibrosis improvement in Phase 3 trials (≥1 stage reduction in ~26-30% patients)</li>
							<li>Improves cardiovascular risk profile by lowering LDL-C, triglycerides, and ApoB</li>
							<li>Does not cause weight gain; may support weight loss in some patients</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Contraindications</h5>
						<ul>
							<li>Known hypersensitivity to resmetirom or excipients</li>
							<li>Severe hepatic impairment (Child-Pugh C)</li>
							<li>Pregnancy and lactation (due to unknown fetal risk)</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Long Term Risks</h5>
						<ul>
							<li>Risk of hepatotoxicity with prolonged unmonitored use</li>
							<li>Potential for subclinical thyroid suppression or shift in lipid parameters</li>
							<li>Unclear effects in cirrhotic or end-stage liver patients—use not recommended</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Patient Counselling Information</h5>
						<ul>
							<li>Educate patients about signs of liver injury or gallbladder issues</li>
							<li>Reinforce the need for diet, weight loss, and exercise as part of treatment</li>
							<li>Discuss long-term commitment to therapy and importance of adherence</li>
							<li>Advise reporting of all new symptoms, especially abdominal pain or jaundice</li>
							<li>Encourage routine monitoring and follow-up for fibrosis and metabolic status</li>
						</ul>
					</div>
					<div class="healthcare_details">
						<h5 class="sub_title">Product Presentation</h5>
						<ul>
							<li>Tablets: 60 mg, 80 mg, and 100 mg</li>
							<li>Storage: 20°C to 25°C (68°F to 77°F)</li>
							<li>Blister and bottle packs with moisture control</li>
						</ul>
					</div>
					<div class="">
						<p><strong>Please see the accompanying full <a target="_blank" class="sub_color" href="<?php echo base_url();?>uploads/prescribing_information/prescribing_information.pdf?Version=<?php echo Version; ?>">Prescribing Information</a>, including <a class="sub_color" href="<?php echo base_url();?>patient-information">Patient Information</a>, for ReMASH</strong></p>
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
</body>
</html>