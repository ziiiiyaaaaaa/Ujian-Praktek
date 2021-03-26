<?php
include 'config.php'; // memanggil file koneksi
  
// ambil data dari form pelanggan
if(isset($_POST['register'])){
    $id = $_POST['id'];
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $name = $_POST['name'];

    // query mysql untuk menyimpan ke database
    $sql = "INSERT INTO admin (id, username, password, name) VALUES ('$id','$username','$pass','$username')";
    $query = mysqli_query($conn, $sql);

    // cek jika proses simpan ke database berhasil
    if ($query) {
        header('Location: login.php');
    } else{
        header('Location: register.php?status=gagal');
    }
}
?>