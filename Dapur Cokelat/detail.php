<?php

include 'config.php'

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

    <title>Detail</title>
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

    .cosmetic {
        line-height: 5px;
        margin-top: 40px;
    }

    .cosmetic p:first-child {
        font-weight: 700;
        font-size: 20px;
        font-family: 'Pangolin', cursive;
    }

    .cosmetic p:last-child {
        font-weight: 700;
        font-size: 15px;
        text-align: center;
        font-family: 'Pangolin', cursive;
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
    <?php
                $id = $_GET['id'];
                $data = mysqli_query($conn, "SELECT * FROM produk WHERE id ='$id'");
                if ($row = mysqli_fetch_array($data)) {
                ?>
    <div class="card shadow mb-3">
        <div class="card-header fw-bold text-center">Detail Produk</div>
        <div class="card-body">
            <img style="width: 200px; display: block; margin: auto;" src="<?php echo $row['product_image']; ?>"
                alt="..." class="rounded">
            <p class="card-title mt-5 text-center">Nama Produk : <?php echo $row['product_name']; ?></p>
            <p class="card-text text-center">Harga Produk : Rp. <?php echo $row['product_price']; ?></p>
            <p class="card-text text-center">Deskripsi : <?php echo $row['decs']; ?></p>
        </div>
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" name="detail" class="btn btn-lg btn-primary"><svg width="1em" height="1em"
                viewBox="0 0 16 16" class="bi bi-cart3" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
            </svg>Beli</button>

    </div>
    </div>
    <?php
                }
                ?>
    </div>
    </div>
    </div>
    <!-- modal -->

    </div>
    </div>




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