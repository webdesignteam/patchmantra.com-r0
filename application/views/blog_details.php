<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');  ?>
    <?php $this->load->view('layout/styles');  ?>
    <style>
            .blog_detail_sec h4 {
                font-weight: 500;
                font-size: 18px;
            }
            .blog_detail_sec ol{
                margin-left: 40px;
            }
            .bloginner_text ul.check-list {
            list-style: none;
            padding-left: 0;
            margin-left: 10px;
        }
        .bloginner_text ul.check-list li::before {
            content: "✔";
            color: green;
            /* You can change the color */
            margin-right: 8px;
        }
        .bloginner_text ul {
            margin-left: 34px;
            padding: 0px !important;
        }
        .bloginner_text a {
            color: #0e634f;
        }
        .table_content .social_links i {
            width: 30px;
            height: 30px;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: #fff;
        }
        .table_content .social_links i:hover {
            background: #0c6151;
        }
        .table_content .social_links {
            gap: 20px;
        }
    </style>
    <script type="application/ld+json"> 
{ 
  "@context": "https://schema.org", 
  "@type": "Article", 
  "mainEntityOfPage": { 
    "@type": "WebPage", 
    "@id": "<?php echo base_url();?><?php echo $blog_details[0]['slug']; ?>" 
  }, 
  "headline": "<?php echo $blog_details[0]['blog_title']; ?>", 
  "description": "<?php echo $blog_details[0]['meta_description']; ?>", 
  "image": "<?php echo base_url('uploads/blog/');?><?php echo $blog_details[0]['blog_image_1']; ?>", 
  "author": { 
    "@type": "Organization", 
    "name": "Caritero", 
    "url": "https://www.caritero.com" 
  }, 
  "publisher": { 
    "@type": "Organization", 
    "name": "Caritero", 
    "logo": { 
      "@type": "ImageObject", 
      "url": "https://www.caritero.com//assets/img/caritero_old_17_11zon.webp" 
    } 
  }, 
  "datePublished": "<?php echo date('Y-m-d',strtotime($blog_details[0]['blog_date']));?>T12:01:10+05:30", 
  "dateModified": "<?php echo date('Y-m-d',strtotime($blog_details[0]['blog_date']));?>T12:02:10+05:30" 
} 
</script> 
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <div class="blog_progress_container">
        <div class="blog_progress_bar" id="blog_progress_bar"></div>
    </div>
    <!-- Page Loading -->
    <div id="loading"></div>
    <!-- Nav Menu  -->
    <?php $this->load->view('layout/nav');  ?>
    <!-- blog_inner_container_starts -->
    <section id="blog_inner_home" class="blog_detail_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-4 table_content">
                    <div class="sticky-top" style="height:auto; overflow-y:auto;">
                        <?php if(!empty($tableofcontents)){ ?>
                        <h4 class="blog_title">Table of Contents</h4>
                        <ul class="nav nav-pills flex-column">
                            <?php foreach($tableofcontents as $tableofcontents_list){ ?>
                            <li class="mb-3"><a
                                    href="<?php echo base_url().''.$blog_details[0]['slug'].''.$tableofcontents_list['blogs_content_value']; ?>"><?php echo $tableofcontents_list['blogs_content_name']; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                        <div class="social_links d-flex align-items-center">
                            <!--<p class="mb-0 pr-10">Share : </p>-->
                            <a target="_blank"
                                href="https://twitter.com/intent/tweet?source=<?php echo base_url();?><?php echo $blog_details[0]['slug']; ?>&text=<?php if(empty($blog_details[0]['meta_h1'])){ echo $blog_details[0]['blog_title']; } else { echo $blog_details[0]['meta_h1']; }?>:%20<?php echo base_url();?><?php echo $blog_details[0]['slug']; ?>"
                                title="<?php if(empty($blog_details[0]['meta_h1'])){ echo $blog_details[0]['blog_title']; } else { echo $blog_details[0]['meta_h1']; }?>"><i
                                    class="fa fa-twitter footer_social_icons" aria-hidden="true"></i></a>
                            <a target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url();?><?php echo $blog_details[0]['slug']; ?>"
                                title="<?php if(empty($blog_details[0]['meta_h1'])){ echo $blog_details[0]['blog_title']; } else { echo $blog_details[0]['meta_h1']; }?>"><i
                                    class="fa fa-facebook footer_social_icons" aria-hidden="true"></i></a>
                            <a target="_blank"
                                href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo base_url();?><?php echo $blog_details[0]['slug']; ?>&title=<?php if(empty($blog_details[0]['meta_h1'])){ echo $blog_details[0]['blog_title']; } else { echo $blog_details[0]['meta_h1']; }?>&summary=&source=<?php echo base_url();?><?php echo $blog_details[0]['slug']; ?>"
                                title="<?php if(empty($blog_details[0]['meta_h1'])){ echo $blog_details[0]['blog_title']; } else { echo $blog_details[0]['meta_h1']; }?>"><i
                                    class="fa fa-linkedin footer_social_icons" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="bloginner_text col-md-8">
                    <div class="calender_setting">
                        <img loading="eager" class="calender"
                            src="<?php echo base_url();?>/assets/img/calender.png?Version=<?php echo Version; ?>"
                            alt="calender" />
                        <p class="date_para"><?php echo date('M d, Y',strtotime($blog_details[0]['blog_date']));?></p>
                    </div>
                    <h1><?php echo $blog_details[0]['blog_title']; ?></h1>
                    <img loading="eager" class="bolg_inner_page_banner w-100 pt-4 pb-5"
                        src="<?php echo base_url('uploads/blog/');?><?php echo $blog_details[0]['blog_image_1']; ?>?Version=<?php echo Version; ?>"
                        class="blog_inner_img" alt="<?php echo $blog_details[0]['blog_image_1_alt']; ?>"
                        title="<?php echo $blog_details[0]['blog_image_1_alt']; ?>" />
                    <div class="blog_description"><?php echo $blog_details[0]['blog_long_description_1']; ?></div>
                </div>
            </div>
        </div>
    </section>
    <section class="moreblog_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="blog_title">More From Blog</h3>
                </div>
                <div id="blog_slider" class="owl-carousel">
                    <?php if(!empty($moreblogs)){ ?>
                    <?php foreach($moreblogs as $moreblogs_list){ ?>
                    <div class="post">
                        <div class="">
                            <a href="<?php echo base_url();?><?php echo $moreblogs_list['slug']; ?>">
                                <img loading="eager" class="w-100 blog_img"
                                    src="<?php echo base_url('uploads/blog/');?><?php echo $moreblogs_list['blog_image_1']; ?>?Version=<?php echo Version; ?>"
                                    class="blog_img" alt="<?php echo $moreblogs_list['blog_image_1_alt']; ?>" />
                                <div class="py-3 px-2">
                                    <div class="calender_setting">
                                        <img loading="eager" class="calender"
                                            src="<?php echo base_url();?>/assets/img/calender.png?Version=<?php echo Version; ?>"
                                            alt="calender" />
                                        <p class="date_para">
                                            <?php echo date('d M, Y',strtotime($moreblogs_list['blog_date']));?></p>
                                    </div>
                                    <h6 class="blog_sub_title"><?php echo $moreblogs_list['blog_title']; ?></h6>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p class="read_more">Read More</p>
                                        <?php if(!empty($moreblogs_list['blog_read_time'])){ ?> <p
                                            class="read_more_blog">
                                            <?php echo $moreblogs_list['blog_read_time'].' Minutes to read'; ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <?php } ?>
                    <?php } ?>
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
    <!--<script src="<?php echo base_url();?>assets/lightslider/js/lightslider.js"></script>-->
    <!--<script>-->
    <!--    $(document).ready(function() {-->
    <!--        $('#image-gallery').lightSlider({-->
    <!--            gallery: true,-->
    <!--            item: 1,-->
    <!--            thumbItem: 3,-->
    <!--            slideMargin: 0,-->
    <!--            speed: 500,-->
    <!--            auto: true,-->
    <!--            loop: true,-->
    <!--            onSliderLoad: function() {-->
    <!--                $('#image-gallery').removeClass('cS-hidden');-->
    <!--            }-->
    <!--        });-->
    <!--    });-->
    <!--</script>-->
    <script>
        // scripts.js
        $(document).ready(function() {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                var docHeight = $(document).height();
                var winHeight = $(window).height();
                var scrollPercent = (scroll / (docHeight - winHeight)) * 100;
                $('#blog_progress_bar').css('width', scrollPercent + '%');
            });
        });
    </script>
</body>
</html>