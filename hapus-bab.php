<?php include "koneksi.php";?>

<?php 
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM bab WHERE id='$id'")or die(mysql_error());
 
header("location:index-bab.php?sukses=hapus");
?>