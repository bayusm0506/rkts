<?php
    include "mediaheader.php";
    include "topheader.php";
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

                <div class="">
                    <div class="page-title">
                        <div class="col-md-12">
                            <h3>Form Evaluasi Kinerja Tridharma Semesteran (EKTS)</h3>
                        </div>
                        </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                
                                    <ul class="nav navbar-right panel_toolbox">
                                        
                                    </ul>
                                    <div class="clearfix"></div>

                                <!-- tes -->
                                <div class="row">
                                        

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
                                    <h2><i class="fa fa-bars"></i> Form EKTS </h2>
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
                                                <p><b>I.A. UNSUR UTAMA PENDIDIKAN</b></p>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th>II.A.</th>
																<th style="width:700px; text-align:center; text-transform:uppercase;" colspan="5">Mengikuti pendidikan sekolah & memperoleh gelar Doktor (S-3)
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<td style="width:80px;">1.</td>
																<form action="uploadberkas.php?act=fungsi1" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter1'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter1">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter1" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
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
																						<input type="text" name="parameter2">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter2" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
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
																						<input type="text" name="parameter3">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter3" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter4">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
																</td>
															</tr>
														</thead>
												</table>
																
												<table class="table table-bordered">
													<thead>
														<tr style="background:#1a82c3; color:#FFFFFF;">
															<th style="width:80px;">II.B.</th>
															<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="5" class="uppercase">
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
															<th colspan="2">SKS</th>
															<th colspan="2">RPS</th>
														</tr>
														<tr style="background:#EEE;">
															<td>Upload</td>
															<td>Berkas</td>
															<td>Upload</td>
															<td>Berkas</td>
														</tr>
														<tr>
															<td>1.</td>
															<form action="uploadberkas.php?act=fungsi2" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter5'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter5">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter5" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter6">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
																</td>
															<td style="width:200px;">
																<form action="uploadberkas.php?act=fungsi3" method="post" enctype="multipart/form-data">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter7">
																	<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
															</td>
														</tr>
														<!--  atas  -->
														<tr>
															<td>2.</td>
															<form action="uploadberkas.php?act=fungsi4" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter8'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter8">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter8" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter9">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
																</td>
															<td style="width:200px;">
																<form action="uploadberkas.php?act=fungsi5" method="post" enctype="multipart/form-data">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter10">
																	<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
															</td>
														</tr>
														
														<!-- bawah -->
														
														<!--  atas  -->
														<tr>
															<td>3.</td>
																<form action="uploadberkas.php?act=fungsi6" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter11'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter11">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter11" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter12">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
																</td>
															<td style="width:200px;">
																<form action="uploadberkas.php?act=fungsi7" method="post" enctype="multipart/form-data">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter13">
																	<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
															</td>
														</tr>
														
														<!-- bawah -->
														<tr>
															<td>4</td>
																<form action="uploadberkas.php?act=fungsi8" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter14'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter14">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter14" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter15">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
																</td>
															<td style="width:200px;">
																<form action="uploadberkas.php?act=fungsi9" method="post" enctype="multipart/form-data">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter16">
																	<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
															</td>
														</tr>
														<tr>
															<td>5</td>
															<form action="uploadberkas.php?act=fungsi10" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter17'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter17">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter17" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter18">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
																</td>
															<td style="width:200px;">
																<form action="uploadberkas.php?act=fungsi11" method="post" enctype="multipart/form-data">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter19">
																	<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
															</td>
														</tr>
														<tr>
															<td>6</td>
															<form action="uploadberkas.php?act=fungsi12" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter20'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter20">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter20" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter21">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
																</td>
															<td style="width:200px;">
																<form action="uploadberkas.php?act=fungsi13" method="post" enctype="multipart/form-data">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter22">
																	<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
                                                                            <?php
																			}

																		}
																	?>
															</td>
														</tr>
													</thead>
												</table>

												<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th>II.C.</th>
																				<th style="width:700px; text-align:center; text-transform:uppercase;" colspan="5">Membimbing Seminar Mahasiswa Semester <?php echo $_GET[semester]; echo $_GET[tahun_ajaran]; ?>
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td style="width:80px;">1.</td>
																				<form action="uploadberkas.php?act=fungsi14" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter23'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter23"> Orang
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter23" value="<?php echo $des['keterangan_ekts'];?>"> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter24">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																		</thead>
																</table>				
												<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th>II.D.</th>
																				<th style="width:700px; text-align:center; text-transform:uppercase;" colspan="5">
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td style="width:80px;">1.</td>
																				<form action="uploadberkas.php?act=fungsi15" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter25'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter25"> Orang
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter25" value="<?php echo $des['keterangan_ekts'];?>"> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter26">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																		</thead>
																</table>
																
												<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th>II.E.</th>
																				<th style="width:700px; text-align:center; text-transform:uppercase;" colspan="5">
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td></td>
																				<td>Jumlah Mahasiswa</td>
																				<form action="uploadberkas.php?act=fungsi16" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter27'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter27"> Orang
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter27" value="<?php echo $des['keterangan_ekts'];?>"> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter28">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#EEE;">
																				<th >2.</th>
																				<th style="width:500px;" colspan="2">Pembimbing Pendamping</th>
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td></td>
																				<td>Jumlah Mahasiswa</td>
																				<form action="uploadberkas.php?act=fungsi17" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter29'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter29"> Orang
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter29" value="<?php echo $des['keterangan_ekts'];?>"> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter30">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.F.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="4" class="uppercase">
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td></td>
																				<td>Jumlah Mahasiswa</td>
																				<form action="uploadberkas.php?act=fungsi18" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter31'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter31"> Orang
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter31" value="<?php echo $des['keterangan_ekts'];?>"> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter32">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#EEE;">
																				<th >2.</th>
																				<th style="width:500px;" colspan="2">Anggota/Sekretaris Penguji</th>
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td></td>
																				<td>Jumlah Mahasiswa</td>
																				<form action="uploadberkas.php?act=fungsi19" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter33'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter33"> Orang
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter33" value="<?php echo $des['keterangan_ekts'];?>"> Orang
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter34">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.G.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="4" class="uppercase">
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi20" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter35'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter35">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter35" value="<?php echo $des['keterangan_ekts'];?>">
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
																								<input type="text" name="parameter36">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter36" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter37">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.H.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="4" class="uppercase">
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi21" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter38'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter38">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter38" value="<?php echo $des['keterangan_ekts'];?>">
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
																								<input type="text" name="parameter39">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter39" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter40">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi22" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter41'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter41">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter41" value="<?php echo $des['keterangan_ekts'];?>">
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
																								<input type="text" name="parameter42">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter42" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter43">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.I.</th>
																				<th style="text-align:center; text-transform:uppercase;" colspan="8" class="uppercase">
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
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi23" method="post" enctype="multipart/form-data">
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter44'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter44" size="15">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter44" value="<?php echo $des['keterangan_ekts'];?>" size="15">
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
																								<input type="text" name="parameter45" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter45" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter46" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter46" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter47" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter47" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter48" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter48" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter49" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter49" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter50">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi24" method="post" enctype="multipart/form-data">
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter51'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter51" size="15">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter51" value="<?php echo $des['keterangan_ekts'];?>" size="15">
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
																								<input type="text" name="parameter52" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter52" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter53" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter53" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter54" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter54" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter55" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter55" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter56" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter56" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter57">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>3.</td>
																				<form action="uploadberkas.php?act=fungsi25" method="post" enctype="multipart/form-data">
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter58'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter58" size="15">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter58" value="<?php echo $des['keterangan_ekts'];?>" size="15">
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
																								<input type="text" name="parameter59" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter59" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter60" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter60" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter61" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter61" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter62" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter62" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter63" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter63" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter64">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th>Judul Diktat, modul, petunjuk praktikum,<br/>model, alat bantu, audio visual,<br/>naskah tutorial</th>
																				<th>Penulis Ke-</th>
																				<th>Jlh. Penulis</th>
																				<th>Penerbit</th>
																				<th>No. ISBN</th>
																				<th>Tgl. Terbit</th>
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<!-- atas -->
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi26" method="post" enctype="multipart/form-data">
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter65'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter65" size="15">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter65" value="<?php echo $des['keterangan_ekts'];?>" size="15">
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
																								<input type="text" name="parameter66" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter66" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter67" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter67" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter68" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter68" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter69" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter69" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter70" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter70" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter71">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<!-- bawah -->
																			<!-- atas -->
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi27" method="post" enctype="multipart/form-data">
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter72'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter72" size="15">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter72" value="<?php echo $des['keterangan_ekts'];?>" size="15">
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
																								<input type="text" name="parameter73" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter73" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter74" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter74" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter75" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter75" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter76" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter76" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter77" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter77" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter78">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<!-- bawah -->
																				<!-- atas -->
																			<tr>
																				<td>3.</td>
																				<form action="uploadberkas.php?act=fungsi28" method="post" enctype="multipart/form-data">
																				<td>
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter79'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter79" size="15">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter79" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter80" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter80" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter81" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter81" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter82" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter82" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter83" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter83" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
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
																								<input type="text" name="parameter84" size="5">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter84" value="<?php echo $des['keterangan_ekts'];?>" size="5">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter85">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<!-- bawah -->
																			<tr style="background:#EEE;">
																				<th>No.</th>
																				<th colspan="6">Melaksanakan Kegiatan Blog E-learning UMA Semester Ganjil 2016/2017</th>
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi29" method="post" enctype="multipart/form-data">
																				<td style="width:500px;" colspan="6">
																					<?php
																						$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter86'"); 
																						while ($des = mysql_fetch_array($q))
																						{
																							if($des['keterangan_ekts']==''){
																								?>
																									<input type="text" name="parameter86" size="40">
																								<?php
																							}
																							else{
																							?>
																								<input type="text" name="parameter86" value="<?php echo $des['keterangan_ekts'];?>" size="40">
																							<?php
																							}
																						}
																					?>
																				</td>
																				<td>
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter87">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi30" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter88'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter88">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter88" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
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
																								<input type="text" name="parameter89">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter89" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter90">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi31" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter91'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter91">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter91" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
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
																								<input type="text" name="parameter92">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter92" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter93">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>3.</td>
																				<form action="uploadberkas.php?act=fungsi32" method="post" enctype="multipart/form-data">
																				<td style="width:500px;">
																				<?php
																					$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter94'"); 
																					while ($des = mysql_fetch_array($q))
																					{
																						if($des['keterangan_ekts']==''){
																							?>
																								<input type="text" name="parameter94">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter94" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
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
																								<input type="text" name="parameter95">
																							<?php
																						}
																						else{
																						?>
																							<input type="text" name="parameter95" value="<?php echo $des['keterangan_ekts'];?>">
																						<?php
																						}
																					}
																				?>
																				</td>
																				<td style="width:200px;">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																					<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																					<input type="file" name="parameter96">
																					<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																				</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi33" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter97'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter97">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter97" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
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
																										<input type="text" name="parameter98">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter98" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
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
																										<input type="text" name="parameter99">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter99" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter100">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi34" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter101'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter101">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter101" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter102">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter102" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter103">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter103" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter104">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
																				<td>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi35" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter105'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter105">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter105" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter106">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter106" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter107">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter107" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter108">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi36" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter109'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter109">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter109" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter110">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter110" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter111">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter111" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter112">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th >No.</th>
																				<th style="width:500px;">Reguler</th>
																				<th>Tgl. SK</th>
																				<th>No. SK</th>
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi37" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter113'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter113">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter113" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter114">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter114" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter115">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter115" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter116">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi38" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter117'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter117">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter117" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter118">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter118" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter119">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter119" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter120">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
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
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi39" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter121'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter121">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter121" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter122">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter122" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter123">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter123" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter124">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi40" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter125'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter125">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter125" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter126">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter126" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter127">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter127" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter128">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th >No.</th>
																				<th style="width:500px;">Pencangkokan</th>
																				<th>Tgl. SK</th>
																				<th>No. SK</th>
																				<th>Upload</th>
																				<th>Berkas</th>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi41" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter129'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter129">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter129" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter130">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter130" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter131">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter131" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter132">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<form action="uploadberkas.php?act=fungsi42" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter133'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter133">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter133" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter134">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter134" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter135">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter135" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter136">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																		</thead>
																</table>
																
																<table class="table table-bordered">
																	<thead>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th style="width:80px;">II.N.</th>
																				<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="4" class="uppercase">
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
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<form action="uploadberkas.php?act=fungsi43" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter137'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter137">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter137" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter138">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter138" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter139">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2</td>
																				<form action="uploadberkas.php?act=fungsi44" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter140'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter140">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter140" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter141">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter141" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter142">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 641-960 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																				<form action="uploadberkas.php?act=fungsi45" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter143'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter143">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter143" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter144">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter144" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter145">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2</td>
																				<form action="uploadberkas.php?act=fungsi46" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter146'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter146">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter146" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter147">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter147" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter148">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 161-480 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																				<form action="uploadberkas.php?act=fungsi47" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter149'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter149">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter149" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter150">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter150" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter151">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2</td>
																				<form action="uploadberkas.php?act=fungsi48" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter152'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter152">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter152" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter153">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter153" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter154">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 81-160 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																				<form action="uploadberkas.php?act=fungsi49" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter155'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter155">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter155" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter156">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter156" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter157">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2</td>
																				<form action="uploadberkas.php?act=fungsi50" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter158'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter158">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter158" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter159">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter159" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter160">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 30-80 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																				<form action="uploadberkas.php?act=fungsi51" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter161'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter161">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter161" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter162">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter162" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter163">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2</td>
																				<form action="uploadberkas.php?act=fungsi52" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter164'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter164">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter164" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter165">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter165" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter166">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<th rowspan="2">No.</th>
																				<th style="width:500px;">Lamanya Lebih dari 10-30 Jam</th>
																				<th rowspan="2">Tahun</th>
																				<th rowspan="2" >Upload</th>
																				<th rowspan="2">Berkas</th>
																			</tr>
																			<tr style="background:#1a82c3; color:#FFFFFF;">
																				<td>Nama Kegiatan</td>
																			</tr>
																			<tr>
																				<td>1</td>
																				<form action="uploadberkas.php?act=fungsi53" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter167'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter167">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter167" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter168">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter168" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter169">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																			<tr>
																				<td>2</td>
																				<form action="uploadberkas.php?act=fungsi54" method="post" enctype="multipart/form-data">
																					<td style="width:500px;">
																						<?php
																							$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter170'"); 
																							while ($des = mysql_fetch_array($q))
																							{
																								if($des['keterangan_ekts']==''){
																									?>
																										<input type="text" name="parameter170">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter170" value="<?php echo $des['keterangan_ekts'];?>">
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
																										<input type="text" name="parameter171">
																									<?php
																								}
																								else{
																								?>
																									<input type="text" name="parameter171" value="<?php echo $des['keterangan_ekts'];?>">
																								<?php
																								}
																							}
																						?>
																					</td>
																					<td style="width:200px;">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																						<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																						<input type="file" name="parameter172">
																						<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																					</td>
																				</form>
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
																								<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																							<?php
																							}

																						}
																					?>
																				</td>
																			</tr>
																		</thead>
																</table>
                                                        </tbody>
                                                    </table>
													<center><div><a href="#tab_content2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><button type="submit" class="btn btn-success">Selanjutnya</button></a></div></center>
                                            </div>
											<div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
												<p><b>III. BIDANG PENELITIAN</b></p>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">III.A</th>
																<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="5" class="uppercase">
																Menghasilkan Karya Ilmiah
																</th>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">III.A.1</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi55" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter173'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter173">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter173" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter174">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter174" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter175">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter175" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter176">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi56" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter177'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter177">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter177" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter178">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter178" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter179">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter179" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter180">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi57" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter181'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter181">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter181" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter182">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter182" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter183">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter183" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter184">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi58" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter185'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter185">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter185" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter186">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter186" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter187">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter187" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter188">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi59" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter189'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter189">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter189" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter190">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter190" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter191">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter191" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter192">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi60" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter193'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter193">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter193" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter194">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter194" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter195">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter195" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter196">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi61" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter197'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter197">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter197" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter198">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter198" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter199">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter199" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter200">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi62" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter201'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter201">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter201" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter202">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter202" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter203">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter203" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter204">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi63" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter205'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter205">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter205" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter206">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter206" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter207">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter207" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter208">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi64" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter209'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter209">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter209" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter210">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter210" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter211">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter211" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter212">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi65" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter213'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter213">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter213" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter214">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter214" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter215">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter215" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter216">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi66" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter217'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter217">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter217" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter218">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter218" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter219">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter219" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter220">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi67" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter221'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter221">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter221" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter222">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter222" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter223">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter223" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter224">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi68" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter225'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter225">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter225" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter226">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter226" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter227">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter227" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter228">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi69" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter229'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter229">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter229" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter230">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter230" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter231">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter231" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter232">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi70" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter233'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter233">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter233" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter234">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter234" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter235">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter235" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter236">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="color:#FFFFFF;">
																<th style="background:#eee; color:#FFFFFF; width:80px;" rowspan="5"></th>
																<th style="background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
																9. Artikel dimuat sebagai Bab/Chapter dari suatu buku editorial : 
																</th>
															</tr>
															<tr style="color:#FFFFFF;">
																<th style=" background:#1a82c3;width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi71" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter237'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter237">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter237" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter238">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter238" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter239">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter239" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter240">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi72" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter241'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter241">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter241" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter242">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter242" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter243">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter243" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter244">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi73" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter245'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter245">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter245" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter246">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter246" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter247">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter247" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter248">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi74" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter249'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter249">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter249" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter250">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter250" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter251">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter251" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter252">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi75" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter253'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter253">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter253" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter254">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter254" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter255">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter255" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter256">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi76" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter257'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter257">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter257" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter258">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter258" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter259">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter259" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter260">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style=" background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi77" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter261'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter261">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter261" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter262">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter262" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter263">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter263" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter264">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi78" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter265'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter265">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter265" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter266">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter266" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter267">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter267" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter268">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi79" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter269'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter269">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter269" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter270">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter270" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter271">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter271" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter272">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi80" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter273'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter273">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter273" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter274">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter274" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter275">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter275" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter276">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi81" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter277'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter277">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter277" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter278">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter278" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter279">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter279" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter280">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi82" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter281'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter281">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter281" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter282">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter282" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter283">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter283" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter284">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi83" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter285'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter285">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter285" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter286">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter286" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter287">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter287" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter288">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi84" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND berkas_nik='$nik' AND kategori_isianekts='parameter289'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter289">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter289" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter290">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter290" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter291">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter291" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter292">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi85" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter293'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter293">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter293" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter294">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter294" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter295">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter295" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter296">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi86" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter297'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter297">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter297" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter298">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter298" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter299">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter299" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter300">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;" rowspan="4"></th>
																<th style="background:#1a82c3; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi87" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter301'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter301">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter301" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter302">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter302" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter303">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter303" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter304">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi88" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter305'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter305">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter305" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter306">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter306" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter307">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter307" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter308">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">III.A.2</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th style="background:#1a82c3; color:#ffffff; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi89" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter309'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter309">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter309" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter310">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter310" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter311">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter311" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter312">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi90" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter313'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter313">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter313" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter314">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter314" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter315">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter315" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter316">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<th rowspan="4" style="background:#eee; color:#FFFFFF;"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi91" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter317'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter317">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter317" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter318">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter318" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter319">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter319" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter320">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi92" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter321'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter321">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter321" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter322">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter322" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter323">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter323" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter324">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">III.A.3</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi93" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter325'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter325">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter325" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter326">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter326" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter327">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter327" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter328">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi94" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter329'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter329">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter329" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter330">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter330" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter331">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter331" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter332">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">III.A.4</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi95" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter333'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter333">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter333" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter334">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter334" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter335">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter335" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter336">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi96" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter337'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter337">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter337" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter338">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter338" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter339">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter339" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter340">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">III.A.5</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
																a.	Karya bertaraf Nasional
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi97" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter341'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter341">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter341" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter342">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter342" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter343">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter343" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter344">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi98" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter345'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter345">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter345" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter346">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter346" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter347">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter347" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter348">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">III.A.6</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi99" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter349'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter349">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter349" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter350">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter350" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter351">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter351" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter352">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi100" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter353'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter353">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter353" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter354">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter354" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter355">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter355" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter356">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi101" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter357'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter357">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter357" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter358">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter358" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter359">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter359" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter360">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi102" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter361'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter361">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter361" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter362">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter362" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter363">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter363" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter364">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi103" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter365'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter365">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter365" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter366">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter366" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter367">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter367" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter368">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi104" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter369'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter369">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter369" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter370">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter370" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter371">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter371" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter372">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
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
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">IV.A</th>
																<th style="width:500px; text-align:center; text-transform:uppercase;" colspan="5" class="uppercase">
																MELAKSANAKAN PENGABDIAN KEPADA MASYARAKAT
																</th>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">IV.A.1</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi105" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter373'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter373">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter373" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter374">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter374" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter375">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter375" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter376">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi106" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter377'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter377">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter377" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter378">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter378" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter379">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter379" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter380">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">IV.A.2</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi107" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter381'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter381">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter381" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter382">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter382" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter383">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter383" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter384">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi108" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter385'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter385">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter385" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter386">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter386" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter387">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter387" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter388">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi109" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter389'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter389">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter389" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter390">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter390" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter391">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter391" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter392">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi110" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter393'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter393">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter393" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter394">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter394" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter395">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter395" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter396">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">IV.A.3</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi111" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter397'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter397">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter397" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter398">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter398" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter399">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter399" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter400">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi112" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter401'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter401">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter401" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter402">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter402" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter403">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter403" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter404">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi113" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter405'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter405">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter405" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter406">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter406" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter407">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter407" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter408">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi114" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter409'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter409">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter409" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter410">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter410" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter411">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter411" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter412">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#eee; color:#FFFFFF;">
																<th style="width:80px;"></th>
																<th style="background:#1a82c3; color:#FFFFFF; width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi115" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter413'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter413">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter413" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter414">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter414" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter415">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter415" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter416">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi116" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter417'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter417">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter417" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter418">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter418" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter419">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter419" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter420">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">IV.A.4</th>
																<th style="width:500px; text-align:left;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi117" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter421'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter421">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter421" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter422">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter422" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter423">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter423" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter424">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi118" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter425'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter425">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter425" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter426">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter426" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter427">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter427" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter428">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
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
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A</th>
																<th style="text-align:center; text-transform:uppercase;" colspan="4" class="uppercase">
																MELAKSANAKAN KEGIATAN PENUNJANG TRI DHARMA PERGURUAN TINGGI
																</th>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.1</th>
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi119" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter429'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter429">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter429" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter430">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter430" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter431">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi120" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter432'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter432">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter432" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter433">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter433" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter434">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi121" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter435'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter435">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter435" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter436">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter436" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter437">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi122" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter438'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter438">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter438" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter439">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter439" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter440">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi123" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter441'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter441">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter441" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter442">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter442" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter443">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.2</th>
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi124" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter444'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter444">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter444" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter445">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter445" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter446">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi125" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter447'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter447">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter447" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter448">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter448" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter449">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi126" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter450'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter450">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter450" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter451">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter451" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter452">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi127" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter453'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter453">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter453" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter454">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter454" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter455">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.3</th>
																<th style=" text-align:left;" colspan="4" class="uppercase">
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
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi128" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter456'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter456">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter456" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter457">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter457" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter458">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi129" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter459'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter459">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter459" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter460">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter460" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter461">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th rowspan="4" style="background:#eee; color:#FFFFFF; width:80px;"></th>
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi130" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter462'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter462">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter462" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter463">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter463" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter464">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi131" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter465'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter465">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter465" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter466">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter466" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter467">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.4</th>
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi132" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter468'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter468">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter468" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter469">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter469" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter470">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi133" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter471'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter471">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter471" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter472">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter472" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter473">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.5</th>
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi134" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter474'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter474">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter474" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter475">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter475" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter476">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi135" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter477'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter477">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter477" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter478">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter478" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter479">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.6</th>
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi136" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter480'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter480">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter480" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter481">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter481" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter482">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi137" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter483'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter483">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter483" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter484">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter484" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter485">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi138" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter486'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter486">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter486" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter487">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter487" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter488">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="background:#eee; color:#FFFFFF;" rowspan="6"></th>
																<th style="text-align:left;">
																Nama Kegiatan
																</th>
																<th style="text-align:left;">
																Jabatan (Ketua/Anggota Pertemuan di lingkungan PT/UMA)
																</th>
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi139" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter489'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter489">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter489" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter490">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter490" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter491">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi140" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter492'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter492">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter492" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter493">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter493" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter494">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi141" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter495'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter495">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter495" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter496">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter496" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter497">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi142" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter498'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter498">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter498" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter499">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter499" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter500">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi143" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter501'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter501">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter501" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter502">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter502" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter503">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.7</th>
																<th style="text-align:left;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi144" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter504'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter504">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter504" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter505">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter505" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter506">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi145" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter507'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter507">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter507" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter508">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter508" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter509">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															
														</thead>
												</table>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.8</th>
																<th colspan="8" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<td>1.</td>
																<form action="uploadberkas.php?act=fungsi146" method="post" enctype="multipart/form-data">
																	<td>
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter510'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" style="width:200px;" name="parameter510">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:200px;" name="parameter510" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:80px;" name="parameter511">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:80px;" name="parameter511" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:40px;" name="parameter512">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:40px;" name="parameter512" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:80px;" name="parameter513">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:80px;" name="parameter513" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:40px;" name="parameter514">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:40px;" name="parameter514" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:40px;" name="parameter515">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:40px;" name="parameter515" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter516">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<td>2.</td>
																<form action="uploadberkas.php?act=fungsi147" method="post" enctype="multipart/form-data">
																	<td>
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter517'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" style="width:200px;" name="parameter517">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:200px;" name="parameter517" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:80px;" name="parameter518">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:80px;" name="parameter518" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:40px;" name="parameter519">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:40px;" name="parameter519" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:80px;" name="parameter520">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:80px;" name="parameter520" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:40px;" name="parameter521">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:40px;" name="parameter521" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" style="width:40px;" name="parameter522">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" style="width:40px;" name="parameter522" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter523">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
														</thead>
												</table>
												<table class="table table-bordered">
													<thead>
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">V.A.9</th>
																<th style="text-align:left;" colspan="4" class="uppercase">
																Mempunyai prestasi di bidang humaniora  :
																<?php
																	if($row['5a9']=='Tidak Ada'){
																			?>
																				<div class="btn btn-danger">Tidak Ada</div>	
																			<?php
																	}
																	else if($row['5a9']=='Ada'){
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi148" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter524'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter524">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter524" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter525'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter525">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter525" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter526">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
																<td>
																	<?php
																		$q = mysql_query("select * from tbl_berkas 
																		WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																		AND berkas_nik='$nik' AND kategori_isianekts='parameter526'"); 
																		while ($des = mysql_fetch_array($q))
																		{
																			if($des['keterangan_ekts']==''){
																				?>
																					
																				<?php
																			}
																			else{
																			?>
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi149" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter527'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter527">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter527" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter528'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter528">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter528" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter529">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
																<td>
																	<?php
																		$q = mysql_query("select * from tbl_berkas 
																		WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																		AND berkas_nik='$nik' AND kategori_isianekts='parameter529'"); 
																		while ($des = mysql_fetch_array($q))
																		{
																			if($des['keterangan_ekts']==''){
																				?>
																					
																				<?php
																			}
																			else{
																			?>
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
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
												
													<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">VI.A</th>
																<th style="text-align:center; text-transform:uppercase;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi150" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter530'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter530">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter530" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter531">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter531" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter532">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter532" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter533">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi151" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter534'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter534">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter534" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter535">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter535" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter536">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter536" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter537">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi152" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter538'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter538">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter538" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter539">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter539" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter540">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter540" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter541">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi153" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter542'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter542">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter542" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter543">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter543" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter544">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter544" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter545">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi154" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter546'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter546">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter546" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter547">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter547" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter548">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter548" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter549">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">VI.B</th>
																<th style="text-align:center; text-transform:uppercase;" colspan="5" class="uppercase">
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
																<th>Upload</th>
																<th colspan="2">Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi155" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter550'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter550">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter550" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter551">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter551" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter552">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi156" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter553'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter553">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter553" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter554">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter554" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter555">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi157" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter556'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter556">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter556" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter557">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter557" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter558">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi158" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter559'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter559">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter559" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter560">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter560" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter561">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi159" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter562'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter562">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter562" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter563">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter563" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter564">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
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
												
													<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="width:80px;">VII.A</th>
																<th style="text-align:center; text-transform:uppercase;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi160" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter565'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter565">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter565" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter566">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter566" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter567">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
															
															<tr style="background:#1a82c3; color:#FFFFFF;">
																<th style="text-align:center; text-transform:uppercase;" colspan="4" class="uppercase">
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
																<th>Upload</th>
																<th>Berkas</th>
															</tr>
															<tr>
																<form action="uploadberkas.php?act=fungsi161" method="post" enctype="multipart/form-data">
																	<td style="width:500px;">
																		<?php
																			$q = mysql_query("select * from tbl_berkas 
																			WHERE berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' 
																			AND berkas_nik='$nik' AND kategori_isianekts='parameter568'"); 
																			while ($des = mysql_fetch_array($q))
																			{
																				if($des['keterangan_ekts']==''){
																					?>
																						<input type="text" name="parameter568">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter568" value="<?php echo $des['keterangan_ekts'];?>">
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
																						<input type="text" name="parameter569">
																					<?php
																				}
																				else{
																				?>
																					<input type="text" name="parameter569" value="<?php echo $des['keterangan_ekts'];?>">
																				<?php
																				}
																			}
																		?>
																	</td>
																	<td style="width:200px;">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="semester" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $semester;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="tahun_ajaran" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $tahun_ajaran;?>">
																		<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="Contoh : ICT UMA" required="required" type="hidden" value="<?php echo $nik;?>">
																		<input type="file" name="parameter570">
																		<button type="submit" class="btn btn-success inputbutton2" value="SIMPAN">SIMPAN</button>
																	</td>
																</form>
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
																				<a href="admin/berkas/<?php echo $des['keterangan_ekts'];?>" style="text-decoration:underline;" target="_blank">Preview</a>
																			<?php
																			}

																		}
																	?>
																</td>
															</tr>
													</thead>
											</table>
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
                            </div>
                        </div>
                    </div>
                </div>
        <?php
			}
		?>   
                <!-- footer content -->
                 <footer>
                    <div class="">
                        <p class="pull-right">Copyright &copy; 2006 - 2016 PDAI - Universitas Medan Area <a></a>. |
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