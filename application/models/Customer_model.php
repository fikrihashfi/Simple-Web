<?php
class customer_model extends CI_Model{

    private $customer_id;
    private $username;
    private $password;
    private $contact_no;
    public $firstname;
    public $lastname;
    public $customer_email;
    public $address;
    public $gender;
    
    public function set_username($username){
        $this->username=$username;
    }
    public function set_password($password){
        $this->password=$password;
    }
    public function set_contact_no($contact_no){
        $this->contact_no=$contact_no;
    }
    public function get_customer_id(){
        return $this->customer_id;
    }
    public function get_username(){
        return $this->username;
    }
    public function get_password(){
        return $this->password;
    }
    public function get_contact_no(){
        return $this->contact_no;
    }


    function __construct(){
        $this->load->database();
    }

    public function insert_registration($data) {

        // Query to check whether username already exist or not
        $condition = "username =" . "'" . $data['username'] . "'";
        $this->db->select('*');
        $this->db->from('customer');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
            if ($query->num_rows() == 0) {      
        // Query to insert data in database
            $this->db->insert('customer', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        } else {
        return false;
        }
        }

        public function login($data) {
        
            $condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
            $this->db->select('*');
            $this->db->from('customer');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            
            if ($query->num_rows() == 1) {
            return true;
            } else {
            return false;
            }
            }
        
        
        public function read_user_information($username) {
        
            $condition = "username =" . "'" . $username . "'";
            $this->db->select('*');
            $this->db->from('customer');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            // $customer['customer'] = $query->custom_result_object('customer_model');		     
            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
            return false;
            }
        }

        public function read_all_customer() {
    
            $this->db->select('*');
            $this->db->from('customer');
            $query = $this->db->get();
            $customer['customer'] = $query->custom_result_object('customer_model');		     
            if ($query->num_rows() > 0) {
                return $customer;
            } else {
            return false;
        }
        }

        public function delete_customer($id) {
            $this->db->where('customer_id', $id);
            $this->db->delete('customer');    
            
        }

        public function user_information($id) {
        
            $condition = "customer_id =" . "'" . $id . "'";
            $this->db->select('*');
            $this->db->from('customer');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            $customer['customer'] = $query->custom_result_object('customer_model');		     
            if ($query->num_rows() == 1) {
                return $customer;
            } else {
            return false;
            }
        }

        public function update_profil($id, $data){
        $this->db->where('customer_id', $id);
        $this->db->update('customer', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
            } else {
            return false;
            }
        }


}