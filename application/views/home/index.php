<div class="jumbotron jumbotron-fluid mt-4">
	<div class="container">
		<h1 class="display-3 text-center">Selamat Datang</h1>
		<h2 class="text-center" style="text-transform: capitalize">
			<?= $this->session->userdata('user')['session_nama_masyarakat'] ?>
		</h2>
	</div>
</div>
<div class="row justify-content-center">
	<div class="col-xl-4 col-md-6">
		<div class="card bg-primary text-white mb-4">
			<div class="card-body text-center">Jumlah Pengaduan</div>
			<div class="card-footer d-flex align-items-center justify-content-center">
				<h4><?= $jumlah_pengaduan ?></h4>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card bg-danger text-white mb-4">
			<div class="card-body text-center">Pengaduan Belum Selesai</div>
			<div class="card-footer d-flex align-items-center justify-content-center">
				<h4><?= $jumlah_pengaduan_belum ?></h4>
			</div>
		</div>
	</div>
</div>