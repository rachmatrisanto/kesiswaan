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
						<a href="<?php echo site_url('admin/peserta/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/peserta/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="nis">Nis*</label>
								<input class="form-control <?php echo form_error('nis') ? 'is-invalid':'' ?>"
								 type="text" name="nis" placeholder="NIS" />
								<div class="invalid-feedback">
									<?php echo form_error('nis') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="nama">Nama Lengkap*</label>
								<input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
								 type="text" name="nama"  placeholder="nama lengkap" />
								<div class="invalid-feedback">
									<?php echo form_error('nama') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="kompli">Kompetensi keahlian*</label>
								<select class="form-control <?php echo form_error('kompli') ? 'is-invalid':'' ?>"
									name="kompli">
										<option disabled selected>-- Pilih Kompetensi keahlian --</option>
									<?php foreach ($kompli as $kompli): ?>
										<option value="<?php echo $kompli->kd_kompli ?>"><?php echo $kompli->nm_kompli ?></option>
									<?php endforeach; ?>
								</select>
								<div class="invalid-feedback ">
									<?php echo form_error('kopmli') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="rombel">Kelas*</label>
								<select class="form-control <?php echo form_error('rombel') ? 'is-invalid':'' ?>"
									name="rombel">
										<option disabled selected>-- Pilih Kompetensi keahlian --</option>
									<?php foreach ($rombel as $rombel ): ?>
										<option value="<?php echo $rombel->kd_rombel ?>"><?php echo $rombel->nama_rombel ?></option>
									<?php endforeach; ?>
								</select>
								<div class="invalid-feedback ">
									<?php echo form_error('rombel') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="namaOrtu">Nama Orang Tua*</label>
								<input class="form-control <?php echo form_error('namaOrtu') ? 'is-invalid':'' ?>"
								 type="text" name="namaOrtu" min="0" placeholder="namaOrtu" />
								<div class="invalid-feedback">
									<?php echo form_error('namaOrtu') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat*</label>
								<textarea class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>"
								 name="alamat" placeholder="alamat"></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('alamat') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="pekerjaan">Pekerjaan*</label>
								<input class="form-control <?php echo form_error('pekerjaan') ? 'is-invalid':'' ?>"
								 type="text" name="pekerjaan" min="0" placeholder="pekerjaan" />
								<div class="invalid-feedback">
									<?php echo form_error('pekerjaan') ?>
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
