<?php
include "header.php";
include "slider.php";
include "class/cartegory_class.php";
?>

<?php
$cartegory = new Cartegory_class();


if (!isset($_GET['cartegory_id']) || $_GET['cartegory_id'] == NULL) {
    echo "<script>window.location = 'cartegory_list.php'</script>";
} else {
    $cartegory_id = $_GET['cartegory_id'];
    $get_cartegory = $cartegory->get_cartegory($cartegory_id);
    if ($get_cartegory) {
        $result = $get_cartegory->fetch_assoc();
    } else {
        echo "<script>alert('Danh mục không tồn tại'); window.location = 'cartegory_list.php';</script>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cartegory_name = $_POST['cartegory_name'];
    $update_cartegory = $cartegory->update_cartegory($cartegory_id, $cartegory_name);
    if ($update_cartegory) {
        echo "<script>alert('Cập nhật thành công'); window.location = 'cartegory_list.php';</script>";
    } else {
        echo "<script>alert('Cập nhật thất bại');</script>";
    }
}
?>

<div class="admin_content_right">
    <div class="admin_content_right cartegory_add">
        <h1>Cập nhật danh mục</h1>
        <form action="" method="post">
            <input required name="cartegory_name" type="text" placeholder="Nhập tên danh mục" value="<?php echo isset($result['cartegory_name']) ? $result['cartegory_name'] : ''; ?>">
            <button type="submit">Cập nhật</button>
        </form>
    </div>
</div>

</section>
</body>
</html>
