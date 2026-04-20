<?php
  session_start();
  include "../db/koneksi.php";
  $username = $_SESSION['username'];
  $query = "SELECT * FROM admin WHERE username='$username';";
  $res = mysqli_query($con,$query);
  $result = mysqli_fetch_array($res);

  include("navbar_dashboard.php");
?>

<main class="mt-5 pt-3">
  <div class="container-fluid">
    <!-- Profil -->
    <div class="row justify-content-center">
      <div class="col-md-4 bg-white kotak">
        <h2 class="text-center border-head">Profil</h2>
        <table class="tabel" width="100%">
          <tr>
            <td width="45%">Nama</td>
            <td>:</td>
            <td><?php echo $result['nama_admin'];?></td>
          </tr>
          <tr>
            <td>Username</td>
            <td>:</td>
            <td><?php echo $result['username'];?></td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:</td>
            <td><?php echo $result['password'];?></td>
          </tr>
          <tr>
              <td colspan="3">
                  <a href="admin_edit.php?id_admin=<?php echo"$result[0]";?>" class="btn btn-dark float-right" style="margin-top:20px;">Edit</a>
              </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>
<!-- /Profil -->
<?php
  include("footer_dashboard.php");
?>
