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
		.blog_detail_sec{
		    padding: 120px 0px 50px 0px;
		}
		.breadcrumb-wrapper.scrolled .breadcrumb{
			width: 600px;
		}
		@media (max-width: 767px) {
            .blog_detail_sec  {
    			padding: 80px 0px 0px 0px;
                background-image: none;
    		}
    		.blog_detail_sec .more_blogs{
    		    margin-bottom: 30px;
    		}
    		.display_flex{
    		    display: flex;
    		    flex-direction: column-reverse;
    		}
        }
        .blog_detail_sec .explore_products a{
            background: unset;
        }
        .table_content ul{
            padding-left: 0px;
        }
        .table_content ul a:hover{
            color: #613323 ;
        }
        .social_icons{
            gap: 30px;
        }
        .social_icons a i{
            width: 36px;
            height: 36px;
            background: #BC8365;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            color: #fff;
            font-size: 18px;
            border: 1px solid #BC8365;
        }
        .social_icons a i:hover{
            background: #fff;
            color: #BC8365;
            transition: color 0.3s ease;
        }
        .blog_detail_sec .more_blogs .blog_list .blog_list_img {
    width: 40%;
    border-radius: 8px;
    height: 80px;
}
.blog_list_more{
        display: flex;
    justify-content: space-around;
    gap: 10px;
}
.blog_detail_sec .more_blogs {
    background-color: #F6F6F6;
    padding: 20px 16px;
    border-radius: 14px;
    margin-top: 0px;
    margin-bottom: 30px;
}
.blog_detail_sec .more_blogs p{
    color: #000;
}
 .more_blogs .blog_list:hover p{
     color: #BC8365;
 }
 .blog_progress_bar {
    height: 5px;
    background: #BC8365;
    width: 0%;
    position: fixed;
    top: 58px;
        z-index: 9999
}
.blog_detail_sec .stick_right_section .row .box_color{
    padding: 50px 20px;
}
	</style>
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
            <div class="row display_flex">
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
                        
                        
                        <div class="more_blogs">
                            <?php if(!empty($moreblogs)){ ?>
                                <h5 class="more_blog_title">More from Blog</h5>
                                <?php foreach($moreblogs as $moreblogs_list){ ?>
                                    <div class="blog_list">
                                        <a class="blog_list_more" href="<?php echo base_url();?><?php echo $moreblogs_list['slug']; ?>">
                                            <img class="blog_list_img" src="<?php echo base_url('uploads/blog/');?><?php echo $moreblogs_list['blog_image_1']; ?>?Version=<?php echo Version; ?>" alt="<?php echo $moreblogs_list['blog_image_1_alt']; ?>" title="<?php echo $moreblogs_list['blog_image_1_alt']; ?>">
                                            <p class="blog_list_name m-0"><?php echo $moreblogs_list['blog_title']; ?></p>
                                        </a>
                                    </div>
                                    <p class="date"><?php echo date('M d, Y',strtotime($moreblogs_list['blog_date']));?></p>
                                <?php } ?>
                            <?php } ?>
                        </div>
                        <div class="social_icons  d-flex align-items-center">
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
                    <h1><?php echo $blog_details[0]['blog_title']; ?></h1>
                    <div class="timer_setting">
                        <p><?php echo date('d M, Y',strtotime($blog_details[0]['blog_date']));?></p>
                        <p class="timer_more"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
								fill="currentColor" class="bi bi-hourglass-split timer" viewBox="0 0 16 16">
								<path
									d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z" />
							</svg> <?php echo $blog_details[0]['blog_read_time'].' Min to read'; ?>
						</p>
                    </div>
                    <img loading="eager" class="blog_img w-100"
                        src="<?php echo base_url('uploads/blog/');?><?php echo $blog_details[0]['blog_image_1']; ?>?Version=<?php echo Version; ?>"
                        class="blog_inner_img" alt="<?php echo $blog_details[0]['blog_image_1_alt']; ?>"
                        title="<?php echo $blog_details[0]['blog_image_1_alt']; ?>" />
                    <div class="blog_description"><?php echo $blog_details[0]['blog_long_description_1']; ?></div>
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