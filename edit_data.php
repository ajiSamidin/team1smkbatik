<?php
	foreach ($list as $nilai) {
		  $nama = $nilai['name'];
		  $username = $nilai['username'];
		  $sandi = $nilai['password'];
		  $no = $nilai['no-HP'];
	}
  ?>

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
    /*card*/
    .card {
    	position: relative;
    }.card .card-header {
    	position: relative;
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
  	/*tombol back*/
  	.fa.fa-chevron-left {
  		position: absolute;
  		right: 3%;
  		color: white;
  		font-weight: bold;
  	}
  </style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <div class="card card-info" style="width: 70%; margin: auto;">
		      <div class="card-header" style="background-color: grey">
		        <h3 class="card-title" ><a href="home.php?data=lompat"> daftar anggota <a>/ edit data</h3>
		       	<a href="<?=base_url('admin/info_admin')?>">
		       		<i class="fa fa-chevron-left" aria-hidden="true">Batal</i>
		       	</a>
		      </div>
		      <form class="form-horizontal" action="<?=base_url('admin/proses_edit_data')?>" method="post">
		        <div class="card-body">
		         	<div class="form-group row">
						<label for="exampleInputUsername1" class="col-sm-2 col-form-label">Username :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="exampleInputUsername1" placeholder="Enter username" name="username" value="<?php echo $username ?>">
						</div>
					</div>
		            <div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">Password :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password" placeholder="Enter Password" name="sandi"  value="<?php echo $sandi ?>">
						</div>
					</div>
		            <div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">Name :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password" placeholder="Enter Name" name="name"  value="<?php echo $nama ?>">
						</div>
					</div>
		         	<div class="form-group row">
						<label for="password" class="col-sm-2 col-form-label">No HP :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="password" placeholder="Enter NO Handphone" name="hp"  value="<?php echo $no ?>">
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