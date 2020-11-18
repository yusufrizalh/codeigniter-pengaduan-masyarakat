<h1 class="mt-4"><?= $title ?></h1>
<ol class="breadcrumb mb-4">
	<li class="breadcrumb-item active"><?= $breadcumb ?></li>
</ol>
<div class="container">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title text-capitalize">Tanggal : <?= $pengaduan->tgl ?>
			</h5>

			<img class="img-fluid" src="<?= base_url('assets/gambar/') . $pengaduan->foto ?>" alt="Card image cap">
			<p class="card-text">
				<h5>Isi Laporan : </h5>
				<p><?= $pengaduan->isi_laporan ?></p>
			</p>
			<hr>
			<?php if ($pengaduan->status == "ditanggapi") { ?>
				<p class="card-text">
					<h5>Tanggapan </h5>
					<p><?= $tanggapan->tanggapan ?></p>
				</p>
			<?php } else if ($pengaduan->status == "selesai") { ?>
				<p class="card-text">
					<h5>Tanggapan </h5>
					<p><?= $tanggapan->tanggapan ?></p>
					<hr>
					<h5>Pengaduan Telah diselesaikan </h5>
				</p>
			<?php } else if ($pengaduan->status == "proses") { ?>
				<h5>Pengaduan Masih dalam proses </h5>
				</p>
			<?php } ?>
			<div class="row justify-content-center">
				<a href="<?= base_url('pengaduan') ?>" class="btn btn-warning">Kembali</a>
			</div>
		</div>
	</div>
</div>