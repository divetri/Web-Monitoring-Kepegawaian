<?php 
include 'header.php';
include 'koneksi.php';
$id = $_GET['id'];
$q1=mysqli_query($sambungan, "SELECT * From pasang where pasang.id='$id'");
$d=mysqli_fetch_array($q1);
$nip=$d[1];
$q2=mysqli_query($sambungan, "DELETE FROM pasang where pasang.id='$id'");

   if($q2){
     echo "<script type='text/javascript'>alert('Data Berhasil Dihapus')</script>";
     echo "<meta http-equiv=refresh content=0;url=tanggungan.php?nip=$nip>";
   }
   else{
     echo "<script type='text/javascript'>alert('Gagal Dihapus..!')</script>";
     echo "<meta http-equiv=refresh content=0;url=tanggungan.php?nip=$nip>";
   }
?>