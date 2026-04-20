<?php
  include '../db/koneksi.php';
  $id_admin = $_GET['id_admin'];

  $queryDel = "DELETE FROM admin WHERE id_admin ='$id_admin'";
  $sqlDel = mysqli_query($con, $queryDel);
  if($sqlDel){ 
    echo"<script>alert('Data Berhasil Dihapus!!') </script>";
    echo"<script type='text/javascript'>window.location='admin_view.php'</script>";
  }else{
    echo"<script>alert('Data Gagal Dihapus!!') </script>";
    echo"<script type='text/javascript'>window.location='admin_view.php'</script>";
  }
?>