<?php
$content = '
<img src="./res/logo2.png" alt="logo"';
?>
<style type="text/css">
* { 
    margin: 0; 
    padding: 0; 
}
body { 
    font: 14px/1.4 Georgia, Serif; 
}
#page-wrap {
    margin: 50px;
}
p {
    margin: 20px 0; 
}

    /* 
    Generic Styling, for Desktops/Laptops 
    */
    table { 
        width: 100%; 
        border-collapse: collapse; 
    }
    /* Zebra striping */
    tr:nth-of-type(odd) { 
        background: #eee; 
    }
    th { 
        background: #333; 
        color: white; 
        font-weight: bold; 
    }
    td, th { 
        padding: 6px; 
        border: 1px solid #ccc; 
        text-align: center; 
    }
    .headerl{
        float: left;
        width: 1080px;
        height: 50px;
    }
    .logo{
        float: left;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 50px;
        width: 200px;
        height: 50px;
    }
    .content_logo{
        float: left;
        width: 1000px;
        margin: -85px 0px 40px 0px;
        padding: 0px 0px 0px 160px;
        height: 50px;
    }
</style>
<div class="headerl"> 
    <div class="logo"><img src="./res/logo2.png"></div>
</div>

<div class="content_logo"> 
    <font style="font-size:22px;">Yayasan Pendidikan Haji Agus Salim</font><br>
    <font style="color:blue; font-size:22px; font-weight:bold;">UNIVERSITAS MEDAN AREA</font><br>
    <font style="font-size:15px;">Jalan Kolam Nomor 1 Medan Estate / Jalan Gedung PBSI, Medan 20223</font><br>
    <font style="font-size:15px;">Telepon / Fax : (061) 7366878, 7364348, 7360168 / (061) 7368012</font>
</div>

<span style="font-size: 20px; font-weight: bold">Rekap Pendaftaran Pegawai Universitas Medan Area<br></span>
<br>
<br>
<table width="100%">
    <thead>
        <tr>
            <th rowspan="2">No</th>
            <th colspan="9" style="font-size: 16px;">
                Rekap Pendaftaran Pegawai Universitas Medan Area
            </th>
        </tr>
        <tr>
            <th>NIK</th>
            <th style="width:100px;">NAMA</th>
            <th>JENIS KELAMIN</th>
            <th>TEMPAT, TANGGAL LAHIR</th>
            <th>PENDIDIKAN</th>
            <th>No. HP</th>
        </tr>
    </thead>
<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("select * from tbl_pegawai_dosen WHERE level_user='4' AND kd_approve=''");
    $no=1;
    while($row=mysql_fetch_array($view)){
?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['nik'];?></td>
        <td style="width:50px;"><?php echo $row['username'];?></td>
        <td><?php echo $row['jenkel'];?></td>
        <td><?php echo $row['tempat_lahir'];?>, <?php echo $row['tgl_lahir'];?></td>
        <td><?php echo $row['pendidikan'];?></td>
        <td><?php echo $row['hp'];?></td>
    </tr>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <th colspan="10" style="font-size: 12px;">
                Copyright &copy; <?php $tahun_sekarang = date('Y'); 
                echo $tahun_sekarang;
                ?> Kepegawaian - Universitas Medan Area - ICT
            </th>
        </tr>
    </tfoot>
</table>