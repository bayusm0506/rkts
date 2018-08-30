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
            <th colspan="5" style="background:rgb(102, 102, 102); color:white;">HASIL EVALUASI K2AP <?php $tanggal = date("Y-m-d"); ?><?php echo TanggalIndo($tanggal); ?></th>
        </tr>
        <tr>
            <th style="width:15px; font-size:10px; text-align:center;">No</th>
            <th>NAMA</th>
            <th style="width:95px; font-size:10px; text-align:center;">STATUS KERJA</th>
            <th style="width:50px; font-size:10px; text-align:center;">PIMPINAN</th>
            <th style="width:90px; font-size:10px; text-align:center;">TUNJANGAN</th>
        </tr>
        <tr>
            <th colspan="5" style="text-align:left;">FAKULTAS TEKNIK</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS TEKNIK%' GROUP BY nik");

    $a = 0;
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center; "><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;">Rp. <?php echo $row['hasilevaluasi'];?></td>
            <?php $a += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
     <?php
        $no=$no+1;
        }
    ?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $a;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS PERTANIAN%' GROUP BY nik");
    $b = 0;
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
            <?php $b += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $b;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS BIOLOGI%' GROUP BY nik");
    $c = 0;
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
            <?php $c += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $c;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS HUKUM%' GROUP BY nik");
    $d = 0;
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
            <?php $d += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $d;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS ISIPOL%' GROUP BY nik");
    $e = 0;
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
            <?php $e += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $e;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Pascasarjana%' GROUP BY nik");
    $f = 0;
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
            <?php $f += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $f;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS PSIKOLOGI%' GROUP BY nik");
    $g = 0;
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
            <?php $g += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $g;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%FAKULTAS EKONOMI%' GROUP BY nik");
    $h = 0;
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
            <?php $h += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $h;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Kantor YPHAS%' GROUP BY nik");
    $i = 0;
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
            <?php $i += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $i;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Rektorat%' GROUP BY nik");
    $j = 0;
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
            <?php $j += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $j;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAK%' GROUP BY nik");
    $k = 0;
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
            <?php $k += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $k;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PUSKOM%' GROUP BY nik");
    $l = 0;
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
            <?php $l += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $l;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAA%' GROUP BY nik");
    $m = 0;
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;"><?php echo $no;?></td>
            <td style="width:180px; font-size:10px; text-align:center;"><?php echo $row['username'];?></td>
            <td style="width:95px; font-size:10px; text-align:center;"><?php echo $row['statuskerja'];?></td>
            <td style="width:230px; font-size:10px; text-align:center;"><?php echo $row['pimpinan'];?></td>
            <td style="width:90px; font-size:10px; text-align:center;">Rp. <?php echo $row['hasilevaluasi'];?></td>
            <?php $m += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $m;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%LP2M%' GROUP BY nik");
    $n = 0;
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
            <?php $n += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
<tfoot>
    <tr>
        <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
        <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $n;?></td>
    </tr>
</tfoot>
</table>
<table width="100%">
    <thead>
        <tr>
            <th colspan="5" style="text-align:left;">MAUP/PJI</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%MAUP/PJI%' GROUP BY nik");
    $o = 0;
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
            <?php $o += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $o;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PKK%' GROUP BY nik");
    $p = 0;
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
            <?php $p += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $p;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PIK%' GROUP BY nik");
    $q = 0;
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
            <?php $q += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
    
 <?php
    $no=$no+1;
    }
?>   
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $q;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%LPM%' GROUP BY nik");
    $r = 0;
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
            <?php $r += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
 <?php
    $no=$no+1;
    }
?>   
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $r;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Perpustakaan%' GROUP BY nik");
    $s = 0;
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
            <?php $s += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?> 
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $s;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%BAU%' GROUP BY nik");
    $t = 0;
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
            <?php $t += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $t;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Bagian Kepegawaian%' GROUP BY nik");
    $u = 0;
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
            <?php $u += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $u;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Bagian Keuangan%' GROUP BY nik");
    $v = 0;
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
            <?php $v += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?> 
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $v;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Foto Copy%' GROUP BY nik");
    $w = 0;
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
            <?php $w += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
    <?php
        $no=$no+1;
        }
    ?>
    
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $w;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Bagian Umum%' GROUP BY nik");
    $x = 0;
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
            <?php $x += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>   
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $x;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%PPK%' GROUP BY nik");
    $y = 0;
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
            <?php $y += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $y;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Supir%' GROUP BY nik");
    $z = 0;
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
            <?php $z += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $z;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Satpam%' GROUP BY nik");
    $aa = 0;
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
            <?php $aa += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $aa;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Lapangan%' GROUP BY nik");
    $bb = 0;
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
            <?php $bb += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $bb;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Kebersihan%' GROUP BY nik");
    $cc = 0;
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
            <?php $cc += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $cc;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Asrama Mahasiswa%' GROUP BY nik");
    $dd = 0;
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
            <?php $dd += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $dd;?></td>
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
    $view=mysql_query("SELECT username, statuskerja, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*10000/7,-2), ROUND(25*COUNT(IF(huruf = 'A',huruf,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_hasilnilaikk WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Pusat Islam%' GROUP BY nik");
    $ee = 0;
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
            <?php $ee += $row['hasilevaluasi']; ?>
        </tr>
    </tbody>
<?php
    $no=$no+1;
    }
?>
    <tfoot>
        <tr>
            <td style="width:15px; font-size:10px; text-align:center;" colspan="4"></td>
            <td style="width:90px; font-size:10px; text-align:center; color:red;">Rp. <?php echo $ee;?></td>
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