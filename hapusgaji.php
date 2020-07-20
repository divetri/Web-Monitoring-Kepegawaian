<?php 
include 'header.php';
include 'koneksi.php';
$nip = $_GET['nip'];
$q1=mysqli_query($sambungan, "SELECT * From gaji where nip_karyawan='$nip'");
$data = mysqli_fetch_array($q1);
$query=mysqli_query($sambungan, "update karyawan set gajipokok='$data[2]' where nip='$nip'");
$pegaji = date('Y-m-d', strtotime('+2 year', strtotime($data[1])));
$qgaji=mysqli_query($sambungan, "update gaji set periode='$pegaji' where nip_karyawan='$nip'");

   if($query){
     echo "<script type='text/javascript'>alert('Data Berhasil Dihapus')</script>";
     echo "<meta http-equiv=refresh content=0;url=home.php>";
   }
   else{
     echo "<script type='text/javascript'>alert('Gagal Dihapus..!')</script>";
     echo "<meta http-equiv=refresh content=0;url=home.php>";
   }
?>