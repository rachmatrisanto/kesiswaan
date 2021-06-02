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

        <!-- 
        karena ini halaman overview (home), kita matikan partial breadcrumb.
        Jika anda ingin mengampilkan breadcrumb di halaman overview,
        silahkan hilangkan komentar (//) di tag PHP di bawah.
        -->
		<?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Icon Cards-->
		<div class="row">
			<div class="col-xl-4 col-sm-6 mb-4">
			<div class="card text-white bg-info o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="far fa-id-badge"></i>
				</div>
				<div class="mr-5"><?php echo $jumlahsiswa;?> Peserta Didik</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/peserta') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-4 col-sm-6 mb-4">
			<div class="card text-white bg-warning o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-cog"></i>
				</div>
				<div class="mr-5"><?php echo $jumlahkompli;?> Kompetensi Keahlian</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/kompli') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-4 col-sm-6 mb-4">
			<div class="card text-white bg-danger o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-chalkboard-teacher"></i>
				</div>
				<div class="mr-5"><?php echo $jumlahrombel;?> Rombongan Belajar</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/rombel') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-6 col-sm-6 mb-6">
				<div class="card text-white bg-success o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-file-contract"></i>
				</div>
				<div class="mr-5"><?php echo $jumlahpengajuankip;?> Pengajuan KIP</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/pengajuan_kip') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
			<div class="col-xl-6 col-sm-6 mb-6">
				<div class="card text-white bg-primary o-hidden h-100">
				<div class="card-body">
				<div class="card-body-icon">
					<i class="fas fa-map-marker-alt"></i>
				</div>
				<div class="mr-5"><?php echo $jumlahsuratkeluar;?> Surat Izin Keluar</div>
				</div>
				<a class="card-footer text-white clearfix small z-1" href="<?php echo site_url('admin/surat_keluar') ?>">
				<span class="float-left">View Details</span>
				<span class="float-right">
					<i class="fas fa-angle-right"></i>
				</span>
				</a>
			</div>
			</div>
		</div>

		<!-- Area Chart Example-->
		<div class="card mb-3" style="margin-top: 2%;">
			<div class="card-header">
			<i class="far fa-building"></i>
			Data Sekolah</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
						<tbody>
					<tr>
						<td><p>NPSN</p></td>
						<td>:</td>
						<td><?php echo $sekolah->npsn?></td>
					</tr>
					<tr>
						<td><p>Nama</p></td>
						<td>:</td>
						<td><?php echo $sekolah->nama_sekolah?></td>
					</tr>
					<tr>
						<td><p>Alamat</p></td>
						<td>:</td>
						<td><?php echo $sekolah->alamat?></td>
					</tr>
					<tr>
						<td><p>Kodepos</p></td>
						<td>:</td>
						<td><?php echo $sekolah->kodepos?></td>
					</tr>
					<tr>
						<td><p>email</p></td>
						<td>:</td>
						<td><?php echo $sekolah->email?></td>
					</tr>
					<tr>
						<td><p>website</p></td>
						<td>:</td>
						<td><?php echo $sekolah->website?></td>
					</tr>
					<tr>
						<td><p>Kepala Sekolah</p></td>
						<td>:</td>
						<td><?php echo $sekolah->nama_kepsek?></td>
					</tr>
					<tr>
						<td><p>NIP</p></td>
						<td>:</td>
						<td><?php echo $sekolah->nip?></td>
					</tr>
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
<?php $this->load->view("admin/_partials/js.php") ?> 
</body>
</html>
