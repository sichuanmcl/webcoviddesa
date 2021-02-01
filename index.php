<!DOCTYPE html>
<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM kasus");
?>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Web Covid Desa - Sokaraja Wetan</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Web Covid Desa</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="login.php">Log in admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">Info Covid Desa Sokaraja Wetan</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-4 align-self-baseline">
                        <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h4 class="card-title">Kasus Positif</h4>
                            <?php
                            while($user_data = mysqli_fetch_array($result)) {?>
                            <p class="card-text"> <?php echo "$user_data[kasus_positif]"?> Orang</p>
                            <?php } ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 align-self-baseline">
                        <div class="card bg-success text-white">
                        <div class="card-body">
                        <h4 class="card-title">Kasus Sembuh</h4> 
                        <?php
                            while($user_data = mysqli_fetch_array($result)) {?>
                            <p class="card-text"> <?php echo "$user_data[kasus_sembuh]"?> Orang</p>
                        <?php } ?>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-4 align-self-baseline">
                        <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h4 class="card-title">Kasus Meninggal</h4>
                            <?php
                            while($user_data = mysqli_fetch_array($result)) {?>
                            <p class="card-text"> <?php echo "$user_data[kasus_meninggal]"?> Orang</p>
                        <?php } ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Web Covid Desa</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
