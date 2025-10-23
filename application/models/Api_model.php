<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class Api_model extends CI_Model{  
   
   function __construct(){  
		parent::__construct(); 
		$this->load->database();
	}
	
	public function getData($db, $table, $getdata, $where, $limit, $colum, $order, $distinct) {
        $this->$db->trans_start();
        if (empty($distinct)){} else{$this->$db->distinct();}        
        $this->$db->select($getdata);
        $this->$db->from($table);
        if (empty($where)){} else{$this->$db->where($where);}
        if (empty($limit)){} else{$this->$db->limit($limit);}
        if (empty($colum) && empty($order)){} else{$this->$db->order_by($colum, $order);}
        $query = $this->$db->get();
		//echo $this->$db->last_query(); exit;
        $data = $query->result_array();
		$this->$db->trans_complete();
        if ($this->$db->trans_status() === FALSE) {
            return FALSE;
        } else {
            if ($query->num_rows() >= 1) {
                return $data;
            } else {
                return FALSE;
            }
        }
    }
	
	//APP VERSION
	public function getAppversion()
	{
		$this->db->select('version_value as APPVERSION');
		$this->db->from(Tblapp);
		$this->db->where('version_status', 1001);
		$results = $this->db->get()->result();
		return $results;
	}
	// EMPLOYEE LOGIN
	public function Login($data){
		$employee_id = $data['EMPLOYEE_ID'];
		$password = $data['PASSWORD'];
		$data = array();
		$data2 = array();
		$this->db->select(
			'A.EMPLOYEE_ID,A.EMPLOYEENAME as EMPLOYEE_NAME,D.DESG_SHORTNAME as DESG,E.DIVISION_ID as DIVISION_ID,E.DIVISON_NAME as DIVISION,A.MOBILE_NUMBER as MOBILENUMBER,E.LOGO'
		);
		$this->db->from('employee_primary AS A');
		$this->db->join('master_designations AS D', 'A.DESG_ID = D.DESG_ID', 'LEFT');
		$this->db->join('master_divisions AS E', 'A.DIVISION_ID = E.DIVISION_ID', 'LEFT');
		$this->db->where('A.EMPLOYEE_ID', $employee_id);
		$this->db->where('A.PASSWORD', $password);
		$this->db->limit(1);
		$response = $this->db->get();
		// echo $this->db->last_query();
		if ($response) {
			foreach ($response->result() as $row) {
				$data['EMPLOYEE_ID'] = $row->EMPLOYEE_ID;
				$data['EMPLOYEE_NAME'] = $row->EMPLOYEE_NAME;
				$data['DESG'] = $row->DESG;
				$data['DIVISION_ID'] = $row->DIVISION_ID;
				$data['DIVISION'] = $row->DIVISION;
				$data['MOBILENUMBER'] = $row->MOBILENUMBER;
				$data['LOGO'] = base_url().'assets/images/division_logos/'.$row->LOGO;
				//$data['STATUS'] = false;

				array_push($data2, $data);
			}
			// echo"<pre>";print_r($data2);exit;
			return $data2;
		} else {
			return false;
		}
	}
	// UPDATE EMPLOYEE DETAILS
	public function updateemployeedetails($employeeid, $image, $mobilenumber){
		$query = $this->db->query(
			"UPDATE `employee_primary` SET `PROFILE_IMG` = '$image',`MOBILE_NUMBER` = '$mobilenumber' 
			WHERE  `employee_primary`.`EMPLOYEE_ID` = $employeeid"
		);
		if ($this->db->affected_rows() > 0) {
			$employee_id = $employeeid;
			$data = array();
			$data2 = array();
			$this->db->select(
				'A.EMPLOYEE_ID,A.EMPLOYEENAME as EMPLOYEE_NAME,D.DESG_SHORTNAME as DESG,E.DIVISON_NAME as DIVISION ,F.HQ,F.REGION, A.MOBILE_NUMBER as MOBILENUMBER'
			);
			$this->db->select('A.DIVISION_ID,A.DESG_ID,IFNULL(A.PROFILE_IMG,"NA")PROFILE_IMG');
			$this->db->select('IFNULL(G.EMPLOYEE_ID,0) AS AM_EMPID,IFNULL(G.FE_NAME,"NA") AS AM');
			$this->db->select('IFNULL(H.EMPLOYEE_ID,0) AS SRAM_EMPID,IFNULL(H.FE_NAME,"NA") AS SRAM_NAME');
			$this->db->select('IFNULL(I.EMPLOYEE_ID,0) AS RM_EMPID,IFNULL(I.FE_NAME,"NA") AS RM');
			$this->db->select('IFNULL(J.EMPLOYEE_ID,0) AS SRRM_EMPID,IFNULL(J.FE_NAME,"NA") AS SRRM_NAME');
			$this->db->select('IFNULL(K.EMPLOYEE_ID,0) AS DM_EMPID,IFNULL(K.FE_NAME,"NA") AS DM_NAME');
			$this->db->select('IFNULL(L.EMPLOYEE_ID,0) AS ZM_EMPID,IFNULL(L.FE_NAME,"NA") AS ZM_NAME');
			$this->db->select('IFNULL(M.EMPLOYEE_ID,0) AS SM_EMPID,IFNULL(M.FE_NAME,"NA") AS SM');
			$this->db->select('IFNULL(N.EMPLOYEE_ID,0) AS DGM_EMPID,IFNULL(N.FE_NAME,"NA") AS DGM_NAME');
			$this->db->select('IFNULL(O.EMPLOYEE_ID,0) AS PMT_EMPID,IFNULL(O.FE_NAME,"NA") AS PMT_NAME');
			$this->db->select('IFNULL(P.EMPLOYEE_ID,0) AS GM_EMPID,IFNULL(P.FE_NAME,"NA") AS GM_NAME');
			$this->db->select('IFNULL(Q.EMPLOYEE_ID,0) AS VP_EMPID,IFNULL(Q.FE_NAME,"NA") AS VP_NAME');
			$this->db->select('IFNULL(R.EMPLOYEE_ID,0) AS DIR_EMPID,IFNULL(R.FE_NAME,"NA") AS DIR_NAME');
			$this->db->select('IFNULL(S.EMPLOYEE_ID,0) AS EXEDIR_EMPID,IFNULL(S.FE_NAME,"NA") AS EXEDIR_NAME');
			$this->db->from('employee_primary AS A');
			$this->db->join('tbl_fe_master AS B', 'A.EMPLOYEE_ID = B.EMPLOYEE_ID', 'LEFT');
			$this->db->join('tbl_fe_hierarchy AS C', 'B.FE_CODE = C.FE_CODE', 'LEFT');
			$this->db->join('master_designations AS D', 'A.DESG_ID = D.DESG_ID', 'LEFT');
			$this->db->join('master_divisions AS E', 'A.DIVISION_ID = E.DIVISION_ID', 'LEFT');
			$this->db->join('employee_secondary AS F', 'A.EMPLOYEE_ID = F.EMPLOYEE_ID', 'LEFT');
			$this->db->join('tbl_fe_master AS G', 'G.FE_CODE = C.FE2', 'LEFT');//AM
			$this->db->join('tbl_fe_master AS H', 'H.FE_CODE = C.FE3', 'LEFT');//SRRM
			$this->db->join('tbl_fe_master AS I', 'I.FE_CODE = C.FE4', 'LEFT');//RM
			$this->db->join('tbl_fe_master AS J', 'J.FE_CODE = C.FE5', 'LEFT');//SRRM
			$this->db->join('tbl_fe_master AS K', 'K.FE_CODE = C.FE6', 'LEFT');//DM
			$this->db->join('tbl_fe_master AS L', 'L.FE_CODE = C.FE7', 'LEFT');//ZM
			$this->db->join('tbl_fe_master AS M', 'M.FE_CODE = C.FE8', 'LEFT');//SM
			$this->db->join('tbl_fe_master AS N', 'N.FE_CODE = C.FE9', 'LEFT');//DGM
			$this->db->join('tbl_fe_master AS O', 'O.FE_CODE = C.FE10', 'LEFT');//GM
			$this->db->join('tbl_fe_master AS P', 'P.FE_CODE = C.FE11', 'LEFT');//PMT
			$this->db->join('tbl_fe_master AS Q', 'Q.FE_CODE = C.FE12', 'LEFT');//VP
			$this->db->join('tbl_fe_master AS R', 'R.FE_CODE = C.FE13', 'LEFT');//DIRECTOR
			$this->db->join('tbl_fe_master AS S', 'S.FE_CODE = C.FE14', 'LEFT');//EXECUTIVE DIRECTOR
			$this->db->where('A.EMPLOYEE_ID', $employee_id);
			$this->db->where_in('A.DIVISION_ID', array('6')); //Genx
			$this->db->limit(1);

       		$response = $this->db->get();

			foreach ($response->result() as $row) {
				$data['EMPLOYEE_ID'] = $row->EMPLOYEE_ID;
				$data['EMPLOYEE_NAME'] = $row->EMPLOYEE_NAME;
				$data['DESG'] = $row->DESG;
				$data['DIVISION'] = $row->DIVISION;
				$data['HQ'] = $row->HQ;
				$data['REGION'] = $row->REGION;
				$data['MOBILENUMBER'] = $row->MOBILENUMBER;
				$data['DIVISION_ID'] = $row->DIVISION_ID;
				$data['DESG_ID'] = $row->DESG_ID;
				if ($row->PROFILE_IMG) {
					$data['PROFILE_IMG'] = base_url() . 'Uploads/profiles/' . $row->PROFILE_IMG;
				} else {
					$data['PROFILE_IMG'] = base_url() . 'Uploads/profiles/dummy.jpg';
				}	
				$data['AM_EMPID'] = $row->AM_EMPID;
				$data['AM'] = $row->AM;
				$data['SRAM_EMPID'] = $row->SRAM_EMPID;
				$data['SRAM_NAME'] = $row->SRAM_NAME;
				$data['RM_EMPID'] = $row->RM_EMPID;
				$data['RM'] = $row->RM;
				$data['SRRM_EMPID'] = $row->SRRM_EMPID;
				$data['SRRM_NAME'] = $row->SRRM_NAME;
				$data['DM_EMPID'] = $row->DM_EMPID;
				$data['DM_NAME'] = $row->DM_NAME;
				$data['ZM_EMPID'] = $row->ZM_EMPID;
				$data['ZM_NAME'] = $row->ZM_NAME;
				$data['SM_EMPID'] = $row->SM_EMPID;
				$data['SM'] = $row->SM;
				$data['DGM_EMPID'] = $row->DGM_EMPID;
				$data['DGM_NAME'] = $row->DGM_NAME;
				$data['PMT_EMPID'] = $row->PMT_EMPID;
				$data['PMT_NAME'] = $row->PMT_NAME;
				$data['GM_EMPID'] = $row->GM_EMPID;
				$data['GM_NAME'] = $row->GM_NAME;
				$data['VP_EMPID'] = $row->VP_EMPID;
				$data['VP_NAME'] = $row->VP_NAME;
				$data['DIR_EMPID'] = $row->DIR_EMPID;
				$data['DIR_NAME'] = $row->DIR_NAME;
				$data['EXEDIR_EMPID'] = $row->EXEDIR_EMPID;
				$data['EXEDIR_NAME'] = $row->EXEDIR_NAME;

				array_push($data2, $data);
			}
			return $data2;
		} else {
			return false;
		}
	}
	public function hierarchy($employeeID, $designationCode){
		// $data = array();
		$this->db->select('`A`.`fe_code` as `FsCode`, `fe_name` as `EmpName`, `employee_id` as `EmpCode`,`design_id` as `Designation`,`area_code` as `HQ`,`div_code` as `Division`,`reporting_mangr_code` as `Managerfscode`');
		$this->db->from('tbl_fe_master AS A');
		$this->db->where('A.employee_id',$employeeID);		
		$result = $this->db->get()->result();
		foreach ($result as $row) {
			$this->db->distinct();
			$this->db->select('`A`.`fe_code` as `FsCode`, `fe_name` as `EmpName`, `employee_id` as `EmpCode`,`design_id` as `Designation`,`area_code` as `HQ`,`div_code` as `Division`,`reporting_mangr_code` as `Managerfscode`');
			$this->db->from('tbl_fe_master AS A');
			$this->db->join('tbl_fe_hierarchy AS B', 'B.fe_code = A.fe_code', 'LEFT');		
			if($designationCode == 'AM') $this->db->where('B.fe2', $row->FsCode);
			if($designationCode == 'SRAM') $this->db->where('B.fe3',$row->FsCode);
			if($designationCode == 'RM') $this->db->where('B.fe4', $row->FsCode);
			if($designationCode == 'SRRM') $this->db->where('B.fe5',$row->FsCode);
			if($designationCode == 'DM') $this->db->where('B.fe6', $row->FsCode);
			if($designationCode == 'ZM') $this->db->where('B.fe7', $row->FsCode);
			if($designationCode == 'SM') $this->db->where('B.fe8',$row->FsCode);
			if($designationCode == 'DGM') $this->db->where('B.fe9',$row->FsCode);
			if($designationCode == 'GM') $this->db->where('B.fe10',$row->FsCode);
			if($designationCode == 'PMT') $this->db->where('B.fe11',$row->FsCode);
			if($designationCode == 'VP') $this->db->where('B.fe12',$row->FsCode);
			if($designationCode == 'DIRECTOR') $this->db->where('B.fe13',$row->FsCode);
			$this->db->where_in('A.design_id', array('12'));
			$data = $this->db->get()->result(); 
			// echo $this->db->last_query();
		}
		return $data;
	}
	// DOCTOR DATA
	public function getDoctordata($employee_id){
		$data = array();
		$this->db->select('Dr_autoID as DOCTOR_ID,Dr_fullName AS DOCTORNAME,
		Dr_doctorCode as DOCTOR_CODE');
		$this->db->from(TblDr);
		$this->db->where('Dr_employeeID', $employee_id);
		$this->db->order_by('DOCTORNAME','ASC');
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$data = $result->result();
			return $data;
		} else {
			return $data;
		}
	}
	//DOCTOR DETAILS
	public function getDoctordetails($doctor_code){
		$data = array();
		$this->db->select('Dr_fullName as DOCTOR_NAME,Dr_mobileNumber as MOBILENO,Dr_email as EMAIL');
		$this->db->select('DATE_FORMAT(Dr_dateofBirth,"%d-%m-%Y") AS DOB');
		$this->db->select('DATE_FORMAT(Dr_dateofAnniversary,"%d-%m-%Y") AS DOW') ;
		$this->db->select('Dr_doctorCode as DOCTOR_CODE');
		$this->db->from(TblDr);
		$this->db->where('Dr_doctorCode', $doctor_code);
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$data = $result->result();
			return $data;
		} else {
			return $data;
		}
	}
	// DOCTOR BIRTHDAY
	public function getDoctorbirthdays($date){
		$data = array();
		$this->db->select('Dr_fullName AS DOCTORNAME,Dr_mobileNumber as MOBILENO');
		$this->db->select('DATE_FORMAT(Dr_dateofBirth,"%d-%m-%Y") AS DOB');
		$this->db->from(TblDr);
		$this->db->where('DATE_FORMAT(Dr_dateofBirth,"%d-%m-%Y")', $date);
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$data = $result->result();
			return $data;
		} else {
			return $data;
		}
	}
	// DOCTOR UPDATE DATA
	public function doctorUpdate($data){
		$where = array('Dr_doctorCode'=>$data['DOCTOR_CODE'],
					'Dr_mobileNumber'=>$data['MOBILENO'],
					'Dr_dateofBirth'=>$data['DOB'],
					'Dr_dateofAnniversary'=>$data['DOW'],
					'Dr_email'=>$data['EMAIL']);
		$this->db->select('*');
		$this->db->from(TblDr);
		$this->db->where('Dr_doctorCode', $data['DOCTOR_CODE']);
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$result = $result->result();
			$this->db->where('Dr_doctorCode', $data['DOCTOR_CODE']);
			$this->db->update(TblDr, $where);
			return $data;
		} else {
			return array();
		}
	}
	//ACTIVITY LIST 
	public function getActivitydata(){
		$data = array();
		$this->db->select('Gam_autoID as ACTIVITY_ID,Gam_activityName as ACTIVITY_NAME');
		$this->db->from(TblacM);
		$this->db->where('status', 1);
		$this->db->order_by("Gam_order", "asc");
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$data = $result->result();
			return $data;
		} else {
			return $data;
		}
	}
	//PLANNED DATA
	public function getPlanneddata($activity_id, $from, $to){
		$data = array();
		$this->db->select('AP_activityautoID as ACTIVITY_ID,AP_plannedDate as PLANNED_DATE');
		$this->db->select('Dr_fullName as DOCTORNAME,Dr_doctorCode as DOCTOR_CODE');
		$this->db->from(TblacP);
		$this->db->join(TblDr, 'AP_doctorCode = Dr_doctorCode');
		$this->db->where('AP_activityautoID', $activity_id);
		$this->db->where('AP_plannedDate >=', $from);
		$this->db->where('AP_plannedDate <=', $to);
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$data = $result->result();
			return $data;
		} else {
			return $data;
		}
	}
	public function setActivityexecution($data){
		if(!empty($data)) {
		$ins_data = array(
				'AE_executionCode'=>$this->commons->generateRandomString(),
				'AE_activityautoID' => $data['ACTIVITY_EXECUTION']['ACTIVITY_ID'],
				'AE_plannedDate' => $data['ACTIVITY_EXECUTION']['PLANNED_DATE'],
				'AE_doctorCode' => $data['ACTIVITY_EXECUTION']['DOCTOR_CODE'],
				'AE_executedDate' => $data['ACTIVITY_EXECUTION']['EXECUTED_DATE'],
				'AE_executionStatus' => 1,
				'AE_executedBy' => $data['ACTIVITY_EXECUTION']['CREATEDBY'],
				'AE_executedOn' => date('Y-m-d h:i:s'));
			$this->db->insert(TblacE, $ins_data); 
			$result = $this->db->insert_id();
			if ($result >= 0) {
				return true;
			} else {
				return false;
			}
		}else{
			return false;
		}
		
	}
	// ACTIVITY BRIEF DATA
	public function getActivitybriefdata($activity_id,$mapping_id,$mapping_type){
		$mapping = ($mapping_type == 1)?"Brand":"Therapy";
		$_row = $_data = array();
		$this->db->from(TblMB);
		$this->db->where('tbl_activityAutoID ', $activity_id);
		$this->db->where('tbl_mappedAutoID ', $mapping_id);
		$this->db->where('tbl_mappingType ', $mapping);
		$result = $this->db->get();
		// echo $this->db->last_query();
		// echo "<br>----------------";
		if ($result->num_rows() >= 1) {
			$rowdata = $result->result();
			$this->db->from(TblMBU);
			$this->db->where('tbl_marketingbriefautoID ', $rowdata[0]->tbl_autoID);
			$response = $this->db->get();
			if($response->num_rows() >= 1) {
				$data = $response->result();
				// echo $this->db->last_query();
				// $path = base_url().'uploads/marketingactivitybrief/description/';
				$imgpath = base_url().'uploads/marketingactivitybrief/promotionalmaterial/';
				foreach($data as $value):
				if(strtoupper($value->tbl_mappingType) == "PDF"){
					$thumbnail =base_url().'uploads/pdf.jpg';
				}else if (strtoupper($value->tbl_mappingType) == 'IMAGE'){
					$thumbnail =base_url().'uploads/image.jpg';
				}else if (strtoupper($value->tbl_mappingType) == 'VIDEO'){
					$thumbnail =base_url().'uploads/video.jpg';
				}else{
					$thumbnail =base_url().'uploads/mp3.png';
				}
				$_row[] = ['MAPPINGTYPE'=>strtoupper($value->tbl_mappingType),'FILENAME'=>strtoupper(end((explode(".", $value->tbl_filename)))),
				'URL'=>$imgpath.$value->tbl_filename,"THUMBNAIL"=>$thumbnail];
				endforeach;
				$_data = array('MAPPING'=>$rowdata[0]->tbl_mappingType,'DESCRIPTION' =>$rowdata[0]->tbl_briefDescription,'PROMOTIONALMATERIAL'=>$_row);
			}
			return $_data;
		}else{
			$_data = array('MAPPING'=>"",'DESCRIPTION' =>"",'PROMOTIONALMATERIAL'=>[]);
			return $_data;
		}
	}
	public function getnewsdata(){
		$service_url = 'http://api.heterohealthcare.com/index.php/api/apinews';
		$data = array();
		$this->db->select('Ns_newsTitle as TITLE, Ns_shortDescription as SHORT_DESCRIPTION');
		$this->db->select('Ns_fullDescription as FULL_DESCRIPTION,Ns_newsDate as DATE');
		$this->db->select('Ns_Image as IMAGE');
		$this->db->from(TblNS);
		$this->db->order_by('DATE', 'DESC');
		$result = $this->db->get();
		// echo $this->db->last_query();
		if ($result->num_rows() >= 1) { 
			foreach($result->result() as $value):				
				if($value->IMAGE == ''){
					$img=base_url().'uploads/news/banner.jpg';
				}else{
					$img=base_url().'uploads/news/'.$value->IMAGE;
				}
				$data[] = ['TITLE'=>$value->TITLE,'SHORT_DESCRIPTION'=>$value->SHORT_DESCRIPTION,'FULL_DESCRIPTION'=>$value->FULL_DESCRIPTION,
				'DATE'=>$value->DATE,'DIVISION_NAME'=>'Genx Division','SLUG'=>"",
				'IMAGE'=>$img];
			endforeach;
			// try {
				// $ch = curl_init();
				// curl_setopt($ch, CURLOPT_URL, $service_url);
				// curl_setopt($ch, CURLOPT_POST, FALSE);
			// curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
				// curl_setopt($ch, CURLOPT_HTTPGET, 1);
				// curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
			// receive server response ...
				// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				// $server_output = curl_exec($ch);
				// curl_close($ch);
				// $output = json_decode($server_output);
			// } catch (Exception $e) {
				// return $e;
			// }
			// return array_merge($data, $output);
			return $data;
		} else {
			return $data;
		}
	}
	public function SyncAllData($EMPLOYEE_ID) {
        $this->db->select('*');
        $this->db->from(TblbrdM);
        $this->db->where('Tbl_isActive',1);
        $this->db->order_by("Tbl_BrandName", "asc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $option_data = array();
            $temp_arr_2 = array();
            foreach ($query->result() as $query_row) {
                $option_data['ID'] = $brand_id = $query_row->Tbl_autoID;
                $option_data['BRAND_CODE'] = $query_row->Tbl_autoID;
                $option_data['DIVISION_CODE'] = $query_row->Tbl_division;
                $option_data['BRAND_NAME'] = $query_row->Tbl_BrandName;
                $option_data['MOLECULEDESCRIPTION'] = base_url() . 'uploads/Brands/pdf/' . $query_row->Tbl_brandDescription;
                $option_data['BRANDSNAPSHOT'] = base_url() . 'uploads/Brands/pdf/' . $query_row->Tbl_brandSnapshot;
                $sql = "SELECT *  FROM `tbl_standarddetailing` WHERE `SD_mappedID` = $brand_id AND SD_status = 1";
                $query_2 = $this->db->query($sql);
                if ($query_2->num_rows() > 0) {
                    $option_data1 = array();
                    $temp_arr_2_1 = array();
                    foreach ($query_2->result() as $query_options_row) {
                        $option_data1['DETAILING_ID'] = $query_options_row->SD_autoID;
                        $option_data1['NAME'] = $query_options_row->SD_fileName;
                        $option_data1['FILE_FORMAT'] = $query_options_row->SD_format;
                        $option_data1['FILE_TYPE'] = $query_options_row->SD_format;
						$option_data1['FILE_PATH'] = base_url() . 'uploads/standarddetailing/' . $query_options_row->SD_format . '/' . $query_options_row->SD_fileName . '.' . $query_options_row->SD_fileType;
                        array_push($temp_arr_2_1, $option_data1);
                    }
                    $option_data['STANDERD_DETAILING_DATA'] = $temp_arr_2_1;
                } else {
                    $option_data['STANDERD_DETAILING_DATA'] = array();
                }
                array_push($temp_arr_2, $option_data);
            }
            return $temp_arr_2;
        } else {
            return false;
        }
    }
	// CHEMIST UPDATE DATA
	public function ChemistUpdate($data){
		$where = array('Chm_chemistCode'=>$data['Chm_chemistCode'],
					'Chm_mobileNumber'=>$data['Chm_mobileNumber'],
					'Chm_patch'=>$data['Chm_patch'],
					'Chm_hq'=>$data['Chm_hq'],
					'Chm_region'=>$data['Chm_region'],
					'Chm_email'=>$data['Chm_email']
					);
		$this->db->select('*');
		$this->db->from(TblCHM);
		$this->db->where('Chm_chemistCode', $data['Chm_chemistCode']);
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$result = $result->result();
			$this->db->where('Chm_chemistCode', $data['Chm_chemistCode']);
			$this->db->update(TblCHM, $where);
			return $data;
		} else {
			return array();
		}
	}
	// get brands 
	public function getBrand(){
		$this->db->select('Tbl_BrandName as Name, Tbl_autoID as ID,"1" as Type');
		$this->db->from(TblbrdM);
		$this->db->where('Tbl_isActive', 1);
		$result = $this->db->get();
		// echo $this->db->last_query();
		if ($result->num_rows() >= 1) { 
			$brd = $result->result();
		}
		$this->db->select('Prb_autoID as ID, upper(Prb_BrandName) as Name,"2" as Type');
		$this->db->from(TblPRMB);
		$this->db->where('Prb_isActive', 1);
		$result = $this->db->get();
		// echo $this->db->last_query();
		if ($result->num_rows() >= 1) { 
			$prbbrd = $result->result();
		}
		return array_merge($brd, $prbbrd);
	}
	public function SyncSpecialities() {
        $this->db->select('*');
        $this->db->from(TblSPL);
        $this->db->where('Spl_isActive',1);
        $this->db->order_by("Spl_name", "asc");
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $option_data = array();
            $temp_arr_2 = array();
            foreach ($query->result() as $query_row) {
                $option_data['id'] = $query_row->Spl_autoID;
                $option_data['specialitycode'] = $query_row->Spl_specialityCode;
                $option_data['specialityname'] = $query_row->Spl_name;
                $option_data['specialitydescription'] = $query_row->Spl_description;
                $sql = "SELECT *  FROM `tbl_standarddetailing` WHERE `SD_mappedID` = $query_row->Spl_autoID and `SD_mappingType` = '2' ";
                $query_2 = $this->db->query($sql);
                if ($query_2->num_rows() > 0) {
                    $option_data1 = array();
                    $temp_arr_2_1 = array();
                    foreach ($query_2->result() as $query_options_row) {
                        $option_data1['DETAILING_ID'] = $query_options_row->SD_autoID;
                        $option_data1['NAME'] = $query_options_row->SD_fileName;
                        $option_data1['FILE_FORMAT'] = $query_options_row->SD_format;
                        $option_data1['FILE_TYPE'] = $query_options_row->SD_format;
						$option_data1['FILE_PATH'] = base_url() . 'uploads/standarddetailing/' . $query_options_row->SD_format . '/' . $query_options_row->SD_fileName . '.' . $query_options_row->SD_fileType;
                        array_push($temp_arr_2_1, $option_data1);
                    }
                    $option_data['STANDERD_DETAILING_DATA'] = $temp_arr_2_1;
                } else {
                    $option_data['STANDERD_DETAILING_DATA'] = array();
                }
                array_push($temp_arr_2, $option_data);
            }
            return $temp_arr_2;
        } else {
            return false;
        }
    }
	// Notification
	public function SendCommonNotification($devicetoken,$message,$title){			
		$arr = array('registration_ids' =>  array($devicetoken),
					 'notification' => array( 'title' => $title, 'body' => $message),
                     'data' => array( 'title' => $title, 'body' => $message)); 
		$url = 'https://fcm.googleapis.com/fcm/send';
		$fields = (array) $arr;
		$headers = array(
			'Authorization: key=AAAAFyVhJfk:APA91bGAg7x-3RZxZyuWgp2TAUJcgr3huq6YjAr2cOAF_T8QMrqna3UIwcHFpRTTozdIOmOwA7_bMVlzYDKS9c3DP38nQ80lKS0bsG86NwRX8DK055AXwEhhPrGWqrn8u1IX4O8woKDY',
			'Content-Type: application/json'
		);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);   
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		$result = curl_exec($ch);               
		if ($result === FALSE) {
			die('Curl failed: ' . curl_error($ch));
		}
		curl_close($ch);
	  // print_r($result);
	  return $result;
	}	
	public function add_doctor($data){
		if(!empty($data)) {
		$ins_data = array(
				'Dr_doctorCode' => $data['DOCTORS_DETAILS']['Dr_doctorCode'],
				'Dr_sfaCode' => $data['DOCTORS_DETAILS']['Dr_sfaCode'],
				'Dr_fullName' => $data['DOCTORS_DETAILS']['Dr_fullName'],
				'Dr_grade' => $data['DOCTORS_DETAILS']['Dr_grade'],
				'Dr_speciality' => $data['DOCTORS_DETAILS']['Dr_speciality'],
				'Dr_mobileNumber' => $data['DOCTORS_DETAILS']['Dr_mobileNumber'],
				'Dr_employeeID' => $data['DOCTORS_DETAILS']['Dr_employeeID']);
			$this->db->insert('tbl_doctordetails', $ins_data); 
			$result = $this->db->insert_id();
			if ($result >= 0) {
				return true;
			} else {
				return false;
			}
		}else{
			return false;
		}
		
	}

	public function brandlaunch_submit($data){
		if(!empty($data)) {
		$ins_data = array(
				'doctorCode' => $data['LAUNCH_DETAILS']['doctorCode'],
				'doctor_fullName' => $data['LAUNCH_DETAILS']['doctor_fullName'],
				'Dr_grade' => $data['LAUNCH_DETAILS']['Dr_grade'],
				'Dr_speciality' => $data['LAUNCH_DETAILS']['Dr_speciality'],
				'Dr_employeeID' => $data['LAUNCH_DETAILS']['Dr_employeeID'],
				'brandLaunchID' => $data['LAUNCH_DETAILS']['brandLaunchID'],
				'launchedOn' => date("Y-m-d H:i:s"));
			$this->db->insert('applaunch_submit', $ins_data); 
			$result = $this->db->insert_id();
			if ($result >= 0) {
				return true;
			} else {
				return false;
			}
		}else{
			return false;
		}
		
	}
	public function get_launch_history_list($employee_id){
		$data = array();
		$this->db->select('*');
		$this->db->join('applaunch_division', 'applaunch_division.brandLaunchID = applaunch_submit.brandLaunchID', 'left');
		$this->db->from('applaunch_submit');
		$this->db->where('Dr_employeeID', $employee_id);
		$this->db->order_by('applaunch_submit.launchedOn','DESC');
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$data = $result->result();
			return $data;
		} else {
			return $data;
		}
	}
	public function appversion(){
		$data = array();
		$this->db->select('*');
		$this->db->from('appversion');
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$data = $result->result();
			return $data;
		} else {
			return $data;
		}
	}
	public function applaunchDivision_list($division_id){
		$data = array();
		$this->db->select('*');
		$this->db->from('applaunch_division');
		$this->db->where('division_id', $division_id);
		$this->db->order_by('launchedOn','DESC');
		$result = $this->db->get();
		if ($result->num_rows() >= 1) {
			$data = $result->result();
			return $data;
		} else {
			return $data;
		}
	}
    public function PasswordChange($data){
		$where = array('PASSWORD'=>$data['PASSWORD']	);
		$this->db->select('*');
		$this->db->from(employee_primary);
		$this->db->where('EMPLOYEE_ID', $data['EMPLOYEE_ID']);
		$result = $this->db->get();
		//echo $this->db->last_query();die();
		if ($result->num_rows() >= 1) {
			$result = $result->result();
			$this->db->where('EMPLOYEE_ID', $data['EMPLOYEE_ID']);
			$this->db->update(employee_primary, $where);
			//echo $this->db->last_query();die();
			return $data;
		} else {
			return array();
		}
	}
//end	
}  
?>