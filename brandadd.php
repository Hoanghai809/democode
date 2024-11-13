<?php
include "header.php";
include "slider.php";
include "class/brand_class.php"; 

$brand = new Brand(); 

if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
    $cartegory_id = $_POST['cartegory_id'];
    $brand_name = $_POST['brand_name']; 

  
    $insert_brand = $brand->insert_brand($cartegory_id, $brand_name); 
}
?>

<div class="admin_content_right">
    <div class="admin_content_right brand_add">
        <h1>Thêm loại sản phẩm</h1>
        <form action="" method="post">
            <select name="cartegory_id" id="">
                <option value="#">Chọn danh mục</option>
                <?php
                $show_cartegory = $brand->show_cartegory(); 
                if ($show_cartegory){
                    while ($result = $show_cartegory->fetch_assoc()){
                ?>
                <option value="<?php echo $result['cartegory_id'] ?>"><?php echo $result['cartegory_name'] ?></option>
                <?php
                    }
                }
                ?>
            </select>
            <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm">
            <button type="submit">Thêm</button>
        </form>
    </div>
</div>

</section>
<style>
        
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f4f4f9;
    color: #333;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

header h1 {
    font-size: 24px;
    font-weight: normal;
    text-transform: uppercase;
}

.adnim_content {
    display: flex;
    margin: 20px;
}

.admin_content_left {
    width: 20%;
    background-color: #444;
    color: #fff;
    padding: 20px;
    border-radius: 8px;
}

.admin_content_left ul {
    list-style-type: none;
}

.admin_content_left ul li {
    padding: 10px 0;
}

.admin_content_left ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
}

.admin_content_left ul li ul {
    margin-top: 10px;
}

.admin_content_left ul li ul li {
    padding-left: 20px;
}

.admin_content_left ul li ul li a {
    font-size: 14px;
    font-weight: normal;
}

.admin_content_left ul li a:hover {
    color: #ffa500;
}

.admin_content_right {
    width: 75%;
    margin-left: 20px;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.admin_content_right h1 {
    font-size: 20px;
    color: #333;
    margin-bottom: 20px;
}

.admin_content_right form {
    display: flex;
    gap: 10px;
}

.admin_content_right input[type="text"] {
    width: 70%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.admin_content_right button {
    padding: 10px 20px;
    border: none;
    background-color: #333;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.admin_content_right button:hover {
    background-color: #ffa500;
}

</style>
</body>
</html>