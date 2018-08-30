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
    .medan{
        float: left;
        margin: 60px 0px 0px 300px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: center;
    }
    .ttd{
        float: left;
        margin: 110px 0px 0px 300px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: center;
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

<table width="100%">
    <thead>
        <tr>
            <th colspan="11" style="background:red;">EVALUASI KARTU KENDALI AKTIFITAS PEGAWAI <?php $tanggal = date("Y-m-d"); ?><?php echo TanggalIndo($tanggal); ?></th>
        </tr>
        <tr>
            <th>No</th>
            <th>NAMA</th>
            <th style="width:75px; font-size:10px; text-align:center;">STATUS KERJA</th>
            <th colspan="4" style="width:100px; font-size:10px; text-align:center;">HASIL PENILAIAN K2AP</th>
            <th style="width:135px; font-size:10px; text-align:center;">NILAI RATA-RATA</th>
        </tr>
    </thead>
    <?php
        function TanggalIndo($date){
            $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
         
            $tahun = substr($date, 0, 4);
            $bulan = substr($date, 5, 2);
            $tgl   = substr($date, 8, 2);
         
            $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;     
            return($result);
        }
    ?>

<?php
    include "/../../config/koneksi.php";
    $coba = 0;
    $view=mysql_query("SELECT *
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) GROUP BY nik ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td><?php echo $no; ?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:75px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:60px; font-size:10px; text-align:center;"><?php echo $row['hasil'];?></td>
             <?php 
                //if($coba == )
            ?>
            <td style="width:60px; font-size:10px; text-align:center;"><?php echo $row['huruf'];?></td>
            <td style="width:60px; font-size:10px; text-align:center;"><?php echo $row['huruf'];?></td>
            <td style="width:60px; font-size:10px; text-align:center;"><?php echo $row['huruf'];?></td>
        </tr>
    </tbody>
    
    
   
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <th colspan="8" style="font-size: 10px;">
                Copyright &copy; <?php $tahun_sekarang = date('Y'); 
                echo $tahun_sekarang;
                ?> Kepegawaian - Universitas Medan Area - ICT
            </th>
        </tr>
    </tfoot>
</table>
 <div class="medan">
    Medan. <?php $tanggal = date("Y-m-d"); ?>
    <?php echo TanggalIndo($tanggal); ?><br>
    Kabag. Kepegawaian
</div>

<div class="ttd">
    Sirmas Munte, ST, MT
</div>