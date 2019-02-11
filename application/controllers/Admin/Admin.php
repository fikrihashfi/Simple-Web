<?php

class Admin extends CI_Controller{

    //variable di models semua
    
        public function __construct(){
            parent::__construct();
            $this->load->library('session');
            $this->load->library('form_validation');
            $this->load->helper(array('form', 'url'));
            $this->load->helper('url');
            $this->load->model('admin_model');
            $this->load->model('customer_model');
            $this->load->model('booking_model');
            $this->load->model('instruments');
            $this->load->model('comment_model');
        }

        public function Home(){
            $this->load->view('header_admin');
            $this->load->view('Dashboard', $this->instruments->View());
            $this->load->view('footer');
        }

        public function AdminLoginView(){
            if(isset($this->session->userdata['admin_name'])){
                ?><script>window.alert("Anda Masih Login!");</script><?php
                //$instrument["instrument"]=$this->instruments->ViewInstrument();
                $this->load->view('header_admin');
                $this->load->view('Dashboard', $this->instruments->View());
                $this->load->view('footer');
            }
            else{
                if(isset($this->session->userdata['username'])){
                    ?><script>window.alert("Anda masih login sebagai user!");</script><?php
                    $this->load->view('header_customer');
                    $this->load->view('Dashboard', $this->instruments->View());
                    $this->load->view('footer');
                }
                else{
                    $this->load->view('Admin_Login');
                }
            }
        }

