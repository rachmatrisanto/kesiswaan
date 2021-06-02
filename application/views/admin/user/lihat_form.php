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
						<a href="<?php echo site_url('admin/user/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/user/add') ?>" method="post" enctype="multipart/form-data" >

							<input type="hidden" name="id_user" value="<?php echo $user->id?>" />

							<div class="form-group">
								<label for="nama_user">Nama Lengkap*</label>
								<input class="form-control <?php echo form_error('nama_user') ? 'is-invalid':'' ?>"
								 type="text" name="nama_user"  placeholder="nama user" value="<?php echo $user->nama?>" readonly/>
								<div class="invalid-feedback">
									<?php echo form_error('nama_user') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="username_user">Username*</label>
								<input class="form-control <?php echo form_error('username_user') ? 'is-invalid':'' ?>"
								 type="text" name="username_user"  placeholder="username" value="<?php echo $user->username?>" readonly />
								<div class="invalid-feedback">
									<?php echo form_error('username_user') ?>
								</div>
							</div>
<!-- 
							<div class="form-group">
								<label for="password_user">Password*</label>
								<input class="form-control <?php echo form_error('password_user') ? 'is-invalid':'' ?>"
								 type="password" name="password_user"  placeholder="password " value="<?php echo base64_decode($user->password)?>" readonly/>
								<div class="invalid-feedback">
									<?php echo form_error('password_user') ?>
								</div>
							</div> -->

							<div class="form-group">
								<label for="npsn_user">NPSN*</label>
								<input class="form-control <?php echo form_error('npsn_user') ? 'is-invalid':'' ?>"
								 type="text" name="npsn_user"  placeholder="npsn " value="<?php echo $user->npsn?>" readonly/>
								<div class="invalid-feedback">
									<?php echo form_error('npsn_user') ?>
								</div>
							</div>
								
							<a class="btn btn-danger" href="<?php echo site_url('admin/user')?>">kembali</a>
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
