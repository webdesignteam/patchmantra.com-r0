<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
	    .faq_section .faq_style {
            display: flex;
            gap: 20px;
            flex-direction: column;
            justify-content: space-between;
        }
        .about_section .sub_text {
            padding: 30px 20px;
        }
	</style>
	
	<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://www.patchmantra.com/#organization",
          "name": "PatchMantra",
          "url": "https://www.patchmantra.com/",
          "logo": "https://www.patchmantra.com/assets/img/patch_mantra_logo.svg",
          "sameAs": [
              "https://www.instagram.com/patchmantra",
              "https://www.youtube.com/@patchmantra",
              "https://www.facebook.com/patchmantra",
              "https://www.linkedin.com/company/patchmantra"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://www.patchmantra.com/#website",
          "url": "https://www.patchmantra.com/",
          "name": "PatchMantra",
          "publisher": {
            "@id": "https://www.patchmantra.com/#organization"
          },
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.patchmantra.com/?s={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        },
        {
          "@type": "WebPage",
          "@id": "https://www.patchmantra.com/#webpage",
          "url": "https://www.patchmantra.com/",
          "name": "PatchMantra | Smart Transdermal Patches for Pain Relief & Care",
          "headline": "PatchMantra | Pain Relief Patches & Smart Transdermal Patches",
          "description": " PatchMantra pain relief patches and smart transdermal patches for back pain, shoulder pain, herbal healing, nicotine quit support & Alzheimer’s wellness. Safe, natural & effective daily care.",
          "keywords": "transdermal patch, pain relief patch, herbal patch, nicotine patch, back pain patch, shoulder pain patch, PatchMantra patches",
          "isPartOf": {
            "@id": "https://www.patchmantra.com/#website"
          },
          "about": {
            "@id": "https://www.patchmantra.com/#organization"
          },
          "datePublished": "2023-07-01",
          "dateModified": "2025-09-26",
          "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.patchmantra.com/"
              }
            ]
          }
        }
      ]
    }
    </script>

</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Google Tag Manager (noscript) --> 

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TWTR3FX4" 

height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 

