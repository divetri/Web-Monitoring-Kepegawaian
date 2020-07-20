<?php
include "header.php";
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
		width: 600px;
		padding: 10px 10px 50px 10px;
	}
	</style>

</head>
<body>
	<div class="container">
	<center>
	
		<form action="ppegawaibaru.php" method="post">
		<h3>Tambah Pegawai Baru</h3>
		<table>
			<tr>
				<td>NIP</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nip" placeholder="NIP"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="nama" placeholder="Nama Lengkap"></td>
			</tr>
			<tr>
				<td>Pangkat/Golongan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="golongan" placeholder="Pangkat/Golongan"></td>
			</tr>
			<tr>
				<td>Kredit</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="kredit" placeholder="Kredit"></td>
			</tr>
			<tr>
				<td>Jabatan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jabatan" placeholder="Jabatan"></td>
			</tr>
			<tr>
				<td>TMT Jabatan / TMT Gaji</td>
				<td>:</td>
				<td><input class="form-control" type="date" name="thn_pangkat"></td>
				<td><input class="form-control" type="date" name="tmtgaji"></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="temp_lahir" placeholder="Tempat"></td> <td><input class="form-control" type="date" name="ttl"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jk" placeholder="P/L"></td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="agama" placeholder="Agama"></td>
			</tr>
			<tr>
				<td>Kebangsaan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="kebangsaan" placeholder="Kebangsaan"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="alamat" placeholder="Alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><input class="form-control" type="text" name="rt_rw" placeholder="RT/RW"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><input class="form-control" type="text" name="desa" placeholder="Desa"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><input class="form-control" type="text" name="camat" placeholder="Kecamatan"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td colspan="2"><input class="form-control" type="text" name="kota" placeholder="Kabupaten/Kota"></td>
			</tr>
			<tr>
				<td>Pendidikan Terakhir</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="pendidikan" placeholder="Pendidikan Terakhir"></td>
			</tr>
			<tr>
				<td>Atasan</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="atasan" placeholder="Nama Atasan"></td><td><input class="form-control" type="text" name="nip_atasan" placeholder="NIP Atasan"></td>
			</tr>
			<tr>
				<td>TMT Capeg</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="date" name="tmt_capeg"></td>
			</tr>
			<tr>
				<td>Jenis Kepegawaian</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jenis_peg" placeholder="Jenis Kepegawaian"></td>
			</tr>
			<tr>
				<td>Status Kepegawaian</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="status_peg" placeholder="Status Kepegawaian"></td>
			</tr>
			<tr>
				<td>Digaji Menurut (PP/SK)</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="ppsk" placeholder="PP/SK"></td>
				<td><input class="form-control" type="number" name="gajipokok" placeholder="Gaji Pokok"></td>
			</tr>
			<tr>
				<td>Penghasilan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="number" name="penghasilan" placeholder="Penghasilan"></td>
			</tr>
			<tr>
				<td>Jabatan Struktural</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="jab_struk" placeholder="Jabatan Struktural"></td>
			</tr>
			<tr>
				<td>Jumlah Tanggungan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="number" name="tetanggung" placeholder="Jumlah Tanggungan"></td>
			</tr>
			<tr>
				<td>SK Terakhir</td>
				<td>:</td>
				<td><input class="form-control" type="text" name="sk_akhir" placeholder="SK Terakhir"></td>
				<td><input class="form-control" type="date" name="tgl_sk_akhir"></td>
			</tr>
			<tr>
				<td>Masa Kerja Golongan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="masa_gol" placeholder="Masa Kerja Golongan"></td>
			</tr>
			<tr>
				<td>Masa Kerja Keseluruhan</td>
				<td>:</td>
				<td colspan="2"><input class="form-control" type="text" name="masa_sel" placeholder="Masa Kerja Keseluruhan"></td>
			</tr>
			
			
		</table><br>
	
				<input class="btn btn-primary" type="Reset" Value="Reset" value="Reset">		<input class="btn btn-primary" type="submit" name="submit" value="Simpan">
				</form>
	</center>
	</div>
</body>
</html>