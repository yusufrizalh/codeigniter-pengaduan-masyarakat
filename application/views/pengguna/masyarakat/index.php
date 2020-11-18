<div class="card mb-4">
	<div class="card-body">
		<div class="table-responsive">
			<table id="example" class="table table-striped" style="width:100%">
				<thead>
					<tr>
						<th>Nik</th>
						<th>Nama</th>
						<th>Username</th>
						<th>No Telepon</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pengguna_masyarakat as $pp) { ?>
						<tr>
							<td><?= $pp['nik'] ?></td>
							<td><?= $pp['nama'] ?></td>
							<td><?= $pp['username'] ?></td>
							<td><?= $pp['telp'] ?></td>
							<td>
								<a href="<?= base_url('admin/pengguna/masyarakat/hapus/') ?><?= $pp['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i> Hapus </a>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>