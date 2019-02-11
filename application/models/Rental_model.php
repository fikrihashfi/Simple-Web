<?php
class rental_model extends CI_Model{

    public $id_instrument;
    public $brand;
    public $type;
    public $color;
 

            public function __construct(){
                parent::__construct();
                if($this->id_instrument == "15"){
                 $this->brand = "bisa coy";
                
                }
            }

            public function view_rental(){
                $query = $this->db->query("SELECT * FROM booking AS b,(SELECT * FROM customer)AS c,(SELECT * FROM instrument)AS i WHERE i.id_instrument = b.fk_instruments_id AND c.customer_id = b.fk_customer_id AND b.status= '1'");
                $rental["rental"] = $query->custom_result_object('rental_model');
                if ($query->num_rows() > 0) { 
                    return $rental;
                }
                else{
                    echo "tidak ada data";
                }
        
            }

            public function view_rental_customer($id){
                $query = $this->db->query("SELECT * FROM booking AS b,(SELECT * FROM customer)AS c,(SELECT * FROM instrument)AS i WHERE i.id_instrument = b.fk_instruments_id AND c.customer_id = b.fk_customer_id AND b.status= '1' AND b.fk_customer_id = '$id'");
                $rental["rental"] = $query->custom_result_object('rental_model');
                if ($query->num_rows() > 0) { 
                    return $rental;
                }
                else{
                    echo "tidak ada data";
                }
        
            }
           

}