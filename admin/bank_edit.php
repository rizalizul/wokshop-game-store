<?php
  session_start();
  include "../db/koneksi.php";
  $getId = $_GET['id_admin'];
  $query = "SELECT * FROM admin WHERE id_admin='$getId';";
  $res = mysqli_query($con,$query);
  $result = mysqli_fetch_array($res);

  include("navbar_dashboard.php");
?>

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <!-- Profil -->
    <div class="row justify-content-center">
      <div class="col-md-6 bg-white kotak">
        <?php
          if(!isset($_POST['submit'])) {
        ?>
        <form method="POST">
        <h2 class="text-center border-head">Edit Bank</h2>
        <hr class="dropdown-divider mb-3" />
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control-plaintext" value="<?php echo $result['username'] ?>" readonly />
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Bank</label>
            <input type="text" name="nama_admin" class="form-control" value="<?php echo $result['nama_admin'] ?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $result['password'] ?>" required />
          </div>
          <div class="d-grid gap-2 mt-3">
            <button type="submit" class="btn btn-dark" name="submit">Ubah</button>
          </div>
        </form>

        <?php
} else {
    $nama_admin = $_POST["nama_admin"];
    $username   = $_POST["username"];
    $password   = $_POST["password"];

    //Edit Data
    $update = "UPDATE admin 
                    SET nama_admin='$nama_admin', username='$username', password='$password'
                    WHERE id_admin='$getId'";
    $queryEdit = mysqli_query($con, $update);

    if ($queryEdit) {
        echo"<script>alert('Data Berhasil Diubah!!') </script>";
        echo"<script type='text/javascript'>window.location='bank_view.php'</script>";
    } else {
        echo"<script>alert('Data Gagal Diubah!!') </script>";
        echo"<script type='text/javascript'>window.location='bank_view.php'</script>";
    }
}
?>



        
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <a href="bank_view.php" class="text-white text-decoration-none">
          <i class="bi bi-chevron-left"></i> Kembali </a>
      </div>
    </div>
  </div>
</main>
<!-- /Profil -->
<?php
  include("footer_dashboard.php");
?>
