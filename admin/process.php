<?php 
    session_start();
    //koneksi database
    include "config.php";
    
    //pilih aksi manipulasi yang akan di terapkan pada tabel database
    $act =$_GET['act'];
    
    //Fungsi Insert RKTS
    if($act=='inputrkts'){
        $id_user = $_POST['id_user'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];
        $no_serdos = $_POST['no_serdos'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat_rumah = $_POST['alamat_rumah'];
        $nomor_hp = $_POST['nomor_hp'];
        $status_dosen = $_POST['status_dosen'];
        $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
        $jabatan_akademik = $_POST['jabatan_akademik'];
        $tmt_jabatan = $_POST['tmt_jabatan'];
        $pangkat_golongan = $_POST['pangkat_golongan'];
        $jabatan_struktural = $_POST['jabatan_struktural'];
        $prodi = $_POST['prodi'];
        $fakultas = $_POST['fakultas'];
        $kepala_prodi = $_POST['kepala_prodi'];
        
        
        // Parameter User Input RKTS
        //II
        $duaA = $_POST['2a_pendidikan'];
        $duaB = $_POST['2b_pendidikan'];
        $duaC = $_POST['2c_pendidikan'];
        $duaD = $_POST['2d_pendidikan'];
        $duaE = $_POST['2e_pendidikan'];
        $duaF = $_POST['2f_pendidikan'];
        $duaG = $_POST['2g_pendidikan'];
        $duaH = $_POST['2h_pendidikan'];
        $duaI = $_POST['2i_pendidikan'];
        $duaJ = $_POST['2j_pendidikan'];
        $duaK = $_POST['2k_pendidikan'];
        $duaL = $_POST['2l_pendidikan'];
        $duaM = $_POST['2m_pendidikan'];
        $duaN = $_POST['2n_pendidikan'];
        
        //III
        $tigaA1 = $_POST['3a1_penelitian'];
        $tigaA2 = $_POST['3a2_penelitian'];
        $tigaA3 = $_POST['3a3_penelitian'];
        $tigaA4 = $_POST['3a4_penelitian'];
        $tigaA5 = $_POST['3a5_penelitian'];
        $tigaA6 = $_POST['3a6_penelitian'];
        
        //IV
        $empatA1 = $_POST['4a1_pengabdian'];
        $empatA2 = $_POST['4a2_pengabdian'];
        $empatA3 = $_POST['4a3_pengabdian'];
        $empatA4 = $_POST['4a4_pengabdian'];    
        
        //V
        $limaA1 = $_POST['5a1_penunjang'];
        $limaA2 = $_POST['5a2_penunjang'];
        $limaA3 = $_POST['5a3_penunjang'];
        $limaA4 = $_POST['5a4_penunjang'];
        $limaA5 = $_POST['5a5_penunjang'];
        $limaA6 = $_POST['5a6_penunjang'];
        $limaA7 = $_POST['5a7_penunjang'];
        $limaA8 = $_POST['5a8_penunjang'];
        $limaA9 = $_POST['5a9_penunjang'];
        
        //VI
        $enamA = $_POST['6a_nonakademik'];
        $enamB = $_POST['6b_nonakademik'];
        
        //VII
        $tujuhA = $_POST['7a_karir'];
        $tujuhB = $_POST['7b_karir'];
        
        // End Parameter User Input RKTS
        
        
        $pembuat = $_SESSION['nama_lengkap'];
        
        $periksa_data = mysql_query("SELECT * FROM tbl_rencana WHERE nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran'");    
        $j_cek_ganda = mysql_fetch_array($periksa_data);
        if ($j_cek_ganda > 0) {
            ?>
                <script>
                    alert('Data yang Anda masukkan sebelumnya sudah Ada, silahkan cek di Menu EKTS Anda');
                    window.location.href='rkts_koreksi.php';
                </script>
            <?php
        }
        
        else{
            //Update Tabel User                             
            mysql_query("UPDATE tbl_user SET semester='$semester', tahun_ajaran='$tahun_ajaran', nama_lengkap='$nama_lengkap', no_serdos='$no_serdos', jenis_kelamin='$jenis_kelamin', alamat_rumah='$alamat_rumah',
                                        nomor_hp='$nomor_hp', status_dosen='$status_dosen', pendidikan_terakhir='$pendidikan_terakhir', jabatan_akademik='$jabatan_akademik',
                                        tmt_jabatan='$tmt_jabatan', pangkat_golongan='$pangkat_golongan', jabatan_struktural='$jabatan_struktural', prodi='$prodi', fakultas='$fakultas', kepala_prodi='$kepala_prodi',
                                        pembuat='$pembuat', tanggal_update=NOW() WHERE id_user='$id_user'
            "); 
            
            //Insert ke Tabel Rencana
            $insert_rencana = mysql_query("INSERT INTO tbl_rencana
                                    VALUES(NULL, '$semester', '$tahun_ajaran', '$nik', 
                                    '$duaA', '$duaB', '$duaC', '$duaD', '$duaE', '$duaF', '$duaG', '$duaH', '$duaI', '$duaJ',
                                    '$duaK', '$duaL', '$duaM', '$duaN', '$tigaA1', '$tigaA2', '$tigaA3', '$tigaA4', '$tigaA5', '$tigaA6',
                                    '$empatA1', '$empatA2', '$empatA3', '$empatA4', '$limaA1', '$limaA2', '$limaA3', '$limaA4', '$limaA5', '$limaA6',
                                    '$limaA7', '$limaA8', '$limaA9', '$enamA', '$enamB', '$tujuhA', '$tujuhB', 
                                    NOW(), '', '$pembuat', 'Belum')
                    ");
                    
            //Insert ke Tabel Berkas        
            mysql_query("INSERT INTO tbl_berkas
                                 VALUES(NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter1', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter2', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter3', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter4', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter5', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter6', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter7', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter8', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter9', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter10', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter11', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter12', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter13', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter14', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter15', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter16', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter17', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter18', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter19', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter20', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter21', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter22', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter23', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter24', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter25', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter26', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter27', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter28', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter29', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter30', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter31', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter32', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter33', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter34', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter35', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter36', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter37', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter38', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter39', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter40', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter41', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter42', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter43', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter44', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter45', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter46', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter47', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter48', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter49', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter50', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter51', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter52', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter53', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter54', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter55', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter56', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter57', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter58', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter59', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter60', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter61', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter62', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter63', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter64', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter65', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter66', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter67', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter68', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter69', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter70', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter71', 'pendidikan', NOW(), '', '$pembuat'),  
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter72', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter73', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter74', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter75', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter76', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter77', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter78', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter79', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter80', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter81', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter82', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter83', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter84', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter85', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter86', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter87', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter88', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter89', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter90', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter91', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter92', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter93', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter94', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter95', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter96', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter97', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter98', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter99', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter100', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter101', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter102', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter103', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter104', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter105', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter106', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter107', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter108', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter109', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter110', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter111', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter112', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter113', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter114', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter115', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter116', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter117', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter118', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter119', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter120', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter121', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter122', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter123', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter124', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter125', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter126', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter127', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter128', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter129', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter130', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter131', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter132', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter133', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter134', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter135', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter136', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter137', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter138', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter139', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter140', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter141', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter142', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter143', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter144', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter145', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter146', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter147', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter148', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter149', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter150', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter151', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter152', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter153', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter154', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter155', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter156', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter157', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter158', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter159', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter160', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter161', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter162', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter163', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter164', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter165', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter166', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter167', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter168', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter169', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter170', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter171', 'pendidikan', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter172', 'pendidikan', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter173', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter174', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter175', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter176', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter177', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter178', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter179', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter180', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter181', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter182', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter183', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter184', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter185', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter186', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter187', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter188', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter189', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter190', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter191', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter192', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter193', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter194', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter195', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter196', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter197', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter198', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter199', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter200', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter201', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter202', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter203', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter204', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter205', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter206', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter207', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter208', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter209', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter210', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter211', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter212', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter213', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter214', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter215', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter216', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter217', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter218', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter219', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter220', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter221', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter222', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter223', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter224', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter225', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter226', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter227', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter228', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter229', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter230', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter231', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter232', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter233', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter234', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter235', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter236', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter237', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter238', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter239', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter240', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter241', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter242', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter243', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter244', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter245', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter246', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter247', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter248', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter249', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter250', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter251', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter252', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter253', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter254', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter255', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter256', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter257', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter258', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter259', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter260', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter261', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter262', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter263', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter264', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter265', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter266', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter267', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter268', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter269', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter270', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter271', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter272', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter273', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter274', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter275', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter276', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter277', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter278', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter279', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter280', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter281', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter282', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter283', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter284', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter285', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter286', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter287', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter288', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter289', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter290', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter291', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter292', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter293', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter294', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter295', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter296', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter297', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter298', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter299', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter300', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter301', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter302', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter303', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter304', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter305', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter306', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter307', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter308', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter309', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter310', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter311', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter312', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter313', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter314', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter315', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter316', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter317', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter318', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter319', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter320', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter321', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter322', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter323', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter324', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter325', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter326', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter327', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter328', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter329', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter330', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter331', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter332', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter333', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter334', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter335', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter336', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter337', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter338', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter339', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter340', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter341', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter342', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter343', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter344', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter345', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter346', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter347', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter348', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter349', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter350', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter351', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter352', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter353', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter354', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter355', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter356', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter357', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter358', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter359', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter360', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter361', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter362', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter363', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter364', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter365', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter366', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter367', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter368', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter369', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter370', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter371', 'penelitian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter372', 'penelitian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter373', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter374', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter375', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter376', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter377', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter378', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter379', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter380', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter381', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter382', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter383', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter384', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter385', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter386', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter387', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter388', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter389', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter390', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter391', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter392', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter393', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter394', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter395', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter396', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter397', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter398', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter399', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter400', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter401', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter402', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter403', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter404', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter405', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter406', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter407', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter408', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter409', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter410', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter411', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter412', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter413', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter414', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter415', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter416', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter417', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter418', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter419', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter420', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter421', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter422', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter423', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter424', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter425', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter426', 'pengabdian', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter427', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter428', 'pengabdian', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter429', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter430', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter431', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter432', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter433', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter434', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter435', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter436', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter437', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter438', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter439', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter440', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter441', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter442', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter443', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter444', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter445', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter446', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter447', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter448', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter449', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter450', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter451', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter452', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter453', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter454', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter455', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter456', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter457', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter458', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter459', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter460', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter461', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter462', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter463', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter464', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter465', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter466', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter467', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter468', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter469', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter470', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter471', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter472', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter473', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter474', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter475', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter476', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter477', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter478', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter479', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter480', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter481', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter482', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter483', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter484', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter485', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter486', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter487', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter488', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter489', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter490', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter491', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter492', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter493', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter494', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter495', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter496', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter497', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter498', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter499', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter500', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter501', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter502', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter503', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter504', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter505', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter506', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter507', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter508', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter509', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter510', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter511', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter512', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter513', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter514', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter515', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter516', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter517', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter518', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter519', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter520', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter521', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter522', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter523', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter524', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter525', 'penunjang', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter526', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter527', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter528', 'penunjang', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter529', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter530', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter531', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter532', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter533', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter534', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter535', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter536', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter537', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter538', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter539', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter540', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter541', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter542', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter543', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter544', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter545', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter546', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter547', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter548', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter549', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter550', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter551', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter552', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter553', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter554', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter555', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter556', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter557', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter558', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter559', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter560', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter561', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter562', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter563', 'nonakademik', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter564', 'nonakademik', NOW(), '', '$pembuat'),
                                 
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter565', 'karir', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter566', 'karir', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter567', 'karir', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter568', 'karir', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter569', 'karir', NOW(), '', '$pembuat'),
                                 (NULL, '$semester', '$tahun_ajaran', '$nik', '', 'parameter570', 'karir', NOW(), '', '$pembuat')
                                 
              ");   
              

            if($insert_rencana){
                ?>
                    <script>
                        alert('RKTS Anda Berhasil Di simpan, silahkan cek di histori Anda');
                        window.location.href='buat_rkts.php?success';
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert('Data Gagal Disimpan');
                        window.location.href='buat_rkts.php?failed';
                    </script>
                <?php
            }
        }
        
    }

    //Fungsi Update RKTS
    else if($act=='updaterkts'){
        $id_rencana = $_POST['id_rencana'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];
        $no_serdos = $_POST['no_serdos'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat_rumah = $_POST['alamat_rumah'];
        $nomor_hp = $_POST['nomor_hp'];
        $status_dosen = $_POST['status_dosen'];
        $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
        $jabatan_akademik = $_POST['jabatan_akademik'];
        $tmt_jabatan = $_POST['tmt_jabatan'];
        $pangkat_golongan = $_POST['pangkat_golongan'];
        $jabatan_struktural = $_POST['jabatan_struktural'];
        $prodi = $_POST['prodi'];
        $fakultas = $_POST['fakultas'];
        $kepala_prodi = $_POST['kepala_prodi'];
        
        // Parameter User Update RKTS
        //II
        $duaA = $_POST['2a_pendidikan'];
        $duaB = $_POST['2b_pendidikan'];
        $duaC = $_POST['2c_pendidikan'];
        $duaD = $_POST['2d_pendidikan'];
        $duaE = $_POST['2e_pendidikan'];
        $duaF = $_POST['2f_pendidikan'];
        $duaG = $_POST['2g_pendidikan'];
        $duaH = $_POST['2h_pendidikan'];
        $duaI = $_POST['2i_pendidikan'];
        $duaJ = $_POST['2j_pendidikan'];
        $duaK = $_POST['2k_pendidikan'];
        $duaL = $_POST['2l_pendidikan'];
        $duaM = $_POST['2m_pendidikan'];
        $duaN = $_POST['2n_pendidikan'];
        
        //III
        $tigaA1 = $_POST['3a1_penelitian'];
        $tigaA2 = $_POST['3a2_penelitian'];
        $tigaA3 = $_POST['3a3_penelitian'];
        $tigaA4 = $_POST['3a4_penelitian'];
        $tigaA5 = $_POST['3a5_penelitian'];
        $tigaA6 = $_POST['3a6_penelitian'];
        
        //IV
        $empatA1 = $_POST['4a1_pengabdian'];
        $empatA2 = $_POST['4a2_pengabdian'];
        $empatA3 = $_POST['4a3_pengabdian'];
        $empatA4 = $_POST['4a4_pengabdian'];    
        
        //V
        $limaA1 = $_POST['5a1_penunjang'];
        $limaA2 = $_POST['5a2_penunjang'];
        $limaA3 = $_POST['5a3_penunjang'];
        $limaA4 = $_POST['5a4_penunjang'];
        $limaA5 = $_POST['5a5_penunjang'];
        $limaA6 = $_POST['5a6_penunjang'];
        $limaA7 = $_POST['5a7_penunjang'];
        $limaA8 = $_POST['5a8_penunjang'];
        $limaA9 = $_POST['5a9_penunjang'];
        
        //VI
        $enamA = $_POST['6a_nonakademik'];
        $enamB = $_POST['6b_nonakademik'];
        
        //VII
        $tujuhA = $_POST['7a_karir'];
        $tujuhB = $_POST['7b_karir'];
        
        // End Parameter User Update RKTS
        
        $pembuat = $_SESSION['nama_lengkap'];
        
        /*
        $periksa_data = mysql_query("SELECT * FROM tbl_rencana WHERE nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran'");    
        $j_cek_ganda = mysql_fetch_array($periksa_data);
        if ($j_cek_ganda > 0) {
            ?>
                <script>
                    alert('Data yang Anda masukkan sebelumnya sudah Ada, silahkan cek di Menu EKTS Anda');
                    window.location.href='datarkts.php';
                </script>
            <?php
        }
        else{
        */
            //Update Tabel User                             
            mysql_query("UPDATE tbl_user SET nama_lengkap='$nama_lengkap', no_serdos='$no_serdos', jenis_kelamin='$jenis_kelamin', alamat_rumah='$alamat_rumah',
                                        nomor_hp='$nomor_hp', status_dosen='$status_dosen', pendidikan_terakhir='$pendidikan_terakhir', jabatan_akademik='$jabatan_akademik',
                                        tmt_jabatan='$tmt_jabatan', pangkat_golongan='$pangkat_golongan', jabatan_struktural='$jabatan_struktural', prodi='$prodi', fakultas='$fakultas', kepala_prodi='$kepala_prodi',
                                        pembuat='$pembuat', tanggal_update=NOW() WHERE nik='$nik'
            "); 
            
            //Update ke Tabel Rencana
            $update_rencana =  mysql_query("UPDATE tbl_rencana SET semester='$semester', tahun_ajaran='$tahun_ajaran', 
                                            2a='$duaA', 2b='$duaB', 2c='$duaC', 2d='$duaD', 2e='$duaE', 2f='$duaF', 2g='$duaG', 2h='$duaH', 2i='$duaI', 2j='$duaJ', 2k='$duaK', 2l='$duaL', 2m='$duaM', 2n='$duaN',
                                            3a1='$tigaA1', 3a2='$tigaA2', 3a3='$tigaA3', 3a4='$tigaA4', 3a5='$tigaA5', 3a6='$tigaA6',
                                            4a1='$empatA1', 4a2='$empatA2', 4a3='$empatA3', 4a4='$empatA4',
                                            5a1='$limaA1', 5a2='$limaA2', 5a3='$limaA3', 5a4='$limaA4', 5a5='$limaA5', 5a6='$limaA6', 5a7='$limaA7', 5a8='$limaA8', 5a9='$limaA9',
                                            6a='$enamA', 6b='$enamB',
                                            7a='$tujuhA', 7b='$tujuhB',
                                            tanggal_update=NOW(), pembuat='$pembuat' WHERE id_rencana='$id_rencana'
                                        ");
            
            
            if($update_rencana){
                ?>
                    <script>
                        alert('RKTS Anda Berhasil Di Perbaharui');
                        window.location.href='updaterkts.php?success&semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert('Data Gagal Diperbaharui');
                        window.location.href='updaterkts.php?success&semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
                    </script>
                <?php
            }
        //}
        
    }
	
	

    //Fungsi Input NILAI RKTS & EKTS
    else if($act=='input_nilai'){
        $id_rencana = $_POST['id_rencana'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $nik = $_POST['nik'];
        $no_serdos = $_POST['no_serdos'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat_rumah = $_POST['alamat_rumah'];
        $nomor_hp = $_POST['nomor_hp'];
        $status_dosen = $_POST['status_dosen'];
        $pendidikan_terakhir = $_POST['pendidikan_terakhir'];
        $jabatan_akademik = $_POST['jabatan_akademik'];
        $tmt_jabatan = $_POST['tmt_jabatan'];
        $pangkat_golongan = $_POST['pangkat_golongan'];
        $jabatan_struktural = $_POST['jabatan_struktural'];
        $prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
        $kepala_prodi = $_POST['kepala_prodi'];
        
        //Pendidikan
        $koreksi1 = $_POST['koreksi1'];
        $koreksi2 = $_POST['koreksi2'];
        $koreksi3 = $_POST['koreksi3'];
        $koreksi4 = $_POST['koreksi4'];
        $koreksi5 = $_POST['koreksi5'];
        $koreksi6 = $_POST['koreksi6'];
        $koreksi7 = $_POST['koreksi7'];
        $koreksi8 = $_POST['koreksi8'];
        $koreksi9 = $_POST['koreksi9'];
        $koreksi10 = $_POST['koreksi10'];
        $koreksi11 = $_POST['koreksi11'];
        $koreksi12 = $_POST['koreksi12'];
        $koreksi13 = $_POST['koreksi13'];
        $koreksi14 = $_POST['koreksi14'];
        $koreksi15 = $_POST['koreksi15'];
        $koreksi16 = $_POST['koreksi16'];
        $koreksi17 = $_POST['koreksi17'];
        $koreksi18 = $_POST['koreksi18'];
        $koreksi19 = $_POST['koreksi19'];
        $koreksi20 = $_POST['koreksi20'];
        $koreksi21 = $_POST['koreksi21'];
        $koreksi22 = $_POST['koreksi22'];
        $koreksi23 = $_POST['koreksi23'];
        $koreksi24 = $_POST['koreksi24'];
        $koreksi25 = $_POST['koreksi25'];
        $koreksi26 = $_POST['koreksi26'];
        $koreksi27 = $_POST['koreksi27'];
        $koreksi28 = $_POST['koreksi28'];
        $koreksi29 = $_POST['koreksi29'];
        $koreksi30 = $_POST['koreksi30'];
        $koreksi31 = $_POST['koreksi31'];
        $koreksi32 = $_POST['koreksi32'];
        $koreksi33 = $_POST['koreksi33'];
        $koreksi34 = $_POST['koreksi34'];
        $koreksi35 = $_POST['koreksi35'];
        $koreksi36 = $_POST['koreksi36'];
        $koreksi37 = $_POST['koreksi37'];
        $koreksi38 = $_POST['koreksi38'];
        $koreksi39 = $_POST['koreksi39'];
        $koreksi40 = $_POST['koreksi40'];
        $koreksi41 = $_POST['koreksi41'];
        $koreksi42 = $_POST['koreksi42'];
        $koreksi43 = $_POST['koreksi43'];
        $koreksi44 = $_POST['koreksi44'];
        $koreksi45 = $_POST['koreksi45'];
        $koreksi46 = $_POST['koreksi46'];
        $koreksi47 = $_POST['koreksi47'];
        $koreksi48 = $_POST['koreksi48'];

        
        //Penelitian
        $koreksi49 = $_POST['koreksi49'];
        $koreksi50 = $_POST['koreksi50'];
        $koreksi51 = $_POST['koreksi51'];
        $koreksi52 = $_POST['koreksi52'];
        $koreksi53 = $_POST['koreksi53'];
        $koreksi54 = $_POST['koreksi54'];
        $koreksi55 = $_POST['koreksi55'];
        $koreksi56 = $_POST['koreksi56'];
        $koreksi57 = $_POST['koreksi57'];
        $koreksi58 = $_POST['koreksi58'];
        $koreksi59 = $_POST['koreksi59'];
        $koreksi60 = $_POST['koreksi60'];
        $koreksi61 = $_POST['koreksi61'];
        $koreksi62 = $_POST['koreksi62'];
        $koreksi63 = $_POST['koreksi63'];
        $koreksi64 = $_POST['koreksi64'];
        $koreksi65 = $_POST['koreksi65'];
        $koreksi66 = $_POST['koreksi66'];
        $koreksi67 = $_POST['koreksi67'];
        $koreksi68 = $_POST['koreksi68'];
        $koreksi69 = $_POST['koreksi69'];
        $koreksi70 = $_POST['koreksi70'];
        $koreksi71 = $_POST['koreksi71'];
        $koreksi72 = $_POST['koreksi72'];
        $koreksi73 = $_POST['koreksi73'];
        $koreksi74 = $_POST['koreksi74'];
        $koreksi75 = $_POST['koreksi75'];
        $koreksi76 = $_POST['koreksi76'];
        $koreksi77 = $_POST['koreksi77'];
        $koreksi78 = $_POST['koreksi78'];
        $koreksi79 = $_POST['koreksi79'];
        $koreksi80 = $_POST['koreksi80'];
        $koreksi81 = $_POST['koreksi81'];
        $koreksi82 = $_POST['koreksi82'];
        $koreksi83 = $_POST['koreksi83'];
        $koreksi84 = $_POST['koreksi84'];
        $koreksi85 = $_POST['koreksi85'];
        $koreksi86 = $_POST['koreksi86'];
        $koreksi87 = $_POST['koreksi87'];
        $koreksi88 = $_POST['koreksi88'];
        $koreksi89 = $_POST['koreksi89'];
        $koreksi90 = $_POST['koreksi90'];
        $koreksi91 = $_POST['koreksi91'];
        $koreksi92 = $_POST['koreksi92'];
        $koreksi93 = $_POST['koreksi93'];
        $koreksi94 = $_POST['koreksi94'];
        $koreksi95 = $_POST['koreksi95'];
        $koreksi96 = $_POST['koreksi96'];
        $koreksi97 = $_POST['koreksi97'];
        
        //Pengabdian
        $koreksi98 = $_POST['koreksi98'];
        $koreksi99 = $_POST['koreksi99'];
        $koreksi100 = $_POST['koreksi100'];
        $koreksi101 = $_POST['koreksi101'];
        $koreksi102 = $_POST['koreksi102'];
        $koreksi103 = $_POST['koreksi103'];
        $koreksi104 = $_POST['koreksi104'];
        $koreksi105 = $_POST['koreksi105'];
        $koreksi106 = $_POST['koreksi106'];
        $koreksi107 = $_POST['koreksi107'];
        $koreksi108 = $_POST['koreksi108'];
        $koreksi109 = $_POST['koreksi109'];
        $koreksi110 = $_POST['koreksi110'];
        $koreksi111 = $_POST['koreksi111'];
        
        //Kegiatan Penunjang Tridharma Perguruan Tinggi
        $koreksi112 = $_POST['koreksi112'];
        $koreksi113 = $_POST['koreksi113'];
        $koreksi114 = $_POST['koreksi114'];
        $koreksi115 = $_POST['koreksi115'];
        $koreksi116 = $_POST['koreksi116'];
        $koreksi117 = $_POST['koreksi117'];
        $koreksi118 = $_POST['koreksi118'];
        $koreksi119 = $_POST['koreksi119'];
        $koreksi120 = $_POST['koreksi120'];
        $koreksi121 = $_POST['koreksi121'];
        $koreksi122 = $_POST['koreksi122'];
        $koreksi123 = $_POST['koreksi123'];
        $koreksi124 = $_POST['koreksi124'];
        $koreksi125 = $_POST['koreksi125'];
        $koreksi126 = $_POST['koreksi126'];
        $koreksi127 = $_POST['koreksi127'];
        $koreksi128 = $_POST['koreksi128'];
        $koreksi129 = $_POST['koreksi129'];
        $koreksi130 = $_POST['koreksi130'];
        $koreksi131 = $_POST['koreksi131'];
        $koreksi132 = $_POST['koreksi132'];
        $koreksi133 = $_POST['koreksi133'];
        $koreksi134 = $_POST['koreksi134'];
        $koreksi135 = $_POST['koreksi135'];
        $koreksi136 = $_POST['koreksi136'];
        $koreksi137 = $_POST['koreksi137'];
        $koreksi138 = $_POST['koreksi138'];
        $koreksi139 = $_POST['koreksi139'];
        $koreksi140 = $_POST['koreksi140'];
        $koreksi141 = $_POST['koreksi141'];
        
        //Kegiatan Non Akademik
        $koreksi142 = $_POST['koreksi142'];
        $koreksi143 = $_POST['koreksi143'];
        $koreksi144 = $_POST['koreksi144'];
        $koreksi145 = $_POST['koreksi145'];
        $koreksi146 = $_POST['koreksi146'];
        $koreksi147 = $_POST['koreksi147'];
        $koreksi148 = $_POST['koreksi148'];
        $koreksi149 = $_POST['koreksi149'];
        $koreksi150 = $_POST['koreksi150'];
        $koreksi151 = $_POST['koreksi151'];
        
        //Pengembangan Karir
        $koreksi152 = $_POST['koreksi152'];
        $koreksi153 = $_POST['koreksi153'];
        
        $pembuat = $_SESSION['nama_lengkap'];

        //Insert ke Tabel Nilai     
        mysql_query("INSERT INTO tbl_nilai
                                    VALUES(NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi1', NOW(), '', '$pembuat', 'Sudah', 'koreksi1'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi2', NOW(), '', '$pembuat', 'Sudah', 'koreksi2'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi3', NOW(), '', '$pembuat', 'Sudah', 'koreksi3'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi4', NOW(), '', '$pembuat', 'Sudah', 'koreksi4'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi5', NOW(), '', '$pembuat', 'Sudah', 'koreksi5'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi6', NOW(), '', '$pembuat', 'Sudah', 'koreksi6'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi7', NOW(), '', '$pembuat', 'Sudah', 'koreksi7'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi8', NOW(), '', '$pembuat', 'Sudah', 'koreksi8'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi9', NOW(), '', '$pembuat', 'Sudah', 'koreksi9'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi10', NOW(), '', '$pembuat', 'Sudah', 'koreksi10'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi11', NOW(), '', '$pembuat', 'Sudah', 'koreksi11'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi12', NOW(), '', '$pembuat', 'Sudah', 'koreksi12'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi13', NOW(), '', '$pembuat', 'Sudah', 'koreksi13'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi14', NOW(), '', '$pembuat', 'Sudah', 'koreksi14'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi15', NOW(), '', '$pembuat', 'Sudah', 'koreksi15'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi16', NOW(), '', '$pembuat', 'Sudah', 'koreksi16'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi17', NOW(), '', '$pembuat', 'Sudah', 'koreksi17'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi18', NOW(), '', '$pembuat', 'Sudah', 'koreksi18'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi19', NOW(), '', '$pembuat', 'Sudah', 'koreksi19'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi20', NOW(), '', '$pembuat', 'Sudah', 'koreksi20'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi21', NOW(), '', '$pembuat', 'Sudah', 'koreksi21'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi22', NOW(), '', '$pembuat', 'Sudah', 'koreksi22'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi23', NOW(), '', '$pembuat', 'Sudah', 'koreksi23'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi24', NOW(), '', '$pembuat', 'Sudah', 'koreksi24'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi25', NOW(), '', '$pembuat', 'Sudah', 'koreksi25'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi26', NOW(), '', '$pembuat', 'Sudah', 'koreksi26'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi27', NOW(), '', '$pembuat', 'Sudah', 'koreksi27'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi28', NOW(), '', '$pembuat', 'Sudah', 'koreksi28'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi29', NOW(), '', '$pembuat', 'Sudah', 'koreksi29'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi30', NOW(), '', '$pembuat', 'Sudah', 'koreksi30'), 
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi31', NOW(), '', '$pembuat', 'Sudah', 'koreksi31'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi32', NOW(), '', '$pembuat', 'Sudah', 'koreksi32'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi33', NOW(), '', '$pembuat', 'Sudah', 'koreksi33'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi34', NOW(), '', '$pembuat', 'Sudah', 'koreksi34'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi35', NOW(), '', '$pembuat', 'Sudah', 'koreksi35'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi36', NOW(), '', '$pembuat', 'Sudah', 'koreksi36'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi37', NOW(), '', '$pembuat', 'Sudah', 'koreksi37'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi38', NOW(), '', '$pembuat', 'Sudah', 'koreksi38'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi39', NOW(), '', '$pembuat', 'Sudah', 'koreksi39'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi40', NOW(), '', '$pembuat', 'Sudah', 'koreksi40'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi41', NOW(), '', '$pembuat', 'Sudah', 'koreksi41'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi42', NOW(), '', '$pembuat', 'Sudah', 'koreksi42'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi43', NOW(), '', '$pembuat', 'Sudah', 'koreksi43'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi44', NOW(), '', '$pembuat', 'Sudah', 'koreksi44'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi45', NOW(), '', '$pembuat', 'Sudah', 'koreksi45'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi46', NOW(), '', '$pembuat', 'Sudah', 'koreksi46'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi47', NOW(), '', '$pembuat', 'Sudah', 'koreksi47'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pendidikan', '$koreksi48', NOW(), '', '$pembuat', 'Sudah', 'koreksi48'),

                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi49', NOW(), '', '$pembuat', 'Sudah', 'koreksi49'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi50', NOW(), '', '$pembuat', 'Sudah', 'koreksi50'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi51', NOW(), '', '$pembuat', 'Sudah', 'koreksi51'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi52', NOW(), '', '$pembuat', 'Sudah', 'koreksi52'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi53', NOW(), '', '$pembuat', 'Sudah', 'koreksi53'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi54', NOW(), '', '$pembuat', 'Sudah', 'koreksi54'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi55', NOW(), '', '$pembuat', 'Sudah', 'koreksi55'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi56', NOW(), '', '$pembuat', 'Sudah', 'koreksi56'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi57', NOW(), '', '$pembuat', 'Sudah', 'koreksi57'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi58', NOW(), '', '$pembuat', 'Sudah', 'koreksi58'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi59', NOW(), '', '$pembuat', 'Sudah', 'koreksi59'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi60', NOW(), '', '$pembuat', 'Sudah', 'koreksi60'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi61', NOW(), '', '$pembuat', 'Sudah', 'koreksi61'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi62', NOW(), '', '$pembuat', 'Sudah', 'koreksi62'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi63', NOW(), '', '$pembuat', 'Sudah', 'koreksi63'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi64', NOW(), '', '$pembuat', 'Sudah', 'koreksi64'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi65', NOW(), '', '$pembuat', 'Sudah', 'koreksi65'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi66', NOW(), '', '$pembuat', 'Sudah', 'koreksi66'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi67', NOW(), '', '$pembuat', 'Sudah', 'koreksi67'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi68', NOW(), '', '$pembuat', 'Sudah', 'koreksi68'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi69', NOW(), '', '$pembuat', 'Sudah', 'koreksi69'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi70', NOW(), '', '$pembuat', 'Sudah', 'koreksi70'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi71', NOW(), '', '$pembuat', 'Sudah', 'koreksi71'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi72', NOW(), '', '$pembuat', 'Sudah', 'koreksi72'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi73', NOW(), '', '$pembuat', 'Sudah', 'koreksi73'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi74', NOW(), '', '$pembuat', 'Sudah', 'koreksi74'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi75', NOW(), '', '$pembuat', 'Sudah', 'koreksi75'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi76', NOW(), '', '$pembuat', 'Sudah', 'koreksi76'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi77', NOW(), '', '$pembuat', 'Sudah', 'koreksi77'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi78', NOW(), '', '$pembuat', 'Sudah', 'koreksi78'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi79', NOW(), '', '$pembuat', 'Sudah', 'koreksi79'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi80', NOW(), '', '$pembuat', 'Sudah', 'koreksi80'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi81', NOW(), '', '$pembuat', 'Sudah', 'koreksi81'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi82', NOW(), '', '$pembuat', 'Sudah', 'koreksi82'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi83', NOW(), '', '$pembuat', 'Sudah', 'koreksi83'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi84', NOW(), '', '$pembuat', 'Sudah', 'koreksi84'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi85', NOW(), '', '$pembuat', 'Sudah', 'koreksi85'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi86', NOW(), '', '$pembuat', 'Sudah', 'koreksi86'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi87', NOW(), '', '$pembuat', 'Sudah', 'koreksi87'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi88', NOW(), '', '$pembuat', 'Sudah', 'koreksi88'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi89', NOW(), '', '$pembuat', 'Sudah', 'koreksi89'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi90', NOW(), '', '$pembuat', 'Sudah', 'koreksi90'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi91', NOW(), '', '$pembuat', 'Sudah', 'koreksi91'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi92', NOW(), '', '$pembuat', 'Sudah', 'koreksi92'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi93', NOW(), '', '$pembuat', 'Sudah', 'koreksi93'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi94', NOW(), '', '$pembuat', 'Sudah', 'koreksi94'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi95', NOW(), '', '$pembuat', 'Sudah', 'koreksi95'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi96', NOW(), '', '$pembuat', 'Sudah', 'koreksi96'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penelitian', '$koreksi97', NOW(), '', '$pembuat', 'Sudah', 'koreksi97'),

                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi98', NOW(), '', '$pembuat', 'Sudah', 'koreksi98'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi99', NOW(), '', '$pembuat', 'Sudah', 'koreksi99'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi100', NOW(), '', '$pembuat', 'Sudah', 'koreksi100'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi101', NOW(), '', '$pembuat', 'Sudah', 'koreksi101'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi102', NOW(), '', '$pembuat', 'Sudah', 'koreksi102'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi103', NOW(), '', '$pembuat', 'Sudah', 'koreksi103'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi104', NOW(), '', '$pembuat', 'Sudah', 'koreksi104'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi105', NOW(), '', '$pembuat', 'Sudah', 'koreksi105'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi106', NOW(), '', '$pembuat', 'Sudah', 'koreksi106'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi107', NOW(), '', '$pembuat', 'Sudah', 'koreksi107'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi108', NOW(), '', '$pembuat', 'Sudah', 'koreksi108'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi109', NOW(), '', '$pembuat', 'Sudah', 'koreksi109'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi110', NOW(), '', '$pembuat', 'Sudah', 'koreksi110'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengabdian', '$koreksi111', NOW(), '', '$pembuat', 'Sudah', 'koreksi111'),

                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi112', NOW(), '', '$pembuat', 'Sudah', 'koreksi112'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi113', NOW(), '', '$pembuat', 'Sudah', 'koreksi113'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi114', NOW(), '', '$pembuat', 'Sudah', 'koreksi114'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi115', NOW(), '', '$pembuat', 'Sudah', 'koreksi115'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi116', NOW(), '', '$pembuat', 'Sudah', 'koreksi116'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi117', NOW(), '', '$pembuat', 'Sudah', 'koreksi117'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi118', NOW(), '', '$pembuat', 'Sudah', 'koreksi118'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi119', NOW(), '', '$pembuat', 'Sudah', 'koreksi119'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi120', NOW(), '', '$pembuat', 'Sudah', 'koreksi120'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi121', NOW(), '', '$pembuat', 'Sudah', 'koreksi121'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi122', NOW(), '', '$pembuat', 'Sudah', 'koreksi122'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi123', NOW(), '', '$pembuat', 'Sudah', 'koreksi123'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi124', NOW(), '', '$pembuat', 'Sudah', 'koreksi124'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi125', NOW(), '', '$pembuat', 'Sudah', 'koreksi125'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi126', NOW(), '', '$pembuat', 'Sudah', 'koreksi126'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi127', NOW(), '', '$pembuat', 'Sudah', 'koreksi127'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi128', NOW(), '', '$pembuat', 'Sudah', 'koreksi128'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi129', NOW(), '', '$pembuat', 'Sudah', 'koreksi129'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi130', NOW(), '', '$pembuat', 'Sudah', 'koreksi130'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi131', NOW(), '', '$pembuat', 'Sudah', 'koreksi131'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi132', NOW(), '', '$pembuat', 'Sudah', 'koreksi132'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi133', NOW(), '', '$pembuat', 'Sudah', 'koreksi133'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi134', NOW(), '', '$pembuat', 'Sudah', 'koreksi134'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi135', NOW(), '', '$pembuat', 'Sudah', 'koreksi135'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi136', NOW(), '', '$pembuat', 'Sudah', 'koreksi136'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi137', NOW(), '', '$pembuat', 'Sudah', 'koreksi137'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi138', NOW(), '', '$pembuat', 'Sudah', 'koreksi138'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'penunjang', '$koreksi139', NOW(), '', '$pembuat', 'Sudah', 'koreksi139'),

                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi140', NOW(), '', '$pembuat', 'Sudah', 'koreksi140'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi141', NOW(), '', '$pembuat', 'Sudah', 'koreksi141'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi142', NOW(), '', '$pembuat', 'Sudah', 'koreksi142'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi143', NOW(), '', '$pembuat', 'Sudah', 'koreksi143'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi144', NOW(), '', '$pembuat', 'Sudah', 'koreksi144'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi145', NOW(), '', '$pembuat', 'Sudah', 'koreksi145'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi146', NOW(), '', '$pembuat', 'Sudah', 'koreksi146'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi147', NOW(), '', '$pembuat', 'Sudah', 'koreksi147'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi148', NOW(), '', '$pembuat', 'Sudah', 'koreksi148'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'kegiatannonakad', '$koreksi149', NOW(), '', '$pembuat', 'Sudah', 'koreksi149'),

                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengembangankarir', '$koreksi150', NOW(), '', '$pembuat', 'Sudah', 'koreksi150'),
                                    (NULL, '$semester', '$tahun_ajaran', '$nik', 'pengembangankarir', '$koreksi151', NOW(), '', '$pembuat', 'Sudah', 'koreksi151')

                    ");
        
        //Update ke Tabel Rencana
        mysql_query("UPDATE tbl_rencana SET koreksi='Sudah', tanggal_update=NOW(),
                                        pembuat='$pembuat' WHERE nik='$nik' AND tahun_ajaran='$tahun_ajaran' AND semester='$semester'
                                    ");
        
        //Update ke Tabel Berkas
        mysql_query("UPDATE tbl_berkas SET koreksi='Sudah', tanggal_update=NOW(),
                                        pembuat='$pembuat' WHERE WHERE berkas_nik='$nik' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_semester='$semester'
                                    ");
							
		//Update ke Tabel User yang di periksa
        mysql_query("UPDATE tbl_user SET pemeriksa='$pembuat', tanggal_pemeriksa=NOW() WHERE nik='$nik'
                                    ");
        
        if($semester == 'Ganjil'){
            ?>
                <script>
                    alert('Nilai Berhasil di Tambahkan');
                    window.location.href='nilai.php?success&semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
                </script>
            <?php
        }
        else if($semester == 'Genap'){
            ?>
                <script>
                    alert('Nilai Berhasil di Tambahkan');
                    window.location.href='nilai_genap.php?success&semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
                </script>
            <?php
        }
    }
	
	//Fungsi EDIT NILAI RKTS & EKTS
    else if($act=='edit_nilai'){
        $id_nilai = $_POST['id_nilai'];
        $nilai = $_POST['nilai'];
		$nik = $_POST['nik'];
		$semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
		
        $pembuat = $_SESSION['nama_lengkap'];

        mysql_query("UPDATE tbl_rencana SET pembuat='$pembuat',
            tanggal_update=NOW() WHERE nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran'");
        
        $edit_nilai=mysql_query("UPDATE tbl_nilai SET nilai='$nilai', pembuat='$pembuat',
            tanggal_update=NOW() WHERE id_nilai='$id_nilai' AND nik='$nik' AND semester='$semester' AND tahun_ajaran='$tahun_ajaran'");
			
		
        if($edit_nilai){
            ?>
                <script>
                    alert('Nilai Berhasil di Perbaharui');
                    window.location.href='lembar_koreksi2.php?success&semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='lembar_koreksi2.php?success&semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
                </script>
            <?php
        }
    }

    //Fungsi Login Admin
    else if($act=='loginadmin'){
        $username = mysql_real_escape_string($_POST['username']);
        $password = mysql_real_escape_string($_POST['pass']);
        $password = md5($password);
        $query = "SELECT * FROM tbl_admin WHERE username = '$username'";
        $hasil = mysql_query($query);
        $data = mysql_fetch_array($hasil);
        // cek kesesuaian password
        if ($password == $data['password'])
        {
            $_SESSION['id_admin'] = $data['id_admin'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
			$_SESSION['fakultas'] = $data['fakultas'];
			$id_admin = $data['id_admin'];
			
			if($_SESSION['fakultas']=='Fakultas Biologi'){
				   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
				   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
			elseif($_SESSION['fakultas']=='Fakultas Psikologi'){
			   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
			   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
			elseif($_SESSION['fakultas']=='Fakultas Teknik'){
			   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
			   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
			elseif($_SESSION['fakultas']=='Fakultas Hukum'){
			   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
			   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
			elseif($_SESSION['fakultas']=='Fakultas Pertanian'){
			   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
			   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
			elseif($_SESSION['fakultas']=='Fakultas Isipol'){
			   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
			   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
			elseif($_SESSION['fakultas']=='Fakultas Ekonomi'){
			   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
			   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
			elseif($_SESSION['fakultas']=='Pascasarjana'){
			   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
			   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
			elseif($_SESSION['fakultas']=='Administrator Fakultas'){
			   echo "<div id='sukses' class='alert alert-info'><strong>BERHASIL...</strong><button type='button' class='close' data-dismiss='alert'><i class='ace-icon fa fa-times'></i></button></div><script>window.location ='home.php'</script>";
			   mysql_query("UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'");
			}
            /*
            $id_admin = $data['id_admin'];
            $query = "UPDATE tbl_admin SET waktu_login=NOW() WHERE id_admin='$id_admin'";
            mysql_query($query);
            //Penggunaan Meta Header HTTP
            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';    
            exit;
			*/
        }
        else{
            ?>
                <script>
                    window.location.href='index.php?fail';
                </script>
            <?php
        }
    }
    
    //Fungsi Update Password
    else if($act=='updatepassword'){
        $id_admin = mysql_real_escape_string($_POST['id_admin']);
        $password = mysql_real_escape_string($_POST['password']);
        $nama_lengkap = mysql_real_escape_string($_POST['nama_lengkap']);

        $sql="UPDATE tbl_admin SET password=MD5('$password'), pembuat='$nama_lengkap',
            tanggal_update=NOW() WHERE id_admin='$id_admin'";
        $query = mysql_query($sql);

        if($query)
        {
            ?>
            <script>
            alert('Password Anda Berhasil di perbaharui');
            window.location.href='update_password.php?success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
            alert('Password gagal di Perbaharui');
            window.location.href='update_password.php?failed';
            </script>
            <?php
        }
    }
    
    //Upload Photo
    else if($act=='uploadphoto'){
        $id_admin = $_POST['id_admin'];

        $file = rand(1000,100000)."-".$_FILES['photo']['name'];
        $file_loc = $_FILES['photo']['tmp_name'];
        $file_size = $_FILES['photo']['size'];
        $file_type = $_FILES['photo']['type'];
        $folder="upload/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
            $sql="UPDATE tbl_admin SET photo='$final_file' WHERE id_admin='$id_admin'";
            mysql_query($sql);
            ?>
            <script>
            alert('Photo Anda Berhasil di Perbaharui');
            window.location.href='upload_photo.php?success';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
            alert('Gagal Upload Photo');
            window.location.href='upload_photo.php?failed';
            </script>
            <?php
        }
    }

    //Fungsi Update Referensi Unit Kerja
    else if($act=='update_unitkerja'){
        $id_unit = $_POST['id_unit'];
        $unitkerja = $_POST['unit_kerja'];

        //Update Tabel Unit Kerja                           
        $update_unitkerja = mysql_query("UPDATE ref_fakultas_prodi SET unitkerja='$unitkerja' WHERE id_unitkerja='$id_unit'");    

        if($update_unitkerja){
            ?>
                <script>
                    alert('Unit Kerja Berhasil Di Perbaharui');
                    window.location.href='ref_fakultas.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_fakultas.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Referensi Unit Kerja
    else if($act=='tambah_unitkerja'){
        $unitkerja = $_POST['unit_kerja'];

        //Insert Tabel Unit Kerja                           
        $tambah_unitkerja = mysql_query("INSERT INTO ref_fakultas_prodi VALUES(NULL, '$unitkerja')");    

        if($tambah_unitkerja){
            ?>
                <script>
                    alert('Unit Kerja Berhasil Di Tambahkan');
                    window.location.href='ref_fakultas.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_fakultas.php';
                </script>
            <?php
        }
    }

    //Fungsi Update Referensi Jabatan Akademik
    else if($act=='update_jabatanakademik'){
        $id_jabatan = $_POST['id_jabatan'];
        $jabatan_akademik = $_POST['jabatan_akademik'];

        //Update Tabel Jabatan Akademik                        
        $update_jabatan = mysql_query("UPDATE ref_jabatan_akademik SET nama_jabatanakademik='$jabatan_akademik' WHERE id_jabatanakademik='$id_jabatan'");    

        if($update_jabatan){
            ?>
                <script>
                    alert('Jabatan Akademik Berhasil Di Perbaharui');
                    window.location.href='ref_jabatan_akademik.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_jabatan_akademik.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Referensi Jabatan Akademik
    else if($act=='tambah_jabatanakademik'){
        $jabatanakademik = $_POST['jabatan_akademik'];

        //Insert Tabel Jabatan Akademik                        
        $tambah_jabatan = mysql_query("INSERT INTO ref_jabatan_akademik VALUES(NULL, '$jabatanakademik')");    

        if($tambah_jabatan){
            ?>
                <script>
                    alert('Jabatan Akademik Berhasil Di Tambahkan');
                    window.location.href='ref_jabatan_akademik.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_jabatan_akademik.php';
                </script>
            <?php
        }
    }

    //Fungsi Update Referensi Jabatan Struktural
    else if($act=='update_jabatanstruktural'){
        $id_jabatan = $_POST['id_jabatanstruktural'];
        $jabatan_struktural = $_POST['jabatan_struktural'];

        //Update Tabel Jabatan Struktural                         
        $update_jabatan = mysql_query("UPDATE ref_jabatan_struktural SET jabatanstruktural='$jabatan_struktural' WHERE id_jabatanstruktural='$id_jabatan'");    

        if($update_jabatan){
            ?>
                <script>
                    alert('Jabatan Struktural Berhasil Di Perbaharui');
                    window.location.href='ref_jabatan_struktural.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_jabatan_struktural.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Referensi Jabatan Struktural
    else if($act=='tambah_jabatanstruktural'){
        $jabatanstruktural = $_POST['jabatan_struktural'];

        //Insert Tabel Jabatan Struktural                         
        $tambah_jabatan = mysql_query("INSERT INTO ref_jabatan_struktural VALUES(NULL, '$jabatanstruktural')");    

        if($tambah_jabatan){
            ?>
                <script>
                    alert('Jabatan Struktural Berhasil Di Tambahkan');
                    window.location.href='ref_jabatan_struktural.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_jabatan_struktural.php';
                </script>
            <?php
        }
    }

    //Fungsi Update Referensi Kepala Prodi
    else if($act=='update_kepalaprodi'){
        $id_kepala= $_POST['id_kepala'];
        $kepala_prodi = $_POST['kepala_prodi'];

        //Update Tabel Kepala Prodi                         
        $update_kepala = mysql_query("UPDATE ref_kepala_prodi SET kepala_prodi='$kepala_prodi' WHERE id_kepala='$id_kepala'");    

        if($update_kepala){
            ?>
                <script>
                    alert('Kepala Prodi Berhasil Di Perbaharui');
                    window.location.href='ref_kepala_prodi.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_kepala_prodi.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Referensi Kepala Prodi
    else if($act=='tambah_kepalaprodi'){
        $kepala_prodi = $_POST['kepala_prodi'];

        //Insert Tabel Kepala Prodi                          
        $kepala_prodi = mysql_query("INSERT INTO ref_kepala_prodi VALUES(NULL, '$kepala_prodi')");    

        if($kepala_prodi){
            ?>
                <script>
                    alert('Kepala Prodi Berhasil Di Tambahkan');
                    window.location.href='ref_kepala_prodi.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_kepala_prodi.php';
                </script>
            <?php
        }
    }

    //Fungsi Update Referensi Golongan Kerja
    else if($act=='update_golongankerja'){
        $id_golongankerja= $_POST['id_golongankerja'];
        $golongan_kerja = $_POST['golongan_kerja'];

        //Update Tabel Pangkat                      
        $update_golongan = mysql_query("UPDATE ref_pangkat_golongan SET golongankerja='$golongan_kerja' WHERE id_golongankerja='$id_golongankerja'");    

        if($update_golongan){
            ?>
                <script>
                    alert('Golongan Kerja Berhasil Di Perbaharui');
                    window.location.href='ref_pangkat_golongan.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_pangkat_golongan.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Referensi Pangkat Golongan
    else if($act=='tambah_pangkat'){
        $pangkat_golongan = $_POST['pangkat_golongan'];

        //Insert Tabel Pangkat                     
        $pangkat_golongan = mysql_query("INSERT INTO ref_pangkat_golongan VALUES(NULL, '$pangkat_golongan')");    

        if($pangkat_golongan){
            ?>
                <script>
                    alert('Pangkat / Golongan Berhasil Di Tambahkan');
                    window.location.href='ref_pangkat_golongan.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_pangkat_golongan.php';
                </script>
            <?php
        }
    }

    //Fungsi Update Referensi Pendidikan
    else if($act=='update_pendidikan'){
        $id_pendidikan= $_POST['id_pendidikan'];
        $pendidikan = $_POST['pendidikan'];

        //Update Tabel Pendidikan                         
        $pendidikan = mysql_query("UPDATE ref_pendidikan SET pendidikan='$pendidikan' WHERE id_pendidikan='$id_pendidikan'");    

        if($pendidikan){
            ?>
                <script>
                    alert('Pendidikan Berhasil Di Perbaharui');
                    window.location.href='ref_pendidikan.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_pendidikan.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Referensi Pendidikan
    else if($act=='tambah_pendidikan'){
        $pendidikan = $_POST['pendidikan'];

        //Insert Tabel Pendidikan                 
        $pendidikan = mysql_query("INSERT INTO ref_pendidikan VALUES(NULL, '$pendidikan')");    

        if($pendidikan){
            ?>
                <script>
                    alert('Pendidikan Berhasil Di Tambahkan');
                    window.location.href='ref_pendidikan.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_pendidikan.php';
                </script>
            <?php
        }
    }

    //Fungsi Update Referensi Tahun Ajaran
    else if($act=='update_ta'){
        $id_tahun= $_POST['id_tahun'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $status = $_POST['status'];

        //Update Tabel Pendidikan                         
        $tahun_ajaran = mysql_query("UPDATE ref_tahunajaran SET keterangan='$tahun_ajaran', status='$status' WHERE id_tahun='$id_tahun'");    

        if($tahun_ajaran){
            ?>
                <script>
                    alert('Data Berhasil Di Perbaharui');
                    window.location.href='ref_ta.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_ta.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Tahun Ajaran
    else if($act=='tambah_ta'){
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $status = $_POST['status'];

        //Insert Tabel Pendidikan                 
        $tahun_ajaran = mysql_query("INSERT INTO ref_tahunajaran VALUES(NULL, '$tahun_ajaran', '$status')");    

        if($tahun_ajaran){
            ?>
                <script>
                    alert('Data Berhasil Di Tambahkan');
                    window.location.href='ref_ta.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_ta.php';
                </script>
            <?php
        }
    }

    //Fungsi Update Referensi Semester
    else if($act=='update_semester'){
        $id_semester= $_POST['id_semester'];
        $semester = $_POST['semester'];
        $status = $_POST['status'];

        //Update Tabel Pendidikan                         
        $semester = mysql_query("UPDATE ref_semester SET semester='$semester', status='$status' WHERE id_semester='$id_semester'");    

        if($semester){
            ?>
                <script>
                    alert('Data Berhasil Di Perbaharui');
                    window.location.href='ref_semester.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_semester.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Semester
    else if($act=='tambah_semester'){
        $semester = $_POST['semester'];
        $status = $_POST['status'];

        //Insert Tabel Pendidikan                 
        $semester = mysql_query("INSERT INTO ref_semester VALUES(NULL, '$semester', '$status')");    

        if($semester){
            ?>
                <script>
                    alert('Data Berhasil Di Tambahkan');
                    window.location.href='ref_semester.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_semester.php';
                </script>
            <?php
        }
    }

    //Fungsi Update Referensi Semester EKTS
    else if($act=='update_semesterekts'){
        $id_semester= $_POST['id_semester'];
        $semester = $_POST['semester'];
        $status = $_POST['status'];

        //Update Tabel Pendidikan                         
        $semester = mysql_query("UPDATE tbl_key_semester SET semester='$semester', status='$status' WHERE id_semester='$id_semester'");    

        if($semester){
            ?>
                <script>
                    alert('Data Berhasil Di Perbaharui');
                    window.location.href='ref_semesterekts.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='ref_semesterekts.php';
                </script>
            <?php
        }
    }
    //Fungsi Tambah Semester EKTS
    else if($act=='tambah_semesterekts'){
        $semester = $_POST['semester'];
        $status = $_POST['status'];

        //Insert Tabel Pendidikan                 
        $semester = mysql_query("INSERT INTO tbl_key_semester VALUES(NULL, '$semester', '$status')");    

        if($semester){
            ?>
                <script>
                    alert('Data Berhasil Di Tambahkan');
                    window.location.href='ref_semesterekts.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Di Tambahkan');
                    window.location.href='ref_semesterekts.php';
                </script>
            <?php
        }
    }

	//Fungsi update Batas Waktu RKTS
    elseif($act=='batas_wakturkts'){
        $id_batas = $_POST['id_batas'];
        $tanggal_awal = $_POST['tanggal_awal'];
        $bulan_awal = $_POST['bulan_awal'];
        $tahun_awal = $_POST['tahun_awal'];
        
		$tanggal_selesai = $_POST['tanggal_selesai'];
        $bulan_selesai = $_POST['bulan_selesai'];
        $tahun_selesai = $_POST['tahun_selesai'];
        
        
        $update_batas =  mysql_query("UPDATE tbl_batas_wakturkts SET batas_awal='$tahun_awal-$bulan_awal-$tanggal_awal', batas_akhir='$tahun_selesai-$bulan_selesai-$tanggal_selesai'
                                       WHERE id_batas='$id_batas'
                                    ");
        

        
        if($update_batas){
            ?>
                <script>
                    alert('Data Berhasil di Ubah');
                    window.location.href='batas_wakturkts.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='batas_wakturkts.php';
                </script>
            <?php
        }
    }

    //Fungsi update Batas Waktu EKTS
    elseif($act=='batas_waktuekts'){
        $id_batas = $_POST['id_batas'];
        $tanggal_awal = $_POST['tanggal_awal'];
        $bulan_awal = $_POST['bulan_awal'];
        $tahun_awal = $_POST['tahun_awal'];
        
        $tanggal_selesai = $_POST['tanggal_selesai'];
        $bulan_selesai = $_POST['bulan_selesai'];
        $tahun_selesai = $_POST['tahun_selesai'];
        
        
        $update_batas =  mysql_query("UPDATE tbl_batas_waktuekts SET batas_awal='$tahun_awal-$bulan_awal-$tanggal_awal', batas_akhir='$tahun_selesai-$bulan_selesai-$tanggal_selesai'
                                       WHERE id_batas='$id_batas'
                                    ");
        

        
        if($update_batas){
            ?>
                <script>
                    alert('Data Berhasil di Ubah');
                    window.location.href='batas_waktuekts.php';
                </script>
            <?php
        }
        else{
            ?>
                <script>
                    alert('Data Gagal Diperbaharui');
                    window.location.href='batas_waktuekts.php';
                </script>
            <?php
        }
    }

    //Fungsi Input Data Dosen
    elseif($act=='tambah_dosen'){
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $pembuat = $_SESSION['nama_lengkap'];

        $periksa_data = mysql_query("SELECT * FROM tbl_user WHERE nik='$nik'");    
        $j_cek_ganda = mysql_fetch_array($periksa_data);
        if ($j_cek_ganda > 0) {
            ?>
                <script>
                    alert('NIK ini sudah terdaftar, silahkan cek kembali di daftar dosen dengan nik tersebut');
                    window.location.href='datadosen.php';
                </script>
            <?php
        }else{
            $dosen = mysql_query("INSERT INTO tbl_user 
                VALUES(NULL, '', '', '', '$nama', '$nik', MD5(nik), '', '', '',
                    '', '', '', '', '', '', '', '', '', '',
                    NOW(), '', '$pembuat', '', '', '')");   
        
            if($dosen){
                ?>
                    <script>
                        alert('Data Berhasil di tambahkan');
                        window.location.href='datadosen.php';
                    </script>
                <?php
            }
            else{
                ?>
                    <script>
                        alert('Data Gagal Ditambahkan');
                        window.location.href='datadosen.php';
                    </script>
                <?php
            }
        }
    }
?>