<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.moreblog_section {
			padding: 170px 0px 50px 0px;
            background-image: none;
			
		}
		.breadcrumb-wrapper.scrolled .breadcrumb{
			width: 200px;
		}
		@media (max-width: 767px) {
            .moreblog_section {
                padding: 150px 0px 30px 0px;
            }
            .moreblog_section .blog_title {
                text-align: left;
            }
        }
	</style>
	
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://www.patchmantra.com/blog",
      "url": "https://www.patchmantra.com/blog",
      "name": "PatchMantra Blog – Pain Relief, Wellness & Patch Therapy Tips",
      "description": "Explore PatchMantra's blog for insightful articles on pain relief, wellness, and the benefits of transdermal patch therapy.",
      "mainEntity": {
        "@type": "Blog",
        "blogPost": [
          {
            "@type": "BlogPosting",
            "headline": "Every Cigarette Counts: The Health Risks of Smoking",
            "datePublished": "2025-09-24",
            "author": {
              "@type": "Organization",
              "name": "PatchMantra"
            },
            "url": "https://www.patchmantra.com/blog/every-cigarette-counts-smoking-risks-quitting-guide",
            "description": "An in-depth look at the health risks associated with smoking and effective strategies to quit.",
            "wordCount": 625
          },
          {
            "@type": "BlogPosting",
            "headline": "Pain Relief Revolution: Are Patches the New Pills?",
            "datePublished": "2025-09-21",
            "author": {
              "@type": "Organization",
              "name": "PatchMantra"
            },
            "url": "https://www.patchmantra.com/blog/pain-relief-revolution-are-patches-the-new-pills",
            "description": "A discussion on how transdermal patches are transforming pain management.",
            "wordCount": 530
          },
          {
            "@type": "BlogPosting",
            "headline": "What is Patch Therapy? A Complete Beginner's Guide to Transdermal Patches",
            "datePublished": "2025-09-16",
            "author": {
              "@type": "Organization",
              "name": "PatchMantra"
            },
            "url": "https://www.patchmantra.com/blog/what-is-patch-therapy-a-complete-beginners-guide-to-transdermal-patches",
            "description": "An introductory guide to understanding patch therapy and its benefits.",
            "wordCount": 600
          }
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
          "name": "Blog",
          "item": "https://www.patchmantra.com/blog"
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
			<a href="<?php echo base_url();?>blog"><strong>Blog</strong></a>
		</div>
	</div>

	<section class="moreblog_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="blog_title">Blogs</h1>
				</div>
				<?php if(!empty($blogs)){ ?> 
				    <?php foreach($blogs as $blog_list){ ?>
        				<div class="col-md-4 blog_details">
        					<a href="<?php echo base_url();?><?php echo $blog_list['slug']; ?>">
        						<img loading="eager" class="w-100 blog_img"
        							src="<?php echo base_url('uploads/blog/');?><?php echo $blog_list['blog_image_1']; ?>?Version=<?php echo Version; ?>"
        							class="blog_img" alt="<?php if(empty($blog_list['blog_image_1_alt'])){ echo $blog_list['blog_title']; } else { echo $blog_list['blog_image_1_alt']; }?>" />
        						<div class="py-3 px-2">
        						    <p class="fs-14 mb-8"><?php echo date('d M, Y',strtotime($blog_list['blog_date']));?></p>
        							<h6 class="blog_sub_title"><?php echo $blog_list['blog_title']; ?></h6>
        							<hr>
        							<div class="timer_setting">
        							    <?php if(!empty($blog_list['blog_read_time'])){ ?>
        								<p class="timer_more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        										fill="currentColor" class="bi bi-hourglass-split timer" viewBox="0 0 16 16">
        										<path
        											d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
        									</svg> <?php echo $blog_list['blog_read_time'].' Min to read'; ?>
        								</p>
        								<?php } ?>
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
				    <?php } ?> 
				<?php } ?>
				
				
				<!--<div class="col-md-4 blog_details">-->
				<!--	<a href="<?php echo base_url();?>blog/every-cigarette-counts-smoking-risks-quitting-guide">-->
				<!--		<img loading="eager" class="w-100 blog_img"-->
				<!--			src="<?php echo base_url();?>uploads/blog/blog_img2.jpg?Version=<?php echo Version; ?>"-->
				<!--			class="blog_img" alt="" />-->
				<!--		<div class="py-3 px-2">-->
				<!--		    <p class="fs-14 mb-8">24 Sep, 2025</p>-->
				<!--			<h6 class="blog_sub_title">Every Cigarette Counts: The Health Risks of Smoking</h6>-->
				<!--			<hr>-->
				<!--			<div class="timer_setting">-->
				<!--				<p class="timer_more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
				<!--						fill="currentColor" class="bi bi-hourglass-split timer" viewBox="0 0 16 16">-->
				<!--						<path-->
				<!--							d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />-->
				<!--					</svg> 6.25 Min to Read-->
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
				<!--	<a href="<?php echo base_url();?>blog/transdermal-patches-vs-pills-for-pain-relief">-->
				<!--		<img loading="eager" class="w-100 blog_img"-->
				<!--			src="<?php echo base_url();?>uploads/blog/blog_img3.jpg?Version=<?php echo Version; ?>"-->
				<!--			class="blog_img" alt="" />-->
				<!--		<div class="py-3 px-2">-->
				<!--		    <p class="fs-14 mb-8">21 Sep, 2025</p>-->
				<!--			<h6 class="blog_sub_title">Pain Relief Revolution: Are Patches the New Pills?</h6>-->
				<!--			<hr>-->
				<!--			<div class="timer_setting">-->
				<!--				<p class="timer_more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"-->
				<!--						fill="currentColor" class="bi bi-hourglass-split timer" viewBox="0 0 16 16">-->
				<!--						<path-->
				<!--							d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />-->
				<!--					</svg> 5.30 Min to Read-->
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
				<!--	<a href="<?php echo base_url();?>blog/what-is-patch-therapy-a-complete-beginners-guide-to-transdermal-patches">-->
				<!--		<img loading="eager" class="w-100 blog_img"-->
				<!--			src="<?php echo base_url();?>uploads/blog/blog_img1.jpg?Version=<?php echo Version; ?>"-->
				<!--			class="blog_img" alt="" />-->
				<!--		<div class="py-3 px-2">-->
				<!--		    <p class="fs-14 mb-8">16 Sep, 2025</p>-->
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