<!DOCTYPE html>
<html lang="en">

<head>
    <title>Surat Izin Keluar <?php  echo $cetak->id?></title>
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
        <u>SURAT IZIN KELUAR</u>
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
                    <td>A.  Nama nama_guru</td>
                    <td>:</td>
                    <td><?php echo $cetak->nama_guru?></td>
                </tr>
                <tr>
                    <td>B.  Nip</td>
                    <td>:</td>
                    <td><?php echo $cetak->nip?></td>
                </tr>
                
                <tr>
                    <td><p>Memberikan Izin Kepada </p></td>
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
                    <td>C. Keperluan</td>
                    <td>:</td>
                    <td><?php echo $cetak->keperluan?></td>
                </tr>
            </tbody>
       </table>
        <p class="text_content">
            Sehubung maksud tersebut diatas, mohon agar dapatnya diberikan izin meninggalkan sekolah. Peserta Didik diatas
        adalah benar - benar siswa SMK Negeri 5 Surabaya Tahun Pelajaran 2019/2020.
        </p>
       
        <div class="ttd_right" align="center">  
            Surabaya, <?php echo $tanggal;?><br>
            Yang Mengizinkan,
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <br></br>
            <u><?php echo $cetak->nama_guru?></u><br>
            NIP.<?php echo $cetak->nip?>
        </div>          
    </font>
</div>

</body>
</html>