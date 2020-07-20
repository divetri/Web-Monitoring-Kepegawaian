<?php
include 'koneksi.php';
	$nip=$_POST['nip'];
	$gaji_baru=$_POST['gaji_baru'];
	$periode=$_POST['periode'];
	

$query=mysqli_query($sambungan, "update gaji set periode='$periode', gaji_baru='$gaji_baru' where nip_karyawan='$nip'");

if($query)
{
	echo" <script> window.alert('Data Berhasil Diinput');
    window.location = 'gaji.php?nip=$nip';
    </script>";
}
else
{
	echo" <script> window.alert('Data Gagal Diinput');
    window.location = 'editgaji.php?nip=$nip';
    </script>";
}
?>