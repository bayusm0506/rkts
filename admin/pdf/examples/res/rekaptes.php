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
            <th style="width:15px; font-size:10px; text-align:center; background:rgb(0, 102, 102);" rowspan="2">No</th>
            <th rowspan="2">NAMA</th>
            <th style="width:95px; font-size:10px; text-align:center;" rowspan="2">STATUS KERJA</th>
            <th style="width:50px; font-size:10px; text-align:center;" colspan="7">HASIL EVALUASI K2AP TINGKAT UNIVERSITAS</th>
            <th style="width:95px; font-size:10px; text-align:center;" rowspan="2">PENANGGUNG JAWAB K2AP</th>
            <th style="width:95px; font-size:10px; text-align:center;" rowspan="2">HASIL PENILAIAN UNTUK ELEVATOR</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2.1</th>
            <th>2.2</th>
            <th>3.1</th>
            <th>3.2</th>
            <th>3.3</th>
            <th>4</th>
        </tr>
    </thead>

<?php
    include "/../../config/koneksi.php";
    $tes1 = mysql_query("SELECT COUNT(IF(hasil1 = 'A',hasil1,  NULL))
                        FROM tbl_tes");
    $tes21 = mysql_query("SELECT COUNT(IF(hasil121 = 'A',hasil21,  NULL))
                        FROM tbl_tes");
    $tes22 = mysql_query("SELECT COUNT(IF(hasil22 = 'A',hasil22,  NULL))
                        FROM tbl_tes");
    $tes31 = mysql_query("SELECT COUNT(IF(hasil31 = 'A',hasil31,  NULL))
                        FROM tbl_tes");
    $tes32 = mysql_query("SELECT COUNT(IF(hasil32 = 'A',hasil32,  NULL))
                        FROM tbl_tes");
    $tes33 = mysql_query("SELECT COUNT(IF(hasil33 = 'A',hasil33,  NULL))
                        FROM tbl_tes");
    $tes4 = mysql_query("SELECT COUNT(IF(hasil4 = 'A',hasil4,  NULL))
                        FROM tbl_tes");
    $k = mysql_query("SELECT SUM($tes1+$tes21+$tes22+$tes31+$tes32+$tes33+$tes4)");
    $view=mysql_query("SELECT username, statuskerja, hasil1, hasil21, hasil22, hasil31, hasil32, hasil33, hasil4, pimpinan, IF(statuskerja = 'PTT1' OR statuskerja = 'PT1', ROUND(7*10000/7,-2), ROUND(COUNT(IF(hasil1 = 'A',hasil1,  NULL))*5000/7,-2)) AS hasilevaluasi
                        FROM tbl_tes WHERE MONTH(tgl_buat) = MONTH(CURRENT_DATE) AND unitkerja LIKE '%Fakultas Isipol%' GROUP BY nik");
    $no=1;
    while($row=mysql_fetch_array($view)){

?>
    <tbody>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['statuskerja'];?></td>
            <td><?php echo $row['hasil1'];?></td>
            <td><?php echo $row['hasil21'];?></td>
            <td><?php echo $row['hasil22'];?></td>
            <td><?php echo $row['hasil31'];?></td>
            <td><?php echo $row['hasil32'];?></td>
            <td><?php echo $row['hasil33'];?></td>
            <td><?php echo $row['hasil4'];?></td>
            <td><?php echo $row['pimpinan'];?></td>
            <td><?php echo $row['hasilevaluasi'];?></td>
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
