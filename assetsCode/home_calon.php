
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
      width: 100%;
      margin: 10px 0 0 15px;
    }.nama {
      position: relative;
      color: white;
      font-style: italic;
      font-weight: bolder;
     
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <!-- Right navbar links -->
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
           <li class="nav-header">Anggota</li>
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
  <!-- /.content-wrapper -->
  </div>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">pemilos</a>.</strong> created by team 1 
  </footer>
  <!-- Control Sidebar -->
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