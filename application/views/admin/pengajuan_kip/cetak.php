<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pengajuan KIP <?php  echo $cetak->id?></title>
<style>
.ttd_right {
  margin-left: 400px;
  margin-top: 40px;
  width: 300px;
  /* border: 3px solid #73AD21; */
  padding: 10px;
}
.text_content{
    text-indent: 30px;
}

</style>
</head>
<body>
<div align="center" style="margin-top: 2%;">
    <img style="max-width: 20cm;" src="uploads/image/kop_surat.jpg"/>
</div>
<div align="center" style="margin-top: 40px;">
    <font size="16" face="Times New Roman">
        <u>SURAT KETERANGAN</u>
    </font>
</div>
<div align="center" style="margin-top: 0px;">
    <font size="12" face="Times New Roman">
        Nomor : 421/____/101.6.1.27/2020
    </font>
</div>
<div style="margin-top: 30px;">
    <font size="12" face="Times New Roman">
       <table>
            <tbody>
                <tr>
                    <td><p>Yang bertanda tangan dibawah ini</p></td>
                    <td>:</td>  
                </tr>
                <tr>
                    <td>A.  Nama</td>
                    <td>:</td>
                    <td><?php echo $sekolah->nama_kepsek?></td>
                </tr>
                <tr>
                    <td>B.  Jabatan</td>
                    <td>:</td>
                    <td>Kepala Sekolah SMK Negeri 5 Surabaya</td>
                </tr>
                <tr>
                    <td><p> ini menerangkan bahwa </p></td> 
                    <td>:</td>    
                </tr>
                <tr>
                    <td>A.  Nama Orang Tua</td>
                    <td>:</td>
                    <td><?php echo $cetak->nama_ortu?></td>
                </tr>
                <tr>
                    <td>B.  Alamat</td>
                    <td>:</td>
                    <td><?php echo $cetak->alamat?></td>
                </tr>
                <tr>
                    <td>C.  Pekerjaan</td>
                    <td>:</td>
                    <td><?php echo $cetak->pekerjaan?></td>
                </tr>
                <tr>
                    <td><p class="text_content">Orang Tua Dari Siswa </p></td>
                    <td>:</td>      
                </tr>
                <tr>
                    <td>A.  Nama Siswa</td>
                    <td>:</td>
                    <td><?php echo $cetak->nama_lengkap?></td>
                </tr>
                <tr>
                    <td>B.  kelas / Jurusan</td>
                    <td>:</td>
                    <td><?php echo $cetak->nama_rombel." / ".$cetak->nama_kompli?></td>
                </tr>
                <tr>
                    <td><p class="text_content">Keperluan</td>
                    <td>:</td>
                    <td>Pengajuan Awal Kartu Indonesia Pintar (KIP)</td>
                </tr>
            </tbody>
       </table>
        <p class="text_content">
            Sehubung maksud tersebut diatas, mohon agar dapatnya diberikan bantuan serta fasilitas. Siswa diatas
        adalah benar - benar siswa SMK Negeri 5 Surabaya Tahun Pelajaran 2019/2020.
        </p>
       
        <p class="text_content">
            Demikian Surat Keterangan ini dibuat untuk dipergunakan seperlunya.
        </p>
        <div class="ttd_right" align="center">  
            Surabaya, <?php echo $tanggal;?><br>
            Kepala Sekolah,
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <u><?php echo $sekolah->nama_kepsek?></u><br>
            <?php echo $sekolah->pangkat." / ".$sekolah->golongan ?><br>
            NIP.<?php echo $sekolah->nip?>
        </div>          
    </font>
</div>
<div style="page-break-after: auto;" align="center">
    <?php echo "|".$cetak->id."|".$cetak->nama_lengkap."|".$cetak->img_sktm."|"?>
   <img style="max-width: 20cm; max-height: 29cm;" src="<?php echo "uploads/sktm/".$cetak->img_sktm?>"/>
</div>
</body>
</html>