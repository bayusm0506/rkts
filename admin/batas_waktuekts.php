<?php
    include "mediaheader.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">
			<p><b>SETTING BATAS WAKTU EKTS</b></p>
				<form action="process.php?act=batas_waktuekts" method="post">
						<div style="background:; float:left;	">
							<div class="item form-group">
							<?php
								$view=mysql_query("select * from tbl_batas_waktuekts");
								while($row=mysql_fetch_array($view)){
							?>
							
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Mulai <span class="required">*</span>
							</label>
							<div style="display: inline-block;">
												
													<div class="col-md-4 col-sm-6 col-xs-12">
													<input id="name" class="form-control col-md-7 col-xs-12"  name="id_batas" placeholder="" type="hidden" readonly="" value="<?php echo $row['id_batas'];?>">
														<select class="form-control" name="tanggal_awal" required="required">
															<option value="">tanggal</option>
															<?php
																$bln=array(1=>"Januari","Februari","Maret","April","Mei", "Juni","July","Agustus","September","Oktober", "November","Desember");

																$tgl_lahir = explode("-",$row['batas_awal']);
																$tgl_awal = intval($tgl_lahir[2]);
																$bln_awal = intval($tgl_lahir[1]);
																$tahun_awal = intval($tgl_lahir[0]);
																for ($b = 1; $b <= 31; $b++) {
																	  if ($b == $tgl_awal) {
																	   echo '<option value="'.$b.'" selected>'.$b.'</option>';
																	  } else {
																	   echo '<option value="'.$b.'">'.$b.'</option>';
																	  }
																 }
															?>
														</select>
													</div>
													<div class="col-md-4 col-sm-6 col-xs-12">
														<select class="form-control" name="bulan_awal" required="required">
															<option value="">bulan</option>
															<?php
																$month_id = array(1=>"Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober",
																	"November","Desember");
																	for ($c = 1; $c <= 12; $c++) {
																	  if ($c == $bln_awal) {
																	   echo '<option value="'.$c.'" selected>'.$month_id[$c].'</option>';
																	  } else {
																	   echo '<option value="'.$c.'">'.$month_id[$c].'</option>';
																	  }
																	}
															?>
														</select>
													</div>
													<div class="col-md-4 col-sm-6 col-xs-12">
														<select class="form-control" name="tahun_awal" required="required">
															<option value="">tahun</option>
															<?php
																$date=date("Y");
																for ($x = 1945; $x <= $date; $x++) {
																  if ($x == $tahun_awal) {
																   echo '<option value="'.$x.'" selected>'.$x.'</option>';
																  } else {
																   echo '<option value="'.$x.'">'.$x.'</option>';
																  }
																}
															?>
														</select>
													</div>
													</div>
							
						</div>
						<div class="item form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Sampai <span class="required">*</span>
							</label>
							<div style="display: inline-block;">
													<div class="col-md-4 col-sm-6 col-xs-12">
														<select class="form-control" name="tanggal_selesai" required="required">
															<option value="">tanggal</option>
															<?php
																$bln=array(1=>"Januari","Februari","Maret","April","Mei", "Juni","July","Agustus","September","Oktober", "November","Desember");

																$tgl_lahir = explode("-",$row['batas_akhir']);
																$tgl_lahir_tgl = intval($tgl_lahir[2]);
																$tgl_lahir_bln = intval($tgl_lahir[1]);
																$tgl_lahir_thn = intval($tgl_lahir[0]);
																for ($b = 1; $b <= 31; $b++) {
																	  if ($b == $tgl_lahir_tgl) {
																	   echo '<option value="'.$b.'" selected>'.$b.'</option>';
																	  } else {
																	   echo '<option value="'.$b.'">'.$b.'</option>';
																	  }
																 }
															?>
														</select>
													</div>
													<div class="col-md-4 col-sm-6 col-xs-12">
														<select class="form-control" name="bulan_selesai" required="required">
															<option value="">bulan</option>
															<?php
																$month_id = array(1=>"Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober",
																	"November","Desember");
																	for ($c = 1; $c <= 12; $c++) {
																	  if ($c == $tgl_lahir_bln) {
																	   echo '<option value="'.$c.'" selected>'.$month_id[$c].'</option>';
																	  } else {
																	   echo '<option value="'.$c.'">'.$month_id[$c].'</option>';
																	  }
																	}
															?>
														</select>
													</div>
													<div class="col-md-4 col-sm-6 col-xs-12">
														<select class="form-control" name="tahun_selesai" required="required">
															<option value="">tahun</option>
															<?php
																$date=date("Y");
																for ($x = 1945; $x <= $date; $x++) {
																  if ($x == $tgl_lahir_thn) {
																   echo '<option value="'.$x.'" selected>'.$x.'</option>';
																  } else {
																   echo '<option value="'.$x.'">'.$x.'</option>';
																  }
																}
															?>
														</select>
													</div>
													</div>
						</div>
						<?php
								}
							?>
						<center><button id="send" type="submit" class="btn btn-success" onclick="return confirm('Apakah Anda yakin ingin mengubah tanggal ?')">Simpan</button></center>
						</div>
				</form>
				
				
                


                
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
