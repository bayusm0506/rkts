<?php
    session_start();
    error_reporting(0);
    if(!isset($_SESSION['nik'])){
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

    <title>RKTS - EKTS Online Universitas Medan Area - Lembaga Penjaminan Mutu</title>

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
                        <a href="index.php" class="site_title"><i class="fa fa-graduation-cap"></i> <span>R-KTS & E-KTS</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <?php
                        include "config.php";
                        $idpelamar = $_SESSION['id_user'];
                        $view=mysql_query("select * from tbl_user WHERE id_user='$idpelamar'");
                                
                        
                        while($row=mysql_fetch_array($view)){
                    ?>  
                    
                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <?php
                                if($row['photo']!=""){
                                    ?>
                                        <img src="admin/upload/<?php echo $row['photo'];?>" class="img-circle profile_img"> </td>
                                    <?php
                                }
                                else{
                                    ?>
                                        <img src="admin/upload/undefined.jpg" class="img-circle profile_img"> </td>
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
                    
                    <!-- sidebar menu -->
                   
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>-</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-file-pdf-o"></i>PETUNJUK <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="petunjuk.php">PETUNJUK</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-file-pdf-o"></i>RKTS <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li>
                                            <a href="media.php">BUAT RKTS</a>
                                        </li>
                                        <li>
                                            <a href="datarkts.php">DATA RKTS</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-folder-o"></i>EKTS <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="dataekts.php">EKTS</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-history"></i>NILAI<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="nilai.php">RKTS & EKTS</a>
                                        </li>
                                    </ul>
                                </li>
                                <!--
                                <li><a><i class="fa fa-external-link"></i>RKTS OFFLINE<span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="doc/RKTS2016.docx">DOWNLOAD RKTS </a></li>
                                        <li><a href="doc/EKTS2016.docx">DOWNLOAD EKTS </a></li>
                                    </ul>
                                </li>
                                -->
                            </ul>
                        </div>

                    </div>
                    <?php
                        }
                    ?>
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