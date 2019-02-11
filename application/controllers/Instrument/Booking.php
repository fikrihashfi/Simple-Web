<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booking extends CI_Controller {

     //variable di models semua

	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('customer_model');
        $this->load->model('instruments');
        $this->load->model('booking_model');
	}

    public function booking($id_instrument, $id_customer){

    $this->form_validation->set_rules('pieces', 'Pieces', 'trim|required|max_length[1]');
    $this->form_validation->set_rules('date', 'Date', 'trim|required');
    $this->form_validation->set_rules('days', 'Days', 'trim|required');

    if($id_customer==0){
        ?><script> window.alert("Tidak dapat memesan, anda adalah seorang Admin"); </script><?php
        $this->load->view('header_admin');
        $this->load->view('Dashboard', $this->instruments->View());
        $this->load->view('footer');
    }
    else{
    if ($this->form_validation->run() == FALSE) {
        ?><script> window.alert("Tidak dapat memesan, barang terlalu banyak / tanggal tidak sesuai aturan"); </script><?php
            $this->load->view('header_customer');
            $this->load->view('Dashboard', $this->instruments->View());
            $this->load->view('footer');
        } else {
            $data = array(
            'fk_instruments_id' => $id_instrument,
            'fk_customer_id' => $id_customer,
            'pieces' => $this->input->post('pieces'),
            'date' => $this->input->post('date'),
            'days' => $this->input->post('days'),
            );
        $result = $this->booking_model->insert_booking($data);
        if ($result == TRUE) {
            ?><script>window.alert("Terimakasih, booking Berhasil!");</script><?php
            // $instrument["instrument"]=$this->instruments->ViewInstrument();
            $this->load->view('header_customer');
            $this->load->view('Dashboard', $this->instruments->View());
            $this->load->view('footer');
        } else {
            ?><script>window.alert("Tidak dapat booking!");</script><?php
            $this->load->view('header_customer');
            $this->load->view('Dashboard', $this->instruments->View());
            $this->load->view('footer');
        }
        }
        
    }
    }
    
    public function view_booking(){
		if(isset($this->session->userdata['username'])){
			$this->load->view('header_customer');
			$this->load->view('AllBooking', $this->booking_model->view_booking_customer($this->session->userdata['customer_id']));
		}
		else{
            if(isset($this->session->userdata['admin_name'])){
                // $instrument["instrument"]=$this->instruments->ViewInstrument();
                $this->load->view('header_admin');
                $this->load->view('AllBooking', $this->booking_model->view_booking());
            }
            else{
            ?><script>window.alert("Silahkan Login terlebih dahulu!");</script><?php
            $this->load->view('Customer_Login');
            }
		}
	}




}