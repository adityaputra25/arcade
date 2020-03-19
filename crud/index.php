<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Pemetaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">

</head>
<body>

	<?php
	//tambahkan dbconnect
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM data";

	$result = mysqli_query($conn , $query);

	?>

	<div class="container" style="padding-top: 15px; padding-bottom: 15px;">
		<h3 style="text-align:center">Crud APP Lahan</h3>
		<hr>
		<div class="row">
			
			<!--<div class="col-sm-2">
				<h3>Form Tambah Data</h3>
				<form role="form" action="insert.php" method="post">
					<div class="form-group">
						<label>Latitude</label>
						<input type="text" name="latitude" class="form-control">
					</div>
					<div class="form-group">
						<label>Longitude</label>
						<input type="text" name="longitude" class="form-control">
					</div>
					<div class="form-group">
						<label>Pemilik Lahan</label>
						<input type="text" name="pemilik_lahan" class="form-control">
					</div>
					<div class="form-group">
						<label>Luas Lahan</label>
						<input type="text" name="luas_lahan" class="form-control">
					</div>
					<div class="form-group">
						<label>Jenis Tanaman</label>
						<input type="text" name="jenis_tanaman" class="form-control">
					</div>
					<div class="form-group">
						<label>Umur Tanaman</label>
						<input type="text" name="umur_tanaman" class="form-control">
					</div>
					<div class="form-group">
						<label>Pupuk Tanaman</label>
						<input type="text" name="pupuk_tanaman" class="form-control">
					</div>
					<div class="form-group">
						<label>Sumber Air</label>
						<input type="text" name="sumber_air" class="form-control">
					</div>
					<div class="form-group">
						<label>Masa Panen</label>
						<input type="text" name="masa_panen" class="form-control">
					</div>
					<div class="form-group">
						<label>Harga Jual</label>
						<input type="text" name="harga_jual" class="form-control">
					</div>
					<button type="submit" class="btn btn-info btn-block">Tambah Data</button>					
				</form>
				
			</div>-->
			<h3 style="text-align:center" >Tabel Data Pemetaan</h3>
			
			<div class="col-sm-1">
			
				<table class="table table-striped table-hover dtabel">
					<thead>
						<tr>
							<th>No</th>
							<th>Latitude</th>
							<th>Longitude</th>
							<th>Pemilik Lahan</th>
							<th>Luas Lahan</th>
							<th>Jenis Tanaman</th>
							<th>Umur Tanaman</th>
							<th>Pupuk Tanaman</th>
							<th>Sumber Air</th>
							<th>Masa Panen</th>
							<th>Harga Jual</th>
						</tr>
					</thead>
					<tbody> 
						
						<?php
							$no = 1;
							while ($row = mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $row['latitude']; ?></td>
							<td><?php echo $row['longitude']; ?></td>
							<td><?php echo $row['pemilik_lahan']; ?></td>
							<td><?php echo $row['luas_lahan']; ?></td>
							<td><?php echo $row['jenis_tanaman']; ?></td>
							<td><?php echo $row['umur_tanaman']; ?></td>
							<td><?php echo $row['pupuk_tanaman']; ?></td>
							<td><?php echo $row['sumber_air']; ?></td>
							<td><?php echo $row['masa_panen']; ?></td>
							<td><?php echo $row['harga_jual']; ?></td>
							<td>
								<a href="editform.php?id=<?php echo $row['lahan'];?>" class="btn btn-success" role="button">Edit</a>
								<a href="delete.php?id=<?php echo $row['lahan']?>" class="btn btn-danger" role="button">Delete</a>
							</td>
						</tr>

						<?php
							}
							mysqli_close($conn); 
						?>
					</tbody>
				</table>
			</div>
			
		</div>
		<a href="tambahdata.php?id" class="btn btn-info btn-block" role="button">Tambah Data</a>
	</div>
</body>

	<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
	<script>
	$(document).ready(function() {
		$('.dtabel').DataTable();
	} );
	</script>

</html> 