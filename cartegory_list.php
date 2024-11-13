<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>

<?php
$cartegory = new Cartegory_class();
$show_cartegory = $cartegory->show_cartegory();
?>

<div class="admin_content_right">
    <div class="admin_content_right cartegory_list">
        <h1>Danh sách danh mục</h1>
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Danh mục</th>
                <th>Tùy biến</th>
            </tr>
            <?php
            if ($show_cartegory) {
                $i = 0;
                while ($result = $show_cartegory->fetch_assoc()) {
                    $i++;
            ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $result['cartegory_id'] ?></td>
                <td><?php echo $result['cartegory_name'] ?></td>
                <td><a href="cartegoryedit.php?cartegory_id=<?php echo $result['cartegory_id']; ?>">Sửa</a> | 
                <a href="cartegorydelete.php?cartegory_id=<?php echo $result['cartegory_id']; ?>">Xóa</a></td>
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

.admin_content_right table {
    width: 100%;
    border-collapse: collapse;
}

.admin_content_right table th, .admin_content_right table td {
    padding: 10px;
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

.admin_content_right table a {
    color: #007bff;
    text-decoration: none;
}

.admin_content_right table a:hover {
    color: #ff6347;
}

.admin_content_right table td a {
    margin: 0 10px;
}

</style>
</body>
</html>