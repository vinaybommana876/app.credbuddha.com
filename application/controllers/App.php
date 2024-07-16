<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller {

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
	 * @see https://codeigniter.com/offerguide3/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->model('camp_model');
	}

	public function contact_us()
	{
		$this->load->view('website/contact');
	}
	public function terms()
	{
		$this->load->view('website/terms');
	}
	public function privacy()
	{
		$this->load->view('website/privacy_policy');
	}
    public function apply_loan()
	{
		 $this->load->view('website/apply_loan');
	}
	public function credit_card()
	{
		$this->load->view('website/credit');
	}
	public function loan_offer()
	{
		$this->load->view('website/loan_offer');
	}

	public function create_loan_application(){
		//send selected data to the intexmengage for the notifications segmentation purpose
		$data['token'] = $this->input->post('tokenValue');
		$data['mobile_no'] = $this->input->post('mobile');
		$data['product_id'] = '3';
		$data['pincode'] = $this->input->post('pincode');
		$data['income_type'] = $this->input->post('employee_type');
		$data['income_range'] = $this->input->post('income', TRUE);
		$data['agreed'] = $this->input->post('creditcard_using', TRUE);
		$data['created_on'] = date("Y-m-d H:i:s");
        $url = 'https://engage.intexmmedia.com//notifications/insertBasicLoanData';
		$ch = curl_init($url);
		// Set cURL options for the POST request
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		// Execute cURL session and get the response
		$response = curl_exec($ch);
		// Check for cURL errors
		if (curl_errno($ch)) {
		    echo 'Curl error: ' . curl_error($ch);
		}
		curl_close($ch);

		$mobile = $this->input->post('mobile', TRUE);
		$employee_type = $this->input->post('employee_type', TRUE);
		$income = $this->input->post('income', TRUE);
		$pincode = $this->input->post('pincode', TRUE);
		$series = $this->input->post('series', TRUE);
		$utm_source = $this->input->post('utm_source', TRUE);
		$default = $this->input->post('default', TRUE);

		if($series == 1){
			$series_list = array(11,1,3,9);
		} else if($series == 2) {
			$series_list = array(9,6,3);
		} else {
			$series_list = 0;
		}

		if(isset($mobile) && $mobile != ''){
			$data = array(
				'mobile' => $mobile,
				'employee_type' => $employee_type,
				'income' => $income,
				'pincode' => $pincode,
				'utm_source' => $utm_source,
				'rd_offer_id' => $default
			);
			
			if($series_list == 0) {
				$offers = $this->camp_model->getAllOfferOrderByPriority();
			} else {
				$offers = $this->camp_model->getAllOfferOrderByPriority($series_list, $series);
			}

			// print_r($offers);exit;
			
			foreach($offers as $offer){
				//Income Checking
				if($offer->income_check == "Y"){
					
					if($offer->income <= $income){
						$income_status = 'Y';
					} else {
						$income_status = 'N';
						continue;
					}
				} else {
					$income_status = 'Y';
				}

				//Income Checking
				if($offer->emp_type_check == "Y"){
					if($offer->emp_type == $employee_type){
						$emp_type_status = 'Y';
					} else {
						$emp_type_status = 'N';
						continue;
					}
				} else {
					$emp_type_status = 'Y';
				}
				
				//Pincode Checking
				if($offer->pincode_check == "Y"){
					$pincode_check = $this->camp_model->checkPincodeStatus($offer->pincode_table, $pincode);
					if(isset($pincode_check->pincode)){
						$pincode_status = 'Y';
					} else {
						$pincode_status = 'N';
						continue;
					}
				} else {
					$pincode_status = 'Y';
				}

				//Existing Customenr Checking
				if($offer->exist_cust_check == 'Y'){
					$exist_cust_check = $this->camp_model->checkExistCustStatus($offer->exist_cust_table, $mobile);
					if(isset($exist_cust_check->mobile)){
						$exist_cust_status = 'Y';
						continue;
					} else {
						$exist_cust_status = 'N';	
					}
				} else {
					$exist_cust_status = 'N';
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

				if($pincode_status == 'Y' && $exist_cust_status == 'N' && $income_status == 'Y' && $emp_type_status == 'Y'){
					$data['rd_offer_id'] = $offer->offer_id;
					$data['utm_source'] = $utm_source;
					$lead = $this->camp_model->createLead($data);
					if(isset($lead->lead_id)){
					$lead->status = 'success';
					}
					echo json_encode($lead);
					return;
				} else {
					$data['rd_offer_id'] = $default;
				}

			}

			$data['utm_source'] = $utm_source;
			$lead = $this->camp_model->createLead($data);
			if(isset($lead->lead_id)){
				$lead->status = 'success';
			}
			// print_r($lead);exit;
			echo json_encode($lead);
			return;
		}

	}

	public function offer(){
        $offer_id = $this->input->get('offer_id', TRUE);
        
        $data['offer'] = $this->camp_model->getOfferById($offer_id);
		if(isset($_GET['lead_id'])){
			$lead_id = $this->input->get('lead_id', TRUE);
			$data['lead'] = $this->camp_model->getLeadById($lead_id);
		} else {
			$data['lead'] = (object) array();
			$data['lead']->utm_source =  $this->input->get('source');
		}

		// echo "<pre>";
		// print_r($data);exit;

        $this->load->view('app/offers/'. $data['offer']->offer_page .'', $data);
    }
}
