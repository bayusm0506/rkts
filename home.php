<?php
    include "mediaheader.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    
                                    <h2></h2>
                                        <div class="clearfix"></div>
                                        <div class="x_content">
											<div>
											<a href="update_password.php"><center><button type="button" class="btn btn-danger btn-lg">SEGERA GANTI PASSWORD ANDA!</button></center></a>
											</div><br/>
                                            <div class="bs-example" data-example-id="simple-jumbotron">
                                                <div class="jumbotron">
                                                    <h1>RKTS & EKTS Online</h1>
													<p>Selamat Datang <font color="red"><?php echo $_SESSION['nama_lengkap']; ?></font></p>
                                                    <p>Lembaga Penjamin Mutu (LPM) Universitas Medan Area.</p>
													<br>
													Universitas Medan Area dalam mewujudkan peningkatan mutu pendidikannya telah melaksanakan 
													Penjaminan Mutu Internal (PMI) dan Manajemen Mutu ISO 9001:2015, salah satunya melalui peningkatan 
													mutu dosen secara berkesinambungan sehingga seluruh dosen / staf pengajar di lingkungan 
													Universitas Medan Area, diwajibkan untuk mengisi RKTS dan EKTS setiap semester, yang merupakan 
													bagian dari pelaksanaan penjaminan mutut dan manajemen mutu UMA, sehingga mampu terjaminnya kualitas 
													proses belajar mengajar dan mutu pendidikan di lingkungan Universitas Medan Area.
									
													<br><br>
													Tujuan RKTS (Rencana Kerja Tridarma Semesteran) dan EKTS (Evaluasi Kerja Tridarma Semesteran) adalah 
													sebagai evaluasi diri dosen dan evaluasi manajemen dosen dalam melaksanakan TriDarma Perguruan serta 
													peningkatan karir dosen di lingkungan Universitas Medan Area.
                                                </div>
                                            </div>
											<div class="jumbotron" style="background-color:#d9534f; color:white;">
												<center>
												<p>Untuk Informasi & Bantuan terkait RKTS / EKTS Online<br/> silahkan menghubungi Lembaga Penjaminan Mutu (LPM) Universitas Medan Area.<br/>
												Ir. Hj. Haniza, MT - Kepala LPM UMA - 08126512191<br/>
												Syarifah Muthia Putri, ST, MT - 085262058398
												</p>
												</center>
											</div>
                                        </div>
										

                                </div>
                            </div>
                        </div>
                        <!-- endofgreeting -->
                       
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
