<?php 
 include('config.php');
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

    <!-- Custom styles for this template-->
    <link href="asset-/css/sb-admin-2.min.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>
<style>
    body {
        background-color: #BDC581;
    }

    nav {
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

    a button {
        position: absolute;
        right: 0;
        margin-right: 110px;
        width: 1190px;
        margin-left: 120px;
    }

    .admin div button a {
        text-decoration: none;
        color: white;
    }

    .admin {
        width: 1190px;
        margin-left: 50px;
        background-color: #fff9e8;
    }
</style>

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
    <!--Hero Image-->
    <section id="hero">
        <div class="container">
            <!--Slide-->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" width="100%">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://dc.dapurcokelat.com/assets/uploads/thumbs/992D344D-4837-46AB-9A99-391157BE4A90_1360.jpeg"
                            class="d-block w-100" alt="..." >
                    </div>
                    <div class="carousel-item">
                        <img src="https://dc.dapurcokelat.com/assets/uploads/thumbs/web3_1360.jpg" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://dc.dapurcokelat.com/assets/uploads/thumbs/web2_1360.jpg" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
            </div>
            <!--Tutup Slide-->
            <!--Tutup Hero Image-->
            <br>
            <br>

           <div class="row">
            <div class="col-11">
                <div class="row">

                    <?php
  			include 'config.php';
  			$stmt = $conn->prepare('SELECT * FROM produk');
  			$stmt->execute();
  			$result = $stmt->get_result();
  			while ($row = $result->fetch_assoc()):
  		?>
                    <div class="col-md-3">
                        <form action="" class="form-submit" style="margin-left:50px;">
                            <div class="card shadow mb-4">
                                <div class="card-header px-4 d-inline-flex">
                                    <div class="row">
                                        <h6 class="mr-4 font-weight-bold text-dark ">
                                            <?= $row['product_name'] ?></h6>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <small class="mr-0 "></small>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <img class="img-fluid" src="<?= $row['product_image'] ?>" alt=""
                                        id="gambar1"style="width:100%; height:150px;">
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <span><small></small></span>
                                        </div>
                                        <input type="hidden" class="id" name="id" value="<?= $row['id'] ?>">
                                        <input type="hidden" class="product_name" name="product_name" value="<?= $row['product_name'] ?>">
                                        <input type="hidden" class="product_price" name="product_price" value="<?= $row['product_price'] ?>">
                                        <input type="hidden" class="product_image" name="product_image" value="<?= $row['product_image'] ?>">
                                        <div class="col-md-7">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <span class="text-center" name="product_price">Rp. <?= number_format($row['product_price'],2,',','.') ?> </span>
                                    </div>
                                    <div class="row">
                                        <h6 class="mr-4 font-weight-bold text-dark d-none">
                                            <?= $row['decs'] ?></h6>
                                    </div>
                                </div>
                                <input type="hidden" name="id" class="id" value="<?= $row['id']?>">
                                <button type="button" class="btn btn-info btn-block addItemBtn d-flex text-white"><i
                                        class="fas fa-cart-plus"></i>&nbsp;&nbsp;Buy <p style="position:absolute; right:0; margin-right:20px;"><a href="detail.php?id=<?= $row['id']; ?>" style="text-decoration:none; color:white;">?</a></p></button>

                            </div>
                            
                        </form>
                    </div>
                    <?php endwhile; ?>
                    <a href=""><button type="submit" class="btn btn-info btn-block mt-5 buttonBuy text-white">Payment</button></a>

                </div>
              </div>
                <!-- Pie Chart -->





















                <!-- Optional JavaScript; choose one of the two! -->

                <!-- Option 1: Bootstrap Bundle with Popper -->
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                    crossorigin="anonymous">
                </script>
                <!-- Bootstrap core JavaScript-->
                <script src="asset-/vendor/jquery/jquery.min.js"></script>
                <script src="asset-/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                <!-- Core plugin JavaScript-->
                <script src="asset-/vendor/jquery-easing/jquery.easing.min.js"></script>

                <!-- Custom scripts for all pages-->
                <script src="asset-/js/sb-admin-2.min.js"></script>

                <!-- Page level plugins -->
                <script src="asset-/vendor/chart.js/Chart.min.js"></script>

                <!-- Page level custom scripts -->
                <script src="asset-/js/demo/chart-area-demo.js"></script>
                <script src="asset-/js/demo/chart-pie-demo.js"></script>

                <!-- <script src="asset-/js/spa.js"></script> -->
                <!-- Option 2: Separate Popper and Bootstrap JS -->
                <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
                    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
                    crossorigin="anonymous"></script>

</body>

</html>