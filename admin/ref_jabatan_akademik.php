<?php
    include "mediaheader.php";
    include "topheader.php";
?>
<!-- page content -->
            <div class="right_col" role="main">
                <?php
                    $aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";
                    if ($aksi == "update") {
                    ?>
                        
                        <div class="col-md-12 col-sm-12 col-xs-12">
        
                                <div class="x_panel"><h2>Perbaharui Data</h2>
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
                                    $id = $_GET['id'];
                                    $jabatanakademik = $_GET['jabatanakademik'];
                                ?>
                                <form action="process.php?act=update_jabatanakademik" method="post">
                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="Tahun Ajaran">ID <span class="required"><font color="red">*</font></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control col-md-7 col-xs-12" data-validate-length-range="" name="id_jabatan" type="text" value="<?php echo $id;?>" readonly>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="Nama Lengkap">Jabatan Akademik <span class="required"><font color="red">*</font></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="jabatan_akademik" placeholder="" type="text" value="<?php echo $jabatanakademik;?>">
                                    </div>
                                </div>
                                
                            </div>
                            <center><button type="submit" class="btn btn-success" onclick="return confirm('Periksa Kembali Data Anda, Sebelum Anda Menyimpan Data Anda')">Simpan</button></center>
                                </form>
                        <div class="clearfix"></div>
                        </div>


                    <?php
                    }
                    else if ($aksi == "hapus") {
                        $id = $_GET['id'];
                        //Delete Tabel Jabatan Akademik                         
                        $delete = mysql_query("DELETE FROM ref_jabatan_akademik WHERE id_jabatanakademik='$id'");    

                        if($delete){
                            ?>
                                <script>
                                    alert('Data Berhasil Di Hapus');
                                    window.location.href='ref_jabatan_akademik.php';
                                </script>
                            <?php
                        }
                        else{
                            ?>
                                <script>
                                    alert('Data Gagal Di Hapus');
                                    window.location.href='ref_jabatan_akademik.php';
                                </script>
                            <?php
                        }
                    }
                    else if($aksi == "tambah"){
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
                                <form action="process.php?act=tambah_jabatanakademik" method="post">
                                <div class="item form-group">
                                    <label class="control-label col-md-4 col-sm-3 col-xs-12" for="Nama Lengkap">Jabatan Akademik <span class="required"><font color="red">*</font></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control col-md-7 col-xs-12" data-validate-length-range="" data-validate-words="" name="jabatan_akademik" placeholder="" type="text" value="">
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
                <a href="?aksi=tambah"><div class="btn btn-success">Tambah</div></a>
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                    <thead>
                    <tr>
                        <th width="34" align="center">No.</th>
                        <th width="63" >Jabatan Akademik</th>
                        <th width="40" >Update Data</th>
                        <th width="40" >Hapus</th>
                    </tr>
                </thead>
                
                <tbody>
                        <?php
                            include "config.php";
                            $no = 1;
                            $view=mysql_query("select * from ref_jabatan_akademik");
                            while($row=mysql_fetch_array($view)){
                        ?>
                        <tr class="gradeA">
                            <td><?php echo $no;?></td>
                            <td><?php echo $row['nama_jabatanakademik'];?></td>
                            <td><div type="div" class="btn btn-primary">
							<a style="color:white;" href="?aksi=update&id=<?php echo $row['id_jabatanakademik'];?>&jabatanakademik=<?php echo $row['nama_jabatanakademik'];?>">Perbaharui</a>
							</div></td>
                            <td><div type="div" class="btn btn-danger">
							<a style="color:white;" href="?aksi=hapus&id=<?php echo $row['id_jabatanakademik'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ini??')">Hapus</a>
							</div></td>
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
