<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body>
<div class="container" align="center">
	<div class="card" style="margin-top: 2%;">
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
		<div class="card-header" style="background-color: #dcffcc;">
			<h2> Cari Nama Peserta Didik </h2>
		</div>
		<div class="card-body">
			<form action="<?php echo site_url('admin/pengajuan_kip/dicari/')?>" method="GET" class="was-validated" align="left">
			<div class="form-group">
								<label for="Nama_Lengkap">Nama Lengkap*</label>
								<select name="id" id="PilihSiswa" class=" form-control <?php echo form_error('Nama_Lengkap') ? 'is-invalid':'' ?>" >
										<option selected disabled>-- Pilih Nama Peserta Didik --</option>
									<?php foreach ($siswa as $siswa): ?>
										<option value="<?php echo $siswa->nis ?>"><?php echo $siswa->nm_lengkap ?> (<?php echo $siswa->nama_rombel?>)</option>
									<?php endforeach; ?>
										
								</select>
								<div class="invalid-feedback ">
									<?php echo form_error('Nama_Lengkap') ?>
								</div>
							</div>
		</div>
		<div class="card-footer">
			<input type="submit" class="btn btn-success" value="cari"/>
			<a href="<?php echo site_url();?>" class="btn btn-danger">kembali</a>
		</div>
			</form>
	</div>
</div>
</body>
<?php $this->load->view("admin/_partials/js.php"); ?>
</html>