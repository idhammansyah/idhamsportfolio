<?php 
 
$koneksi = mysqli_connect("localhost","root","","regis");
 
// Check connection
if(mysqli_connect_errno()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}else{
	echo 'Koneksi berhasil';
}
 
?>