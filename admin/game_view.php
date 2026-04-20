<?php
  session_start();
  include "../db/koneksi.php";

  $query = "SELECT * FROM game";
  $res = mysqli_query($con,$query);
  $countData   = mysqli_num_rows($res);

  include("navbar_dashboard.php");
?>

    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <!-- Data -->
        <div class="row p-4">
          <div class="col-md-12 kotak">
              <h2 class="border-head">Data Game
                  <a href="game_add.php" class="btn btn-outline-dark float-end" role="button">Tambah Game</a>
              </h2>
              <hr class="dropdown-divider" />
              <div class="table-responsive">
                  <table class="table table-hover">
                      <thead class="">
                          <tr>
                              <th>#</th>
                              <th>Nama Game</th>
                              <th>Nama Item Game</th>
                              <th>Gambar</th>
                              <th class="text-center"  width="20%">Aksi</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          if ($countData > 0) {
                              $no = 1;
                              while($result = mysqli_fetch_array($res)){
                          ?>
                              <tr>
                                  <td><?php echo $no; ?></td>
                                  <td><?php echo $result['nama_game']; ?></td>
                                  <td><?php echo $result['nama_item_game']; ?></td>
                                  <td>
                                  <img src="game_image_view.php?id_game=<?php echo $result["id_game"]; ?>" width = 100>
                                  </td>
                                  <td class="text-center">
                                    <a href="game_delete.php?id_game=<?php echo $result['id_game']; ?>" class="btn btn-danger">Hapus</a>
                                  </td>
                              </tr>
                          <?php 
                          $no++; } 
                        } else{
                            echo"<tr>
                                <td colspan='9' align='center' height='20'>
                                <div>Belum Ada Data</div>
                                </td>
                                </tr>";
                            }
                            ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      <!-- Data -->
      </div>
    </main>

<?php
  include("footer_dashboard.php");
?>