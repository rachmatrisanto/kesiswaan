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
		<h1>Portal Mandiri Siswa</h1>
	</div>
	<div class="row">
			<div class="col-xl-3 col-sm-3 mb-3">
			<div class="card text-white o-hidden h-100" style="background-color: red;">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-school"></i>
				</div>
				<div class="mr-5">Website Sekolah</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" target="_blank" href="https://smkn5-sby.sch.id">
				<span class="float-left">Klik Disini</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-3 mb-3">
			<div class="card text-white o-hidden h-100" style="background-color: #bb29ff;">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-money-check-alt"></i>
				</div>
				<div class="mr-5">Bursa Kerja Khusus</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" target="_blank" href="https://bkk.smkn5-sby.sch.id">
				<span class="float-left">Klik Disini</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-3 mb-3">
				<div class="card text-white bg-success o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-atom"></i>
				</div>
				<div class="mr-5">ELearning</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" target="_blank" href="http://elstem.smkn5-sby.sch.id">
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
					<i class="far fa-file"></i>
				</div>
				<div class="mr-5">Elektronik Digital Ijazah</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" target="_blank" href="http://edi.smkn5-sby.sch.id">
				<span class="float-left">Klik Disini</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-3 mb-3">
				<div class="card text-white o-hidden h-100" style="background-color: #99722e;">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-user-graduate"></i>
				</div>
				<div class="mr-5">Kelulusan</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" target="_blank" href="http://103.233.154.242:81/kelulusan">
				<span class="float-left">Klik Disini</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-3 col-sm-3 mb-3">
				<div class="card text-white bg-warning o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-chalkboard-teacher"></i>
				</div>
				<div class="mr-5">Kenaikan Kelas</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" target="_blank" href="http://103.233.154.242:81/kenaikan">
				<span class="float-left">Klik Disini</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			
			<div class="col-xl-3 col-sm-3 mb-3">
				<div class="card text-white bg-secondary o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-file-contract"></i>
				</div>
				<div class="mr-5">Pengajuan KIP Baru</div>
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
				<div class="card text-white bg-info o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="mr-5">Surat Izin Keluar</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="">
				<!-- <?php echo site_url('admin/surat_keluar/cari_siswa') ?> -->
				<span class="float-left">Klik Disini</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
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
