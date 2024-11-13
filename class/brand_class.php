<?php
include "database.php";

class Brand {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insert_brand($cartegory_id, $brand_name) {
        $query = "INSERT INTO tbl_brand (cartegory_id, brand_name) VALUES ('$cartegory_id', '$brand_name')";
        
        $insert_row = $this->db->insert($query);
        return $insert_row;
    }
    public function show_cartegory(){

        $query = "SELECT * FROM tbl_cartegory ORDER BY cartegory_id DESC";
        $result = $this ->db->select($query);
        return $result;
    }
    public function get_cartegory($cartegory_id){

        $query = "SELECT * FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
        $result = $this ->db->select($query);
        return $result;
    }
    public function update_cartegory($cartegory_id, $cartegory_name){
   
        $query = "UPDATE tbl_cartegory SET cartegory_name = '$cartegory_name' WHERE cartegory_id = '$cartegory_id'";
        $update_row = $this->db->update($query); 
        return $update_row;
    }
    public function delete_cartegory($cartegory_id){
        
        $query = "DELETE FROM tbl_cartegory WHERE cartegory_id = '$cartegory_id'";
        $delete_row = $this->db->delete($query); 
        return $delete_row; 
    }
   
    
    public function show_brand() {
        $query = "SELECT tbl_brand.*, tbl_cartegory.cartegory_name 
                  FROM tbl_brand 
                  INNER JOIN tbl_cartegory ON tbl_brand.cartegory_id = tbl_cartegory.cartegory_id";
        $result = $this->db->select($query);
        return $result;
    }
    
    public function get_brand_by_id($brand_id) {
        $query = "SELECT * FROM tbl_brand WHERE brand_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $brand_id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }
    public function update_brand($brand_id, $cartegory_id, $brand_name) {
        $query = "UPDATE tbl_brand SET cartegory_id = ?, brand_name = ? WHERE brand_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("isi", $cartegory_id, $brand_name, $brand_id);
        return $stmt->execute(); 
    }
    public function delete_brand($brand_id) {
        $query = "DELETE FROM tbl_brand WHERE brand_id = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param("i", $brand_id);
        $stmt->execute();
        
        return $stmt->affected_rows > 0; 
    }
}    
    

?>
