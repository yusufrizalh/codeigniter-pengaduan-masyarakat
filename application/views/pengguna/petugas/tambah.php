<div class="card pt-4 pl-5 pr-5">
	<form action="" method="post">
		<div class="form-group row">
			<label for="namaPetugas" class="col-sm-3 col-form-label">Nama Petugas</label>
			<div class="col-sm-8">
				<input type="text" name="nama_petugas" id="namaPetugas" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('nama_petugas') ?>">
				<small id="helpId" class="text-muted"><?php echo form_error('nama_petugas', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="telp" class="col-sm-3 col-form-label">No Telpon</label>
			<div class="col-sm-8">
				<input type="number" name="telp" id="telp" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('telp') ?>">
				<small id="helpId" class="text-muted"><?php echo form_error('telp', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="username" class="col-sm-3 col-form-label">Username</label>
			<div class="col-sm-8">
				<input type="text" name="username" id="username" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('username') ?>">
				<small id="helpId" class="text-muted"><?php echo form_error('username', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="password" class="col-sm-3 col-form-label">Password</label>
			<div class="col-sm-8">
				<input type="password" name="password" id="password" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('password') ?>">
				<small id="helpId" class="text-muted"><?php echo form_error('password', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="level" class="col-sm-3 col-form-label">Jabatan</label>
			<div class="col-sm-8">
				<select name="level" id="level" class="form-control">
					<option value="petugas" value="<?= set_select('level') ?>">Petugas</option>
					<option value="admin" value="<?= set_select('level') ?>">Admin</option>
				</select>
				<small id="helpId" class="text-muted"><?php echo form_error('level', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<br>
		<div class="form-group row justify-content-center">
			<button type="reset" class="btn btn-danger mr-2">Reset</button>
			<a href="<?= base_url('admin/pengguna/petugas') ?>" class="btn btn-warning mr-2">Kembali</a>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
</div>