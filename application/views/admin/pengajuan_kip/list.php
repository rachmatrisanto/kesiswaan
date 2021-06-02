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
				
				<?php if ($this->session->flashdata('failed')): ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('failed'); ?>
				</div>
				<?php endif; ?>

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header alert-success">
						Pengajuan Awal KIP
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr align="center">
										<th>No</th>
										<th>Kode</th>
										<th>Nis</th>
										<th>Nama</th>
										<th>Rombel</th>
										<th>Kompetensi <br> Keahlian</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1; foreach ($pengajuan_kip as $pengajuan_kip): ?>
									<tr align="center">
										<td width="20px"><?php echo $no++;?></td>
										<td>
											<?php echo $pengajuan_kip->id ?>
										</td>
										<td>
											<?php echo $pengajuan_kip->nis_lengkap ?>
										</td>
										<td align="left">
											<?php echo $pengajuan_kip->nama_lengkap ?>
										</td>
										<td>
											<?php echo $pengajuan_kip->nama_rombel ?>
										</td>
										<td>
											<?php echo $pengajuan_kip->nama_kompli ?>
										</td>
										<td width="20%">
											<a title="Cetak" href="<?php echo site_url('admin/pengajuan_kip/cetak_surat/'.$pengajuan_kip->id)?>"
												class="btn-small text-dark" target="_blank"><i class="fas fa-print"></i></a>
											<!-- <a title="Ubah" href="<?php echo site_url('admin/pengajuan_kip/')?>"
											 class="btn-small text-primary"><i class="fas fa-edit"></i></a> -->
											<a title="Hapus" onclick="deleteConfirm('<?php echo site_url('admin/pengajuan_kip/delete/'.$pengajuan_kip->id) ?>')"
											 href="#!" class="btn-small text-danger"><i class="fas fa-trash"></i></a>
											 </div>
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
