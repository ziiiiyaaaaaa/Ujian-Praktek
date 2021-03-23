<?php
include 'config.php';

if(isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $product_name   = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image    = $_POST['product_image'];

    $sql = "UPDATE produk SET product_name='$product_name', product_price='$product_price', product_image='$product_image' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: admin.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}
?>