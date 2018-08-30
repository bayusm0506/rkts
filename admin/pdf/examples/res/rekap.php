<?php
    $nik = $_GET['nik'];
    $semester = $_GET['semester'];
    $tahun_ajaran = $_GET['tahun_ajaran'];
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
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
.tg-031ex {width: 420px;}
.tg-031ea {width: 40px;}

-->
.clrs{
        margin: 0px 0px 0px 60px;
        border-bottom: 2px solid #000;
    }
</style>

<page style="font-size: 10pt;">

<div class="headerleft"> 
        <div style="font-weight: normal; font-size: 14px; margin-left:45px;">
            <div class=""><img src="./res/logo2.png"></div>
        </div>
    </div>
    <div style="font-weight: normal; font-size: 14px; margin-left:40px;">
    <div class="headerright"> 
        <font style="font-size:28px;">UNIVERSITAS MEDAN AREA</font><br>
        <font style="font-size:20px; font-weight:bold;">Lembaga Penjamin Mutu (LPM)</font><br>
        <font style="font-size:20px; font-weight:bold;">Hasil Skor Evaluasi Kinerja Tridharma Semesteran (EKT-S)</font><br>
        <font style="font-size:16px;">Semester : <?php echo $semester;?> - Tahun Ajaran: <?php echo $tahun_ajaran;?></font><br>
    </div>
    </div>
    <div class="clrs"></div>
    <br>
    <br>

    <div style="font-weight: normal; font-size: 14px; margin-left:60px;">
    <b>I. IDENTITAS PRIBADI</b>
        <table>
            <?php
                // definisikan koneksi ke database
                $server = "localhost";
                $username = "rktsumaa_dosenv2";
                $password = "rktsuma";
                $database = "rktsumaa_dosenv2";

                // Koneksi dan memilih database di server
                mysql_connect($server,$username,$password) or die("Koneksi gagal");
                mysql_select_db($database) or die("Database tidak bisa dibuka");
                $view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.koreksi = 'Sudah' AND tbl_rencana.nik = '$nik' AND tbl_rencana.semester='$semester' AND tbl_rencana.tahun_ajaran='$tahun_ajaran'");
                while($row=mysql_fetch_array($view)){
            ?>
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
                        <th>No. Serdos (Jika Ada)</th>
                        <th>:</th>
                        <th><?php echo $row['no_serdos'];?></th>
                </tr>
                <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <th><?php echo $row['jenis_kelamin'];?></th>
                </tr>
                <tr>
                        <th>Alamat Rumah</th>
                        <th>:</th>
                        <th><?php echo $row['alamat_rumah'];?></th>
                </tr>
                <tr>
                        <th>No. Handphone</th>
                        <th>:</th>
                        <th><?php echo $row['nomor_hp'];?></th>
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
                        <th><?php echo TanggalIndo($row['tmt_jabatan']);?></th>
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


    <?php
    $query_pendidikan = mysql_query("SELECT SUM(nilai) AS n_pendidikan FROM tbl_nilai WHERE nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran' AND kategori_nilai='pendidikan'");
    $query_penelitian = mysql_query("SELECT SUM(nilai) AS n_penelitian FROM tbl_nilai WHERE nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran' AND kategori_nilai='penelitian'");
    $query_pengabdian = mysql_query("SELECT SUM(nilai) AS n_pengabdian FROM tbl_nilai WHERE nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran' AND kategori_nilai='pengabdian'");
    
    
    $query_total = mysql_query("SELECT SUM(nilai) AS total FROM tbl_nilai WHERE nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran'");
    ?>
    <br>
    <div style="font-weight: normal; font-size: 14px; margin-left:60px;">
    <table class="tg" height="100px">
      <tr>
        <th class="tg-031ea" align="center">NO</th>
        <th class="tg-031ex" align="center">KATEGORI</th>
        <th class="tg-031e" align="center">NILAI</th>

      </tr>
      <tr>
        <td class="tg-031e" align="center">I</td>
        <td class="tg-031ex">Unsur Utama Pendidikan</td>
        <td class="tg-031e" align="center">
            <?php
                if($query_pendidikan){
                  $data = mysql_fetch_assoc($query_pendidikan);
                  $hasil_pendidikan = round($data['n_pendidikan'], 2);
                  $jumlah1 = ($hasil_pendidikan*0.4);
                  echo $jumlah1;
                }
            ?>
        </td>
      </tr>
      
      <tr>
        <td class="tg-031e" align="center">II</td>
        <td class="tg-031ex">Melaksanakan Penelitian</td>
        <td class="tg-031e" align="center">
            <?php
                if($query_penelitian){
                  $data = mysql_fetch_assoc($query_penelitian);
                  $hasil_penelitian = round($data['n_penelitian'], 2);
                  $jumlah2 = ($hasil_penelitian*0.3);
                  echo $jumlah2;
                }
            ?>
        </td>
      </tr>
      
      <tr>
        <td class="tg-031e" align="center">III</td>
        <td class="tg-031ex">Melaksanakan Pengabdian Kepada Masyarakat</td>
        <td class="tg-031e" align="center">
            <?php
                if($query_pengabdian){
                  $data = mysql_fetch_assoc($query_pengabdian);
                  $hasil_pengabdian = round($data['n_pengabdian'], 2);
                  $jumlah3 = ($hasil_pengabdian*0.2);
                  echo $jumlah3;
                }
            ?>
        </td>
      </tr>

      <tr>
        <td class="tg-031e" align="center">IV</td>
        <td class="tg-031ex">Melaksanakan Kegiatan Penunjang</td>
        <td class="tg-031e" align="center">
            <?php
                $query_penunjang = mysql_query("SELECT SUM(nilai) AS n_penunjang FROM tbl_nilai WHERE nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran' AND kategori_nilai <> 'pendidikan' AND kategori_nilai <> 'penelitian' AND kategori_nilai <> 'pengabdian'");
    
                $tes = mysql_fetch_assoc($query_penunjang);
                if($tes){
                    $jumlah4 = ($tes['n_penunjang']*0.1);
                    echo $jumlah4;
                }
            ?>
        </td>
      </tr>
      
      <tr>
        <td colspan="2" class="tg-031e" align="center">Total</td>
        <td class="tg-031e" align="center">
            <font style="font-weight: bold; font-size:16px">
            <?php
                $total_jumlah = $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4;
                echo $total_jumlah;
            ?>
            </font>
        </td>
      </tr>        
    </table>
    </div>
    <br />
    <div style="font-weight: normal; font-size: 14px; margin-left:60px;">
    <span style="font-size: 10pt; text-align: justify;">Berdasarkan penilaian yang telah dilakukan, maka Dosen bersangkutan berhak memperoleh nilai dengan kategori 
        <b>
        <?php
            if($total_jumlah >= 60){
                echo "A";
            }
            elseif($total_jumlah >= 45 && $total_jumlah < 60){
                echo "B";
            }
            elseif($total_jumlah >= 30 && $total_jumlah < 50 ){
                echo "C";
            }
            elseif($total_jumlah >= 15 && $total_jumlah  < 30){
                echo "D";
            }
            elseif($total_jumlah < 15){
                echo "E";
            }
        ?></b>.<br /> <br />
        Demikian hasil penilaian ini kami sampaikan.
    </span>
    </div>
    <br>

    
    <div style="font-weight: normal; font-size: 14px; margin-left:60px;">
    <table>
        <tr>
            <td style="width: 400px;"></td>
            <td style="width: 400px;">Medan, <?php $tanggal = date("Y-m-d"); ?>
        <?php echo TanggalIndo($tanggal); ?></td>
        </tr>
        <tr>
            <td style="width: 400px;">Mengetahui,</td>
            <td style="width: 400px;"></td>
        </tr>
        <tr>
            <td style="width: 400px;">Kepala LPM</td>
            <td style="width: 400px;">Admin</td>
        </tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
        <tr>
            <td style="width: 400px;">Ir. Hj. Haniza, MT</td>
            <td style="width: 400px;"><?php echo $row['pembuat'];?></td>
        </tr>
        <!--
        <tr>
            <td style="width: 400px;">NIK : </td>
            <td style="width: 400px;">NIK : <?php echo $row['nik'];?></td>
        </tr>
        -->
    </table>
    </div>
    <br><br>
    <div style="font-weight: normal; font-size: 14px; margin-left:60px;">
    
    </div>
    <?php
        }
    ?>
</page>