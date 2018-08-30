<?php
    $id = $_GET['id'];
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
    .medan{
        float: left;
        margin: 380px 0px 0px 420px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: center;
    }
    .ttd{
        float: left;
        margin: 110px 0px 0px 420px;
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
    <div style="margin-top:-10px; margin-right:60px; padding-bottom:10px; text-align:center;">DATA DOSEN</div>
    <br>
    <div>

    </div>
    <table style="width: 80%; border:1px solid red; margin-top:-40px;">
        <thead>
            <?php
                include "/../../config/koneksi.php";
                $view=mysql_query("select * from tbl_pegawai_dosen WHERE id_user='$id'");
                while($row=mysql_fetch_array($view)){
            ?>
            <tr>
                <td style="width: 40%; text-align: left;">NIK </td>
                <td>:</td>
                <td style="width: 60%; text-align: left;"> <?php echo $row['nik'];?></td>
                <td style="width: 40%; text-align: left;" rowspan="5"> 
                    <?php
                        if($row['photo']!=""){
                            echo "<img src='../../upload/$row[photo]'";
                        }
                        else{
                            echo "<img src='../../upload/reportemployee.png'";   
                        }
                    ?>
                    <img src="../../upload/<?php echo $row['photo'];?>" style="width:80px; height:100px;"> </td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top">Nama Lengkap </td>
                <td valign="top">:</td>
                <td> <?php echo $row['username'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Jenis Kelamin </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['jenkel'];?></td>
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
                <td style="width: 40%; text-align: left;">Alamat </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['alamat'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Telepon/Hp </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['hp'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Pendidikan </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['pendidikan'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Pengelompokan Kerja </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['kelompok'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Status Kerja </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['statuskerja'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Jabatan Akademik </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['jab_akademik'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">TMT Jabatan Akademik </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['tmt_jabakad'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Diangkat Pertama </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['diangkat_pertama'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">NIDN </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['nidn_nupn'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">TMT NIDN </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['tmt_nidn'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Instansi Asal </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['instansi_asal'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Sertifikasi Dosen </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['sertifikasi_dosen'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Jabatan Struktural </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['jab_struktural'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">TMT SERDOS </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['tmt_serdos'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">LNR </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['lnr'];?></td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;">Keterangan </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['keterangan'];?></td>
            </tr>
            <?php
                }
            ?>
        </thead>
        <tbody>
            
        </tbody>
        <tfoot>
            <tr>
               
            </tr>
        </tfoot>
    </table>
    <div class="medan">
        Medan. <?php $tanggal = date("Y-m-d"); ?>
        <?php echo TanggalIndo($tanggal); ?>
    </div>

    <div class="ttd">
        Dr. Ir. Hj. Siti Mardiana, M.Si
    </div>
    
</page>