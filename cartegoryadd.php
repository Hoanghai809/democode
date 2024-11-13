<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php"
?>

<?php
$cartegory = new Cartegory_class();
if($_SERVER['REQUEST_METHOD']==='POST'){
    $cartegory_name = $_POST['cartegory_name'];
    $insert_cartegory = $cartegory->insert_cartegory($cartegory_name);
}
?>

<div class="admin_content_right">
            <div class="admin_content_right cartegory_add">
                <h1>Thêm danh mục</h1>
                <form action="" method="post">
                    <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục">
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