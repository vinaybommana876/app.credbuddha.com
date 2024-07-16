<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offers extends CI_Controller {

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
		if($this->input->method(TRUE) != 'POST' OR $this->input->method(TRUE) != 'GET'){
			// echo json_encode(array('status' => 'fail', 'data' => 'Undefined Method: We allow only GET/POST'));
			// exit;
		}
		$this->load->model('offers_model');
	}

	public function index()
	{
		$result = $this->offers_model->getOffers();
		echo json_encode(array('status' => 'success', 'data' => $result));
	}

	public function details($id)
	{
		$result = $this->offers_model->getOfferDetailsById($id);
		echo json_encode(array('status' => 'success', 'data' => $result));
	}

	public function pre_approved()
	{
		$user_id = $this->input->post('user_id', TRUE);
		$result = $this->offers_model->getOffersByUserIdandDisplayCategory($user_id,'personal_loan');
		echo json_encode($result);
	}

	public function credit_cards()
	{
		$user_id = $this->input->post('user_id', TRUE);
		$result = $this->offers_model->getOffersByUserIdandDisplayCategory($user_id,'credit_card');
		echo json_encode($result);
	}

	public function insurances()
	{
		$user_id = $this->input->post('user_id', TRUE);
		$result = $this->offers_model->getPreApprovedInsurances($user_id);
		echo json_encode($result);
	}

	public function credit_score()
	{
		redirect('https://trk.i1x.in/click?campaign_id=82&pub_id=2&url_id=1&source=CRDAPP', 'refresh');
	}

	public function home_loan()
	{
		redirect('https://magneta.gotrackier.com/click?campaign_id=37&pub_id=40&p1={your-transaction-id}&source={your-sub-aff-id', 'refresh');
	}

	public function business_loan()
	{
		redirect('https://trk.i1x.in/click?campaign_id=409&pub_id=32&source=cb_iifl_3003', 'refresh');
	}

	public function banners($category)
	{
		$user_id = $this->input->post('user_id', TRUE);
		if($user_id == NULL){
			echo json_encode(array('status' => 'fail', 'data' => "User id not matching!"));
			return;
		}
		$result = $this->offers_model->getBanners($category, $user_id);
		echo json_encode(array('status' => 'success', 'data' => $result));
	}

	// public function instant_loan()
	// {
	// 	redirect('https://lowcredit.in/loan/application?utm_source=CRDAPP', 'refresh');
	// }

	// public function apply_loan()
	// {
	// 	redirect('https://lowcredit.in/loan/application?utm_source=CRDAPP', 'refresh');
	// }






}
