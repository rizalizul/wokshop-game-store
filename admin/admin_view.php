<?php
  session_start();
  include "../db/koneksi.php";
  $username = $_SESSION['username'];
  $query = "SELECT * FROM admin WHERE id_level='1';";
  $res = mysqli_query($con,$query);
  $countData   = mysqli_num_rows($res);

  include("navbar_dashboard.php");
?>

    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <!-- Data -->
        <div class="row p-4">
          <div class="col-md-12 kotak">
              <h2 class="border-head">Data Admin 
                  <a href="admin_add.php" class="btn btn-outline-dark float-end" role="button">Tambah Admin</a>
              </h2>
              <hr class="dropdown-divider" />
              <div class="table-responsive">
                  <table class="table table-hover">
                      <thead class="">
                          <tr>
                              <th>#</th>
                              <th>Nama Admin</th>
                              <th>Username</th>
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
                                  <td><?php echo $result['nama_admin']; ?></td>
                                  <td><?php echo $result['username']; ?></td>
                                  <td class="text-center">
                                    <a href="admin_edit.php?id_admin=<?php echo $result['id_admin']; ?>" class="btn btn-warning text-white">Ubah</a> |
                                    <a href="admin_delete.php?id_admin=<?php echo $result['id_admin']; ?>" class="btn btn-danger">Hapus</a>
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