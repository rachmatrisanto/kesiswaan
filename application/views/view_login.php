<!DOCTYPE html>
<html>
<head>
<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body background="<?php echo base_url()?>assets/image/background.jpg">
<div class="container" align="center">
    <div class="card" style="margin-top: 3%;">
        <div class="card-header">
            <h2><i class="fa fa-id-badge" > Login </i></h2>
            
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('Login/aksi_login')?>" method="post" class="was-validated"> 
                <div class="form-group">
                  <h5>Username</h5>
                  <input type="text" name="username" class="form-control" required>
                  <div class="valid-feedback">Sudah terisi</div>
    			  <div class="invalid-feedback">Silahkan Diisi</div>
                </div>
                <div class="form-group">
                  <h5>Password</h5>
                  <input type="password" name="password" class="form-control" required>
                  <div class="valid-feedback">Sudah terisi</div>
    			  <div class="invalid-feedback">Silahkan Diisi</div>
                </div>
                
                  <input hidden type="number" name="sekolah" class="form-control" value="20532211">
                  
                <?php if ($this->session->flashdata('failed')): ?>
					<div class="alert alert-danger" role="alert">
					<?php echo $this->session->flashdata('failed'); ?>
				</div>
			    <?php endif; ?>
                <div class="form-group">
                  <button class="btn btn-primary"> Login </button>
                </div>
            </form>
        </div>
        <div class="card-footer">
            
            <a href="<?php echo base_url()?>" style="text-decoration: none; color: black;"> SMK Negeri 5 Surabaya </a>
        </div>
    </div>
</div>
</body>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
</html>
<style>
.valid-feedback{
    text-align: left;
}
.invalid-feedback{
    text-align: left;
}
</style>