<?php 
include 'header.php';
include 'koneksi.php';

?>
<html>
<head>
	<title>LOGIN</title>
	  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		body{
            background-color: powderblue !important;
        }
        form{
        	font-size: 25px;
		color: white;
		background: #2F495A;
		margin: 10px auto;
		padding: 50px 20px 50px 20px;
		border-radius: 5px;
        }
        table {
		color: white;
		width: 900px;
		padding: 10px 10px 50px 10px;
	}
	</style>

</head>
<body>
<?php 
	$gnip = $_GET['nip'];
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
		on gaj.nip_karyawan=kar.nip where gaj.nip_karyawan='$gnip'");
	$data=mysqli_fetch_array($query_mysql);
	?>
	<div class="container">
	<center>
	
		<form action="peditgaji.php" method="post" enctype="multipart/form-data">
		<h3>Edit Pegawai</h3>
		<table>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nip" value="<?php echo $data[3]; ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nama" value="<?php echo $data[0]; ?> "readonly></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jabatan" value="<?php echo $data[4]; ?>" readonly></td>
			</tr>
			<tr>
				<td>TMT</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="thn_pangkat" value="<?php echo $data[8]; ?>" readonly></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="temp_lahir" value="<?php echo $data[1]; ?>" readonly></td><td><input class="form-control" type="date" name="ttl" value="<?php echo $data[2]; ?>" readonly></td>
			</tr>
			<tr>
				<td>Pendidikan Terakhir</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="pendidikan" value="<?php echo $data[5]; ?>" readonly></td>
			</tr>
			<tr>
				<td>Atasan</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="atasan" value="<?php echo $data[7]; ?>"readonly></td><td><input class="form-control" type="text" name="nip_atasan" value="<?php echo $data[6]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Gaji</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="gajipokok" value="<?php echo $data[10];?>" readonly></td>
			</tr>
			<tr>
				<td>Gaji Usulan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="gaji_baru" value="<?php echo $data[11]; ?>"></td>
			</tr><tr>
				<td>TMT Usulan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="periode" value="<?php echo $data[9]; ?>"></td>
			</tr>
		</table><br>
	
				<input class="btn btn-primary" type="Reset" Value="Reset" value="Reset">		<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
				</form>

	</center>
	</div>
</body>
</html>