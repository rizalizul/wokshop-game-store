<!-- Login -->
<?php
	include 'db/koneksi.php';

    session_start();
    
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$username = $_POST['username']; 
		$password = $_POST['password'];
		$sql1 	 = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		
		$data = $con->query($sql1) or die($con->error);
		if(mysqli_num_rows($data)>0){
			$row  = mysqli_fetch_object($data);
            $_SESSION['username'] = $row->username;
            $_SESSION['id_level'] = $row->id_level;

            if ($_SESSION['id_level'] == "2") {
                header("location:admin/bank_dashboard.php");
            } else {
                header("location:admin/dashboard.php");
            }

		} elseif (mysqli_num_rows($data)==0) {
			$sql2 	 = "SELECT * FROM pelanggan WHERE username = '$username' AND password = '$password'";
			$data = $con->query($sql2) or die($con->error);
      $resultIdPel = mysqli_fetch_array(mysqli_query($con,$sql2));
      $id = $resultIdPel[0];
      
			if(mysqli_num_rows($data)>0){
				$row  = mysqli_fetch_object($data);
				$_SESSION['username'] = $row->username;

				header("location:index.php?id_pelanggan=$id");
			}else {
				echo '<script type="text/javascript">
					alert("Data yang anda masukan salah atau kurang lengkap.");
					</script>';
			}
		} 
	} 
?>
<!-- /Login -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masuk</title>
    <link rel="icon" href="assets/img/icon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center" style="margin-top: 20px">
        <div class="col-md-4 text-center">
          <img src="assets/img/logo.png" alt="logo" width="100%" />
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 kotak">
        <form action="" method="POST">
            <h2 class="text-center border-head">Masuk</h2>
            <hr class="dropdown-divider mb-3" />
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required />
            </div>
            <div class="d-grid gap-2 mt-3">
              <button type="submit" class="btn btn-dark" name="masuk">Masuk</button>
            </div>
            <div class="mb-3 mt-3">
              <p>Belum punya akun? <a href="daftar.php" class="text-dark fw-bold">Daftar</a></p>
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4">
          <a href="index.php" class="text-white text-decoration-none"> <i class="bi bi-chevron-left"></i> Beranda </a>
        </div>
      </div>
    </div>
  </body>
</html>
