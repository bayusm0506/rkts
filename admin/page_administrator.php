<?php
    include "media_admin.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">
                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                    <h2></h2>
                                        <div class="clearfix"></div>
                                    </div>

                                        <div class="x_content">
                                            <div class="bs-example" data-example-id="simple-jumbotron">
                                                <div class="jumbotron">
                                                    <h1>ADMINISTRATOR <br /> RKTS & EKTS</h1>
													<p>Selamat Datang <font color="red"><?php echo $_SESSION['nama_lengkap']; ?></font></p>
                                                    <p>Lembaga Penjamin Mutu (LPM) Universitas Medan Area.</p>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                        <!-- endofgreeting -->
                        
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
								
                                </div>
                            </div>
                        </div>


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
