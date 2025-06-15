<?php include '../db/init.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Kanakku - Bootstrap Admin HTML Template</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper login-body">
		<div class="login-wrapper">
			<div class="container">

				<img class="img-fluid logo-dark mb-2" src="assets/img/logo.png" alt="Logo">
				<div class="loginbox">
					<div class="login-right">
						<div class="login-right-wrap">
							<h1>Login</h1>
							<p class="account-subtitle">Access to our dashboard</p>
							<?php login() ?>

							<form method="POST">
								<div class="form-group">
									<label class="form-control-label">Email Address / Username</label>
									<input type="text" class="form-control" name="user">
								</div>
								<div class="form-group">
									<label class="form-control-label">Password</label>
									<div class="pass-group">
										<input type="password" class="form-control pass-input" name="password">
										<span class="fas fa-eye toggle-password"></span>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-6">
											<div class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" id="cb1" name="remember">
												<label class="custom-control-label" for="cb1">Remember me</label>
											</div>
										</div>
										<div class="col-6 text-end">
											<a class="forgot-link" href="forgot-password.php">Forgot Password ?</a>
										</div>
									</div>
								</div>
								<button class="btn btn-lg btn-block btn-primary w-100" type="submit" name="login">Login</button>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>

	<!-- Feather Icon JS -->
	<script src="assets/js/feather.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>

</html>