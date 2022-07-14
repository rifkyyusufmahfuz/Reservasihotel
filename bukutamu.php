<!DOCTYPE html>
<html lang="en">
<head>
	<title>Buku Tamu</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


	<?php
	include "koneksi.php";

	$sql=mysqli_query($koneksi,"select * from tamu order by nomor desc");
	?>


	<div class="container">
		<h2>Buku Tamu OceanHotel</h2>
		<p>Daftar Buku Tamu OceanHotel</p>
		<input type="button" value="Input Tamu" onClick="document.location='input.php'" class="btn-primary"><br /><br>
		<div class="table-responsive-sm">
			<table class="table table-hover">

				<thead class="bg-primary text-white" align="center">
					<th colspan="10">BUKU TAMU</th>

				</thead>

				<tr align="center" class="table-dark text-dark">
					<th>No</th>
					<th>NIK KTP</th>
					<th>Nama Tamu</th>
					<th>Jenis Kelamin</th>
					<th>Usia</th>
					<th>Nomor Telepon</th>
					<th>Email</th>
					<th>Nomor Kamar</th>
					<th>Jam Check In</th>
					<th>Aksi</th>
				</tr>

				<?php
				$i=1;
				while ($res=mysqli_fetch_array($sql)) 
				{
					?>

					<tr>
						<td><?php echo $i?></td> 
						<td><?php echo $res['nik'] ?></td>
						<td width="30%" align="center"><?php echo $res['nama_tamu'] ?></td>
						<td align="center"><?php echo $res['jenis_kelamin'] ?></td>
						<td align="center"><?php echo $res['usia'] ?></td>
						<td align="center"><?php echo $res['no_tlp'] ?></td>
						<td align="center"><?php echo $res['email'] ?></td>
						<td align="center"><?php echo $res['nokamar'] ?></td>
						<td width="" align="center"><?php echo $res['jam_checkin'] ?></td>


						<td width="30%"><div align="center">
							<a href="edit.php?kdtamu=<?php echo $res['nomor'];?>"><input type="button" value="Edit" class="btn btn-warning btn-sm"></a>
							<a href="hapus.php?kdhapus=<?php echo $res['nomor'];?>"><input type="button" class="btn btn-danger btn-sm" value="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"/></a>
						</div></td>
					</tr>

					<?php
					$i++;} ?>
				</table>