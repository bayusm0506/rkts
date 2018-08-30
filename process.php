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
					window.location.href='datarkts.php';
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
						window.location.href='datarkts.php?success';
					</script>
				<?php
			}
			else{
				?>
					<script>
						alert('Data Gagal Disimpan');
						window.location.href='media.php?failed';
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

	//Fungsi Login
	else if($act=='login'){
		$nik = mysql_real_escape_string($_POST['nik']);
		$password = mysql_real_escape_string($_POST['pass']);
		$password = md5($password);
		$query = "SELECT * FROM tbl_user WHERE nik = '$nik'";
		$hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
		// cek kesesuaian password
		if ($password == $data['password'])
		{
			$_SESSION['id_user'] = $data['id_user'];
			$_SESSION['nik'] = $data['nik'];
		    $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
			
			$id_user = $data['id_user'];
			$query = "UPDATE tbl_user SET waktu_login=NOW() WHERE id_user='$id_user'";
			mysql_query($query);
		    //Penggunaan Meta Header HTTP
		    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';    
		 	exit;
		}
		else{
			?>
				<script>
			        window.location.href='login.php?fail';
		        </script>
	        <?php
		}
	}
	
	//Fungsi Update Password
	else if($act=='updatepassword'){
		$id_user = mysql_real_escape_string($_POST['id_user']);
		$password = mysql_real_escape_string($_POST['password']);

		$sql="UPDATE tbl_user SET password=MD5('$password'),
			tanggal_update=NOW() WHERE id_user='$id_user'";
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
		$id_user = $_POST['id_user'];

		$file = rand(1000,100000)."-".$_FILES['photo']['name'];
	    $file_loc = $_FILES['photo']['tmp_name'];
		$file_size = $_FILES['photo']['size'];
		$file_type = $_FILES['photo']['type'];
		$folder="admin/upload/";
		
		// new file size in KB
		$new_size = $file_size/1024;  
		// new file size in KB
		
		// make file name in lower case
		$new_file_name = strtolower($file);
		// make file name in lower case
		
		$final_file=str_replace(' ','-',$new_file_name);
		
		if(move_uploaded_file($file_loc,$folder.$final_file))
		{
			$sql="UPDATE tbl_user SET photo='$final_file' WHERE id_user='$id_user'";
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
	
	//delete (hapus) password
	else if($act='delete'){
		$username = $_GET['username'];
		//$password = $_GET['password'];
		//DELETE FROM nama_tabel WHERE kondisi
		mysql_query("DELETE FROM pegawai WHERE username='$username'");
  		header('location:admin.php');
	}
	
?>