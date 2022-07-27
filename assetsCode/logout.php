<?php 
	session_start();

	unset($_SESSION['id']);
	unset($_SESSION['nama']);
	unset($_SESSION['pangkat']);


	if (!$_SESSION['id'] && !$_SESSION['username']) {
		header("location: login.php");
	}
 ?>