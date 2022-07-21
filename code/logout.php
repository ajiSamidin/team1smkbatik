<?php 
	session_start();

	unset($_SESSION['id']);
	unset($_SESSION['id_user']);

	if (!$_SESSION['id'] && !$_SESSION['id_user']) {
		header("location: login.php");
	}
 ?>