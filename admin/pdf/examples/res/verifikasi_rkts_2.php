<?php
    $nik = $_GET['nik'];
?>
<style type="text/css">
<!--
div.zone
{
    border: solid 2mm #66AACC;
    border-radius: 3mm;
    padding: 1mm;
    background-color: #FFEEEE;
    color: #440000;
}
div.zone_over
{
    width: 30mm;
    height: 35mm;
    overflow: hidden;
}
.headerleft{
        float: left;
    }
    .headerright{
        float: left;
        margin: -85px 0px 40px 0px;
        padding: 0px 0px 0px 110px;
        height: 50px;
        
    }
    .clrs{
        margin: -30px 0px 0px 0px;
        border-bottom: 2px solid #000;
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
    .senter {
        text-align: center;
        float: left;
        margin-right: 30px;
    }
    .senter2 {
        text-align: center;
        margin-left:60px;
    }

-->
</style>
<page style="font-size: 10pt;">
    <br>
    <br>
    <br>
    <div class="senter" style="font-weight: bold; font-size: 20px; text-decoration: underline;">SURAT VALIDASI</div>
    <br>
    <br>
    <br>

    <div style="font-weight: normal; font-size: 14px;">
        <table>
            <?php
                // definisikan koneksi ke database
				$server = "localhost";
				$username = "rktsumaa_dosen";
				$password = "rktsuma";
				$database = "rktsumaa_dosen";

				// Koneksi dan memilih database di server
				mysql_connect($server,$username,$password) or die("Koneksi gagal");
				mysql_select_db($database) or die("Database tidak bisa dibuka");
                $view=mysql_query("select * from tbl_user WHERE nik='$nik'");
                while($row=mysql_fetch_array($view)){
            ?>
				<tr>
                        <th>Semester</th>
                        <th>:</th>
                        <th>Genap</th>
                </tr>
				<tr>
                        <th>Tahun Ajaran</th>
                        <th>:</th>
                        <th><?php echo $row['tahun_ajaran'];?></th>
                </tr>
                <tr>
                        <th>Nama Lengkap</th>
                        <th>:</th>
                        <th><?php echo $row['nama_lengkap'];?></th>
                </tr>
                <tr>
                        <th>NIP / NIDN / NIK</th>
                        <th>:</th>
                        <th><?php echo $row['nik'];?></th>
                </tr>
                <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <th><?php echo $row['jenis_kelamin'];?></th>
                </tr>
                <tr>
                        <th>Status Dosen</th>
                        <th>:</th>
                        <th><?php echo $row['status_dosen'];?></th>
                </tr>
                <tr>
                        <th>Pendidikan Terakhir</th>
                        <th>:</th>
                        <th><?php echo $row['pendidikan_terakhir'];?></th>
                </tr>
                <tr>
                        <th>Jabatan  Akademik/Fungsional </th>
                        <th>:</th>
                        <th><?php echo $row['jabatan_akademik'];?></th>
                </tr>
                <tr>
                        <th>TMT</th>
                        <th>:</th>
                        <th><?php echo $row['tmt_jabatan'];?></th>
                </tr>
                <tr>
                        <th>Pangkat/Golongan</th>
                        <th>:</th>
                        <th><?php echo $row['pangkat_golongan'];?></th>
                </tr>
                <tr>
                        <th>Jabatan Struktural</th>
                        <th>:</th>
                        <th><?php echo $row['jabatan_struktural'];?></th>
                </tr>
                <tr>
                        <th>Fakultas</th>
                        <th>:</th>
                        <th><?php echo $row['fakultas'];?></th>
                </tr>
				<tr>
                        <th>Prodi</th>
                        <th>:</th>
                        <th><?php echo $row['prodi'];?></th>
                </tr>
            
        </table>
    </div>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <i><div class="senter" style="font-weight: bold;">PERNYATAAN DOSEN</div></i>
    <br>
    <br>
    <br>
    <i><span style="font-size: 10pt; font-weight: bold; text-align: justify;">Saya dosen yang membuat laporan RKTS (Rencana Kinerja Tridharma Semester) ini menyatakan bahwa aktivitas dan bukti pendukungnya adalah benar aktivitas saya dan saya sanggup menerima sanksi apapun termasuk penghentian tunjangan dan mengembalikan yang sudah saya terima apabila pernyataan ini dikemudian hari terbukti tidak benar.</span></i>
    <br>
    <br>
    <br>
    <br>
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
    <div class="senter">
        Medan. <?php $tanggal = date("Y-m-d"); ?>
        <?php echo TanggalIndo($tanggal); ?>
    </div>
    <br>
    <i><b><div class="senter">Dosen Yang Membuat</div></b></i>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="senter" style="text-decoration: underline;"><?php echo $row['nama_lengkap'];?></div>
    <div class="senter"><?php echo $row['nik'];?></div>
    
    <br>
    <br>
    <br>
    <br>
    <i><div class="senter2" style="font-size: 9pt; text-align: justify;">Saya sudah memeriksa kebenaran dokumen yang ditunjukkan dan bisa menyetujui laporan RKTS ini.</div></i>
    <br>
    <br>
    <i><b><div class="senter">Dekan / Wakil Dekan I/ Kepala Program Studi</div></b></i>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="senter">(........................................)</div>
    <?php
        }
    ?>
</page>