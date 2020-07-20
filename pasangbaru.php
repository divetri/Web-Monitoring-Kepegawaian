<?php
include "header.php";
include "koneksi.php";
?>
<html>
<head>
	<title>LOGIN</title>
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
<body>
	<?php
	$nip=$_GET['id'];
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
	<div class="container" style="color: white; ">
	<center>
	
		<form action="ppasangbaru.php" method="post">
		<h3>Input Istri/Suami Baru</h3>
		<table style="color: white; font-size: 16px;">
			<tr>
				<td>Nama Pegawai</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nip" value="<?php echo $m[0]?>"></td>
			</tr>
			<tr>
				<td>Nama Istri/Suami</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Istri/Suami"></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="temp" placeholder="Tempat"></td> <td><input class="form-control" type="date" name="tgl"></td>
			</tr>
			<tr>
				<td>Pekerjaan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="kerja" placeholder="Pekerjaan"></td>
			</tr>
			<tr>
				<td>Tanggal Pernikahan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="tgl_kawin"></td>
			</tr>
			<tr>
				<td>Istri/Suami Ke</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="number" name="ke" placeholder="Istri/Suami Ke-"></td>
			</tr>
			<tr>
				<td>Tanggal Perceraian*</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="cerai"></td>
			</tr>
			<tr>
				<td>Keterangan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="ket" placeholder="Keterangan"></td>
			</tr>
		</table><br>
			*) Kosongi yang tidak perlu<br><br>
				<input class="btn btn-primary" type="Reset" Value="Reset" value="Reset">		<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
				</form>
	</center>
	</div>
</body>
</html>