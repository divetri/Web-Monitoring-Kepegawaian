<?php 
include 'header.php';
include "koneksi.php";
		if(isset($_GET['cari'])){
		$cari=$_GET['cari'];
		$query_mysql = mysqli_query($sambungan,"SELECT * from karyawan where nip like'%".$cari."%' OR nama like'%".$cari."%'")or die(mysql_error());
		}else{
				$query_mysql = mysqli_query($sambungan,"SELECT * from karyawan");	
		}
?>
<html>
<head>
	<title>DAFTAR NOMINATIF USULAN KENAIKAN PANGKAT</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
	<style type="text/css">
		.jumbotron{
			background: #2F495A; 
		}
		.container{
			background: white;
			border-radius: 5px;
			padding: 50px 20px 20px 20px;
		}
		table{
			font-size: 14px;
		}
		body{
            background-color: powderblue !important;
        }
        .hapus{
        	color: red !important;
        	font-size: 14px;
        }
        .edit{
        	color: blue !important;
        	font-size: 14px;
        }
        .btn{
        	font-size: 12px;
        }
	</style>
  	
</head>
<body>
<div class="jumbotron">
<center><h3 style="color: white">Daftar Pegawai</h3></center>
	<div class="container">
	<?php
	if(isset($_GET['cari'])&&$_GET['cari']!=''){
		?><form class="search" style="float: right;"><b style="color: darkorange">Cari Nama atau NIP Pegawai</b><input type="text" class="form-control" name="cari" value="<?php echo $cari?>" placeholder="'siti' atau '12345'" width="200px"></form><br>
		<?php
		print "<b>Hasil pencarian dari '$cari' </b>";
		}else{?>
		<form class="search" style="float: right;"><b style="color: darkorange">Cari Nama atau NIP Pegawai</b><input type="text" class="form-control" name="cari" placeholder="'siti' atau '12345'" width="200px"></form><br><?php
		}?>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIP</th>
			<th>Pangkat/Golongan</th>
			<th>Jabatan</th>
			<th>Keterangan</th>
			<th>Print</th>
			<th>Opsi</th>	
		</tr>
		<?php 
		$nomor = 1;
		while($dkar = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $dkar[1]; ?></td>
			<td><?php echo $dkar[0]; ?></td>
			<td><?php echo $dkar[12];?></td>
			<td><?php echo $dkar[11]; ?></td>
			<td><a class="btn btn-success" href="lengkap.php?nip=<?php echo $dkar[0]; ?>">Lihat Selengkapnya</a></td>
			<td><a class="btn btn-primary" href="printskum.php?nip=<?php echo $dkar[0]; ?>">SKUM</a>		<a class="btn btn-primary" href="printtanggungan.php?nip=<?php echo $dkar[0]; ?>">Tanggungan</a></td>
			<td><a class="hapus" href="hapuspegawai.php?nip=<?php echo $dkar[0]; ?>">Hapus</a>	<a class="edit" href="editpegawai.php?nip=<?php echo $dkar[0]; ?>">Edit</a></td>
		</tr>
		<?php } ?>
	</table>
	<center><a class="btn btn-primary" href="pegawaibaru.php">New Entry</a></center>
	</div>
</body>
</div>
</html>