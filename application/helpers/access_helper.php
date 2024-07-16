<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('access_verification')){
   function access_verification($user_id){
       //get main CodeIgniter object
       $ci =& get_instance();
       //load databse library
       $ci->load->database();
       //get data from database
       $query = $ci->db->get_where('users', array('user_id'=> $user_id));
       if($query->num_rows() > 0){
           $result = $query->row();
           $headers = apache_request_headers();
           if($headers['Access-Token'] == $result->access_token){
            return true;
           } else {
            return false;
           }
       }else{
           return false;
       }
   }
}