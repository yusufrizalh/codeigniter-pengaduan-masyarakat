<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
	<a class="navbar-brand" href="">Sistem Pengaduan Masyarakat </a>
	<button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i>
	</button>
	<!-- Navbar Search-->
	<!-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 display-none"
		style="display: none;">
		<div class="input-group">
			<input class="form-control" type="text" placeholder="Search for..." aria-label="Search"
				aria-describedby="basic-addon2" />
			<div class="input-group-append">
				<button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
			</div>
		</div>
	</form> -->
	<!-- Navbar-->
	<ul class="navbar-nav d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0 display-none">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
			<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
				<?php if ($this->session->userdata('admin')) { ?>
					<a class="dropdown-item" href="<?= base_url() ?>admin/setting/change-password">Ganti password</a>
				<?php } else { ?>
					<a class="dropdown-item" href="<?= base_url() ?>setting/change-password">Ganti password</a>
				<?php } ?>
				<div class="dropdown-divider"></div>
				<?php if ($this->session->userdata('admin')) { ?>
					<a class="dropdown-item" href="<?= base_url('admin/auth/logout') ?>">Keluar</a>
				<?php } else { ?>
					<a class="dropdown-item" href="<?= base_url('auth/logout') ?>">Keluar</a>
				<?php } ?>
			</div>
		</li>
	</ul>
</nav>
<div id="layoutSidenav">
	<div id="layoutSidenav_nav">
		<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
			<div class="sb-sidenav-menu">
				<?php if ($this->session->userdata('admin')) {  ?>
					<div class="nav">
						<div class="sb-sidenav-menu-heading">Core</div>
						<a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Dashboard
						</a>
						<div class="sb-sidenav-menu-heading">Addons</div>
						<a class="nav-link" href="<?= base_url('admin/kelola') ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Kelola
						</a>
						<?php if ($this->session->userdata('admin')['session_level'] == "admin") { ?>
							<a class="nav-link" href="<?= base_url('admin/laporan') ?>">
								<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
								Ekspor
							</a>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
								<div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
								Pengguna
								<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
							</a>
						<?php } ?>
						<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link" href="<?= base_url('admin/pengguna/masyarakat') ?>">Masyarakat</a>
								<a class="nav-link" href="<?= base_url('admin/pengguna/petugas') ?>">Petugas</a>
							</nav>
						</div>
					</div>
				<?php  } else { ?>
					<div class="nav">
						<div class="sb-sidenav-menu-heading">Core</div>
						<a class="nav-link" href="<?= base_url('') ?>">
							<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
							Dashboard
						</a>
						<div class="sb-sidenav-menu-heading">menu</div>
						<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
							<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
							Pengaduan
							<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
						</a>
						<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link" href="<?= base_url('pengaduan') ?>">Data Pengaduan</a>
								<a class="nav-link" href="<?= base_url('pengaduan/tambah') ?>">Tambah Pengaduan</a>
							</nav>
						</div>
					</div>
				<?php  } ?>
			</div>
			<div class="sb-sidenav-footer">
				<div class="small">Logged in as:</div>
				<?php
				if ($this->session->userdata('admin')) {
					echo ($this->session->userdata('admin')["session_nama_petugas"]);
				}
				if ($this->session->userdata('user')) {
					echo ($this->session->userdata('user')["session_nama_masyarakat"]);
				}
				?>
			</div>
		</nav>
	</div>
	<div id="layoutSidenav_content">
		<main>
			<div class="container-fluid">
				<?php if ($this->session->userdata('admin')) {  ?>
					<h1 class="mt-4"><?= $title ?></h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active"><?= $breadcumb ?></li>
					</ol>
				<?php } ?>