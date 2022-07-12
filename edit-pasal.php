<?php 
 include "koneksi.php";
  $id = $_POST['id'];
$pasal = $_POST['pasal'];

mysqli_query($koneksi,"UPDATE pasal SET pasal='$pasal' WHERE id='$id'");
 
header("location:index-pasal.php?sukses=edit");
?>