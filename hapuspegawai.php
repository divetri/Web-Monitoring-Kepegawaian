<?php 
include 'header.php';
include 'koneksi.php';
$nip = $_GET['nip'];
$qq=mysqli_query($sambungan,"DELETE FROM gaji WHERE nip_karyawan = '$nip'");
$qqqq=mysqli_query($sambungan,"DELETE FROM anak WHERE nip_karyawan = '$nip'");
$qq=mysqli_query($sambungan,"DELETE FROM pasang WHERE nip_karyawan = '$nip'");
$qqq=mysqli_query($sambungan,"DELETE FROM pangkat WHERE nip_karyawan = '$nip'");
$qhapus=mysqli_query($sambungan,"DELETE FROM karyawan WHERE nip = '$nip'");

   if($qhapus){
     echo "<script type='text/javascript'>alert('Data Berhasil Dihapus')</script>";
     echo "<meta http-equiv=refresh content=0;url=pegawai.php>";
   }
   else{
     echo "<script type='text/javascript'>alert('Gagal Dihapus..!')</script>";
     echo "<meta http-equiv=refresh content=0;url=pegawai.php>";
   }
?>