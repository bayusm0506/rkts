<?php
    include "mediaheader.php";
    include "topheader.php";
?>

<!-- page content -->
			<?php
				include "config.php";
				$no = 1;
				$nik = $_SESSION['nik'];
				$tgl_now=date("Y-m-d");
				$tgl_exp="2015-02-28";
				$view=mysql_query("SELECT * FROM tbl_batas_wakturkts");
				while($row=mysql_fetch_array($view)){
					$batas_awal = $row['batas_awal'];
					$batas_akhir = $row['batas_akhir'];
					
					if($tgl_now > $batas_akhir){
			?>
						<div class="right_col" role="main">
		            	<div class="x_content">
		                    <div class="bs-example" data-example-id="simple-jumbotron">
		                        <div class="jumbotron" style="text-align:center; color:black;">
		                            <h2>BUKAN PERIODE PENGISIAN RKTS</h2>
		                        </div>
		                    </div>
		                </div>
						
					
					<?php
					}
						else{
					?>

						<?php
							$view=mysql_query("SELECT * FROM ref_semester WHERE status='y'");
							while($row=mysql_fetch_array($view)){
								$sem = $row['semester'];
								if($sem == 'Ganjil'){
						?>
									<div class="right_col" role="main">
						            	<div class="x_content">
						                    <div class="bs-example" data-example-id="simple-jumbotron">
						                        <div class="jumbotron" style="text-align:center; color:black;">
						                            <h2>DATA RKTS (Rencana Kinerja Tridharma Semester)</h2>
						                        </div>
						                    </div>
						                </div>
						                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
											<thead>
											<tr>
												<th width="34" align="center">No.</th>
												<th width="63" >NIK</th>
												<th width="63" >Nama Lengkap</th>
												<th width="345" >Semester</th>
												<th width="125" >Tahun Ajaran</th>
												<th width="40" >Update RKTS</th>
												<th width="40" >Download Verifikasi RKTS</th>
											</tr>
										</thead>
										
										<tbody>
												<?php
													include "config.php";
													$no = 1;
													$nik = $_SESSION['nik'];
													$view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.nik = '$nik' AND tbl_rencana.koreksi = 'Belum' AND tbl_rencana.semester='Ganjil' ORDER BY tbl_rencana.tahun_ajaran, tbl_rencana.semester");
													while($row=mysql_fetch_array($view)){
												?>
												<tr class="gradeA">
													<td><?php echo $no;?></td>
													<td><?php echo $row['nik'];?></td>
													<td><?php echo $row['nama_lengkap'];?></td>
													<td><div class="btn btn-warning"><?php echo $row['semester'];?></div></td>
													<td><div class="btn btn-danger"><?php echo $row['tahun_ajaran'];?></div></td>
													<td>
														<div class="btn btn-success">
														<a style="color:white;" href="updaterkts.php?semester=<?php echo $row['semester'];?>&tahun_ajaran=<?php echo $row['tahun_ajaran'];?>&nik=<?php echo $row['nik'];?>">Update RKTS</a>
														</div>
													</td>
													<td>
														<div class="btn btn-info">
														<a style="color:white;" href="admin/pdf/examples/verifikasi_rkts.php?semester=<?php echo $row['semester'];?>&tahun_ajaran=<?php echo $row['tahun_ajaran'];?>&nik=<?php echo $row['nik'];?>" target="_blank">Download</a>
														</div>
													</td>
												</tr>
												<?php
													$no++;
													}
												?>
										</tbody>
										
										</table>
									</div>
							<?php
								}elseif ($sem == 'Genap') {
							?>
								<div class="right_col" role="main">
						            	<div class="x_content">
						                    <div class="bs-example" data-example-id="simple-jumbotron">
						                        <div class="jumbotron" style="text-align:center; color:black;">
						                            <h2>DATA RKTS (Rencana Kinerja Tridharma Semester)</h2>
						                        </div>
						                    </div>
						                </div>
						                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
											<thead>
											<tr>
												<th width="34" align="center">No.</th>
												<th width="63" >NIK</th>
												<th width="63" >Nama Lengkap</th>
												<th width="345" >Semester</th>
												<th width="125" >Tahun Ajaran</th>
												<th width="40" >Update RKTS</th>
												<th width="40" >Download Verifikasi RKTS</th>
											</tr>
										</thead>
										
										<tbody>
												<?php
													include "config.php";
													$no = 1;
													$nik = $_SESSION['nik'];
													$view=mysql_query("SELECT * FROM tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_rencana.nik = '$nik' AND tbl_rencana.koreksi = 'Belum' AND tbl_rencana.semester='Genap' ORDER BY tbl_rencana.tahun_ajaran, tbl_rencana.semester");
													while($row=mysql_fetch_array($view)){
												?>
												<tr class="gradeA">
													<td><?php echo $no;?></td>
													<td><?php echo $row['nik'];?></td>
													<td><?php echo $row['nama_lengkap'];?></td>
													<td><div class="btn btn-warning"><?php echo $row['semester'];?></div></td>
													<td><div class="btn btn-danger"><?php echo $row['tahun_ajaran'];?></div></td>
													<td>
														<div class="btn btn-success">
														<a style="color:white;" href="updaterkts.php?semester=<?php echo $row['semester'];?>&tahun_ajaran=<?php echo $row['tahun_ajaran'];?>&nik=<?php echo $row['nik'];?>">Update RKTS</a>
														</div>
													</td>
													<td>
														<div class="btn btn-info">
														<a style="color:white;" href="admin/pdf/examples/verifikasi_rkts.php?semester=<?php echo $row['semester'];?>&tahun_ajaran=<?php echo $row['tahun_ajaran'];?>&nik=<?php echo $row['nik'];?>" target="_blank">Download</a>
														</div>
													</td>
												</tr>
												<?php
													$no++;
													}
												?>
										</tbody>
										
										</table>
									</div>
							<?php
								}
							?>

							<?php
						}
					}
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
