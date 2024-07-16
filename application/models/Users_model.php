<?php 

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users_model extends CI_Model {
	
	function __construct() {
        parent::__construct();
    }
	
	public function validateLogin($data){
		$this->db->select('*');
        $this->db->where('mobile',$data->email);
        $this->db->where('password',$data->password);
        $result = $this->db->get('users')->row();
        return $result;
	}

    public function createUser($data){
        $this->db->select('*');
		$this->db->where('mobile', $data['mobile']);		
        $result = $this->db->get('users')->row();
        if(isset($result->user_id)){
            $result = array( 'status' => 'fail', 'data' => 'User Already Existed with this mobile number');
        } else {
            $this->db->insert('users', $data);
		    if($this->db->affected_rows() > 0){
			$result = array( 'status' => 'success', 'insert_id' => $this->db->insert_id());
			} else {
			$result = array( 'status' => 'error', 'error' => $this->db->error());
			}

        }
		return $result;
	}

    public function getUsers(){
		$this->db->select('*');
		$this->db->from('users');
		$result = $this->db->get()->result();
		return $result;
	}

    public function getUserDetailsById($id){
		$this->db->select('*');
		$this->db->where('user_id', $id);		
        $result = $this->db->get('users')->row();
        return $result;
	}

    public function verifyOTP($data){

        $this->db->select('*');
		$this->db->where('mobile', $data['mobile']);		
        $user_details = $this->db->get('users')->row();

        if($user_details->otp == $data['otp']){
            $data['otp_verified'] = 'Y';
            $this->db->where('mobile', $data['mobile']);
            $this->db->update('users', $data);    
            $result = array( 'status' => 'success',  'data' => $user_details, 'message' => $this->db->affected_rows(). ' OTP verified successfully');
        } else {
            $result = array( 'status' => 'fail', 'error' => $this->db->error());
        }

        return $result;
	}

    
    // public function getLoginDetails($mobile, $password){
    public function getLoginDetails($mobile){
		$this->db->select('*');
		$this->db->where('mobile', $mobile);		
		// $this->db->where('password', $password);		
        $result = $this->db->get('users')->row();
        return $result;
	}

    public function updateOTP($mobile, $otp){
            $data['otp_verified'] = 'N';
            $data['otp'] = $otp;
            $this->db->where('mobile', $mobile);
            $this->db->update('users', $data);    
            if($this->db->affected_rows() > 0){
                $result = array( 'status' => 'success', 'data' => $this->db->affected_rows(). ' OTP updated successfully');
            } else {
                $result = array( 'status' => 'error', 'error' => $this->db->error());
            }

        return $result;
	}

    public function updatePassword($user_id, $password){
        $data['password'] = $password;
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $data);    
        if($this->db->affected_rows() > 0){
            $result = array( 'status' => 'success', 'data' => $this->db->affected_rows(). ' row(s) updated, Password updated successfully');
        } else {
            $result = array( 'status' => 'error', 'error' => $this->db->error());
        }

        return $result;
    }

    public function updateUserDetails($user_id, $data){
        $this->db->where('user_id', $user_id);
        $this->db->update('users', $data);    
        if($this->db->affected_rows() > 0){
            $result = array( 'status' => 'success', 'data' => $this->db->affected_rows(). ' row(s) updated, Data updated successfully');
        } else {
            $result = array( 'status' => 'error', 'error' => $this->db->error());
        }

        return $result;
    }

    //insert/update fcm token
    public function insertUpdateFcmToken($data)
    {
        //check and insert/update the FCM token for the users against the userid
        $this->db->where('user_id', $data['userId']);
        $this->db->where('deviceid', $data['deviceId']);
        $query = $this->db->get('gcm_users');
        if($query->num_rows() > 0)
        {
            //update
            $updateArr = array(
                'user_id' => $data['userId'],
                'mobile' => $data['mobile'],
                'deviceid' => $data['deviceId'],
                'createdon' => date("Y-m-d H:i:s")
            );
            $this->db->where('user_id', $data['userId']);
            $result = $this->db->update('gcm_users', $updateArr);
            return $result;
        }
        else
        {
            //insert
            $insertArr = array(
                'user_id' => $data['userId'],
                'mobile' => $data['mobile'],
                'deviceid' => $data['deviceId'],
                'createdon' => date("Y-m-d H:i:s")
            );
            $result = $this->db->insert('gcm_users', $insertArr);
            return $result;
        }
    }

    public function insertInstallationLog($data){
       
        $this->db->insert('users_install_log', $data);
		    if($this->db->affected_rows() > 0){
			$result = array( 'status' => 'success', 'insert_id' => $this->db->insert_id());
			} else {
			$result = array( 'status' => 'error', 'error' => $this->db->error());
			}
		return $result;
	}


}