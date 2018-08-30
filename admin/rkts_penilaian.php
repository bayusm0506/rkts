<?php
    include "mediaheader.php";
    include "topheader.php";
?>

<!-- page content -->
            <div class="right_col" role="main">
            	<div class="x_content">
					<div class="bs-example" data-example-id="simple-jumbotron">
                        <div class="jumbotron" style="text-align:center; color:black;">
                            <h2>BERIKAN PENILAIAN PADA RKTS DAN EKTS DOSEN</h2>
                        </div>
                    </div>
                </div>
                
					<?php
						$level = $_SESSION['fakultas'];
						if($level == 'Fakultas Biologi' || $level == 'Fakultas Psikologi' || $level == 'Fakultas Teknik' || $level == 'Fakultas Hukum' || $level == 'Fakultas Pertanian' || $level == 'Fakultas Isipol' || $level == 'Fakultas Ekonomi' || $level == 'Pascasarjana'){
					?>	
						<?php
							$view=mysql_query("SELECT * FROM tbl_key_semester WHERE status='y'");
							while($row=mysql_fetch_array($view)){
								$sem = $row['semester'];
								if($sem == 'Ganjil'){
						?>
									<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
										<thead>
											<tr style="background:#26b99a; color:#ffffff; text-align:center;">
												<th width="34" align="center">No.</th>
												<th width="63" >NIK</th>
												<th width="63" >Nama Lengkap</th>
												<th width="345" >Semester</th>
												<th width="125" >Tahun Ajaran</th>
												<th width="130" >Jabatan Akademik</th>
												<th width="40" >Fakultas/Prodi</th>
												<th width="40" >Koreksi</th>
												
												
											</tr>
										</thead>
										<tbody>
												<?php
													include "config.php";
													$fakultas = $_SESSION['fakultas']; 
													$no = 1;
													$view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.koreksi = 'Belum' AND tbl_rencana.semester='Ganjil' AND tbl_user.fakultas='$fakultas' ORDER BY tbl_rencana.tahun_ajaran DESC, tbl_rencana.semester");
													while($row=mysql_fetch_array($view)){
												?>
														<tr class="gradeA">
															<td><?php echo $no;?></td>
															<td><?php echo $row['nik'];?></td>
															<td><?php echo $row['nama_lengkap'];?></td>
															<td><div  class="btn btn-round btn-success"><?php echo $row['semester'];?></div></td>
															<td><div  class="btn btn-round btn-info"><?php echo $row['tahun_ajaran'];?></div></td>
															<td><?php echo $row['jabatan_akademik'];?></td>
															<td><?php echo $row['fakultas'];?>, <?php echo $row['prodi'];?></td>
															<td>
																<div  class="btn btn-round btn-primary">
																	<a style="color:white;" href="lembar_koreksi.php?semester=<?php echo $row[semester];?>&tahun_ajaran=<?php echo $row[tahun_ajaran];?>&nik=<?php echo $row[nik];?>">Koreksi</a>
																</div>
															</td>
															
														</tr>
												<?php
													$no++;
													}
												?>
										</tbody>
									</table>
						<?php
								}else if($sem == 'Genap'){
						?>			
									<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
										<thead>
											<tr style="background:#26b99a; color:#ffffff; text-align:center;">
												<th width="34" align="center">No.</th>
												<th width="63" >NIK</th>
												<th width="63" >Nama Lengkap</th>
												<th width="345" >Semester</th>
												<th width="125" >Tahun Ajaran</th>
												<th width="130" >Jabatan Akademik</th>
												<th width="40" >Fakultas/Prodi</th>
												<th width="40" >Koreksi</th>
												
												
											</tr>
										</thead>
										<tbody>
												<?php
													include "config.php";
													$fakultas = $_SESSION['fakultas']; 
													$no = 1;
													$view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.koreksi = 'Belum' AND tbl_rencana.semester='Genap' AND tbl_user.fakultas='$fakultas' ORDER BY tbl_rencana.tahun_ajaran DESC, tbl_rencana.semester");
													while($row=mysql_fetch_array($view)){
												?>
														<tr class="gradeA">
															<td><?php echo $no;?></td>
															<td><?php echo $row['nik'];?></td>
															<td><?php echo $row['nama_lengkap'];?></td>
															<td><div  class="btn btn-round btn-success"><?php echo $row['semester'];?></div></td>
															<td><div  class="btn btn-round btn-info"><?php echo $row['tahun_ajaran'];?></div></td>
															<td><?php echo $row['jabatan_akademik'];?></td>
															<td><?php echo $row['fakultas'];?>, <?php echo $row['prodi'];?></td>
															<td>
																<div  class="btn btn-round btn-primary">
																	<a style="color:white;" href="lembar_koreksi.php?semester=<?php echo $row[semester];?>&tahun_ajaran=<?php echo $row[tahun_ajaran];?>&nik=<?php echo $row[nik];?>">Koreksi</a>
																</div>
															</td>
														</tr>
												<?php
													$no++;
													}
												?>
										</tbody>
									</table>
						<?php
								}
							}
						}
							elseif($level == 'Administrator Fakultas'){
						?>
								<?php
									$view=mysql_query("SELECT * FROM tbl_key_semester WHERE status='y'");
									while($row=mysql_fetch_array($view)){
										$sem = $row['semester'];
										if($sem == 'Ganjil'){
								?>
											<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
												<thead>
													<tr style="background:#26b99a; color:#ffffff; text-align:center;">
														<th width="34" align="center">No.</th>
														<th width="63" >NIK</th>
														<th width="63" >Nama Lengkap</th>
														<th width="345" >Semester</th>
														<th width="125" >Tahun Ajaran</th>
														<th width="130" >Jabatan Akademik</th>
														<th width="40" >Fakultas/Prodi</th>
														<th width="40" >Koreksi</th>
														
														
													</tr>
												</thead>
												<tbody>
													<?php
														include "config.php";
														$no = 1;
														$view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.koreksi = 'Belum' AND tbl_rencana.semester='Ganjil' ORDER BY tbl_rencana.tahun_ajaran DESC, tbl_user.fakultas ASC");
														while($row=mysql_fetch_array($view)){
													?>
															<tr class="gradeA">
																<td><?php echo $no;?></td>
																<td><?php echo $row['nik'];?></td>
																<td><?php echo $row['nama_lengkap'];?></td>
																<td><div  class="btn btn-round btn-success"><?php echo $row['semester'];?></div></td>
																<td><div  class="btn btn-round btn-info"><?php echo $row['tahun_ajaran'];?></div></td>
																<td><?php echo $row['jabatan_akademik'];?></td>
																<td><?php echo $row['fakultas'];?>, <?php echo $row['prodi'];?></td>
																<td>
																	<div  class="btn btn-round btn-primary">
																		<a style="color:white;" href="lembar_koreksi.php?semester=<?php echo $row[semester];?>&tahun_ajaran=<?php echo $row[tahun_ajaran];?>&nik=<?php echo $row[nik];?>">Koreksi</a>
																	</div>
																</td>
															</tr>
													<?php
														$no++;
														}
													?>
												</tbody>
											</table>
							<?php
										}else if($sem == 'Genap'){
							?>
											<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
												<thead>
													<tr style="background:#26b99a; color:#ffffff; text-align:center;">
														<th width="34" align="center">No.</th>
														<th width="63" >NIK</th>
														<th width="63" >Nama Lengkap</th>
														<th width="345" >Semester</th>
														<th width="125" >Tahun Ajaran</th>
														<th width="130" >Jabatan Akademik</th>
														<th width="40" >Fakultas/Prodi</th>
														<th width="40" >Koreksi</th>
													</tr>
												</thead>
												<tbody>
													<?php
														include "config.php";
														$no = 1;
														$view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.koreksi = 'Belum' AND tbl_rencana.semester='Genap' ORDER BY tbl_rencana.tahun_ajaran DESC, tbl_user.fakultas ASC");
														while($row=mysql_fetch_array($view)){
													?>
															<tr class="gradeA">
																<td><?php echo $no;?></td>
																<td><?php echo $row['nik'];?></td>
																<td><?php echo $row['nama_lengkap'];?></td>
																<td><div  class="btn btn-round btn-success"><?php echo $row['semester'];?></div></td>
																<td><div  class="btn btn-round btn-info"><?php echo $row['tahun_ajaran'];?></div></td>
																<td><?php echo $row['jabatan_akademik'];?></td>
																<td><?php echo $row['fakultas'];?>, <?php echo $row['prodi'];?></td>
																<td>
																	<div  class="btn btn-round btn-primary">
																		<a style="color:white;" href="lembar_koreksi.php?semester=<?php echo $row[semester];?>&tahun_ajaran=<?php echo $row[tahun_ajaran];?>&nik=<?php echo $row[nik];?>">Koreksi</a>
																	</div>
																</td>
															</tr>
													<?php
														$no++;
														}
													?>
												</tbody>
											</table>
							<?php
										}
									}
								}
								
							?>
								
				
                   <!-- footer content -->
                 
            <!-- /footer content -->
                    
				</div>
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


        <!-- Datatables -->
        <script src="js/datatables/js/jquery.dataTables.js"></script>
        <script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable( {
					"sPaginationType": "full_numbers"
				} );
			} );
		</script>
</body>

</html>

<link href="css/demo_page.css" rel="stylesheet">
<link href="css/demo_table.css" rel="stylesheet">
	
<!-- Javascript files harus ditaruh di bawah untuk meningkatkan performa web -->
