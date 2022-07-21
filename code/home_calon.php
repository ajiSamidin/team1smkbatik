<?php  ?>
<?php  ?>
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
      <!--li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li-->
      <!--li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li-->
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: darkred">
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
          <li class="nav-item">
            <a href="Update_data_calon.php" class="btn btn-primary"  style="color : black; width: 35%">
                  Update Data
                </a>
          </li>
          <li class="nav-item">
  		        <a href="Logout.php" class="nav-link arcive">
                  <i class="nav-icon far fa-circle text-warning"></i>
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
   	 </ul>
   
      <!-- /.sidebar-menu -->
    </nav>
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
 	 <div class="ucapan">
        <div class="kepala"><h1>Welcome To Calon_ketos_waketos Page </h1></div>
        <div class="badan">
          <h5>Silahkan updaet Data di sidebar sebelah kiri untuk mengunakan aplikasi kami </h5>
        </div>
      </div>
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