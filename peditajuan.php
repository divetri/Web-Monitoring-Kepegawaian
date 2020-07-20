<?php
include 'koneksi.php';
	$nip=$_POST['nip'];
	$uskp=$_POST['uskp'];
	$usulan_golongan=$_POST['usulan_golongan'];
	$usulan_kredit=$_POST['usulan_kredit'];
	$periode=$_POST['periode'];
	

$query=mysqli_query($sambungan, "update pangkat set periode='$periode', uskp='$uskp', usulan_golongan='$usulan_golongan', usulan_kredit='$usulan_kredit' where nip_karyawan='$nip'");

if($query)
{
	echo" <script> window.alert('Data Berhasil Diinput');
    window.location = 'ajuan.php?nip=$nip';
    </script>";
}
else
{
	echo" <script> window.alert('Data Gagal Diinput');
    window.location = 'editajuan.php?nip=$nip';
    </script>";
}
?>