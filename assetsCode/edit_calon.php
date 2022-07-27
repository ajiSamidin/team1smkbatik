<?php  
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Project Add</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style type="text/css">
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
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Calon ke-02</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home_calon.php">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="width: 80%; margin: auto;">
      
          <div class="card">
            <div class="card-header bg-primary">
              <h3 class="card-title">Data Calon : </h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <input type="file" name="file" class="form-control-file">
              </div>
              <div class="form-group">
                <label for="inputName">Visi dan Misi</label>
                <textarea name="visi_misi"  class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputDescription">Program Kerja</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
             
            </div>
            <!-- /.card-body -->
          
            <div class="card-header BiodataKetos mt-3">
              <h3 class="card-title">Biodata Ketua Osis</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Nama :</label>
                <input type="text" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Kelas :</label>
                <input type="text" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Alamat :</label>
                 <textarea name="alamat"  class="form-control" rows="4"></textarea>
              </div>
               <div class="form-group">
                <label for="inputEstimatedDuration">Agama :</label>
                <input type="text" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
             <div class="card-header BiodataKetos mt-3">
              <h3 class="card-title">Biodata Wakil Ketua Osis</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Nama :</label>
                <input type="text" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Kelas :</label>
                <input type="text" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Alamat :</label>
                 <textarea name="alamat"  class="form-control" rows="4"></textarea>
              </div>
               <div class="form-group">
                <label for="inputEstimatedDuration">Agama :</label>
                <input type="text" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        
      <div class="row">
        <div class="col-12">
          <input type="submit" value="Update" class="btn btn-success float-right" style="width: 100%; margin-bottom: 30px">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
<script src="dist/js/demo.js"></script>
</body>
</html>