<!DOCTYPE html>
<html lang="en">
<head>
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" media="print">
    <title>Cetak Daftar <?php echo $daftar->id?></title>
</head>
<body>

<div class="container" align="center">
    <div class="card" >
        <div class="card-header alert-danger">
            Layanan Mandiri Siswa (Pengajuan Awal KIP)
        </div>
        <div class="card-body alert-success">
            <p>Kode Pendaftaran :</p>
            <p style="font-size: 48px;"><?php echo $daftar->id?></p>
        </div>
        <div class="card-footer alert-danger">
            <p><?php echo $daftar->nama_lengkap." | ".$daftar->nama_rombel?></p>
        </div>
    </div>
    
    <a class="btn btn-danger" href="<?php echo site_url('cover')?>">kembali</a>
</div>

<script>
        window.print();
</script>    
</body>
<style>
p{
    font-size: 24px;
    font-style: normal;
}

</style>
<script src="<?php echo base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</html>