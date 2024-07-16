<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
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

	public function index()
	{
		$this->load->view('index');
	}
	public function bloghome()
	{
		$this->load->model('blog_articles', 'am');
		$result = $this->am->fetch_all_blog_articles();
		// print_r($result);
		$data['result'] = $result;
		$this->load->view('blog', $data);
	}
	public function blogdetails($blog_id)
	{
		$this->load->model('blog_articles', 'am');
		$result = $this->am->fetch_blog_detail($blog_id);
		$data['result'] = $result;
		// print_r($result);
		$this->load->view('blog-details', $data);
	}
	public function personal()
	{
		$this->load->view('personalloan');
	}
	public function marriage()
	{
		$this->load->view('marriage');
	}
	public function travel()
	{
		$this->load->view('travel');
	}
	public function medical()
	{
		$this->load->view('medical');
	}
	public function business()
	{
		$this->load->view('business');
	}
	public function home()
	{
		$this->load->view('home');
	}
	public function car()
	{
		$this->load->view('car');
	}
	public function bike()
	{
		$this->load->view('bike');
	}
	public function education()
	{
		$this->load->view('education');
	}
	public function gold()
	{
		$this->load->view('gold');
	}
	public function creditscore()
	{
		$this->load->view('creditscore');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function contact()
	{
		$this->load->view('contact');
	}
	public function form()
	{
		$this->load->view('form6');
	}
	public function terms()
	{
		$this->load->view('tnc');
	}
	public function privacy()
	{
		$this->load->view('privacy');
	}


	public function process_form()
	{
		// Check if form is submitted (POST request)
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			// Get form data
			$phone = $this->input->post('phone');
			$otp = $this->input->post('otp');
			$loan = $this->input->post('loan');
			$email = $this->input->post('email');
			$options = $this->input->post('options');
			$options1 = $this->input->post('options1');
			$options2 = $this->input->post('options2');
			$profession = $this->input->post('profession');
			$sector = $this->input->post('sector');
			$company_name = $this->input->post('company_name');
			$company_address = $this->input->post('company_address');
			$company_exp = $this->input->post('company_exp');
			$designation = $this->input->post('designation');
			$birthday = $this->input->post('birthday');
			$p_gender = $this->input->post('p_gender');
			$qualification = $this->input->post('qualification');
			$pancard = $this->input->post('pancard');
			$firstname = $this->input->post('firstname');
			$lastname = $this->input->post('lastname');
			$qualification1 = $this->input->post('qualification1');
			$Institution = $this->input->post('Institution');
			$residentType = $this->input->post('residentType');
			$current_address_years = $this->input->post('current_address_years');
			$address_pincode = $this->input->post('address_pincode');
			$monthly_income = $this->input->post('monthly_income');
			$bank = $this->input->post('bank');
			$valid_check = $this->input->post('valid_check');
			$b_name = $this->input->post('b_name');
			$valid_check2 = $this->input->post('valid_check2');
			$options3 = $this->input->post('options3');
			$company_name2 = $this->input->post('company_name2');
			$address = $this->input->post('address');
			$locality = $this->input->post('locality');
			$city = $this->input->post('city');
			$state = $this->input->post('state');
			$options4 = $this->input->post('options4');
			$sector2 = $this->input->post('sector2');
			$b_company_name = $this->input->post('b_company_name');
			$b_address_pincode = $this->input->post('b_address_pincode');
			$b_years = $this->input->post('b_years');
			$business_nature = $this->input->post('business_nature');

			// Display all input values (for debugging purposes)
			echo "<pre>";
			echo "Phone: $phone <br>";
			echo "Email OTP: $otp <br>";
			echo "Loan: $loan <br>";
			echo "Email: $email <br>";
			echo "Options: $options <br>";
			echo "Options1: $options1 <br>";
			echo "Options2: $options2 <br>";
			echo "Profession: $profession <br>";
			echo "Sector: $sector <br>";
			echo "Company Name: $company_name <br>";
			echo "Company Address: $company_address <br>";
			echo "Company Experience: $company_exp <br>";
			echo "Designation: $designation <br>";
			echo "Birthday: $birthday <br>";
			echo "Gender: $p_gender <br>";
			echo "Qualification: $qualification <br>";
			echo "PAN Card: $pancard <br>";
			echo "First Name: $firstname <br>";
			echo "Last Name: $lastname <br>";
			echo "Qualification: $qualification1 <br>";
			echo "Institution: $Institution <br>";
			echo "Resident Type: $residentType <br>";
			echo "Current Address Years: $current_address_years <br>";
			echo "Address Pincode: $address_pincode <br>";
			echo "Monthly Income: $monthly_income <br>";
			echo "Bank: $bank <br>";
			echo "Valid Check: $valid_check <br>";
			echo "Business Name: $b_name <br>";
			echo "Valid Check 2: $valid_check2 <br>";
			echo "Options3: $options3 <br>";
			echo "Company Name 2: $company_name2 <br>";
			echo "Address: $address <br>";
			echo "Locality: $locality <br>";
			echo "City: $city <br>";
			echo "State: $state <br>";
			echo "Options4: $options4 <br>";
			echo "Sector 2: $sector2 <br>";
			echo "Business Company Name: $b_company_name <br>";
			echo "Business Address Pincode: $b_address_pincode <br>";
			echo "Business Years: $b_years <br>";
			echo "Business Nature: $business_nature <br>";
			echo "</pre>";
		}
	}


	// public function process_form()
	// {
	// 	// Check if form is submitted (POST request)
	// 	if ($this->input->server('REQUEST_METHOD') == 'POST') {
	// 		// Get form data
	// 		$phone = $this->input->post('phone');
	// 		$email = $this->input->post('otp');
	// 		$loan = $this->input->post('loan');
	// 		$email = $this->input->post('email');
	// 		$options = $this->input->post('options');
	// 		$options1 = $this->input->post('options1');
	// 		$options2 = $this->input->post('options2');
	// 		$profession = $this->input->post('profession');
	// 		$sector = $this->input->post('sector');
	// 		$company_name = $this->input->post('company_name');
	// 		$company_address = $this->input->post('company_address');
	// 		$company_exp = $this->input->post('company_exp');
	// 		$designation = $this->input->post('designation');
	// 		$birthday = $this->input->post('birthday');
	// 		$p_gender = $this->input->post('p_gender');
	// 		$qualification = $this->input->post('qualification');
	// 		$pancard = $this->input->post('pancard');
	// 		$firstname = $this->input->post('firstname');
	// 		$lastname = $this->input->post('lastname');
	// 		$residentType = $this->input->post('residentType');
	// 		$current_address_years = $this->input->post('current_address_years');
	// 		$address_pincode = $this->input->post('address_pincode');
	// 		$monthly_income = $this->input->post('monthly_income');
	// 		$bank = $this->input->post('bank');
	// 		$valid_check = $this->input->post('valid_check');
	// 		$b_gender = $this->input->post('b_gender');
	// 		$valid_check2 = $this->input->post('valid_check2');
	// 		$options3 = $this->input->post('options3');
	// 		$company_name2 = $this->input->post('company_name2');
	// 		$address = $this->input->post('address');
	// 		$locality = $this->input->post('locality');
	// 		$city = $this->input->post('city');
	// 		$state = $this->input->post('state');
	// 		$options4 = $this->input->post('options4');
	// 		$sector2 = $this->input->post('sector2');
	// 		$b_company_name = $this->input->post('b_company_name');
	// 		$b_address_pincode = $this->input->post('b_address_pincode');
	// 		$b_years = $this->input->post('b_years');
	// 		$business_nature = $this->input->post('business_nature');




	// 		// Validate or process the data as needed

	// 		// Example: Verify and output the received data
	// 		echo "Name: " . $name . "<br>";
	// 		echo "Email: " . $email . "<br>";
	// 		echo "Date of Birth: " . $dob . "<br>";

	// 		// You can also load a view or redirect after processing the form
	// 	} else {
	// 		// Handle GET request or initial load of form (optional)
	// 	}
	// }
}
