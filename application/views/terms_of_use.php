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
			<a href="<?php echo base_url();?>terms-of-use"><strong>Terms of Use</strong></a>
		</div>
	</div>

	<div class="terms_of_uses_section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 tersms_details">
					<h1 class="tersms_title">Terms of Use</h1>
				</div>
				<div class="col-md-12">
					<p>Welcome to Patch Mantra, a digital initiative by Hetero Healthcare Limited. By accessing or using our website, digital tools (including MantraBot), or any content provided through Patch Mantra, you agree to comply with and be bound by the following terms and conditions.</p>
					<b>Please read these Terms of Use carefully before using the website.</b>
					<h5 class="sub_title">Effective Date:</h5>
					<h5 class="sub_title">Acceptance of Terms</h5>
					<p>By using this website, you acknowledge that you are at least 18 years old and capable of entering into a legally binding agreement. If you do not agree to these Terms of Use, please do not access or use our services.</p>
					<h5 class="sub_title">Purpose of the Platform</h5>
					<p>Patch Mantra is designed to provide general information about transdermal patch therapies, health awareness, and Hetero Healthcare’s related products. The platform is intended for educational purposes only and does not replace professional medical advice.</p>
					<p>Always consult a registered healthcare professional before starting or altering any medical treatment.</p>
					<h5 class="sub_title">Intellectual Property Rights</h5>
					<p>All content on this website including text, graphics, logos, videos, images, software, and trademarks is the property of Hetero Healthcare Limited or its licensors and is protected by applicable intellectual property laws.</p>
					<p>You may not copy, modify, distribute, publish, transmit, or create derivative works from any material on the site without prior written consent.</p>
					<h5 class="sub_title">User Responsibilities</h5>
					<p>As a user of this platform, you agree to:</p>
					<ul>
						<li>Use the website for lawful purposes only</li>
						<li>Refrain from submitting false or misleading information</li>
						<li>Avoid any activity that may interfere with website functionality or security</li>
						<li>Respect the privacy and rights of other users</li>
					</ul>
					<h5 class="sub_title">Medical Disclaimer</h5>
					<p>While Patch Mantra provides information on patch therapy and related health conditions, this content is not a substitute for medical advice or treatment. Always seek the guidance of a qualified medical practitioner before making healthcare decisions.</p>
					<h5 class="sub_title">Use of MantraBot</h5>
					<p>MantraBot is a digital assistant created to support general awareness and user engagement. It does not provide medical advice, diagnosis, or treatment. Any decisions based on information provided by MantraBot should be validated by a certified healthcare provider.</p>
					<h5 class="sub_title">Third-Party Content & Links</h5>
					<p>Patch Mantra may contain links to third-party websites or references. These are provided for convenience only. Hetero Healthcare does not control, endorse, or guarantee the accuracy of third-party content and disclaims any liability arising from their use.</p>
					<h5 class="sub_title">Limitation of Liability</h5>
					<p>To the fullest extent permitted by law, Hetero Healthcare Limited will not be liable for any direct, indirect, incidental, consequential, or punitive damages arising from:</p>
					<ul>
						<li>The use or inability to use the Patch Mantra website or tools</li>
						<li>Reliance on any content or information presented</li>
						<li>Unauthorized access or alteration of user data</li>
						<li>Use of the platform is at your own risk.</li>
					</ul>
					<h5 class="sub_title">Termination of Access</h5>
					<p>We reserve the right to restrict or terminate your access to Patch Mantra at our discretion, without prior notice, for any behavior that we believe violates these Terms of Use or is otherwise harmful to other users or the integrity of the platform.</p>
					<h5 class="sub_title">Changes to Terms</h5>
					<p>We may update or revise these Terms of Use periodically. Updates will be reflected on this page with the effective date. Continued use of the site after changes constitutes your agreement to the updated terms.</p>
					<h5 class="sub_title">Contact Us</h5>
					<p>If you have any questions, concerns, or requests regarding your privacy, please contact:</p>
					<h5 style="color: #000; margin-bottom: 5px">Hetero Healthcare Limited</h5>
					<div class="contact_us_details">
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/call.png?Version=<?php echo Version; ?>" alt="call">
							<a href="tel:18001034696">18001034696</a>
					</div>					
					<div class="contact_us_details">
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/mail.png?Version=<?php echo Version; ?>" alt="call">
							<a href="mailto:sales@heterohealthcare.com">sales@heterohealthcare.com</a>
					</div>					
					<div class="contact_us_details">
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/location.png?Version=<?php echo Version; ?>" alt="location">
							<a>Sy No. 83/1, Plot No.16/A/1 & 16/A/2, 19th & 20th Floor Hetero Tower, Commerzone, Silpa Gram Craft Village, Madhapur, Hyderabad, Shaikpet, Telangana, India - 500 081.</a>
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