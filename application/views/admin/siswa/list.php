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
					<div class="card-header">
						<a href="<?php echo site_url('admin/peserta/add') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr align="center">
										<th>No</th>
										<th>Nis</th>
										<th>Nama</th>
										<th>Rombel</th>
										<th>Kompetensi <br> Keahlian</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($peserta as $peserta): ?>
									<tr align="center">
										<td width="20px"><?php echo $no++;?></td>
										<td>
											<?php echo $peserta->nis_lengkap ?>
										</td>
										<td align="left">
											<?php echo $peserta->nm_lengkap ?>
										</td>
										<td>
											<?php echo $peserta->nama_rombel ?>
										</td>
										<td>
											<?php echo $peserta->nama_kompli ?>
										</td>
										<td width="20%">
											<a title="Lihat" href="<?php echo site_url('admin/peserta/lihat/'.$peserta->nis) ?>"
												class="btn btn-small"><i class="fas fa-clipboard-list"></i></a>
											<a title="Ubah" href="<?php echo site_url('admin/peserta/edit/'.$peserta->nis) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i></a>
											<a title="Hapus" onclick="deleteConfirm('<?php echo site_url('admin/peserta/delete/'.$peserta->nis) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
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
