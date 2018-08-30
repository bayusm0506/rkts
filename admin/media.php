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
								
								<form action="process.php?act=inputrkts" method="post">
									<div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p>Isilah data Anda dengan <code>Lengkap</code> di bawah ini</p>
											<?php
												include "config.php";
												$id_user = $_SESSION['id_user'];
												$view=mysql_query("select * from tbl_user WHERE id_user='$id_user'");
												while($row=mysql_fetch_array($view)){
											?>
																<div class="x_panel"><h2>Identitas Pribadi</h2>
																	<div class="x_title"></div>
																	<!--test-->
																	<?php
																	if(isset($_GET['success']))
																	{
																		?>
																		<label><code>Data Berhasil Disimpan</code></label>
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
																<input name="id_user" type="hidden" value="<?php echo $row['id_user'];?>">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Semester">Semester  <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="semester">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_semester"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['semester']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
																	</div>
																</div>
																<?php
																	$tahun_ajaran = date("Y");
																	$tahun_ajaran_selanjutnya = date("Y") + 1;
																?>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Tahun Ajaran">Tahun Ajaran <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<input id="tahun_ajaran" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" required="required" type="text" value="<?php echo "$tahun_ajaran/$tahun_ajaran_selanjutnya"; ?>">
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
																			<option value="">---</option>
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
																			<option value="">---</option>
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
																			<option value="">---</option>
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
																			<option value="">---</option>
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
																		<input id="tmt_jabatan" name="tmt_jabatan" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $row['tmt_jabatan'];?>">Format : Tahun-Bulan-Hari : 2001-05-30
																	</div>
																</div>
																<div class="item form-group">
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Pangkat/Golongan">Pangkat/Golongan <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="pangkat_golongan">
																			<option value="">---</option>
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
																			<option value="">---</option>
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
																	<label class="control-label col-md-4 col-sm-3 col-xs-12" for="Fakultas/Prodi">Fakultas / Prodi <span class="required"><font color="red">*</font></span>
																	</label>
																	<div class="col-md-6 col-sm-6 col-xs-12">
																		<select class="form-control" name="fakultas_prodi">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_fakultas_prodi"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['fakultas_prodi']) {
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
											<?php
												}
											?>
									
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
                                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">I.A.</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">I.B.</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">I.C.</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">II.</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">III.</a>
                                            </li>
                                            <li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">IV.</a>
                                            </li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                <p><b>I.A. UNSUR UTAMA PENDIDIKAN</b></p>

                                                <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>RENCANA TRIDHARMA PERGURUAN TINGGI</th>
                                                                <th>KETERANGAN</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">I.A.1.</th>
                                                                <td>Mengikuti pendidikan sekolah & memperoleh gelar Doktor (S-3)</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
																		<select class="form-control" name="1a1_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a1_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2</th>
                                                                <td><b>Melaksanakan pendidikan dan pengajaran</b></td>
                                                                <td></td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.1.</th>
                                                                <td>Melaksanakan perkuliahan/tutorial dan membimbing, menguji serta menyelenggarakan pendidikan di lab.,
                                                                bengkel/studio/kebun percobaan/ teknologi pengajaran dan praktik lapangan, menguji serta menyelenggarakan 
                                                                pendidikan di lab.,bengkel/studio/kebun percobaan/ teknologi pengajaran dan praktik lapangan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a21_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a21_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.2.</th>
                                                                <td>Membimbing seminar mahasiswa</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a22_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a22_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.3.</th>
                                                                <td>Membimbing Kuliah Kerja Nyata, Praktik Kerja Nyata, Praktik Kerja Lapangan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a23_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a23_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.4.</th>
                                                                <td><b>Membimbing & ikut membimbing dalam menghasilkan thesis/ skripsi/Tugas akhir</b></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>    a.  Pembimbing Utama</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                         <select class="form-control" name="1a24a_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a24a_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>    b.  Pembimbing Pendamping/Pembantu</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a24b_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a24b_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.5.</th>
                                                                <td><b>Bertugas sebagai penguji pada ujian akhir</b></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>    a.  Ketua Penguji</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a25a_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a25a_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>    b.  Anggota Penguji</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a25b_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a25b_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.6.</th>
                                                                <td>Membina kegiatan mahasiswa di bidang Akademik dan kemahasiswaan (Dosen PA)</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a26_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a26_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.7.</th>
                                                                <td>Mengembangkan program kuliah</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a27_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a27_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.8.</th>
                                                                <td><b>Mengembangkan bahan pengajaran</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a.  Buku ajar</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a28a_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a28a_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b.  Diktat, modul, petunjuk praktikum, model, alat bantu, audio visual, naskah tutorial</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a28b_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a28b_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.9.</th>
                                                                <td>Menyampaikan orasi ilmiah</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a29_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a29_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.10.</th>
                                                                <td><b>Menduduki jabatan pimpinan perguruan tinggi</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a. Rektor</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a210a_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a210a_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b.  Pembantu Rektor/Dekan/Direktur PPs/Ketua Lembaga/Ka.Biro</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a210b_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a210b_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>c.  Pembantu Dekan/ Wakil Dir. Program Pasca Sarjana</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a210c_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a210c_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>d.  Ketua Jurusan/ Ka. Prodi</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a210d_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a210d_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>e.  Sekretaris Jurusan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a210e_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a210e_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.11.</th>
                                                                <td><b>Membimbing Dosen yang lebih rendah jabatannya</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a.  Pembimbing pencangkokan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a211a_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a211a_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b.  Reguler</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a211b_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a211b_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.A.2.12.</th>
                                                                <td><b>Melaksanakan kegiatan detasering & pencangkokan </b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a.  Detasering</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a212a_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a212a_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b.  Pencangkokan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1a212b_pendidikan">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1a212b_pendidikan']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
														
                                                    </table>
												<center><div><a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                <p><b>I.B. MELAKSANAKAN PENELITIAN</b></p>
                                                <table class="table table-bordered">
                                                <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>RENCANA TRIDHARMA PERGURUAN TINGGI</th>
                                                                <th>KETERANGAN</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">I.B.1.</th>
                                                                <td>Menghasilkan Karya Ilmiah</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.B.1.a.</th>
                                                                <td><b>Hasil penelitian atau hasil pemikiran yang dipublikasikan berupa </b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>1. Monograf</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a1_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a1_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>2. Buku referensi</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a2_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a2_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>3. Dalam Jurnal Ilmiah Internasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a3_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a3_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>4. Dalam Jurnal Nasional Terakreditasi</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a4_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a4_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>5. Dalam Jurnal Nasional  tidak Terakreditasi</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a5_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a5_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>6. Karya Arsitektur monumental yang dilaksanakan : bentuk foto(portfolio), foto maket, dengan narasi</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a6_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a6_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>7. Karya Arsitektur yang disertakan dalam sayembara </td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a7_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a7_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>8. Karya/eksperimen/eksplorasi Arsitektur yang memebrikan sumbangan ke keilmuan dan kemajuan keilmuan Arsitektur</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a8_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a8_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>9. Artikel dimuat sebagai Bab/Chapter dari suatu buku editorial : </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a. Majalah/Jurnal Ilmiah Internasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a9a_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a9a_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b. Majalah/Jurnal Ilmiah Nasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a9b_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a9b_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>10. Makalah ilmiah seminar/simposium/pertemuan ilmiah Internasional (dalam Prosiding)</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a10_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a10_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>11. Makalah ilmiah seminar/simposium/pertemuan ilmiah Nasional (dalam Prosiding)</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a11_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a11_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>12. Makalah yang disajikan dalam seminar Internasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a12_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a12_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>13. Makalah yang disajikan dalam seminar Nasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a13_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a13_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>14. Makalah yang disajikan dalam bentuk poster seminar Internasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a14_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a14_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>15. Makalah yang disajikan dalam bentuk poster seminar Nasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a15_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a15_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>16. Tulisan disajikan dalam koran/majalah populer/ media umum</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1a16_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1a16_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.B.1.b</th>
                                                                <td><b>Hasil penelitian atau hasil pemikiran yang tidak dipublikasikan (tersimpan di perpustakaan perguruan tinggi)</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a.  Penelitian murni melalui LP2M</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1ba_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1ba_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b.  Penelitian murni mandiri tersimpan di perpustakaan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b1bb_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b1bb_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.B.2.</th>
                                                                <td>Menerjemahkan/menyadur buku ilmiah</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b2_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b2_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.B.3.</th>
                                                                <td>Mengedit/menyunting karya ilmiah</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b3_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b3_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.B.4.</th>
                                                                <td><b>Membuat rancangan & karya teknologi yang dipatenkan</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a.  Karya bertaraf Internasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b4a_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b4a_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b.  Karya bertaraf Nasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b4b_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b4b_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.B.5.</th>
                                                                <td><b>Membuat rancangan karya ilmiah, teknologi, dan rancangan karya arsitektur monumental </b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a.  Karya bertaraf Internasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b5a_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b5a_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b.  Karya bertaraf Nasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b5b_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b5b_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>c.  Karya bertaraf lokal/daerah</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1b5c_penelitian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1b5c_penelitian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
													<center><div><a href="#tab_content3" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                <p><b>I.C. MELAKSANAKAN PENGABDIAN KEPADA MASYARAKAT</b></p>
                                                <table class="table table-bordered">
                                                <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>RENCANA TRIDHARMA PERGURUAN TINGGI</th>
                                                                <th>KETERANGAN</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">I.C.1.</th>
                                                                <td>Melaksanakan pengembangan hasil pendidikan dan penelitian yang dapat dimanfaatkan oleh masyarakat</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1c1_pengabdian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1c1_pengabdian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.C.2.</th>
                                                                <td><b>Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a.  Terjadwal/terprogram</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1c2a_pengabdian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1c2a_pengabdian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b.  Insidental</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1c2b_pengabdian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1c2b_pengabdian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.C.3.</th>
                                                                <td><b>Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas umum pemerintahan dan pembangunan</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a. berdasarkan kepakaran</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1c3a_pengabdian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1c3a_pengabdian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b. tugas dari lembaga</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1c3b_pengabdian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1c3b_pengabdian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>c. berdasarkan jabatan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1c3c_pengabdian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1c3c_pengabdian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">I.C.4.</th>
                                                                <td>Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="1c4_pengabdian">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['1c4_pengabdian']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
													<center><div><a href="#tab_content4" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                                                <p><b>II. MELAKSANAKAN KEGIATAN PENUNJANG TRI DHARMA PERGURUAN TINGGI</b></p>
                                                <table class="table table-bordered">
                                                <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>RENCANA TRIDHARMA PERGURUAN TINGGI</th>
                                                                <th>KETERANGAN</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">II.1.</th>
                                                                <td><b>Menjadi anggota dalam suatu Panitia/Badan pada Perguruan Tinggi</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a. Ketua/Wakil Ketua merangkap anggota</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="21a_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['21a_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b. Anggota</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="21b_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['21b_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">II.2.</th>
                                                                <td><b>Menjadi anggota panitia/badan pada lembaga pemerintah</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><b>a. Panitia Pusat, sebagai :</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>1. Ketua/Wakil Ketua tiap kepanitiaan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="22a1_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['22a1_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>2. Anggota</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="22a2_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['22a2_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><b>b. Panitia Daerah, sebagai :</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>1. Ketua/Wakil Ketua tiap kepanitiaan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="22b1_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['22b1_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>2. Anggota</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="22b2_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['22b2_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">II.3.</th>
                                                                <td><b>Menjadi anggota organisasi profesi</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><b>a. Tingkat Internasional, sebagai :</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>1. Pengurus</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="23a1_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['23a1_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>2. Anggota atas permintaan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="23a2_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['23a2_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>3. Anggota biasa</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="23a3_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['23a3_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td><b>b. Tingkat Nasional, sebagai :</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>1. Pengurus</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="23b1_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['23b1_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>2. Anggota atas permintaan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="23b2_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['23b2_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>3. Anggota biasa</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="23b3_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['23b3_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">II.4.</th>
                                                                <td>Mewakili Perguruan Tinggi/Lembaga Pemerintah duduk dalam panitia antar lembaga</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="24_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['24_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">II.5.</th>
                                                                <td><b>Menjadi anggota delegasi nasional ke pertemuan Internasional : </b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a. Ketua Delegasi</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="25a_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['25a_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b. Anggota Delegasi</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="25b_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['25b_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">II.6.</th>
                                                                <td><b>Berperan serta aktif dalam pertemuan ilmiah</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a. Sebagai ketua pertemuan Int./Nas./Regional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="26a_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['26a_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b. Sebagai anngota pada pertemuan Int./Nas./Regional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="26b_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['26b_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>c. Sebagai ketua pertemuan di lingkungan PT</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="26c_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['26c_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>d. Sebagai ketua pertemuan di lingkungan PT.</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="26d_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['26d_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">II.7.</th>
                                                                <td><b>Mendapat tanda jasa/penghargaan</b></td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a. Tingkat Internasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="27a_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['27a_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b. Tingkat Nasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="27b_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['27b_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>c. Tingkat Lokal/Daerah</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="27c_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['27c_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">II.8.</th>
                                                                <td>Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara Nasional</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="28_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['28_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">II.9.</th>
                                                                <td>Mempunyai prestasi di bidang humaniora </td>
                                                                <td>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>a. Tingkat Internasional Tiap piagam/medali</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="29a_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['29a_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>b. Tingkat Nasional Tiap piagam/medali</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="29b_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['29b_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row"></th>
                                                                <td>c. Tingkat Daerah/Lokal Tiap piagam/medali</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="29c_kegiatanptpt">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['29c_kegiatanptpt']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
													<center><div><a href="#tab_content5" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
                                                <p><b>III. MELAKSANAKAN KEGIATAN NON AKADEMIK</b></p>
                                                <table class="table table-bordered">
                                                <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>RENCANA TRIDHARMA PERGURUAN TINGGI</th>
                                                                <th>KETERANGAN</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">III.1.</th>
                                                                <td>Mengikuti PHBI/Pengajian/Senam/Kegiatan Kampus/Upacara Nasional/Wisuda/Promosi</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="31_kegiatan_nonakad">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['31_kegiatan_nonakad']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">III..2.</th>
                                                                <td>Kegiatan Kepanitiaan/Task Force di Lingkungan UMA</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="32_kegiatan_nonakad">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['32_kegiatan_nonakad']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
													<center><div><a href="#tab_content6" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
                                                <p><b>PENGEMBANGAN KARIR</b></p>
                                                <table class="table table-bordered">
                                                <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>RENCANA TRIDHARMA PERGURUAN TINGGI</th>
                                                                <th>KETERANGAN</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">IV.1.</th>
                                                                <td>Pengusulan Kenaikan Jabatan Akademik/Golongan</td>
                                                                <td>
                                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                                        <select class="form-control" name="4_pengembangan_karir">
																			<option value="">---</option>
																			<?php
																				$q = mysql_query("select * from ref_keterangan_berkas"); 

																				while ($a = mysql_fetch_array($q))
																				{
																					if ($a[1] == $row['4_pengembangan_karir']) {
																						echo "<option value='$a[1]' selected>$a[1]</option>";
																					} else {
																					echo "<option value='$a[1]'>$a[1]</option>";
																					}
																				}
																			?>
																		</select>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
													<center><button id="send" type="submit" class="btn btn-success">Simpan</button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <!--endofinbetween-->
                            </div>
                                            
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