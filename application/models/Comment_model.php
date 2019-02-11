<?php
class comment_model extends CI_Model{

    function __construct(){
        $this->load->database();
    }

    public function insert_comment($data) {
        $condition = "id_instrument =" . "'" . $data['id_instrument'] . "'";
        // echo $condition;
        $this->db->select('*');
        $this->db->from('instrument');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
            if ($query->num_rows() > 0) {    
        // Query to insert data in database
            $this->db->insert('comment', $data);
        if ($this->db->affected_rows() > 0) {
        return true;
        }
        } else {
        return false;
        }
        }
    
        public function view_comment($id_instrument){
            $query = $this->db->query("SELECT * FROM comment AS m,(SELECT * FROM customer)AS c,(SELECT * FROM instrument)AS i WHERE $id_instrument = m.id_instrument AND m.id_instrument = i.id_instrument AND c.customer_id = m.id_customer ORDER BY date DESC;");
            $comment["comment"] = $query->custom_result_object('comment_model');
            if ($query->num_rows() > 0) { 
                return $comment;
            }
            else{
                return $comment;
            }
    
        }

        public function delete_comment($id_comment, $id_customer) {
            $this->db->where('id_comment', $id_comment);
            $this->db->where('id_customer', $id_customer);
            $this->db->delete('comment');    
            
        }

}


?>