<?php
    include "mediaheader.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
					<thead>
					<tr>
						<th width="34" align="center">No.</th>
						<th width="63" >NIK</th>
						<th width="63" >Nama Lengkap</th>
						<th width="345" >Semester</th>
						<th width="125" >Tahun Ajaran</th>
						<th width="130" >Jabatan Akademik</th>
						<th width="345" >Pangkat/Golongan</th>
						<th width="40" >Jabatan Struktural</th>
						<th width="40" >Fakultas/Prodi</th>
						<th width="40" >Update RKTS</th>
						<th width="40" >Lengkapi EKTS</th>
					</tr>
				</thead>
				
				<tbody>
						<?php
							include "config.php";
							$no = 1;
							$nik = $_SESSION['nik'];
							$view=mysql_query("select * from tbl_user, tbl_rencana WHERE tbl_user.nik = tbl_rencana.nik AND tbl_user.nik='$nik'");
							while($row=mysql_fetch_array($view)){
						?>
						<tr class="gradeA">
							<td><?php echo $no;?></td>
							<td><?php echo $row['nik'];?></td>
							<td><?php echo $row['nama_lengkap'];?></td>
							<td><?php echo $row['semester'];?></td>
							<td><?php echo $row['tahun_ajaran'];?></td>
							<td><?php echo $row['jabatan_akademik'];?></td>
							<td><?php echo $row['pangkat_golongan'];?></td>
							<td><?php echo $row['jabatan_struktural'];?></td>
							<td><?php echo $row['fakultas_prodi'];?></td>
							<td><a href="updaterkts.php?semester=<?php echo $row['semester'];?>&tahun_ajaran=<?php echo $row['tahun_ajaran'];?>&nik=<?php echo $row['nik'];?>">Update RKTS</a></td>
							<td><a href="ekts.php?semester=<?php echo $row[semester];?>&tahun_ajaran=<?php echo $row[tahun_ajaran];?>&nik=<?php echo $row[nik];?>">Lengkapi EKTS</a></td>
						</tr>
						<?php
							$no++;
							}
						?>
				</tbody>
				
				</table>
				
                   <!-- footer content -->
                 
            <!-- /footer content -->
                    
				</div>
                <!-- /page content -->
				<footer>
                    <div class="">
                        <p class="pull-right">Copyright &copy; 2006 - 2016 ICT - Universitas Medan Area <a></a>. |
                            <span class="lead"> <i class="fa fa-paper-plane-o"></i> RKTS & EKTS</span>
                        </p>
                    </div>
                    <div class="clearfix"></div>
                </footer>
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
