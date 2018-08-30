<?php
    session_start();
    error_reporting(0);
    if(!isset($_SESSION['username'])){
        header('Location:index.php?status=Anda sudah Keluar');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RKTS dan EKTS Online Universitas Medan Area - Lembaga Penjaminan Mutu</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="images/logo.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
    
    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paper-plane-o"></i> <span>R-KTS & E-KTS</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <?php
                        include "config.php";
                        $id_admin = $_SESSION['id_admin'];
                        $view=mysql_query("select * from tbl_admin WHERE id_admin='$id_admin'");
                                
                        
                        while($row=mysql_fetch_array($view)){
                    ?>  
                    
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <?php
                                if($row['photo']!=""){
                                    ?>
                                        <img src="upload/<?php echo $row['photo'];?>" class="img-circle profile_img"> </td>
                                    <?php
                                }
                                else{
                                    ?>
                                        <img src="upload/undefined.jpg" class="img-circle profile_img"> </td>
                                    <?php
                                }
                            ?>
                        </div>
                        <div class="profile_info">
                            <span>Selamat Datang,</span>
                            <h2><?php echo $row['nama_lengkap'];?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />
                    <?php
                        }
                    ?>
                    <!-- sidebar menu -->
                   
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>--------------------------------------------</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-bookmark-o"></i>REFERENSI <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="ref_fakultas.php">FAKULTAS</a>
                                        </li>
                                         <li><a href="ref_jabatan_akademik.php">JABATAN AKADEMIK</a>
                                        </li>
                                         <li><a href="ref_jabatan_struktural.php">JABATAN STRUKTURAL</a>
                                        </li>
                                         <li><a href="ref_kepala_prodi.php">KEPALA PRODI</a>
                                        </li>
                                         <li><a href="ref_pangkat_golongan.php">PANGKAT GOLONGAN</a>
                                        </li>
                                         <li><a href="ref_pendidikan.php">PENDIDIKAN</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-database"></i>DATA DOSEN <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="datadosen.php">DATA DOSEN</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-file-pdf-o"></i>RKTS <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin_rkts_koreksi.php">PENILAIAN</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-history"></i>NILAI<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="admin_nilai.php">RKTS & EKTS</a>
                                        </li>
                                    </ul>
                                </li>
								<li><a><i class="fa fa-database"></i>FAKULTAS<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
										<li><a href="nilai.php">PASCASARJANA</a></li>
                                        <li><a href="nilai.php">PSIKOLOGI</a></li>
										<li><a href="nilai.php">TEKNIK</a></li>
										<li><a href="nilai.php">PERTANIAN</a></li>
										<li><a href="nilai.php">BIOLOGI</a></li>
										<li><a href="nilai.php">ISIPOL</a></li>
										<li><a href="nilai.php">HUKUM</a></li>
										<li><a href="nilai.php">EKONOMI</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
                    
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>