
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
            
          </div>
      </section>
    <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
          		<div class="card">
					<div class="card-header bg-info">
						<h3 class="card-title">Buat Username Dan Password Untuk Calon Ketua Osis dan Anggota Baru</h3>
				 	</div>
					<form class="form-horizontal" method="post" action="<?=base_url('admin/tambah')?>">
						<div class="card-body">
							<div class="form-group row">
								<label for="inputUsername3" class="col-sm-2 col-form-label">Username</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputUsername3" placeholder="Username" name="name">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-10">
									<input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="sandi">
								</div>
							</div>	
							<div class="flex-container" style="display: flex;">
								<label style="margin-right: 3.5%">Gabung Sebagai  </label>
								<div class="form-check">
									<input type="radio" class="form-check-input" id="exampleCheck2" name="level" value="anggota">
									<label class="form-check-label" for="exampleCheck2"  style="margin-right: 20px;">Anggota</label>
									<br/>
									<input type="radio" class="form-check-input" id="exampleCheck2" name="level" value="calon">
									<label class="form-check-label" for="exampleCheck2">calon</label>
								</div>
							</div>

						</div>
						<div class="card-footer">
							<button type="submit" class="btn btn-primary btn-md" style="width: 95%;" name="kirim">Buat</button>
						</div>
					</form>
				</div>
          </div>
           <?php if ($this->uri->segment(3) == 1) { ?>
              <div class="callout callout-primaryfo mt-5" style="width: 80%; margin: auto;">
                <b>Maaf Calon Sudah Berjumlah 3 (Calon Max 3 calon)</b><br/>
                <i style="margin-left: 5%">Anda Sudah Tidak Bisa Menambah Calon Lagi</i>
              </div>
          <?php } else{ ?>
              <div class="callout callout-primaryfo mt-5" style="width: 80%; margin: auto;">
              	<b>Admin hanya perlu Membuat username dan Password Untuk Data Lain akan di isi oleh Anggota / calon</b>
              </div>
          <?php } ?>
      </section>
    <!-- /.content -->
  </div>