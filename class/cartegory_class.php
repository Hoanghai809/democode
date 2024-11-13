<?php
include "database.php";

class Cartegory_class {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function insert_cartegory($category_name) { 
        
        $query = "INSERT INTO tbl_cartegory (cartegory_name) VALUES ('$category_name')"; 
        $result = $this->db->insert($query);
        return $result;
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
    
}
?>
