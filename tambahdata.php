<!DOCTYPE html>
<html lang="en">
<head>
	<title>sumberbrantas.com</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Arcade - Architecture Template">
	<meta name="keywords" content="arcade, architecture, onepage, creative, html">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
	
</head>
<body>
<header class="header-area"style="background-color:black">
		<a href="index.php" class="logo-area">
			<img src="img/kebun.png" alt="" width="150" height="100">
		</a>
		<div class="nav-switch" >
			<i class="fa fa-bars" style="background-color:black"></i>
		</div>
		<div class="phone-number" >+62 821 8304 2094</div>
		<nav class="nav-menu" >
			<ul>
				<li class="active"><a href="index.html">Home</a></li>
				<li><a href="data.html">Data Perkebunan</a></li>
				<li><a href="peta.html">Peta Perkebunan</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="crud.php">Data Lahan</a></li>
			</ul>
		</nav>
	</header>
	<footer class="footer-section">
	</footer>
<div id="wrapper">

	<?php
	//tambahkan dbconnect
	include('dbconnect.php');

	//query
	$query = "SELECT * FROM data";

	$result = mysqli_query($conn , $query);

	?>

	  <div class="container" style="padding-top: 15px; padding-bottom: 15px;">
		<h3 style="text-align:center">Peta Perkebunan Sumber Brantas</h3>
		<hr>
		<div class="row" >
		<h3 style="text-align:center">Form Tambah Data</h3>
			<div class="container" style="text-align:center">	
				<form role="form" action="insert.php" method="post" class="container" style="width:40%">
					<div class="form-group" style="text-align:center">
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
					<button type="submit" class="btn btn-info btn-block container" style="width:30%">Tambah Data</button>					
				</form>
			</div>
			<!--<div class="col-sm-1">
				<h3>Tabel Data Pemetaan</h3>
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
			</div>-->
			
		</div>
		
		
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