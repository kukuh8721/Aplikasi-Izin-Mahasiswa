<?php $pagedesc = "Login"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Sistem Informasi Pengajuan Perizinan Mahasiswa - <?php echo $pagedesc ?></title>

	<link href="libs/images/logodepan.png" rel="icon" type="images/x-icon">

	
	<link href="libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	
	<link href="dist/css/offline-font.css" rel="stylesheet">
	<link href="dist/css/custom.css" rel="stylesheet">


	<link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	

	<script src="libs/jquery/dist/jquery.min.js"></script>

	
</head>

<body style="background-color: #f1f4f7">

	<section id="main-wrapper" style="margin-top: 120px">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4"><?php include("layout_alert.php"); ?></div>
			</div>
			<div class="row">
				<div id="page-wrapper" class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4" style="background-color: #ffffff; border-radius: 3px; webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05); box-shadow: 0 1px 1px rgba(0,0,0,.05)">
					<div class="row">
						<div class="col-lg-12">
							<br/>
							<center><img src="libs/images/logodepan.png" width="150" height="150"></center>
							<h2 class="text-center">Sistem Informasi Pengajuan Perizinan Mahasiswa<br/> <b>Universitas Darussalam Gontor</b></h2>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<form action="login_auth.php" method="post">
										<div class="form-group">
											<input type="text" class="form-control" name="username" placeholder="Username" required>
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" placeholder="Password" required>
										</div>
										<div class="form-group">
											<select class="form-control" name="akses" required>
											<option value="">======= LOGIN SEBAGAI =======</option>
											<option value="Admin">Admin BAAK</option>
											<option value="Mng">Mahasiswa</option>
											</select>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-success btn-block" name="login" value="Masuk">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	
	<div class="navbar navbar-inverse navbar-fixed-bottom footer-bottom">
		<div class="container text-center">
			<p class="text-center" style="color: #D1C4E9; margin: 0 0 5px; padding: 0"><small>Sistem Informasi Pengajuan Perizinan Mahasiswa Universitas Darussalam Gontor</small></p>
		</div>
	</div>

	
	<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>