<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('layout/meta');  ?>
    <?php $this->load->view('layout/styles');  ?>
    <style>
        .blog_section .blog_img {
            height: 300px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        @media (max-width: 767px) {
            .blog_section .blog_img {
            height: 200px;
        }
        }
    </style>
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Page Loading -->
    <div id="loading"></div>
    <!-- Nav Menu  -->
    <?php $this->load->view('layout/nav');  ?>
    <!-- more_blogs_section starts -->
    <section class="blog_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="d-none">Health Insights on Carica Papaya, Dengue & Immunity</h1>
                    <h3 class="blog_title">Explore More <br>About Dengue, Carica papaya, and Natural Remedies</h3>
                    <p class="blog_text">Stay informed with our insightful blogs on dengue prevention, Carica papaya benefits, and much more.</p>
                </div>
                <?php if(!empty($blogs)){ ?>
                <?php foreach($blogs as $blog_list){ ?>
                <div class="col-md-6">
                    <a href="<?php echo base_url();?><?php echo $blog_list['slug']; ?>">
                        <img loading="eager" class="w-100 blog_img"
                            src="<?php echo base_url('uploads/blog/');?><?php echo $blog_list['blog_image_1']; ?>?Version=<?php echo Version; ?>"
                            class="blog_img" alt="<?php echo $blog_list['blog_image_1_alt']; ?>" />
                        <div class="py-3 px-2">
                            <div class="calender_setting">
                                <img loading="eager" class="calender"
                                    src="<?php echo base_url();?>/assets/img/calender.png?Version=<?php echo Version; ?>"
                                    alt="calender" />
                                <p class="date_para"><?php echo date('d M, Y',strtotime($blog_list['blog_date']));?></p>
                            </div>
                            <h6 class="blog_sub_title"><?php echo $blog_list['blog_title']; ?></h6>
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="read_more">Read More</p>
                                <?php if(!empty($blog_list['blog_read_time'])){ ?> <p class="read_more_blog">
                                    <?php echo $blog_list['blog_read_time'].' Minutes to read'; ?></p><?php } ?>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
                <?php } ?>
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