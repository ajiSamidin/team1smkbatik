<?php  
	session_start();
  if (!isset($_SESSION['id'])) {
       header("location: pesan.php");
  }
	// $nama_user = $_SESSION['username'];
	// $id_sandi = $_SESSION['password'];

	// $ambil = "select * from user where username = '$nama_user' && password = '$id_sandi' ";
	// $konek = mysqli_query($masuk, $ambil);

	// $list = mysqli_fetch_array($konek);
	// $hitung = mysqli_num_rows($list);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pemilos | Boxed Layout</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style type="text/css">
    .btn {
      width: 90%;
      margin: 10px 0 0 15px;
    }.nama {
      position: relative;
      color: white;
      font-style: italic;
      font-weight: bolder;
     
    } 
    .form-group.row {
    	margin-bottom: 5px;
    }
    .teks {
      border: 1px solid black;
      border-radius: 10px;
      padding: 10px; 
      margin-left: 10px;
    }
    .BiodataKetos {
      border-top: 2px solid black; border-top-right-radius:0; border-top-left-radius:0;  ; 
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="margin-top: 10%"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <span> 
          <?php               
            echo "Selamat Datang ".$_SESSION['nama'];
          ?>
        </span>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="gambarnobg.png" alt="pemilos" class="brand-image img-circle elevation-3" style="opacity: .8; width: 30px; height: 35px">
      <span class="judul" style="color: white; font-weight: bolder;">Pemilos</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-header">Data</li>
                <li class="nav-item">
                  <a href="info_calon.php" class="nav-link">
                    <i class="fa fa-user-circle" aria-hidden="true" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Info Data Pribadi</p>
                  </a>
                </li>
           <li class="nav-header">Keluar Aplikasi</li>
           <li class="nav-item">
                  <a href="logout.php" class="nav-link">
                    <i class="fa fa-power-off" aria-hidden="true" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Log Out</p>
                  </a>
            </li>
     </ul>
   
      <!-- /.sidebar-menu -->
    </nav>
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            
          </div>
      </section>
    <!-- Main content -->
      <section class="content">

          <div class="container-fluid">
            	<?php 
                	$ambil = @$_GET['data'];
                	if($ambil == "lompat") {
                		include 'daftar_anggota.php';
                	}elseif ($ambil == "tambah") {
                    include 'tambahUser.php';
                  }	else{
            	?>
            	<div class="card">
            		<div class="card-header bg-primary row">
            			<div class="col-sm-10">
                      <h3>Data Calon ke- </h3>   
                  </div>
                  <div class="col-sm-2">
                      <a href="edit_calon.php"><button class="btn btn-warning" >Edit Data Pribadi</button></a>
                  </div>
            		</div>
        			 <div class="">
                  <div class="card-body">
                    <div class="form-group">
                     
                    </div>
                    <div class="form-group row">
                      <label for="inputName col-sm-2" style="margin-right: 3.7%">Visi dan Misi</label>
                      <span class="teks col-sm-10">
                      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                      </span>
                    </div>
                   <div class="form-group row">
                      <label for="inputName col-sm-2" style="margin-right: 2%">Program Kerja</label>
                      <span class="teks col-sm-10">
                      "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                      </span>
                    </div>
                   
                  </div>
            <!-- /.card-body -->
              </div>
          <!-- /.card -->
            <div class="card-header BiodataKetos mt-3">
              <h3 class="card-title">Biodata Ketua Osis</h3>
            </div>
            <div class="card-body">
              <div class="form-group row">
                <label for="inputEstimatedBudget" class="col-sm-2">Nama :</label>
                <div class="col-sm-10">
                    <div class="card" style="padding: 10px">Samidin</div>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputSpentBudget" class="col-sm-2">Kelas :</label>
                <div class="col-sm-10">
                    <div class="card" style="padding: 10px">Samidin</div>
                </div>
               </div>
              <div class="form-group row">
                <label for="inputEstimatedDuration" class="col-sm-2">Alamat :</label>
                <div class="col-sm-10">
                    <div class="card" style="padding: 10px">Samidin</div>
                </div>
              </div>
               <div class="form-group row">
                <label for="inputEstimatedDuration" class="col-sm-2">Agama :</label>
                <div class="col-sm-10">
                    <div class="card" style="padding: 10px">Samidin</div>
                </div>
              </div>
            </div>
            <!-- /.card biodata walketos -->
            <div class="card-header BiodataKetos mt-3">
              <h3 class="card-title">Biodata Wakil Ketua Osis</h3>
            </div>
            <div class="card-body">
                <div class="form-group row row">
                  <label for="inputEstimatedBudget" class="col-sm-2">Nama :</label>
                  <div class="col-sm-10">
                      <div class="card" style="padding: 10px">Samidin</div>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputSpentBudget" class="col-sm-2">Kelas :</label>
                  <div class="col-sm-10">
                      <div class="card" style="padding: 10px">Samidin</div>
                  </div>
                 </div>
                <div class="form-group row">
                  <label for="inputEstimatedDuration" class="col-sm-2">Alamat :</label>
                  <div class="col-sm-10">
                      <div class="card" style="padding: 10px">Samidin</div>
                  </div>
                </div>
                 <div class="form-group row">
                  <label for="inputEstimatedDuration" class="col-sm-2">Agama :</label>
                  <div class="col-sm-10">
                      <div class="card" style="padding: 10px">Samidin</div>
                  </div>
                </div>
            </div>
          </div>
 
           
      </section>
    <!-- /.content -->
  </div>
<?php } ?>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">pemilos</a>.</strong> created by team 1 ||
       <span><b>Oleh Siswa, Dari Siswa, dan Untuk Siswa</b></span>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="dist/js/demo.js"></script> -->
</body>
</html>