<!-- End Google Tag Manager (noscript) --> 

	<div id="loading"></div>
	<!-- Nav Menu  -->
	<?php $this->load->view('layout/nav');  ?>
	<section class="slider_section">
		<div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
			<ol class="carousel-indicators d-none">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="mobile_img">
						<img loading="eager"
							src="<?php echo base_url();?>/assets/img/banner_background_img.png?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="w-100" />
						<div class="banner_title_section">
							<div class="container-fluid">
								<div class="row banner_details_sec">
									<div class="col-md-6 banner_details">
										<h1 class="banner_title">A Patch.A Mantra. <br>A Better Way to Heal.
										</h1>
										<h2 class="banner_text">Smarter, gentler healing with science-backed transdermal
											patch therapy.</h2>
										<div class="buy_now_section">
											<a class="primary_btn" href="#explore-our-patches">Explore Our Patches</a>
											<!-- <a class="secondary_btn" href="<?php echo base_url();?>">Try MantraBot</a> -->
										</div>
									</div>
									<div class="col-md-6">
										<img class="slider_img w-100" loading="eager"
											src="<?php echo base_url();?>/assets/img/banner_side_image.webp?Version=<?php echo Version; ?>"
											alt="banner_side_image" class="w-100 banner_side_image" />
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="carousel-item ">
					<div class="">
						<img loading="eager" src="<?php echo base_url();?>/assets/img/Caritero-WEB-Banner.webp?Version=<?php echo Version; ?>"
							alt="Banner- Image" class="w-100" />
					</div>
				</div> -->
			</div>
		</div>
		<!-- deepthi -->
	</section>
	<div class="about_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 display_flex">
					<h3 class="about_title">About Us</h3>
					<p class="sub_text">A Perfect blend of science and Care in a single Patch — making wellness accessible, natural, and hassle-free.</p>
				</div>
				<div class="col-md-4">
					<div class="about_img_sec sticky-top">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/about_img.webp?Version=<?php echo Version; ?>"
							alt="About Us">
					</div>
				</div>
				<div class="col-md-8 about_content_sec">
					<div class="about_content">						
						<p class="about_text"><b>When you think of therapy, you often imagine long treatments, bitter pills, or waiting endlessly for relief. But what if healing could be simple, soothing, and smart?</b></p>
						<p class="about_text">At Hetero Healthcare, we believe therapy is more than just treatment—it’s a path to holistic well-being. That’s why we introduced Patch Mantra, a smart and innovative transdermal patch therapy designed to work gently with your body. It provides targeted relief, supports overall wellness, enhances natural beauty, and even helps you quit smoking—all in one easy-to-use solution.</p>
						<p class="about_text">Whether you’re recovering from an injury, managing stiffness, addressing cosmetic concerns, or aiming to quit smoking, Patch Mantra makes therapy simple, effective, and effortless.</p>
						<p class="about_text"><b>At Patch Mantra, every patch tells a story of healing—crafted with care, powered by innovation, and made for you.</b></p>
						<p class="about_text"><b>No pills to swallow, No schedules to chase!  Just peel, stick, and step into a life with less hassle and more harmony.</b></p>
						<!-- <div class="buy_now_section">
							<a class="primary_btn" href="<?php echo base_url();?>about-us">Know More</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="why_patch_section d-none">
		<div class="container">
			<div class="row mb_style">
				<div class="col-md-6 why_patch_content_sec">
					<div class="why_patch_content">
						<h3 class="why_patch_title">Why Patches</h3>
						<p class="why_patch_text">At Patch Mantra, we believe healing should be smart, simple, and
							gentle. That's why we focus on transdermal patches. Thin, medicated adhesives placed on the
							skin that deliver medicine steadily into the bloodstream.</p>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5">
					<div class="why_patch_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/why_patch_img.webp?Version=<?php echo Version; ?>"
							alt="why_patch_img">
					</div>
				</div>
			</div>
			<div class="row why_transdermal">
				<div class="col-md-5">
					<div class="why_patch_img_sec">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/why_transdermal.webp?Version=<?php echo Version; ?>"
							alt="why_transdermal">
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-6 why_patch_content_sec">
					<div class="why_patch_content">
						<h3 class="why_patch_title">Why Transdermal Patch Therapy?</h3>
						<p class="why_patch_text">Transdermal patches deliver medicine directly through the skin,
							offering consistent, localized relief with fewer side effects. Whether you need a pain
							relief patch for back, shoulder, or leg pain, an herbal pain relief patch, or a painkiller
							patch tailored for Indian patients, patch therapy is a smarter, non-invasive alternative to
							oral medications. It's time to embrace a better way to heal. Backed by science, designed for
							comfort.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="buy_now_section">
						<a class="primary_btn" href="<?php echo base_url();?>why-patches">Know More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="explore-our-patches" class="ctn"></div>
	<section class="products_section" id="products_section">
		<div class="container">
			<h3 class="product_title">Explore Our Patches</h3>
			<div class="owl-carousel product_carousel">
				<a href="<?php echo base_url();?>nitof-nicotine-patches">
					<div class="product_card">
						<div class="product_img">
							<img src="<?php echo base_url();?>assets/img/product_img1.webp?Version=<?php echo Version; ?>"
								alt="Nitof">
						</div>
						<div class="product_body">
							<h5 class="product_name bg_teal">Nitof</h5>
							<p class="product_desc">Nicotine Patch (Smoking Cessation)</p>
							<p class="primary_btn">Know More</p>
						</div>
					</div>
				</a>
				<a href="<?php echo base_url();?>hetriva">
					<div class="product_card">
						<div class="product_img">
							<img src="<?php echo base_url();?>assets/img/product_img2.webp?Version=<?php echo Version; ?>"
								alt="Nitof">
						</div>
						<div class="product_body">
							<h5 class="product_name bg_beige">Hetriva</h5>
							<p class="product_desc">Rivastigmine Patch (Alzheimer's / Parkinson's)</p>
							<p class="primary_btn">Know More</p>
						</div>
					</div>
				</a>
				<a href="<?php echo base_url();?>trans-d">
					<div class="product_card">
						<div class="product_img">
							<img src="<?php echo base_url();?>assets/img/product_img3.webp?Version=<?php echo Version; ?>"
								alt="Nitof">
						</div>
						<div class="product_body">
							<h5 class="product_name bg_blue">Trans D</h5>
							<p class="product_desc">Diclofenac Patch (Acute Pain)</p>
							<p class="primary_btn">Know More</p>
						</div>
					</div>
				</a>
				<a href="<?php echo base_url();?>k-plast">
					<div class="product_card">
						<div class="product_img">
							<img src="<?php echo base_url();?>assets/img/product_img4.webp?Version=<?php echo Version; ?>"
								alt="Nitof">
						</div>
						<div class="product_body">
							<h5 class="product_name bg_green">K-Plast</h5>
							<p class="product_desc">Ketoprofen Patch (Chronic Pain)</p>
							<p class="primary_btn">Know More</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</section>
	<section class="moreblog_section d-none">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3 class="blog_title">Blogs</h3>
				</div>
				<div class="col-md-4 blog_details">
					<a
						href="<?php echo base_url();?>what-is-patch-therapy-a-complete-beginners-guide-to-transdermal-patches">
						<img loading="eager" class="w-100 blog_img"
							src="<?php echo base_url();?>uploads/blog/blog_img1.png?Version=<?php echo Version; ?>"
							class="blog_img" alt="" />
						<div class="py-3 px-2">
							<h6 class="blog_sub_title">What is Patch Therapy? A Complete Beginner's guide to transdermal
								patches</h6>
							<hr>
							<div class="timer_setting">
								<p class="timer_more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
										fill="currentColor" class="bi bi-hourglass-split timer" viewBox="0 0 16 16">
										<path
											d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
									</svg> 6 Min to Read
								</p>
								<p class="read_more m-0">Read More <svg xmlns="http://www.w3.org/2000/svg" width="30"
										height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
										<path
											d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
									</svg>
								</p>
							</div>
						</div>
					</a>
				</div>
				<!--<div class="col-md-4 blog_details">-->
				<!--	<a href="<?php echo base_url();?>">-->
				<!--		<img loading="eager" class="w-100 blog_img"-->
				<!--			src="<?php echo base_url();?>uploads/blog/blog_img1.png?Version=<?php echo Version; ?>"-->
				<!--			class="blog_img" alt="" />-->
				<!--		<div class="py-3 px-2">-->
				<!--			<h6 class="blog_sub_title">What is Patch Therapy? A Complete Beginner's guide to transdermal-->
				<!--				patches</h6>-->
				<!--			<hr>-->
				<!--			<div class="timer_setting">-->
				<!--				<p class="timer_more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
				<!--						fill="currentColor" class="bi bi-hourglass-split timer" viewBox="0 0 16 16">-->
				<!--						<path-->
				<!--							d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />-->
				<!--					</svg> 6 Min to Read-->
				<!--				</p>-->
				<!--				<p class="read_more m-0">Read More <svg xmlns="http://www.w3.org/2000/svg" width="30"-->
				<!--						height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">-->
				<!--						<path-->
				<!--							d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />-->
				<!--					</svg>-->
				<!--				</p>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</a>-->
				<!--</div>-->
				<!--<div class="col-md-4 blog_details">-->
				<!--	<a href="<?php echo base_url();?>">-->
				<!--		<img loading="eager" class="w-100 blog_img"-->
				<!--			src="<?php echo base_url();?>uploads/blog/blog_img1.png?Version=<?php echo Version; ?>"-->
				<!--			class="blog_img" alt="" />-->
				<!--		<div class="py-3 px-2">-->
				<!--			<h6 class="blog_sub_title">What is Patch Therapy? A Complete Beginner's guide to transdermal-->
				<!--				patches</h6>-->
				<!--			<hr>-->
				<!--			<div class="timer_setting">-->
				<!--				<p class="timer_more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
				<!--						fill="currentColor" class="bi bi-hourglass-split timer" viewBox="0 0 16 16">-->
				<!--						<path-->
				<!--							d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />-->
				<!--					</svg> 6 Min to Read-->
				<!--				</p>-->
				<!--				<p class="read_more m-0">Read More <svg xmlns="http://www.w3.org/2000/svg" width="30"-->
				<!--						height="30" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">-->
				<!--						<path-->
				<!--							d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />-->
				<!--					</svg>-->
				<!--				</p>-->
				<!--			</div>-->
				<!--		</div>-->
				<!--	</a>-->
				<!--</div>-->
				<div class="col-md-12">
					<div class="buy_now_section">
						<a class="primary_btn" href="<?php echo base_url();?>blog">More Blogs</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="faq_section d-none" id="faq">
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
													1. What is Patch Mantra?
												</a>
											</h5>
										</div>
										<div id="collapse-1" class="collapse show" data-parent="#accordion"
											aria-labelledby="qstn-1" style="">
											<div class="card-body">
												<p>Patch Mantra is an initiative by Hetero Healthcare dedicated to
													making healing smarter, gentler, and more effective through
													transdermal patch therapy. We help people explore and understand how
													patches can replace or reduce the need for daily pills.</p>
											</div>
										</div>
									</div>
									<div class="cardf">
										<div class="card-header borderPurpose w-100" id="qstn-1">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed" role="button" data-toggle="collapse"
													href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
													What is a transdermal patch?
												</a>
											</h5>
										</div>
										<div id="collapse-2" class="collapse" data-parent="#accordion"
											aria-labelledby="qstn-1">
											<div class="card-body">
												<p>A transdermal patch is a medicated adhesive placed on the skin. It
													slowly delivers medication into the bloodstream, offering consistent
													and targeted relief. Commonly used for pain, cognitive support, and
													chronic conditions.</p>
											</div>
										</div>
									</div>
									<div class="cardf">
										<div class="card-header w-100" id="qstn-1">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed" role="button" data-toggle="collapse"
													href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
													3. How is a pain patch different from a pill?
												</a>
											</h5>
										</div>
										<div id="collapse-3" class="collapse " data-parent="#accordion"
											aria-labelledby="qstn-1">
											<div class="card-body">
												<p>Unlike pills that must pass through the digestive system, a pain
													patch works through the skin to directly target the affected area.
													This can reduce side effects, improve comfort, and offer
													longer-lasting relief.</p>
											</div>
										</div>
									</div>
									<div class="cardf">
										<div class="card-header borderPurpose w-100" id="qstn-1">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed" role="button" data-toggle="collapse"
													href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
													4. Who can benefit from pain relief patches?
												</a>
											</h5>
										</div>
										<div id="collapse-4" class="collapse" data-parent="#accordion"
											aria-labelledby="qstn-1">
											<div class="card-body">
												<p>People with conditions like back pain, shoulder pain, or leg
													discomfort may find pain relief patches helpful. They are also
													useful for those who have difficulty swallowing pills or need
													localized treatment.</p>
											</div>
										</div>
									</div>
									<div class="cardf">
										<div class="card-header borderPurpose w-100" id="qstn-1">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed" role="button" data-toggle="collapse"
													href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
													5. What makes Patch Mantra different?
												</a>
											</h5>
										</div>
										<div id="collapse-5" class="collapse" data-parent="#accordion"
											aria-labelledby="qstn-1">
											<div class="card-body">
												<p>Patch Mantra combines scientific expertise, patient-first design, and
													support tools like MantraBot to make patch therapy more accessible,
													especially for users in India seeking transdermal patch solutions.
												</p>
											</div>
										</div>
									</div>
									<div class="cardf">
										<div class="card-header borderPurpose w-100" id="qstn-1">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed" role="button" data-toggle="collapse"
													href="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
													6. Is transdermal therapy safe for long-term use?
												</a>
											</h5>
										</div>
										<div id="collapse-6" class="collapse" data-parent="#accordion"
											aria-labelledby="qstn-1">
											<div class="card-body">
												<p>When used as directed, transdermal patches for pain relief and other
													conditions are considered safe. They are designed to deliver a
													controlled dose over time and are often preferred for long-term
													management.</p>
											</div>
										</div>
									</div>
									<div class="cardf">
										<div class="card-header borderPurpose w-100" id="qstn-1">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed" role="button" data-toggle="collapse"
													href="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
													7. Can patches be used alongside other treatments?
												</a>
											</h5>
										</div>
										<div id="collapse-7" class="collapse" data-parent="#accordion"
											aria-labelledby="qstn-1">
											<div class="card-body">
												<p>In many cases, yes. Transdermal patches can complement other
													treatments, but it's best to consult with a healthcare provider
													before combining therapies.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 faq_style backgroung">
									<div class="cardf">
										<div class="card-header borderPurpose w-100" id="qstn-1">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed" role="button" data-toggle="collapse"
													href="#collapse-8" aria-expanded="false" aria-controls="collapse-8">
													8. How is Hetero Healthcare involved in this initiative?
												</a>
											</h5>
										</div>
										<div id="collapse-8" class="collapse" data-parent="#accordion"
											aria-labelledby="qstn-1">
											<div class="card-body">
												<p>Hetero Healthcare, a trusted name in pharmaceuticals, launched Patch
													Mantra to bring safe, research-driven, and patient-friendly
													patch-based therapies to people across India promoting a better,
													pill-free approach to wellness.</p>
											</div>
										</div>
									</div>
									<!-- <div class="cardf">
										<div class="card-header borderPurpose w-100" id="qstn-1">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed" role="button" data-toggle="collapse"
													href="#collapse-9" aria-expanded="false" aria-controls="collapse-9">
													9. What is MantraBot?
												</a>
											</h5>
										</div>
										<div id="collapse-9" class="collapse" data-parent="#accordion"
											aria-labelledby="qstn-1">
											<div class="card-body">
												<p>MantraBot is a smart digital assistant created by Patch Mantra to
													guide users in choosing the right transdermal patch therapy. It
													helps patients and caregivers understand patch options, usage
													instructions, and wellness tips making healing more personalized and
													accessible.</p>
											</div>
										</div>
									</div>
									<div class="cardf">
										<div class="card-header borderPurpose  w-100" id="qstn-10">
											<h5 class="mb-0 forText hdng">
												<a class="collapsed border_bottom_custom" role="button"
													data-toggle="collapse" href="#collapse-10" aria-expanded="false"
													aria-controls="collapse-10">
													10. How does MantraBot support my healing journey?
												</a>
											</h5>
										</div>
										<div id="collapse-10" class="collapse" data-parent="#accordion"
											aria-labelledby="qstn-10">
											<div class="card-body">
												<p>MantraBot offers easy, on-demand support by answering common
													questions, offering reminders, and guiding you through the safe use
													of pain relief patches, herbal options, and other therapies. It’s
													like having a healthcare companion anytime, anywhere.
												</p>
											</div>
										</div>
									</div> -->
									<div class="faq_img">
										<img class="w-100"
											src="<?php echo base_url();?>assets/img/faq_img.webp?Version=<?php echo Version; ?>"
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

	<div class="popup-overlay" id="popup">
		<div class="popup-box">
			<span class="popup-close" id="popupClose">&times;</span>
			<img style="width: 140px"
				src="<?php echo base_url();?>assets/img/person_icon.png?Version=<?php echo Version; ?>"
				alt="person_icon">
			<h3>Want To Know More About PatchMantra</h3>
			<p>PatchMantra: effortless, all-natural healing delivered through smart, sustained patches for your wellness, relief, and recovery.</p>
			<form id="popup_form_onlyno" name="subscribe" method="post" class="subscribe form-group">
				<div class="d-flex flex-column">
					<input type="text" id="sub_phone" placeholder="Enter Your Phone Number" name="sub_phone"
						class="form-control secondary_btn" minlength="10" maxlength="10" validator='mobile'><!-- validator='mobile' maxlength="12" -->
				</div>
				<div class="">
					<input type="submit" value="Submit" id="submit12" class="primary_btn">
				</div>
			</form>
		</div>
	</div>

	<script>
		// Show popup after 2 minutes (120000 ms)
		setTimeout(function() {
			document.getElementById("popup").style.display = "flex";
		}, 120000);
		// Close popup on click
		document.getElementById("popupClose").addEventListener("click", function() {
			document.getElementById("popup").style.display = "none";
		});
	</script>
	<?php $this->load->view('layout/footer');  ?>
	<!--  JavaScript -->
	<?php $this->load->view('layout/js');  ?>
	<?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
	<?php //if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
	<?php //if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
	
	
	<script>
	       $(document).ready(function () {
          $("input[validator='mobile']").on("input", function(e) {
                var self = $(this);
                self.val(self.val().replace(/[^0-9]/g, ''));
                if ((e.keyCode >= 48 && e.keyCode <= 57) || (e.keyCode >= 96 && e.keyCode <= 105)) {
                    // entered key is a number
                } else {
                    e.preventDefault();
                }
            });
        $("#popup_form_onlyno").validate({
            // Specify the validation rules
            rules: {
                sub_phone: {
                        required: true,
                        number: true,
                        minlength: 10,
                        maxlength: 15,
                        remote: {
                            url: "<?php echo base_url('Home/check_availability_phone/'); ?>" + $("#sub_phone").val(),
                            type: "post",
                            data: {
                                column: function(){
                                    return "sub_phone";
                                },
                            }
                        }
                    }
            },
            // Specify the validation error messages
            messages: {
                sub_phone: {
                        required: "Please enter your phone number",
                        number: "Please Enter Digits Only",
                        maxlength: "Please enter below 10 digits",
                        minlength: "Please enter at least 10 digits only",
                        remote: jQuery.validator.format("{0} is already exists."),
                    }
            },
            //Code Send to DB
            submitHandler: function (form) { // for demo
                    //alert('Hi');
                    if($("#submit").val("Processing...")){
                        $("#submit").prop('disabled', 'disabled');
                    }
                    var myForm = document.getElementById('popup_form_onlyno');
                    $.ajax({
                        type: 'post',
                        url: '<?php echo base_url();?>Home/phone_submission',
                        dataType: 'text', // what to expect back from the PHP script, if anything
                        cache: false,
                        contentType: false,
                        processData: false,
                        data: new FormData(myForm),
                        success: function (data) {
                          window.location = data;
                        }
                    });
                    return false;
                }
        });
     });
	</script>
	
	
</body>

</html>