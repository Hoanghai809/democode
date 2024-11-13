<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";  

if (isset($_GET['brand_id'])) {
    $brand_id = $_GET['brand_id'];
    $brand = new Brand();
    
    $brand_data = $brand->get_brand_by_id($brand_id);
    
    if (!$brand_data) {
        header('Location: brand_list.php');
        exit();
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cartegory_id = $_POST['cartegory_id'];
        $brand_name = $_POST['brand_name'];
        
        if ($cartegory_id == '#') {
            $error_message = "Vui lòng chọn danh mục hợp lệ!";
        } else {
            $update_status = $brand->update_brand($brand_id, $cartegory_id, $brand_name);
            
            if ($update_status) {
                header('Location: brand_list.php');
                exit();
            } else {
                $error_message = "Có lỗi xảy ra khi cập nhật thương hiệu!";
            }
        }
    }
} else {
    header('Location: brand_list.php');
    exit();
}
?>

<div class="admin_content_right">
    <div class="admin_content_right brand_edit">
        <h1>Sửa Thương Hiệu</h1>
        <?php
        if (isset($error_message)) {
            echo "<p style='color: red;'>$error_message</p>";
        }
        ?>
        <form action="" method="post">
            <label for="cartegory_id">Chọn danh mục</label>
            <select name="cartegory_id" id="cartegory_id">
                <option value="#">Chọn danh mục</option>
                <?php
                $show_cartegory = $brand->show_cartegory(); 
                if ($show_cartegory) {
                    while ($result = $show_cartegory->fetch_assoc()) {
                        $selected = ($result['cartegory_id'] == $brand_data['cartegory_id']) ? 'selected' : '';
                        echo "<option value='{$result['cartegory_id']}' $selected>{$result['cartegory_name']}</option>";
                    }
                }
                ?>
            </select>
            
            <label for="brand_name">Tên loại sản phẩm</label>
            <input required name="brand_name" type="text" placeholder="Nhập tên loại sản phẩm" value="<?php echo $brand_data['brand_name']; ?>">
            
            <button type="submit">Cập nhật</button>
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

    .admin_content_right {
        width: 75%;
        margin-left: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .admin_content_right h1 {
        font-size: 24px;
        color: #333;
        margin-bottom: 20px;
        text-align: left;
    }

    .admin_content_right form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-top: 20px;
    }

    .admin_content_right form select,
    .admin_content_right form input[type="text"] {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box;
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
