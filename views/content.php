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
                	}
            	?>
          </div>
      </section>
    <!-- /.content -->
  </div>