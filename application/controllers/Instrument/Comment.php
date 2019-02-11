<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class comment extends CI_Controller {

//variable di models semua

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('customer_model');
        $this->load->model('instruments');
        $this->load->model('comment_model');
        }

        public function comment($id_instrument, $id_customer){
            date_default_timezone_set("Asia/Bangkok");       
            $date = date("Y-m-d H:i:s");
            $this->form_validation->set_rules('comment', 'Comment', 'trim|required|max_length[100]');
        
            if($id_customer==1){
                if ($this->form_validation->run() == FALSE) {
                    ?><script> window.alert("Komentar gagal diinput, melebihi batas max comment"); </script><?php
                        $this->load->view('header_admin');
                        $this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id_instrument));
                        $this->load->view('Comment', $this->comment_model->view_comment($id_instrument));
                        $this->load->view('footer');
                    } else {
                        $data = array(
                        'id_instrument' => $id_instrument,
                        'id_customer' => $id_customer,
                        'comment' => $this->input->post('comment'),
                        'date' => $date,
                        );
                        ?><script>window.alert("<?php echo $data; ?>");</script><?php
                    $result = $this->comment_model->insert_comment($data);
                    if ($result == TRUE) {
                        // $instrument["instrument"]=$this->instruments->ViewInstrument();
                        $this->load->view('header_admin');
                        $this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id_instrument));
                        $this->load->view('Comment', $this->comment_model->view_comment($id_instrument));
                        $this->load->view('footer');
                    } else {
                        ?><script>window.alert("Tidak dapat comment!");</script><?php
                        $this->load->view('header_admin');
                        $this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id_instrument));
                        $this->load->view('Comment', $this->comment_model->view_comment($id_instrument));
                        $this->load->view('footer');
                    }
                    }
            }
            else{
            if ($this->form_validation->run() == FALSE) {
                ?><script> window.alert("Komentar gagal diinput, melebihi batas max comment"); </script><?php
                    $this->load->view('header_customer');
                    $this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id_instrument));
                    $this->load->view('Comment', $this->comment_model->view_comment($id_instrument));
                    $this->load->view('footer');
                } else {
                    $data = array(
                    'id_instrument' => $id_instrument,
                    'id_customer' => $id_customer,
                    'comment' => $this->input->post('comment'),
                    'date' => $date,
                    );
                $result = $this->comment_model->insert_comment($data);
                if ($result == TRUE) {
                    // $instrument["instrument"]=$this->instruments->ViewInstrument();
                    $this->load->view('header_customer');
                    $this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id_instrument));
                    $this->load->view('Comment', $this->comment_model->view_comment($id_instrument));
                    $this->load->view('footer');
                } else {
                    ?><script>window.alert("Tidak dapat comment!");</script><?php
                    $this->load->view('header_customer');
                    $this->load->view('Instrument_Detail', $this->instruments->read_insturment_information($id_instrument));
                    $this->load->view('Comment', $this->comment_model->view_comment($id_instrument));
                    $this->load->view('footer');
                }
                }
                
            }
            }          

}


?>