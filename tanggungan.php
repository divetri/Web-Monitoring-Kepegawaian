<?php 
include 'header.php';
include 'koneksi.php';
include 'tgl_indo.php';
?>
<html>
<head>
	<title>DAFTAR TANGGUNGAN PEGAWAI</title>
	  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.jumbotron{
			background: #2F495A; 
			border-radius: 5px;
			margin: 10px 10px 10px 10px;
			padding: 20px 20px 20px 20px;
		}
		table{
			font-size: 12px;
		}
		.container{
			background: white;
			border-radius: 5px;
			margin: 10px auto;
			padding: 20px 20px 20px 20px;

		}
		body{
            background-color: powderblue !important;

        }
        .hapus{
        	color: red !important;
        }
        .edit{
        	color: blue !important;
        }
	</style>

</head>
<body><?php
$nip=$_GET['nip'];
$query= mysqli_query($sambungan,"SELECT * from karyawan where nip= $nip");
$m=mysqli_fetch_array($query);?>
<div class="jumbotron" style="float: left; width:18%;">
	<center><h3  style="color: darkorange">Data Pegawai</h3>
	<table style="font-size: 14; color: white">
		<tr>
			<td>Nama Pegawai</td>
			<td>: <?php echo $m[1];?></td>
		</tr>
		<tr>
			<td>NIP</td>
			<td>: <?php echo $m[0];?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>: <?php echo $m[11];?></td>
		</tr>
	</table></center>
</div>
<div class="jumbotron" style="float: right; width:78%;">
<center><h3 style="color: white">Daftar Tanggungan Pegawai</h3>
<a class="btn btn-primary" href="printtanggungan.php" style="background-color: darkorange">Print Daftar Tanggungan</a></center>
	<h4 style="color: darkorange">Istri / Suami</h4>
	<div class="container">
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama Istri/Suami</th>
			<th colspan="2">Tempat, Tanggal Lahir</th>
			<th>Pekerjaan</th>
			<th>Tanggal Perkawinan</th>
			<th>Istri/Suami Ke</th>
			<th>Cerai/Putusan Pengadilan Tgl.</th>
			<th>Keterangan</th>
			<th>Opsi</th>	
		</tr>
		<?php 
		$query_mysql = mysqli_query($sambungan,"SELECT * from pasang where nip_karyawan= $nip")or die(mysql_error());
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data[2]; ?></td>
			<td><?php echo $data[3]; ?></td>
			<td><?php echo tgl_indo($data[4]); ?></td>
			<td><?php echo $data[5]; ?></td>
			<td><?php echo tgl_indo($data[6]); ?></td>
			<td><?php echo $data[7]; ?></td>
			<td><?php echo tgl_indo($data[8]); ?></td>
			<td><?php echo $data[9]; ?></td>
			<td><a class="hapus" href="hapuspasang.php?id=<?php echo $data[0]; ?>">Hapus</a><br><a class="edit" href="editpasang.php?id=<?php echo $data[0]; ?>">Edit</a></td>
		</tr>
		<?php } ?>
	</table>
	<center><a class="btn-sm btn-primary" href="pasangbaru.php?id=<?php echo $m[0]?>">New Entry</a></center>
	</div><br>
	<h4 style="color: darkorange">Anak - Anak	</h4>
	<div class="container">
	<h4 style="color: darkorange">Anak - Anak yang Mendapat Tunjangan</h4>
	<table border="1" class="table">
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Anak</th>
			<th rowspan="2" colspan="2">Tempat, Tanggal Lahir</th>
			<th rowspan="2">L/P</th>
			<th rowspan="2">Status</th>
			<th rowspan="2">Dari Istri Ke-</th>
			<th colspan="2">Sudah/Belum</th>
			<th rowspan="2">Pendidikan</th>
			<th rowspan="2">Tgl Kelulusan Studi</th>
			<th rowspan="2">Putusan Pengadilan</th>
			<th rowspan="2">Opsi</th>	
		</tr>
		<tr>
			<td>Kawin Tgl</td>
			<td>Bekerja Tgl</td>
		</tr>
		<?php 
		$query_mysql = mysqli_query($sambungan,"SELECT * from anak where nip_karyawan= $nip and tunjangan='y'")or die(mysql_error());
		$nomor = 1;
		while($fata = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $fata[2]; ?></td>
			<td><?php echo $fata[3]; ?></td>
			<td><?php echo tgl_indo($fata[4]); ?></td>
			<td><?php echo $fata[5]; ?></td>
			<td><?php echo $fata[6]; ?></td>
			<td><?php echo $fata[7]; ?></td>
			<td><?php echo tgl_indo($fata[8]); ?></td>
			<td><?php echo tgl_indo($fata[9]); ?></td>
			<td><?php echo $fata[10]; ?></td>
			<td><?php echo tgl_indo($fata[11]); ?></td>
			<td><?php echo $fata[12]; ?></td>
			<td><a class="hapus" href="hapusanak.php?id=<?php echo $fata[0]; ?>">Hapus</a><br><a class="edit" href="editanak.php?id=<?php echo $fata[0]; ?>">Edit</a></td>
		</tr><br>

		<?php } ?>
	</table>

	<h4 style="color: darkorange">Anak - Anak yang Tidak Mendapat Tunjangan</h4>
	<table border="1" class="table">
		<tr>
			<th rowspan="2">No</th>
			<th rowspan="2">Nama Anak</th>
			<th rowspan="2" colspan="2">Tempat, Tanggal Lahir</th>
			<th rowspan="2">L/P</th>
			<th rowspan="2">Status</th>
			<th rowspan="2">Dari Istri Ke-</th>
			<th colspan="2">Sudah/Belum</th>
			<th rowspan="2">Pendidikan</th>
			<th rowspan="2">Tgl Kelulusan Studi</th>
			<th rowspan="2">Putusan Pengadilan</th>
			<th rowspan="2">Opsi</th>	
		</tr>
		<tr>
			<td>Kawin Tgl</td>
			<td>Bekerja Tgl</td>
		</tr>
		<?php 
		$query_mysql = mysqli_query($sambungan,"SELECT * from anak where nip_karyawan= $nip and tunjangan='t'")or die(mysql_error());
		$nomor = 1;
		while($gata = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $gata[2]; ?></td>
			<td><?php echo $gata[3]; ?></td>
			<td><?php echo tgl_indo($gata[4]); ?></td>
			<td><?php echo $gata[5]; ?></td>
			<td><?php echo $gata[6]; ?></td>
			<td><?php echo $gata[7]; ?></td>
			<td><?php echo tgl_indo($gata[8]); ?></td>
			<td><?php echo tgl_indo($gata[9]); ?></td>
			<td><?php echo $gata[10]; ?></td>
			<td><?php echo tgl_indo($gata[11]); ?></td>
			<td><?php echo $gata[12]; ?></td>
			<td><a class="hapus" href="hapusanak.php?nip=<?php echo $gata[0]; ?>">Hapus</a><br><a class="edit" href="editanak.php?nip=<?php echo $gata[0]; ?>">Edit</a></td>
		</tr><br>
		<?php } ?>
		</table>
		<center><a class="btn-sm btn-primary" href="anakbaru.php?id=<?php echo $m[0]?>">Input Anak Baru</a></center>
	</div>
	
</body>
</html>