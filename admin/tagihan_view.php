<?php
  session_start();
  include "../db/koneksi.php";
  $username = $_SESSION['username'];
  $query = "SELECT * FROM tagihan,pelanggan,game,admin WHERE tagihan.id_pelanggan=pelanggan.id_pelanggan AND tagihan.id_game=game.id_game AND tagihan.id_admin=admin.id_admin ORDER by tagihan.id_tagihan;";
  $res = mysqli_query($con,$query);
  $countData   = mysqli_num_rows($res);

  include("navbar_dashboard.php");
?>

    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <!-- Data -->
        <div class="row p-4">
          <div class="col-md-12 kotak">
              <h2 class="border-head">Data Tagihan
                  <a href="#" class="btn btn-outline-dark float-end" role="button">Tambah Tagihan</a>
              </h2>
              <hr class="dropdown-divider" />
              <div class="table-responsive">
                  <table class="table table-hover">
                      <thead class="">
                          <tr>
                              <th>#</th>
                              <th>ID Tagihan</th>
                              <th>Nama Pelanggan</th>
                              <th>User Id</th>
                              <th>Nama Game</th>
                              <th>Pembayaran</th>
                              <th>Status</th>
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
                                  <td><?php echo $result['id_tagihan']; ?></td>
                                  <td><?php echo $result['nama_pelanggan']; ?></td>
                                  <td><?php echo $result['user_id']; ?></td>
                                  <td><?php echo $result['nama_game']; ?></td>
                                  <td><?php echo $result['nama_admin']; ?></td>
                                  <td>
                                  <?php if ($result['status'] == 'Belum Dibayar') {
                                      echo '<span class="btn btn-secondary rounded-pill">' . $result['status'] . '</span>';
                                  } elseif ($result['status'] == 'Verifikasi Bank') {
                                      echo '<span class="btn btn-warning rounded-pill">' . $result['status'] . '</span>';
                                  } elseif ($result['status'] == 'Lunas') {
                                      echo '<span class="btn btn-success rounded-pill">' . $result['status'] . '</span>';
                                    } ?>
                                  </td>
                                  <td class="text-center">
                                    <a href="tagihan_delete.php?id_tagihan=<?php echo $result['id_tagihan']; ?>" class="btn btn-danger">Hapus</a>
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