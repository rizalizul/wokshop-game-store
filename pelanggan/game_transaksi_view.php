<?php
  session_start();
  include "../db/koneksi.php";
  $getIdGame = $_GET['id_game'];
  $getIdPelanggan = $_GET['id_pelanggan'];
  $query1 = "SELECT * FROM game, game_item WHERE game.id_game=game_item.id_game AND game.id_game='$getIdGame';";
  $res1 = mysqli_query($con,$query1);
  $resultGame = mysqli_fetch_array(mysqli_query($con,$query1));

  $query2 = "SELECT * FROM admin WHERE id_level='2'";
  $res2 = mysqli_query($con,$query2);

  if(isset($_POST['bayar'])) {
    $user_id    		= $_POST['user_id'];
    $item_pilih 		= $_POST['item_pilih'];
    $id_admin 		  = $_POST['pilih_bayar'];
    $id_game        = $resultGame['id_game'];
    
    $query = mysqli_query($con, "INSERT INTO tagihan (id_tagihan,id_pelanggan,id_game,id_admin,user_id,status)
    VALUES (
    NULL,
    '1',
    '$id_game',
    '$id_admin',
    '$user_id',
    'Belum Dibayar'
      );");
  
      if ($query) {
        echo"<script>alert('Data Berhasil Disimpan!!') </script>";
        echo"<script type='text/javascript'>window.location='../index.php'</script>";
      } else {
          echo '<script type="text/javascript">
        alert("Data yang anda masukan salah atau kurang lengkap.");
        </script>';
      }
  }
  include("navbar_pelanggan.php");
?>

<section class="mt-5 pt-3">
  <div class="container">
    <!-- Tambah Data -->
    <form action="" method="POST" id="bayarr">
      <div class="row justify-content-center">
        <div class="col-md-6 kotak">
          <h4 class="border-head"><?php echo $resultGame['nama_game'];?></h4>
            <hr class="dropdown-divider mb-3" />
            <div class="mb-3">
              <label class="form-label">Masukan User ID</label>
              <input type="number" name="user_id" class="form-control" placeholder="User ID Game" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Pilih Item</label>
              <div class="form-group"> 
                <select class="form-select" aria-label="Default select example" name="item_pilih" id="item_pilih" onChange="klikItem()">
                  <option value="">== Pilih Item ==</option>
                  <?php while($result1 = mysqli_fetch_array($res1)){ ?>
                    <option <?php if(!empty($item_pilih)){ echo $item_pilih == 'echo $result1["id_game_item"];' ? 'selected':''; } ?> value="<?php echo $result1["id_game_item"];?>" value2="<?php echo $result1["harga"];?>" ><?php echo $result1["banyak_item"] .' '. $result1["nama_item"]; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="mb-3">
              <span class="form-label" id="demo"></span>
            </div>
            <div class="mb-3">
              <label class="form-label">Pilih Pembayaran</label>
              <div class="form-group"> 
                <select class="form-select" aria-label="Default select example" name="pilih_bayar">
                  <option selected>== Pilih Pembayaran ==</option>
                  <?php while($result2 = mysqli_fetch_array($res2)){ ?>
                    <option <?php if(!empty($pilih_bayar)){ echo $pilih_bayar == 'echo $result1["id_admin"];' ? 'selected':''; } ?> value="<?php echo $result2["id_admin"]; ?>"><?php echo $result2["nama_admin"]; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="d-grid gap-2 mt-4 mb-2">
              <button type="submit" class="btn btn-dark" name="bayar">Beli sekarang</button>
            </div>
        </div>
      </div>

    </form>

      <div class="row justify-content-center mb-4">
        <div class="col-md-6">
          <a href="../index.php" class="text-white text-decoration-none">
            <i class="bi bi-chevron-left"></i> Kembali 
          </a>
        </div>
      </div>
    <!-- End Tambah Data -->
  </div>
</section>

<script>
function klikItem() {
  var x = document.getElementById("item_pilih").value2;
  document.getElementById("demo").innerHTML = "Harga : Rp. " + x;
}
</script>

<?php
  include("footer_pelanggan.php");
?>