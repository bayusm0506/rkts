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
        margin: -38px 0px 0px 480px;
        padding: 0px 0px 0px 0px;
        width: 200px;
        text-align: center;
    }
    .medan{
        float: left;
        margin: 140px 0px 0px 400px;
        padding: 0px 0px 0px 0px;
        width: 240px;
        text-align: left;
    }
    .ttd{
        float: left;
        margin: 80px 0px 0px 400px;
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
    <div style="margin-top:-10px; margin-right:60px; padding-bottom:20px; text-align:center;">TUGAS LUAR (FORM A2)</div>
    <br>
    <div>

    </div>
    <table style="width: 80%; border:1px solid red; margin-top:-40px;">
        <thead>
            <?php
                include "/../../config/koneksi.php";
                $view=mysql_query("select * from form_tl WHERE id_user='$id'");
                while($row=mysql_fetch_array($view)){
            ?>
            <tr>
                <td valign="top" colspan="3">Yang Bertanda Tangan di bawah Ini menerangkan dengan sesungguhnya bahwa : </td>
            </tr>
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
                <td style="width: 40%; text-align: left;">Absen </td>
                <td>:</td>
                <td style="width: 40%; text-align: left;"> <?php echo $row['absen'];?></td>
            </tr>
            <tr>
                <td valign="top" colspan="3">Benar melaksanakan Tugas Luar pada : 
                    Hari : <?php echo $row['hari_pelaksanaan'];?> 
                    Tanggal : <?php echo $row['tgl_pelaksanaan'];?> 
                    Jam : <?php echo $row['jam_pelaksanaan'];?>
                </td>
            </tr>
            <tr>
               <td style="width: 40%; text-align: left;" valign="top" colspan="3">1. <?php echo $row['keterangan1'];?> </td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top" colspan="3">2. <?php echo $row['keterangan2'];?> </td>
            </tr>
            <tr>
                <td style="width: 40%; text-align: left;" valign="top" colspan="3">3. <?php echo $row['keterangan3'];?> </td>
            </tr>
            <tr>
                <td valign="top" colspan="3">Demikian keterangan ini disampaikan dengan sebenarnya dan penuh dengan tanggung jawab.</td>
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
        <?php echo TanggalIndo($tanggal); ?> <br />Yang memberi tugas,
    </div>

    <div class="ttd">
        <?php echo $row['pimpinan'];?>
    </div>
    <br><br>

    Note : Surat Tugas Luar ini berlaku jika ada tanda tangan dan stempel kepala bagian masing-masing.
    <?php
        }
    ?>
</page>
