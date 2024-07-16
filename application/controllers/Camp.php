<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Camp extends CI_Controller
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

	function __construct()
	{
		parent::__construct();
		$this->load->library('user_agent');
		if (!$this->agent->is_mobile()) {
			// redirect('https://www.google.com');
		}
		$this->load->model('camp_model');
		$this->load->helper('otp_helper');
	}

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
		$this->load->view('form');
	}
	public function terms()
	{
		$this->load->view('tnc');
	}
	public function privacy()
	{
		$this->load->view('privacy');
	}
	public function success()
	{
		$this->load->view('success');
	}
	public function process_step()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			// Handle received data
			$mobile = isset($_POST['mobile']) ? $_POST['mobile'] : null;
			$email = isset($_POST['email']) ? $_POST['email'] : null;
			$loan = isset($_POST['loan']) ? $_POST['loan'] : null;
			// Handle other form fields similarly
			
			if ($mobile) {
				// Generate OTP
				$otp = rand(1000, 9999); // Generate a random 4-digit OTP
				$this->session->set_userdata('otp', $otp); // Store OTP in session for verification
				$this->session->set_userdata('mobile', $mobile); // Store mobile number in session
			
				// $this->save_data();
				// Send OTP
				send_one_time_password($otp, $mobile);
				$session_otp = $this->session->userdata('otp');
				// Return appropriate response
				echo json_encode(['status' => 'success', 'message' => 'OTP sent to mobile.', 'otp' => $session_otp]);
				// $this->save_data();
			} else {
				// Handle case where mobile number is not provided
				echo json_encode(['status' => 'error', 'message' => 'mobile number is required.']);
			}
			exit;
		}
	}

	// public function sendOtp($mobile, $otp) {
	//     send_one_time_password($otp, $mobile);
	// }

	public function otp_verification()
	{
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			// Handle received data
			$entered_otp = isset($_POST['otp']) ? $_POST['otp'] : null;

			// Retrieve OTP from session
			$session_otp = $this->session->userdata('otp');
			$mobile = $this->session->userdata('mobile');

			if ($entered_otp && $entered_otp == $session_otp) {
				// OTP is correct, proceed to the next step
				// Clear OTP from session
				

				// Return appropriate response
				echo json_encode(['status' => 'OTP_VERIFIED', 'message' => 'OTP verified. Proceeding to next step.', 'otp' => $session_otp]);
				// $this->session->unset_userdata('otp');
			} else {
				// OTP is incorrect
				echo json_encode(['status' => 'OTP_FAIL', 'message' => 'Invalid OTP.', 'otp' => $session_otp]);
			}
			exit;
		}
	}
	public function process_form()
	{
		// Check if form is submitted (POST request)
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			// Define an array to hold all form fields dynamically
			$data = [
				'mobile' => $this->input->post('mobile'),
				'otp' => $this->input->post('otp'),
				'loan' => $this->input->post('loan'),
				'email' => $this->input->post('email'),
				'loan_type' => $this->input->post('options'),
			];

			// Determine loan type and set additional fields based on conditions
			if ($data['loan_type'] === 'Personal_Loan') {
				$data['employee_type'] = $this->input->post('options1');
				if ($data['employee_type'] === 'SALARIED') {
					$data['salary_mode'] = $this->input->post('options2');
					if ($data['salary_mode'] === 'Salary_in_Bank') {
						$data['company_type'] = $this->input->post('sector');
						$data['company_name'] = $this->input->post('company_name');
						$data['pincode'] = $this->input->post('pincode');
						$data['company_exp'] = $this->input->post('company_exp');
						$data['designation'] = $this->input->post('designation');
						$data['birthday'] = $this->input->post('birthday');
						$data['gender'] = $this->input->post('p_gender');
						$data['qualification'] = $this->input->post('qualification');
						$data['pancard'] = $this->input->post('pancard');
						$data['firstname'] = $this->input->post('firstname');
						$data['lastname'] = $this->input->post('lastname');
						$data['residentType'] = $this->input->post('residentType');
						$data['current_address_years'] = $this->input->post('current_address_years');
						$data['address_pincode'] = $this->input->post('address_pincode');
						$data['income'] = $this->input->post('income');
						$data['bank'] = $this->input->post('bank');
						$data['valid_check'] = $this->input->post('valid_check');
					} elseif ($data['salary_mode'] === 'Salary_in_Cash') {
						$data['profession'] = $this->input->post('profession');
						$data['birthday'] = $this->input->post('birthday');
						$data['gender'] = $this->input->post('p_gender');
						$data['qualification'] = $this->input->post('qualification');
						$data['pancard'] = $this->input->post('pancard');
						$data['firstname'] = $this->input->post('firstname');
						$data['lastname'] = $this->input->post('lastname');
						$data['residentType'] = $this->input->post('residentType');
						$data['current_address_years'] = $this->input->post('current_address_years');
						$data['address_pincode'] = $this->input->post('address_pincode');
						$data['income'] = $this->input->post('income');
						$data['bank'] = $this->input->post('bank');
						$data['valid_check'] = $this->input->post('valid_check');
					}
				} elseif ($data['employee_type'] === 'SELF-EMPLOYEE') {
					$data['profession'] = $this->input->post('profession');
					// Additional fields for Personal Loan
					$data['birthday'] = $this->input->post('birthday');
					$data['gender'] = $this->input->post('p_gender');
					$data['qualification'] = $this->input->post('qualification');
					$data['pancard'] = $this->input->post('pancard');
					$data['firstname'] = $this->input->post('firstname');
					$data['lastname'] = $this->input->post('lastname');
					$data['residentType'] = $this->input->post('residentType');
					$data['current_address_years'] = $this->input->post('current_address_years');
					$data['address_pincode'] = $this->input->post('address_pincode');
					$data['income'] = $this->input->post('income');
					$data['bank'] = $this->input->post('bank');
					$data['valid_check'] = $this->input->post('valid_check');
				} elseif ($data['employee_type'] === 'Student') {
					$data['Institution'] = $this->input->post('Institution');
					$data['birthday'] = $this->input->post('birthday');
					$data['gender'] = $this->input->post('p_gender');
					$data['qualification'] = $this->input->post('qualification1');
					$data['pancard'] = $this->input->post('pancard');
					$data['firstname'] = $this->input->post('firstname');
					$data['lastname'] = $this->input->post('lastname');
					$data['residentType'] = $this->input->post('residentType');
					$data['current_address_years'] = $this->input->post('current_address_years');
					$data['address_pincode'] = $this->input->post('address_pincode');
					$data['valid_check'] = $this->input->post('valid_check2');
					$data['bank'] = $this->input->post('b_name');
				}
			} elseif ($data['loan_type'] === 'Business_Loan') {
				$data['Business_Proof'] = $this->input->post('options4');
				if ($data['Business_Proof'] === 'Yes') {
					$data['company_type'] = $this->input->post('sector2');
					$data['company_name'] = $this->input->post('b_company_name');
					$data['business_address_pincode'] = $this->input->post('b_address_pincode');
					$data['business_years'] = $this->input->post('b_years');
					$data['business_nature'] = $this->input->post('business_nature');
					$data['birthday'] = $this->input->post('birthday');
					$data['gender'] = $this->input->post('p_gender');
					$data['qualification'] = $this->input->post('qualification');
					$data['pancard'] = $this->input->post('pancard');
					$data['firstname'] = $this->input->post('firstname');
					$data['lastname'] = $this->input->post('lastname');
					$data['residentType'] = $this->input->post('residentType');
					$data['current_address_years'] = $this->input->post('current_address_years');
					$data['address_pincode'] = $this->input->post('address_pincode');
					$data['gross'] = $this->input->post('gross');
					$data['bank'] = $this->input->post('b_name1');
					$data['valid_check'] = $this->input->post('valid_check3');
				} elseif ($data['Business_Proof'] === 'No') {
					$data['Profession'] = $this->input->post('profession');
					$data['birthday'] = $this->input->post('birthday');
					$data['gender'] = $this->input->post('p_gender');
					$data['qualification'] = $this->input->post('qualification');
					$data['pancard'] = $this->input->post('pancard');
					$data['firstname'] = $this->input->post('firstname');
					$data['lastname'] = $this->input->post('lastname');
					$data['residentType'] = $this->input->post('residentType');
					$data['current_address_years'] = $this->input->post('current_address_years');
					$data['address_pincode'] = $this->input->post('address_pincode');
					$data['income'] = $this->input->post('income');
					$data['bank'] = $this->input->post('bank');
					$data['valid_check'] = $this->input->post('valid_check');

				}
			}

			// Insert into database table 'lead'
			$this->db->insert('leads', $data);
			$this->session->set_userdata('lead_id', $this->db->insert_id());

			// Check if insertion was successful
			if ($this->db->affected_rows() > 0) {
				// $redirect_url = 'welcome/success'; // Redirect to success page on successful insertion
			} else {
				$redirect_url = 'welcome/form'; // Redirect to form page if insertion failed
			}

			// Redirect to appropriate page based on insertion result
			redirect($redirect_url);
		} else {
			// Handle non-POST requests (if any)
			redirect('welcome/form'); // Redirect to form page or handle as appropriate
		}
	
	}


	public function multi()
	{
		if ($this->input->get('d') == 100) {
			redirect('https://trk.i1x.in/click?campaign_id=31&pub_id=2&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('d') == 101) {
			redirect('https://spectrum.gotrackier.com/click?campaign_id=231&pub_id=842&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('d') == 103) {
			redirect('https://edge.navifinserv.com/?naf_id=a27b3529-3ce3-4e9d-bea3-9ab1bed1e344', 'refresh');
		} else if ($this->input->get('d') == 104) {
			redirect('https://trk.i1x.in/click?campaign_id=22&pub_id=2&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('d') == 105) {
			redirect('https://tracking.salesleaf.com/aff_c?offer_id=2913&aff_id=6441&url_id=38023', 'refresh');
		} else if ($this->input->get('d') == 106) {
			redirect('https://s1.whistleloop.com/?linkid=13912&offerid=628&publisher_id=519&parentid=50&pub_name=Intexm Media&sub_id1=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 100) {
			redirect('https://trk.i1x.in/click?campaign_id=22&pub_id=2&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 101) {
			redirect('https://trk.i1x.in/click?campaign_id=95&pub_id=2&url_id=2&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 102) {
			//LendingKart PL
			redirect('https://trk.i1x.in/click?campaign_id=113&pub_id=2&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 103) {
			//FatakPay
			redirect('https://web.fatakpay.com/authentication/login?utm_source=72_WIJNQ&utm_medium=5743_' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 104) {
			//True Balance
			redirect('https://trk.i1x.in/click?campaign_id=91&pub_id=2&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 105) {
			//Credit Vidya
			redirect('https://trk.i1x.in/click?campaign_id=74&pub_id=2&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 106) {
			//Navi
			redirect('https://edge.navifinserv.com/?naf_id=c826d8d8-85bc-428b-bb0e-03e14c03010a' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 1001) {
			//SmartCoin
			redirect('https://lowcredit.in/campaign/offerpage?offer_id=7&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 1002) {
			//TruBalance
			redirect('https://trk.i1x.in/click?campaign_id=423&pub_id=2&source=' . $this->input->get('utm_source'), 'refresh');
		} else if ($this->input->get('m') == 1003) {
			//InCred
			redirect('https://trk.i1x.in/click?campaign_id=368&pub_id=2&url_id=5&source=' . $this->input->get('utm_source'), 'refresh');
		}

		$this->load->view('camp/' . $this->uri->segment(3) . '');
	}

	public function offer()
	{
		$offer_id = $this->input->get('offer_id', TRUE);

		$data['offer'] = $this->camp_model->getOfferById($offer_id);
		if (isset($_GET['lead_id'])) {
			$lead_id = $this->input->get('lead_id', TRUE);
			$data['lead'] = $this->camp_model->getLeadById($lead_id);
		} else {
			$data['lead'] = (object) array();
			$data['lead']->utm_source = $this->input->get('source');
		}

		$this->load->view('camp/offers/default', $data);
	}

	public function create_multi_offer()
	{
		$mstart = microtime(TRUE);
		$enable_errorlog = 0;

		if ($enable_errorlog == 1) {
			$start = microtime(TRUE);
		}
		//send selected data to the intexmengage for the notifications segmentation purpose
		// $data['token'] = $this->input->post('tokenValue');
		// $data['mobile_no'] = $this->input->post('mobile');
		// $data['product_id'] = '3';
		// $data['pincode'] = $this->input->post('pincode');
		// $data['income_type'] = $this->input->post('employee_type');
		// $data['income_range'] = $this->input->post('income', TRUE) * 12;
		// $data['agreed'] = $this->input->post('creditcard_using', TRUE);
		// $data['created_on'] = date("Y-m-d H:i:s");
		// $url = 'https://engage.intexmmedia.com//notifications/insertBasicLoanData';
		// $ch = curl_init($url);
		// // Set cURL options for the POST request
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		// curl_setopt($ch, CURLOPT_POST, true);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3); 
		// curl_setopt($ch, CURLOPT_TIMEOUT, 3); //timeout in seconds
		// // Execute cURL session and get the response
		// $response = curl_exec($ch);
		// // Check for cURL errors
		// if (curl_errno($ch)) {
		// 	echo 'Curl error: ' . curl_error($ch);
		// }
		// curl_close($ch);

		$mobile = $this->input->post('mobile', TRUE);
		$employee_type = $this->input->post('employee_type', TRUE);
		$income = $this->input->post('income', TRUE);
		$pincode = $this->input->post('pincode', TRUE);
		$series = $this->input->post('series', TRUE);
		$utm_source = $this->input->get('source', TRUE);
		$otp = $this->input->post('otp', TRUE);
		$default = 1;

		if ($series == 1) {
			$series_list = array(11, 1, 3, 9);
		} else if ($series == 2) {
			$series_list = array(9, 6, 3);
		} else {
			$series_list = 0;
		}
		if ($enable_errorlog == 1) {
			$end = microtime(TRUE);
			$elapsed = $end - $start;
			// error_log($elapsed . "After Engage Request\n", 3, "/var/tmp/test-errors.log");
		}

		$lead_data = $this->db->select('*')
			->where('mobile', $mobile)
			->where('otp', $otp)
			->get('leads')
			->row();

		if($lead_data->loan_type == "Business_Loan"){
			$employee_type = "SELF-EMPLOYEE";	
		}

		// print_r($lead_id);
		if (isset($mobile) && $mobile != '') {
			$data = array(
				'mobile' => $mobile,
				'employee_type' => $employee_type,
				'income' => $income * 12,
				'pincode' => $pincode,
				'utm_source' => $utm_source,
				'rd_offer_id' => $default,
				'lead_id' => $lead_data->lead_id,
				'otp' => $otp,
			);
			// echo json_encode($data);
			// print_r($income);
			// print_r($lead_data);
			$curl_data = array();
			$curl_data["first_name"] =  $lead_data->firstname;
			$curl_data["last_name"] =  $lead_data->lastname;
			$curl_data["mobile"] =  $lead_data->mobile;
			$curl_data["employee_type"] =  $lead_data->employee_type;
			$curl_data["income"] =  $lead_data->income;
			$curl_data["pincode"] =  $lead_data->pincode;
			$curl_data["company"] =  $lead_data->company_name;
			$curl_data["pan_card_no"] =  $lead_data->pancard;
			$curl_data["dob"] =  $lead_data->birthday;
			// $curl_data["address_1"] =  $lead_data->address_pincode;
			// $curl_data["address_2"] =  $lead_data->address_pincode;
			// $curl_data["landmark"] =  $lead_data->landmark;
			// $curl_data["marital_status"] =  $lead_data->marital_status;
			// $curl_data["city"] =  $lead_data->city;
			// $curl_data["office_city"] =  $lead_data->office_city;
			$curl_data["office_pincode"] =  $lead_data->business_address_pincode;
			// $curl_data["office_address"] =  $lead_data->office_address;
			$curl_data["utm_source"] =  $utm_source;
			// $profession = 'Others';
		
		if($curl_data == 'SALARIED'):
			$url = 'https://www.lowcredit.in/services/fibe/create_loan_application';
			$ch = curl_init($url);
			// Set cURL options for the POST request
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, (array) $curl_data);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 3); //timeout in seconds	
			// Execute cURL session and get the response
			$response = curl_exec($ch);
			// Check for cURL errors
			if (curl_errno($ch)) {
			echo 'Curl error: ' . curl_error($ch);
			}
			curl_close($ch);
			$fibe_result = json_decode($response);
			$data['rd_offer_id'] = 1001;
			$data['utm_source'] = $utm_source;
			$data['redirection_url'] = $fibe_result->redirectionUrl;
			$data['api_response'] = json_encode($fibe_result);

			$lead = $this->camp_model->updateLead($data);

			if($fibe_result->status == "Accepted"){
				
						if(isset($lead->lead_id)){
						$lead->status = 'success';
						echo json_encode(array('status'=>'success', 'redirect_url'=> base_url()."loan/fibe/".$lead->lead_id));
						return;
						} else {
							echo json_encode(array('status'=>'success', 'redirect_url'=> base_url()."loan/fibe_fail/".$lead->lead_id));
							return;
						}
				
			} else if($fibe_result->status == "Suspended"){

						if(isset($lead->lead_id)){
						$lead->status = 'success';
						echo json_encode(array('status'=>'success', 'redirect_url'=> base_url()."loan/fibe_sus/".$lead->lead_id));
						return;
						} else {
							echo json_encode(array('status'=>'success', 'redirect_url'=> base_url()."loan/fibe_fail/".$lead->lead_id));
							return;
						}
			}
		endif;

			if ($enable_errorlog == 1) {
				$start = microtime(TRUE);
			}
			if ($series_list == 0) {
				$offers = $this->camp_model->getAllOfferOrderByPriority($data, $series_list = NULL, $mobile);
			} else {
				$offers = $this->camp_model->getAllOfferOrderByPriority($data, $series_list, $mobile);
			}
			if ($enable_errorlog == 1) {
				$end = microtime(TRUE);
				$elapsed = $end - $start;
				// error_log($elapsed . "After OffersCheck Request\n", 3, "/var/tmp/test-errors.log");
			}

			// echo "<pre>";
			// print_r($offers);exit;

			foreach ($offers as $offer) {

				//Pincode Checking
				if ($offer->pincode_check == 'Y') {
					if ($enable_errorlog == 1) {
						$start = microtime(TRUE);
					}
					$pincode_check = $this->camp_model->checkPincodeStatus($offer->pincode_table, $pincode);
					if (isset($pincode_check->pincode)) {
						$pincode_status = 'Y';
					} else {
						$pincode_status = 'N';
						continue;
					}
					if ($enable_errorlog == 1) {
						$end = microtime(TRUE);
						$elapsed = $end - $start;
						// error_log($elapsed . "(" . $offer->pincode_table . ")After PinCode Request\n", 3, "/var/tmp/test-errors.log");
					}
				} else {
					$pincode_status = 'Y';
				}
				if ($enable_errorlog == 1) {

					$start = microtime(TRUE);
				}
				//Existing Customenr Checking
				if ($offer->exist_cust_check == 'Y') {
					$exist_cust_check = $this->camp_model->checkExistCustStatus($offer->exist_cust_table, $mobile);
					if (isset($exist_cust_check->mobile)) {
						$exist_cust_status = 'Y';
						continue;
					} else {
						$exist_cust_status = 'N';
					}
				} else {
					$exist_cust_status = 'N';
				}
				if ($enable_errorlog == 1) {
					$end = microtime(TRUE);
					$elapsed = $end - $start;
					error_log($elapsed . "(" . $offer->exist_cust_table . ")After ExistCust Request\n", 3, "/var/tmp/test-errors.log");
				}

				// echo $pincode_status;
				// echo "<BR>";
				// echo $exist_cust_status;
				// echo "<BR>";
				// echo $income_status;
				// echo "<BR>";
				// echo $emp_type_status;
				// echo "<BR>";
				// echo $offer->offer_id;
				// exit;
				if ($enable_errorlog == 1) {
					$start = microtime(TRUE);
				}
				if ($pincode_status == 'Y' && $exist_cust_status == 'N') {
					$data['rd_offer_id'] = $offer->offer_id;
					$data['utm_source'] = $utm_source;
					// print_r($data);exit;
					$lead = $this->camp_model->updateLead($data);
					if (isset($lead->lead_id)) {
						$lead->status = 'success';
						$lead->redirect_url = base_url("camp/offer?offer_id=" . $data['rd_offer_id'] . "&lead_id=" . $lead->lead_id . "");
					}
					if ($enable_errorlog == 1) {
						$end = microtime(TRUE);
						$elapsed = $end - $start;
						// error_log($elapsed . "After LeadGen Request\n--------------CAMP\n", 3, "/var/tmp/test-errors.log");
					}
					echo json_encode($lead);
					$mend = microtime(TRUE);
					$melapsed = $mend - $mstart;
					// error_log(date("Y_m_d_h:i:sa") . "_EXTIME_END_REQUEST_LOWCR:" . round($melapsed, 2) . "\n", 3, "/var/tmp/" . date("Y_m_d_ha_") . "errors.log");
					return;
				} else {
					$data['rd_offer_id'] = $default;
				}

			}

			$data['rd_offer_id'] = $default;
			$data['utm_source'] = $utm_source;
			// print_r($data);exit;
			$lead = $this->camp_model->updateLead($data);
			if (isset($lead->lead_id)) {
				$lead->status = 'success';
				$lead->redirect_url = base_url("camp/offer?offer_id=" . $data['rd_offer_id'] . "&lead_id=" . $lead->lead_id . "");
			}
			if ($enable_errorlog == 1) {
				$end = microtime(TRUE);
				$elapsed = $end - $start;
				// error_log($elapsed."After LeadGen Request\n------------CAMP\n", 3, "/var/tmp/test-errors.log");
			}
			// print_r($lead);exit;
			echo json_encode($lead);
			$mend = microtime(TRUE);
			$melapsed = $mend - $mstart;
			// error_log(date("Y_m_d_h:i:sa")."_EXTIME_DEND_REQUEST_LOWCR:".round($melapsed,2)."\n", 3, "/var/tmp/".date("Y_m_d_ha_")."errors.log");
			return;
		}

	}
	public function save_data()
	{
		// Assuming you have validated and sanitized your input data

		// Get necessary data from POST
		$mobile = $this->input->post('mobile');
		$otp = $this->input->post('otp');

		// Check if data already exists for the mobile number and OTP
		$this->db->where('mobile', $mobile);
		$this->db->where('otp', $otp);
		$query = $this->db->get('leads');
		$existing_data = $query->row_array(); // Retrieve the result as an associative array	

		// Prepare data array with default values
		$data = array(
			'loan' => $this->input->post('loan'),
			'email' => $this->input->post('email'),
			'loan_type' => $this->input->post('options'),
			'employee_type' => $this->input->post('employee_type'),
			'salary_mode' => $this->input->post('options2'),
			'profession' => $this->input->post('Profession'),
			'company_type' => $this->input->post('sector'),
			'company_name' => $this->input->post('company_name'),
			'pincode' => $this->input->post('pincode'),
			'company_exp' => $this->input->post('company_exp'),
			'designation' => $this->input->post('designation'),
			'birthday' => $this->input->post('birthday'),
			'gender' => $this->input->post('p_gender'),
			'qualification' => $this->input->post('qualification'),
			'pancard' => $this->input->post('pancard'),
			'firstname' => $this->input->post('firstname'),
			'lastname' => $this->input->post('lastname'),
			'residentType' => $this->input->post('residentType'),
			'current_address_years' => $this->input->post('current_address_years'),
			'address_pincode' => $this->input->post('address_pincode'),
			'income' => $this->input->post('income'),
			'bank' => $this->input->post('bank'),
			'valid_check' => $this->input->post('valid_check'),
			'Institution' => $this->input->post('Institution'),
			'Business_Proof' => $this->input->post('options4'),
			'business_address_pincode' => $this->input->post('b_address_pincode'),
			'business_years' => $this->input->post('b_years'),
			'business_nature' => $this->input->post('business_nature'),
			'gross' => $this->input->post('gross')

		);
		

		// Filter out empty values
		$data = array_filter($data, function ($value) {
			return $value !== '' && $value !== null;
		});

		if ($existing_data) {
			// Data exists, perform update
			// $this->your_model->update_data($existing_data['id'], $data);
			$this->db->where('mobile', $mobile);
			$this->db->where('otp', $otp);
			$this->db->update('leads', $data); // Replace 'your_table' with your actual table name

			// Handle success or error response for update
		} else {
			// Data doesn't exist, perform insert
			$data['mobile'] = $mobile;
			$data['otp'] = $otp;
			// $this->your_model->insert_data($data);
			$this->db->insert('leads', $data);
			// Handle success or error response for insert
		}

		// Redirect or return JSON response, etc.
	}





	
	}



	






