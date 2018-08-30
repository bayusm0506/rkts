<?php
    include "header.php";
    include "top.php";
?>
<!-- page content -->
            <div class="right_col" role="main">
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                    <thead>
                    <tr style="background:#26b99a; color:#ffffff; text-align:center;">
                        <th width="34" align="center">No.</th>
                        <th width="63" >NIK</th>
                        <th width="63" >Nama Lengkap</th>
                        <th width="63" >No. Serdos</th>
                        <th width="63" >No. HP</th>
                        <th width="130" >Jabatan Akademik</th>
                        <th width="345" >Pangkat/Golongan</th>
                        <th width="40" >Jabatan Struktural</th>
                        <th width="40" >Fakultas/Prodi</th>
                        <th width="40" >Update Password</th>
                    </tr>
                </thead>
                
                <tbody>
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
                            <td><?php echo $row['no_serdos'];?></td>
                            <td><?php echo $row['nomor_hp'];?></td>
                            <td><?php echo $row['jabatan_akademik'];?></td>
                            <td><?php echo $row['pangkat_golongan'];?></td>
                            <td><?php echo $row['jabatan_struktural'];?></td>
                            <td><?php echo $row['fakultas_prodi'];?></td>
                            <td><a href="ekts.php?semester=<?php echo $row[semester];?>&tahun_ajaran=<?php echo $row[tahun_ajaran];?>&nik=<?php echo $row[nik];?>">Update Password</a></td>
                        </tr>
                        <?php
                            $no++;
                            }
                        ?>
                </tbody>
                </table>
            </div>
<?php
    include "header.php";
    include "top.php";
    include "content.php";
    include "footer.php";
?>