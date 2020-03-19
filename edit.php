<?php
//include('dbconnected.php');
include('dbconnect.php');

$id = $_GET['lahan'];
$latitude = $_GET['latitude'];
$longitude = $_GET['longitude'];
$pemilik_lahan = $_GET['pemilik_lahan'];
$luas_lahan = $_GET['luas_lahan'];
$jenis_tanaman = $_GET['jenis_tanaman'];
$umur_tanaman = $_GET['umur_tanaman'];
$pupuk_tanaman = $_GET['pupuk_tanaman'];
$sumber_air = $_GET['sumber_air'];
$masa_panen = $_GET['masa_panen'];
$harga_jual = $_GET['harga_jual'];

//query update
$query = "UPDATE data SET latitude='$latitude' , longitude='$longitude' , pemilik_lahan='$pemilik_lahan' , luas_lahan='$luas_lahan' , jenis_tanaman='$jenis_tanaman' , umur_tanaman='$umur_tanaman' , pupuk_tanaman='$pupuk_tanaman' , sumber_air='$sumber_air' , masa_panen='$masa_panen' , harga_jual='$harga_jual' WHERE lahan='$id' ";

if (mysqli_query($conn, $query)) {
	# credirect ke page index
	header("location:crud.php");
	
}
else{
	echo "ERROR, data gagal diupdate". mysqli_error($conn);
}

mysqli_close($conn);
?>