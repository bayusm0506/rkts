<!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>
                        <?php
                            include "config.php";
                            $idpelamar = $_SESSION['id_user'];
                            $view=mysql_query("select * from tbl_user WHERE id_user='$idpelamar'");
                                    
                            
                            while($row=mysql_fetch_array($view)){
                        ?>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <?php
                                        if($row['photo']!=""){
                                            ?>
                                                <img src="admin/upload/<?php echo $row['photo'];?>"> </td>
                                            <?php
                                        }
                                        else{
                                            ?>
                                                <img src="admin/upload/undefined.jpg"> </td>
                                            <?php
                                        }
                                    ?><?php echo $row['nama_lengkap'];?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="update_password.php"><i class="fa fa-dot-circle-o pull-right"></i> Ganti Password</a>
                                    </li>
                                    <li><a href="upload_photo.php"><i class="fa fa-picture-o pull-right"></i> Ganti Foto</a>
                                    </li>
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->