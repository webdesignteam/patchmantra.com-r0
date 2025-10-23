<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Home_model');
		$this->load->library('form_validation');
		$this->load->model('Home_model');
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->helper('url', 'form', 'string');
		// For Error Reporting
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);
		error_reporting(E_ALL);
	}

	public function index(){
		$data = array();
        $data['active_item'] = 'home';
        
        $data['seo'][0] = array(
    		'meta_title'=>'PatchMantra | Smart Transdermal Patches for Pain Relief & Care',
    		'meta_description'=>"Say goodbye to pills with PatchMantra’s innovative transdermal patches for pain relief, mental clarity & smoking cessation. Safe, effective & convenient healing",
    		'meta_keywords'=>'Transdermal patch therapy, pain relief patches, PatchMantra, pill-free pain relief, patch therapy benefits, smarter healing, Hetero Healthcare, innovative patch therapy',
    		'pagesgroup_id'=> '1'
		);
        //echo "<pre>"; print_r($data); exit;
        $this->load->view('index', $data);
	}
	public function blog_inner(){
		$data = array();
        $data['active_item'] = 'blog_inner'; 
		$this->load->view('blog_inner', $data);
	}
	public function about_us(){
		$data = array();
        $data['active_item'] = 'aboutus'; 
        $data['seo'][0] = array(
    		'meta_title'=>'About PatchMantra | Smarter, Gentler Pain Relief Patches',
    		'meta_description'=>"Know more about PatchMantra’s transdermal patch therapy – an innovative, pill-free solution for effective pain relief and smarter healing",
    		'meta_keywords'=>'Transdermal patch therapy, pain relief patches, PatchMantra, pill-free pain relief, patch therapy benefits, smarter healing, Hetero Healthcare, innovative patch therapy',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('about_us', $data);
	}
	public function why_patches(){
		$data = array();
        $data['active_item'] = 'why-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'PatchMantra – Discover the Power of Pain Relief Patches',
    		'meta_description'=>"Discover how PatchMantra’s transdermal patches provide effective, pill-free pain relief with targeted delivery, fewer side effects, and easier healing",
    		'meta_keywords'=>'PatchMantra, transdermal patch therapy, pain relief patches, pill-free pain relief, targeted pain relief, innovative patch therapy, smarter healing',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('why_patches', $data);
    }
	public function explore_patches(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'Explore PatchMantra’s Therapeutic Patches for Pain Relief',
    		'meta_description'=>"Discover PatchMantra’s range of transdermal patches, including options for acute and chronic pain, smoking cessation, and neurological support. Safe, effective, and easy to use.",
    		'meta_keywords'=>"PatchMantra, transdermal patches, pain relief patches, smoking cessation patch, Alzheimer's patch, Parkinson's patch, diclofenac patch, ketoprofen patch",
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('explore_patches', $data);
	}
	public function nitof_product(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'Quit Smoking with Nitof Nicotine Patches - 72-Hour Support',
    		'meta_description'=>"Quit smoking with Nitof nicotine patches (7mg, 14mg, 21mg). Learn how nicotine transdermal patches work and how to use them for effective cessation in India",
    		'meta_keywords'=>'nicotine patch, nicotine patch 14 mg, nicotine patch 21 mg, nicotine patch India, nicotine transdermal patch, what is a nicotine patch, how do nicotine patches work, nicotine patch 7mg, how to use nicotine patch, do nicotine patches work, smoking cessation patch, stop smoking patches, how to quit smoking, transdermal patch, smoking patch',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('nitof_product', $data);
	}
	public function nitof_product_21(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'Nitof 21 mg Nicotine Patch – Step 1 for Smoking Cessation',
    		'meta_description'=>"Learn how to use Nitof 21 mg nicotine patches for effective smoking cessation. Apply one patch daily for 24-hour nicotine release. Ideal for heavy smokers",
    		'meta_keywords'=>'Nitof 21 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid, nicotine patch India',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('nitof_product_21', $data);
	}
	public function nitof_product_14(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'Nitof 14 mg Nicotine Patch – Step 2 for Smoking Cessation',
    		'meta_description'=>"Stay on track with Nitof 14 mg nicotine patches. Apply every 72 hours for steady nicotine delivery and effective, pill-free smoking cessation",
    		'meta_keywords'=>'Nitof 14 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('nitof_product_14', $data);
	}
	public function nitof_product_7(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'Nitof 7 mg Nicotine Patch – Final Step to Quit Smoking',
    		'meta_description'=>"Complete your quit journey with Nitof 7 mg nicotine patch. Apply every 72 hours for steady nicotine delivery, reducing cravings in the final phase of cessation",
    		'meta_keywords'=>'Nitof 7 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid, final stage nicotine patch',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('nitof_product_7', $data);
	}
	public function hetriva_product(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'Hetriva Rivastigmine Patch | Dementia & Alzheimer’s Car',
    		'meta_description'=>"Hetriva rivastigmine patch is a dementia treatment patch for Alzheimer’s. This rivastigmine transdermal patch improves memory, focus & daily function",
    		'meta_keywords'=>'rivastigmine patch, rivastigmine transdermal patch, dementia treatment patch, Alzheimer patch, transdermal patch for Alzheimer’s',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('hetriva_product', $data);
	}
	public function hetriva_product_27(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
//         $data['seo'][0] = array(
//     		'meta_title'=>'Nitof 21 mg Nicotine Patch – Step 1 for Smoking Cessation',
//     		'meta_description'=>"Learn how to use Nitof 21 mg nicotine patches for effective smoking cessation. Apply one patch daily for 24-hour nicotine release. Ideal for heavy smokers",
//     		'meta_keywords'=>'Nitof 21 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid, nicotine patch India',
//     		'pagesgroup_id'=> '1'
// 		);
		$this->load->view('hetriva_product_27', $data);
	}
	public function hetriva_product_18(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
//         $data['seo'][0] = array(
//     		'meta_title'=>'Nitof 14 mg Nicotine Patch – Step 2 for Smoking Cessation',
//     		'meta_description'=>"Stay on track with Nitof 14 mg nicotine patches. Apply every 72 hours for steady nicotine delivery and effective, pill-free smoking cessation",
//     		'meta_keywords'=>'Nitof 14 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid',
//     		'pagesgroup_id'=> '1'
// 		);
		$this->load->view('hetriva_product_18', $data);
	}
	public function hetriva_product_9(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
//         $data['seo'][0] = array(
//     		'meta_title'=>'Nitof 7 mg Nicotine Patch – Final Step to Quit Smoking',
//     		'meta_description'=>"Complete your quit journey with Nitof 7 mg nicotine patch. Apply every 72 hours for steady nicotine delivery, reducing cravings in the final phase of cessation",
//     		'meta_keywords'=>'Nitof 7 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid, final stage nicotine patch',
//     		'pagesgroup_id'=> '1'
// 		);
		$this->load->view('hetriva_product_9', $data);
	}
	public function trans_d_product(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'Trans-D Diclofenac Patch – Joint & Muscle Pain Relief',
    		'meta_description'=>"Trans-D Diclofenac Transdermal Patch by PatchMantra helps relieve joint and muscle pain, reduce swelling, and provide long-lasting, convenient relief. ",
    		'meta_keywords'=>'transdermal patch for pain relief, Diclofenac patch, Diclofenac transdermal patch, joint pain relief patch, muscle pain patch, back pain patch',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('trans_d_product', $data);
	}
	public function trans_d_product_100(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
//         $data['seo'][0] = array(
//     		'meta_title'=>'Nitof 14 mg Nicotine Patch – Step 2 for Smoking Cessation',
//     		'meta_description'=>"Stay on track with Nitof 14 mg nicotine patches. Apply every 72 hours for steady nicotine delivery and effective, pill-free smoking cessation",
//     		'meta_keywords'=>'Nitof 14 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid',
//     		'pagesgroup_id'=> '1'
// 		);
		$this->load->view('trans_d_product_100', $data);
	}
	public function trans_d_product_200(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
//         $data['seo'][0] = array(
//     		'meta_title'=>'Nitof 7 mg Nicotine Patch – Final Step to Quit Smoking',
//     		'meta_description'=>"Complete your quit journey with Nitof 7 mg nicotine patch. Apply every 72 hours for steady nicotine delivery, reducing cravings in the final phase of cessation",
//     		'meta_keywords'=>'Nitof 7 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid, final stage nicotine patch',
//     		'pagesgroup_id'=> '1'
// 		);
		$this->load->view('trans_d_product_200', $data);
	}
	public function k_plast_product(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
        $data['seo'][0] = array(
    		'meta_title'=>'K-Plast Ketoprofen Patch | Transdermal Pain Relief for Arthritis',
    		'meta_description'=>"K-Plast ketoprofen transdermal patch delivers 24-hour relief from arthritis, muscle pain, back pain & chronic pain. Safe, effective, once-daily pain patch",
    		'meta_keywords'=>'K-Plast, transdermal patch for pain relief, pain patches for arthritis, pain relief patch, ketoprofen patch, chronic pain patch, muscle pain patch, post-surgery pain patch, joint pain patch, once-daily pain patch, medicated pain patch, back pain patch',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('k_plast_product', $data);
	}
	public function k_plase_product_details(){
		$data = array();
        $data['active_item'] = 'explore-our-patches'; 
//         $data['seo'][0] = array(
//     		'meta_title'=>'Nitof 14 mg Nicotine Patch – Step 2 for Smoking Cessation',
//     		'meta_description'=>"Stay on track with Nitof 14 mg nicotine patches. Apply every 72 hours for steady nicotine delivery and effective, pill-free smoking cessation",
//     		'meta_keywords'=>'Nitof 14 mg nicotine patch, nicotine patch therapy, smoking cessation patch, nicotine transdermal patch, quit smoking aid',
//     		'pagesgroup_id'=> '1'
// 		);
		$this->load->view('k_plase_product_details', $data);
	}
	public function faqs(){
		$data = array();
        $data['active_item'] = 'faqs'; 
        $data['seo'][0] = array(
    		'meta_title'=>'PatchMantra FAQs – All About Pain Relief & Patch Therapy',
    		'meta_description'=>"Explore PatchMantra's FAQs to learn about transdermal patches, pain relief solutions, MantraBot, and how PatchMantra is transforming wellness with innovative patch therapy",
    		'meta_keywords'=>'PatchMantra, transdermal patch therapy, pain relief patches, MantraBot, patch therapy FAQs, wellness solutions, patch-based therapy',
    		'pagesgroup_id'=> '1'
		);
		$this->load->view('faqs', $data);
	}
	public function terms_of_use(){
		$data = array();
        $data['active_item'] = 'patients'; 
        // $data['seo'][0] = array(
    	// 	'meta_title'=>'',
    	// 	'meta_description'=>"",
    	// 	'meta_keywords'=>'',
    	// 	'pagesgroup_id'=> '1'
		// );
		$this->load->view('terms_of_use', $data);
	}
	public function privacy_policy(){
		$data = array();
        $data['active_item'] = 'patients'; 
        // $data['seo'][0] = array(
    	// 	'meta_title'=>'',
    	// 	'meta_description'=>"",
    	// 	'meta_keywords'=>'',
    	// 	'pagesgroup_id'=> '1'
		// );
		$this->load->view('privacy_policy', $data);
	}
	public function mantrabot(){
		$data = array();
        $data['active_item'] = 'patients'; 
        // $data['seo'][0] = array(
    	// 	'meta_title'=>'',
    	// 	'meta_description'=>"",
    	// 	'meta_keywords'=>'',
    	// 	'pagesgroup_id'=> '1'
		// );
		$this->load->view('mantrabot', $data);
	}
// previous controller
	public function contact_us(){
		$data = array();
        $data['active_item'] = 'contactus';
		$data['seo'][0] = array(
    		'meta_title'=>'',
    		'meta_description'=>'',
    		'meta_keywords'=>'',
		);
		//echo "<pre>"; print_r($data['seo']); exit;
		$this->load->view('contact_us', $data);
	}
	public function contact_us_zoho(){
		$data = array();
        $data['active_item'] = 'contactus';
		$data['seo'][0] = array(
    		'meta_title'=>'Contact PatchMantra – Reach Out for Patch Therapy Support',
    		'meta_description'=>"Have questions about PatchMantra's transdermal patches? Contact us via phone, email, or our online form for assistance with our pain relief solutions",
    		'meta_keywords'=>'PatchMantra, contact PatchMantra, transdermal patch support, pain relief patches, patch therapy assistance, PatchMantra customer service',
		);
		//echo "<pre>"; print_r($data['seo']); exit;
		$this->load->view('contact_us_zoho', $data);
	}
	public function What_is_Patch_Therapy(){
		$data = array();
        $data['active_item'] = 'blogs';
		$data['seo'][0] = array(
    		'meta_title'=>'Patch Therapy Guide: Benefits & Uses of Transdermal Patches',
    		'meta_description'=>'Discover patch therapy-a pill-free, pain-free solution with transdermal patches for pain, smoking cessation, hormones & wellness',
    		'meta_keywords'=>'patch therapy, transdermal patch therapy, how patch therapy works, benefits of patch therapy, transdermal patches for pain relief',
		);
		//echo "<pre>"; print_r($data['seo']); exit;
		$this->load->view('What_is_Patch_Therapy', $data);
	}
	public function every_cigarette_counts_smoking_risks_quitting_guide(){
		$data = array();
        $data['active_item'] = 'blogs';
		$data['seo'][0] = array(
    		'meta_title'=>'Every Cigarette Counts: Smoking Risks & Quitting Guide',
    		'meta_description'=>'Learn the health risks of smoking—from lung cancer to heart disease—and discover proven ways to quit with nicotine patches, support & healthy habits',
    		'meta_keywords'=>'smoking health risks, every cigarette counts, what’s in a cigarette, harmful effects of smoking, lung cancer from smoking, smoking and heart disease, secondhand smoke risks, youth smoking risks, benefits of quitting smoking, nicotine patches to quit smoking ',
		);
		//echo "<pre>"; print_r($data['seo']); exit;
		$this->load->view('every_cigarette_counts_smoking_risks_quitting_guide', $data);
	}
	public function transdermal_patches_vs_pills_for_pain_relief(){
		$data = array();
        $data['active_item'] = 'blogs';
		$data['seo'][0] = array(
    		'meta_title'=>'Pain Relief Revolution: Transdermal Patches vs Pills',
    		'meta_description'=>'Explore transdermal patches for pain relief & smoking cessation. Herbal, medicated & nicotine patches offer safe, steady comfort & healthier living',
    		'meta_keywords'=>'transdermal patch, pain relief patch, herbal transdermal patch, nicotine patch for smoking cessation, painkiller patch in India, back pain relief patch, shoulder pain relief patch, leg pain patch, rivastigmine transdermal patch',
		);
		//echo "<pre>"; print_r($data['seo']); exit;
		$this->load->view('transdermal_patches_vs_pills_for_pain_relief', $data);
	}
	public function blog(){
	    $data = array();
	    date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		$data['active_item'] = 'blogs';
		$data['seo'][0] = array(
    		'meta_title'=>'PatchMantra Blog – Pain Relief, Wellness & Patch Therapy Tips',
    		'meta_description'=>'Read PatchMantra’s blog for articles on pain relief, transdermal patch therapy, wellness tips, and ways to live healthier with innovative patch solutions',
    		'meta_keywords'=>'',
    		'pagesgroup_id'=> '2'
		);
		$tableA = 'blogs';
		$tableB = 'pages';
		$key1 = 'page_id';
		$key2 = 'page_id';
		$tableC = 'meta';
		$key3 = 'page_id';
		$key4 = 'page_id';
		$tableD = 'app_routes';
		$key5 = 'page_id ';
		$key6 = 'page_id ';
		$tableE = '';
        $key7 = '';
        $key8 = '';
        $tableF = '';
        $key9 = '';
        $key10 = '';
        $tableG = '';
        $key11 = '';
        $key12 = '';
		$getdata = '';
		$where = 'A.blog_status = "1001" AND A.blog_date <="'.$objDate->format('Y-m-d H:i:s').'"';
		$data['blogs'] = $this->Home_model->getDatajoin('db', $tableA, $tableB, $key1, $key2, $getdata, $where, 'blog_date', 'desc', '', $tableC, $key3, $key4, $tableD, $key5, $key6, $tableE, $key7, $key8, $tableF, $key9, $key10, $tableG, $key11, $key12);
		//Count of Blogs
		$where = 'blog_status = "1001" AND blog_date <="'.$objDate->format('Y-m-d H:i:s').'"';
		$data['blogs_count'] = $this->Home_model->getCount('db', 'blogs', $where);
		//echo "<pre>"; print_r($data); exit;
	    $this->load->view('blog', $data);
	}
	public function blog_details($id){
		$data = array();
	    date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		$data['active_item'] = 'blogs';
		$tableA = 'blogs';
		$tableB = 'pages';
		$key1 = 'page_id';
		$key2 = 'page_id';
		$tableC = 'meta';
		$key3 = 'page_id';
		$key4 = 'page_id';
		$tableD = 'app_routes';
		$key5 = 'page_id ';
		$key6 = 'page_id ';
		$tableE = '';
        $key7 = '';
        $key8 = '';
        $tableF = '';
        $key9 = '';
        $key10 = '';
        $tableG = '';
        $key11 = '';
        $key12 = '';
		$getdata1 = '';
		$where = "blog_id ='".$id."'";
		$data['blog_details'] = $this->Home_model->getDatajoin('db', $tableA, $tableB, $key1, $key2, $getdata1, $where, 'blog_date', 'desc', '', $tableC, $key3, $key4, $tableD, $key5, $key6, $tableE, $key7, $key8, $tableF, $key9, $key10, $tableG, $key11, $key12);
        //Table of Contents
        $where = "blog_id ='".$id."'";
		$data['tableofcontents'] = $this->Home_model->getData('db', 'blogs_contents', '', $where, '', '', '', '');
        
        //Meta data
        $page_id = $data['blog_details'][0]['page_id'];
		$tableA = 'meta';
		$tableB = 'pages';
		$key1 = 'page_id';
		$key2 = 'page_id';
		$tableC = 'app_routes';
		$key3 = 'page_id';
		$key4 = 'page_id';
		$tableD = '';
		$key5 = '';
		$key6 = '';
		$tableE = '';
        $key7 = '';
        $key8 = '';
        $tableF = '';
        $key9 = '';
        $key10 = '';
        $tableG = '';
        $key11 = '';
        $key12 = '';
		$getdata1 = '';
		$where = "A.page_id ='".$page_id."'";
		$data['seo'] = $this->Home_model->getDatajoin('db', $tableA, $tableB, $key1, $key2, $getdata1, $where, '', '', '', $tableC, $key3, $key4, $tableD, $key5, $key6, $tableE, $key7, $key8, $tableF, $key9, $key10, $tableG, $key11, $key12);
        
        //Other blogs
		$tableA = 'blogs';
		$tableB = 'pages';
		$key1 = 'page_id';
		$key2 = 'page_id';
		$tableC = 'meta';
		$key3 = 'page_id';
		$key4 = 'page_id';
		$tableD = 'app_routes';
		$key5 = 'page_id ';
		$key6 = 'page_id ';
		$tableE = '';
        $key7 = '';
        $key8 = '';
        $tableF = '';
        $key9 = '';
        $key10 = '';
        $tableG = '';
        $key11 = '';
        $key12 = '';
		$getdata1 = '';
		//$where = '';
		$where = 'A.blog_status = "1001" AND A.blog_date <="'.$objDate->format('Y-m-d H:i:s').'" AND blog_id != "'.$id.'"';
		$data['moreblogs'] = $this->Home_model->getDatajoin('db', $tableA, $tableB, $key1, $key2, $getdata1, $where, 'blog_date', 'desc', '', $tableC, $key3, $key4, $tableD, $key5, $key6, $tableE, $key7, $key8, $tableF, $key9, $key10, $tableG, $key11, $key12);
		
		//echo "<pre>"; print_r($data); exit;
		$this->load->view('blog_details', $data);
	}
	public function leadformsubmission(){
        //    echo 'Deepthi'; exit;
        //echo "<pre>"; print_r($_POST); exit;
        $EmailSignature = EmailSignature;
        // echo $EmailSignature; exit;
        date_default_timezone_set('Asia/Kolkata');
        $objDate = new DateTime();
        $this->load->helper('string');          
        $enquiry_code = random_string('nozero',10);
        // echo $enquiry_code; exit;
        //Google Recaptcha
        if(Recaptcha !== 'True'){
            // echo "recaptcha In"; exit;
            $recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
            $userIp=$this->input->ip_address();
            //echo ($this->input->valid_ip($userIp)?'Valid':'Not Valid'); exit;
            $secret = $this->config->item('google_secret');
            //echo $secret; exit;
            $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $output = curl_exec($ch);
            curl_close($ch);      
            $status= json_decode($output, true);
            //print_r($status); exit;
        }
        else{ $status['success'] = "No Recaptcha";}
        if($status['success']){
            // echo "Innn"; exit;
            //Validation
            $this->form_validation->set_rules('enquiry_name','Please Enter Name','trim|required|min_length[3]|max_length[50]');
            $this->form_validation->set_rules('enquiry_mail','Please Enter Email Address','trim|required|valid_email');
            $this->form_validation->set_rules('enquiry_contact','Please Enter Mobile Number','trim|required|min_length[10]|max_length[15]');
            $this->form_validation->set_rules('product_name','Please Enter Mobile Number','trim|required');
            $this->form_validation->set_rules('enquiry_comments','Please Enter Message','trim|required|min_length[3]|max_length[600]');
            if($this->form_validation->run()==False){
                $message = array('error' => "Validation Erroer");
                //echo json_encode($message); exit;
            }
            else{
                // echo "Good"; exit;
                $add_enquiry = array('enquiry_name' => $this->input->post('enquiry_name'),
                              'enquiry_mail' => $this->input->post('enquiry_mail'),
                              'enquiry_contact' => $this->input->post('enquiry_contact'),
                              'enquiry_comments' => $this->input->post('enquiry_comments'),
                              'product_name' => $this->input->post('product_name'),
                              'enquiry_code' => $enquiry_code,
                              'enquiry_date'=>$objDate->format('Y-m-d H:i:s'));
                // echo "<pre>"; print_r($add_enquiry); exit;
                $insert_enquiry = $this->Home_model->insertData('db', 'patchmantra_enquiry_from', $add_enquiry);
                // echo $insert_enquiry; exit;
                if($insert_enquiry > 0){
                    $to_name = $this->input->post('enquiry_name');
                    $to = $this->input->post('enquiry_mail');
                    $subject = "Patchmantra Enquiry";
                    $message = "<!DOCTYPE html>
                    <html>
                    <head lang='en'>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-width=1.0'><title></title>
                    </head>
                    <body>
                        <div class='gmail_quote'>
                        <p>Hello <b>".$this->input->post('enquiry_name')."</b>,<br><br>
                            We thank you for expressing your interest in our company. Our Team will get back to you shortly.<br>
                            <table>
                            <tr><td>Name:</td><td>" .$this->input->post('enquiry_name'). "</td></tr>
                            <tr><td>Email:</td><td>" .$this->input->post('enquiry_mail'). "</td></tr>                              
                            <tr><td>Phone:</td><td>" .$this->input->post('enquiry_contact'). "</td></tr>
                            <tr><td>Product Name:</td><td>" .$this->input->post('product_name'). "</td></tr>
                            <tr><td>Message:</td><td>" .$this->input->post('enquiry_comments'). "</td></tr>
                            <tr><td>Ticket ID:</td><td>" .$enquiry_code. "</td></tr>
                            <tr>
                            </table>
                        </p>
                        <p>".$EmailSignature."</p>
                    </div>
                    </body>
                    </html>";
                    // print_r($message); exit;
                    $postdata = http_build_query(
                        array(
                            'TO_EMAIL' => $to,
                            'SUBJECT'=> $subject,
                            'MESSAGE_BODY'=> $message,
                            'TO_NAME'=> $to_name
                        )
                    );
                    // echo "<pre>"; print_r($postdata); exit;
                    // POST the data to an api                      
                    $url = EmailAPI;
                    // echo $url; exit;
                    $this->curls($url, $postdata);
                    //exit;
                //  echo base_url()."success/".$objDate->format('Y-m-d')."-".$enquiry_code; exit;
                    echo base_url()."success/enquiry-submission/".$objDate->format('Y-m-d')."-".$enquiry_code; exit;
                    //End Send Mail
                }
                else{
                //echo "In";
                    $message = array('error' => "Error in submission");
                    echo json_encode($message);
                }
            }
        }
        else {
            echo "Out"; exit;
            $message = array('error' => "Sorry Google Recaptcha Unsuccessful!!" );
            echo json_encode($message); //exit;
        }
    }
	public function email_submission() {
        date_default_timezone_set('Asia/Kolkata');
        $objDate = new DateTime();
        $this->load->helper('string');    
        $EmailSignature = EmailSignature;
        // echo $EmailSignature; exit;
        $email_code = random_string('nozero',10);
        // echo "<pre>"; print_r($email_code); exit;
        //Remove @
        $sub_email1 = explode("@", $this->input->post('sub_email'));
        //Remove . Add Space
        $sub_email2 = str_replace("."," ",".$sub_email1[0].");
        $sub_name = ucwords($sub_email2);
        //   echo "<pre>"; print_r($sub_name); exit;
          $this->form_validation->set_rules('sub_email','Please Enter Email Address','trim|required|valid_email');
          if($this->form_validation->run()==False){
			$message = array('error' => "Validation Erroer");
		    echo json_encode($message); exit;
		}
		else{
		  //  echo "validation good"; exit;
        $add_subscribeaction = array(
            'sub_code' => $email_code,
            'sub_name' => $sub_name,
            'sub_email' => $this->input->post('sub_email'),
            'sub_date' => $objDate->format('Y-m-d H:i:s'));
        // echo "<pre>"; print_r($add_subscribeaction); exit;
        $insert_subscribeaction = $this->Home_model->insertData('db','patchmantra_subscribe', $add_subscribeaction);
        if($insert_subscribeaction > 0){
                    $to_name = $sub_name;
                    $to = $this->input->post('sub_email');
                    $subject = "Email subscribed Sucssesfully | patchmantra";
                    $message = "<!DOCTYPE html>
                    <html>
                    <head lang='en'>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-width=1.0'><title></title>
                    </head>
                    <body>
                        <div class='gmail_quote'>
                        <p>
                            Hello <b>".$sub_name."</b>,<br><br>Thank you for subscribing and showing interest in our company. Our team has received your request and will get back to you shortly. If you have any questions in the meantime, feel free to contact us.<br>
                            <a href='".base_url("unsubscribe/".$email_code)."'>Click hear to Unsubscribe</a>
                        </p>
                        <p>".$EmailSignature."</p>
                    </div>
                    </body>
                    </html>";
                    //  print_r($message); exit;
                    $postdata = http_build_query(
                        array(
                            'TO_EMAIL' => $to,
                            'SUBJECT'=> $subject,
                            'MESSAGE_BODY'=> $message,
                            'TO_NAME'=> $to_name
                        )
                    );
                    // echo "<pre>"; print_r($postdata); exit;
                    // POST the data to an api                      
                    $url = EmailAPI;
                    // echo $url; exit;
                    $this->curls($url, $postdata);
                    //exit;
                //  echo base_url()."success/".$objDate->format('Y-m-d')."-".$enquiry_code; exit;
                   echo base_url()."success/email-subscribe/".$objDate->format('Y-m-d')."-".$email_code; exit;
                    //End Send Mail
                }
        else{
        //echo "In";
            $message = array('error' => "Error in submission");
            echo json_encode($message);
        }
        
		}
    }
	public function check_availability(){
        //echo "<pre>"; print_r($_POST); exit;
        $column = $_POST['column'];
        $value =  $_POST['sub_email'];
        $where = "$column ='".$value."'";
        $data['check_availability'] = $this->Home_model->getData('db', 'patchmantra_subscribe', '', $where, '', '', '', '');
        //print_r($data); exit;
        //$result = $data['check_availability'][0]['sub_email'];
        if(empty($data['check_availability'])) {
            echo 'true';
        }
        else {
            echo 'false';
        }
    }
    public function phone_submission() {
        //echo "<pre>"; print_r($_POST);
        date_default_timezone_set('Asia/Kolkata');
        $objDate = new DateTime();
        $this->load->helper('string');    
        $email_code = random_string('nozero',10);
        
        $add_phonesubscribeaction = array(
            'sub_code' => $email_code,
            'sub_phone' => $this->input->post('sub_phone'),
            'sub_date' => $objDate->format('Y-m-d H:i:s'));
        //echo "<pre>"; print_r($add_phonesubscribeaction); exit;
        $insert_phonesubscribeaction = $this->Home_model->insertData('db','patchmantra_subscribe', $add_phonesubscribeaction);
        echo base_url()."success/phone-subscribe/".$objDate->format('Y-m-d')."-".$email_code; exit;
    }
    public function check_availability_phone(){
        //echo "<pre>"; print_r($_POST); exit;
        $column = $_POST['column'];
        $value =  $_POST['sub_phone'];
        $where = "$column ='".$value."'";
        $data['check_availability'] = $this->Home_model->getData('db', 'patchmantra_subscribe', '', $where, '', '', '', '');
        //print_r($data); exit;
        //$result = $data['check_availability'][0]['sub_phone'];
        if(empty($data['check_availability'])) {
            echo 'true';
        }
        else {
            echo 'false';
        }
    }
    public function success(){  
        $data = array();
        //echo $this->uri->segment(2); exit;
        if($this->uri->segment(2) == "enquiry-submission"){
            $data['msg1'] = "Thanks for your interest.";
            $data['msg2'] = "Our Team will contact you shortly.";
        }
        elseif($this->uri->segment(2) == "email-subscribe"){
            $data['msg1'] = "Thanks for your interest.";
            $data['msg2'] = "We've received your submission and appreciate your engagement with the <span style='color: #E33136'><strong>patchmantra website.</strong> </span>Expect a response soon!";
        }
        elseif($this->uri->segment(2) == "phone-subscribe"){
            $data['msg1'] = "Thanks for your interest.";
            $data['msg2'] = "We've received your submission and appreciate your engagement with the <span style='color: #E33136'><strong>patchmantra website.</strong> </span>Expect a response soon!";
        }
        elseif($this->uri->segment(2) == "email-unsubscribe"){
            $data['msg1'] = "Unsubscribed Successfully.";
        }
        else{
            $data['msg1'] = "";
            $data['msg2'] = "";
        }
      $this->load->view('success', $data);
    }
    public function successzoho(){
	    date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
	    $this->load->helper('string');			
		$enquiry_code = random_string('nozero',10);
	    $URL = base_url()."success/enquiry-submission/".$objDate->format('Y-m-d')."-".$enquiry_code;
        redirect($URL);
	}
    public function unsubscribe() {
        $data = array();
        // echo "In"; exit;
        // echo $this->uri->segment(2); exit;
        
        $updatestatus = array('sub_status' => '1002');
        $where = "sub_code = '".$this->uri->segment(2)."'";
        $update = $this->Home_model->updateData('db', 'patchmantra_subscribe', $updatestatus, $where);
        redirect('success/email-unsubscribe');
        
    }
	public function curls($url, $postdata) {
		try{
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, TRUE);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
			//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
			// receive server response ...
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$server_output = curl_exec ($ch);
			curl_close ($ch);
			$output = $server_output;
		}catch(Exception $e) {
			return $e;
		}
        return $output;
    }
}
?>