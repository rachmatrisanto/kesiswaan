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
			<form action="<?php echo site_url('admin/pengajuan_kip/add')?>" method="post" class="was-validated" 
				align="left" enctype="multipart/form-data">
			<input  hidden name="id" value="<?php echo date("dmYis")?>"/>
			<input hidden name="bulan" value="<?php echo date("M")?>"/>
			<input hidden name="tahun" value="<?php echo date("Y")?>"/>
			<input hidden name="date_update" value="<?php echo date("dMY")?>"/>

			<div class="form-group">
				<label for="nis">Nis*</label>
				<input class="form-control"
					 type="text" name="nis" readonly value="<?php echo $pengajuan_kip->nis?>"/>
				<div class="invalid-feedback">
					<?php echo form_error('nis') ?>
				</div>
			</div>

			<div class="form-group">
				<label for="nama_lengkap">Nama Lengkap*</label>
				<input class="form-control"
					 type="text" disabled placeholder="<?php echo $pengajuan_kip->nm_lengkap ?>"/>
			</div>

			<div class="form-group">
				<label for="kompli">Kompetensi keahlian*</label>
				<input class="form-control"
					 type="text" disabled placeholder="<?php echo $pengajuan_kip->nama_kompli ?>"/>
			</div>

			<div class="form-group">
				<label for="rombel">Rombongan Belajar*</label>
				<input class="form-control"
					 type="text" disabled placeholder="<?php echo $pengajuan_kip->nama_rombel?>"/>
			</div>

			<div class="form-group">
				<label for="nama_ortu">Nama Orang Tua*</label>
				<input class="form-control"
					 type="text" disabled placeholder="<?php echo $pengajuan_kip->nm_ortu ?>"/>
			</div>

			<div class="form-group">
				<label for="alamat">Alamat*</label>
				<input class="form-control"
					 type="text" disabled placeholder="<?php echo $pengajuan_kip->alamat ?>"/>
			</div>
			
			<div class="form-group">
				<label for="pekerjaan">Pekerjaan*</label>
				<input class="form-control"
					 type="text" disabled placeholder="<?php echo $pengajuan_kip->pekerjaan ?>"/>
			</div>

			<div class="form-group">
				<label for="sktm">Upload SKTM*</label>
				<input class="form-control"
					 type="file" name="sktm" required/>
					 <div class="invalid-feedback ">
						<?php echo "Wajib Upload SKTM" ?>
					</div>
			</div>

			<div class="alert alert-warning">
				NB: <br>
				*Jika Biodata tidak sesuai bisa menemui bagian kesiswaaan untuk merubah datanya.
			</div>

		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Daftar</button>
			<a href="<?php echo base_url()?>index.php/cover/" class="btn btn-danger"> Kembali </a>
		</div>
			</form>
	</div>
</div>
</body>
<?php $this->load->view("admin/_partials/js.php") ?>
</html>