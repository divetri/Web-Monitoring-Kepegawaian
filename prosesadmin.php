<?php
include 'koneksi.php';
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['admin']=$username;
$query = mysqli_query($sambungan,"select * from admin where username='$username' and password='$password'");
$data = mysqli_fetch_array($query);

if($password==$data['password']){
  echo" <script> window.alert('Selamat datang');
    window.location = 'home.php';
    </script>";
}else
{
  echo" <script> window.alert('Maaf, username atau password salah');
    window.location = 'loginadmin.php';
    </script>";
}
?>