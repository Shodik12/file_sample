<?php
include "koneksi.php";
$id = $_POST['id'];
   $bab = $_POST['bab'];
   
   mysqli_query($koneksi,"UPDATE bab SET bab='$bab' WHERE id='$id'");
   
   header("location:index-bab.php?sukses=edit");
 ?>
