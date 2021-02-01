<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
	$id = $_POST['id'];
	
	$kasus_positif=$_POST['kasus_positif'];
	$kasus_sembuh=$_POST['kasus_sembuh'];
	$kasus_meninggal=$_POST['kasus_meninggal'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE kasus SET kasus_positif='$kasus_positif',kasus_sembuh='$kasus_sembuh',kasus_meninggal='$kasus_meninggal' WHERE id=1");
	
    // Redirect to homepage to display updated user in list
    $_SESSION['pesan'] = 'Data berhasil di tambahkan';
    header("Location: home.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = 1;

 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT kasus_sembuh, kasus_positif, kasus_meninggal, name FROM kasus JOIN users WHERE kasus.id=users.id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
	$kasus_positif = $user_data['kasus_positif'];
	$kasus_sembuh = $user_data['kasus_sembuh'];
	$kasus_meninggal = $user_data['kasus_meninggal'];
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
<body>
    <!-- cek apakah sudah login -->
    <?php 
    session_start();
    if($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }
    ?>
    <div class="container">
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard Admin</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard, <strong><?php echo "$name"?></strong></h5>
                    <a href="logout.php" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Data Kasus</h2>
                </div>
                <div class="card-body">
                <form name="update_user" method="post">
                        <tr> 
                            <td>Kasus Positif</td><br>
                            <td><input class="form-control" type="number" name="kasus_positif" value=<?php echo $kasus_positif;?>></td>
                        </tr>
                        <tr> 
                            <td>Kasus Sembuh</td><br>
                            <td><input class="form-control" type="number" name="kasus_sembuh" value=<?php echo $kasus_sembuh;?>></td>
                        </tr>
                        <tr> 
                            <td>Kasus Meninggal</td><br>
                            <td><input class="form-control" type="number" name="kasus_meninggal" value=<?php echo $kasus_meninggal;?>></td>
                        </tr>
                        <tr>
                            <td><input class="form-control" type="hidden" name="id" value=1></td><br>
                            <td><input class="btn btn-info" type="submit" name="update" value="Update" onclick="myFunction()"></td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        </div>
    </div>
    <script>
    function myFunction() {
    alert("Data berhasil diubah!");
    }
    </script>
    <!-- Footer-->
    <footer class="bg-light py-5">
        <div class="container"><div class="small text-center text-muted">Copyright © 2020 - Web Covid Desa</div></div>
    </footer>
</body>