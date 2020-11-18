</div>
</main>
<footer class="py-4 bg-light mt-auto">
	<div class="container-fluid">
		<div class="d-flex align-items-center justify-content-between small">
			<div class="text-muted">
				Copyright &copy; Kominfo 2020 &nbsp; Created by
				<a href="http://playmyandroid.wordpress.com">Ahay </a>
			</div>
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

<!-- core jquery -->
<script src="<?= base_url('assets/js/') ?>extra/jquery.min.js" crossorigin="anonymous"></script>
<!-- botstrap js -->
<script src="<?= base_url('assets/js/') ?>bootstrap.min.js" crossorigin="anonymous"></script>
<!-- vendor -->
<script src="<?= base_url('assets/js/') ?>extra/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/jquery.easing.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/dataTables.bootstrap4.js" crossorigin="anonymous"></script>
<!-- custom js -->
<script src="<?= base_url('assets/') ?>js/all.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/') ?>js/scripts.js" crossorigin="anonymous"></script>
<!-- export plugin -->
<script src="<?= base_url('assets/js/') ?>extra/jquery.dataTables.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/dataTables.bootstrap4.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/dataTables.buttons.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/buttons.print.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/jszip.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/pdfmake.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/vfs_fonts.js" crossorigin="anonymous"></script>
<script src="<?= base_url('assets/js/') ?>extra/buttons.html5.min.js" crossorigin="anonymous"></script>
<!-- script -->
<script type="text/javascript" class="init">
	$(document).ready(function() {
		$('#exampleLaporan').DataTable({
			dom: 'Bfrtip',
			buttons: [{
					extend: 'print',
					title: 'Data Pengaduan',
					customize: function(win) {
						$(win.document.body).find("")
							.css('font-size', '10pt')
							.append(
								'<img src="http://localhost/pengaduan_ci//assets/gambar/village.png" />'
							);

						$(win.document.body).find('table')
							.addClass('compact')
							.css('font-size', 'inherit');
					}
				},
				{
					extend: 'pdf',
					orientation: 'landscape',
					pageSize: 'LEGAL',
					title: 'Data Pengaduan'
				},
				{
					extend: 'excel',
					title: 'Data Pengaduan'
				}
			]
		});
	});
</script>
<script type="text/javascript" class="init">
	$(document).ready(function() {
		$('#example').DataTable();
	});
</script>
</body>

</html>