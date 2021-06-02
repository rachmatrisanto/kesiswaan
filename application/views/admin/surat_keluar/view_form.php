<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body>
<div class="container" align="center">
	<div class="card" style="margin-top: 2%;">
		<div class="card-header" style="background-color: #dcffcc;">
			<h2> Data Pengajuan KIP </h2>
		</div>
		<div class="card-body">
			<form action="<?php echo site_url('admin/surat_keluar/add')?>" method="post" class="was-validated" 
				align="left" enctype="multipart/form-data">
			<input  hidden name="id" value="<?php echo date("dmYis")?>"/>
			<input hidden name="bulan" value="<?php echo date("M")?>"/>
			<input hidden name="tahun" value="<?php echo date("Y")?>"/>
			<input hidden name="date_create" value="<?php echo date("dMY")?>"/>

			<div class="form-group">
				<label for="nis">Nis*</label>
				<input class="form-control"
					 type="text" name="nis" readonly value="<?php echo $surat_keluar->nis?>"/>
				<div class="invalid-feedback">
					<?php echo form_error('nis') ?>
				</div>
			</div>

			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap*</label>
				<input class="form-control"
					 type="text" disabled value="<?php echo $surat_keluar->nm_lengkap ?>"/>
			</div>

			<div class="form-group">
				<label for="kompli">Kompetensi keahlian*</label>
				<input class="form-control"
					 type="text" disabled value="<?php echo $surat_keluar->nama_kompli ?>"/>
			</div>

			<div class="form-group">
				<label for="rombel">Rombongan Belajar*</label>
				<input class="form-control"
					 type="text" disabled value="<?php echo $surat_keluar->nama_rombel?>"/>
			</div>

			<div class="form-group">
				<label for="nama_guru">Nama Guru yang Mengizinkan*</label>
				<input class="form-control"
					 type="text" name="nama_guru" required/>
				<div class="invalid-feedback">
					<?php echo form_error('nama_guru') ?>
				</div>
			</div>
			<div class="form-group">
				<label for="nip">Nip Guru*</label>
				<input class="form-control"
					 type="text" name="nip" required/>
				<div class="invalid-feedback">
					<?php echo form_error('nip') ?>
				</div>
			</div>
			<div class="form-group">
				<label for="keperluan">Keperluan*</label>
				<input class="form-control"
					 type="text" name="keperluan" required/>
				<div class="invalid-feedback">
					<?php echo form_error('keperluan') ?>
				</div>
			</div>	

			<div class="alert alert-warning">
				NB: <br>
				*Wajib Diisi
			</div>

		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Lanjutkan</button>
			<a href="<?php echo base_url()?>index.php/cover/" class="btn btn-danger"> Kembali </a>
		</div>
			</form>
	</div>
</div>
</body>
<?php $this->load->view("admin/_partials/js.php") ?>
</html>