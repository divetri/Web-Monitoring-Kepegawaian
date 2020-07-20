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
	
		<form action="ppanakbaru.php" method="post">
		<h3>Input Anak Baru</h3>
		<table style="color: white; font-size: 16px;">
			<tr>
				<td>Nama Pegawai</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nip" value="<?php echo $m[0]?>" readonly></td>
			</tr>
			<tr>
				<td>Nama Anak</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anak"></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="temp" placeholder="Tempat"></td> <td><input class="form-control" type="date" name="ttl"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td colspan="2"><select class="form-control" name="jk">
					<option value="L" class="form-control">Laki-Laki</option>
					<option value="P" class="form-control">Perempuan</option>
				</select></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="sts" placeholder="Isi AK, AT, atau AA"></td>
			</tr>
			<tr><td colspan="2"></td><td style="font-size: 12px"align="center">AK= Anak Kandung; AT= Anak Tiri; AA= Anak Angkat</td></tr>
			<tr>
				<td>Dari Istri Ke-</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="number" name="istri" value="Istri Ke-" placeholder="Anak Dari Istri Ke-"></td>
			</tr>
			<tr>
				<td>Tanggal Kawin*</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="kawin"></td>
			</tr>
			<tr>
				<td>Tanggal Kerja*</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="kerja"></td>
			</tr>
			<tr>
				<td>Pendidikan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="sekolah" placeholder="SD/SMP/SMU/Kuliah"></td>
			</tr>
			<tr>
				<td>Tanggal Lulus Studi</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="lulus"></td>
			</tr>
			<tr>
				<td>Putusan Pengadilan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="putusan" placeholder="Putusan Pengadiilan"></td>
			</tr>
			<tr>
				<td>Tunjangan</td>
				<td>:</td>
				<td colspan="2"><select class="form-control" name="tunjangan">
					<option value="y" class="form-control">Dapat</option>
					<option value="t" class="form-control">Tidak Mendapat</option>
				</select></td>
			</tr>
		</table><br>
			*) Kosongi yang tidak perlu<br><br>
				<input class="btn btn-primary" type="Reset" Value="Reset" value="Reset">		<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
				</form>
	</center>
	</div>
</body>
</html>