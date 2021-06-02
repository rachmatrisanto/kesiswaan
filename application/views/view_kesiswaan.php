<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body background="<?php echo base_url()?>assets/image/background.jpg">
<div class="container-fluid" align="center" >
	<div style="padding-top: 1%; padding-bottom: 3%;" align="center">
		<img src="<?php echo base_url()?>assets/image/logo.png" alt="logo" class="rounded-circle"/>
		<h1>SMK Negeri <a href="<?php echo site_url('Login')?>" style="text-decoration: none; color: black;"> 5 </a>Surabaya</h1>
		<h1>Layanan Mandiri Kesiswaan</h1>
	</div>
	<div class="row">
			<div class="col-xl-3 col-sm-3 mb-3">

			</div>
			<div class="col-xl-3 col-sm-3 mb-3">
				<div class="card text-white bg-success o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-file-contract"></i>
				</div>
				<div class="mr-5">Pengajuan Awal KIP</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/pengajuan_kip/cari_siswa') ?>">
				<span class="float-left">Klik Disini</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-3 mb-3">
				<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="mr-5">Surat Izin Keluar</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/surat_keluar/cari_siswa') ?>">
				<span class="float-left">Klik Disini</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-3 mb-3">

			</div>
	</div>
</div>
</body>
<?php $this->load->view("admin/_partials/js.php") ?>

<style>
.card{
	border-style: outset;  
	border-width: 2px; 
	width: 300px;
}
a:link,a:visited{
	text-decoration: none;
	color:black;
}
</style>

</html>
