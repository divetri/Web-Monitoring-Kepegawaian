<?php
include 'header.php';
include 'koneksi.php';
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$temp=$_POST['temp'];
	$tgl=$_POST['tgl'];
	$kerja=$_POST['kerja'];
	$tgl_kawin=$_POST['tgl_kawin'];
	$ke=$_POST['ke'];
	$cerai=$_POST['cerai'];
	$ket=$_POST['ket'];
	
	

$query=mysqli_query($sambungan, "insert into pasang values('','$nip','$nama','$temp','$tgl','$kerja','$tgl_kawin','$ke','$cerai','$ket')");
if($query)
{
	echo" <script> window.alert('Data Berhasil Diinput');
    window.location = 'tanggungan.php?nip=$nip';
    </script>";
}
else
{
	echo" <script> window.alert('Data Gagal Diinput');
    window.location = 'pasangbaru.php?nip=$nip';
    </script>";
}
?>