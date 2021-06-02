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
						<a href="<?php echo site_url('admin/kompli/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form>

							<input type="hidden" name="id" value="<?php echo $kompli->kd_kompli?>" />

							<div class="form-group">
								<label for="kode kompli">Kode kompli*</label>
								<input class="form-control <?php echo form_error('kode kompli') ? 'is-invalid':'' ?>"
								 type="text" name="kode kompli" placeholder="kode kompli" value="<?php echo $kompli->kd_kompli ?>" disabled/>
								<div class="invalid-feedback">
									<?php echo form_error('kode kompli') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="nama kompli">Nama kompli*</label>
								<input class="form-control <?php echo form_error('nama kompli') ? 'is-invalid':'' ?>"
								 type="text" name="nama kompli"  placeholder="nama kompli" value="<?php echo $kompli->nm_kompli?>" disabled/>
								<div class="invalid-feedback">
									<?php echo form_error('nama kompli') ?>
								</div>
							</div>
								
							<a href="<?php echo site_url('admin/kompli') ?>" class="btn btn-danger"> Kembali </a>
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
