<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Offers_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	

    public function getOffers(){
		$this->db->select('*');
		$this->db->from('offers');
		$result = $this->db->get()->result();
		return $result;
	}

    public function getOfferDetailsById($id){
		$this->db->select('*');
		$this->db->where('offer_id', $id);		
        $result = $this->db->get('offers')->row();
        return $result;
	}

    public function getPreApprovedOffers($user_id){
		$this->db->select('*');
		$this->db->where('user_id', $user_id);		
        $user = $this->db->get('users')->row();

        if(isset($user->user_id)){
            $this->db->select('*');
            $this->db->where("(CASE WHEN income_check = 'Y' THEN income >= ". $user->income ." WHEN income_check = 'N' THEN income >= 0 END)");
            $this->db->where("(CASE WHEN emp_type_check = 'Y' THEN emp_type = '". $user->employee_type ."' WHEN emp_type_check = 'N' THEN 1=1 END)");
            $this->db->where('display_category', 'personal_loan');
            $offers = $this->db->get('offers')->result();
            $offer_data = array();

            //OFFER CONDITIONS CHECKING
            foreach($offers as $offer){

                //PINCODE CHECKING
                if($offer->pincode_check == "Y"){
                    $this->db->select('*');
                    $this->db->where('pincode', $user->pincode);		
                    $check_pincode = $this->db->get($offer->pincode_table)->row();
                    if(!empty($check_pincode)){
                        $check_pincode_status = "Y";
                    } else {
                        $check_pincode_status = "N";
                    }
                } else {
                    $check_pincode_status = "Y";
                }

                //EXISTING CUSTOMER CHECKING
                if($offer->exist_cust_check == "Y"){
                    $this->db->select('*');
                    $this->db->where('mobile', "91".$user->mobile);		
                    $check_cust = $this->db->get($offer->exist_cust_table)->row();
                    if(!empty($check_cust)){
                        $exist_cust_check_status = "N";
                    } else {
                        $exist_cust_check_status = "Y";
                    }
                } else {
                    $exist_cust_check_status = "Y";
                }

                if($check_pincode_status == "Y" AND $exist_cust_check_status == "Y") {
                    array_push($offer_data, $offer);
                } else{
                    continue;
                }
            }

            $result = array( 'status' => 'success', 'data' => $offer_data);
        } else {
            $result = array( 'status' => 'fail', 'error' => $this->db->error());
        }
        return $result;
	}

    public function getOffersByUserIdandDisplayCategory($user_id, $display_category){
		$this->db->select('*');
		$this->db->where('user_id', $user_id);		
        $user = $this->db->get('users')->row();

        if(isset($user->user_id)){
            $this->db->select('*');
            $this->db->where("(CASE WHEN income_check = 'Y' THEN income >= ". $user->income ." WHEN income_check = 'N' THEN income >= 0 END)");
            $this->db->where("(CASE WHEN emp_type_check = 'Y' THEN emp_type = '". $user->employee_type ."' WHEN emp_type_check = 'N' THEN 1=1 END)");
            $this->db->where('display_category', $display_category);
            $this->db->where('status', 'Y');
            $offers = $this->db->get('offers')->result();
            $offer_data = array();

            //OFFER CONDITIONS CHECKING
            foreach($offers as $offer){

                //PINCODE CHECKING
                if($offer->pincode_check == "Y"){
                    $this->db->select('*');
                    $this->db->where('pincode', $user->pincode);		
                    $check_pincode = $this->db->get($offer->pincode_table)->row();
                    if(!empty($check_pincode)){
                        $check_pincode_status = "Y";
                    } else {
                        $check_pincode_status = "N";
                    }
                } else {
                    $check_pincode_status = "Y";
                }

                //EXISTING CUSTOMER CHECKING
                if($offer->exist_cust_check == "Y"){
                    $this->db->select('*');
                    $this->db->where('mobile', "91".$user->mobile);		
                    $check_cust = $this->db->get($offer->exist_cust_table)->row();
                    if(!empty($check_cust)){
                        $exist_cust_check_status = "N";
                    } else {
                        $exist_cust_check_status = "Y";
                    }
                } else {
                    $exist_cust_check_status = "Y";
                }

                if($check_pincode_status == "Y" AND $exist_cust_check_status == "Y") {
                    array_push($offer_data, $offer);
                } else{
                    continue;
                }
            }

            $result = array( 'status' => 'success', 'data' => $offer_data);
        } else {
            $result = array( 'status' => 'fail', 'error' => $this->db->error());
        }
        return $result;
	}

    public function getPreApprovedCreditCards($user_id){
		$this->db->select('*');
		$this->db->where('user_id', $user_id);		
        $user = $this->db->get('users')->row();

        if(isset($user->user_id)){
            $this->db->select('*');
            $this->db->where("(CASE WHEN income_check = 'Y' THEN income >= ". ($user->income * 12) ." WHEN income_check = 'N' THEN income >= 0 END)");
            $this->db->where("(CASE WHEN emp_type_check = 'Y' THEN emp_type = '". $user->employee_type ."' WHEN emp_type_check = 'N' THEN 1=1 END)");
            $this->db->where('display_category', 'credit_card');
            $offers = $this->db->get('offers')->result();
            $result = array( 'status' => 'success', 'data' => $offers);
        } else {
            $result = array( 'status' => 'fail', 'error' => $this->db->error());
        }
        return $result;
	}

    public function getPreApprovedInsurances($user_id){
		$this->db->select('*');
		$this->db->where('user_id', $user_id);		
        $user = $this->db->get('users')->row();

        if(isset($user->user_id)){
            $this->db->select('*');
            $this->db->where("(CASE WHEN income_check = 'Y' THEN income >= ". ($user->income * 12) ." WHEN income_check = 'N' THEN income >= 0 END)");
            $this->db->where("(CASE WHEN emp_type_check = 'Y' THEN emp_type = '". $user->employee_type ."' WHEN emp_type_check = 'N' THEN 1=1 END)");
            $this->db->where('display_category', 'insurance');
            $offers = $this->db->get('offers')->result();
            $result = array( 'status' => 'success', 'data' => $offers);
        } else {
            $result = array( 'status' => 'fail', 'error' => $this->db->error());
        }
        return $result;
	}

    public function getBanners($category, $user_id = NULL){
		$this->db->select('*');
        $this->db->where('banner_category', $category);	
		$this->db->from('banners');
		$result = $this->db->get()->result();
		return $result;
	}
}