<!DOCTYPE html>
<html>
<head>
	<div style="height: 10px; width: 10%; background-color: red;" title="..."></div>
</head>
<body>
<?php

// koneksi ke mysql
 $masuk = mysqli_connect("localhost", "root", "", "basis");

// mencari jumlah laki-laki dari database
$query = "SELECT count(*) AS jumCowok FROM mhs WHERE jenisKelamin = 'LAKI-LAKI'";
$hasil = mysqli_query($masuk ,$query);
$data  = mysqli_fetch_array($hasil);
$jumCowok = $data['jumCowok'];

// mencari jumlah perempuan dari database
$query = "SELECT count(*) AS jumCewek FROM mhs WHERE jenisKelamin = 'PEREMPUAN'";
$hasil = mysqli_query($masuk ,$query);
$data  = mysqli_fetch_array($hasil);
$jumCewek = $data['jumCewek'];

// menghitung total mahasiswa
$total = $jumCowok + $jumCewek;

// menghitung prosentase laki-laki dan perempuan
$prosenCowok = $jumCowok/$total * 100;
$prosenCewek = $jumCewek/$total * 100;

// menentukan panjang grafik batang berdasarkan prosentase
$panjangGrafikCowok = $prosenCowok * 30 / 100;
$panjangGrafikCewek = $prosenCewek * 30 / 100;

?>

<h2>Statistik Mahasiswa Berdasarkan Jenis Kelamin</h2>

<p><b>Laki-laki</b> (Jumlah: <?php echo $jumCowok; ?> | <?php echo $prosenCowok; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafikCowok; ?>%; background-color: red;" title="Laki-laki (Jumlah: <?php echo $jumCowok; ?> | <?php echo $prosenCowok; ?>%)"></div></p>

<p><b>Perempuan</b> (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosenCewek; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafikCewek; ?>%; background-color: red;" title="Perempuan (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosenCewek; ?>%)"></div></p>
</body>
</html>