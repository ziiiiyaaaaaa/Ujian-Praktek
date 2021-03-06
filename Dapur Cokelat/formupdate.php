<?php
include 'config.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Roboto -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <title>Update Product</title>
    <style>

      body{
        margin: 0;
        padding: 0;
      }
      body {
        font-family: 'Roboto', sans-serif;
      }
      #msform {
      width: 500px;
      margin: 100px auto;
      text-align: center;
      position: relative;
      }
 
      #msform fieldset {
      background:#ffb8b8;
      border: 1px solid black;
      border-radius: 3px;
      
      padding: 20px 30px;
      box-sizing: border-box;
      width: 80%;
      margin: 0 10%;
      position: absolute;
      }

      #msform input, #msform textarea {
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
      width: 100%;
      box-sizing: border-box;
      color: #2C3E50;
      font-size: 13px;
      }
 
      #msform .action-button {
      width: 100px;
      background: #27AE60;
      font-weight: bold;
      color: white;
      border: 0 none;
      border-radius: 1px;
      cursor: pointer;
      padding: 10px 5px;
      margin: 10px 5px;
      }
      
      #msform .action-button:hover, #msform .action-button:focus {
      box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
      }
      
      .fs-title {
      font-size: 24px;
      text-transform: uppercase;
      color: #2C3E50;
      margin-bottom: 10px;
      }
      
      .fs-subtitle {
      font-weight: normal;
      font-size: 13px;
      color: #666;
      margin-bottom: 20px;
      }
      .btn{
        width: 100%;
        font-size: 12px;
        margin-bottom: 10px;
      }
      .btn a{
        text-decoration: none;
        color: black;
      }
    </style>
  </head>
  <body>
    <form action="update.php" method="POST" id="msform">
      <!-- fieldsets -->
      <fieldset>
        <h1 class="fs-title">Form Update</h1>
        <input type="hidden" name="id" value="<?php echo $row['id']?>">
        <p><label>Product Name<input type="text" name="product_name" value="<?php echo $row['product_name']?>"></label></p>
        <p><label>Product Price<input type="text" name="product_price" value="<?php echo $row['product_price']?>"></label></p>
        <p><label>Product Image<input type="url" name="product_image" value="<?php echo $row['product_image']?>"></label></p>
        <p><label>Deskripsi<input type="text" name="decs" value="<?php echo $row['decs']?>"></label></p>
        <button class="btn btn-success" type="submit" name="simpan" value="simpan">Simpan</button>
        <button class="btn btn-light" type="reset" name="cancel" value="cancel"><a href="admin.php">Cancel</a></button>
      </fieldset>
  </form>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>