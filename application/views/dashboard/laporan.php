<div class="card mb-3">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered" id="exampleLaporan" width="100%">
				<thead>
					<tr>
						<th>No</th>
						<th>Tanggal</th>
						<th>Nik</th>
						<th>Nama</th>
						<th>Isi Lapporan</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($list as $pp) { ?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $pp['tgl'] ?></td>
							<td><?= $pp['nik'] ?></td>
							<td><?= $pp['nama'] ?></td>
							<td><?= $pp['isi_laporan'] ?></td>
							<!-- <td class="gambar"><img src="<?= base_url() ?>/assets/gambar/<?= $pp['foto'] ?>"
								class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
								alt=""></td> -->
							<td class="text-capitalize"><?= $pp['status'] ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>