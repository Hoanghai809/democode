<?php
include "header.php";
include "slider.php";
include "class/product_class.php";
?>
<?php
$product = new Product(); 

if($_SERVER['REQUEST_METHOD'] === 'POST'){ 
    //var_dump($_POST,$_FILES);
    //echo '<pre>';
    //echo print($_POST);
    //echo '<pre>';
    

  
    $insert_product = $product->insert_product($_POST, $_FILES); 
}
?>

<div class="admin_content_right">
            <div class="admin_content_right product_add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span></label>
                    <input required name="product_name" type="text" placeholder="Nhập">
                    <label for="">Chọn danh mục <span style="color: red;">*</span></label>
                    <select name="cartegory_id" id="">
                    <option value="">--Chọn-- </option>
                    
                        <?php 
                        $show_cartegory = $product->show_cartegory();
                        if ($show_cartegory){
                            while($result = $show_cartegory->fetch_assoc()){
                        ?>
                        <option value="<?php echo $result['cartegory_id']?>"><?php echo $result['cartegory_name']?></option>
                        <?php
                        }
                        }
                        ?>
                    </select>
                    <label for="">Chọn loại sản phẩm <span style="color: red;">*</span></label>
                    <select name="brand_id" id="">
                    <option value="">--Chọn-- </option>
                    <?php 
                        $show_brand = $product->show_brand();
                        if ($show_brand){
                            while($result = $show_brand->fetch_assoc()){                          
                        ?>
                        <option value="<?php echo $result['brand_id']?>"><?php echo $result['brand_name']?></option>
                        <?php
                        }
                        }
                        ?>
                    </select>
                    <label for="">Giá sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_price" required type="text" placeholder="giá">
                    <label for="">Giá khuyến mãi <span style="color: red;">*</span></label>
                    <input name="product_sale" required type="text" placeholder="giá">
                    <label for="">Mô tả sản phẩm <span style="color: red;">*</span></label>
                    <textarea required name="product_desc" id="" cols="30" rows="10" placeholder="Mô tả"></textarea>
                    <label for="">Ảnh sản phẩm <span style="color: red;">*</span></label>
                    <input name="product_img" required type="file">
                    <label for="">Ảnh mô tả <span style="color: red;">*</span></label>
                    <input name="product_img_desc[]" required multiple type="file">
                    <button type="submit">Thêm sản phẩm</button>
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

h1 {
    font-size: 24px;
    margin-bottom: 20px;
}

.adnim_content {
    display: flex;
    padding: 20px;
    gap: 20px;
}

.admin_content_left {
    width: 25%;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.admin_content_left ul {
    list-style-type: none;
}

.admin_content_left ul li {
    margin-bottom: 10px;
}

.admin_content_left ul li a {
    color: #333;
    text-decoration: none;
    font-weight: bold;
    display: block;
    padding: 8px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.admin_content_left ul li a:hover {
    background-color: #ffa500;
    color: #fff;
}

.admin_content_left ul ul {
    margin-top: 10px;
    padding-left: 15px;
}

.admin_content_left ul ul li a {
    font-weight: normal;
}

.admin_content_right {
    width: 75%;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
}

.admin_content_right h1 {
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
}

.admin_content_right form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 20px;
}

.admin_content_right form input[type="text"],
.admin_content_right form select,
.admin_content_right form textarea,
.admin_content_right form input[type="file"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.admin_content_right form textarea {
    resize: vertical;
}

.admin_content_right form button {
    padding: 12px 20px;
    border: none;
    background-color: #333;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.admin_content_right form button:hover {
    background-color: #ffa500;
}

</style>
</body>
</html>