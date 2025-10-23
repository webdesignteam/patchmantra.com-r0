<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.products_section {
			padding: 180px 0px 50px 0px;
			background: unset;
		}
		.breadcrumb-wrapper.scrolled .breadcrumb{
			width: 280px;
		}
		@media (max-width: 767px) {
            .products_section {
                padding: 150px 0 30px 0px !important;
            }
        }
	</style>
	
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "url": "https://www.patchmantra.com/explore-our-patches",
  "name": "Explore Our Patches",
  "description": "Explore PatchMantra’s therapeutic patches like Nitof, Hetriva, Trans D, and K-Plast for nicotine cessation, pain relief and wellness.",
  "breadcrumb": {
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
        "name": "Explore Our Patches",
        "item": "https://www.patchmantra.com/explore-our-patches"
      }
    ]
  },
  "mainEntity": {
    "@type": "ItemList",
    "itemListElement": [
      {
        "@type": "Product",
        "name": "Nitof Nicotine Patch",
        "image": "https://www.patchmantra.com/assets/img/product_img1.webp",
        "description": "Nitof nicotine patches help in smoking cessation with controlled nicotine delivery. Available in 7mg, 14mg & 21mg, these transdermal patches support quitting smoking safely.",
        "url": "https://www.patchmantra.com/nitof-nicotine-patches",
        "brand": {
          "@type": "Brand",
          "name": "PatchMantra"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.7",
          "reviewCount": "58"
        }
      },
      {
        "@type": "Product",
        "name": "Hetriva Patch",
        "image": "https://www.patchmantra.com/assets/img/product_img2.webp",
        "description": "Hetriva Rivastigmine patch offers 24-hour cognitive support for Alzheimer's and Parkinson's-related dementia. Enhances memory, thinking, and daily function with minimal side effects.",
        "url": "https://www.patchmantra.com/hetriva",
        "brand": {
          "@type": "Brand",
          "name": "PatchMantra"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.6",
          "reviewCount": "42"
        }
      },
      {
        "@type": "Product",
        "name": "Trans D Patch",
        "image": "https://www.patchmantra.com/assets/img/product_img3.webp",
        "description": "Trans-D Buprenorphine Patch offers 24-hour pain relief through steady transdermal delivery. Ideal for chronic pain, it reduces pill dependency and is gentle on the stomach.",
        "url": "https://www.patchmantra.com/trans-d",
        "brand": {
          "@type": "Brand",
          "name": "PatchMantra"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.8",
          "reviewCount": "37"
        }
      },
      {
        "@type": "Product",
        "name": "K-Plast Patch",
        "image": "https://www.patchmantra.com/assets/img/product_img4.webp",
        "description": "K-Plast ketoprofen patch is a transdermal patch for pain relief, providing targeted, long-lasting relief from chronic pain. Safe, convenient, and easy to use daily.",
        "url": "https://www.patchmantra.com/k-plast",
        "brand": {
          "@type": "Brand",
          "name": "PatchMantra"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "4.5",
          "reviewCount": "29"
        }
      }
    ]
  }
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
			<a href="<?php echo base_url();?>explore-our-patches"><strong>Explore Our Patches</strong></a>
		</div>
	</div>

		<section class="products_section" id="products_section">
		<div class="container">
		    <h1 class="d-none">Explore PatchMantra Transdermal Patches</h1>
			<h2 class="product_title">Explore Our Patches</h2>
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