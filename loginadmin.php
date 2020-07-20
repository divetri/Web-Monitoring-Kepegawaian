<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">

		body{
            background-color: powderblue !important;
        }
        form {
		color: white;
		width: 335px;
		background: #2F495A;
		margin: 10px auto;
		padding: 50px 20px 50px 20px;
		border-radius: 5px;
	}
	</style>
  
</head>
<body>
<div class="container"><br><br>
	<center>
			<h1><center>KEPEGAWAIAN DINAS PERDAGANGAN KOTA SEMARANG
		</center></h1>
	<h3>Login</h3><img src="user.png" width="70px">
	<form action="prosesadmin.php" method="post">
				<input class="form-control" type="text" name="username" id="email" placeholder="Username"><br>
				<input class="form-control" type="password" name="password" id="password" placeholder="Password"><br>
				<input class="btn btn-primary" type="submit" name="submit" value="Login">
				<input class="btn btn-primary" type="Reset" Value="Reset" value="Reset"><br>
	</form>
	<center>Crafted by Veteran</center>
	</div>
</body>
</html>