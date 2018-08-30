<?php
    include "mediaheader.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">
				<?php
					$mod 			= isset($_GET['mod']) ? $_GET['mod'] : NULL;
					$id_del 		= isset($_GET['id_n']) ? $_GET['id_n'] : NULL;

					if ($mod == "del") {
						$q_del = mysql_query("DELETE FROM tbl_user WHERE id_user = '$id_del'");

						if ($q_del) {
							echo "<center><font color='red'>BERHASIL Data User Berhasil di hapus</font></center>";
						} else {
							echo "MAAF!</strong>".mysql_error()."<br/>";
						}
					}
				?>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                    <thead>
                    <tr style="background:#26b99a; color:#ffffff; text-align:center;">
                        <th width="34" align="center">No.</th>
                        <th width="63" >NIK</th>
                        <th width="63" >Nama Lengkap</th>
                        <th width="130" >Jabatan Akademik</th>
                        <th width="345" >Pangkat/Golongan</th>
                        <th width="40" >Jabatan Struktural</th>
                        <th width="40" >Fakultas/Prodi</th>
						<th width="40" style="text-align:center;" colspan="3">AKSI</th>
                    </tr>
                </thead>
                <?php
					$level = $_SESSION['fakultas'];
					if($level == 'Fakultas Biologi' || $level == 'Fakultas Psikologi' || $level == 'Fakultas Teknik' || $level == 'Fakultas Hukum' || $level == 'Fakultas Pertanian' || $level == 'Fakultas Isipol' || $level == 'Fakultas Ekonomi' || $level == 'Pascasarjana'){
				?>
				<tbody>
                        <?php
                            include "config.php";
                            $no = 1;
							$fakultas = $_SESSION['fakultas'];
                            $view=mysql_query("select * from tbl_user where fakultas LIKE'%$fakultas%'");
                            while($row=mysql_fetch_array($view)){
                        ?>
                        <tr class="gradeA">
                            <td><?php echo $no;?></td>
                            <td><?php echo $row['nik'];?></td>
                            <td><?php echo $row['nama_lengkap'];?></td>
                            
                            
                            <td><?php echo $row['jabatan_akademik'];?></td>
                            <td><?php echo $row['pangkat_golongan'];?></td>
                            <td><?php echo $row['jabatan_struktural'];?></td>
                            <td><?php echo $row['fakultas'];?>, <?php echo $row['prodi'];?></td>
							<td><div  class="btn btn-round btn-success"><a style="color:white; text-align:center;" href="update_password_dosen.php?id=<?php echo $row['id_user'];?>">Ganti Password</a></div></td>
                            <td><div  class="btn btn-round btn-danger"><a style="color:white;" href="datadosen.php?mod=del&id_n=<?php echo $row[id_user];?>" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini ??')" title="Hapus Data">Hapus</a></div></td>
							<td><div  class="btn btn-round btn-info"><a style="color:white;" href="buat_rkts.php?nik=<?php echo $row['nik'];?>">Buat RKTS</a></div></td>
                        </tr>
                        <?php
                            $no++;
                            }
                        ?>
                </tbody>
                <?php
					}
					elseif($level == 'Administrator Fakultas'){
				?>
				<tbody>
                    <?php
                        $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
                        if ($aksi == "tambah") {
                    ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
        
                                <div class="x_panel"><h2>Tambah Data</h2>
                                    <div class="x_title"></div>
                                    <!--test-->
                                    <?php
                                    if(isset($_GET['success']))
                                    {
                                    ?>
                                        <label><code>Data Berhasil Disimpan</code></label>
                                    <?php
                                    }
                                    else if(isset($_GET['fail']))
                                    {
                                    ?>
                                        <label><code>Data Gagal Disimpan</label>
                                    <?php
                                    }
                                    
                                    ?>
                                <?php

                                ?>
                                <form action="process.php?act=tambah_dosen" method="post">
                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="Nama Lengkap">NIK (Nomor Induk Kepegawaian) <span class="required"><font color="red">*</font></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nik" placeholder="" type="text" value="">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="Nama Lengkap">Nama Lengkap <span class="required"><font color="red">*</font></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="nama" placeholder="" type="text" value="">
                                    </div>
                                </div>
                                
                            </div>
                            <center><button type="submit" class="btn btn-success" onclick="return confirm('Periksa Kembali Data Anda, Sebelum Anda Menyimpan Data Anda')">Simpan</button></center>
                                </form>
                        <div class="clearfix"></div>
                        </div>
                        <?php
                        }        

                    ?>
                   <!-- <a href="?aksi=tambah"><div class="btn btn-success">Tambah</div></a> -->
                        <?php
                            include "config.php";
                            $no = 1;
                            $view=mysql_query("select * from tbl_user");
                            while($row=mysql_fetch_array($view)){
                        ?>
                        <tr class="gradeA">
                            <td><?php echo $no;?></td>
                            <td><?php echo $row['nik'];?></td>
                            <td><?php echo $row['nama_lengkap'];?></td>
                            
                            
                            <td><?php echo $row['jabatan_akademik'];?></td>
                            <td><?php echo $row['pangkat_golongan'];?></td>
                            <td><?php echo $row['jabatan_struktural'];?></td>
                            <td><?php echo $row['fakultas'];?>, <?php echo $row['prodi'];?></td>
							<td><div  class="btn btn-round btn-success"><a style="color:white; text-align:center;" href="update_password_dosen.php?id=<?php echo $row['id_user'];?>">Ganti Password</a></div></td>
                            <td><div  class="btn btn-round btn-danger"><a style="color:white;" href="datadosen.php?mod=del&id_n=<?php echo $row[id_user];?>" onclick="return confirm('Apakah Anda Yakin ingin menghapus data ini ??')" title="Hapus Data">Hapus</a></div></td>
							<td><div  class="btn btn-round btn-info"><a style="color:white;" href="buat_rkts.php?nik=<?php echo $row['nik'];?>">Buat RKTS</a></div></td>
                        </tr>
                        <?php
                            $no++;
                            }
                        ?>
                </tbody>
				<?php
					}
					
				?>
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
