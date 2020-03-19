<!DOCTYPE html>
<html lang="en">
<head>
	<title>Toko Buku</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="crud/bootstrap/css/bootstrap.css">
	<script src="crud/js/jquery.js"></script>
	<script src="crud/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<?php 
$id = $_GET['id']; 

//koneksi database
include('dbconnect.php');

//query
$query = "SELECT * FROM data WHERE lahan='$id'";
$result = mysqli_query($conn, $query);

?>

<div class="container" style="padding-top: 20px; padding-bottom: 20px;">

	<h3 style="text-align:center">Update Data Perkebunan</h3>
	<form role="form" action="edit.php" method="get" class="container" style="width:40%">

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		 	
		?>

		<input type="hidden" name="lahan" value="<?php echo $row['lahan']; ?>" style="text-align: center">

		<div class="form-group" >
			<label>Latitude</label>
			<input type="text" name="latitude" class="form-control" value="<?php echo $row['latitude']; ?>">			
		</div>

		<div class="form-group">
			<label>Longitude</label>
			<input type="text" name="longitude" class="form-control" value="<?php echo $row['longitude']; ?>">			
		</div>

		<div class="form-group">
			<label>Pemilik Lahan</label>
			<input type="text" name="pemilik_lahan" class="form-control" value="<?php echo $row['pemilik_lahan']; ?>">			
		</div>
		
		<div class="form-group">
			<label>Luas Lahan</label>
			<input type="text" name="luas_lahan" class="form-control" value="<?php echo $row['luas_lahan']; ?>">			
		</div>
		
		<div class="form-group">
			<label>Jenis Tanaman</label>
			<input type="text" name="jenis_tanaman" class="form-control" value="<?php echo $row['jenis_tanaman']; ?>">			
		</div>
		
		<div class="form-group">
			<label>Umur Tanaman</label>
			<input type="text" name="umur_tanaman" class="form-control" value="<?php echo $row['umur_tanaman']; ?>">			
		</div>
		
		<div class="form-group">
			<label>Pupuk Tanaman</label>
			<input type="text" name="pupuk_tanaman" class="form-control" value="<?php echo $row['pupuk_tanaman']; ?>">			
		</div>
		
		<div class="form-group">
			<label>Sumber Air</label>
			<input type="text" name="sumber_air" class="form-control" value="<?php echo $row['sumber_air']; ?>">			
		</div>
		
		<div class="form-group">
			<label>Masa Panen</label>
			<input type="text" name="masa_panen" class="form-control" value="<?php echo $row['masa_panen']; ?>">			
		</div>
		
		<div class="form-group">
			<label>Harga Jual</label>
			<input type="text" name="harga_jual" class="form-control" value="<?php echo $row['harga_jual']; ?>">			
		</div>
		<button type="submit" class="btn btn-success btn-block container" style="width:30%">Update Data</button>

		<?php 
		}
		mysqli_close($conn);
		?>				
	</form>
</div>


</body>
</html> 