<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.breadcrumb-wrapper.scrolled .breadcrumb{
			width: 200px;
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
			<a href="<?php echo base_url();?>privacy-policy"><strong>Privacy Policy</strong></a>
		</div>
	</div>

	<div class="terms_of_uses_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 tersms_details">
					<h1 class="tersms_title">Privacy Policy</h1>
				</div>
				<div class="col-md-12">
					<p>At PatchMantra, an initiative by Hetero Healthcare Limited, we value your privacy and are committed to safeguarding your personal information. This Privacy Policy outlines how we collect, use, protect, and share your data when you interact with our website, tools like MantraBot, and other services.</p>
					<b>Please read these Terms of Use carefully before using the website.</b>
					<h5 class="sub_title">Effective Date:</h5>
					<h5 class="sub_title">1. Information We Collect</h5>
					<p>We may collect the following types of information:</p>
					<h6 >Personal Information:</h6>
					<p>Name, email address, phone number, and other contact details you provide via MantraBot, forms, newsletter subscriptions, or customer support.</p>
					<h6>Health-Related Information:</h6>
					<p>Voluntarily shared data about patch usage, symptoms, or preferences (via tools like MantraBot).</p>
					<h5>Device & Usage Data:</h5>
					<p>IP address, browser type, device identifiers, pages visited, and interaction patterns.</p>					
					<h6>Cookies & Tracking Data:</h6>
					<p>Used to enhance site performance, personalize experience, and analyze usage trends.</p>
					<h5 class="sub_title">2. How We Use Your Information</h5>
					<p>We use your information for purposes including:</p>
					<ul>
						<li>To improve your experience with Patch Mantra and MantraBot</li>
						<li>To personalize content, recommendations, and patch education</li>
						<li>To communicate updates, offers, and newsletters (with your consent)</li>
						<li>To provide customer support and respond to queries</li>
						<li>For internal research, analytics, and platform enhancements</li>
						<li>To comply with legal obligations and regulatory requirements</li>
					</ul>
					<h5 class="sub_title">3. Sharing & Disclosure</h5>
					<p>We do not sell your personal information. We may share data only:</p>
					<ul>
						<li>With trusted service providers who assist in operations (e.g., email delivery, analytics) under strict confidentiality</li>
						<li>With medical experts or partners (anonymized/aggregated only) for improving healthcare support</li>
						<li>If required by law, legal process, or government request</li>
					</ul>
					<h5 class="sub_title">4. Your Rights & Choices</h5>
					<p>You have the right to:</p>
					<ul>
						<li>Access or update your personal data</li>
						<li>Opt-out of marketing communications</li>
						<li>Request data deletion (as permitted by law)</li>
						<li>Disable cookies via your browser settings</li>
					</ul>
					<h5 class="sub_title">5. Data Security</h5>
					<p>We implement appropriate administrative, technical, and physical safeguards to protect your data from unauthorized access, alteration, or disclosure.</p>
					<p>However, no online platform is 100% secure, and we recommend using secure networks when accessing our services.</p>
					<h5 class="sub_title">6. Data Security</h5>
					<p>Our platform is not intended for children under 18. We do not knowingly collect data from minors. If we become aware of such data, we will take steps to delete it promptly.</p>

					<h5 class="sub_title">7. Third-Party Links</h5>
					<p>Patch Mantra may contain links to third-party websites. We are not responsible for the privacy practices or content of such external sites. Please review their privacy policies before providing any personal information.</p>

					<h5 class="sub_title">8. Updates to This Policy</h5>
					<p>We may update this Privacy Policy from time to time. Changes will be posted on this page with the “Effective Date” updated accordingly. Continued use of our services implies acceptance of the revised terms.</p>

					<h5 class="sub_title">9. Contact Us</h5>
					<p>If you have any questions, concerns, or requests regarding your privacy, please contact:</p>
					<h5 style="color: #000; margin-bottom: 5px">Hetero Healthcare Limited</h5>
					<div class="contact_us_details">
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/call.png?Version=<?php echo Version; ?>" alt="call">
							<a href="tel:18001034696">1800 103 4696</a>
					</div>					
					<div class="contact_us_details">
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/mail.png?Version=<?php echo Version; ?>" alt="call">
							<a href="mailto:sales@heterohealthcare.com">sales@heterohealthcare.com</a>
					</div>					
					<div class="contact_us_details">
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/location.png?Version=<?php echo Version; ?>" alt="location">
							<a >Sy No. 83/1, Plot No.16/A/1 & 16/A/2, 19th & 20th Floor Hetero Tower, Commerzone, Silpa Gram Craft Village, Madhapur, Hyderabad, Shaikpet, Telangana, India - 500 081.</a>
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