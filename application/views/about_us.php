<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.about_section {
			padding: 150px 0px 100px 0px;
		}
		@media (max-width: 767px) {
			.about_section {
				padding: 120px 0px 30px 0px !important;
			}
			.about_img{
				width: 100%;
				padding: 0px 0px 20px 0px;
			}
			.about_details{
				display: flex;
				flex-direction: column-reverse;
			}
			
			.about_section .about_content_sec .about_subtitle {
				font-family: "K2D", sans-serif;
				font-size: 28px;
				margin-top: 10px;
			}
			.about_section .about_content_sec {
				display: flex;
				align-items: center;	
				padding-bottom: 20px;

			}
			.vision-mission .mission-title {
				margin-bottom: 10px;
			}
			.vision-mission .mission_vission {
				display: flex;
				gap: 10px;
				padding: 0px 15px;
			}
		}
	</style>
	
	<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "AboutPage",
          "url": "https://www.patchmantra.com/about-us",
          "name": "About PatchMantra | Smart Pain Relief & Transdermal Patches",
          "description": "Know more about PatchMantra, a leading brand offering pain relief patches, transdermal patches, herbal wellness, smoking quit solutions & Alzheimer’s care.",
          "publisher": {
            "@type": "Organization",
            "name": "PatchMantra",
            "url": "https://www.patchmantra.com",
            "logo": "https://www.patchmantra.com/assets/img/patch_mantra_logo.svg?",
            "sameAs": [
              "https://www.instagram.com/patchmantra",
              "https://www.youtube.com/@patchmantra",
              "https://www.facebook.com/patchmantra",
              "https://www.linkedin.com/company/patchmantra"
            ]
          }
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "https://www.patchmantra.com/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "About Us",
              "item": "https://www.patchmantra.com/about-us"
            }
          ]
        }
      ]
    }
    </script>

