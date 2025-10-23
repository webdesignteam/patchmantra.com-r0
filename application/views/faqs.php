<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('layout/meta');  ?>
	<?php $this->load->view('layout/styles');  ?>
	<style>
		.faq_section {
			padding: 170px 0px 50px 0px;
			
		}
		.breadcrumb-wrapper.scrolled .breadcrumb{
			width: 200px;
		}
		@media (max-width: 767px) {
            .faq_section {
                padding: 150px 0px 0px 0px;
            }
            .faq_section .faq_details h3{
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
      "@id": "https://www.patchmantra.com/faqs",
      "url": "https://www.patchmantra.com/faqs",
      "name": "PatchMantra FAQs – Transdermal Patch Therapy, MantraBot & Product Guide",
      "description": "Find answers about PatchMantra transdermal patch therapy, MantraBot, and products like Nitof, Hetriva, Trans D, and K Plast. Learn benefits, safety, and usage tips.",
      "mainEntity": {
        "@type": "FAQPage",
        "mainEntity": [

          {
            "@type": "Question",
            "name": "What is PatchMantra and how does it help with wellness?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "PatchMantra is an initiative by Hetero Healthcare that promotes smart healing through transdermal patch therapy. Our patches deliver medicine or herbal ingredients directly through the skin for effective pain relief, cognitive support, and lifestyle wellness."
            }
          },
          {
            "@type": "Question",
            "name": "What are transdermal patches and why are they effective?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Transdermal patches are medicated adhesive patches that deliver active ingredients into the bloodstream through the skin. They ensure controlled, long-lasting relief without the need for daily pills and minimize digestive side effects."
            }
          },

          {
            "@type": "Question",
            "name": "What is MantraBot and how does it assist PatchMantra users?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "MantraBot is PatchMantra’s smart digital assistant designed to guide users through patch therapy. It helps you choose the right patch, provides usage instructions, sends reminders, and offers wellness tips for a better healing journey."
            }
          },
          {
            "@type": "Question",
            "name": "How does MantraBot support in using transdermal patches safely?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "MantraBot ensures you use your PatchMantra patches correctly by giving real-time instructions, dosage timing reminders, and product recommendations. It’s like having a healthcare assistant available anytime."
            }
          },

          {
            "@type": "Question",
            "name": "What is Nitof Nicotine Patch and how does it work?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Nitof Nicotine Patch by PatchMantra supports smoking cessation by delivering a steady dose of nicotine through the skin. This helps control cravings and withdrawal symptoms, making it easier to quit smoking naturally."
            }
          },
          {
            "@type": "Question",
            "name": "How to use Nitof Nicotine Patches safely?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Apply one Nitof patch to clean, dry skin on the upper arm or chest. Keep it on for up to 24 hours and replace it daily. Avoid smoking while using the patch for safe and effective results."
            }
          },

          {
            "@type": "Question",
            "name": "What is Hetriva Patch used for?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Hetriva Patch by PatchMantra is a cognitive support patch that helps improve focus, concentration, and mental clarity. It uses transdermal delivery to provide nutrients that enhance brain function naturally."
            }
          },
          {
            "@type": "Question",
            "name": "Who can benefit from using Hetriva cognitive patches?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Students, professionals, and adults experiencing mental fatigue or low focus can benefit from Hetriva. It’s a natural, non-invasive alternative for maintaining healthy cognitive function."
            }
          },

          {
            "@type": "Question",
            "name": "What is Trans D Patch and what is it used for?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Trans D Patch by PatchMantra is designed for muscle and joint pain relief. It delivers herbal actives directly to the affected area through the skin, offering fast, long-lasting comfort without oral medication."
            }
          },
          {
            "@type": "Question",
            "name": "Can Trans D Patch help with back or shoulder pain?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, Trans D Patch provides targeted relief for back pain, shoulder stiffness, neck pain, and muscle soreness. Its transdermal technology ensures deep penetration and sustained pain relief."
            }
          },

        
          {
            "@type": "Question",
            "name": "What is K Plast Patch by PatchMantra?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "K Plast Patch by PatchMantra is a medicated adhesive patch used for localized muscle and joint pain relief. It provides warming comfort and active ingredients that relax muscles and reduce stiffness."
            }
          },
          {
            "@type": "Question",
            "name": "How to apply K Plast Patch correctly?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Clean and dry the affected area before applying the K Plast Patch. Press firmly for full contact and keep it on for the recommended duration. Avoid using it on irritated or broken skin."
            }
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
          "name": "FAQs",
          "item": "https://www.patchmantra.com/faqs"
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
			<a href="<?php echo base_url();?>faqs"><strong>FAQs</strong></a>
		</div>
	</div>

	<section class="faq_section " id="faq">
		<div class="faq_section_bacground">
			<div class="container">
				<div class="row">
					<div class="col-md-12 faq_details">
						<h1 class="d-none">Frequently Asked Questions ?</h1>
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
									<div class="cardf">
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
									</div>
									<div class="faq_img">
										<img class="w-100"
											src="<?php echo base_url();?>assets/img/faq_img.png?Version=<?php echo Version; ?>"
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