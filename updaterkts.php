<?php
    include "mediaheader.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="col-md-12">
                            <h3>Form Rencana Kinerja Tridharma Semesteran (RKTS)</h3>
                        </div>
                        </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                
                                    <ul class="nav navbar-right panel_toolbox">
                                        
                                    </ul>
                                    <div class="clearfix"></div>
								
								<form action="process.php?act=updaterkts" method="post">
									<div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Isilah data Anda dengan <code>Lengkap</code> di bawah ini</p>
											<?php
												$semester = $_GET['semester'];
												$tahun_ajaran = $_GET['tahun_ajaran'];
												$nik = $_GET['nik'];
												$view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.nik='$nik' AND tbl_rencana.semester='$semester' AND tbl_rencana.tahun_ajaran = '$tahun_ajaran'");
												
												while($row=mysql_fetch_array($view)){
											?>
																<div class="x_panel"><h2>Identitas Pribadi</h2>
																	<div class="x_title"></div>
																	<!--test-->
																	<?php
																	if(isset($_GET['success']))
																	{
																		?>
																		<label><code>Data Anda Berhasil Diperbaharui</code></label>
																		<?php
																	}
																	else if(isset($_GET['fail']))
																	{
																		?>
																		<label><code>Data Gagal Disimpan</label>
																		<?php
																	}
																	
																?>
																<div class="item form-group">
																<input name="id_rencana" type="hidden" value="<?php echo $row['id_rencana'];?>">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Semester">Semester  <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		
																		<input id="tahun_ajaran" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" required="required" type="text" value="<?php echo $row['semester'];?>" readonly>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Tahun Ajaran">Tahun Ajaran <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<input id="tahun_ajaran" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" required="required" type="text" value="<?php echo $row['tahun_ajaran'];?>" readonly>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Nama Lengkap">Nama Lengkap <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nama_lengkap" placeholder="Contoh : ICT UMA" required="required" type="text" value="<?php echo $row['nama_lengkap'];?>">
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="email">NIP / NIDN / NIK <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<input type="nik" id="nik" name="nik" class="form-control col-md-7 col-xs-12" value="<?php echo $row['nik'];?>" readonly>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="No. Serdos">No. Serdos (jika ada) <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<input id="no_serdos" name="no_serdos" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['no_serdos'];?>">
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Jenis Kelamin">Jenis Kelamin  <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="jenis_kelamin">
																			<?php
																				$q = mysql_query("select * from ref_jenis_kelamin"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['jenis_kelamin']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Alamat Rumah">Alamat Rumah  <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<input id="Alamat" name="alamat_rumah" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['alamat_rumah'];?>">
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Nomor Handphone">No. Handphone <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<input type="text" id="nohp" name="nomor_hp" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['nomor_hp'];?>">
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Status Dosen">Status Dosen  <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="status_dosen">
																			<?php
																				$q = mysql_query("select * from ref_status_dosen"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['status_dosen']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Pendidikan Terakhir">Pendidikan Terakhir  <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="pendidikan_terakhir">
																			<?php
																				$q = mysql_query("select * from ref_pendidikan"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['pendidikan_terakhir']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Jabatan Akademik">Jabatan  Akademik/Fungsional  <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="jabatan_akademik">
																			<?php
																				$q = mysql_query("select * from ref_jabatan_akademik"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['jabatan_akademik']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="TMT">TMT <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<input id="tmt_jabatan" name="tmt_jabatan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['tmt_jabatan'];?>" placeholder="Format : tahun-bulan-tanggal : 2011-05-30">
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Pangkat/Golongan">Pangkat/Golongan <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="pangkat_golongan">
																			<?php
																				$q = mysql_query("select * from ref_pangkat_golongan"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['pangkat_golongan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Jabatan Struktural">Jabatan Struktural <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="jabatan_struktural">
																			<?php
																				$q = mysql_query("select * from ref_jabatan_struktural"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['jabatan_struktural']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Fakultas/Prodi">Fakultas <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="fakultas" required="required">
																			<?php
																				$q = mysql_query("select * from ref_fakultas_prodi"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['fakultas']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Prodi">Prodi <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="prodi" required="required">
																			<?php
																				$q = mysql_query("select * from tbl_prodi"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['prodi']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																				
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Kepala Prodi">Kepala Prodi <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="kepala_prodi">
																			<?php
																				$q = mysql_query("select * from ref_kepala_prodi"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['kepala_prodi']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
															</div>
										
                                        
                                                        <div class="clearfix"></div>
                                                        </div>
														<!-- batastes -->
											
									
                                <div class="x_content">
                                    
                                        <div class="form-horizontal form-label-left" novalidate>

                                            <p>Isilah data Anda dengan <code>Lengkap</code> di bawah ini
                                            </p>
										</div>  
                                <!-- end form lebar -- >
                                <!--inbetween-->

                            <div class="row">                                
                                <div class="col-md-12 col-sm-12 col-xs-12">
									<div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> Form RKTS </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
									<div class="" role="tabpanel" data-example-id="togglable-tabs">
										<ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
											<li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><font style="font-size:9px; color:red;">II. B. PENDIDIKAN</font></a>
											</li>
											<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false"><font style="font-size:9px; color:red;">III. B. PENELITIAN</font></a>
											</li>
											<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><font style="font-size:9px; color:red;">IV. B. PENGABDIAN MASYARAKAT</font></a>
											</li>
											<li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><font style="font-size:9px; color:red;">V. B. PENUNJANG</font></a>
											</li>
											<li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><font style="font-size:9px; color:red;">VI. B. KEGIATAN NON AKADEMIK</font></a>
											</li>
											<li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><font style="font-size:9px; color:red;">VII. PENGEMBANGAN KARIR</font></a>
											</li>
										</ul>
										<div id="myTabContent" class="tab-content">
											<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
												<p><b>II. BIDANG PENDIDIKAN</b></p>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:white; text-transform:uppercase;">
																<td>No.</td>
																<td style="width:700px;">Rencana Tridharma Semesteran</td>
																<td>Keterangan</td>
															</tr>
															<tr>
																<td style="width:80px;">II.A.</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Mengikuti pendidikan sekolah & memperoleh gelar Doktor (S-3)</td>
																<td style="color:#73879C;"><select class="form-control" name="2a_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2a']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.B</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>MELAKSANAKAN PENDIDIKAN DAN PENGAJARAN</b>
																<br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Melaksanakan perkuliahan/tutorial dan membimbing, menguji serta menyelenggarakan pendidikan di lab., bengkel/studio/kebun percobaan/ teknologi pengajaran dan praktik lapangan, menguji serta menyelenggarakan pendidikan di lab.,bengkel/studio/kebun percobaan/ teknologi pengajaran dan praktik lapangan.</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2b_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2b']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.C</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Membimbing Seminar Mahasiswa</td>
																<td style="color:#73879C;"><select class="form-control" name="2c_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2c']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.D</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Membimbing Kuliah Kerja Nyata, Praktik Kerja Nyata, Praktik Kerja Lapangan</td>
																<td style="color:#73879C;"><select class="form-control" name="2d_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2d']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.E</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">																
																	<b>MEMBIMBING & IKUT MEMBIMBING DALAM MENGHASILKAN THESIS / SKRIPSI / TUGAS AKHIR</b>
																	<br/>
																	<ol style="list-style-type: lower-alpha; font-size: 11px;">
																		<li>Pembimbing Utama</li>
																		<li>Pembimbing Pendamping</li>
																	</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2e_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2e']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>	
															<tr>
																<td style="width:80px;">II.F</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>BERTUGAS SEBAGAI PENGUJI SKRIPSI</b>
																<br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Ketua Penguji</li>
																	<li>Anggota/Sekretaris Penguji</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2f_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2f']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.G</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Membina Kegiatan Mahasiswa di Bidang Akademik dan Kemahasiswaan (Dosen PA)
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2g_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2g']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.H</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Mengembangkan Program Kuliah
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2h_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2h']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.I</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																MENGEMBANGKAN BAHAN PENGAJARAN
																</b>
																<br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Buku ajar</li>
																	<li>Diktat, modul, petunjuk praktikum, model, alat bantu, audio visual, naskah tutorial</li>
																	<li>Blog & E-learning</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2i_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2i']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.J</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Menyampaikan Orasi Ilmiah
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2j_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2j']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.K</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																MENDUDUKI JABATAN PIMPINAN PERGURUAN TINGGI
																</b><br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Rektor</li>
																	<li>Pembantu Rektor/Dekan/Direktur PPs/Ketua Lembaga/Ka.Biro</li>
																	<li>Pembantu Dekan/ Wakil Dir. Program Pasca Sarjana</li>
																	<li>Ketua Jurusan/ Ka. Prodi</li>
																	<li>Sekretaris Jurusan</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2k_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2k']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td style="width:80px;">II.L</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>
																MEMBIMBING DOSEN YANG LEBIH RENDAH JABATANNYA
																</b><br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Pembimbing Pencangkokan</li>
																	<li>Reguler</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2l_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2l']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															
															<tr>
																<td style="width:80px;">II.M</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>
																MELAKSANAKAN KEGIATAN DATASERING & PENCANGKOKAN
																</b><br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Datasering</li>
																	<li>Pencangkokan</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2m_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2m']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															
															<tr>
																<td style="width:80px;">II.N</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Melaksanakan Pengembangan Diri Untuk Meningkatkan kompetensi
																</td>
																<td style="color:#73879C;"><select class="form-control" name="2n_pendidikan">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['2n']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
														</thead>
												</table>
												
												<center><div><a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
												<p><b>III. BIDANG PENELITIAN</b></p>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:white; text-transform:uppercase;">
																<td>No.</td>
																<td style="width:700px;">Rencana Tridharma Semesteran</td>
																<td>Keterangan</td>
															</tr>
															<tr style="background:#eee;">
																<td style="width:80px;">III.A.</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase" colspan="2">
																Menghasilkan Karya Ilmiah
																</td>
															</tr>
															<tr>
																<td>III.A.1</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>HASIL PENELITIAN ATAU HASIL PEMIKIRAN YANG DI PUBLIKASIKAN
																</b><br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Monograf</li>
																	<li>Buku Referensi</li>
																	<li>Jurnal Ilmiah Internasional</li>
																	<li>Jurnal Nasional Terakreditasi</li>
																	<li>Jurnal Nasional Tidak Terakreditasi</li>
																	<li>Karya Arsitektur monumental yang dilaksanakan : bentuk foto(portfolio), foto maket, dengan narasi</li>
																	<li>Karya Arsitektur yang disertakan dalam sayembara </li>
																	<li>Karya/eksperimen/eksplorasi Arsitektur yang memberikan sumbangan ke keilmuan dan kemajuan keilmuan Arsitektur </li>
																	<li>Artikel dimuat sebagai Bab/Chapter dari suatu buku editorial</li>
																	<li>Makalah ilmiah seminar/simposium/pertemuan ilmiah Internasional (dalam Prosiding)</li>
																	<li>Makalah ilmiah seminar/simposium/pertemuan ilmiah Nasional (dalam Prosiding) </li>
																	<li>Makalah yang disajikan dalam seminar Internasional </li>
																	<li>Makalah yang disajikan dalam seminar Nasional </li>
																	<li>Makalah yang disajikan dalam bentuk poster seminar Internasional </li>
																	<li>Makalah yang disajikan dalam bentuk poster seminar Nasional </li>
																	<li>Tulisan disajikan dalam koran/majalah populer/ media umum </li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="3a1_penelitian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['3a1']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>III.A.2</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>
																HASIL PENELITIAN ATAU HASIL PEMIKIRAN YANG TIDAK DIPUBLIKASIKAN (TERSIMPAN DI PERPUSTAKAAN PERGURUAN TINGGI)
																</b>
																<br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Penelitian murni melalui LP2M</li>
																	<li>Penelitian murni mandiri tersimpan di perpustakaan</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="3a2_penelitian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['3a2']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>III.A.3</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Menerjemahkan/menyadur buku ilmiah 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="3a3_penelitian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['3a3']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>III.A.4</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Mengedit/menyunting karya ilmiah 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="3a4_penelitian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['3a4']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>III.A.5</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>
																MEMBUAT RANCANGAN & KARYA TEKNOLOGI YANG DIPATENKAN
																</b><br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Karya bertaraf Nasional </li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="3a5_penelitian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['3a5']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>III.A.6</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>MEMBUAT RANCANGAN KARYA ILMIAH, TEKNOLOGI DAN RANCANGAN KARYA ARSITEKTUR MONUMENTAL
																</b><br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Karya Bertaraf Internasional</li>
																	<li>Karya Bertaraf Nasional</li>
																	<li>Karya Bertaraf Lokal/Daerah</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="3a6_penelitian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['3a6']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
													</thead>
												</table>
																										
													<center><div><a href="#tab_content3" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
												<p><b>IV. BIDANG PENGABDIAN MASYARAKAT</b></p>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:white; text-transform:uppercase;">
																<td>No.</td>
																<td style="width:700px;">Rencana Tridharma Semesteran</td>
																<td>Keterangan</td>
															</tr>
															<tr style="background:#eee;">
																<td style="width:80px;">IV.A.</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase" colspan="2">
																MELAKSANAKAN PENGABDIAN KEPADA MASYARAKAT 
																</td>
															</tr>
															<tr>
																<td>IV.A.1</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Melaksanakan pengembangan hasil pendidikan dan penelitian yang dapat dimanfaatkan oleh masyarakat 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="4a1_pengabdian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['4a1']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>IV.A.2</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>MEMBERI LATIHAN/PENYULUHAN/PENATARAN/CERAMAH PADA MASYARAKAT</b>
																<br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Terjadwal/Terprogram</li>
																	<li>Insidental</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="4a2_pengabdian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['4a2']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>IV.A.3</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																<b>MEMBERI PELAYANAN KEPADA MASYARAKAT ATAU KEGIATAN LAIN YANG MENUNJANG PELAKSANAAN TUGAS UMUM PEMERINTAHAN DAN PEMBANGUNAN</b>
																<br/>
																<ol style="list-style-type: lower-alpha; font-size: 11px;">
																	<li>Berdasarkan Kepakaran</li>
																	<li>Tugas dari Lembaga</li>
																	<li>Berdasarkan Jabatan</li>
																</ol>
																</td>
																<td style="color:#73879C;"><select class="form-control" name="4a3_pengabdian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['4a3']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>IV.A.4</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan
																</td>
																<td style="color:#73879C;"><select class="form-control" name="4a4_pengabdian">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['4a4']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
													</thead>
												</table>
																												
													<center><div><a href="#tab_content4" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
												<p><b>V. BIDANG PENUNJANG</b></p>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:white; text-transform:uppercase;">
																<td>No.</td>
																<td style="width:700px;">Rencana Tridharma Semesteran</td>
																<td>Keterangan</td>
															</tr>
															<tr style="background:#eee;">
																<td style="width:80px;">V.A.</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase" colspan="2">
																MELAKSANAKAN KEGIATAN PENUNJANG TRI DHARMA PERGURUAN TINGGI 
																</td>
															</tr>
															<tr>
																<td>V.A.1</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Menjadi anggota dalam suatu Panitia/Badan pada Perguruan Tinggi 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a1_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a1']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>V.A.2</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Menjadi anggota panitia/badan pada lembaga pemerintah 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a2_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a2']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>V.A.3</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Menjadi anggota organisasi profesi 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a3_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a3']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>V.A.4</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Mewakili Perguruan Tinggi/Lembaga Pemerintah duduk dalam panitia antar lembaga 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a4_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a4']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>V.A.5</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Menjadi anggota delegasi nasional ke pertemuan Internasional 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a5_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a5']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>V.A.6</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Berperan serta aktif dalam pertemuan ilmiah 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a6_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a6']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>V.A.7</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Mendapat tanda jasa/penghargaan
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a7_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a7']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>V.A.8</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara Nasional 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a8_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a8']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>V.A.9</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Mempunyai prestasi di bidang humaniora  : 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="5a9_penunjang">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['5a9']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
													</thead>
												</table>
												
													<center><div><a href="#tab_content5" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
												<p><b>VI. BIDANG KEGIATAN NON AKADEMIK</b></p>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:white; text-transform:uppercase;">
																<td>No.</td>
																<td style="width:700px;">Rencana Tridharma Semesteran</td>
																<td>Keterangan</td>
															</tr>
															<tr>
																<td>VI.A</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Mengikuti PHBI/Pengajian/Senam/Kegiatan Kampus/Upacara Nasional/Wisuda/Promosi 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="6a_nonakademik">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['6a']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>VI.B</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Kegiatan Kepanitiaan/Task Force di Lingkungan UMA 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="6b_nonakademik">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['6b']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
														</thead>
													</table>
												
													<center><div><a href="#tab_content6" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
											</div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
												<p><b>VII. PENGEMBANGAN KARIR</b></p>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:white; text-transform:uppercase;">
																<td>No.</td>
																<td style="width:700px;">Rencana Tridharma Semesteran</td>
																<td>Keterangan</td>
															</tr>
															<tr>
																<td>VII.A</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Pengusulan Kenaikan Jabatan Akademik/Golongan 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="7a_karir">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['7a']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
															<tr>
																<td>VII.B</td>
																<td style="width:500px; text-transform:uppercase;" class="uppercase">
																Mengikuti Pendidikan S3 
																</td>
																<td style="color:#73879C;"><select class="form-control" name="7b_karir">
																			
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas ORDER BY id_keterangan DESC"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['7b']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																</td>
															</tr>
														</thead>
													</table>
													<!-- <center><button id="send" type="submit" class="btn btn-success" onclick="return confirm('Periksa Kembali Data Anda, Sebelum Anda Menyimpan Data Anda')">Simpan</button></center> -->
											<center><button id="send" type="submit" class="btn btn-success" onclick="return confirm('Periksa Kembali Data Anda, Sebelum Anda Menyimpan Data Anda')">Simpan</button></center>
											</form>	
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
                                <!--endofinbetween-->
                            </div>
                            <?php
								}
							?>                
                                        </div>
                                    </div>
                                </div>
								</form>
							</div>
                        </div>
                    </div>
                </div>
                
                <!-- footer content -->
                 <footer>
                    <div class="">
                        <p class="pull-right">Copyright &copy; 2006 - 2016 ICT - Universitas Medan Area <a></a>. |
                            <span class="lead"> <i class="fa fa-paper-plane-o"></i> Registrasi Pelamar Pegawai</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
            <!-- /footer content -->
                
            </div>
            <!-- /page content -->
        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>

    <script src="js/bootstrap.min.js"></script>

    <!-- chart js -->
    <script src="js/chartjs/chart.min.js"></script>
    <!-- bootstrap progress js -->
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <!-- icheck -->
    <script src="js/icheck/icheck.min.js"></script>

    <script src="js/custom.js"></script>
    <!-- form validation -->
    <script src="js/validator/validator.js"></script>
    <script>
        // initialize the validator function
        validator.message['date'] = 'not a real date';

        // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
        $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

        $('.multi.required')
            .on('keyup blur', 'input', function () {
                validator.checkField.apply($(this).siblings().last()[0]);
            });

        // bind the validation to the form submit event
        //$('#send').click('submit');//.prop('disabled', true);

        $('form').submit(function (e) {
            e.preventDefault();
            var submit = true;
            // evaluate the form using generic validaing
            if (!validator.checkAll($(this))) {
                submit = false;
            }

            if (submit)
                this.submit();
            return false;
        });

        /* FOR DEMO ONLY */
        $('#vfields').change(function () {
            $('form').toggleClass('mode2');
        }).prop('checked', false);

        $('#alerts').change(function () {
            validator.defaults.alerts = (this.checked) ? false : true;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);
    </script>

</body>

</html>