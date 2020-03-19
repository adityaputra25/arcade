<?php
//add dbconnect

include('dbconnect.php');

$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$pemilik_lahan = $_POST['pemilik_lahan'];
$luas_lahan = $_POST['luas_lahan'];
$jenis_tanaman = $_POST['jenis_tanaman'];
$umur_tanaman = $_POST['umur_tanaman'];
$pupuk_tanaman = $_POST['pupuk_tanaman'];
$sumber_air = $_POST['sumber_air'];
$masa_panen = $_POST['masa_panen'];
$harga_jual = $_POST['harga_jual'];

//query

$query =  "INSERT INTO data(latitude , longitude , pemilik_lahan , luas_lahan , jenis_tanaman , umur_tanaman , pupuk_tanaman , sumber_air , masa_panen , harga_jual) VALUES('$latitude' , '$longitude' , '$pemilik_lahan' , '$luas_lahan' , '$jenis_tanaman' , '$umur_tanaman' , '$pupuk_tanaman' , '$sumber_air' , '$masa_panen' , '$harga_jual')";

if (mysqli_query($conn , $query)) {
	# code redicet setelah insert ke index
	header("location:crud.php");
}
else{
	echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>