<?php
include 'config.php'; // memanggil file koneksi
  
// ambil data dari form pelanggan
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $decs = $_POST['decs'];

    // query mysql untuk menyimpan ke database
    $sql = "INSERT INTO produk (id, product_name, product_price, product_image, decs) VALUES ('$id','$product_name','$product_price','$product_image','$decs')";
    $query = mysqli_query($conn, $sql);

    // cek jika proses simpan ke database berhasil
    if ($query) {
        header('Location: admin.php');
    } else{
        header('Location: simpan.php?status=gagal');
    }
}
?>