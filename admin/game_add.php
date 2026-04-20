<?php
  session_start();
  include "../db/koneksi.php";
  
  include("navbar_dashboard.php");
  
  if(isset($_POST['add_data'])) {
    
    $file_name = $_FILES['gambar']['name'];
    $file_size = $_FILES['gambar']['size'];
    $file_type = $_FILES['gambar']['type'];
    
    // echo"<script>alert('$tmp!!') </script>";
    if ($file_size < 64000 and ($file_type =='image/jpeg' or $file_type == 'image/png'))
    {
        
        $image   = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $nama_game = $_POST['nama_game'];
        $nama_item_game = $_POST['nama_item_game'];
        
        $query1 = mysqli_query($con, "INSERT INTO game (id_game, nama_game, nama_item_game, nama_image_game, gambar) 
        VALUES (NULL,'$nama_game', '$nama_item_game','$file_name','$image')");
        
        
        if ($query1) {
          echo"<script>alert('Data Berhasil Disimpan!!') </script>";
          echo"<script type='text/javascript'>window.location='game_view.php'</script>";
        } else {
            echo '<script type="text/javascript">
            alert("Data yang anda masukan salah atau kurang lengkap.");
            </script>';
        }
    }
    else{
        echo"<script>alert('Ukuruan File max 64kb / Tipe File Tidak Sesuai (hanya jpg/png)') </script>";
    }
  }
?>

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <!-- Tambah Data -->
      <div class="row justify-content-center">
        <div class="col-md-6 kotak">
          <form action="" method="POST"  enctype="multipart/form-data">
            <h2 class="text-center border-head">Tambah Game</h2>
              <hr class="dropdown-divider mb-3" />            
            <div class="mb-3">
              <label class="form-label">Nama Game</label>
              <input type="text" name="nama_game" class="form-control" placeholder="Nama Game" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Nama Item Game</label>
              <input type="text" name="nama_item_game" class="form-control" placeholder="Nama Item Game" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Pilih Gambar</label>
              <input type="file" name="gambar" class="form-control" required />
            </div>
            <div class="d-grid gap-2 mt-4 mb-2">
              <button type="submit" class="btn btn-dark" name="add_data">Tambah</button>
            </div>
          </form>
        </div>
      </div>
      <div class="row justify-content-center mb-4">
        <div class="col-md-6">
          <a href="game_view.php" class="text-white text-decoration-none">
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