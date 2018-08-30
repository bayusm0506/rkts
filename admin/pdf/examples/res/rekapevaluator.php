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
        color: black; 
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


<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="background:rgb(0, 102, 102); color:white;">HASIL EVALUASI K2AP <?php $tanggal = date("Y-m-d"); ?><?php echo TanggalIndo($tanggal); ?></th>
        </tr>
        <tr>
            <th style="width:15px; font-size:10px; text-align:center;">No</th>
            <th>NAMA</th>
            <th style="width:95px; font-size:10px; text-align:center;">STATUS KERJA</th>
            <th style="width:50px; font-size:10px; text-align:center;">PIMPINAN</th>
            <th style="width:90px; font-size:10px; text-align:center;">HASIL PENILAIAN UNTUK EVALUATOR</th>
        </tr>
        <tr>
            <th colspan="5" style="text-align:left;">FAKULTAS TEKNIK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS TEKNIK%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">FAKULTAS PERTANIAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS PERTANIAN%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">FAKULTAS BIOLOGI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS BIOLOGI%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">FAKULTAS HUKUM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS HUKUM%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">FAKULTAS ISIPOL</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS ISIPOL%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">PASCASARJANA</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Pascasarjana%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">FAKULTAS PSIKOLOGI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS PSIKOLOGI%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">FAKULTAS EKONOMI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS EKONOMI%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">KANTOR YPHAS</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Kantor YPHAS%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">REKTORAT</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Rektorat%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">BIRO ADMINISTRASI KEMAHASISWAAAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAK%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">PUSKOM & BAHASA</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PUSKOM%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">BIRO ADMINISTRASI AKADEMIK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAA%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">LP2M</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%LP2M%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">MAUP/PJI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%MAUP/PJI%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">PKK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PKK%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">PIK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PIK%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
    
 <?php
    $no=$no+1;
    }
?>   
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">LPM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%LPM%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
 <?php
    $no=$no+1;
    }
?>   
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">PERPUSTAKAAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Perpustakaan%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?> 
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">BIRO ADMINISTRASI UMUM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAU%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">BAG. KEPEGAWAIAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Bagian Kepegawaian%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">BAG. KEUANGAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Bagian Keuangan%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?> 
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">FOTOCOPY & BOOK STORE</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Foto Copy%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
    <?php
        $no=$no+1;
        }
    ?>
    
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">BAGIAN UMUM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Bagian Umum%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>   
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">PPK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PPK%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">SUPIR</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Supir%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">SATPAM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Satpam%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">LAPANGAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Lapangan%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">KEBERSIHAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Kebersihan%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">ASRAMA MAHASISWA</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Asrama Mahasiswa%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>

<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">PUSAT ISLAM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Pusat Islam%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
           <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
