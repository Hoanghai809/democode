<?php
include "header.php";   
include "slider.php";   
include "class/brand_class.php";  

$brand = new Brand();

$show_brand = $brand->show_brand();
?>

<div class="admin_content_right">
    <div class="admin_content_right brand_list">
        <h1>Danh sách loại sản phẩm</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th> danh mục</th>
                <th>Tên loại sản phẩm</th>
                <th>Tùy biến</th>
            </tr>
            <?php
            if ($show_brand) {
                $i = 0;
                while ($result = $show_brand->fetch_assoc()) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $result['brand_id']; ?></td>
                <td><?php echo $result['cartegory_name']; ?></td>
                <td><?php echo $result['brand_name']; ?></td>
                <td>
                    <a href="brandedit.php?brand_id=<?php echo $result['brand_id']; ?>">Sửa</a> |
                    <a href="branddelete.php?brand_id=<?php echo $result['brand_id']; ?>">Xóa</a>
                </td>
            </tr>
            <?php
                }
            }
            ?>
        </table>
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
    font-size: 16px;
    line-height: 1.6;
    margin: 0;
}

header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
    font-size: 24px;
}

header h1 {
    text-transform: uppercase;
    font-weight: normal;
}

.admin_content {
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
    font-size: 24px;
    color: #333;
    margin-bottom: 20px;
    text-align: left;
}

.admin_content_right table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.admin_content_right table th,
.admin_content_right table td {
    padding: 12px;
    border: 1px solid #ccc;
    text-align: center;
}

.admin_content_right table th {
    background-color: #333;
    color: #fff;
    font-weight: bold;
}

.admin_content_right table tr:nth-child(even) {
    background-color: #f9f9f9;
}

.admin_content_right table tr:hover {
    background-color: #f0f0f0;
}

.admin_content_right table td a {
    color: #007bff;
    text-decoration: none;
    padding: 5px 10px;
    border-radius: 4px;
    background-color: #f8f9fa;
    transition: background-color 0.3s ease;
}

.admin_content_right table td a:hover {
    color: #ff6347;
    background-color: #e9ecef;
}

.admin_content_right table td a:active {
    background-color: #007bff;
    color: #fff;
}

.admin_content_right .brand_add form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 20px;
}

.admin_content_right .brand_add form select,
.admin_content_right .brand_add form input[type="text"] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    box-sizing: border-box;
}

.admin_content_right .brand_add form button {
    padding: 12px 20px;
    border: none;
    background-color: #333;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s;
}

.admin_content_right .brand_add form button:hover {
    background-color: #ffa500;
}

.admin_content_right .brand_list table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.admin_content_right .brand_list table th, 
.admin_content_right .brand_list table td {
    padding: 12px;
    border: 1px solid #ddd;
}

.admin_content_right .brand_list table th {
    background-color: #333;
    color: #fff;
}

.admin_content_right .brand_list table tr:nth-child(even) {
    background-color: #fafafa;
}

.admin_content_right .brand_list table tr:hover {
    background-color: #f4f4f4;
}

.admin_content_right .brand_list table td a {
    color: #007bff;
    text-decoration: none;
    padding: 5px 10px;
    background-color: #f8f9fa;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.admin_content_right .brand_list table td a:hover {
    background-color: #e9ecef;
    color: #ff6347;
}

</style>
</body>
</html>
