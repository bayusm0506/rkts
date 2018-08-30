<?php
    include "mediaheader.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">

                <div class="">
                    <div class="page-title">
                        <div class="col-md-12">
                            <h3>Ganti Password</h3>
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
								
								<form action="process.php?act=updatepasswordadmin" method="post">
									<div class="row">
									<?php
										include "config.php";
										$id_admin = $_SESSION['id_admin'];
										$view=mysql_query("select * from tbl_admin WHERE id_admin='$id_admin'");
										while($row=mysql_fetch_array($view)){
									?>
                                        <div class="col-md-12 col-sm-12 col-xs-12">

													<div class="x_panel"><h2>Pastikan Password Anda mudah diingat</h2>
														<div class="x_title"></div>
														<!--test-->
														<?php
														if(isset($_GET['success']))
														{
															?>
															<label><code>Password Anda Berhasil di perbaharui</code></label>
															<?php
														}
														else if(isset($_GET['failed']))
														{
															?>
															<label><code>Password gagal di Perbaharui</label>
															<?php
														}
														
													?>
													<div class="item form-group">
														<input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="id_admin" required="required" type="hidden" value="<?php echo $row['id_admin'];?>">
														<label class="control-label col-md-4 col-sm-3 col-xs-12" for="name">Password Baru <span class="required"><font color="red">*</font></span>
														</label>
														<div class="col-md-6 col-sm-6 col-xs-12">
															<input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
														</div>
													</div>
													<div class="item form-group">
														<label class="control-label col-md-4 col-sm-3 col-xs-12" for="pass">Ulangi Password <span class="required"><font color="red">*</font></span>
														</label>
														<div class="col-md-6 col-sm-6 col-xs-12">
															<input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-6 col-md-offset-3">
															<button type="submit" class="btn btn-primary">Cancel</button>
															<button id="send" type="submit" class="btn btn-success">Ubah Password</button>
														</div>
													</div>
												</div>
												
											<div class="clearfix"></div>
										</div>
	
                                    </div>
									<?php
										}
									?>
									</form>
                                </div>
								
								
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

<style>
	.control-label{
			text-align: right;
	}
</style>