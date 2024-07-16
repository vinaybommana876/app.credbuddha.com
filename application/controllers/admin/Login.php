<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation', 'session'));
		$this->load->database(); // Load the database library
		$this->load->helper('otp');

	}
	public function index()
	{
		$this->load->view('admin_panel/login_view');
	}

	function validate()
	{
		if (isset($_POST)) {
			$username = $_POST['username'];
			$password = $_POST['password'];

			// Properly build the query
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$query = $this->db->get('Admin'); // Execute the query on the 'Admin' table

			if ($query->num_rows() > 0) {
				// Credentials are correct
				$result = $query->result_array();
				$this->session->set_userdata('user_id', $result[0]['uid']);

				redirect('admin/dashboard');
			} else {
				// Credentials are not correct
				echo 'Invalid Credentials';
			}
		} else {
			die('Invalid Request');
		}
	}
	function logout()
	{
		session_destroy();
		redirect('admin/login');
	}

	// public function sendOtp($mobile){
	// 	send_one_time_password("4321", $mobile);
	// 	echo $mobile;
	// }








}
