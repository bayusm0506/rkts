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
        margin: 60px 0px 0px 530px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: left;
    }
    .ttd{
        float: left;
        margin: 110px 0px 0px 500px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: center;
    }
    .medan2{
        float: left;
        margin: -150px 0px 0px 30px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: left;
    }
    .ttd2{
        float: left;
        margin: 110px 0px 0px 30px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: left;
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
        <tr border="0">
            <th colspan="12" style="color:red;" >BAGIAN KEPEGAWAIAN</th>
        </tr>
        <tr>
            <th colspan="12" style="background:rgb(0, 102, 102); color:white;">EVALUASI KARTU KENDALI AKTIVITAS PEGAWAI BULAN <?php echo date('F Y', strtotime(date('Y-m')." -1 month")); ?></th>
        </tr>
        <tr>
            <th style="width:15px; font-size:10px; text-align:center;" rowspan="2">No</th>
            <th style="width:95px; font-size:10px; text-align:center;" rowspan="2">NAMA</th>
            <th style="width:15px; font-size:10px; text-align:center;" rowspan="2">STATUS</th>
            <th style="width:180px; font-size:10px; text-align:center;" colspan="7">HASIL EVALUASI K2AP TINGKAT UNIVERSITAS</th>
            <th style="width:120px; font-size:10px; text-align:center;" rowspan="2">PENANGGUNG JAWAB K2AP</th>
            <th style="width:80px; font-size:10px; text-align:center;" rowspan="2">Hasil Penilaian untuk Elevator</th>
            
        </tr>
        <tr>
            <th style="font-size:10px; text-align:center;">1</th>
            <th style="font-size:10px; text-align:center;">2.1</th>
            <th style="font-size:10px; text-align:center;">2.2</th>
            <th style="font-size:10px; text-align:center;">3.1</th>
            <th style="font-size:10px; text-align:center;">3.2</th>
            <th style="font-size:10px; text-align:center;">3.3</th>
            <th style="font-size:10px; text-align:center;">4</th>
        </tr>
        <tr>
            <th colspan="12" style="text-align:left;">FAKULTAS TEKNIK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS TEKNIK%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">FAKULTAS PERTANIAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS PERTANIAN%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">FAKULTAS BIOLOGI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS BIOLOGI%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">FAKULTAS HUKUM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS HUKUM%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">FAKULTAS ISIPOL</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS ISIPOL%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">PASCASARJANA</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PASCASARJANA%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">FAKULTAS PSIKOLOGI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS PSIKOLOGI%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
</table><table width="100%">
    <thead>
        <tr>
            <th colspan="12" style="text-align:left;">FAKULTAS EKONOMI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS EKONOMI%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">KANTOR YPHAS</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%KANTOR YPHAS%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">REKTORAT</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%REKTORAT%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">BIRO ADMINISTRASI KEMAHASISWAAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAK%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">PUSKOM & BAHASA</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PUSKOM%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">BIRO ADMINISTRASI AKADEMIK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAA%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">LP2M</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%LP2M%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">MAUP/PJI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%MAUP/PJI%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">PKK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PKK%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">PIK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PIK%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">LPM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%LPM%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">PERPUSTAKAAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PERPUSTAKAAN%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">BIRO ADMINISTRASI UMUM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAU%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">BAG. KEPEGAWAIAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAGIAN KEPEGAWAIAN%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">BAG. KEUANGAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAGIAN KEUANGAN%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">FOTOCOPY & BOOK STORE</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FOTO COPY%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">BAG. UMUM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAGIAN UMUM%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">PPK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PPK%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">SUPIR</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%SUPIR%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">SATPAM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%SATPAM%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">LAPANGAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%LAPANGAN%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">KEBERSIHAN</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%KEBERSIHAN%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">ASRAMA MAHASISWA</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%ASRAMA MAHASISWA%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
            <th colspan="12" style="text-align:left;">PUSAT ISLAM</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("
            SELECT username, nik, unitkerja, statuskerja, point1, point21, point22, point31, point32, point33, point4, pimpinan, 
                IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', 
                   ROUND((COUNT(IF(point1 = 'A',point1,  NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*10000/7,-2), 
                   ROUND((COUNT(IF(point1 = 'A',point1, NULL))+COUNT(IF(point21 = 'A',point21,  NULL))+COUNT(IF(point22 = 'A',point22,  NULL))+COUNT(IF(point31 = 'A',point31,  NULL))+COUNT(IF(point32 = 'A',point32,  NULL))+COUNT(IF(point33 = 'A',point33,  NULL))+COUNT(IF(point4 = 'A',point4,  NULL)))*5000/7,-2)) AS hasilevaluasi
            FROM tes_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PUSAT ISLAM%' GROUP BY nik

        ");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:25px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point1'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point21'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point22'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point31'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point32'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point33'];?></td>
            <td style="width:10px; font-size:10px; text-align:center;"><?php echo $row['point4'];?></td>
            <td style="width:120px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:80px; font-size:10px; text-align:center;"><?php echo $row['hasilevaluasi'];?></td>
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
<div class="medan">
    Medan. <?php $tanggal = date("Y-m-d"); ?>
    <?php echo TanggalIndo($tanggal); ?><br>
    Dilaporkan Oleh <br>
    Kabag. Kepegawaian
</div>

<div class="ttd">
    Sirmas Munte, ST, MT
</div>

<div class="medan2">
    Diketahui<br>
    Wakil Rektor Bidang Akademik
</div>

<div class="ttd2">
    Dr. Heri Kusmanto, MA
</div>