<?php
    $id = $_GET['id'];
    $nik = $_GET['nik'];
?>
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
<style type="text/css">
    .headerl{
        float: left;
        width: 1080px;
        height: 50px;
    }
    .logo{
        float: left;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 10px;
        width: 200px;
        height: 50px;
    }
    .content_logo{
        float: left;
        width: 1000px;
        margin: -85px 0px 40px 0px;
        padding: 0px 0px 0px 110px;
        height: 50px;
    }
    .clrs{
        margin: -30px 0px 0px 0px;
        border-bottom: 1px solid #ccc;
    }
    .photo{
        float: left;
        margin: 0px 0px 0px 480px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: center;
    }
    .medan{
        float: left;
        margin: 350px 0px 0px 420px;
        padding: 0px 0px 0px 0px;
        width: 240px;
        text-align: left;
    }
    .ttd{
        float: left;
        margin: 80px 0px 0px 420px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: center;
    }
</style>

<page backtop="10mm" backbottom="10mm" backleft="20mm" backright="20mm">
    <page_header>
        <table style="width: 100%;">
            <tr>
                <td style="text-align: left;    width: 33%"></td>
                <td style="text-align: center;    width: 34%"></td>
                <td style="text-align: right;    width: 33%"><?php echo date('d/m/Y'); ?></td>
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table style="width: 100%; border: solid 1px black;">
            <tr>
                <td style="text-align: left;    width: 40%">Copyright &copy; <?php echo date('Y'); ?> Kepegawaian - ICT</td>
                <td style="text-align: center;    width: 20%"></td>
                <td style="text-align: right;    width: 40%">page [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>
    </page_footer>
    <div class="headerl"> 
        <div class="logo"><img src="./res/logo2.png"></div>
    </div>

    <div class="content_logo"> 
        <font style="font-size:22px;">Yayasan Pendidikan Haji Agus Salim</font><br>
        <font style="color:blue; font-size:22px; font-weight:bold;">UNIVERSITAS MEDAN AREA</font><br>
        <font style="font-size:15px;">Jalan Kolam Nomor 1 Medan Estate / Jalan Gedung PBSI, Medan 20223</font><br>
        <font style="font-size:15px;">Telepon / Fax : (061) 7366878, 7364348, 7360168 / (061) 7368012</font>
    </div>

    <div class="clrs"></div>
    <div style="margin-top:-10px; margin-right:60px; padding-bottom:20px; text-align:center;">FORMULIR PEGAWAI TETAP (PT)</div>
    <br>
    <div>

    </div>
    <table style="width: 80%; border:1px solid red; margin-top:-40px;">
        <thead>
            <?php
                include "/../../config/koneksi.php";
                $view=mysql_query("select * from form_pt WHERE id_user='$id'");
                while($row=mysql_fetch_array($view)){
            ?>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Nama Lengkap </td>
                <td valign="top">:</td>
                <td> <?php echo $row['username'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Unit Kerja </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['unitkerja'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Tempat, Tanggal Lahir </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['tempat_lahir'];?>, <?php echo $row['tgl_lahir'];?> </td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Umur </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['umur'];?> Tahun <?php echo $row['bulan'];?> Bulan</td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Pendidikan </td>
                <td>:</td>
                <td style="width: 60%; text-align: left;"> <?php echo $row['pendidikan'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Jenis Kelamin </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['jenkel'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Golongan Darah </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['gol_darah'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Status </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['status'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">No. Identitas </td>
                <td valign="top">:</td>
                <td> <?php echo $row['no_identitas'];?> Berlaku s/d <?php echo $row['tanggal_identitas'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Alamat Lengkap </td>
                <td valign="top">:</td>
                <td> <?php echo $row['alamat'];?> <br>Kota : <?php echo $row['kota'];?> <br>Kode Pos : <?php echo $row['kode_pos'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Telepon </td>
                <td>:</td>
                <td> <?php echo $row['telepon'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Kelengkapan Berkas Kepegawaian</td>
                <td valign="top">:</td>
                <td valign="top"> 
                    <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Lengkap <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Tidak Lengkap
                </td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Keaktifan Mengikuti Kegiatan</td>
                <td valign="top">:</td>
                <td colspan="1"> 
                    1) Wisuda <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Aktif <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Kurang/Tidak Aktif <br><br>
                    2) Pengajian Bulanan <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Aktif <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Kurang/Tidak Aktif <br><br>
                    3) PHBI dan Lainnya <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Aktif <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Kurang/Tidak Aktif <br><br>
                    4) Upacara Nasional <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Aktif <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Kurang/Tidak Aktif 
                </td>
            </tr><br><br>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Pimpinan Unit Kerja <br><br><br><br><br><br><br>
                    <?php echo $row['pimpinan'];?>
                 </td>
            </tr>
            
        </thead>
        <tbody>
            
        </tbody>
        <tfoot>
            <tr>
               
            </tr>
        </tfoot>
    </table>
    <div>

    </div>
    <div class="photo">
        <?php
            $view=mysql_query("select * from tbl_pegawai_dosen WHERE nik='$nik'");
            while($tes=mysql_fetch_array($view)){
                if($tes['photo']!=""){
                echo "<img src='../../upload/$tes[photo]' style='width:80px; height:100px;'>";
                }
                else{
                    echo "<img src='../../upload/reportemployee.png' style='width:80px; height:100px;'>";   
                }
            }
        ?>
    </div>

    <div class="medan">
        Medan Estate, <?php $tanggal = date("Y-m-d"); ?>
        <?php echo TanggalIndo($tanggal); ?> Pegawai yang bersangkutan,
    </div>

    <div class="ttd">
        <?php echo $row['username'];?>
    </div>

<pre>







note : <?php echo $row['alasan'];?>
</pre>
    
    <?php
        }
    ?>
</page>
