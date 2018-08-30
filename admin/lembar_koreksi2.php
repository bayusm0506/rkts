<?php
    include "mediaheader.php";
    include "topheader.php";
    $semester = $_GET['semester'];
	$tahun_ajaran = $_GET['tahun_ajaran'];
	$nik = $_GET['nik'];
?>
<!-- page content -->
<?php
    $semester = $_GET['semester'];
    $tahun_ajaran = $_GET['tahun_ajaran'];
    $nik = $_GET['nik'];
    $view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.nik='$nik' AND tbl_rencana.semester='$semester' AND tbl_rencana.tahun_ajaran = '$tahun_ajaran'");
    
    while($row=mysql_fetch_array($view)){
?> 
            <div class="right_col" role="main">									
									<div class="page-title">
										<div class="col-md-12">
											<h3>Evaluasi Kinerja Tridharma Semesteran (EKTS)</h3>
										</div>
										</div>
									<div class="clearfix"></div>

									<div class="row">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="x_panel">
												
													<ul class="nav navbar-right panel_toolbox">
														
													</ul>
													<div class="clearfix"></div>
												
												
													<input type="hidden" name="semester" value="<?php echo $semester; ?>">
													<input type="hidden" name="tahun_ajaran" value="<?php echo $tahun_ajaran; ?>">
													<input type="hidden" name="nik" value="<?php echo $nik; ?>">
												<div class="x_content">
													
														<div class="form-horizontal form-label-left" novalidate>

															<p>Berilah Penilaian EKTS <code></code> di bawah ini
															</p>
														</div>  
												<!-- end form lebar -- >
												<!--inbetween-->

											<div class="row">                                
												<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="x_panel">
												<div class="x_title">
													<h2><i class="fa fa-bars"></i> Edit Nilai EKTS </h2>
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
															<li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><font style="font-size:9px; color:red;">VI. B. K. NON AKADEMIK</font></a>
															</li>
															<li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false"><font style="font-size:9px; color:red;">VII. PENGEMBANGAN KARIR</font></a>
															</li>
														</ul>
														<div id="myTabContent" class="tab-content">
															<div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
																<p><b>II. BIDANG PENDIDIKAN</b></p>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th>II.A.</th>
																				<th style="width:700px; text-align:center; text-transform:uppercase;" colspan="6">Mengikuti pendidikan sekolah & memperoleh gelar Doktor (S-3)
																				<?php
																						if($row['2a']=='Tidak Ada'){
																								?>
																									<div class="btn btn-danger">Tidak Ada</div>	
																								<?php
																						}
																						else if($row['2a']=='Ada'){
																								?>
																									<div class="btn btn-success">Ada</div>	
																								<?php
																						}
																						else{
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																						}
																					?>
																				</th>
																				
																			</tr>
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th style="width:500px;">Perguruan Tinggi</th>
																				<th>Tahun Masuk</th>
																				<th>Tahun Keluar</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td style="width:80px;">1.</td>
																																			<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter1'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>																			<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter2'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>																					<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter3'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																							<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>																					<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter4'"); 
																						
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi1' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>

																<table class="table table-bordered">
																	<thead>
																		<tr style="background:#1a82c3; color:#FFFFFF;">
																			<th style="width:80px;">II.B.</th>
																			<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																			Melaksanakan Pendidikan dan Pengajaran Semester <?php echo $_GET[semester]; echo $_GET[tahun_ajaran];																	
																			?>
																			<?php
																				if($row['2b']=='Tidak Ada'){
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																				}
																				else if($row['2b']=='Ada'){
																						?>
																							<div class="btn btn-success">Ada</div>	
																						<?php
																				}
																				else{
																					?>
																						<div class="btn btn-danger">Tidak Ada</div>	
																					<?php
																				}
																			?>
																			</th>
																		</tr>
																		<tr style="background:#EEE;">
																			<th rowspan="2">No.</th>
																			<th rowspan="2">Mata Kuliah</th>
																			<th>SKS</th>
																			<th>RPS</th>
																			<th rowspan="2">Skor</th>
																			<th rowspan="2">EDIT</th>
																		</tr>
																		<tr style="background:#EEE;">
																			<td>Berkas</td>
																			<td>Berkas</td>
																		</tr>
																		<tr>
																			<td>1.</td>
																						<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter5'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>																					<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter6'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																				</td>
																			<td>
																				<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter7'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																			</td>
																			<?php
																				$nik = $_GET['nik'];
																				$semester = $_GET['semester'];
																				$tahun_ajaran = $_GET['tahun_ajaran'];
																				$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																				LIKE 'koreksi2' ");
															
																				while($row=mysql_fetch_array($view)){
																			?>
																			<form action="process.php?act=edit_nilai" method="post">																				
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																				
																				<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																				<td>
																						<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																				</td>
																			</form>
																			<?php
																				}
																			?>
																		</tr>
																		<!--  atas  -->
																		<tr>
																			<td>2.</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter8'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>																					<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter9'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																				</td>
																			<td>
																				<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter10'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																			</td>
																			<?php
																				$nik = $_GET['nik'];
																				$semester = $_GET['semester'];
																				$tahun_ajaran = $_GET['tahun_ajaran'];
																				$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																				LIKE 'koreksi3' ");
															
																				while($row=mysql_fetch_array($view)){
																			?>
																			<form action="process.php?act=edit_nilai" method="post">																				
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																				
																				<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																				<td>
																						<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																				</td>
																			</form>
																			<?php
																				}
																			?>
																		</tr>
																		
																		<!-- bawah -->
																		
																		<!--  atas  -->
																		<tr>
																			<td>3.</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter11'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter12'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																				</td>
																			<td>
																				<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter13'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																			</td>
																			<?php
																				$nik = $_GET['nik'];
																				$semester = $_GET['semester'];
																				$tahun_ajaran = $_GET['tahun_ajaran'];
																				$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																				LIKE 'koreksi4' ");
															
																				while($row=mysql_fetch_array($view)){
																			?>
																			<form action="process.php?act=edit_nilai" method="post">																				
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																				
																				<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																				<td>
																						<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																				</td>
																			</form>
																			<?php
																				}
																			?>
																		</tr>
																		
																		<!-- bawah -->
																		<tr>
																			<td>4</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter14'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter15'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																				</td>
																			<td>
																				<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter16'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																			</td>
																			<?php
																				$nik = $_GET['nik'];
																				$semester = $_GET['semester'];
																				$tahun_ajaran = $_GET['tahun_ajaran'];
																				$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																				LIKE 'koreksi5' ");
															
																				while($row=mysql_fetch_array($view)){
																			?>
																			<form action="process.php?act=edit_nilai" method="post">																				
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																				
																				<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																				<td>
																						<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																				</td>
																			</form>
																			<?php
																				}
																			?>
																		</tr>
																		<tr>
																			<td>5</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter17'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter18'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																				</td>
																			<td>
																				<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter19'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																			</td>
																			<?php
																				$nik = $_GET['nik'];
																				$semester = $_GET['semester'];
																				$tahun_ajaran = $_GET['tahun_ajaran'];
																				$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																				LIKE 'koreksi6' ");
															
																				while($row=mysql_fetch_array($view)){
																			?>
																			<form action="process.php?act=edit_nilai" method="post">																				
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																				
																				<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																				<td>
																						<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																				</td>
																			</form>
																			<?php
																				}
																			?>
																		</tr>
																		<tr>
																			<td>6</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter20'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter21'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																				</td>
																			<td>
																				<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter22'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
				                                                                            <?php
																							}

																						}
																					?>
																			</td>
																			<?php
																				$nik = $_GET['nik'];
																				$semester = $_GET['semester'];
																				$tahun_ajaran = $_GET['tahun_ajaran'];
																				$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																				LIKE 'koreksi7' ");
															
																				while($row=mysql_fetch_array($view)){
																			?>
																			<form action="process.php?act=edit_nilai" method="post">																				
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																				<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																				
																				<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																				<td>
																						<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																				</td>
																			</form>
																			<?php
																				}
																			?>
																		</tr>
																	</thead>
																</table>
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th>II.C.</th>
																				<th style="width:700px; text-align:center; text-transform:uppercase;" colspan="6">Membimbing Seminar Mahasiswa Semester <?php echo $_GET[semester]; echo $_GET[tahun_ajaran]; ?>
																				<?php
																					if($row['2c']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2c']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th style="width:500px;">Jumlah Mahasiswa</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td style="width:80px;">1.</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter23'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																																															<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter24'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi8' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>

																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th>II.D.</th>
																				<th style="width:700px; text-align:center; text-transform:uppercase;" colspan="6">
																				Membimbing Kuliah Kerja Nyata, Praktik Kerja Nyata, Praktik Kerja Lapangan Semester <?php echo $_GET[semester]; echo $_GET[tahun_ajaran]; ?>
																				<?php
																					if($row['2d']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2d']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th style="width:500px;">Jumlah Mahasiswa</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td style="width:80px;">1.</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter25'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																																															<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter26'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi9' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
												<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th>II.E.</th>
																				<th style="width:700px; text-align:center; text-transform:uppercase;" colspan="6">
																				Membimbing & Ikut Membimbing dalam Menghasilkan Thesis/ Skripsi/Tugas Akhir Semester <?php echo $_GET[semester]; echo $_GET[tahun_ajaran]; ?>
																				<?php
																					if($row['2e']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2e']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																	?>
																				</th>
																			</tr>
																			<tr style="background:#EEE;">
																				<th>1.</th>
																				<th style="width:500px;" colspan="2">Pembimbing Utama</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td></td>
																				<td>Jumlah Mahasiswa</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter27'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																																															<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter28'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi10' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#EEE;">
																				<th >2.</th>
																				<th style="width:500px;" colspan="2">Pembimbing Pendamping</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td></td>
																				<td>Jumlah Mahasiswa</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter29'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																																															<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter30'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi11' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>

																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.F.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Bertugas Sebagai Penguji Skripsi Semester <?php echo $_GET[semester]; echo $_GET[tahun_ajaran]; ?>
																				<?php
																					if($row['2f']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2f']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#EEE;">
																				<th >1.</th>
																				<th style="width:500px;" colspan="2">Ketua Penguji</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td></td>
																				<td>Jumlah Mahasiswa</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter31'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																																															<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter32'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td><
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi12' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#EEE;">
																				<th >2.</th>
																				<th style="width:500px;" colspan="2">Anggota/Sekretaris Penguji</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td></td>
																				<td>Jumlah Mahasiswa</td>
																																							<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter33'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																																															<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter34'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi13' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.G.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Membina Kegiatan Mahasiswa di Bidang Akademik dan Kemahasiswaan (Dosen PA)
																				<?php
																					if($row['2g']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2g']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#EEE;">
																				<th >No.</th>
																				<th style="width:500px;">Tanggal SK</th>
																				<th>No. SK</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter35'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter36'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter37'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi14' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.H.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Mengembangkan Program Kuliah
																				<?php
																					if($row['2h']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2h']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th style="width:500px;">Nama Program</th>
																				<th>No. SK</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter38'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter39'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter40'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi15' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter41'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter42'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter43'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi16' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.I.</th>
																				<th style="text-align:center; text-transform:uppercase;" colspan="9" class="uppercase">
																				Mengembangkan Bahan Pengajaran
																				<?php
																					if($row['2i']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2i']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th style="width:80px;">Judul Buku Ajar</th>
																				<th style="width:80px;">Penulis Ke-</th>
																				<th style="width:80px;">Jlh. Penulis</th>
																				<th style="width:80px;">Penerbit</th>
																				<th style="width:80px;">No. ISBN</th>
																				<th style="width:80px;">Tgl. Terbit</th>
																				<th style="width:80px;">Upload</th>
																				<th style="width:80px;">Berkas</th>
																				<th style="width:80px;">Edit</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter44'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter45'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter46'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter47'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter48'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter49'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter50'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi17' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter51'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
																					}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter52'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter53'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter54'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter55'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter56'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter57'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi18' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>3.</td>
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter58'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter59'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter60'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter61'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter62'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter63'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter64'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi19' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th>Judul Diktat, modul, petunjuk praktikum,<br/>model, alat bantu, audio visual,<br/>naskah tutorial</th>
																				<th>Penulis Ke-</th>
																				<th>Jlh. Penulis</th>
																				<th>Penerbit</th>
																				<th>No. ISBN</th>
																				<th>Tgl. Terbit</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<!-- atas -->
																			<tr>
																				<td>1.</td>
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter65'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter66'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter67'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter68'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter69'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter70'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter71'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi20' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<!-- bawah -->
																			<!-- atas -->
																			<tr>
																				<td>2.</td>
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter72'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter73'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter74'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter75'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter76'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter77'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter78'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi21' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<!-- bawah -->
																				<!-- atas -->
																			<tr>
																				<td>3.</td>
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter79'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter80'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter81'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter82'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter83'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:80px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter84'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								
																							<?php
											}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter85'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi22' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<!-- bawah -->
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th colspan="6">Melaksanakan Kegiatan Blog E-learning UMA Semester Ganjil 2016/2017</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td style="width:500px;" colspan="6">
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter86'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
												}
																							else{
																							?>
																								<?php echo $des['keterangan_ekts'];?>
																							<?php
																							}
																						}
																					?>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter87'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi23' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>

																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.J.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Menyampaikan Orasi Ilmiah
																				<?php
																					if($row['2j']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2j']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr>
																				<th >No.</th>
																				<th style="width:500px;">Nama Kegiatan</th>
																				<th>No. Surat</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter88'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter89'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter90'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi24' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter91'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter92'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter93'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi25' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>3.</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter94'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter95'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																				<?php
																				}
																						else{
																						?>
																							<?php echo $des['keterangan_ekts'];?>																						<?php
																						}
																					}
																				?>
																				</td>
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter96'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi26' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>

																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.K.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Menduduki Jabatan Pimpinan Perguruan Tinggi
																				<?php
																					if($row['2k']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2k']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr>
																				<th >No.</th>
																				<th style="width:500px;">Jabatan</th>
																				<th>Tgl. SK</th>
																				<th>No. SK</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter97'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter98'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter99'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter100'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi27' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter101'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter102'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter103'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter104'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi28' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.L.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Membimbing Dosen yang Lebih Rendah Jabatannya
																				<?php
																					if($row['2l']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2l']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th >No.</th>
																				<th style="width:500px;">Pembimbing Pencangkokan</th>
																				<th>Tgl. SK</th>
																				<th>No. SK</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter105'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter106'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter107'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter108'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi29' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter109'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter110'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter111'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter112'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi30' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th >No.</th>
																				<th style="width:500px;">Reguler</th>
																				<th>Tgl. SK</th>
																				<th>No. SK</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter113'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter114'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter115'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter116'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi31' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter117'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter118'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter119'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter120'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi32' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.M.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Melaksanakan Kegiatan Detasering &amp; Pencangkokan
																				<?php
																					if($row['2m']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2m']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th >No.</th>
																				<th style="width:500px;">Datasering</th>
																				<th>Tgl. SK</th>
																				<th>No. SK</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter121'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter122'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter123'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter124'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi33' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter125'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter126'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter127'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter128'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi34' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th >No.</th>
																				<th style="width:500px;">Pencangkokan</th>
																				<th>Tgl. SK</th>
																				<th>No. SK</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																																								<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter129'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter130'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter131'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																				
																				<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter132'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																					
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi35' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter133'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter134'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter135'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter136'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi36' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.N.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Melaksanakan Pengembangan Diri Untuk Meningkatkan kompetensi
																				<?php
																					if($row['2n']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['2n']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 960 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																				<th rowspan="2">EDIT</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter137'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter138'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																													<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter139'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi37' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter140'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter141'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter142'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi38' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 641-960 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																				<th rowspan="2">EDIT</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter143'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter144'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter145'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi39' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2</td>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter146'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter147'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter148'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi40' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 161-480 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																				<th rowspan="2">EDIT</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter149'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter150'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter151'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi41' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter152'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter153'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter154'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi42' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 81-160 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																				<th rowspan="2">EDIT</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter155'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter156'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter157'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi43' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter158'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter159'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter160'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi44' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 30-80 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																				<th rowspan="2">EDIT</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter161'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter162'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter163'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi45' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter164'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter165'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter166'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi46' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 10-30 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																				<th rowspan="2">EDIT</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter167'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter168'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter169'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi47' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter170'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter171'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																							<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					
																						<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter172'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi48' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
																<center><div><a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
															</div>
															<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
																<p><b>III. BIDANG PENELITIAN</b></p>
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">III.A</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				Menghasilkan Karya Ilmiah
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">III.A.1</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Hasil penelitian atau hasil pemikiran yang dipublikasikan
																				<?php
																					if($row['3a1']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['3a1']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				1. Monograf 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter173'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter174'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter175'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter176'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi49' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter177'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																							<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter178'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																							<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter179'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																							<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																						<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter180'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi50' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				2. Buku referensi  
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter181'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter182'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																							<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter183'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter184'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi51' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter185'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter186'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter187'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter188'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi52' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				3. Dalam Jurnal Ilmiah Internasional   
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter189'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter190'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter191'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter192'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi53' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter193'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter194'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter195'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter196'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi54' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				4. Dalam Jurnal Nasional Terakreditasi  
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter197'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter198'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter199'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter200'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi55' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter201'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter202'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																							<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter203'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																							<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter204'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi56' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				5. Dalam Jurnal Nasional  tidak Terakreditasi  
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter205'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter206'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter207'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																						<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter208'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi57' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																			<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter209'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter210'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter211'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter212'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi58' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				6. Karya Arsitektur monumental yang dilaksanakan : bentuk foto(portfolio), foto maket, dengan narasi  
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter213'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter214'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter215'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter216'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi59' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter217'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter218'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter219'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter220'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi60' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				7. Karya Arsitektur yang disertakan dalam sayembara 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter221'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter222'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter223'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter224'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi61' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter225'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter226'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter227'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter228'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi62' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				8. Karya/eksperimen/eksplorasi Arsitektur yang memberikan sumbangan ke keilmuan dan kemajuan keilmuan Arsitektur
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter229'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter230'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter231'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter232'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi63' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter233'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter234'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter235'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter236'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi64' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="color:#FFFFFF;">
																				<th style="background:#eee; color:#FFFFFF; width:80px;" rowspan="5"></th>
																				<th style="background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				9. Artikel dimuat sebagai Bab/Chapter dari suatu buku editorial : 
																				</th>
																			</tr>
																			<tr style="color:#FFFFFF;">
																				<th style=" background:#1a82c3;width:500px; text-align:left;" colspan="6" class="uppercase">
																				a. Majalah/Jurnal Ilmiah Internasional  
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter237'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter238'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter239'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter240'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi65' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter241'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter242'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter243'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter244'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi66' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				b. Majalah/Jurnal Ilmiah Nasional
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter245'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter246'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter247'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter248'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi67' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter249'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter250'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter251'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter252'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi68' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				10. Makalah ilmiah seminar/simposium/pertemuan ilmiah Internasional (dalam Prosiding) 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter253'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter254'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter255'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter256'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi69' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter257'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter258'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter259'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter260'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi70' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style=" background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				11. Makalah ilmiah seminar/simposium/pertemuan ilmiah Nasional (dalam Prosiding)
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter261'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter262'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter263'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter264'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi71' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter265'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter266'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter267'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter268'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi72' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				12. Makalah yang disajikan dalam seminar Internasional 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter269'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter270'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter271'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter272'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi73' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter273'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter274'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter275'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter276'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi74' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				13. Makalah yang disajikan dalam seminar Nasional 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter277'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter278'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter279'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter280'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi75' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter281'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter282'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter283'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter284'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi76' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				14. Makalah yang disajikan dalam bentuk poster seminar Internasional 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter285'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter286'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter287'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter288'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi77' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter289'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter290'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter291'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter292'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi78' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				15. Makalah yang disajikan dalam bentuk poster seminar Nasional 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter293'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter294'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter295'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter296'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi79' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter297'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter298'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter299'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter300'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi80' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;" rowspan="4"></th>
																				<th style="background:#1a82c3; width:500px; text-align:left;" colspan="6" class="uppercase">
																				16. Tulisan disajikan dalam koran/majalah populer/ media umum
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter301'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter302'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter303'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter304'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi81' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter305'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter306'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter307'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter308'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi82' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">III.A.2</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Hasil penelitian atau hasil pemikiran yang tidak dipublikasikan (tersimpan di perpustakaan perguruan tinggi) :
																				<?php
																					if($row['3a2']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['3a2']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr >
																				<th rowspan="4" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="background:#1a82c3; color:#ffffff; width:500px; text-align:left;" colspan="6" class="uppercase">
																				a.	Penelitian murni melalui LP2M
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter309'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter310'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter311'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter312'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi83' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter313'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter314'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter315'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter316'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi84' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<th rowspan="4" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				b.	Penelitian murni mandiri tersimpan di perpustakaan
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter317'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter318'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter319'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter320'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi85' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter321'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter322'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter323'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter324'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td><?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi86' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">III.A.3</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Menerjemahkan/menyadur buku ilmiah
																				<?php
																					if($row['3a3']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['3a3']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter325'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter326'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter327'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter328'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi87' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																			<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter329'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter330'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter331'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter332'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi88' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">III.A.4</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Mengedit / menyunting karya ilmiah
																				<?php
																					if($row['3a4']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['3a4']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter333'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter334'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter335'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter336'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi89' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter337'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter338'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter339'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter340'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi90'");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">III.A.5</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Membuat rancangan & karya teknologi yang dipatenkan 
																				<?php
																					if($row['3a5']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['3a5']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="4" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				b.	Karya bertaraf Nasional
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter341'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter342'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter343'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter344'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi91' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter345'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter346'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter347'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter348'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi92' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">III.A.6</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Membuat rancangan karya ilmiah, teknologi, dan rancangan karya arsitektur monumental 
																				<?php
																					if($row['3a6']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['3a6']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				a.	Karya bertaraf Internasional
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																				<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter349'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter350'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter351'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter352'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi93' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter353'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter354'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter355'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter356'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi94' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				b.	Karya bertaraf Nasional
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter357'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter358'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter359'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter360'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi95' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter361'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter362'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter363'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter364'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi96' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				c.	Karya bertaraf lokal/daerah
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:0px; text-align:left;">
																				Judul 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Penulis Ke 
																				</th>
																				<th style="width:0px; text-align:left;">
																				Tgl. Terbit
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter365'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter366'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter367'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter368'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi96' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter369'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter370'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter371'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter372'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi97' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																														
																	<center><div><a href="#tab_content3" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
															</div>
															<div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
																<p><b>IV. BIDANG PENGABDIAN MASYARAKAT</b></p>
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">IV.A</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																				MELAKSANAKAN PENGABDIAN KEPADA MASYARAKAT
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">IV.A.1</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Melaksanakan pengembangan hasil pendidikan dan penelitian yang dapat dimanfaatkan oleh masyarakat
																				<?php
																					if($row['4a1']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['4a1']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul Pengabdian
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jabatan (Ketua/Anggota)
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jlh. Anggota
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter373'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter374'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter375'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter376'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi98' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter377'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter378'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter379'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter380'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi99' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">IV.A.2</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Memberi latihan/penyuluhan/penataran/ceramah pada masyarakat 
																				<?php
																					if($row['4a2']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['4a2']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				a.	Terjadwal/terprogram 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul Pengabdian
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jabatan (Ketua/Anggota)
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jlh. Anggota
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter381'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter382'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter383'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter384'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi100' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter385'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter386'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter387'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter388'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi101' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				b.	Insidental 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul Pengabdian
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jabatan (Ketua/Anggota)
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jlh. Anggota
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter389'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter390'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter391'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter392'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi102' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter393'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter394'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter395'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter396'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi103' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">IV.A.3</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Memberi pelayanan kepada masyarakat atau kegiatan lain yang menunjang pelaksanaan tugas umum pemerintahan dan pembangunan
																				<?php
																					if($row['4a3']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['4a3']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				a. berdasarkan kepakaran 
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul Pengabdian
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jabatan (Ketua/Anggota)
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jlh. Anggota
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter397'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter398'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter399'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter400'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi104' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter401'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter402'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter403'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter404'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi105' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				b. tugas dari lembaga
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul Pengabdian
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jabatan (Ketua/Anggota)
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jlh. Anggota
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter405'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter406'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter407'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter408'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi106' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter409'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter410'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter411'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter412'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi107' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#eee; color:#FFFFFF;">
																				<th style="width:80px;"></th>
																				<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="6" class="uppercase">
																				c. berdasarkan jabatan
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul Pengabdian
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jabatan (Ketua/Anggota)
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jlh. Anggota
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter413'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter414'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter415'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter416'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi108' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter417'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter418'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter419'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter420'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi109' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">IV.A.4</th>
																				<th style="width:500px; text-align:left;" colspan="6" class="uppercase">
																				Membuat/menulis karya pengabdian pada masyarakat yang tidak dipublikasikan
																				<?php
																					if($row['4a4']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['4a4']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="3" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="width:0px; text-align:left;">
																				Judul Pengabdian
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jabatan (Ketua/Anggota)
																				</th>
																				<th style="width:0px; text-align:left;">
																				Jlh. Anggota
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter421'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter422'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter423'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter424'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi110' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter425'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter426'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter427'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter428'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi111' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																																
																	<center><div><a href="#tab_content4" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
															</div>
															<div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
																<p><b>V. BIDANG PENUNJANG</b></p>
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A</th>
																				<th style="text-align:center; text-transform:uppercase;" colspan="5" class="uppercase">
																				MELAKSANAKAN KEGIATAN PENUNJANG TRI DHARMA PERGURUAN TINGGI
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A.1</th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				Menjadi anggota dalam suatu Panitia/Badan pada Perguruan Tinggi 
																				<?php
																					if($row['5a1']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['5a1']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="6" style="background:#eee; color:#FFFFFF;"></th>
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Ketua/Wakil Ketua Merangkap Anggota, Anggota)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter429'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter430'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter431'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi112' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter432'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter433'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter434'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi113' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter435'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter436'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter437'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi114' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter438'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter439'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter440'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi115' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter441'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter442'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter443'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi116' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A.2</th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				Menjadi anggota panitia/badan pada lembaga pemerintah :
																				<?php
																					if($row['5a2']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['5a2']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				a. Panitia Pusat, sebagai :
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Ketua/Wakil Ketua Merangkap Anggota, Anggota)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter444'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter445'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter446'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi117' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter447'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter448'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter449'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				b. Panitia Daerah, sebagai :
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Ketua/Wakil Ketua Merangkap Anggota, Anggota)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter450'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter451'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter452'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi118' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter453'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter454'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter455'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi119' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A.3</th>
																				<th style=" text-align:left;" colspan="5" class="uppercase">
																				Menjadi anggota organisasi profesi 
																				<?php
																					if($row['5a3']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['5a3']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				a. Tingkat Internasional, sebagai :
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Pengurus/Anggota Atas Permintaan/Anggota Biasa)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter456'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter457'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter458'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi120' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter459'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter460'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter461'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi121' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				b. Tingkat Nasional, sebagai :
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Pengurus/Anggota Atas Permintaan/Anggota Biasa)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter462'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter463'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter464'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi122' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter465'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter466'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter467'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi123' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A.4</th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				Mewakili Perguruan Tinggi/Lembaga Pemerintah duduk dalam panitia antar lembaga
																				<?php
																					if($row['va4']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['5a4']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="background:#eee; color:#FFFFFF;" rowspan="3"></th>
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Pengurus/Anggota Atas Permintaan/Anggota Biasa)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter468'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter469'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter470'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi124' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter471'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter472'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter473'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi125' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A.5</th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				Menjadi anggota delegasi nasional ke pertemuan Internasional : 
																				<?php
																					if($row['5a5']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['5a5']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="background:#eee; color:#FFFFFF;" rowspan="3"></th>
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Ketua/Anggota Delegasi)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter474'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter475'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter476'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi126' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter477'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter478'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter479'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi127' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A.6</th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				Berperan serta aktif dalam pertemuan ilmiah : 
																				<?php
																					if($row['5a6']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['5a6']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="background:#eee; color:#FFFFFF;" rowspan="4"></th>
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Ketua/Anggota Pertemuan Int/Nas/Regional)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter480'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter481'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter482'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi128' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter483'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter484'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter485'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi129' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter486'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter487'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter488'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi130' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="background:#eee; color:#FFFFFF;" rowspan="6"></th>
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Jabatan (Ketua/Anggota Pertemuan di lingkungan PT/UMA)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter489'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter490'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter491'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi131' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter492'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter493'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter494'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi132' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter495'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter496'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter497'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi133' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter498'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter499'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter500'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi134' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter501'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter502'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter503'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td><?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi135' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A.7</th>
																				<th style="text-align:left;" colspan="5" class="uppercase">
																				Mendapat tanda jasa/penghargaan :
																				<?php
																					if($row['5a7']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['5a7']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="background:#eee; color:#FFFFFF;" rowspan="3"></th>
																				<th style="text-align:left;">
																				Nama Kegiatan
																				</th>
																				<th style="text-align:left;">
																				Tingkat (Internasional/Nasional/Lokal/Daerah)
																				</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter504'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter505'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter506'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td><?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi136' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter507'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter508'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter509'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi137' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			
																		</thead>
																</table>
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">V.A.8</th>
																				<th colspan="9" class="uppercase">
																					Menulis buku pelajaran SLTA ke bawah yang diterbitkan dan diedarkan secara Nasional
																				<?php
																					if($row['5a8']=='Tidak Ada'){
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																					}
																					else if($row['5a8']=='Ada'){
																							?>
																								<div class="btn btn-success">Ada</div>	
																							<?php
																					}
																					else{
																						?>
																							<div class="btn btn-danger">Tidak Ada</div>	
																						<?php
																					}
																				?>
																				</th>
																			</tr>
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th>Judul Buku Ajar</th>
																				<th>Penulis Ke-</th>
																				<th>Jlh. Penulis</th>
																				<th>Penerbit</th>
																				<th>No. ISBN</th>
																				<th>Tgl. Terbit</th>
																				
																				<th>Berkas</th>
																				<th>Skor</th>
																				<th>EDIT</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																																					<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter510'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																								}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter511'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																								}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter512'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter513'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																								}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter514'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter515'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter516'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi138' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																			<tr>
																				<td>2.</td>
																																					<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter517'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																								}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter518'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																								}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter519'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter520'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																								}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter521'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:50px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter522'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																																									<?php
																						}
																								else{
																								?>
																									<?php echo $des['keterangan_ekts'];?>
																								<?php
																								}
																							}
																						?>
																					</td>
																																					<td>
																					<?php
																						$q = mysql_query("select * from tbl_berkas 
																						WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																						AND berkas_nik='$nik' AND kategori_isianekts='parameter523'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									
																								<?php
																							}
																							else{
																							?>
																								<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																				<?php
																					$nik = $_GET['nik'];
																					$semester = $_GET['semester'];
																					$tahun_ajaran = $_GET['tahun_ajaran'];
																					$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																					LIKE 'koreksi139' ");
																
																					while($row=mysql_fetch_array($view)){
																				?>
																				<form action="process.php?act=edit_nilai" method="post">																				
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																					
																					<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																					<td>
																							<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																					</td>
																				</form>
																				<?php
																					}
																				?>
																			</tr>
																		</thead>
																</table>
																
																	<center><div><a href="#tab_content5" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
															</div>
															<div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">
																<p><b>VI. BIDANG KEGIATAN NON AKADEMIK</b></p>
																<table class="table table-bordered">
																	<thead>
																	
																		<tr style="background:#1a82c3; color:#FFFFFF;">
																					<th style="width:80px;">VI.A</th>
																					<th style="text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																					Mengikuti PHBI/Pengajian/Senam/Kegiatan Kampus/Upacara Nasional/Wisuda/Promosi
																					<?php
																						if($row['6a']=='Tidak Ada'){
																								?>
																									<div class="btn btn-danger">Tidak Ada</div>	
																								<?php
																						}
																						else if($row['6a']=='Ada'){
																								?>
																									<div class="btn btn-success">Ada</div>	
																								<?php
																						}
																						else{
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																						}
																					?>
																					</th>
																				</tr>
																				<tr style="background:#1a82c3; color:#FFFFFF;">
																					
																					<th>
																					Kegiatan<br/>(PHBI/Pengajian/Senam/Kegiatan Kampus<br/>/Upacara Nasional/Promosi)s
																					</th>
																					<th style="text-align:left;">
																					Kedudukan (Panitia/Peserta)
																					</th>
																					<th style="text-align:left;">
																					Tempat / Instansi
																					</th>
																					
																					<th>Berkas</th>
																					<th>Skor</th>
																					<th>EDIT</th>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter530'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter531'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter532'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter533'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi140' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter534'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter535'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter536'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter537'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi141' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter538'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter539'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter540'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter541'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi142' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter542'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter543'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter544'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter545'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi143' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter546'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter547'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter548'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter549'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi144' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				
																				<tr style="background:#1a82c3; color:#FFFFFF;">
																					<th style="width:80px;">VI.B</th>
																					<th style="text-align:center; text-transform:uppercase;" colspan="6" class="uppercase">
																					Kegiatan Kepanitiaan/Task Force di Lingkungan UMA
																					<?php
																						if($row['6b']=='Tidak Ada'){
																								?>
																									<div class="btn btn-danger">Tidak Ada</div>	
																								<?php
																						}
																						else if($row['6b']=='Ada'){
																								?>
																									<div class="btn btn-success">Ada</div>	
																								<?php
																						}
																						else{
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																						}
																					?>
																					</th>
																				</tr>
																				<tr style="background:#1a82c3; color:#FFFFFF;">
																					<th rowspan="6" style="background:#eee; color:#FFFFFF;"></th>
																					<th style="text-align:left;">
																					Nama Kegiatan
																					</th>
																					<th style="text-align:left;">
																					Kedudukan (Panitia/Peserta)
																					</th>
																					
																					<th colspan="2">Berkas</th>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter550'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter551'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter552'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi145' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter553'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter554'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter555'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi146' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter556'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter557'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter558'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi147' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter559'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter560'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter561'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi148' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter562'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter563'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter564'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi149' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																		</thead>
																	</table>
																
																	<center><div><a href="#tab_content6" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
															</div>
															<div role="tabpanel" class="tab-pane fade" id="tab_content6" aria-labelledby="profile-tab">
																<p><b>VII. PENGEMBANGAN KARIR</b></p>
																<table class="table table-bordered">
																	<thead>
																	
																		<tr style="background:#1a82c3; color:#FFFFFF;">
																					<th style="width:80px;">VII.A</th>
																					<th style="text-align:center; text-transform:uppercase;" colspan="5" class="uppercase">
																					Pengusulan Kenaikan Jabatan Akademik/Golongan
																					<?php
																						if($row['7a']=='Tidak Ada'){
																								?>
																									<div class="btn btn-danger">Tidak Ada</div>	
																								<?php
																						}
																						else if($row['7a']=='Ada'){
																								?>
																									<div class="btn btn-success">Ada</div>	
																								<?php
																						}
																						else{
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																						}
																					?>
																					</th>
																				</tr>
																				<tr style="background:#1a82c3; color:#FFFFFF;">
																					<th rowspan="6" style="background:#eee; color:#FFFFFF;"></th>
																					<th style="text-align:left;">
																					Tahun
																					</th>
																					<th style="text-align:left;">
																					Ke-
																					</th>
																					
																					<th>Berkas</th>
																					<th>Skor</th>
																					<th>EDIT</th>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter565'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter566'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter567'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi150' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																				
																				<tr style="background:#1a82c3; color:#FFFFFF;">
																					<th style="text-align:center; text-transform:uppercase;" colspan="5" class="uppercase">
																					Mengikuti Pendidikan S3
																					<?php
																						if($row['7b']=='Tidak Ada'){
																								?>
																									<div class="btn btn-danger">Tidak Ada</div>	
																								<?php
																						}
																						else if($row['7b']=='Ada'){
																								?>
																									<div class="btn btn-success">Ada</div>	
																								<?php
																						}
																						else{
																							?>
																								<div class="btn btn-danger">Tidak Ada</div>	
																							<?php
																						}
																					?>
																					</th>
																				</tr>
																				<tr style="background:#1a82c3; color:#FFFFFF;">
																					<th style="text-align:left;">
																					Perguruan Tinggi
																					</th>
																					<th style="text-align:left;">
																					Semester Ke-
																					</th>
																					
																					<th>Berkas</th>
																					<th>Skor</th>
																					<th>EDIT</th>
																				</tr>
																				<tr>
																																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter568'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																						<td style="width:500px;">
																							<?php
																								$q = mysql_query("select * from tbl_berkas 
																								WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																								AND berkas_nik='$nik' AND kategori_isianekts='parameter569'"); 
																								while ($des = mysql_fetch_array($q))
																								{
																									if($des['keterangan_ekts']==''){
																										?>
																																										<?php
																							}
																									else{
																									?>
																										<?php echo $des['keterangan_ekts'];?>
																									<?php
																									}
																								}
																							?>
																						</td>
																																						<td>
																						<?php
																							$q = mysql_query("select * from tbl_berkas 
																							WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																							AND berkas_nik='$nik' AND kategori_isianekts='parameter570'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										
																									<?php
																								}
																								else{
																								?>
																									<a href="berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																								<?php
																								}

																							}
																						?>
																					</td>
																					<?php
																						$nik = $_GET['nik'];
																						$semester = $_GET['semester'];
																						$tahun_ajaran = $_GET['tahun_ajaran'];
																						$view=mysql_query("SELECT *  FROM tbl_nilai WHERE tbl_nilai.tahun_ajaran LIKE '$tahun_ajaran' AND tbl_nilai.nik LIKE '$nik' AND tbl_nilai.semester LIKE'$semester' AND tbl_nilai.kategori_proses 
																						LIKE 'koreksi151' ");
																	
																						while($row=mysql_fetch_array($view)){
																					?>
																					<form action="process.php?act=edit_nilai" method="post">																				
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_nilai" placeholder="" required="required" type="hidden" value="<?php echo $row['id_nilai'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" required="required" type="hidden" value="<?php echo $row['nik'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="" required="required" type="hidden" value="<?php echo $row['semester'];?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="" required="required" type="hidden" value="<?php echo $row['tahun_ajaran'];?>">
																						
																						<td><input type="text" name="nilai" value="<?php echo $row['nilai'];?>"></td>
																						<td>
																								<button type="submit" class="btn btn-success inputbutton2" value="EDIT">EDIT</button>
																						</td>
																					</form>
																					<?php
																						}
																					?>
																				</tr>
																		</thead>
																</table>
																	<!-- <center><button id="send" type="submit" class="btn btn-success" onclick="return confirm('Periksa Kembali Data Anda, Sebelum Anda Menyimpan Data Anda')">Simpan</button></center> -->
															
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
												<!-- </form>-->
											</div>
										</div>
									</div>
								</div>
							<?php
				?>
<?php
	}
?>
                 <!-- footer content -->
                 <footer>
                    <div class="">
                        <p class="pull-right">Copyright &copy; 2006 - 2017 PDAI - Universitas Medan Area <a></a>. |
                            <span class="lead"> <i class="fa fa-paper-plane-o"></i> RKTS & EKTS Online</span>
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