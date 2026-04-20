<?php
  session_start();
  include "../db/koneksi.php";
  $getId = $_GET['id_pelanggan'];
  $query = "SELECT * FROM pelanggan WHERE id_pelanggan='$getId';";
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
          <h2 class="text-center border-head">Edit Pelanggan</h2>
          <hr class="dropdown-divider mb-3" />
          <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control-plaintext" placeholder="Username (tanpa spasi dan simbol)" value="<?=$result['username'];?>" readonly />
          </div>
          <div class="mb-3">
            <label class="form-label">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" class="form-control" placeholder="Nama Pelanggan" value="<?=$result['nama_pelanggan'];?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" placeholder="contoh@gmail.com" value="<?=$result['email'];?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Nomor HP</label>
            <input type="text" name="no_hp" class="form-control" placeholder="081122334455" value="<?=$result['no_hp'];?>" required />
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" value="<?=$result['password'];?>" required />
          </div>
          <div class="d-grid gap-2 mt-3">
            <button type="submit" class="btn btn-dark" name="submit">Ubah</button>
          </div>
        </form>

        <?php
} else {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $username 		  = $_POST['username'];
    $email          = $_POST['email'];
    $no_hp          = $_POST['no_hp'];
    $password 		  = $_POST['password'];

    //Edit Data
    $update = "UPDATE pelanggan 
                    SET nama_pelanggan='$nama_pelanggan', username='$username', password='$password', no_hp='$no_hp', email='$email'
                    WHERE id_pelanggan='$getId'";
    $queryEdit = mysqli_query($con, $update);

    if ($queryEdit) {
        echo"<script>alert('Data Berhasil Diubah!!') </script>";
        echo"<script type='text/javascript'>window.location='pelanggan_view.php'</script>";
    } else {
        echo"<script>alert('Data Gagal Diubah!!') </script>";
        echo"<script type='text/javascript'>window.location='pelanggan_view.php'</script>";
    }
}
?>
        
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <a href="pelanggan_view.php" class="text-white text-decoration-none">
          <i class="bi bi-chevron-left"></i> Kembali </a>
      </div>
    </div>
  </div>
</main>
<!-- /Profil -->
<?php
  include("footer_dashboard.php");
?>
