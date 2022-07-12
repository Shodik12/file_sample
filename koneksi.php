<?php 
 
$koneksi = mysqli_connect("sql304.hstn.me", "mseet_32153023", "Anda1234", "mseet_32153023_din");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
