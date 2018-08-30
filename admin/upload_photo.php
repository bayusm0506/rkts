<?php
    include "mediaheader.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="col-md-12">
                            <h3>Perbaharui Photo</h3>
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
									<?php
										include "config.php";
										$id_admin = $_SESSION['id_admin'];
										$view=mysql_query("select * from tbl_admin WHERE id_admin='$id_admin'");
										while($row=mysql_fetch_array($view)){
									?>
                                        <div class="col-md-12 col-sm-12 col-xs-12">

													<div class="x_panel"><h2>Pastikan Latar Belakang Photo warna Merah</h2>
														<div class="x_title"></div>
														<!--test-->
														<?php
														if(isset($_GET['success']))
														{
															?>
															<label><code>Photo Anda Berhasil di perbaharui</code></label>
															<?php
														}
														else if(isset($_GET['failed']))
														{
															?>
															<label><code>Photo gagal di Perbaharui</label>
															<?php
														}
														
													?>
													<div class="item form-group">
                                                        <center>
                                                        <?php
                                                            if($row['photo']!=""){
                                                                ?>
                                                                    <img src="upload/<?php echo $row['photo'];?>" style="width:80px; height:100px;"> </td>
                                                                <?php
                                                            }
                                                            else{
                                                                ?>
                                                                    <img src="upload/undefined.jpg" style="width:80px; height:100px;"> </td>
                                                                <?php
                                                            }
                                                        ?>
                                                        <form action="process.php?act=uploadphoto" method="post" enctype="multipart/form-data">
                                                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_admin" required="required" type="hidden" value="<?php echo $row['id_admin'];?>">
                                                            <input type="file" name="photo">
                                                            <button type="submit" class="btn btn-success inputbutton2" value="UPLOAD">UPLOAD</button>
                                                        </form>
                                                        </center>
												</div>
												
											<div class="clearfix"></div>
										</div>
	
                                    </div>
									<?php
										}
									?>
									
                                </div>
								
								
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

<style>
	.control-label{
			text-align: right;
	}
</style>