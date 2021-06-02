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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/rombel/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/rombel/add') ?>" method="post" enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $rombel->kd_rombel?>" />

							<div class="form-group">
								<label for="kode rombel">Kode rombel*</label>
								<input class="form-control <?php echo form_error('kode rombel') ? 'is-invalid':'' ?>"
								 type="text" name="kode rombel" placeholder="kode rombel" value="<?php echo $rombel->kd_rombel ?>"/>
								<div class="invalid-feedback">
									<?php echo form_error('kode rombel') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="nama rombel">Nama rombel*</label>
								<input class="form-control <?php echo form_error('nama rombel') ? 'is-invalid':'' ?>"
								 type="text" name="nama rombel"  placeholder="nama rombel" value="<?php echo $rombel->nama_rombel?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama rombel') ?>
								</div>
							</div>
								
							<input class="btn btn-success" type="submit" name="btn" value="Simpan" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* Wajib Diisi
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
