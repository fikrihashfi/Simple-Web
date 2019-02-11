<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instrument extends CI_Controller {

	 //variable di models semua

    public function __construct(){
        parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('instruments');
		$this->load->model('customer_model');
		$this->load->model('comment_model');
	}
	
	public function AddInstrumentView(){
		if(!isset($this->session->userdata['username'])){
			?><script>window.alert("Anda Belum Login!");</script><?php
			$this->load->view('Admin_Login');
		}
		else{
		$this->load->view('AddInstrument');
		}
	}

	public function Instrument_Detail_View($id){
		if(isset($this->session->userdata['username'])){
			// $detail["instrument"]=$this->instruments->read_insturment_information($id);
			$this->load->view('header_customer');
			$this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id));
			$this->load->view('Comment', $this->comment_model->view_comment($id));
			$this->load->view('footer');
		}
		else{
			if(isset($this->session->userdata['admin_name'])){
				// $detail["instrument"]=$this->instruments->read_insturment_information($id);
                $this->load->view('header_admin');
				$this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id));
				$this->load->view('Comment', $this->comment_model->view_comment($id));
                $this->load->view('footer');
			}
			else{
			?><script>window.alert("Silahkan Login terlebih dahulu!");</script><?php
			$this->load->view('Customer_Login');
			}
		}
	}

	
    function search_instrument()
    {
        $keyword    =   $this->input->post('keyword');
		$data['instrument']    =   $this->instruments->search($keyword);
		if(isset($this->session->userdata['username'])){
			$this->load->view('header_customer');
			$this->load->view('Dashboard', $data);
			$this->load->view('footer');
		}
		else{
			if(isset($this->session->userdata['admin_name'])){
				$this->load->view('header_admin');
				$this->load->view('Dashboard', $data);
				$this->load->view('footer');
			}
			else{
				$this->load->view('header_customer');
				$this->load->view('Dashboard', $data);
			}
		}
	}
	




	// public function View() {

	// 	$this->db->select('*');
    //     $this->db->from('instrument');
    //     $query = $this->db->get();
    //     $instrument['instrument'] = $query->custom_result_object('instruments_data');		
	// 	return $instrument;
	// 	}

}