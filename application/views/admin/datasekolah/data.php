<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">
			
				<?php if ($this->session->flashdata('success')): ?>
					<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header alert-primary">
						Data Sekolah 
						<a title="Ubah" href="<?php echo site_url('admin/datasekolah/edit/'.$sekolah->npsn) ?>"
						class="btn"><i class="fas fa-edit"></i></a>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<tbody>
									<tr>
										<td><p>NPSN</p></td>
										<td>:</td>
										<td><?php echo $sekolah->npsn?></td>
									</tr>
									<tr>
										<td><p>Nama</p></td>
										<td>:</td>
										<td><?php echo $sekolah->nama_sekolah?></td>
									</tr>
									<tr>
										<td><p>Alamat</p></td>
										<td>:</td>
										<td><?php echo $sekolah->alamat?></td>
									</tr>
									<tr>
										<td><p>Kodepos</p></td>
										<td>:</td>
										<td><?php echo $sekolah->kodepos?></td>
									</tr>
									<tr>
										<td><p>email</p></td>
										<td>:</td>
										<td><?php echo $sekolah->email?></td>
									</tr>
									<tr>
										<td><p>website</p></td>
										<td>:</td>
										<td><?php echo $sekolah->website?></td>
									</tr>
									<tr>
										<td><p>Kepala Sekolah</p></td>
										<td>:</td>
										<td><?php echo $sekolah->nama_kepsek?></td>
									</tr>
									<tr>
										<td><p>NIP</p></td>
										<td>:</td>
										<td><?php echo $sekolah->nip?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
