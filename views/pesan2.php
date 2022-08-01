<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	  <!-- Font Awesome -->
	<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
	  <!-- Theme style -->
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
	<style type="text/css">
		.card {
			width: 30%;
			margin: auto;
		}
	</style>
</head>
<body>
		<?php
			session_start();
		 if ($_SESSION['tingkat'] == 'admin') {
		 ?>
			<div class = 'card mt-5'>
				 <div class = 'card-header bg-secondary'>
					 <h5>Maaf Anda Bukan Admin<h5>
				 </div>
				 <div class = 'card-body'>
					 <span>" Silahkan Klik <a href='home.php'>Disini</a> Untuk Kembali Ke Habitat "</span>
				 </div>
				</div>
		<?php } elseif($_SESSION['tingkat'] == 'calon') {?>
			<div class = 'card mt-5'>
				 <div class = 'card-header bg-secondary'>
					 <h5>Maaf Anda Bukan Admin<h5>
				 </div>
				 <div class = 'card-body'>
					 <span>" Silahkan Klik <a href='home_calon.php'>Disini</a> Untuk Kembali Ke Habitat "</span>
				 </div>
				</div>
		<?php }  ?>
</body>
</html>