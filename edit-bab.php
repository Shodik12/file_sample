<?php
include "koneksi.php";
$id = $_POST['id'];
   $bab = $_POST['nama_bab'];
   
   mysqli_query($koneksi,"UPDATE bab SET nama_bab='$bab' WHERE id='$id'");
   
   header("location:index-bab.php?sukses=edit");
 ?>