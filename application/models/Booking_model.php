<?php
class booking_model extends CI_Model{

    public $fk_customer_id;
    public $fk_instrument_id;
    public $pieces;
    public $date;
    public $status;

    function __construct(){
        $this->load->database();
    }
   
   
    public function insert_booking($data) {
        $today = date('Y-m-d');
        // Query to check whether username already exist or not
        $condition = "id_instrument =" . "'" . $data['fk_instruments_id'] . "'";
        // echo $condition;
        $this->db->select('*');
        $this->db->from('instrument');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
            if ($query->num_rows() > 0) {    
        // Query to insert data in database
            $this->db->insert('booking', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        } else {
        return false;
        }
        }

    public function view_booking(){
        $query = $this->db->query("SELECT * FROM booking AS b,(SELECT * FROM customer)AS c,(SELECT * FROM instrument)AS i WHERE i.id_instrument = b.fk_instruments_id AND c.customer_id = b.fk_customer_id");
        $booking["booking"] = $query->custom_result_object('booking_model');
        if ($query->num_rows() > 0) { 
            return $booking;
        }
        else{
            echo "tidak ada data";
        }

    }

    public function view_booking_customer($id){
        $query = $this->db->query("SELECT * FROM booking AS b,(SELECT * FROM customer)AS c,(SELECT * FROM instrument)AS i WHERE i.id_instrument = b.fk_instruments_id AND c.customer_id = b.fk_customer_id AND b.fk_customer_id = '$id' ");
        $booking["booking"] = $query->custom_result_object('booking_model');
        if ($query->num_rows() > 0) { 
            return $booking;
        }
        else{
            echo "tidak ada data";
        }

    }

    public function delete_booking($id_instrument, $id_customer) {
        $this->db->where('fk_customer_id', $id_customer);
        $this->db->where('fk_instruments_id', $id_instrument);
        $this->db->delete('booking');    
        
    }

    public function status_bayar($id_customer, $id_instrument, $status){
        $this->db->set('status', $status, FALSE);
        $this->db->where('fk_customer_id', $id_customer);
        $this->db->where('fk_instruments_id', $id_instrument);
        $this->db->update('booking');
        }
    
    

}