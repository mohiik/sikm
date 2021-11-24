
<!doctype html>
<html lang="en">

<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Signin - Admin</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="/stail-admin/vendors/bootstrap/css/bootstrap.css">
	<!-- Style CSS (White)-->
	<link rel="stylesheet" href="/stail-admin/css/White.css">
	<!-- Style CSS (Dark)-->
	<link rel="stylesheet" href="/stail-admin/css/Dark.css">
	<!-- FontAwesome CSS-->
	<link rel="stylesheet" href="/stail-admin/vendors/fontawesome/css/all.css">
	<!-- Icon LineAwesome CSS-->
	<link rel="stylesheet" href="/stail-admin/vendors/lineawesome/css/line-awesome.min.css">

</head>

<body>

	<div class="auth-dark">
		<div class="theme-switch-wrapper">
			<label class="theme-switch" for="checkbox">
				<input type="checkbox" id="checkbox" title="Dark Or White" />
				<div class="slider round"></div>
			</label>
		</div>
	</div>

	<div class="container">
		<div class="row vh-100 d-flex justify-content-center align-items-center auth">
			<div class="col-md-7 col-lg-5">
				<div class="card">
					<div class="card-body">
						<h3 class="mb-5">SIGN IN</h3>
						<?php if (isset($_GET['error'])) { ?>
							<p class="error"><?php echo $_GET['error']; ?></p>
						<?php } ?>
						<form action="<?php echo base_url('admin') ?>/auth" method="post">
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password" required>
							</div>
							<div class="row">
								<div class="col-6 text-left">
									<div class="form-group form-check ml-2">
										<input type="checkbox" class="form-check-input" id="remember">
										<label class="form-check-label ml-2" for="remember">Remember</label>
									</div>
								</div>
								<!-- <div class="col-6 text-right">
									<a href="forgot.php">Forgot your password?</a>
								</div> -->
							</div>
							<div class="form-group my-4">
								<input type="submit" name="submit" value="Sign in" class="btn btn-linear-primary btn-rounded px-5">
								<!-- <a href="auth.php" class="btn btn-linear-primary btn-rounded px-5">Sign in</a> -->
							</div>
							<p>New member? <a href="<?php echo base_url('admin') ?>/signup" id="create_account">Create account</a></p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Library Javascipt-->
	<script src="/stail-admin/vendors/bootstrap/js/jquery.min.js"></script>
	<script src="/stail-admin/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/stail-admin/vendors/bootstrap/js/popper.min.js"></script>
	<script src="/stail-admin/js/script.js"></script>


</body>

</html>
