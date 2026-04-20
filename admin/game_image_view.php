<?php
  session_start();
  include "../db/koneksi.php";
  $getIdGame = $_GET['id_game'];
  if(isset($getIdGame)) 
  {
      $query = mysqli_query($con,"select * from game where id_game='$getIdGame'");
      $row = mysqli_fetch_array($query);
      // header("Content-type: " . $row["tipe_gambar"]);
      echo $row["gambar"];
  }
  else
  {
      header('location:game_view.php');
  }

?>