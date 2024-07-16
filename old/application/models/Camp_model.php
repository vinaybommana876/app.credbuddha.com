<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Camp_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
        $this->load->database();
    }
	
	public function createLead($data){
	$this->db->insert('leads', $data);

	$this->db->select('*');
	$this->db->where('lead_id', $this->db->insert_id());
	$result = $this->db->get('leads')->row();
	return $result;
	}
	
	public function getOfferById($id){
		$this->db->select('*');
        $this->db->where('offer_id',$id);
        $result = $this->db->get('offers')->row();
        return $result;
	}
	
	public function getLeadById($id){
		$this->db->select('*');
        $this->db->where('lead_id',$id);
        $result = $this->db->get('leads')->row();
        return $result;
	}

	public function getAllOfferOrderByPriority($series_list = NULL, $series = NULL){
		$this->db->select('*');
		if($series != NULL){
			$this->db->where_in('offer_id', $series_list);
			if($series == 1){
				$this->db->order_by('FIELD ( offer_id, 11, 1, 3, 9 )');
			} else if($series == 2){
				$this->db->order_by('FIELD ( offer_id, 9, 6, 3)');
			} else {
				$this->db->order_by("priority", "ASC");
			}
			
		} else{
			$this->db->order_by("priority", "ASC");
			$this->db->where('status','Y');
		}

        $result = $this->db->get('offers')->result();
        return $result;
	}

	public function checkPincodeStatus($table_name, $pincode){
		$this->db->select('*');
        $this->db->where("pincode", $pincode);
        $result = $this->db->get($table_name)->row();
        return $result;
	}

	public function checkExistCustStatus($table_name, $mobile){
		$this->db->select('*');
        $this->db->where("mobile", "91".$mobile);
        $result = $this->db->get($table_name)->row();
        return $result;
	}

	
    function __destruct(){
        $this->db->close();
    }
}
