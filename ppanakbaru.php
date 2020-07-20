<?php
include 'header.php';
include 'koneksi.php';
	$nip=$_POST['nip'];
	$nama=$_POST['nama'];
	$temp=$_POST['temp'];
	$tgl=$_POST['ttl'];
	$jk=$_POST['jk'];
	$sts=$_POST['sts'];
	$istri=$_POST['istri'];
	$kawin=$_POST['kawin'];
	$kerja=$_POST['kerja'];
	$sekolah=$_POST['sekolah'];
	$lulus=$_POST['lulus'];
	$putusan=$_POST['putusan'];
	$tunjangan=$_POST['tunjangan'];
	
	

$query=mysqli_query($sambungan, "insert into anak values('','$nip','$nama','$temp','$tgl','$jk','$sts','$istri','$kawin','$kerja','$sekolah','$lulus','$putusan','$tunjangan')");
if($query)
{
	echo" <script> window.alert('Data Berhasil Diinput');
    window.location = 'tanggungan.php?nip=$nip';
    </script>";
}
else
{
	echo" <script> window.alert('Data Gagal Diinput');
    window.location = 'anakbaru.php?id=$nip';
    </script>";
}
?>