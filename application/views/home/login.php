<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Login - Admin</title>
	<link href="<?= base_url('assets/template/dist/') ?>css/styles.css" rel="stylesheet" />
	<script src="<?= base_url('assets/') ?>js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="bg-primary">
	<div id="layoutAuthentication">
		<div id="layoutAuthentication_content">
			<main>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-5">
							<div class="card shadow-lg border-0 rounded-lg mt-5">
								<div class="card-header">
									<h3 class="text-center font-weight-light my-4">Login</h3>
								</div>
								<?php if ($this->session->flashdata('pesan-login')) { ?>
									<div class="alert alert-warning alert-dismissible fade show">
										<strong><?= $this->session->flashdata('pesan-login') ?> </strong>
										<button type="button" class="close" data-dismiss="alert">&times;</button>
									</div>
								<?php } ?>
								<div class="card-body">
									<form method="post" action="<?= base_url('auth/masuk') ?>">
										<div class="form-group">
											<label class="small mb-1" for="inputUsername">Username</label>
											<input class="form-control py-4" id="inputUsername" type="text" placeholder="Enter Username" name="username" required />
										</div>
										<div class="form-group">
											<label class="small mb-1" for="inputPassword">Password</label>
											<input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" name="password" required />
										</div>
										<!-- <div class="form-group">
											<div class="custom-control custom-checkbox"><input
													class="custom-control-input" id="rememberPasswordCheck"
													type="checkbox" /><label class="custom-control-label"
													for="rememberPasswordCheck">Remember password</label></div>
										</div> -->
										<div class="form-group d-flex mt-4 mb-0 float-right">
											<button type="submit" class="btn btn-primary">Login</button>
										</div>
									</form>
								</div>
								<div class="card-footer text-center">
									<div class="small"><a href="<?= base_url('auth/register') ?>">Belum Punya akun ?
											Daftar</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
		<div id="layoutAuthentication_footer">
			<footer class="py-4 bg-light mt-auto">
				<div class="container-fluid">
					<div class="d-flex align-items-center justify-content-between small">
						<div class="text-muted">Copyright &copy; Pengaduan Masyarakat | Kominfo 2020 </div>
						<div>
							<a href="#">Privacy Policy</a>
							&middot;
							<a href="#">Terms &amp; Conditions</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="<?= base_url('assets/') ?>js/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/template/dist/') ?>js/scripts.js"></script>
</body>

</html>