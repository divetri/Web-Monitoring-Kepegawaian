<?php
	session_start();
	//session_destroy(); untuk menghapus perlakuan semua sesi
	unset ($_SESSION['admin']);//untuk menghapus perlakuan sesi login
		header("Location: loginadmin.php");
?>