<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Login Admin</h3>
                </div>
                	<!-- cek pesan notifikasi -->
                    <?php 
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "<script>alert('Username atau Password Salah!');</script>";
                        }else if($_GET['pesan'] == "logout"){
                            echo "<script>alert('Anda berhasil logout!');</script>";
                        }else if($_GET['pesan'] == "belum_login"){
                            echo "<script>alert('Anda harus login untuk mengakses halaman admin!');</script>";
                        }
                    }
                    ?>
                <form action="cek_login.php" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for=""><strong>Email</strong></label>
                        <input type="text" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Password</strong></label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" value="LOGIN" class="btn btn-primary btn-block">Log In</button>
                    <p class="text-center"><a href="index.php">Kembali</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>