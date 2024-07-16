<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

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
	}
	
	public function index()
	{
		$this->load->view('site/index');
	}

	public function contact_us()
	{
		$this->load->view('website/contact');
	}
	public function terms_and_conditions()
	{
		$this->load->view('site/terms_and_conditions');
	}
	public function privacy_policy()
	{
		$this->load->view('site/privacy_policy');
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
	public function personal_loan()
	{
		$this->load->view('site/personal_loan');
	}
	public function business_loan()
	{
		$this->load->view('site/business_loan');
	}
	public function form()
	{
		$this->load->view('site/form');
	}






}
