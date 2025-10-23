<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.breadcrumb-wrapper.scrolled .breadcrumb{
			width: 200px;
		}
		.contact_us_sec .contact_us_links .social_link .social_icons ul {
            display: flex;
            gap: 18px;
            margin-top: 1rem;
            margin-bottom: 26px;
        }
	</style>
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebPage",
      "@id": "https://www.patchmantra.com/contact-us",
      "url": "https://www.patchmantra.com/contact-us",
      "name": "Contact PatchMantra – Reach Out for Patch Therapy Support",
      "description": "Get in touch with PatchMantra for inquiries, support, or feedback about our transdermal patch therapies.",
      "mainEntity": {
        "@type": "ContactPage",
        "contactOption": "Customer Service",
        "contactType": "Customer Support",
        "availableLanguage": "English",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+91-1800-103-4696",
          "contactType": "Customer Service",
          "areaServed": "IN",
          "availableLanguage": "English"
        },
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Sy No. 83/1, Plot No.16/A/1 & 16/A/2, 19th & 20th Floor Hetero Tower",
          "addressLocality": "Commerzone, Silpa Gram Craft Village, Madhapur",
          "addressRegion": "Telangana",
          "postalCode": "500081",
          "addressCountry": "IN"
        },
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
          "name": "Contact Us",
          "item": "https://www.patchmantra.com/contact-us"
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
			<a href="<?php echo base_url();?>contact-us"><strong>Contact Us</strong></a>
		</div>
	</div>

    <section id="contact_us" class="contact_us_sec">
        <div class="container-fluid">
            <div class="row contact_us_info">
                <div class="col-md-4 contact_us">
                    <div class="contact_us_links sticky-top">
                        <h1>Have a Question?</h1>                      
                        <h6 >We’d Love To Hear It</h6>
                        <div class="d-flex justify-content-center">
                            <img loading="eager" src="<?php echo base_url();?>assets/img/contact_us_img.png?Version=<?php echo Version; ?>"
                                alt="contact_us_img">
                        </div>    
                        <hr>
                        <div class="social_link">
                            <h6 class="footer_title">Follow Us</h6>
                            <div class="social_icons">
                                <ul>
                                    <li>
                                        <a href="https://www.instagram.com/patchmantra" target="_blank">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/@PatchMantra?themeRefresh=1" target="_blank">
                                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <!--<li>-->
                                    <!--    <a href="https://in.linkedin.com/company/hetero-healthcare-limited" target="_blank">-->
                                    <!--        <i class="fa fa-linkedin" aria-hidden="true"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="https://twitter.com/HeteroHCL" target="_blank">-->
                                    <!--        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">-->
                                    <!--            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>-->
                                    <!--        </svg>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="https://www.facebook.com/HeteroHealthcareOfficial/" target="_blank">-->
                                    <!--        <i class="fa fa-facebook" aria-hidden="true"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="https://in.pinterest.com/heterohealthcare" target="_blank">-->
                                    <!--        <i class="fa fa-pinterest" aria-hidden="true"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="" target="_blank">-->
                                    <!--        <i class="fa fa-reddit-alien" aria-hidden="true"></i>-->
                                    <!--    </a>-->
                                    <!--</li>-->
                                    <!--<li>-->
                                    <!--    <a href="" target="_blank">-->
                                    <!--        <i class="fa fa-quora" aria-hidden="true"></i>-->
                                    <!--    </a>-->
                                    <!--</li>					-->
                                                            
                                </ul>
                            </div>
                        </div>  
                    </div>

                </div>  
               <div class="col-md-8 contact_form">
                    <div class="display_flex">
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
                    </div>
                    					
					<div class="contact_us_details">
						<img loading="eager" 
							src="<?php echo base_url();?>assets/img/location.png?Version=<?php echo Version; ?>" alt="location">
							<a>Sy No. 83/1, Plot No.16/A/1 & 16/A/2, 19th & 20th Floor Hetero Tower, Commerzone, Silpa Gram Craft Village, Madhapur, Hyderabad, Shaikpet, Telangana, India - 500 081.</a>
					</div>

                    <hr>

                    <form id="lead_form" name="lead_form" method="post" class="leadForm lead_form_block">
                        <div class="row">
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="enquiry_name">Name *</label>
                                <input class="form-control" type="text" name="enquiry_name" placeholder="Your name" />
                            </div>
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="enquiry_mail">Mail Id *</label>
                                <input class="form-control" type="text" name="enquiry_mail" placeholder="Your mail address" />
                            </div>
                            <div class="col-md-6 my-2">
                                <label class="label_contactus" for="enquiry_contact">Mobile Number *</label>
                                <input type="text" name="enquiry_contact" placeholder="Your mobile number" maxlength="12" class="form-control" validator="mobile" />
                            </div>
                            
                            
                             <div class="col-md-6 my-2">
                                <label class="label_contactus" for="enquiry_subject">Product *</label>
                                <!-- <input type='text' maxlength='255' name='enquiry_subject' value='' class='form-control' placeholder="Enter your Subject"/> -->
                                 <select class="form-control" name="product_name">
                                    <option value="" selected="">Select the Product You Need Help With</option>
                                    <option value="Lidocaine Patches (Topical Anesthetic)">
                                        Lidocaine Patches (Topical Anesthetic)
                                    </option>
                                    <option value="NSAID Patches (Non-Steroidal Anti-Inflammatory Drugs)">
                                        NSAID Patches (Non-Steroidal Anti-Inflammatory Drugs)</option>
                                    <option value="Capsaicin Patches (Natural Irritant Therapy)">
                                        Capsaicin Patches (Natural Irritant Therapy)</option>
                                </select>
                            </div>
                            <div class="col-sm-12 my-2">
                                <label class="label_contactus" for="enquiry_comments">Your Message</label>
                                <textarea class="form-control" autocomplete="off" name="enquiry_comments" minlength="3"
                                    maxlength="600" placeholder="Enter the purpose"></textarea>
                                <div id="the-count" class="the-count"><span id="current">0</span><span id="maximum">/600</span>
                                </div>
                            </div>
                            <?php if(Recaptcha == 'True'){ ?>
                            <?php if(($this->config->item('google_key')) && ($this->config->item('google_secret'))){ ?>
                            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                            <?php } else { echo "Check Google Recaptcha Settings"; } ?>
                            <?php } ?>
                            <div class="col-md-12 form_submit">
                                <input type="submit" class="secondary_btn" id="submit" value="Submit">
                            </div>
                        </div>
                    </form>
                </div>

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