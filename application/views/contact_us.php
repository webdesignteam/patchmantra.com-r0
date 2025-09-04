<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
    <?php $this->load->view('layout/styles');  ?>
    <style>
        .nav_menu .fixed-top {
            background-color: rgb(251, 247, 248) !important;
            padding: 10px 0px;
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
        <div class="container-fluid">
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
                <div class="col-md-6 contact_form">
                    <h2 class="fs-16">Write to Us</h2>                      
                    <h3 class="sub_title">We are here to help you.</h3>
                    <div id='zohoSupportWebToCase'>
                        <form class="leadForm lead_form_block" name='zsWebToCase_918976000020972862' id='zsWebToCase_918976000020972862'
                            action='https://helpcenter.azistaindustries.com/support/WebToCase' method='POST'
                            onSubmit='return zsValidateMandatoryFields()' enctype='multipart/form-data'> <input type='hidden'
                                name='xnQsjsdp' value='edbsn20828c528ec996d103a8578d69dabfe5' /> <input type='hidden' name='xmIwtLD'
                                value='edbsn8a7f52b0f63baf098597fae473ffd68fecd5df6a6991854c263d9e0d5448ae65' /> <input type='hidden'
                                name='xJdfEaS' value='' /> <input type='hidden' name='actionType' value='Q2FzZXM=' /> <input type="hidden"
                                id="property(module)" value="Cases" /> <input type="hidden" id="dependent_field_values_Cases"
                                value="&#x7b;&quot;JSON_VALUES&quot;&#x3a;&#x7b;&#x7d;,&quot;JSON_SELECT_VALUES&quot;&#x3a;&#x7b;&#x7d;,&quot;JSON_MAP_DEP_LABELS&quot;&#x3a;&#x5b;&#x5d;&#x7d;" />
                            <input type='hidden' name='returnURL' value='https&#x3a;&#x2f;&#x2f;remash.co.in&#x2f;successzoho' />
                            <div class="row">
                                <div class="col-md-6 ">
                                    <label class="label_contactus" for="enquiry_name">Full Name</label>
                                    <!-- <input class="form-control" type="text" name="enquiry_name" placeholder="Enter Your full name" /> -->
                                    <input type='text' maxlength='120' name='Contact Name' class='manfieldbdr form-control' placeholder="Enter Your full name"/>
                                    <label id="Contact_Name-error" class="is-invalid" for="Contact_Name"></label>
                                </div>
                                <div class="col-md-6">
                                    <label class="label_contactus" for="Phone">Contact Number</label>
                                    <!-- <input class="form-control" type="text" name="enquiry_contact" maxlength="12" validator="mobile" /> -->

                                    <div class="phone-input-container">
                                        <select>
                                            <option value="+91">+91 (IND)</option>
                                            <option value="+1">+1 (USA)</option>
                                            <option value="+44">+44 (UK)</option>
                                        </select>
                                        <div class="line"><hr></div>
                                        <input type="tel" id="Phone" name="Phone"  maxlength="12" class="form-control" validator="mobile" />
                                    </div>
                                    <label id="Phone-error" class="is-invalid" for="Phone"></label>
                                </div>
                                <div class="col-md-6 ">
                                    <label class="label_contactus" for="enquiry_mail">Email Address</label>
                                    <!-- <input class="form-control" type="text" name="enquiry_mail" placeholder="Enter Your email address" /> -->
                                    <input type='text' maxlength='120' name='Email' value='' class='manfieldbdr form-control' placeholder="Enter Your email address"/>
                                    <label id="Email-error" class="is-invalid" for="Email"></label>
                                </div>
                                
                                <div class="col-md-6 ">
                                    <label class="label_contactus" for="enquiry_location">Subject </label>
                                    <!-- <input class="form-control" type="text" name="enquiry_location" placeholder="Enter your Subject" /> -->
                                    <input type='text' maxlength='255' name='Subject' value='' class='manfieldbdr form-control' placeholder="Enter your Subject"/>
                                    <label id="Subject-error" class="is-invalid" for="Subject"></label>
                                </div>
                                <div class="col-sm-12">
                                    <label class="label_contactus" for="enquiry_comments">Your Message or Quarry</label>
                                    <!-- <textarea class="form-control" autocomplete="off" name="enquiry_comments" minlength="3"
                                        maxlength="600" placeholder="Enter your message or Quarry"></textarea> -->
                                        <textarea name='Description' maxlength='3000' width='250' height='250' class="form-control" autocomplete="off" placeholder="Enter your message or Quarry"></textarea>
                                        <label id="Description-error" class="is-invalid" for="Description"></label>
                                    <div id="the-count" class="the-count"><span id="current">0</span><span id="maximum">/600</span>
                                    </div>
                                </div>
                                <?php if(Recaptcha == 'True'){ ?>
                                <?php if(($this->config->item('google_key')) && ($this->config->item('google_secret'))){ ?>
                                <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">
                                <?php } else { echo "Check Google Recaptcha Settings"; } ?>
                                <?php } ?>
                                <div class="col-md-12  text-left">
                                    <!-- <input type="submit" class="primary_btn" id="submit" value="Submit"> -->
                                    <input class="secondary_btn" type='submit' id="zsSubmitButton_918976000020972862" class='zsFontClass primary_btn' value='Submit'>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
   
    <!-- footer -->
    <?php $this->load->view('layout/footer');  ?>
    <!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <?php if(DisclaimerPopUp == 'True'){ $this->load->view('layout/disclaimerhomepage'); }?>
    <?php if(Popbox == 'True'){ $this->load->view('layout/popbox'); }?>
    <?php if(OnLoadModal == 'True'){ $this->load->view('layout/onloadmodal'); }?>
</body>
</html>