        public function Login(){

        $this->form_validation->set_rules('admin_name', 'AdminName', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['admin_name'])){
                // $instrument["instrument"]=$this->instruments->ViewInstrument();
                $this->load->view('header_admin');
                $this->load->view('Dashboard', $this->instruments->View());
                $this->load->view('footer');
            }
            else{
                $this->load->view('Admin_Login');
            }
        } 
        else {
            $data = array(
            'admin_name' => $this->input->post('admin_name'),
            'password' => $this->input->post('password')
            );
            $result = $this->admin_model->adminlogin($data);
            if ($result == TRUE) {

                $admin_name = $this->input->post('admin_name');
                $result = $this->admin_model->read_admin_information($admin_name);
                if ($result != false) {
                    $session_data = array(
                    'admin_name' => $result[0]->admin_name,
                    'contact' => $result[0]->contact,
                    'admin_id' => $result[0]->admin_id
                    );
                    // Add user data in session
                    $this->session->set_userdata($session_data);
                    // $username = $this->session->userdata('username')
                    ?><script>window.alert("Login Sukses!");</script><?php
                    // $instrument["instrument"]=$this->instruments->ViewInstrument();
                    $this->load->view('header_admin', $session_data);
                    $this->load->view('Dashboard', $this->instruments->View());
                    $this->load->view('footer');
                    }
            } 
            else {
                ?><script>window.alert("AdminName / Password salah!");</script><?php
                $this->load->view('Admin_Login', $data);
                }
            }
        }

        // Logout from admin page
        public function logout() {
            $sess_array = array(
            'admin_name' => '',
            'password' => ''
            );
        $this->session->unset_userdata($sess_array);
        session_destroy();
        // $data['message_display'] = 'Successfully Logout';
        ?><script>window.alert("Anda telah logout!");</script><?php
        //  $this->load->view('Customer_Login', $data);
        $this->load->view('Customer_Login');
        }

        public function AddAdminView(){
            if(isset($this->session->userdata['admin_name'])){

                $this->load->view('AddAdmin');
            }
            else{
            ?><script>window.alert("Anda Harus Login terlebih dahulu!");</script><?php
            $this->load->view('Admin_Login');
            }

        }

        public function Register(){

        $this->form_validation->set_rules('admin_name', 'Admin Name', 'trim|required|min_length[5]|max_length[10]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('contact', 'contact', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            ?><script> window.alert("Buat akun gagal, data yang anda input tidak memenuhi syarat!"); </script><?php
            $this->load->view('AddAdmin');
            } else {
                $data = array(
                'contact' => $this->input->post('contact'),
                'admin_name' => $this->input->post('admin_name'),
                'password' => $this->input->post('password')
                );
            $result = $this->admin_model->insert_registration_admin($data);
            if ($result == TRUE) {
                ?><script>window.alert("Terimakasih, Add Admin Berhasil!");</script><?php
                // $instrument["instrument"]=$this->instruments->ViewInstrument();
                $this->load->view('header_admin');
                $this->load->view('Dashboard', $this->instruments->View());
                $this->load->view('footer');
            } else {
                ?><script>window.alert("Nama Admin tersebut sudah ada, Add admin gagal!");</script><?php
                $this->load->view('AddAdmin', $data);
            }
            }
            
        }
         
            public function AddInstrumentView(){
                if(isset($this->session->userdata['admin_name'])){
                    $this->load->view('AddInstrument');
                }
                else{
                ?><script>window.alert("Anda Harus Login terlebih dahulu!");</script><?php
                $this->load->view('Admin_Login');
                }
            }

            public function View_Customer_Data(){
                if(isset($this->session->userdata['admin_name'])){
                    $this->load->view('header_admin');
					$this->load->view('AllCustomer', $this->customer_model->read_all_customer());
                }
                else{
                ?><script>window.alert("Anda Harus Login terlebih dahulu!");</script><?php
                $this->load->view('Admin_Login');
                }
            }

            public function Delete_User($id){
                if(isset($this->session->userdata['admin_name'])){
                    // $instrument["instrument"]=$this->instruments->ViewInstrument();
                    $this->customer_model->delete_customer($id);
                    $this->load->view('header_admin');
                    $this->load->view('AllCustomer', $this->customer_model->read_all_customer());
                }
                else{
                $this->load->view('Admin_Login');
                }
            }

            public function View_Instrument_Data(){
                if(isset($this->session->userdata['admin_name'])){
                    $this->load->view('header_admin');
					$this->load->view('AllInstrument', $this->instruments->View());
                }
                else{
                ?><script>window.alert("Anda Harus Login terlebih dahulu!");</script><?php
                $this->load->view('Admin_Login');
                }
            }

            public function Delete_Instrument($id_instrument){
                if(isset($this->session->userdata['admin_name'])){
                    // $instrument["instrument"]=$this->instruments->ViewInstrument();
                    $this->instruments->delete_instrument($id_instrument);
                    $this->load->view('header_admin');
                    $this->load->view('AllInstrument', $this->instruments->View());
                }
                else{
                $this->load->view('Admin_Login');
                }
            }
         

            public function Delete_Booking($id_instrument,$id_customer){
                if(isset($this->session->userdata['admin_name'])){
                    $this->booking_model->delete_booking($id_instrument, $id_customer);
                    $this->load->view('header_admin');
                    $this->load->view('AllBooking', $this->booking_model->view_booking());
                }
                else{
                $this->load->view('Admin_Login');
                }
            }

            public function Delete_Comment($id_comment, $id_instrument, $id_customer){
                if(isset($this->session->userdata['admin_name'])){
                    $this->comment_model->delete_comment($id_comment, $id_customer);
                    $this->load->view('header_admin');
                    $this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id_instrument));
                    $this->load->view('Comment', $this->comment_model->view_comment($id_instrument));
                    $this->load->view('footer');
                }
                else{
                    if(isset($this->session->userdata['username'])){
                        $this->comment_model->delete_comment($id_comment, $id_customer);
                        $this->load->view('header_customer');
                        $this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id_instrument));
                        $this->load->view('Comment', $this->comment_model->view_comment($id_instrument));
                        $this->load->view('footer');
                    }
                    else{
                        $this->load->view('Customer_Login');
                    }
                }
            }

            public function Status_Bayar($id_customer, $id_instrument, $status){
                if(isset($this->session->userdata['admin_name'])){
                    $this->booking_model->status_bayar($id_instrument, $id_customer, $status);
                    $this->load->view('header_admin');
                    $this->load->view('AllBooking', $this->booking_model->view_booking());
                }
                else{
                $this->load->view('Admin_Login');
                }
            }

            public function AddInstrument()
            {
                $this->form_validation->set_rules('brand', 'Brand', 'required');
                $this->form_validation->set_rules('type', 'Type', 'required');
                $this->form_validation->set_rules('color', 'Color', 'required');
                $this->form_validation->set_rules('price', 'Price', 'required');
                $this->form_validation->set_rules('instrument', 'Instrument', 'required');
                $this->form_validation->set_rules('description', 'Description', 'required');
                if ($this->form_validation->run() === FALSE){
                    ?><script> window.alert("Data tidak memenuhi syarat!"); </script><?php
                    $this->load->view('AddInstrument');
                }else{
        
                    $config['upload_path']          = './Image/';
                    $config['allowed_types']        = 'gif|jpg|png';
                    $config['max_size']             = 2048000;
                    $config['max_width']            = 768;
                    $config['max_height']           = 1024;
        
                    $this->load->library('upload', $config);
        
                    if ( ! $this->upload->do_upload('imagefile'))
                    {
                            // $error = array('error' => $this->upload->display_errors());
                            ?><script> window.alert("Image tidak memenuhi syarat!"); </script><?php
                            $this->load->view('AddInstrument');
                    }
                    else
                    {
                            // $data = array('upload_data' => $this->upload->data());
                            // $this->load->view('upload_success', $data);
                            $this->instruments->new_instrument($this->upload->data('file_name'),$this->input->post());
                            ?><script> window.alert("Add Instrument berhasil, Upload Sukses!"); </script><?php
                            // $instrument["instrument"]=$this->instruments->ViewInstrument();
                            // $this->load->view('data', $data);
                            $this->load->view('header_admin');
                            $this->load->view('Dashboard', $this->instruments->View());
                            $this->load->view('footer');
                    }
            }
        }

        public function Edit_Instrument_View($id_instrument){
            if(isset($this->session->userdata['admin_name'])){
                // $instrument["instrument"]=$this->instruments->ViewInstrument();
                $this->load->view('header_admin');
                $this->load->view('EditInstrument', $this->instruments->read_insturment_information($id_instrument));
            }
            else{
            $this->load->view('Admin_Login');
            }
        }

        public function EditInstrument($id_instrument){
            $this->form_validation->set_rules('brand', 'Brand', 'required');
            $this->form_validation->set_rules('type', 'Type', 'required');
            $this->form_validation->set_rules('color', 'Color', 'required');
            $this->form_validation->set_rules('price', 'Price', 'required');
            $this->form_validation->set_rules('instrument', 'Instrument', 'required');
            $this->form_validation->set_rules('description', 'Description', 'required');
            if ($this->form_validation->run() === FALSE){
                ?><script> window.alert("Data tidak memenuhi syarat!"); </script><?php
                $this->load->view('header_Admin');
                $this->load->view('EditInstrument', $this->instruments->read_insturment_information($id_instrument));
            }else{
    
                        // $data = array('upload_data' => $this->upload->data());
                        // $this->load->view('upload_success', $data);
                        $this->instruments->edit_instrument($id_instrument,$this->input->post());
                        ?><script> window.alert("Update Instrument berhasil, Upload Sukses!"); </script><?php
                        // $instrument["instrument"]=$this->instruments->ViewInstrument();
                        // $this->load->view('data', $data);
                        $this->load->view('header_admin');
                        $this->load->view('AllInstrument', $this->instruments->View());
                
        }
        }

    }

?>