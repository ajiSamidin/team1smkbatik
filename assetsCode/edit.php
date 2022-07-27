<?php  
session_start();

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
    /*page edit*/
    .tombol2 {
	  		width: 100px; 
	  		height: 30px;
	  		border-radius: 5px;
	  		margin-left: 75%;
	  		margin-top: 1%;
	  		color : black;
	  		font-weight: bold;
  	}	  		
  	a:hover .tombol2{
  		transition-duration: 1s;
  		background-color: darkred;
  		color: white;
  		letter-spacing: 2px;
  	}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
      <a href="home.php" class="brand-link">
        <img src="gambarnobg.png" alt="pemilos" class="brand-image img-circle elevation-3" style="opacity: .8; width: 30px; height: 35px">
        <span class="judul" style="color: white; font-weight: bolder;">Pemilos</span>
      </a>
    <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="color: white; font-weight: bolder; font-size: 13px">
          <span>Oleh Siswa, Dari Siswa, dan Untuk Siswa</span>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header">Tahun Pemilihan</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-calendar-alt"></i>
                <p>
                  Tahun
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="margin-left: 10px">
                <li class="nav-item">
                  <a href="index.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>2016</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>2017</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>2018</p>
                  </a>
                </li>
              </ul>
               <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-plus-circle" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px">Tambah Tahun</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                   <i class="fas fa-atlas" style="margin-left: 7px;"></i>
                    <p style="margin-left: 7px">lihat Tahun</p>
                  </a>
                </li>
            </li>
            <li class="nav-header">Anggota</li>
                <li class="nav-item">
                  <a href="?data=lompat" class="nav-link">
                    <i class="fas fa-list" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">List data Anggota</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?data=lompat" class="nav-link">
                    <i class="fas fa-pen" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Update data Pribadi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="?data=lompat" class="nav-link">
                    <i class="fas fa-pen" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Info Data Pribadi</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="fas fa-pen" style="margin-left: 6px;"></i>
                    <p style="margin-left: 6px;">Pensiun</p>
                  </a>
                </li>
            <li class="nav-header">Keluar Aplikasi</li>
            <li class="nav-item">
    		        <a href="Logout.php" class="nav-link arcive">
                   <i class="nav-icon fas fa-sign-out"></i>
        		      <p>
        		        Logout
        		      </p>
    		      </a>
           </li>
           <?php 
            echo "<div class= 'nama'>";
              echo "Selamat Datang ".$_SESSION['id'];
            echo "</div>";
            ?>
            <i class="fa-solid fa-plus-large"></i>
     	 </ul>
     
        <!-- /.sidebar-menu -->
      </nav>
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <div class="card card-info" style="width: 70%; margin: auto;">
		      <div class="card-header" style="background-color: grey">
		        <h3 class="card-title" ><a href="home.php?data=lompat"> daftar anggota <a>/ edit data</h3>
		      </div>
		      <form class="form-horizontal" action="" method="post">
		        <div class="card-body">
		         	<div class="form-group row">
						<label for="exampleInputUsername1" class="col-sm-2 col-form-label">Username :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter username" name="username">
						</div>
					</div>
		            <div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">Password :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password" placeholder="Enter Password" name="password">
						</div>
					</div>
		            <div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">Name :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password" placeholder="Enter Name" name="password">
						</div>
					</div>
		         	<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">No HP :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password" placeholder="Enter NO Handphone" name="password">
						</div>
					</div>
		          </div>

		        <!-- /.card-body -->
		        <div class="card-footer" style="padding-left:20%">
		          <button type="submit" class="btn btn-info" name="kirim" style="width: 40%;">Update</button>
		          <input type="reset" value="Reset" class="btn btn-danger" style="width: 40%"> 
		        </div>
		        <!-- /.card-footer -->
		     </form>
		    </div>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">pemilos</a>.</strong> created by team 1 
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
