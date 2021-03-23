<?php
include 'config.php';
if (isset($_GET['id'])) {
    header('Location: admin.php');
}
$id = $_GET['id']; 

$sql    = "DELETE FROM produk WHERE id='$id'";
$query  = mysqli_query($conn, $sql);

if ($query) {
    header('Location: admin.php');

}else {
    header('Location: hapus.php?status=gagal');
}
?>