<?php 
include 'header.php';
include "koneksi.php";
if(isset($_GET['cari'])){
		$cari=$_GET['cari'];
		$query_mysql = mysqli_query($sambungan,"SELECT
		kar.nama,
		kar.temp_lahir,
		kar.tgl_lahir,
		gaj.nip_karyawan,
		kar.jabatan,
		kar.pendidikan,
		kar.nip_atasan,
		kar.nama_atasan,
		kar.thn_pangkat,
		gaj.periode,
		kar.gajipokok,
		gaj.gaji_baru
		from gaji gaj
		inner join karyawan kar
		on gaj.nip_karyawan=kar.nip where gaj.periode like'%".$cari."%' OR kar.nama like'%".$cari."%'")or die(mysql_error());
		}else{
				$query_mysql = mysqli_query($sambungan,"SELECT
		kar.nama,
		kar.temp_lahir,
		kar.tgl_lahir,
		gaj.nip_karyawan,
		kar.jabatan,
		kar.pendidikan,
		kar.nip_atasan,
		kar.nama_atasan,
		kar.thn_pangkat,
		gaj.periode,
		kar.gajipokok,
		gaj.gaji_baru
		from gaji gaj
		inner join karyawan kar
		on gaj.nip_karyawan=kar.nip");	
		}
?>
<html>
<head>
	<title>DAFTAR NOMINATIF USULAN KENAIKAN PANGKAT</title>
  	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
	.jumbotron{
			background: #2F495A; 
		}
		.container{
			background: white;
			border-radius: 5px;
			margin: 10px auto;
			padding: 50px 20px 50px 20px;
		}
		body{
            background-color: powderblue !important;
        }
        table{
        	font-size: 14px;
        }
        .hapus{
        	color: red !important;
        	font-size: 14px;
        }
        .edit{
        	color: blue !important;
        	font-size: 14px;
        }
	</style>
</head>
<body>
<div class="jumbotron">
<center><h3 style="color: white">Daftar Usulan Kenaikan Gaji Berkala</h3></center>
	<div class="container">
	<?php
	if(isset($_GET['cari'])&&$_GET['cari']!=''){
		?><form class="search" style="float: right;"><b style="color: darkorange">Cari Periode Kenaikan atau Nama</b><input type="text" class="form-control" name="cari" value="<?php echo $cari?>" placeholder="'2011' atau 'siti' lalu tekan enter "></form><br>
		<?php
		print "<b>Hasil pencarian dari '$cari' </b>";
		}else{?>
		<form class="search" style="float: right;"><b style="color: darkorange">Cari Periode Kenaikan atau Nama</b><input type="text" class="form-control" name="cari" placeholder="'2011' atau 'siti' lalu tekan enter "></form><br><?php
		}?>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama, Tempat/Tanggal Lahir</th>
			<th>NIP</th>
			<th>Jabatan</th>
			<th>Pendidikan Terakhir</th>
			<th>Atasan Langsung<br>NIP</th>
			<th style="width: 50px;">Gaji/TMT Lama</th>
			<th style="width: 50px;">Gaji/TMT Usulan</th>	
			<th>Print</th>
			<th>Opsi</th>	
		</tr>
		<?php 
		
		$nomor = 1;
		while($dgaj = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $dgaj[0]; print"<br>"; echo $dgaj[1]; print",<br>"; echo date("d M Y", strtotime($dgaj[2]));?></td>
			<td><?php echo $dgaj[3]; ?></td>
			<td><?php echo $dgaj[4]; ?></td>
			<td><?php echo $dgaj[5]; ?></td>
			<td><?php echo $dgaj[7]; print "<br>"; echo $dgaj[6]; ?></td>
			<td><?php echo $dgaj[10]; print"<br>";echo date("d-m-Y", strtotime($dgaj[8])); ?></td>
			<td><?php echo $dgaj[11]; print"<br>";echo date("d-m-Y", strtotime($dgaj[9])); ?></td>
			<td><a class="btn-sm btn-primary" href="skgb.php">SKGB</a></td>
			<td>
				<a class="hapus" href="hapusgaji.php?nip=<?php echo $dgaj[3]; ?>">Hapus</a><br><a class="edit" href="editgaji.php?nip=<?php echo $dgaj[3]; ?>">Edit</a></td>				
			</td>
		</tr>
		<?php } ?>
	</table>
	</div>
	</div>
</body>
</html>