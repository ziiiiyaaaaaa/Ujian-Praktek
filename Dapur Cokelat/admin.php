<?php
include 'config.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

  <title>Admin</title>
  <style>
    body {
      background-color: #BDC581;
    }

    .container {
      text-align: center;
      display: flex;
      justify-content: center;
    }

    .nav {
      position: fixed;
    }

    .navbar-brand {
      display: flex;
    }

    .collapse {
      display: flex;
      position: absolute;
      right: 0;
      padding-right: 50px;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
  }

    .nav-link {
      margin: 20px;
      color: black;
    }

    .nav-item a:hover {
      color: rgb(255, 252, 83);
    }

    .nav-item a:active {
      color: rgb(255, 147, 6);
    }

    table {
      width: 100%;
      background-color: #18dcff;
    }

    table tr th {
      background-color: #7158e2;
      height: 50px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://dc.dapurcokelat.com/assets/Logo_Web_480.png" alt="">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="dashboard.php">DASHBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.html">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="admin.php">ADMIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">LOG OUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <hr>
  <div class="container">
    <div class="container-fluid">
      <div class="alert alert-primary d-flex justify-content-center" role="alert" id="message"
        style="justify-content:space-between;">
        <a href="input.html"><button class="btn btn-success btn-lg center-block">Input Produk</button></a>
      </div>
      <table>
        <tr>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Product Image</th>
          <th>Action</th>
        </tr>
        </>
        <?php
        // query untuk menampilkan Data
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($conn, $sql);

        // ambil semua data dari table peserta
        while($row = mysqli_fetch_array($query)){
            echo "<tr>";
            // menampilkan data peserta pada tabel
            echo "<td>".$row['product_name']."</td>";
            echo "<td>".$row['product_price']."</td>";
            echo "<td><img src=".$row['product_image']." width='105px' height='100px'></td>";
            echo "<td>";
            echo "<a href='formupdate.php?id=".$row['id']."'>Update</a>  | ";
            echo "<a href='hapus.php?id=".$row['id']."'>Hapus</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>