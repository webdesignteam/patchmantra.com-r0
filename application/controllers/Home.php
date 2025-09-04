<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function __construct()
	{
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
        //echo "<pre>"; print_r($data); exit;
        $this->load->view('index', $data);
	}
	public function blog_inner(){
		$data = array();
        $data['active_item'] = 'blog_inner'; 
		$this->load->view('blog_inner', $data);
	}
	public function healthCare_professionals(){
		$data = array();
        $data['active_item'] = 'healthCare_professionals'; 
        // $data['seo'][0] = array(
    	// 	'meta_title'=>'',
    	// 	'meta_description'=>"",
    	// 	'meta_keywords'=>'',
    	// 	'pagesgroup_id'=> '1'
		// );
		$this->load->view('healthCare_professionals', $data);
	}
	public function patients_information(){
		$data = array();
        $data['active_item'] = 'patients'; 
        // $data['seo'][0] = array(
    	// 	'meta_title'=>'',
    	// 	'meta_description'=>"",
    	// 	'meta_keywords'=>'',
    	// 	'pagesgroup_id'=> '1'
		// );
		$this->load->view('patients_information', $data);
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
	public function blog(){
	    $data = array();
	    date_default_timezone_set('Asia/Kolkata');
		$objDate = new DateTime();
		$data['active_item'] = 'blog';
		$data['seo'][0] = array(
    		'meta_title'=>'Papaya Leaf Health Tips & Dengue Insights | Caritero Blog',
    		'meta_description'=>'Explore expert blogs on Carica Papaya leaf benefits, natural dengue treatment, platelet health, and immune support. Stay informed with Caritero.',
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
		$data['active_item'] = 'blog';
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
        if(Recaptcha == 'True'){
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
                              'enquiry_code' => $enquiry_code,
                              'enquiry_date'=>$objDate->format('Y-m-d H:i:s'));
                // echo "<pre>"; print_r($add_enquiry); exit;
                $insert_enquiry = $this->Home_model->insertData('db', 'caritero_enquiry_from', $add_enquiry);
                // echo $insert_enquiry; exit;
                if($insert_enquiry > 0){
                    $to_name = $this->input->post('enquiry_name');
                    $to = $this->input->post('enquiry_mail');
                    $subject = "Caritero Enquiry";
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
        $insert_subscribeaction = $this->Home_model->insertData('db','caritero_subscribe', $add_subscribeaction);
        if($insert_subscribeaction > 0){
                    $to_name = $sub_name;
                    $to = $this->input->post('sub_email');
                    $subject = "Email subscribed Sucssesfully | Caritero";
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
        $data['check_availability'] = $this->Home_model->getData('db', 'caritero_subscribe', '', $where, '', '', '', '');
        //print_r($data); exit;
        //$result = $data['check_availability'][0]['sub_email'];
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
            $data['msg2'] = "We've received your submission and appreciate your engagement with the <span style='color: #E33136'><strong>Caritero website.</strong> </span>Expect a response soon!";
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
        $update = $this->Home_model->updateData('db', 'caritero_subscribe', $updatestatus, $where);
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
