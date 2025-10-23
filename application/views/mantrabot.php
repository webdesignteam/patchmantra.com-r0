<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.breadcrumb-wrapper.scrolled .breadcrumb {
			width: 260px;
		}
		.object{
			position: absolute;
			width: 40%;
			left: 30%;
			top: 46%;
		}
		.benifits_section{
			display: flex;
			justify-content: space-around;
			align-items: center;
			padding: 20px 0px;
			background: #fff;
			border-radius: 10px;
		}
		h4{
			font-size: 22px;
			color: #613323;
			font-weight: 600;
			margin-top: 26px;
			margin-bottom: 20px;
		}
		ul{
			padding-left: 30px;
		}
		ul li strong{
			color: #613323;
		}
		ul li p{
			margin-bottom: 10px;
		}
		.talk_matrabot{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 100px 0px 50px 0px;
			text-align: center;
		}
		.talk_matrabot img{
			width: 50%;
			position: absolute;
		}
		.talk_matrabot .talk_matrabot_details{
			position: relative;
			z-index: 1;
		}
		.talk_matrabot h4{
			color: #fff;
			font-weight: 500;
		}
		@media (max-width: 767px){
			.talk_matrabot{
				padding: 70px 0px 50px 0px;
			}
			.mantrabot_section{
				padding: 140px 0px 30px 0px;
			}
			h4{
				margin-top: 0px;
			}
			.talk_matrabot img{
				width: 100%;
				position: absolute;
				height: 140px;
			}
			.mantrabot_img{
				    display: flex;
    			justify-content: center;
			}
		}
	</style>
	
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://www.patchmantra.com/mantrabot",
      "url": "https://www.patchmantra.com/mantrabot",
      "name": "MantraBot – Your Smart Guide to Transdermal Patch Therapy",
      "description": "MantraBot is PatchMantra’s AI-powered digital assistant, developed by Hetero Healthcare, designed to simplify the way patients, caregivers, and healthcare professionals understand and explore transdermal patch therapy.",
      "mainEntity": {
        "@type": "Service",
        "serviceType": "AI-powered Digital Assistant",
        "provider": {
          "@type": "Organization",
          "name": "Hetero Healthcare",
          "url": "https://www.heterohealthcare.com"
        },
        "audience": {
          "@type": "Audience",
          "audienceType": "Patients, Caregivers, Healthcare Professionals"
        },
        "offers": {
          "@type": "Offer",
          "url": "https://www.patchmantra.com/mantrabot",
          "priceCurrency": "INR",
          "price": "0",
          "eligibleRegion": {
            "@type": "Place",
            "name": "India"
          }
        }
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
          "name": "MantraBot",
          "item": "https://www.patchmantra.com/mantrabot"
        }
      ]
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is MantraBot?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MantraBot is PatchMantra’s AI-powered digital assistant developed by Hetero Healthcare. It’s designed to simplify the way patients, caregivers, and healthcare professionals understand and explore transdermal patch therapy."
          }
        },
        {
          "@type": "Question",
          "name": "How can MantraBot assist me?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "MantraBot provides personalized guidance, usage instructions, doctor-friendly support, reminders, and tips, all available 24/7 on your device."
          }
        },
        {
          "@type": "Question",
          "name": "Who can benefit from using MantraBot?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Patients, caregivers, and healthcare professionals can all benefit from MantraBot's assistance in understanding and utilizing transdermal patch therapy."
          }
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
			<a href="<?php echo base_url();?>mantrabot"><strong>Meet MantraBot</strong></a>
		</div>
	</div>

	<div class="mantrabot_section">
		<div class="container">
			<div class="row">
				<img class="object" loading="eager"
						src="<?php echo base_url();?>assets/img/object.png?Version=<?php echo Version; ?>"
						alt="object">
				<div class="col-md-8 mantrabot_details">
					<h1 class="tersms_title">Meet MantraBot</h1>
					<p>Your Smart Guide to Transdermal Patch Therapy</p>
				</div>
				<div class="col-md-4 mantrabot_img">
					<img loading="eager"
						src="<?php echo base_url();?>assets/img/chatbot.png?Version=<?php echo Version; ?>"
						alt="chatbot">
				</div>
				<div class="col-md-12">
					<h4>What is MantraBot?</h4>
					<p>MantraBot is Patch Mantra’s AI-powered digital assistant developed by Hetero Healthcare. It’s designed to simplify the way patients, caregivers, and healthcare professionals understand and explore transdermal patch therapy.</p>
					<p>Whether you're curious about how a pain relief patch works, need guidance on correct application, or are seeking suitable patch options based on your needs. MantraBot is here to assist, anytime, anywhere.</p>
					<h4>Why Use MantraBot?</h4>
					<ul>
						<li>
							<strong>Personalized Guidance:</strong>
							<p>MantraBot helps you navigate different patch types based on your symptoms or condition.</p>
						</li>
						<li>
							<strong>Usage Instructions:</strong>
							<p>From where to apply a patch to how long to wear it. Get clear, step-by-step instructions.</p>
						</li>
						<li>
							<strong>Doctor-Friendly Support:</strong>
							<p>Healthcare professionals can use MantraBot to access technical summaries, dosage formats, and patient suitability criteria.</p>
						</li>
						<li>
							<strong>Reminders & Tips:</strong>
							<p>Get daily wellness tips and reminders to make patch therapy a habit, not a hassle.</p>
						</li>
						<li>
							<strong>Anytime Access:</strong>
							<p>Available 24/7 on your device.</p>
						</li>
					</ul>
					<h4>What Can You Ask MantraBot?</h4>
					<p>Here are a few ways MantraBot can help:</p>
					<ul>
						<li><p>“Which patch is right for shoulder pain?”</p></li>
						<li><p>“How does a nicotine patch work?”</p></li>
						<li><p>“Can I use a pain patch along with other medications?”</p></li>
						<li><p>“What is the correct dosage for the rivastigmine patch?”</p></li>
						<li><p>“Where should I apply the patch for leg pain?”</p></li>
					</ul>					
				</div>
				<div class="col-md-6 mt-20">
					<div class="benifits_section">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/mantra_bot_img1.png?Version=<?php echo Version; ?>"
							alt="mantra_bot_img1">
						<div class="benifits__details">
							<h4>Benefits for Patients</h4>
							<ul>
								<li>Easy-to-understand information</li>
								<li>Reduces confusion about patch usage</li>
								<li>Encourages treatment compliance</li>
								<li>Offers non-judgmental, 24/7 support</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-6 mt-20">
					<div class="benifits_section">
						<img loading="eager"
							src="<?php echo base_url();?>assets/img/mantra_bot_img2.png?Version=<?php echo Version; ?>"
							alt="mantra_bot_img1">
						<div class="benifits__details">
							<h4>Benefits for Doctors</h4>
							<ul>
								<li>Saves consultation time for routine questions</li>
								<li>Supports patient education post-consultation</li>
								<li>Helps identify ideal patch options and alternatives</li>
								<li>Aids in long-term adherence monitoring</li>
							</ul>
						</div>
					</div>
				</div>	
				<div class="col-md-12 talk_matrabot">
					<img class="" loading="eager"
						src="<?php echo base_url();?>assets/img/mantrabot_bg.png?Version=<?php echo Version; ?>"
						alt="object">
					<div class="talk_matrabot_details">
						<h4>Try MantraBot Now</h4>
						<div class="buy_now_section">
							<a class="primary_btn" href="<?php echo base_url();?>">Talk To MantraBot</a>
							<!-- <a class="secondary_btn" href="<?php echo base_url();?>">Try MantraBot</a> -->
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