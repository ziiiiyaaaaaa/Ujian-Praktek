<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

</head>
<style>
     body {
    background-color:#BDC581;
  }
    nav {
          position: fixed;
      }
      .navbar-brand{
        display: flex;
      }
      .collapse{
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
      .nav-item a:hover{
          color: rgb(255, 252, 83);
      }
      .nav-item a:active{
          color: rgb(255, 147, 6);
      }
    .logout{
    background: ;
	  display: flex;
	  justify-content: center;
	  align-items: center;
	  height: 100vh;
	  flex-direction: column;
    }
    h1 {
        text-align: center;
        color: #000;
    }

    .logout a{
        float: right;
        background: #555;
        padding: 10px 15px;
        color: #fff;
        border-radius: 5px;
        margin-right: 10px;
        border: none;
        text-decoration: none;
    }
    .logout a:hover{
        opacity: .7;
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

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
 <!--Hero Image-->
  <section id="hero">
    <div class="container">
      <!--Slide-->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" width="100%">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://dc.dapurcokelat.com/assets/uploads/thumbs/992D344D-4837-46AB-9A99-391157BE4A90_1360.jpeg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://dc.dapurcokelat.com/assets/uploads/thumbs/web3_1360.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://dc.dapurcokelat.com/assets/uploads/thumbs/web2_1360.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://dc.dapurcokelat.com/assets/uploads/thumbs/Website-Chocolaters_1360.jpg"
            class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="https://dc.dapurcokelat.com/assets/uploads/thumbs/Web_Banner_HO_1360.jpg" class="d-block w-100"
            alt="...">
        </div>
      </div>
    </div>
    <!--Tutup Slide-->
    <!--Tutup Hero Image-->
    <footer>
      <!--div class="backtop" onClick="backtop();"></div-->
      <div class="container footer-content">
        <div class="row">
          <div class="col-md-14 col-lg-14" align="center" style="width:100%">
            <div class="logo"><img src="https://dc.dapurcokelat.com/assets/logo-dapcok-ori3.png"
                style="border-top: 1px solid #491e13;" /></div>
            <div style="font-size: 11px !important;">Copyright&copy;2021, all rights reserved</div>
          </div>
        </div>
    </footer>

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