<?php 
$koneksi = mysqli_connect("localhost","root","","inventaris");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database failed : " . mysqli_connect_error();
}
 
?>