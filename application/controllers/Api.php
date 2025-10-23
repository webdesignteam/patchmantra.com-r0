<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Api extends REST_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Api_model', 'api');
        //$this->load->model('Common_model', 'commons');
		error_reporting(1);
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		error_reporting(E_ALL);
		ini_set("error_reporting", E_ALL);
		error_reporting(E_ALL & ~E_NOTICE);
	}
	
	//Get Websites List
	public function websites_get() {
        $data = array();
        
        
        $where = "";
		$data['websites'] = $this->api->getData('db', 'websites', '', $where, '', '', '', '');
		//echo "<pre>"; print_r($data['websites']); exit;
        
        if (is_array($data) && !empty($data)) {
            $message = ['status' => 1, 'result' => $data, 'message' => 'Websites Available'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
	
	
	//random string 
	public function generateRandomString($length = 32) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
    //Logger for every action
    public function tempLog($tempData, $params, $response, $methodType) {
        $templog[] = array('Tlog_logCode' => $this->commons->generateRandomString(), 'Tlog_path' => $tempData->Tlog_path, 'Tlog_projectName' => $tempData->Tlog_projectName, 'Tlog_className' => $tempData->Tlog_className, 'Tlog_methodName' => $tempData->Tlog_methodName, 'Tlog_methodType' => $methodType, 'Tlog_statusCode' => $tempData->Tlog_statusCode, 'Tlog_params' => $params, 'Tlog_response' => $response, 'Tlog_loggedOnAutoID' => $tempData->Tlog_loggedOnAutoID);
        $returnID = $this->commons->insertBatch(TBLlog, $templog);
    }
	public function loggers_get(){
		$loggers = $log = array();
		$loggers = $this->commons->getWhereTable(TBLlog, array());
		if(empty($loggers)) return $this->set_response(array('status'=>0, 'response'=> array(),'message' => 'No loggers found.'),REST_Controller::HTTP_BAD_REQUEST);
		foreach($loggers as $k => $v){
			$log[] = array(
				"Tlog_logCode" => $v->Tlog_logCode,
				"Tlog_path"=> $v->Tlog_path,
				"Tlog_projectName"=> $v->Tlog_projectName,
				"Tlog_className"=> $v->Tlog_className,
				"Tlog_methodName"=> $v->Tlog_methodName,
				"Tlog_methodType"=> $v->Tlog_methodType,
				"Tlog_statusCode"=> $v->Tlog_statusCode,
				"Tlog_params"=> json_decode($v->Tlog_params, true),
				"Tlog_response"=> json_decode($v->Tlog_response, true),
				"Tlog_loggedOn"=> $v->Tlog_loggedOn,
				"Tlog_loggedOnAutoID"=> $v->Tlog_loggedOnAutoID
			);
		}
		$this->set_response(array('status'=>1, 'response'=> $log,'message' => 'loggers are as follows'),REST_Controller::HTTP_OK);
	}
    //APPVERSION
    public function appversion_get() {
        $appversion = array();
        $appversion = $this->api->getAppversion();
        $tempData = (object)array('Tlog_path' => current_url(), 'Tlog_projectName' => APP_NAME, 'Tlog_className' => $this->router->fetch_class(), 'Tlog_methodName' => $this->router->fetch_method(), 'Tlog_loggedOnAutoID' => '');
        if (is_array($appversion) && !empty($appversion)) {
            $message = ['status' => 1, 'result' => $appversion, 'message' => 'App Version Retrieved Successfully'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_OK;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_BAD_REQUEST;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    //EMPLOYEE LOGIN and DEVICE TOKEN
    public function login_post() {
		$data = $this->input->post();
        $tempData = (object)array('Tlog_path' => current_url(), 'Tlog_projectName' => APP_NAME, 'Tlog_className' => $this->router->fetch_class(), 'Tlog_methodName' => $this->router->fetch_method(), 'Tlog_loggedOnAutoID' => '');
        $emsg = "";
        $employee_id = trim($this->post('EMPLOYEE_ID'), " ");
        $password = trim($this->post('PASSWORD'), " ");
        // $device_id = trim($this->post('DEVICE_ID'), " ");
        // $device_token = trim($this->post('DEVICE_TOKEN'), " ");
        $reqData = array('EMPLOYEE_ID' => $employee_id, 'PASSWORD' => $password, 'DEVICE_ID' => $device_id, 'DEVICE_TOKEN' => $device_token);
        if (!isset($employee_id) || strlen($employee_id) <= 0) {
            $emsg = $emsg . " EMPLOYEE ID ";
        }
        if (!isset($password) || strlen($password) <= 0) {
            $emsg = $emsg . " PASSWORD ";
        }
        // if (!isset($device_id) || strlen($device_id) <= 0) {
            // $emsg = $emsg . " DEVICE ID ";
        // }
        // if (!isset($device_token) || strlen($device_token) <= 0) {
            // $emsg = $emsg . " DEVICE TOKEN ";
        // }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = ['status' => 0, 'message' => "Missing " . $emsg, 'result' => array() ];
        } else {
            $users_data = $this->api->Login($reqData);
			// echo"<pre>";print_r($users_data);exit;
            $resData['EMPLOYEE_DETAILS'] = $users_data;
            if (is_array($users_data) && !empty($users_data)) {
                $message = ['status' => 1, 'result' => $resData, 'message' => 'Employee exists'];
                $tempData->Tlog_statusCode = REST_Controller::HTTP_OK;
                $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
                $where = array('DT_employeeID' => $employee_id);
                $exists = $this->commons->getWhereTable(TblDT, $where);
                if (!$exists) {
                    $insertarray = array('DT_employeeID' => $employee_id, 'DT_deviceID' => $device_id, 'DT_deviceToken' => $device_token, 'DT_loginTime' => date('Y-m-d h:i:s'), 'DT_isActive' => 1, 'DT_createdOn' => date('Y-m-d h:i:s'));
                    $insertid = $this->commons->insertData(TblDT, $insertarray);
                } else {
                    $updatearr = array('DT_deviceID' => $device_id, 'DT_deviceToken' => $device_token, 'DT_loginTime' => date('Y-m-d h:i:s'), 'DT_isActive' => 1);
                    $where = array('DT_employeeID' => $employee_id);
                    $updateid = $this->commons->updateData(TblDT, $updatearr, $where);
                }
            } else {
                $message = ['status' => 2, 'result' => array(), 'message' => 'Employee does not exists'];
                $tempData->Tlog_statusCode = REST_Controller::HTTP_BAD_REQUEST;
                $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
            }
            $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
            
        }
    }
    // UPDATE EMPLOYEE PROFILE
    public function Userupdate_post() {
        $list = array();
        $emsg = "";
        $employeeid = trim($this->Post('EMPLOYEE_ID'), " ");
        $mobilenumber = trim($this->Post('MOBILE_NUMBER'), " ");
        $employeename = trim($this->Post('EMPLOYEE_NAME'), " ");
        $profileimage = trim($this->Post('PROFILE_IMG'), " ");
        if (!isset($employeeid) || strlen($employeeid) <= 0) {
            $emsg = $emsg . " EMPLOYEE ID ";
        }
        if (!isset($mobilenumber) || strlen($mobilenumber) <= 0) {
            $emsg = $emsg . " MOBILENUMBER ";
        }
        if (!isset($profileimage) || strlen($profileimage) <= 0) {
            $emsg = $emsg . " PROFILE_IMG ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = ['status' => 0, 'message' => "Missing " . $emsg, 'result' => array() ];
        } else {
            $image = $this->commons->save_base64($profileimage);
            $list = $this->api->updateemployeedetails($employeeid, $image, $mobilenumber);
            if ($list) {
                $message = ['status' => 1, 'message' => 'User Profile Updated Successfully', 'result' => $list];
            } else {
                $message = ['status' => 0, 'message' => "Failed To Upload Profile", 'result' => array() ];
            }
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        
    }
	//Hierarchy LIST
    public function getHierarchy_post() {
        $hierarchy_list = array();
        $employeeID = $this->post('employeeID');
        $designationCode = $this->post('designationCode');
        $hierarchy_list = $this->api->hierarchy($employeeID,$designationCode);
        if (is_array($hierarchy_list) && !empty($hierarchy_list)) {
            $message = ['status' => 1, 'result' => $hierarchy_list, 'message' => 'Hierarchy  Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	public function sendNotification_post(){
		$tempData = (object) array('Tlog_path'=>current_url(),'Tlog_projectName'=>APP_NAME,'Tlog_className'=>$this->router->fetch_class(), 'Tlog_methodName'=>$this->router->fetch_method(), 'Tlog_loggedOnAutoID'=>'');
		$list = $notify = array();
        $emsg = "";
        $message = trim($this->Post('message'), " ");
        if (!isset($message) || strlen($message) <= 0) {
            $emsg = $emsg . " Message ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = ['status' => 0, 'message' => "Missing " . $emsg, 'result' => array() ];
        } else {
			$title ="Genx Field App";
            $notify = $this->commons->getWhereTable(TblDT, array('DT_isActive'=>1));
			foreach($notify as $v):			
				$list = $this->api->SendCommonNotification($v->DT_deviceToken,$message,$title);
				$list = json_decode($list, true);
				// $this->__printMe($list);
				if($list['success']==1){
					$arr = ['Nt_notificationCode' =>$this->generateRandomString(),
					"Nt_title" =>$title,
					"Nt_message" =>$message,
					"Nt_sentTo"=>$v->DT_employeeID,
					"Nt_isValid"=>1,
					"Nt_sentOn" =>date('yy-m-d h:i:s')];
					$returnID = $this->commons->insertData('tbl_notifications',$arr);					
				}else{
					
				}
			endforeach;	
            if ($returnID) {
               $message = array('status'=>1, 'response'=> [],'message' => 'Notification successfully sent to registered mobile');
				$tempData->Tlog_statusCode = 200;
				$this->tempLog($tempData, json_encode($this->_REQUEST['data']), json_encode($message), $this->input->server('REQUEST_METHOD'));
            } else {
                $message = array('status'=>0, 'response'=>[],'message' => 'Notification not sent, please try again.');
				$tempData->Tlog_statusCode = 401;
				$this->tempLog($tempData, json_encode($this->_REQUEST['data']), json_encode($message), $this->input->server('REQUEST_METHOD'));	
            }
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
	}
	// Notification List
	public function getNotification_post(){
		$tempData = (object) array('Tlog_path'=>current_url(),'Tlog_projectName'=>APP_NAME,'Tlog_className'=>$this->router->fetch_class(), 'Tlog_methodName'=>$this->router->fetch_method(), 'Tlog_loggedOnAutoID'=>'');
		$notifications = array();
		$employeeID = trim($this->Post('employeeID'), " ");
        if (!isset($employeeID) || strlen($employeeID) <= 0) {
            $emsg = $emsg . " Employee ID ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = ['status' => 0, 'message' => "Missing " . $emsg, 'result' => array() ];
        } else {
			$notifications = $this->commons->getWhereTable('tbl_notifications', array('Nt_sentTo'=>$employeeID));		
			$message = array('status'=>0,'response'=>array(),'message'=>'No Data found');
			if(empty($notifications)) return  $this->set_response($message, REST_Controller::HTTP_UNAUTHORIZED);
			foreach($notifications as $k => $v){
				$notify[] = array(
					'notificationCode' =>$v->Nt_notificationCode,
					"title" =>$v->Nt_title,
					"message" =>$v->Nt_message,
					"sentOn" =>date('d-m-Y',strtotime($v->Nt_sentOn)) 
					
				);
			}
			$message =  array('status'=>1,'response'=>$notify,'message'=>'Notifications data retrieved successfully');
		}		
		$this->set_response($message, REST_Controller::HTTP_OK); 
	}

    //DOCTOR LIST
    public function DoctorList_post() {
        $doctor_list = array();
        $employee_id = $this->post('EMPLOYEE_ID');
        $doctor_list = $this->api->getDoctordata($employee_id);
        if (is_array($doctor_list) && !empty($doctor_list)) {
            $message = ['status' => 1, 'result' => $doctor_list, 'message' => 'Doctor List Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    //DOCTOR DETAILS
    public function Doctordetails_post() {
        $doctor_data = array();
        $doctor_code = $this->post('DOCTOR_CODE');
        $doctor_data = $this->api->getDoctordetails($doctor_code);
        if (is_array($doctor_data) && !empty($doctor_data)) {
            $message = ['status' => 1, 'result' => $doctor_data, 'message' => 'Doctor data Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    //UPDATE DOCTOR DETAILS
    public function Doctorupdate_post() {
        $update_data = array();
        $form_data = $this->input->post();
        $update_data = $this->api->doctorUpdate($form_data);
        if (is_array($update_data) && !empty($update_data)) {
            $message = ['status' => 1, 'message' => 'Doctor data Updated Successfully'];
        } else {
            $message = ['status' => 2, 'message' => 'Error in updating Data'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    //DOCTOR BIRTHDAY
    public function Doctorbirthday_post() {
        $doctor_birthday = array();
        $date = $this->post('DATE');
        $doctor_birthday = $this->api->getDoctorbirthdays($date);
        if (is_array($doctor_birthday) && !empty($doctor_birthday)) {
            $message = ['status' => 1, 'result' => $doctor_birthday, 'message' => 'Doctor birthday list Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	//Doctor REGISTER
    public function Doctorregistration_post() {
        $dr_data = array();
		$dr_fullName = $this->post('Dr_fullName');
		$dr_email	= $this->post('Dr_email');
		$dr_mobileNumber	= $this->post('Dr_mobileNumber');
		$dr_speciality	= $this->post('Dr_speciality');
		$dr_employeeID	= $this->post('Dr_employeeID'); 		
		$where = array('Dr_employeeID'=>$dr_mobileNumber);
		$exist = $this->commons->isDataExist(TblDr,$where);
		if($exist){
			$message = ['status' => 0, 'result' => [], 'message' => 'Mobile Number is already registered'];
		}else{
		$sql1 = "SELECT Dr_doctorCode FROM tbl_doctordetails  ORDER BY Dr_doctorCode DESC LIMIT 1";
		$query = $this->db->query($sql1);
		if (!$sql1) { // add this check.
			die('Invalid query');
		}
		$output_array2 = array();
		foreach ($query->result_array() as $row) {
			$doctor_code = $row['Dr_doctorCode'];
		}
		if ($doctor_code) {
			$su = 1;
			$num = 'DRG' . str_pad($su + substr($doctor_code, 3), 6, '0', STR_PAD_LEFT);
			$druniquecode = $num;
		} else {
			$druniquecode = 'DRG000001';
		}
			$regarray = array('Dr_doctorCode'=>$druniquecode,
							'Dr_fullName'=>$dr_fullName,
							'Dr_speciality'=>$dr_speciality,
							'Dr_email'=>$dr_email,
							'Dr_mobileNumber'=>$dr_mobileNumber,
							'Dr_employeeID'=>$dr_employeeID,
							'Dr_grade'=>'NA',
							'Dr_dateofBirth'=>'0000-00-00',
							'Dr_dateofAnniversary'=>'0000-00-00',
							'Dr_employeeID'=>$dr_employeeID,
							'Dr_status'=>1,
							'Dr_registeredOn'=>date('yy-m-d h:i:s'));
			$returnID = $this->commons->insertData(TblDr,$regarray);	
			if($returnID){
				$message = ['status' => 1, 'result' => [], 'message' => 'Doctor registered successfully'];
			}else{
				$message = ['status' => 0, 'result' => [], 'message' => 'Error in registration'];
			}
		}
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }	
    //ACTIVITY LIST
    public function Activitylist_get() {
        $activity_data = array();
        $activity_data = $this->api->getActivitydata();
        if (is_array($activity_data) && !empty($activity_data)) {
            $message = ['status' => 1, 'result' => $activity_data, 'message' => 'Activity List retrieved successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    // ACTIVITY PLANNING
    public function Activityplanning_post() {
        $emsg = "";
        $activityid = trim($this->post('ACTIVITY_ID'), " ");
        $planneddate = trim($this->post('PLANNED_DATE'), " ");
        $doctorcode = trim($this->post('DOCTOR_CODE'), " ");
        $employeeid = trim($this->post('EMPLOYEE_ID'), " ");
        if (!isset($activityid) || strlen($activityid) <= 0) {
            $emsg = $emsg . " Activity ID ";
        }
        if (!isset($planneddate) || strlen($planneddate) <= 0) {
            $emsg = $emsg . " Planned Date ";
        }
        if (!isset($doctorcode) || strlen($doctorcode) <= 0) {
            $emsg = $emsg . " Doctor Code ";
        }
        if (!isset($employeeid) || strlen($employeeid) <= 0) {
            $emsg = $emsg . " Employee ID ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = array('status' => 0, 'message' => "Missing " . $emsg, 'result' => array());
        } else {
            $insertarray = array('AP_planningCode' => $this->commons->generateRandomString(), 'AP_activityautoID' => $activityid, 'AP_plannedDate' => $planneddate, 'AP_doctorCode' => $doctorcode, 'AP_plannedStatus' => 1, 'AP_plannedBy' => $employeeid, 'AP_plannedOn' => date('Y-m-d h:i:s'));
            if ($insertdata = $this->commons->insertData(TblacP, $insertarray)) {
                $message = ['status' => 1, 'message' => "Record Added Successfully..!!", 'result' => array() ];
            } else {
                $message = ['status' => 0, 'message' => "Failed To Add..!!!", 'result' => array() ];
            }
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        
    }
    // ACTIVITY PLANNED DOCTOR LIST
    public function Plannedlist_post() {
        $planned_data = array();
        $activity_id = $this->post('ACTIVITY_ID');
        $from = $this->post('FROM');
        $to = $this->post('TO');
        $planned_data = $this->api->getPlanneddata($activity_id, $from, $to);
        if (is_array($planned_data) && !empty($planned_data)) {
            $message = ['status' => 1, 'result' => $planned_data, 'message' => 'Planned Doctor List retrieved successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    // ACTIVITY EXECUTION
    public function Activityexecution_post() {
        $objDate = new DateTime();
        $activity_execution = array();
        $form_data = $this->input->post();
        $data['ACTIVITY_EXECUTION'] = array('ACTIVITY_ID' => $form_data['ACTIVITY_ID'], 'PLANNED_DATE' => $form_data['PLANNED_DATE'], 'DOCTOR_CODE' => $form_data['DOCTOR_CODE'], 'CREATEDBY' => $form_data['EMPLOYEE_ID'], 'EXECUTED_DATE' => $form_data['EXECUTED_DATE'], 'ACTIVITY_STATUS' => 1001, 'CREATEDON' => $objDate->format('Y-m-d H:i:s'));
        $activity_execution = $this->api->setActivityexecution($data);
        if ($activity_execution > 0) {
            $message = ['status' => 1, 'message' => 'Activity execution done successfully'];
        } else {
            $message = ['status' => 2, 'message' => 'Error in Activity Execution'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    // ACTIVITY BRIEF
    public function Activitybrief_post() {
        $activitybrief_data = array();
		$tempData = (object)array('Tlog_path' => current_url(), 'Tlog_projectName' => APP_NAME, 'Tlog_className' => $this->router->fetch_class(), 'Tlog_methodName' => $this->router->fetch_method(), 'Tlog_loggedOnAutoID' => '');
        $activity_id = $this->post('ACTIVITY_ID');
        $mapping_id = $this->post('MAPPING_ID');
        $mapping_type = $this->post('MAPPING_TYPE');
        $activitybrief_data = $this->api->getActivitybriefdata($activity_id, $mapping_id,$mapping_type);
        if (is_array($activitybrief_data) && !empty($activitybrief_data)) {
            $message = ['status' => 1, 'result' => $activitybrief_data, 'message' => 'Activity Brief retrieved successfully'];
			$tempData->Tlog_statusCode = REST_Controller::HTTP_OK;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
			$tempData->Tlog_statusCode = REST_Controller::HTTP_BAD_REQUEST;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    // Brand List
    public function BrandList_post() {
        $tempData = (object)array('Tlog_path' => current_url(), 'Tlog_projectName' => APP_NAME, 'Tlog_className' => $this->router->fetch_class(), 'Tlog_methodName' => $this->router->fetch_method(), 'Tlog_loggedOnAutoID' => '');
        $brand_data = array();
        $divisionid = $this->post('DIVISION_ID');
        $where = array('Tbl_division' => $divisionid,'Tbl_type' =>'main', 'Tbl_isActive' =>1);
		$sort ='Tbl_BrandName';
		$sortvalue ='asc';
        $brand_list = $this->commons->getWhereTablesort_brandNew(TblbrdM, $where,$sort,$sortvalue);
        $snappath = base_url() . 'uploads/Brands/brandsnapshot/';
        $imgpath = base_url() . 'uploads/Brands/brandimages/';
        $despath = base_url() . 'uploads/Brands/branddescription/';
        if (is_array($brand_list) && !empty($brand_list)) {
            foreach ($brand_list as $value):
				if(empty($value->Typ_therapyName)){ $Typ_therapyName = ''; }else{ $Typ_therapyName = ' - '.$value->Typ_therapyName; }
                $brand_data[] = ['ID' => $value->Tbl_autoID, 'BRAND_CODE' => $value->Tbl_autoID, 'DIVISION_CODE' => $value->Tbl_division, 'BRAND_NAME' => $value->Tbl_BrandName . $Typ_therapyName, 'BRAND_IMG' => ($value->Tbl_brandImage == "") ? "" : $imgpath . $value->Tbl_brandImage, 'MOLECULEDESCRIPTION' => ($value->Tbl_brandDescription == "") ? "" : $despath . $value->Tbl_brandDescription, 'BRANDSNAPSHOT' => ($value->Tbl_brandSnapshot == "") ? "" : $snappath . $value->Tbl_brandSnapshot];
            endforeach;
            $message = ['status' => 1, 'result' => $brand_data, 'message' => 'Brand List Retrieved Successfully'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_OK;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_BAD_REQUEST;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	//Standard detailing brands
	public function STDBrandList_post() {
        $tempData = (object)array('Tlog_path' => current_url(), 'Tlog_projectName' => APP_NAME, 'Tlog_className' => $this->router->fetch_class(), 'Tlog_methodName' => $this->router->fetch_method(), 'Tlog_loggedOnAutoID' => '');
        $brand_data = array();
        $divisionid = $this->post('DIVISION_ID');
        $where = array('Tbl_division' => $divisionid);
		$sort ='Tbl_BrandName';
		$sortvalue ='asc';
        $brand_list = $this->commons->getWhereTablesort(TblbrdM, $where,$sort,$sortvalue);
        $snappath = base_url() . 'uploads/Brands/brandsnapshot/';
        $imgpath = base_url() . 'uploads/Brands/brandimages/';
        $despath = base_url() . 'uploads/Brands/branddescription/';
        if (is_array($brand_list) && !empty($brand_list)) {
            foreach ($brand_list as $value):
                $brand_data[] = ['ID' => $value->Tbl_autoID, 'BRAND_CODE' => $value->Tbl_autoID, 'DIVISION_CODE' => $value->Tbl_division, 'BRAND_NAME' => $value->Tbl_BrandName, 'BRAND_IMG' => ($value->Tbl_brandImage == "") ? "" : $imgpath . $value->Tbl_brandImage, 'MOLECULEDESCRIPTION' => ($value->Tbl_brandDescription == "") ? "" : $despath . $value->Tbl_brandDescription, 'BRANDSNAPSHOT' => ($value->Tbl_brandSnapshot == "") ? "" : $snappath . $value->Tbl_brandSnapshot];
            endforeach;
            $message = ['status' => 1, 'result' => $brand_data, 'message' => 'Brand List Retrieved Successfully'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_OK;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_BAD_REQUEST;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    //Therapy List
    public function Get_theraphylist_post() {
        $tempData = (object)array('Tlog_path' => current_url(), 'Tlog_projectName' => APP_NAME, 'Tlog_className' => $this->router->fetch_class(), 'Tlog_methodName' => $this->router->fetch_method(), 'Tlog_loggedOnAutoID' => '');
        $therapy_data = array();
		$where = array('Typ_isActive' => 1);
        $sort ='Typ_therapyName';
		$sortvalue ='asc';
        $therapy_list = $this->commons->getWhereTablesort(TbltpyM, $where,$sort,$sortvalue);
        if (is_array($therapy_list) && !empty($therapy_list)) {
            foreach ($therapy_list as $value):
                $therapy_data[] = ['THERAPHY_ID' => $value->Typ_autoID, 'THERAPHY_NAME' => $value->Typ_therapyName, 'THERAPHY_CODE' => $value->Typ_autoID];
            endforeach;
            $message = ['status' => 1, 'result' => $therapy_data, 'message' => 'Therapy List Retrieved Successfully'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_OK;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_BAD_REQUEST;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	//Speciality List
    public function getSpeciality_get() {
        $tempData = (object)array('Tlog_path' => current_url(), 'Tlog_projectName' => APP_NAME, 'Tlog_className' => $this->router->fetch_class(), 'Tlog_methodName' => $this->router->fetch_method(), 'Tlog_loggedOnAutoID' => '');
        $speciality_data = array();
		$where = array('Spl_isActive' => 1);
        $sort ='Spl_name';
		$sortvalue ='asc';
        $speciality_list = $this->commons->getWhereTablesort(TblSPL, $where,$sort,$sortvalue);
        if (is_array($speciality_list) && !empty($speciality_list)) {
            foreach ($speciality_list as $value):
                $speciality_data[] = ['ID' => $value->Spl_autoID, 'NAME' => $value->Spl_name];
            endforeach;
            $message = ['status' => 1, 'result' => $speciality_data, 'message' => 'Speciality List Retrieved Successfully'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_OK;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
            $tempData->Tlog_statusCode = REST_Controller::HTTP_BAD_REQUEST;
            $this->tempLog($tempData, '', json_encode($message), $this->input->server('REQUEST_METHOD'));
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    // Standard Detailing
    public function Standarddetailing_post() {
        $emsg = "";
        $type = trim($this->Post('TYPE'), " ");
        $mappingid = trim($this->Post('MAPPING_ID'), " ");
        $mappingtype = trim($this->Post('MAPPING_TYPE'), " ");
        if (!isset($mappingid) || strlen($mappingid) <= 0) {
            $emsg = $emsg . " MAPPING ID ";
        }
		if (!isset($mappingtype) || strlen($mappingtype) <= 0) {
            $emsg = $emsg . " MAPPING TYPE ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = array('status' => 0, 'message' => "Missing " . $emsg, 'result' => array());
        } else {
			if($mappingtype == 1){ // Brand
				$where = array('Tbl_autoID' => $mappingid);
				$_data = $this->commons->getWhereTable(TblbrdM, $where);
				$table = TblbrdM;
				$join = 'Tbl_autoID';
			}else{
				$where = array('Spl_autoID' => $mappingid);
				$_data = $this->commons->getWhereTable(TblSPL, $where);
				$table = TblSPL;
				$join = 'Spl_autoID';
			}
            if ($_data) {
					$where = array('SD_mappedID' => $mappingid,'SD_mappingType' => $mappingtype);					
					$list = $this->commons->getJoinTables(TblSD, $table, 'SD_mappedID ='.$join, $where);					
                if ($list) {
                    $path = base_url() . 'uploads/standarddetailing/';
                    foreach ($list as $value):
					if(strtoupper($value->SD_format) == "PDF"){
						$thumbnail =base_url().'uploads/pdf.jpg';
					}else if (strtoupper($value->SD_format) == 'IMAGE'){
						$thumbnail =base_url().'uploads/image.jpg';
					}else if (strtoupper($value->SD_format) == 'VIDEO'){
						$thumbnail =base_url().'uploads/video.jpg';
					}else{
						$thumbnail =base_url().'uploads/mp3.png';
					}
                        $data[] = ['DETAILING_ID' => $value->SD_autoID, 'URL' => $path . $value->SD_format . '/' . $value->SD_fileName .'.'. $value->SD_fileType, 'NAME' =>ucwords($value->SD_fileName), 'FILE_TYPE' => $value->SD_format,'THUMBNAIL'=>$thumbnail];
                    endforeach;
                    $message = ['status' => 1, 'message' => "Detailing data retrieved Successfully", 'result' => $data];
                } else {
                    $message = ['status' => 0, 'message' => "No Data Available", 'result' => array() ];
                }
            } else {
                $message = ['status' => 0, 'message' => "Invalid brand ID", 'result' => array() ];
            }
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	//CAMPAGIN LIST
    public function Get_campaignlist_post() {
        $list = array();
        $emsg = "";
        $employeeid = trim($this->Post('EMPLOYEE_ID'), " ");
        $activitycat = trim($this->Post('ACTIVITY_CAT'), " ");
        $activitycatcode = trim($this->Post('ACTIVITY_CAT_CODE'), " ");
        if (!isset($employeeid) || strlen($employeeid) <= 0) {
            $emsg = $emsg . " EMPLOYEE_ID ";
        }
        if (!isset($activitycat) || strlen($activitycat) <= 0) {
            $emsg = $emsg . " ACTIVITY_CAT ";
        }
        if (!isset($activitycatcode) || strlen($activitycatcode) <= 0) {
            $emsg = $emsg . " ACTIVITY_CAT_CODE ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = array('status' => 0, 'message' => "Missing " . $emsg, 'result' => array());
			$this->set_response($message, REST_Controller::HTTP_UNAUTHORIZED);
        } else {
			$mapping = ($activitycat == 1)?"Brand":"Therapy";
            $where = array('Amp_mappingType' => $mapping,'Amp_mappedAutoID'=>$activitycatcode,'Amp_isActive'=>1);
            $list = $this->commons->getJoinTablesnew(TblacM, TblacMp, 'Gam_autoID = Amp_activityautoID', $where);
			if($list){
				foreach ($list as $value):
					$_data[] = ['ACTIVITY_ID' =>$value->Gam_autoID, 'ACTIVITY_NAME' =>$value->Gam_activityName,
					'ACTIVITY_CAT' =>$activitycatcode,'ACTIVITY_CAT_CODE' =>$value->Amp_mappedAutoID];
				endforeach;
				$message = array('status' => 1,'message' => 'Campaign List','result' => $_data );      
			}
			else{				
				$message = array('status' => 0,'message' => "No Campaign Available",'result' => array());
 
			}
			$this->set_response($message, REST_Controller::HTTP_OK);
        }
         // OK (200) being the HTTP response code
        
    }
	//COMPETITORS INFO
    public function competitors_info_post() {
        $list = array();
        $emsg = "";
        $cmpname = trim($this->Post('COMPETITORS_NAME'), " ");
        $cmpbrand = trim($this->Post('COMPETITORS_BRAND'), " ");
        $ourbrand = trim($this->Post('OUR_BRAND'), " ");
        $cmpimg1 = trim($this->Post('COMPETITORS_IMG1'), " ");
        $cmpimg2 = trim($this->Post('COMPETITORS_IMG2'), " ");
        $cmpdesc = trim($this->Post('COMPETITORS_DESC'), " ");
        $employeeid = trim($this->Post('EMPLOYEE_ID'), " ");
        // if (!isset($cmpname) || strlen($cmpname) <= 0) {
            // $emsg = $emsg . " Competitors Name ";
        // }
        // if (!isset($cmpbrand) || strlen($cmpbrand) <= 0) {
            // $emsg = $emsg . " Competitors Brand ";
        // }
        if (!isset($ourbrand) || strlen($ourbrand) <= 0) {
            $emsg = $emsg . " Our Brand ";
        }
        // if (!isset($cmpimg1) || strlen($cmpimg1) <= 0) {
            // $emsg = $emsg . " Competitors Image1 ";
        // }
        // if (!isset($cmpimg2) || strlen($cmpimg2) <= 0) {
            // $emsg = $emsg . " Competitors Image 2 ";
        // }
        // if (!isset($cmpdesc) || strlen($cmpdesc) <= 0) {
            // $emsg = $emsg . " Competitors Description ";
        // }
        if (!isset($employeeid) || strlen($employeeid) <= 0) {
            $emsg = $emsg . " Employee ID ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = array('status' => 0, 'message' => "Missing " . $emsg, 'result' => array());
        } else {
            $cmpimg1 = $this->commons->save_base64($cmpimg1);
            $cmpimg2 = $this->commons->save_base64($cmpimg2);
            $CompetitorsData = array('CMP_mappingCode' => $this->commons->generateRandomString(), 'CMP_fullName' => $cmpname, 'CMP_brandName' => $cmpbrand, 'CMP_ourBrand' => $ourbrand, 'CMP_Image1' => $cmpimg1, 'CMP_Image2' => $cmpimg2, 'CMP_description' => $cmpdesc, 'CMP_isActive' => 1, 'Cmp_registeredBy' => $employeeid, 'CMP_createdOn' => date('Y-m-d h:i:s'));
            if ($insertdata = $this->commons->insertData(TblCI, $CompetitorsData)) {
                $message = ['status' => 1, 'message' => "Record Added Successfully..!!", 'result' => array($CompetitorsData) ];
            } else {
                $message = ['status' => 0, 'message' => "Failed To Add..!!!", 'result' => array() ];
            }
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        
    }
    //COMPETITORS TRADE SCHEME
    public function tradescheme_post() {
        $list = array();
        $emsg = "";
        $COMPETITORS_TRADE_SCHEME_NAME = trim($this->Post('COMPETITORS_TRADE_SCHEME_NAME'), " ");
        $COMPETITORS_NAME = trim($this->Post('COMPETITORS_NAME'), " ");
        $COMPETITORS_BRAND = trim($this->Post('COMPETITORS_BRAND'), " ");
        $OUR_BRAND = trim($this->Post('OUR_BRAND'), " ");
        $COMPETITORS_TRADE_SCHEME_DESC = trim($this->Post('COMPETITORS_TRADE_SCHEME_DESC'), " ");
        $EMPLOYEE_ID = trim($this->Post('EMPLOYEE_ID'), " ");
        // if (!isset($COMPETITORS_TRADE_SCHEME_NAME) || strlen($COMPETITORS_TRADE_SCHEME_NAME) <= 0) {
            // $emsg = $emsg . " COMPETITORS TRADE SCHEME NAME ";
        // }
        // if (!isset($COMPETITORS_NAME) || strlen($COMPETITORS_NAME) <= 0) {
            // $emsg = $emsg . " COMPETITORS NAME ";
        // }
        // if (!isset($COMPETITORS_BRAND) || strlen($COMPETITORS_BRAND) <= 0) {
            // $emsg = $emsg . " COMPETITORS BRAND ";
        // }
        if (!isset($OUR_BRAND) || strlen($OUR_BRAND) <= 0) {
            $emsg = $emsg . " OUR BRAND ";
        }
        // if (!isset($COMPETITORS_TRADE_SCHEME_DESC) || strlen($COMPETITORS_TRADE_SCHEME_DESC) <= 0) {
            // $emsg = $emsg . " COMPETITORS TRADE SCHEME DESC ";
        // }
        if (!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID) <= 0) {
            $emsg = $emsg . " Employee ID ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = ['status' => 0, 'message' => "Missing " . $emsg, 'result' => array() ];
        } else {
            $schemeData = array('CTD_mappingCode' => $this->commons->generateRandomString(), 'CTD_tradeschemeName' => $COMPETITORS_TRADE_SCHEME_NAME, 'CTD_competitorName' => $COMPETITORS_NAME, 'CTD_competitorBrandName' => $COMPETITORS_BRAND, 'CTD_ourBrand' => $OUR_BRAND, 'CTD_description' => $COMPETITORS_TRADE_SCHEME_DESC, 'CTD_isActive' => 1, 'CTD_registeredBy' => $EMPLOYEE_ID, 'CTD_createdOn' => date('Y-m-d h:i:s'));
            if ($insertdata = $this->commons->insertData(TblTDS, $schemeData)) {
                $message = array('status' => 1, 'message' => "Record Added Successfully..!!", 'result' => array($schemeData));
            } else {
                $message = array('status' => 0, 'message' => "Failed To Add..!!!", 'result' => array());
            }
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        
    }
    public function Newproductinfo_post() {
        $list = array();
        $emsg = "";
        $COM_NEW_PRODUCT_BRAND = trim($this->Post('COM_NEW_PRODUCT_BRAND'), " ");
        $COM_NEW_PRODUCT_MOLECULE_NAME = trim($this->Post('COM_NEW_PRODUCT_MOLECULE_NAME'), " ");
        $COM_NEW_PRODUCT_TRADE_SCHEME = trim($this->Post('COM_NEW_PRODUCT_TRADE_SCHEME'), " ");
        $COM_NEW_PRODUCT_IMG1 = trim($this->Post('COM_NEW_PRODUCT_IMG1'), " ");
        $COM_NEW_PRODUCT_IMG2 = trim($this->Post('COM_NEW_PRODUCT_IMG2'), " ");
        $COM_NEW_PRODUCT_DESC = trim($this->Post('COM_NEW_PRODUCT_DESC'), " ");
        $EMPLOYEE_ID = trim($this->Post('EMPLOYEE_ID'), " ");
        if (!isset($COM_NEW_PRODUCT_BRAND) || strlen($COM_NEW_PRODUCT_BRAND) <= 0) {
            $emsg = $emsg . " Competitor Product Brand ";
        }
        // if (!isset($COM_NEW_PRODUCT_MOLECULE_NAME) || strlen($COM_NEW_PRODUCT_MOLECULE_NAME) <= 0) {
            // $emsg = $emsg . " Competitor Molecule Name ";
        // }
        // if (!isset($COM_NEW_PRODUCT_TRADE_SCHEME) || strlen($COM_NEW_PRODUCT_TRADE_SCHEME) <= 0) {
            // $emsg = $emsg . " Competitor Trade Scheme ";
        // }
        // if (!isset($COM_NEW_PRODUCT_IMG1) || strlen($COM_NEW_PRODUCT_IMG1) <= 0) {
            // $emsg = $emsg . " Competitor Product Image 1 ";
        // }
        // if (!isset($COM_NEW_PRODUCT_IMG2) || strlen($COM_NEW_PRODUCT_IMG2) <= 0) {
            // $emsg = $emsg . " Competitor Product Image 2 ";
        // }
        // if (!isset($COM_NEW_PRODUCT_DESC) || strlen($COM_NEW_PRODUCT_DESC) <= 0) {
            // $emsg = $emsg . " Competitor Product Description ";
        // }
        if (!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID) <= 0) {
            $emsg = $emsg . " Employee ID ";
        }
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = array('status' => 0, 'message' => "Missing " . $emsg, 'result' => array());
        } else {
            $COM_NEW_PRODUCT_IMG1 = $this->commons->save_base64($COM_NEW_PRODUCT_IMG1);
            $COM_NEW_PRODUCT_IMG2 = $this->commons->save_base64($COM_NEW_PRODUCT_IMG2);
            $newproductinfo = array('CPD_mappingCode' => $this->commons->generateRandomString(), 'CPD_brandName' => $COM_NEW_PRODUCT_BRAND, 'CPD_moleculeName' => $COM_NEW_PRODUCT_MOLECULE_NAME, 'CPD_tradeScheme' => $COM_NEW_PRODUCT_TRADE_SCHEME, 'CPD_Image1' => $COM_NEW_PRODUCT_IMG1, 'CPD_Image2' => $COM_NEW_PRODUCT_IMG2, 'CPD_description' => $COM_NEW_PRODUCT_DESC, 'CPD_isActive' => 1, 'CPD_registeredBy' => $EMPLOYEE_ID, 'CPD_createdOn' => date('Y-m-d h:i:s'));
            if ($insertdata = $this->commons->insertData(TblCPRD, $newproductinfo)) {
                $message = array('status' => 1, 'message' => "Record Added Successfully..!!", 'result' => array($newproductinfo));
            } else {
                $message = array('status' => 0, 'message' => "Failed To Add..!!!", 'result' => array());
            }
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
        
    }		
	// Get News Data
	public function getNews_get(){
		$newsdata = array();
        $newsdata = $this->api->getnewsdata();
        if (is_array($newsdata) && !empty($newsdata)) {
        $message = ['status' => 1, 'result' => $newsdata, 'message' => 'Data retrieved successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }	

	// Get Contact Data
	public function getContact_get(){
		$contactdata = array();
       	$where = array('Ct_status' => 1);
        $contactdata = $this->commons->getWhereTable(TblCD, $where);
        if (is_array($contactdata) && !empty($contactdata)) {
			foreach ($contactdata as $value):
                $_data[] = ['NAME' => $value->Ct_name, 'TYPE' => $value->Ct_type,'CONTACT' => $value->Ct_contact];
            endforeach;
        $message = ['status' => 1, 'result' => $_data, 'message' => 'Data retrieved successfully'];
        } else {
        $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }	
	// Get Champions Data
	public function getChampions_get(){
		$message = ['status' => 2, 'result' => array(), 'message' => 'Coming Soon'];
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
	public function GetAllVideos_post() {
        $list = $video= array();
		$path = base_url().'uploads/standarddetailing/video';
        $emsg = "";
        if ($emsg != "" && strlen($emsg) > 0) {
            $message = array('status' => 0, 'message' => "Missing " . $emsg, 'result' => array());
        } else {
            $where = array('SD_format' => 'video');
            $list = $this->commons->getJoinTables(TblSD, TblbrdM, 'SD_mappedID = Tbl_autoID', $where);
            if ($list) {
				foreach($list as $value):
					$video[] = ['DETAILING_ID'=>$value->SD_autoID,'FILE'=>$path.'/' . $value->SD_fileName];
				endforeach;
                $message = array('status' => 1, 'message' => 'Video List', 'result' => $video);
            } else {
                $message = array('status' => 0, 'message' => "No Video Available", 'result' => array());
            }
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // CREATED (201) being the HTTP response code
    }
// Update
	public function UpdateStanderd_Detailing_status_post(){ 
 	$request       = $this->input->post('request');
    $request       = json_decode($request);
    $emsg = "";			
	$EMPLOYEE_ID=trim($request->EMPLOYEE_ID," ");
	if(!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID)<=0){
			 $emsg = $emsg . " EMPLOYEE_ID ";
	}	
	if($emsg != "" && strlen($emsg) > 0){
		$message = array('status' => 0,'message' => "Missing " . $emsg,'result' => array()); 			
		}else{
			foreach ($request->result as $value){ 
				$READ_STATUS = $value->READ_STATUS;
				$DETAILING_ID = $value->DETAILING_ID;
				$DOCTOR_CODE = $value->DOCTOR_CODE;
				// $CREATED_TS = $value->CREATED_TS;
				$CREATED_TS = date('Y-m-d h:i:s');
				$UPDATED_TIME = $value->UPDATED_TIME;
			 	$where = array('Dr_doctorCode' => $DOCTOR_CODE);
				$doctor_data_details = $this->commons->getWhereTable(TblDr, $where);			 
				if($doctor_data_details){
					$where = array('SD_autoID' => $DETAILING_ID);
					$standard_details = $this->commons->getWhereTable(TblSD, $where);	
					if($standard_details){
						$standard_details_DATA = array(
													'SDT_mappingCode'=>$this->commons->generateRandomString(),
													'SDT_doctorCode'=>$DOCTOR_CODE,
													'SDT_loggedBy'=>$EMPLOYEE_ID,
													'SDT_status'=>$READ_STATUS,
													'SDT_detalingautoID'=>$DETAILING_ID,
													'SDT_loggedOn'=>$CREATED_TS);
						if($insertdata=$this->commons->insertData(TblSDT, $standard_details_DATA)){
							$message = array('status' => 1,   'message' => "Record Added Successfully..!!" ,'result' => array ($request->result) ); 
						}else{
							$message = array(	'status' => 0, 'message' => "Failed To Add..!!!",'result' => array()  );
						}
					}else{
						$message = array('status' => 0,'message' => "Invlid Detailing ID..!!!",'result' => array()  );
					}
				}else{
					$message = array('status' => 0,'message' => "Invalid DOCTOR ID",'result' => array()); 				
				}		 
			}  
		}				
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code            
        
    }
	//Update Speciality
	public function UpdateSpeciality_status_post(){ 
 	$request       = $this->input->post('request');
    $request       = json_decode($request);
    $emsg = "";			
	$EMPLOYEE_ID=$request->EMPLOYEE_ID;
	
	if(!isset($EMPLOYEE_ID) || strlen($EMPLOYEE_ID)<=0){
			 $emsg = $emsg . " EMPLOYEE_ID ";
	}	
	if($emsg != "" && strlen($emsg) > 0){
		$message = array('status' => 0,'message' => "Missing " . $emsg,'result' => array()); 			
		}else{
			foreach ($request->result as $value){ 
				$READ_STATUS = $value->READ_STATUS;
				$DETAILING_ID = $value->DETAILING_ID;
				$CREATED_TS = $value->CREATED_TS;
				$CREATED_TS = date('Y-m-d h:i:s');
				$UPDATED_TIME = $value->UPDATED_TIME;	 
					$where = array('SD_autoID' => $DETAILING_ID,'SD_mappingType'=>2);
					$standard_details = $this->commons->getWhereTable(TblSD, $where);	
					if($standard_details){
						$standard_details_DATA = array(
													'SPT_mappingCode'=>$this->commons->generateRandomString(),
													'SPT_doctorCode'=>'NA',
													'SPT_loggedBy'=>$EMPLOYEE_ID,
													'SPT_status'=>$READ_STATUS,
													'SPT_detalingautoID'=>$DETAILING_ID,
													'SPT_loggedOn'=>$CREATED_TS);
						if($insertdata=$this->commons->insertData(TblSPT, $standard_details_DATA)){
							$message = array('status' => 1,   'message' => "Record Added Successfully..!!" ,'result' => array ($request->result) ); 
						}else{
							$message = array(	'status' => 0, 'message' => "Failed To Add..!!!",'result' => array()  );
						}
					}else{
						$message = array('status' => 0,'message' => "Invlid Detailing ID..!!!",'result' => array()  );
					}
					 
			}  
		}				
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code            
        
    }
	
###################### Changes 0n 19-06-2020#############################
    //CHEMIST LIST
    public function ChemistList_post() {
        $chemist_list = array();
        $employee_id = $this->post('EMPLOYEE_ID');
        $where = array('Chm_employeeID' => $employee_id);
        $chemist_list = $this->commons->getWhereTable(TblCHM, $where);
        if (is_array($chemist_list) && !empty($chemist_list)) {
            // print_r($chemist_list);
            foreach ($chemist_list as $value):
                $chem_data[] = ['Chm_autoID' => $value->Chm_autoID, 'Chm_chemistCode' => $value->Chm_chemistCode, 'Chm_fullName' => $value->Chm_fullName, 'Chm_patch' => $value->Chm_patch, 'Chm_hq' => ($value->Chm_hq == '') ? "NA" : $value->Chm_hq, 'Chm_region' => ($value->Chm_region == '') ? "NA" : $value->Chm_region, 'Chm_email' => ($value->Chm_email == '') ? "NA" : $value->Chm_email, 'Chm_mobileNumber' => ($value->Chm_mobileNumber == '') ? '' : $value->Chm_mobileNumber, 'Chm_status' => $value->Chm_status, 'Chm_employeeID' => $value->Chm_employeeID, 'Chm_registeredOn' => $value->Chm_registeredOn, 'Chm_updatedOn' => $value->Chm_updatedOn, 'Chm_updatedBy' => $value->Chm_updatedBy, 'Chm_lastupdated' => $value->Chm_lastupdated];
            endforeach;
            $message = ['status' => 1, 'result' => $chem_data, 'message' => 'Chemist List Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    //CHEMIST DETAILS
    public function Chemistdetails_post() {
        $chemist_data = array();
        $chemist_code = $this->post('Chm_chemistCode');
        $where = array('Chm_chemistCode' => $chemist_code);
        $chemist_data = $this->commons->getWhereTable(TblCHM, $where);
        if (is_array($chemist_data) && !empty($chemist_data)) {
            $message = ['status' => 1, 'result' => $chemist_data, 'message' => 'Chemist data Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    //UPDATE CHEMIST DETAILS
    public function Chemistupdate_post() {
        $update_data = array();
        $form_data = $this->input->post();
        $update_data = $this->api->ChemistUpdate($form_data);
        if (is_array($update_data) && !empty($update_data)) {
            $message = ['status' => 1, 'message' => 'Chemist data Updated Successfully'];
        } else {
            $message = ['status' => 2, 'message' => 'Error in updating Data'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	//CHEMIST REGISTER
    public function Chemistregistration_post() {
        $chemist_data = array();
		$Chm_fullName = $this->post('Chm_fullName');
		$Chm_patch	= $this->post('Chm_patch');
		$Chm_hq	= $this->post('Chm_hq');
		$Chm_region	= $this->post('Chm_region');
		$Chm_email	= $this->post('Chm_email');
		$Chm_mobileNumber	= $this->post('Chm_mobileNumber');
		$Chm_employeeID	= $this->post('Chm_employeeID'); 		
		$where = array('Chm_mobileNumber'=>$Chm_mobileNumber);
		$exist = $this->commons->isDataExist(TblCHM,$where);
		if($exist){
			$message = ['status' => 0, 'result' => [], 'message' => 'Mobile Number is already registered'];
		}else{
		$sql1 = "SELECT Chm_chemistCode FROM tbl_chemistdetails  ORDER BY Chm_chemistCode DESC LIMIT 1";
		$query = $this->db->query($sql1);
		if (!$sql1) { // add this check.
			die('Invalid query');
		}
		$output_array2 = array();
		foreach ($query->result_array() as $row) {
			$chemist_code = $row['Chm_chemistCode'];
		}
		if ($chemist_code) {
			$su = 1;
			$num = 'CHM' . str_pad($su + substr($chemist_code, 3), 6, '0', STR_PAD_LEFT);
			$chmuniquecode = $num;
		} else {
			$chmuniquecode = 'CHM000001';
		}
			$regarray = array('Chm_chemistCode'=>$chmuniquecode,
							'Chm_fullName'=>$Chm_fullName,
							'Chm_patch'=>$Chm_patch,
							'Chm_hq'=>$Chm_hq,
							'Chm_region'=>$Chm_region,
							'Chm_email'=>$Chm_email,
							'Chm_mobileNumber'=>$Chm_mobileNumber,
							'Chm_employeeID'=>$Chm_employeeID,
							'Chm_status'=>1,
							'Chm_registeredOn'=>date('yy-m-d h:i:s'));
			$returnID = $this->commons->insertData(TblCHM,$regarray);	
			if($returnID){
				$message = ['status' => 1, 'result' => [], 'message' => 'Chemist registered successfully'];
			}else{
				$message = ['status' => 0, 'result' => [], 'message' => 'Error in registration'];
			}
		}
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	public function getEmployeeActivity_post(){
		$_data = array();
        $employeeID = $this->post('employeeID');
        $from = $this->post('fromDate');
        $to = $this->post('toDate');
        $planned_drs = $this->commons->getWhereTable(TblacP,array('AP_plannedBy'=>$employeeID,'AP_plannedDate >='=>$from,'AP_plannedDate <='=>$to));
		$executed_drs = $this->commons->getWhereTable(TblacE,array('AE_executedBy'=>$employeeID,'AE_executedDate >='=>$from,'AE_executedDate <='=>$to));
		$detailing_drs = $this->commons->getWhereTable(TblSDT,array('SDT_loggedBy'=>$employeeID,'SDT_loggedOn >='=>$from,'SDT_loggedOn <='=>$to));
		$speciality_drs = $this->commons->getWhereTable(TblSPT,array('SPT_loggedBy'=>$employeeID,'SPT_loggedOn >='=>$from,'SPT_loggedOn <='=>$to));
		$_data = array('planned-doctors'=>count($planned_drs),
				'executed-doctors'=>count($executed_drs),
				'detailing-doctors'=>count($detailing_drs),
				'speciality-doctors'=>count($speciality_drs),
				);
        if (is_array($_data) && !empty($_data)) {
            $message = ['status' => 1, 'result' => $_data,'message' => 'Data Retrived Successfully'];
        } else {
            $message = ['status' => 0, 'result' => [],'message' => 'No Data found'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
	}
	 public function Adddoctor_post() {
        $objDate = new DateTime();
        $activity_execution = array();
        $form_data = $this->input->post();
        $data['DOCTORS_DETAILS'] = array('Dr_doctorCode' => $form_data['Dr_doctorCode'], 'Dr_sfaCode' => $form_data['Dr_sfaCode'], 'Dr_fullName' => $form_data['Dr_fullName'], 'Dr_grade' => $form_data['Dr_grade'], 'Dr_speciality' => $form_data['Dr_speciality'], 'Dr_mobileNumber' => $form_data['Dr_mobileNumber'], 'Dr_employeeID' => $form_data['Dr_employeeID'], 'Dr_status' => 1001);
        $doctors_details = $this->api->add_doctor($data);
        if ($doctors_details > 0) {
            $message = ['status' => 1, 'message' => 'Doctor details upload successfully'];
        } else {
            $message = ['status' => 2, 'message' => 'Error in doctor details upload'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	public function Brandlaunchsubmit_post() {
        $objDate = new DateTime();
        $activity_execution = array();
        $form_data = $this->input->post();
        $data['LAUNCH_DETAILS'] = array('doctorCode' => $form_data['doctorCode'], 'doctor_fullName' => $form_data['doctor_fullName'], 'Dr_fullName' => $form_data['Dr_fullName'], 'Dr_grade' => $form_data['Dr_grade'], 'Dr_speciality' => $form_data['Dr_speciality'], 'Dr_employeeID' => $form_data['Dr_employeeID'], 'brandLaunchID' => $form_data['brandLaunchID']);
        $launch_details = $this->api->brandlaunch_submit($data);
        if ($launch_details > 0) {
            $message = ['status' => 1, 'message' => 'Launch details upload successfully'];
        } else {
            $message = ['status' => 2, 'message' => 'Error in launch details upload'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	 public function BrandlaunchHistory_post() {
        $doctor_list = array();
        $employee_id = $this->post('EMPLOYEE_ID');
        $launch_history_list = $this->api->get_launch_history_list($employee_id);
        if (is_array($launch_history_list) && !empty($launch_history_list)) {
            $message = ['status' => 1, 'result' => $launch_history_list, 'message' => 'Launch History Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	public function BrandlaunchDivision_post() {
        $division_id = $this->post('division_id');
        $applaunchDivision_list = $this->api->applaunchDivision_list($division_id);
        if (is_array($applaunchDivision_list) && !empty($applaunchDivision_list)) {
            $message = ['status' => 1, 'result' => $applaunchDivision_list, 'message' => 'Division App Launch History Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
    public function ResetPassword_post() {
        $update_data = array();
        $data = $this->input->post();
        $update_data = $this->api->PasswordChange($data);
        if (is_array($update_data) && !empty($update_data)) {
            $message = ['status' => 1, 'message' => ' data Updated Successfully'];
        } else {
            $message = ['status' => 2, 'message' => 'Error in updating Data'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    } public function Appversion_post() {
        $appversion = $this->api->appversion();
        if (is_array($appversion) && !empty($appversion)) {
            $message = ['status' => 1, 'result' => $appversion, 'message' => 'App Version Retrieved Successfully'];
        } else {
            $message = ['status' => 2, 'result' => array(), 'message' => 'No Data Available'];
        }
        $this->set_response($message, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        
    }
	
//END    
}
