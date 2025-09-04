<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
    <?php $this->load->view('layout/styles');  ?>
    <style>
    .lead_form_block .form-group{
        display: flex;
    flex-direction: column;
    }
    .lead_form_block label{
            text-align: left;
    }
    .lead_form_block label.is-invalid {
        color: red;
        text-align: left;
        width: 100%;
        text-transform: math-auto;
    }
    .lead_form_block .form-control.is-invalid {
        border-color: #000;
        background-image: none;
        /*border: 1px solid #aaa;*/
    }
    .lead_form_block .form-control.is-invalid:focus{
            box-shadow: none;
    }
    .contact_us_sec .form-control {
      font-size: 14px;
    }
    .contact_us_sec .label_contactus {
        display: flex;
        text-align: left;
    }
    .the-count {
      text-align: end;
    }
    @media (max-width: 767px){
        .for_mobile_responsive {
            display: flex !important;
            flex-direction: column !important;
        }
        .mbpadding{
            padding: 10px 0px !important;
        }
    }
</style>
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Page Loading -->
    <div id="loading"></div>
    <!-- Nav Menu  -->
    <?php $this->load->view('layout/nav');  ?>
    <!-- contact_us -->
    <section id="contact_us" class="contact_us_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contact_us">
                    <h1 class="fs-16">Contact Us</h1>                      
                    <h3 class="sub_title">Get in Touch with us</h3>
                    <div class="contact_us_details">
                        <img loading="eager" src="<?php echo base_url();?>assets/img/mail.png?Version=<?php echo Version; ?>"
                            alt="mail">
                        <div class="company_details">
                            <h4>Mail</h4>
                            <a href="mailto:internationalsales@azistabhutanhealthcare.com">internationalsales@azistabhutanhealthcare.com</a>
                        </div>
                    </div>
                    <div class="contact_us_details">
                        <img loading="eager" src="<?php echo base_url();?>assets/img/whatsapp.png?Version=<?php echo Version; ?>"
                            alt="whatsapp">
                        <div class="company_details">
                            <h4>Reach Us On Whatsapp Number</h4>
                            <a href="tel:+975-17806579">+975-17806579</a>
                        </div>
                    </div>
                    <div class="contact_us_details">
                        <img loading="eager" src="<?php echo base_url();?>assets/img/whatsapp.png?Version=<?php echo Version; ?>"
                            alt="whatsapp_1">
                        <div class="company_details">
                            <h4>For International Enquiries, Reach <br> Us On Whatsapp</h4>
                            <a href="tel:+65-83212026">+65-83212026</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" id='zohoSupportWebToCase' align='center'>
                    <form name='zsWebToCase_918976000019547015' id='zsWebToCase_918976000019547015'
                        action='https://helpcenter.azistaindustries.com/support/WebToCase' method='POST' class="leadForm lead_form_block"
                        onSubmit='return zsValidateMandatoryFields()' enctype='multipart/form-data'> <input type='hidden'
                            name='xnQsjsdp' value='edbsn20828c528ec996d103a8578d69dabfe5' />
                        <input type='hidden' name='xmIwtLD'
                            value='edbsnfa0928a06d959acaceddd7417d95187485715b41a69153736f469b3751481023' />
                        <input type='hidden' name='xJdfEaS' value /> <input type='hidden' name='actionType' value='Q2FzZXM=' /> <input
                            type="hidden" id="property(module)" value="Cases" /> <input type="hidden" id="dependent_field_values_Cases"
                            value="&#x7b;&quot;JSON_VALUES&quot;&#x3a;&#x7b;&#x7d;,&quot;JSON_SELECT_VALUES&quot;&#x3a;&#x7b;&#x7d;,&quot;JSON_MAP_DEP_LABELS&quot;&#x3a;&#x5b;&#x5d;&#x7d;" />
                        <input type='hidden' name='returnURL' value='https&#x3a;&#x2f;&#x2f;www.caritero.com&#x2f;successzoho' />    
                        <div class="row w-96">
                            <div class="col-md-4 my-3">
                                <label class="label_contactus" for="enquiry_name">Full Name</label><br>
                                <!-- <input class="form-control" type="text" name="enquiry_name" /> -->
                                <input type='text' maxlength='120' name='Contact Name'
                                class='manfieldbdr form-control' placeholder="Please enter your name" />
                                <label id="Contact_Name-error" class="is-invalid" for="Contact_Name"></label>
                            </div>
                            <div class="col-md-4 my-3">
                                <label class="label_contactus" for="enquiry_mail">Email Address</label><br>
                                <!-- <input class="form-control" type="text" name="enquiry_mail" /> -->
                                <input type='text' maxlength='120' name='Email' value
                                class='manfieldbdr form-control' placeholder="Enter your email Address" />
                                <label id="Email-error" class="is-invalid" for="Email"></label>
                            </div>
                            <div class="col-md-4 my-3">
                                <label class="label_contactus" for="enquiry_contact">Phone Number</label><br>
                                <!--<input class="form-control" type="text" name="enquiry_contact" maxlength="12" validator="mobile" />-->
                                <input type='text' maxlength='120' name='Phone' class="form-control" validator='mobile'  placeholder="Enter your mobile number" />
                                <label id="Phone-error" class="is-invalid" for="Phone"></label>
                            </div>
                            <!-- <div class="col-md-4 my-3">
                                <label class="label_contactus" for="enquiry_location">Location</label><br>
                                <input type="text" name="enquiry_location" />
                            </div> -->
                            <div class="col-sm-12 my-3">
                                <label class="label_contactus" for="enquiry_contact">Subject</label><br>
                            <input type='text' maxlength='255' name='Subject' value  placeholder="Enter specialisation"
                                class='manfieldbdr form-control' />
                                <label id="Subject-error" class="is-invalid" for="Subject"></label>
                            </div>
                            <div class="col-sm-12 my-3">
                                <label class="label_contactus" for="enquiry_comments">Comment</label><br>
                                <!--<textarea class="form-control" autocomplete="off" name="enquiry_comments" minlength="3"-->
                                <!--    maxlength="600" placeholder="Enter your message"></textarea>-->
                                    <textarea name='Description' maxlength='3000' width='250' class="form-control" autocomplete="off" minlength="3"  maxlength="600" height='250'  placeholder="Enter your message"></textarea>
                                    <label id="Description-error" class="is-invalid" for="Description"></label>
                                <div id="the-count" class="the-count"><span id="current">0</span><span id="maximum">/600</span></div>
                            </div>
                            <?php if(Recaptcha == 'True'){ ?>
                            <?php if(($this->config->item('google_key')) && ($this->config->item('google_secret'))){ ?>
                            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                            <?php } else { echo "Check Google Recaptcha Settings"; } ?>
                            <?php } ?>
                            <div class="col-md-12 form_submit">
                                <!-- <input type="submit" class="primary_btn" id="submit" value="Submit"> -->
                                <input type='submit' id="zsSubmitButton_918976000019547015" class='zsFontClass primary_btn' value='Submit'>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.19.5/jquery.validate.min.js"></script>
  
    <script>
        $(document).ready(function () {
            $("#zsWebToCase_918976000019547015").validate({
                rules: {
                    "Contact Name": {
                        required: true
                    },
                    Email: {
                        required: true,
                        email: true
                    },
                    Phone: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10
                    },
                    Subject: {
                        required: true
                    },
                    Description: {
                        required: true,
                        minlength: 10,
                        maxlength: 600
                    }
                },
                messages: {
                    "Contact Name": {
                        required: "Please enter your name"
                    },
                    Email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    Phone: {
                        required: "Please enter your mobile number",
                        digits: "Please enter at least 10 characters.",
                        minlength: "Please enter at least 10 characters.",
                        maxlength: "Please enter at least 10 characters."
                    },
                    Subject: {
                        required: "Please enter your specialisation"
                    },
                    Description: {
                        required: "Please describe what you're looking for",
                        minlength: "Minimum 10 characters required",
                        maxlength: "Maximum 600 characters allowed"
                    }
                },
                errorClass: "is-invalid",
                validClass: "is-valid",
                errorPlacement: function (error, element) {
                    error.insertAfter(element); // you can customize this
                }
            });
            //Phone Only Numbers
			$("input[validator='mobile']").on("input", function(e) {
				var self = $(this);
				self.val(self.val().replace(/[^0-9]/g, ''));
				if((e.keyCode >= 48 && e.keyCode <=57) || (e.keyCode >= 96 && e.keyCode <=105)) {
					// entered key is a number
				}else{
					e.preventDefault();
				}
			});
        });
</script>
    <!-- footer -->
    <?php $this->load->view('layout/footer');  ?>
    <!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
    <?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
    <?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
</body>
</html>