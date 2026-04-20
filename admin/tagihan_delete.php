<?php
  include '../db/koneksi.php';
  $id_tagihan = $_GET['id_tagihan'];

  $queryDel = "DELETE FROM tagihan WHERE id_tagihan ='$id_tagihan'";
  $sqlDel = mysqli_query($con, $queryDel);
  if($sqlDel){ 
    echo"<script>alert('Data Berhasil Dihapus!!') </script>";
    echo"<script type='text/javascript'>window.location='tagihan_view.php'</script>";
  }else{
    echo"<script>alert('Data Gagal Dihapus!!') </script>";
    echo"<script type='text/javascript'>window.location='tagihan_view.php'</script>";
  }
?>