</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
	<div id="loading"></div>
	<!-- Nav Menu  -->
	<?php $this->load->view('layout/nav');  ?>

	<div class="breadcrumb-wrapper">
		<div class="breadcrumb">
			<a href="<?php echo base_url();?>">Home</a>
			<span class="separator"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			<a href="<?php echo base_url();?>about-us"><strong>About Us</strong></a>
		</div>
	</div>

	<div class="about_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 about_content_sec">
					<div class="about_content">
					    <h1 class="d-none">PatchMantra: Pioneering Transdermal Patch Therapy for Better Health</h1>
						<h3 class="about_title">About Us</h3>
						<h3 class="about_subtitle">Pioneering a Smarter Way to Heal</h3>
						<p class="about_text mb-0">At Patch Mantra, a transformative initiative by Hetero Healthcare
							Limited, we are redefining healing for the modern world. Rooted in science and driven by the
							evolving needs of patients and healthcare providers, Patch Mantra promotes transdermal patch
							therapy as a smarter, gentler, and more intuitive alternative to traditional pill-based
							treatments.</p>
						<div class="about_details">
							<p class="col-md-6 padding_left"><strong>Our approach</strong> is simple yet powerful:
								deliver proven medications through the skin, directly to where they are needed, helping
								minimize side effects, improve adherence, and enhance daily quality of life.</p>
							<img class="col-md-6 about_img" loading="eager"
								src="<?php echo base_url();?>assets/img/about_small_img.webp?Version=<?php echo Version; ?>"
								alt="About Us">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="about_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/about_img2.webp?Version=<?php echo Version; ?>"
							alt="About Us">
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="vision-mission">
		<div class="container-fluid">
			<div class="row">
				<div class="vision-section col-md-6 pl-0 destop_block">
					<img loading="eager"
						src="<?php echo base_url();?>assets/img/mission_vission.webp?Version=<?php echo Version; ?>"
						alt="About Us" class="vision-bg">
					<div class="vision-circle">
						<h3 class="vision-title">Our Vision</h3>
						<p>
							To lead India's transition from pill-based therapy to smart, patch-based healing.
							Our vision is backed by science, guided by empathy, and supported through digital
							innovation.
						</p>
					</div>
				</div>
				<div class="col-md-6 mb_display">
					<div class="vision">
						<h3 class="vision-title">Our Vision</h3>
						<p>
							To lead India's transition from pill-based therapy to smart, patch-based healing.
							Our vision is backed by science, guided by empathy, and supported through digital
							innovation.
						</p>
					</div>
				</div>

				<div class=" col-md-6 d-flex align-items-center">
					<div class="row mission_vission">
						<h2 class="mission-title col-md-12">Our Mission</h2>
						<div class="mission_vission_details col-md-5">
							<img loading="eager"
								src="<?php echo base_url();?>assets/img/mission_vission_img1.png?Version=<?php echo Version; ?>"
								alt="mission_vission_img1">
							<p>To establish transdermal patch therapy as a safe, effective, and preferred treatment
								option for chronic and acute conditions</p>
						</div>
						<div class="mission_vission_details col-md-5">
							<img loading="eager"
								src="<?php echo base_url();?>assets/img/mission_vission_img2.png?Version=<?php echo Version; ?>"
								alt="mission_vission_img1">
							<p>To empower patients and doctors through education, awareness, and AI-powered tools like
								MantraBot</p>
						</div>
						<div class="mission_vission_details col-md-5">
							<img loading="eager"
								src="<?php echo base_url();?>assets/img/mission_vission_img3.png?Version=<?php echo Version; ?>"
								alt="mission_vission_img1">
							<p>To close the gap in medication adherence by offering a more habitual, discreet, and less
								intrusive healing experience</p>
						</div>
						<div class="mission_vission_details col-md-5">
							<img loading="eager"
								src="<?php echo base_url();?>assets/img/mission_vission_img4.png?Version=<?php echo Version; ?>"
								alt="mission_vission_img1">
							<p>To build a supportive healthcare ecosystem that prioritizes comfort, confidence, and
								clinical outcomes</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="whypatch_section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 whypatch_content_sec">
					<div class="whypatch_content">
						<h3 class="whypatch_title">Why Patch Mantra? </h3>
						<p class="whypatch_text">India faces increasing challenges related to medication overuse, low
							compliance rates, and discomfort with long-term pill regimens. Patch Mantra offers a better
							approach through transdermal patch technology, which delivers medicine through the skin for
							targeted and sustained relief. Whether it is managing back pain, supporting cognitive
							function, or offering herbal pain relief, Patch Mantra simplifies therapy while maintaining
							clinical effectiveness.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="whypatch_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/why_patch_mantra.webp?Version=<?php echo Version; ?>"
							alt="whypatch">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="about_img_section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 destop_block">
					<img class="w-100 h-100 brs_10" loading="eager"
						src="<?php echo base_url();?>assets/img/about_lab_img.webp?Version=<?php echo Version; ?>"
						alt="about_lab_img">
				</div>
				<div class="col-md-7 about_img_details_section">
					<div class="row destop_block">
						<div class="col-md-6 d-flex justify-content-center align-items-center">
							<img class="w-75" loading="eager"
								src="<?php echo base_url();?>assets/img/hetero_healthcare.png?Version=<?php echo Version; ?>"
								alt="whypatch">
						</div>
						<div class="col-md-6 pl-0">
							<img class="w-100 brs_10" loading="eager"
								src="<?php echo base_url();?>assets/img/doctor_patient.webp?Version=<?php echo Version; ?>"
								alt="whypatch">
						</div>
					</div>
					<div class="row mobile_flex">
						<div class="col-md-6 mb_display">
							<img class="w-50" loading="eager"
								src="<?php echo base_url();?>assets/img/hetero_healthcare.png?Version=<?php echo Version; ?>"
								alt="whypatch">
						</div>
						<div class="col-md-6 ">							
							<div class="about_img_hetero_content">
								<h3 class="about_img_hetero_title">Backed by Hetero Healthcare </h3>
								<p class="about_img_hetero_text">Patch Mantra is powered by Hetero Healthcare Limited, a
									trusted name in the pharmaceutical industry. With decades of experience in research
									and formulation, Hetero brings the scientific credibility, innovation, and reach
									needed to make patch-based therapy accessible across India.</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="about_img_content">
								<h3 class="about_img_title">Human First. Always </h3>
								<p class="about_img_text">At Patch Mantra, everything begins with people. Our mission is
									to help individuals heal better, live better, and take control of their health
									journeys. Through science, simplicity, and digital support, we are turning every
									patch into a daily mantra for better living.</p>
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
</body>

</html>