<?php
  session_start();
  include "../db/koneksi.php";
  $username = $_SESSION['username'];
  $query = "SELECT * FROM admin WHERE username='$username';";
  $res = mysqli_query($con,$query);
  $result = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link rel="icon" href="../assets/img/icon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <!-- <link rel="stylesheet" href="../assets/css/da"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css" />
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <!-- OffCanvas Trigger -->
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- OffCanvas Trigger -->
        <a class="navbar-brand fw-bold text-uppercase" href="#">WOKSHOP</a>

        <div class="navbar" id="navbarSupportedContent">
          <form class="d-flex ms-auto" role="search">
          </form>

          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i></a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="admin_profil.php">Profil</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="../keluar.php">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- OffCanvas -->
    <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-body p-0 mt-3">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a href="bank_dashboard.php" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-speedometer2"></i>
                </span>
                <span>Beranda</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2">
                  <i class="bi bi-credit-card"></i>
                </span>
                <span>Pembayaran</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <!-- Profil -->
    <div class="row justify-content-center">
      <div class="col-md-4 bg-white kotak">
        <h2 class="text-center border-head">Profil</h2>
        <hr class="dropdown-divider mb-3" />
        <table class="tabel" width="100%">
          <tr>
            <td width="45%">Nama</td>
            <td>:</td>
            <td><?php echo $result['nama_admin'];?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo $result['username'];?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><?php echo $result['password'];?></td>
          </tr>
          <tr>
              <td colspan="3">
                  <a href="bank_edit_profil.php?id_admin=<?php echo"$result[0]";?>" class="btn btn-dark float-right" style="margin-top:20px;">Edit</a>
              </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>
<!-- /Profil -->
<?php
  include("footer_dashboard.php");
?>
