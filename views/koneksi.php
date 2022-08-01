<?php 
	$nama = "root";
	$sandi = "";
	$databases = "data";

	$masuk = mysqli_connect("localhost", $nama, $sandi, $databases);

	if (!$masuk) {
		echo "Gagal Masuk Maaf";
	}
 ?>