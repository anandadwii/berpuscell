<!doctype html>
<html lang="en">

<head>
	<title>Login Berpus Cell </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/styles.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body id="login">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">

			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url('4205720.webp')"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In As Admin</h3>
									
									<?php if (!empty(session()->getFlashdata('error'))) : ?>
										<div class="alert alert-warning alert-dismissible">
											<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
											<?= session()->getFlashdata('error'); ?>
										</div>
									<?php endif; ?>
								</div>
							</div>
							<form action="<?= base_url() ?>/login/submitlogin" method="POST">
								<div class="form-group mt-3">
									<input type="text" name="username" id="username" class="form-control" required>
									<label class="form-control-placeholder" for="username">Username</label>
								</div>
								<div class="form-group">
									<input id="password-field" id="password" name="password" type="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Password</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-secondary rounded submit px-3">Sign In</button>
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

</body>