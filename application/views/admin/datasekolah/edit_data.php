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
                
               
				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header alert-primary">
						Data Sekolah
                    </div>
                    <?php if ($this->session->flashdata('failed')): ?>
					<div class="alert alert-success" role="alert">
					    <?php echo $this->session->flashdata('failed'); ?>
				    </div>
				    <?php endif; ?>
					<div class="card-body">
						<div class="table-responsive">
                            <form action="" 
                                class="was-validated" method="post" enctype="multipart/form-data" >
                                <input class="form-control" hidden
								 type="text" name="id" value="<?php echo $sekolah->id ?>"/>
                                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td><p>NPSN</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="npsn" value="<?php echo $sekolah->npsn?>"/></td>
                                        </tr>
                                        <tr>
                                            <td><p>Nama</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="nama_sekolah" value="<?php echo $sekolah->nama_sekolah?>"/></td>
                                        </tr>
                                        <tr>
                                            <td><p>Alamat</p></td>
                                            <td>:</td>
                                            <td><textarea class="form-control" name="alamat" ><?php echo $sekolah->alamat?></textarea></td>
                                        </tr>
                                        <tr>
                                            <td><p>Kodepos</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="kodepos" value="<?php echo $sekolah->kodepos?>"/></td>
                                        </tr>
                                        <tr>
                                            <td><p>email</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="email" value="<?php echo $sekolah->email?>"/></td>
                                        </tr>
                                        <tr>
                                            <td><p>website</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="website" value="<?php echo $sekolah->website?>"/></td>
                                        </tr>
                                        <tr>
                                            <td><p>Kepala Sekolah</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="nama_kepsek" value="<?php echo $sekolah->nama_kepsek?>"/></td>
                                        </tr>
                                        <tr>
                                            <td><p>Golongan</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="golongan" value="<?php echo $sekolah->golongan?>"/></td>
                                        </tr>
                                        <tr>
                                            <td><p>pangkat</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="pangkat" value="<?php echo $sekolah->pangkat?>"/></td>
                                        </tr>
                                        <tr>
                                            <td><p>NIP</p></td>
                                            <td>:</td>
                                            <td><input class="form-control" type="text" name="nip" value="<?php echo $sekolah->nip?>"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            
						</div>
                    </div>
                    <div class="card-footer" align="center">
                    <button type="submit" class="btn btn-success">Simpan</button>
                            </form>
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
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
