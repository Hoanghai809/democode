<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php"; 

if (!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL) {
    echo "<script>window.location = 'cartegory_list.php'</script>"; 
} else {
  
    $cartegory_id = $_GET['cartegory_id'];
}

$cartegory = new Cartegory_class();

$delete_cartegory = $cartegory->delete_cartegory($cartegory_id);

if ($delete_cartegory) {
    echo "<script>alert('Xóa danh mục thành công!'); window.location = 'cartegory_list.php';</script>";
} else {
    echo "<script>alert('Có lỗi xảy ra khi xóa danh mục!'); window.location = 'cartegory_list.php';</script>";
}

?>
