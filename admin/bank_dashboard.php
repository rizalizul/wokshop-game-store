<?php
    session_start();
    include "../db/koneksi.php";
    $username = $_SESSION['username'];
    $query = "SELECT * FROM admin WHERE username = '$username' ";
    $res = mysqli_query($con,$query);
    $result = mysqli_fetch_array($res);

    include("navbar_bank.php");
?>

    <main class="mt-5 pt-3">
      <div class="p-5 m-5 bg-light border rounded-3">
        <div class="container-fluid py-5 text-center">
        <img src="../assets/img/icon.ico" width="150px" alt="Logo">
          <h2 class="display-5 fw-bold">Selamat Datang!</h2>
          <h3><?php echo $result['nama_admin'];?></h3>
        </div>
      </div>
      <!-- <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 fw-bold fs-3">Dashboard</div>
        </div>
        <div class="row"></div>
      </div> -->
    </main>

<?php
  include("footer_dashboard.php");
?>