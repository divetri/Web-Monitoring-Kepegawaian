<?php 
include 'header.php';
include "koneksi.php";
if(isset($_GET['cari'])){
		$cari=$_GET['cari'];
		$query_mysql = mysqli_query($sambungan,"SELECT
		kar.nama,
		kar.temp_lahir,
		kar.tgl_lahir,
		pan.nip_karyawan,
		kar.jabatan,
		kar.pendidikan,
		kar.nip_atasan,
		kar.nama_atasan,
		pan.uskp,
		kar.golongan,
		kar.kredit,
		kar.thn_pangkat,
		pan.usulan_golongan,
		pan.usulan_kredit,
		pan.periode
		from pangkat pan
		inner join karyawan kar
		on pan.nip_karyawan=kar.nip where pan.periode like'%".$cari."%' OR kar.nama like'%".$cari."%'")or die(mysql_error());
		}else{
				$query_mysql = mysqli_query($sambungan,"SELECT
		kar.nama,
		kar.temp_lahir,
		kar.tgl_lahir,
		pan.nip_karyawan,
		kar.jabatan,
		kar.pendidikan,
		kar.nip_atasan,
		kar.nama_atasan,
		pan.uskp,
		kar.golongan,
		kar.kredit,
		kar.thn_pangkat,
		pan.usulan_golongan,
		pan.usulan_kredit,
		pan.periode
		from pangkat pan
		inner join karyawan kar
		on pan.nip_karyawan=kar.nip")or die(mysql_error());	
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
		table{
			font-size: 14px;
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
        .hapus{
        	color: red !important;
        }
        .edit{
        	color: blue !important;
        }
	</style>

</head>
<body>
<div class="jumbotron">
<center><h3 style="color: white">Daftar Usulan Kenaikan Pangkat</h3></center>
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
			<th rowspan="2">No</th>
			<th rowspan="2">Nama, Tempat/Tanggal Lahir</th>
			<th rowspan="2">NIP</th>
			<th rowspan="2">Jabatan</th>
			<th rowspan="2">Pendidikan Terakhir</th>
			<th rowspan="2">Atasan Langsung<br>NIP</th>
			<th rowspan="2">Usulan Sistem Kenaikan Pangkat</th>
			<th colspan="2"style="width: 100px;">Pangkat</th>
			<th rowspan="2">Print</th>
			<th rowspan="2">Opsi</th>	
		</tr>
		<tr>
			<td>Lama</td>
			<td>Baru</td>
		</tr>
		<?php 
		
		$nomor = 1;
		while($data = mysqli_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data[0]; print"<br>"; echo $data[1]; print",<br>"; echo date("d M Y", strtotime($data[2]));?></td>
			<td><?php echo $data[3]; ?></td>
			<td><?php echo $data[4]; ?></td>
			<td><?php echo $data[5]; ?></td>
			<td><?php echo $data[7]; print "<br>"; echo $data[6]; ?></td>
			<td><?php echo $data[8]; ?></td>
			<td><?php echo $data[9]; print "<br>"; echo $data[10]; print "<br>"; echo date("d M Y", strtotime($data[11])); ?></td>
			<td><?php echo $data[12]; print "<br>"; echo $data[13]; print "<br>"; echo date("d M Y", strtotime($data[14])); ?></td>
			<td><a class="btn-sm btn-primary" href="skp.php?nip=<?php echo $data[3]; ?>">SKP</td>
			<td><a class="hapus" href="hapusajuan.php?nip=<?php echo $data[3]; ?>">Hapus</a><br><a class="edit" href="editajuan.php?nip=<?php echo $data[3]; ?>">Edit</a></td>
		</tr>
		<?php } ?>
	</table>
	</div>
	</div>
</body>
</html>