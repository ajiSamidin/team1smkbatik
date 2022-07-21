<?php  
include 'koneksi.php';
	session_start();

	if (isset($_POST['kirim'])) {

		$nama = $_POST['nama'];
		$sandi = $_POST['sandi'];

		$ambil = "select * from user where username = '$nama' && password = '$sandi' ";
		$dapat = mysqli_query($masuk, $ambil);

		$list = mysqli_fetch_array($dapat);

		if (isset($dapat)) {

			$_SESSION['id'] = $list['name'];
			$_SESSION['id_user'] = $nama;

			header("location: home.php");
		}
	}
	if (isset($_SESSION['id_user'])) {
			header("location: home.php");
		}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <style type="text/css">
    @media (max-width: 576px){
      .login-box, .register-box {
        margin-top: .5rem;
        width: 100%;
      }

    }
    
  </style>
</head>
<body class="hold-transition login-page">
<div class="card">
    <div class="login-box">
  <div class="login-logo" style="margin: 20px 0 0 0;">
    <a href="index2.html"><img src="gambarnobg.png" style="width: 50%"></a>
  </div>
  <!-- /.login-logo -->
  
    <div class="card-body login-card-body">
      <p class="login-box-msg"><i>Silahkan Log In</i></p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="username" class="form-control" placeholder="Username" name="nama">
          <div class="input-group-append">
            <div class="input-group-text" style="background-color: grey; color : white">
              <span class="fas fa-user" ></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="sandi">
          <div class="input-group-append">
            <div class="input-group-text" style="background-color: grey; color : white">
              <span class="fas fa-lock" ></span>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              </label>
            </div>
          </div> -->
          <!-- /.col -->
          <div class="input-group mb-3">
            <button type="submit" class="btn btn-primary btn-block" style="width: 335%; margin: auto;" name="kirim">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
Footer
