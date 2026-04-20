<?php
  session_start();
  include "../db/koneksi.php";

  $query = "SELECT * FROM game, game_item WHERE game.id_game=game_item.id_game ORDER by game_item.id_game;";
  $res = mysqli_query($con,$query);
  $countData   = mysqli_num_rows($res);

  $getIdPelanggan = $_GET['id_pelanggan'];

  include("navbar_info.php");
?>

<section id="game" class="mt-5">
      <div class="container" style="margin-top:100px;">
        <div class="row">
          <div class="col line-heading">
            <h2>Daftar Harga</h2>
          </div>
        </div>
        <!-- Data -->
        <div class="row p-4">
          <div class="col-md-12 kotak">
            <h2 class="border-head">Daftar Harga
            </h2>
            <hr class="dropdown-divider" />
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Nama Game</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
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
                                <td><?php echo $result['banyak_item'] . ' ' . $result['nama_item']; ?></td>
                                <td><?php echo 'Rp. ' . $result['harga']; ?></td>
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
    </section>

<?php
  include("footer_info.php")
?>