<?php
  include '../db/koneksi.php';
  $id_game = $_GET['id_game'];

  $queryDel = "DELETE FROM game WHERE id_game ='$id_game'";
  $sqlDel = mysqli_query($con, $queryDel);
  if($sqlDel){ 
    echo"<script>alert('Data Berhasil Dihapus!!') </script>";
    echo"<script type='text/javascript'>window.location='game_view.php'</script>";
  }else{
    echo"<script>alert('Data Gagal Dihapus!!') </script>";
    echo"<script type='text/javascript'>window.location='game_view.php'</script>";
  }
?>