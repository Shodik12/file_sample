<?php include "koneksi.php";?>
<?php 
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM pasal WHERE id='$id'")or die(mysql_error());
 
header("location:index-pasal.php?sukses=hapus");
?>