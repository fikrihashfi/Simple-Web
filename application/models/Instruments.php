<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class instruments extends CI_Model{

    public $id_instrument;
    public $brand;
    public $type;
    public $color;
    public $price;
    public $instrument;
    public $description;
    public $picture;
    
    // public function set_brand($brand){
    //     $this->brand=$brand;
    // }

    function __construct(){
        parent::__construct();
        $this->load->database();
        // $this->load->model('instruments_data');
        // $this->brand="coba";
    }

    public function read_insturment_information($id_instrument) {
        
        $condition = "id_instrument =" . "'" . $id_instrument . "'";
        $this->db->select('*');
        $this->db->from('instrument');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
        $instrument['instrument'] = $query->custom_result_object('instruments');		
        return $instrument;
        }
        return false;
        }
        

    // public function ViewInstrument() {

    //     // $condition = "admin_name =" . "'" . $admin_name . "'";
    //     $this->db->select('*');
    //     $this->db->from('instrument');
    //     // $this->db->where($condition);
    //     // $this->db->limit(1);
    //     $query = $this->db->get();
        
    //     if ($query->num_rows() > 0) {
    //         // echo "<table><tr><th>Username</th><th>Password</th></tr>";
    //         // output data of each row
    //         foreach ($query->result() as $row)
    //         {
    //           $data[] = $row;
    //         }
    //         return $data;
    //             }
    //          else {
    //             echo "0 results";
    //         }
    //     }

    	public function View() {

            $this->db->select('*');
            $this->db->from('instrument');
            $query = $this->db->get();
            $instrument['instrument'] = $query->custom_result_object('instruments');		
            return $instrument;
            }

    public function new_instrument($path,$post){ 
        $data = array( 
        'brand' => $post['brand'], 
        'type' => $post['type'], 
        'color' => $post['color'], 
        'price' => $post['price'], 
        'instrument' => $post['instrument'],
        'description' => $post['description'],  
        'picture'=>$path 
        ); 
        
        return $this->db->insert('instrument', $data); 
        }

    function search($keyword)
        {
            $this->db->like('instrument',$keyword);
            $query  =   $this->db->get('instrument');
            return $query->result();
        }

    public function delete_instrument($id) {
            $this->db->where('id_instrument', $id);
            $this->db->delete('instrument');    
            
        }
    
    public function edit_instrument($id,$post){
        $data = array( 
            'brand' => $post['brand'], 
            'type' => $post['type'], 
            'color' => $post['color'], 
            'price' => $post['price'], 
            'instrument' => $post['instrument'],
            'description' => $post['description'],  
            ); 
        $this->db->where('id_instrument', $id);
        $this->db->update('instrument', $data);

    }


}