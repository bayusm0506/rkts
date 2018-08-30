<?php
    $id = $_GET['id'];
    $nik = $_GET['nik'];
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
        margin: 590px 0px 0px 420px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: left;
    }
    .ttd{
        float: left;
        margin: 100px 0px 0px 420px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: left;
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
    <div style="margin-top:-10px; margin-right:60px; padding-bottom:20px; text-align:center;">FORMULIR DOSEN TIDAK TETAP (DTT)</div>
    <br>
    <div>

    </div>
    <table style="width: 80%; border:1px solid red; margin-top:-40px;">
        <thead>
            <?php
                include "/../../config/koneksi.php";
                $view=mysql_query("select * from form_dttk WHERE id_user='$id'");
                while($row=mysql_fetch_array($view)){
            ?>
            <tr>
                <td style="width: 40%; text-align: left;">NIK </td>
                <td>:</td>
                <td style="width: 60%; text-align: left;"> <?php echo $row['nik'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Nama Lengkap </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['username'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Unit Kerja </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['unitkerja'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Tempat dan Tanggal Lahir </td>
                <td>:</td>
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
                <td style="width: 40%; text-align: left;"> <?php echo $row['tempat_lahir'];?>, <?php echo TanggalIndo($row['tgl_lahir']);?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Umur </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['umur'];?> Tahun <?php echo $row['bulan'];?> Bulan</td>
               
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
                <td style="width: 40%; text-align: left;"> <?php echo $row['no_identitas'];?> Berlaku s/d <?php echo $row['tanggal_identitas'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Alamat Lengkap </td>
                <td valign="top">:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['alamat'];?> <br>Kota : <?php echo $row['kota'];?> Kode Pos : <?php echo $row['kode_pos'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Persyaratan</td>
                <td valign="top">:</td>
                <td> 
                    a. Untuk Jenjang Pendidikan <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Sarjana(S1) <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Pascasarjana(S2) <br>
                    b. Gelar Akademik <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> S1 <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> S2 <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> S3 <br>
                    c. Jabatan Akademik <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> NJA <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> AA <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> L <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> LK <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> GB <br> NJA = Non / Belum Memiliki Jabatan Akademik<br>
                    d. Kesesuaian Kebutuhan <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Dibutuhkan <br> Alasannya : ____________________________________<br>
                    e. Linearitas Bidang Ilmu <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> S1 dan S2 Linear <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> S2 dan S3 Linear <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> S1, S2 dan S3 Linear <br>
                    e. Indeks Prestasi Komulatif (IPK)<img src="../../upload/checkbox.png" style="width:80px; height:30px;">
                </td>
            </tr>
            <tr style="margin-top:-400px;" valign="top">
                <td style="width: 40%; text-align: left; margin-top:-100px;" valign="top">Kelengkapan Berkas</td>
                <td valign="top">:</td>
                <td> 
                    a. Pendidikan <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Ijazah S1 Leges basah <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Transkrip S1 Leges basah <br>
                        <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Ijazah S2 Leges basah <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Transkrip S2 Leges basah <br>
                        <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Ijazah S3 Leges basah <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Transkrip S3 Leges basah <br>
                    b. Jabatan Akademik <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Berkas tidak ada <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Berkas ada <br>
                    c. Pas photo <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Ukuran 2X3, dua lembar <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Ukuran 4X6, dua lembar <br>
                    d. Kartu Identitas Diri <br><img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Fotokopi KTP <img src="../../upload/checkbox.png" style="width:15px; height:15px;"> Fotokopi Kartu Keluarga<br>
                </td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Rekomendasi</td>
                <td valign="top">:</td>
                <td> 
                    a. <br>
                    b. <br>
                    c. <br>
                    d. <br>
                    e. 
                </td>
            </tr>
            <tr>
                <td colspan="3">NB: Berkas yang tidak memenuhi syarat dan belum lengkap agar terlebih dahulu dilengkapi sebelum diajukan</td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Diketahui<br>Dekan, <br><br><br><br><br><br><br><br>
                    _________________________
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
        Medan. <?php $tanggal = date("Y-m-d"); ?>
        <?php echo TanggalIndo($tanggal); ?> Pemohon,
    </div>

    <div class="ttd">
        Dr. Ir. Hj. Siti Mardiana, M.Si
    </div>

    
    <?php
        }
    ?>
</page>
