<?php
class admin_model extends CI_Model{

    public $id;
    private $adminname;
    private $password;
    

    function __construct(){
        $this->load->database();
    }

    public function get_username(){
        return $this->username;
    }

    public function set_adminname($adminname){
        $this->username = $adminname;
    }

    public function get_password(){
        return $this->password;
    }

    public function set_password($pass){
        $this->password = $pass;
    }

    public function insert_registration_admin($data) {

        // Query to check whether username already exist or not
        $condition = "admin_name =" . "'" . $data['admin_name'] . "'";
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
            if ($query->num_rows() == 0) {
        
        // Query to insert data in database
            $this->db->insert('admin', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        } else {
        return false;
        }
        }
    
        public function adminlogin($data) {
        
            $condition = "admin_name =" . "'" . $data['admin_name'] . "' AND " . "password =" . "'" . $data['password'] . "'";
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            // $user = $query->result(); 
            // $this->set_username($user->username);
            if ($query->num_rows() == 1) {
              ?><!--<script>window.alert(get_username($user->username));</script>--><?php
            return true;
            } else {
            return false;
            }
            }

    
        public function read_admin_information($admin_name) {
        
            $condition = "admin_name =" . "'" . $admin_name . "'";
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            
            if ($query->num_rows() == 1) {
            return $query->result();
            } else {
            return false;
            }
            }
    

}