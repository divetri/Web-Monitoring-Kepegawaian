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
        .container{
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
	.btn:hover{
		background-color: #2F495A;
	}
	</style>
</head>
<body>
<?php 
	$nip = $_GET['nip'];
	$query=mysqli_query($sambungan, "select * from karyawan where nip='$nip'");
	$data=mysqli_fetch_array($query);
	?>

	<div class="container">
	<div style="float: right; width: 10%;">
	<a style= "width: 100px;" class="btn btn-primary" href="printskum.php?nip=<?php echo $data[0]; ?>">Print SKUM</a><br>
	<a style= "width: 100px;" class="btn btn-primary" href="editpegawai.php?nip=<?php echo $data[0]; ?>">Edit Data</a></div>
	<div style="float: left; width: 90%;">
	<center>
		<h3>Data Pegawai</h3>
		<table>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nip" value="<?php echo $data[0]; ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nama" value="<?php echo $data[1]; ?>" readonly></td>
			</tr>
			<tr>
				<td>Pangkat/Golongan</td>		
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="golongan" value="<?php echo $data[12]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Kredit</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="kredit" value="<?php echo $data[14]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jabatan" value="<?php echo $data[11]; ?>"readonly></td>
			</tr>
			<tr>
				<td>TMT Golongan / TMT Gaji</td>
				<td>:</td>
				<td><input class="form-control" type="date" name="thn_pangkat" value="<?php echo $data[13]; ?>"readonly></td>
				<td><input class="form-control" type="date" name="tmtgaji" value="<?php echo $data[31]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="temp_lahir" value="<?php echo $data[2]; ?>"readonly></td><td><input class="form-control" type="date" name="ttl" value="<?php echo $data[3]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jk" value="<?php echo $data[30]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="agama" value="<?php echo $data[4]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Kebangsaan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="kebangsaan" value="<?php echo $data[5]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="alamat" value="<?php echo $data[6]; ?>"readonly></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><input class="form-control" type="text" name="rt_rw" value="<?php echo $data[7]; ?>"readonly></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><input class="form-control" type="text" name="desa" value="<?php echo $data[8]; ?>"readonly></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><input class="form-control" type="text" name="camat" value="<?php echo $data[9]; ?>"readonly></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><input class="form-control" type="text" name="kota" value="<?php echo $data[10]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Pendidikan Terakhir</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="pendidikan" value="<?php echo $data[15]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Atasan</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="atasan" value="<?php echo $data[16]; ?>"readonly></td><td><input class="form-control" type="text" name="nip_atasan" value="<?php echo $data[17]; ?>"readonly></td>
			</tr>
			<tr>
				<td>TMT Capeg</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="tmt_capeg" value="<?php echo $data[18]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Jenis Kepegawaian</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jenis_peg" value="<?php echo $data[19];?>"readonly></td>
			</tr>
			<tr>
				<td>Status Kepegawaian</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="status_peg" value="<?php echo $data[20]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Digaji Menurut (PP/SK)</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="ppsk" value="<?php echo $data[21]; ?>"readonly></td>
				<td><input class="form-control" type="number" name="gajipokok" value="<?php echo $data[22]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Penghasilan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="number" name="penghasilan" value="<?php echo $data[23]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Jabatan Struktural</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jab_struk" value="<?php echo $data[24]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Jumlah Tanggungan</td>
				<td>:</td>
				<td><input class="form-control" type="number" name="tetanggung" value="<?php echo $data[25]; ?>"readonly></td>
				<td><a style="width: 100%; background-color: darksalmon;" class="btn btn-default" href="tanggungan.php?nip=<?php echo $data[0]; ?>">Lihat Data Tanggungan</a></td>
			</tr>
			<tr>
				<td>SK Terakhir</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="sk_akhir" value="<?php echo $data[26]; ?>"readonly></td>
				<td><input class="form-control" type="date" name="tgl_sk_akhir" value="<?php echo $data[27]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Masa Kerja Golongan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="masa_gol" value="<?php echo $data[28]; ?>"readonly></td>
			</tr>
			<tr>
				<td>Masa Kerja Keseluruhan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="masa_sel" value="<?php echo $data[29]; ?>"readonly></td>
			</tr>
		</table><br>
		
	</center>
	</div>
</body>
</html>