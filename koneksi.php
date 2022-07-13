<?php 
 //note!!
//Ini koneksi dixamp $koneksi = mysqli_connect("localhost","root","","namadb");
$koneksi = mysqli_connect("localhost", "root", "", "dbojk");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
