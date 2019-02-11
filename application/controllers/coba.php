<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class coba extends CI_Controller {

    public function __construct(){
        parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('database');
        $this->load->model('instruments');
        $this->load->model('coba_model');
        $model = new coba_model(); 
	}

	public function ViewInstrument() {
        
        // $db = new mysqli( 'localhost', 'root', '', 'rental' );
        // $result = $db->query( 'SELECT id_instrument, brand, type FROM instrument' );
        $this->db->select('*');
        $this->db->from('instrument');
        // $this->db->where($condition);
        // $this->db->limit(1);
        $query = $this->db->get();
        $rows["coba"] = $query->custom_result_object('coba_model');
        // while($object = $result->fetch_object( 'coba_model' )){

        //     foreach($rows as $object){
        // echo $object->id_instrument;
        //     ?></br><?php
        // echo $object->brand;
        // }
        
        $this->load->view('percobaan', $rows);

         }

}
?>