<?php 
include 'header.php';
include 'koneksi.php';
$nip = $_GET['nip'];
$q1=mysqli_query($sambungan, "SELECT * From pangkat where nip_karyawan='$nip'");
$data = mysqli_fetch_array($q1);
$query=mysqli_query($sambungan, "update karyawan set thn_pangkat='$data[1]', golongan='$data[3]', kredit='$data[4]' where nip='$nip'");
$pepangkat = date('Y-m-d', strtotime('+4 year', strtotime($data[1])));
$qpangkat=mysqli_query($sambungan, "update pangkat set periode='$pepangkat' where nip_karyawan='$nip'");

   if($query){
     echo "<script type='text/javascript'>alert('Data Berhasil Dihapus')</script>";
     echo "<meta http-equiv=refresh content=0;url=home.php>";
   }
   else{
     echo "<script type='text/javascript'>alert('Gagal Dihapus..!')</script>";
     echo "<meta http-equiv=refresh content=0;url=home.php>";
   }
?>