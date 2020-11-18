<div class="card pt-4 pl-5 pr-5">
	<form action="" method="post" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="password_lama" class="col-sm-4 col-form-label">Password Lama</label>
			<div class="col-sm-8">
				<input type="password" name="password_lama" id="password_lama" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('password_lama') ?>">
				<small id="helpId" class="text-muted"><?php echo form_error('password_lama', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
				<?php if ($this->session->flashdata('pesan')) { ?>
					<small id="helpId" class="text-muted">
						<div class="alert alert-danger mt-2">
							<?php echo $this->session->flashdata('pesan') ?>
						</div>
					</small>
				<?php } ?>
			</div>
		</div>
		<hr>
		<hr>
		<div class="form-group row">
			<label for="password_baru" class="col-sm-4 col-form-label">Password Baru</label>
			<div class="col-sm-8">
				<input type="password" name="password_baru" id="password_baru" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('password_baru') ?>">
				<small id="helpId" class="text-muted"><?php echo form_error('password_baru', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<div class="form-group row">
			<label for="password_konfirmasi" class="col-sm-4 col-form-label">Konfirmasi Password</label>
			<div class="col-sm-8">
				<input type="password" name="password_konfirmasi" id="password_konfirmasi" class="form-control" placeholder="" aria-describedby="helpId" value="<?= set_value('password_konfirmasi') ?>">
				<small id="helpId" class="text-muted"><?php echo form_error('password_konfirmasi', '<div class="alert alert-danger mt-2">', '</div>'); ?></small>
			</div>
		</div>
		<br>
		<div class="form-group row justify-content-center">
			<button type="reset" class="btn btn-danger mr-2">Reset</button>
			<a href="<?= base_url('dashboard') ?>" class="btn btn-warning mr-2">Kembali</a>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
</div>