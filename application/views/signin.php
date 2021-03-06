<!DOCTYPE html>
<html lang="en">
<head>
	<title>Apotek</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/vendor/bootstrap/css/bootstrap.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/fonts/iconic/css/material-design-iconic-font.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/vendor/animate/animate.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/vendor/css-hamburgers/hamburgers.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/vendor/animsition/css/animsition.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/vendor/select2/select2.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/vendor/daterangepicker/daterangepicker.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/css/util.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'login/css/main.css'?>">
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('<?php echo base_url().'login/images/bg-01.jpg'?>"></div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
				<form class="login100-form validate-form" method="POST" action="<?php echo base_url('Akun/cek_login'); ?>" enctype="multipart/form-data">
					<span class="login100-form-title p-b-59">
						Masuk
					</span>

					<div class="wrap-input100 validate-input" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Username...">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="Password" name="pass" placeholder="*************">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Saya setuju dengan
									<a href="#" class="txt2 hov1">
										Peraturan sebagai pengguna 
									</a>
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="btn btn-primary login100-form-btn">
								Masuk
							</button>
						</div>

						<a href="<?php echo base_url().'Akun/daftar_view'?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Buat akun baru? Daftar
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<script src="<?php echo base_url().'login/vendor/jquery/jquery-3.2.1.min.js'?>"></script>
	<script src="<?php echo base_url().'login/vendor/animsition/js/animsition.min.js'?>"></script>
	<script src="<?php echo base_url().'login/vendor/bootstrap/js/popper.js'?>"></script>
	<script src="<?php echo base_url().'login/vendor/bootstrap/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'login/vendor/select2/select2.min.js'?>"></script>
	<script src="<?php echo base_url().'login/vendor/daterangepicker/moment.min.js'?>"></script>
	<script src="<?php echo base_url().'login/vendor/daterangepicker/daterangepicker.js'?>"></script>
	<script src="<?php echo base_url().'login/vendor/countdowntime/countdowntime.js'?>"></script>
	<script src="<?php echo base_url().'login/js/main.js'?>"></script>
</body>
</html>