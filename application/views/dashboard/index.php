<div class="row">
	<div class="col-xl-3 col-md-6">
		<div class="card bg-primary text-white mb-4">
			<div class="card-body">Data Pengaduan</div>
			<div class="card-footer d-flex align-items-center justify-content-between">
				<a class="small text-white stretched-link" href="#"><?= $pengaduan_jml ?></a>
				<div class="small text-white"><i class="fas fa-angle-right"></i></div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6">
		<div class="card bg-danger text-white mb-4">
			<div class="card-body">Dalam Proses</div>
			<div class="card-footer d-flex align-items-center justify-content-between">
				<a class="small text-white stretched-link" href="#"><?= $pengaduan_proses ?></a>
				<div class="small text-white"><i class="fas fa-angle-right"></i></div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6">
		<div class="card bg-warning text-white mb-4">
			<div class="card-body">Ditanggapi</div>
			<div class="card-footer d-flex align-items-center justify-content-between">
				<a class="small text-white stretched-link" href="#"><?= $pengaduan_ditanggapi ?></a>
				<div class="small text-white"><i class="fas fa-angle-right"></i></div>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-md-6">
		<div class="card bg-success text-white mb-4">
			<div class="card-body">Selesai</div>
			<div class="card-footer d-flex align-items-center justify-content-between">
				<a class="small text-white stretched-link" href="#"><?= $pengaduan_selesai ?></a>
				<div class="small text-white"><i class="fas fa-angle-right"></i></div>
			</div>
		</div>
	</div>
</div>