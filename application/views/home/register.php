<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Daftar - Sistem Pengaduan Masyarakat</title>
	<link href="<?= base_url('assets/template/dist/') ?>css/styles.css" rel="stylesheet" />
	<script src="<?= base_url('assets/') ?>js/all.min.js" crossorigin="anonymous"></script>
	</script>
</head>

<body class="bg-primary">

	<?php echo validation_errors('<div class="alert alert-warning alert-dismissible fade show"><strong>Error! </strong>', '<button type="button" class="close" data-dismiss="alert">&times;</button></div>') ?>
	<div id="layoutAuthentication_content">
		<main>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-7">
						<div class="card shadow-lg border-0 rounded-lg mt-5">
							<div class="card-header">
								<h3 class="text-center font-weight-light my-4">Buat Akun</h3>
								<h5 class="text-center font-weight-light my-4">Untuk Melanjutkan ke Sistem</h5>
							</div>
							<div class="card-body">
								<form action="" method="post">
									<div class="form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="small mb-1" for="nik">Nik</label>
												<input class="form-control py-4" id="nik" type="number" placeholder="Masukan Nik" name="nik" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="small mb-1" for="nama">Nama</label>
												<input class="form-control py-4" id="nama" type="text" placeholder="Masukan Nama" name="nama" />
											</div>
										</div>
									</div>
									<div class="form-group"><label class="small mb-1" for="Username">Username</label>
										<input class="form-control py-4" id="Username" type="text" aria-describedby="emailHelp" placeholder="Masukan username address" name="username" />
									</div>
									<div class="form-row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="small mb-1" for="inputPassword">Password</label>
												<input class="form-control py-4" id="inputPassword" type="password" placeholder="Masukan password" name="password" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group"><label class="small mb-1" for="inputConfirmPassword">Confirm Password</label><input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Masukan kembali password" name="confirm_password" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="small mb-1" for="no_telp">No Telepon</label>
										<input class="form-control py-4" id="no_telp" type="number" aria-describedby="emailHelp" placeholder="Masukan No telepon" name="telp" />
									</div>
									<div class="form-row">
										<div class="form-group mt-4 mb-2">
											<button type="submit" class="btn btn-primary btn-block">Daftar</button>
										</div>
								</form>
							</div>
							<div class="card-footer text-center">
								<div class="small"><a href="<?= base_url('auth/login') ?>">Sudah punya akun? login</a></div>
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
	<!-- <script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
	<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
	<script src="<?= base_url('assets/template/dist/') ?>js/scripts.js"></script>
</body>

</html>