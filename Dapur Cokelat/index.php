<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>LOGIN</title>
  </head>
  <style>
	body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color:#BDC581;
    background-repeat: no-repeat
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px;
    background-image: url(https://images.unsplash.com/photo-1519340333755-56e9c1d04579?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80);
}

.border-line {
    border-right: 1px solid #EEEEEE
}
.line {
    height: 1px;
    width: 40%;
    background-color: #E0E0E0;
    margin-top: 30px;
}

.or {
    width: 20%;
    font-weight: bold;
    margin-top: 20px;
}

.text-sm {
    font-size: 14px !important
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

a {
    color: inherit;
    cursor: pointer
}

.btn-blue {
    background-color: #fed330;
    width: 100%;
    color: #fff;
    font-weight: bolder;
    border-radius: 2px
}

.btn-blue:hover {
    background-color: #45aaf2;
    cursor: pointer;
    color: white;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px
    }

    .image {
        width: 300px;
        height: 220px
    }

    .border-line {
        border-right: none
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px;
    }
}
</style>
  <body>
  <br>
  <br>
    <form action="login.php" method="POST">
        <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5">
            <div class="card card0 border-0">
                <div class="row d-flex justify-content-end">
                    <div class="col-lg-5">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row px-3 mb-4">
                                <div class="line"></div> <small class="or text-center">LOGIN</small>
                                <div class="line"></div>
                            </div>
                            <?php if (isset($_GET['error'])) { ?>
                    		<p class="error"><?php echo $_GET['error']; ?></p>
                         	<?php } ?>
                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Username</h6>
                                </label> <input class="mb-4" type="text" name="username" placeholder="Enter a valid Username"> </div>
                            <div class="row px-3"> <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label> <input type="password" name="password" placeholder="Enter password"> </div>
                            <div class="row mb-3 mt-5 px-3"> <button type="submit" class="btn btn-blue text-center" name="login">Login</button> </div>
                            <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger" href="formregister.php">Register</a></small> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>