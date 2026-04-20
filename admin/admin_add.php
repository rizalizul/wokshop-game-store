<?php
  session_start();
  include "../db/koneksi.php";
  
  include("navbar_dashboard.php");

  if(isset($_POST['add_data'])) {
    $username 		= $_POST['username'];
    $password 		= $_POST['password'];
    $nama_admin   = $_POST['nama_admin'];
    
    $query = mysqli_query($con, "INSERT INTO admin (id_admin,username,password,nama_admin,id_level)
    VALUES (
    NULL,
    '$username',
    '$password',
    '$nama_admin',
    '1'
      );");
  
      if ($query) {
        echo"<script>alert('Data Berhasil Disimpan!!') </script>";
        echo"<script type='text/javascript'>window.location='admin_view.php'</script>";
      } else {
          echo '<script type="text/javascript">
        alert("Data yang anda masukan salah atau kurang lengkap.");
        </script>';
      }
  }
?>

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <!-- Tambah Data -->
      <div class="row justify-content-center">
        <div class="col-md-6 kotak">
          <form action="" method="POST">
            <h2 class="text-center border-head">Tambah Admin</h2>
              <hr class="dropdown-divider mb-3" />            
            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama_admin" class="form-control" placeholder="Nama" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username (tanpa spasi dan simbol)" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" name="password" class="form-control" required />
            </div>
            <div class="d-grid gap-2 mt-4 mb-2">
              <button type="submit" class="btn btn-dark" name="add_data">Tambah</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="col-md-6">
          <a href="admin_view.php" class="text-white text-decoration-none">
            <i class="bi bi-chevron-left"></i> Kembali 
          </a>
        </div>
      </div>
    <!-- End Tambah Data -->
  </div>
</main>

<?php
  include("footer_dashboard.php");
?>