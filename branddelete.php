<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";  

if (isset($_GET['brand_id'])) {
    $brand_id = $_GET['brand_id'];
    $brand = new Brand();
    
    $delete_status = $brand->delete_brand($brand_id);
    
    if ($delete_status) {
        header('Location: brand_list.php');
        exit();
    } else {
        $error_message = "Có lỗi xảy ra khi xóa thương hiệu!";
    }
} else {
    header('Location: brand_list.php');
    exit();
}
?>

<div class="admin_content_right">
    <div class="admin_content_right brand_delete">
        <h1>Xóa Thương Hiệu</h1>
        <?php
        if (isset($error_message)) {
            echo "<p style='color: red;'>$error_message</p>";
        } else {
            echo "<p style='color: green;'>Thương hiệu đã được xóa thành công!</p>";
        }
        ?>
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

    .admin_content_right .error_message {
        color: red;
    }
</style>

</body>
</html>
