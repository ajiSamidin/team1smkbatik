<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<body>
<div class="card card-info" style="width: 70%; margin: auto;">
              <div class="card-header" style="background-color: grey">
                <h3 class="card-title" >daftar anggota / edit data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
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
            </div>
              </form>
            </div>
            <!-- /.card -->
             <div class="kembali">
          	<a href="home.php" style="text-align: center;"><div class="btn-warning tombol2" >Back<<< </div></a>
          </div>
          </div>
        
</body>
</html>
