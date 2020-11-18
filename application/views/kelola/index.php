<div class="card mb-4">
	<div class="card-body">
		<div class="table-responsive">
			<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nik</th>
						<th>Nama</th>
						<th>Isi Laporan</th>
						<th>Foto</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($kelola as $pp) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $pp['tgl'] ?></td>
							<td><?= $pp['nik'] ?></td>
							<td><?= $pp['nama'] ?></td>
							<td><?= $pp['isi_laporan'] ?></td>
							<td><img src="<?= base_url() ?>/assets/gambar/<?= $pp['foto'] ?>" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt=""></td>
							<td class="text-capitalize"><?= $pp['status'] ?></td>
							<td>
								<?php if ($pp['status'] == 'proses') { ?>
									<a href="<?= base_url('admin/kelola/balas/') ?><?= $pp['id'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Balas </a>
								<?php } else if ($pp['status'] == 'ditanggapi') { ?>
									<a href="<?= base_url('admin/kelola/selesai/') ?><?= $pp['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Selesai </a>
								<?php } ?>
								<a href="<?= base_url('admin/kelola/hapus/') ?><?= $pp['id'] ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus </a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>