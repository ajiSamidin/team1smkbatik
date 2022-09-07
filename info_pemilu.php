<?php 	
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>pemilos: info pemilu</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets/')?>plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url('assets/')?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/')?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/')?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets/')?>dist/css/adminlte.min.css">
  <style type="text/css">
    .bg-secondary{
      padding : 10px; 
    }
    table td {
      padding: 5px; 
    }
  </style>
</head>
<body class="sidebar-mini sidebar-collapse">
<div class="wrapper">
  <!-- Navbar -->
   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin: auto;min-height: 543px;">
      <!-- Main content -->
      <ul class="navbar-nav ml-auto">
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <?php
                  $jumlah = 0;
                  $pemilih = 0;

                  $data = array(
                      'a' => 0, 
                      'b' => 0,
                      'c' => 0,

                  );
                  foreach ($kode as $value) {
                      ++$jumlah; 
                  }

                  foreach ($list as $key) {
                    ++$pemilih;
                    if ($pemilih <= $jumlah ) {
                        if ($key['pilih'] == "calon_1") {
                          ++$data['a'];
                        }elseif ($key['pilih'] == "calon_2") {
                          ++$data['b'];
                        }elseif ($key['pilih'] == "calon_3") {
                          ++$data['c'];
                        }
                    }
                  }
                ?>
              <div class="card">
                <div class="card-header bg-info">
                  <h3>Statistik</h3>
                </div>
                <div class="card-body row">
                   <div class="col-sm-6">
                     <div class="info-box">
                        <span class="info-box-icon bg-primary">
                          <i class="far fa-flag"></i>
                        </span>
                        <div class="info-box-content">
                          <span class="info-box-text">Jumlah suara </span>
                          <span class="info-box-number"><?php echo $jumlah ?></span>
                        </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->
                   </div>
                   <div class=" col-sm-6 ">
                      <div class="info-box shadow-sm">
                          <span class="info-box-icon bg-success">
                            <i class="far fa-flag"></i>
                          </span>
                      <div class="info-box-content">
                            <span class="info-box-text">Jumlah Pemilihan</span>
                              <span class="info-box-number"><?php echo $jumlah ?></span>
                            </div>

                      </div>

                          </div>



                   <div class="col-sm-6"></div>
                    <!-- <h3 class="col-sm-6 bg-secondary mb-4">Jumlah suara : <?php echo $jumlah ?></h3>
                    <h3 class="col-sm-6 bg-secondary mb-4">Jumlah pemilih : <?php echo $pemilih ?></h3><br/> -->
                  <table class="bg-secondary mb-4" style="width: 100%">
                    <!-- <tr>
                      <td>
                        <b>[ Jumlah Pemilih Calon Pertama : <?php echo $data['a'] ?> ]</b>
                      </td>
                      <td>
                        <b>[ Jumlah Pemilih Calon Kedua : <?php echo $data['b'] ?> ]</b>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <b>[ Jumlah Pemilih Calon Ketiga : <?php echo $data['c'] ?> ]</b>
                      </td>
                    </tr> -->
                  </table>
                   <div class="col-md-3 col-sm-6 col-12">
                      <div class="info-box bg-warning">
                          <span class="info-box-icon"><i class="far fa-calendar-alt"></i></span>
                        <div class="info-box-content">
                          <span class="info-box-text">AKU&&KAMU</span>
                            <span class="info-box-number">41,410</span>
                      <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                  </div>
                        <span class="progress-description">
                      70% Increase in 30 Days
                        </span>
                  </div>

                  </div>

                      </div>



                    <div class="col-md-3 col-sm-6 col-12">
                        <div class="info-box bg-success">
                            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">KAMU&&DIA</span>
                            <span class="info-box-number">41,410</span>
                    <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                    </div>
                              <span class="progress-description">
                              70% Increase in 30 Days
                              </span>
                    </div>

                      </div>

                        </div>

                <div class="col-md-3 col-sm-6 col-12">
                  <div class="info-box bg-info">
                    <span class="info-box-icon"><i class="far fa-bookmark"></i></span>
                        <div class="info-box-content">
                    <span class="info-box-text">DIA&&SIAPA</span>
                    <span class="info-box-number">41,410</span>
                        <div class="progress">
                          <div class="progress-bar" style="width: 70%"></div>
                </div>
                      <span class="progress-description">
                      70% Increase in 30 Days
                      </span>
                </div>

                </div>

                </div>                  

                 <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box bg-danger">
                        <span class="info-box-icon"><i class="fas fa-comments"></i></span>
                      <div class="info-box-content">
                          <span class="info-box-text">ROMEO&&JULIET</span>
                            <span class="info-box-number">41,410</span>
                          <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                      </div>
                          <span class="progress-description">
                          70% Increase in 30 Days
                      </span>
                    </div>

                    </div>

                    </div>
                        <!-- /.info-box-content -->
                      </div>
                      <!-- /.info-box -->




                <!--  <table class="bg-secondary mb-4" style="width: 100%;">
                      <div class="info-box bg-danger" style="width: 30%">
                        <span class="info-box-icon"><i class="fas fa-comments"></i></span>

                        <div class="info-box-content">
                          <span class="info-box-text">Comments</span>
                          <span class="info-box-number">41,410</span>

                          <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                          </div>
                          <span class="progress-description">
                            70% Increase in 30 Days
                          </span>
                        </div>
                        /.info-box-content -->
                      <!-- </div> --> 
                      <!-- /.info-box -->
                  <!--  <tr>
                      <td>
                        <b> Presentase Pemilih Calon Pertama : <?php echo $data['a'] / $pemilih * 100 ?>% </b>
                      </td>
                      <td>
                        <b> Presentase Pemilih Calon Kedua : <?php echo $data['b'] / $pemilih * 100 ?>% </b>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <b> Presentase Pemilih Calon Ketiga : <?php echo $data['c'] / $pemilih * 100 ?>% </b>
                      </td>
                   </tr> -->
                 </table>
                </div>
              </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="card-header bg-info">
                    <h4>Data Pemilihan</h4>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                              <th>NO</th>
                              <th>Calon</th>
                              <th>Pemilih</th>
                              <th>Tahun Pemilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php 
                        		$no = 0;
								foreach ($list as $nilai) { ?>
									<tr>
										<td><?php echo ++$no; ?></td>
										<td><?php echo $nilai['digit']; ?></td>
										<td><?php echo $nilai['pilih']; ?></td>
										<td><?php echo $nilai['tahun_pemilu']; ?></td>
									</tr>
								<?php } ?>
                    </tbody>
                    <!-- <tfoot>
                      <tr>
                        <th>NO</th>
                          <th>Calon</th>
                          <th>Pemilih</th>
                          <th>Tahun Pemilihan</th>
                      </tr>
                    </tfoot> -->
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->

       
              </div>
              <!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </section><!-- /.content -->
       </ul>
    </div>
  </nav>
  <!-- /.content-wrapper -->
   <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
          <b>Version</b> 3.2.0
      </div>
      <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">pemilos</a>.</strong> created by team 1 || 
        <span><b>Oleh Siswa, Dari Siswa, dan Untuk Siswa</b></span>
  </footer>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?=base_url('assets/')?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url('assets/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?=base_url('assets/')?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/jszip/jszip.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?=base_url('assets/')?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets/')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
