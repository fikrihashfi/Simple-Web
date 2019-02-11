<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rental extends CI_Controller {

	 //variable di models semua

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('customer_model');
		$this->load->model('instruments');
		$this->load->model('rental_model');
	}

	public function View_Rental(){
		if(isset($this->session->userdata['username'])){
			$this->load->view('header_customer');
			$this->load->view('AllRent', $this->rental_model->view_rental_customer($this->session->userdata['customer_id']));
		}
		else{
			if(isset($this->session->userdata['admin_name'])){
				$this->load->view('header_admin');
				$this->load->view('AllRent', $this->rental_model->view_rental());
			}
			else{
				?><script>window.alert("Silahkan Login terlebih dahulu!");</script><?php
				$this->load->view('Customer_Login');
			}
		}

	}

}