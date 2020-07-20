<?php
session_start();
  if(empty($_SESSION['admin'])){
    echo "<script>alert('Anda harus login')</script>";
    echo "<meta http-equiv=refresh content=0;url=loginadmin.php>";

    include 'koneksi.php';
  $username=$_SESSION['admin'];
  $sql = mysqli_query($sambungan,"select username from admin where username='$username'"); 
  $data = mysqli_fetch_object($sql);
  }
?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <style type="text/css">
    body{
            background-color: powderblue !important;
        }
    .actmember{
      padding: 15px 10px 0px 10px;
      height: 50px;

    }
    .collapse{
  
}
    .button {
    transition-duration: 0.4s;

    }
    .navbar{
         }
    .button:hover {
    background-color: darkorange;
    }
    .container-fluid{
      color: white !important;
      background-color: #2F495A !important;
       position: fixed; /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%; /* Full width */

    }
    li{
      transition-duration: 0.4s;
          color: white !important;
    }
    li:hover {
    background-color: darkorange !important;
    color: black !important;
    }
    a{
      color: white !important;
    }
    a:hover {
    color: black !important;
    }
  </style>
</head>
<body><nav class="navbar navbar-default navbar-inner">
  <div class="container-fluid">
      <ul class="nav navbar-nav navbar-right">
      <li class="actmember"><span class='glyphicon glyphicon-user'></span> <?php echo $_SESSION['admin']; ?></li>
       <?php
  if (isset($_SESSION['admin'])) {   
    echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>"; 
  } else {
    echo "<li><a href='loginadmin.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
  } 
  ?>
       </ul>
       <ul class="nav navbar-nav">
        <li class="button"><a href="home.php">Beranda</a></li>
        <li class="button"><a href="pegawai.php">Daftar Pegawai</a></li>
        <li class="button"><a href="ajuan.php">Daftar Usulan Kenaikan Pangkat</a></li>
        <li class="button"><a href="gaji.php">Daftar Usulan Kenaikan Gaji Berkala</a></li>
      </ul>
    </div>

</nav>
</body>
</html>