<?php 
    session_start();
    //koneksi database
    include "config.php";
    
    //pilih aksi manipulasi yang akan di terapkan pada tabel database
    $act =$_GET['act'];
    
    //Upload 2a
    if($act=='duaA'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];

        $file = rand(1000,100000)."-".$_FILES['duaA']['name'];
        $file_loc = $_FILES['duaA']['tmp_name'];
        $file_size = $_FILES['duaA']['size'];
        $file_type = $_FILES['duaA']['type'];
        $folder="berkas/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
            $sql="UPDATE tbl_berkas SET 2a_berkas='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran'";
            mysql_query($sql);
            ?>
            <script>
            alert('Data Anda Berhasil di Simpan');
            window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
            <?php
        }
        else
        {
            ?>
            <script>
            alert('Gagal Upload');
            window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
            <?php
        }
    }
    
    //Upload Fungsi 1
    else if($act=='fungsi1'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter1 = $_POST['parameter1'];
        $parameter2 = $_POST['parameter2'];
        $parameter3 = $_POST['parameter3'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter1' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter1'
            "); 
            
        mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter2' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter2'
        "); 
        
        mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter3' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter3'
        "); 
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter4']['name'];
            $file_loc = $_FILES['parameter4']['tmp_name'];
            $file_size = $_FILES['parameter4']['size'];
            $file_type = $_FILES['parameter4']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter4'
                "); 
            }
            
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php

        
    }
    
    //Upload Fungsi 2
    else if($act=='fungsi2'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter5 = $_POST['parameter5'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter5' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter5'
            "); 
            
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter6']['name'];
            $file_loc = $_FILES['parameter6']['tmp_name'];
            $file_size = $_FILES['parameter6']['size'];
            $file_type = $_FILES['parameter6']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {   
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter6'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
        
        
    }
    
    //Upload Fungsi 3
    else if($act=='fungsi3'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        
        $file = rand(1000,100000)."-".$_FILES['parameter7']['name'];
        $file_loc = $_FILES['parameter7']['tmp_name'];
        $file_size = $_FILES['parameter7']['size'];
        $file_type = $_FILES['parameter7']['type'];
        $folder="berkas/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {       
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter7'
            "); 
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 4
    else if($act=='fungsi4'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter8 = $_POST['parameter8'];
        
        $update_berkas =  mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter8' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter8'
            "); 
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter9']['name'];
            $file_loc = $_FILES['parameter9']['tmp_name'];
            $file_size = $_FILES['parameter9']['size'];
            $file_type = $_FILES['parameter9']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                
                            
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter9'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 5
    else if($act=='fungsi5'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        
        $file = rand(1000,100000)."-".$_FILES['parameter10']['name'];
        $file_loc = $_FILES['parameter10']['tmp_name'];
        $file_size = $_FILES['parameter10']['size'];
        $file_type = $_FILES['parameter10']['type'];
        $folder="berkas/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
                        
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter10'
            "); 
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 6
    else if($act=='fungsi6'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter11 = $_POST['parameter11'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter11' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter11'
            "); 

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter12']['name'];
            $file_loc = $_FILES['parameter12']['tmp_name'];
            $file_size = $_FILES['parameter12']['size'];
            $file_type = $_FILES['parameter12']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                
                            
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter12'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 7
    else if($act=='fungsi7'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        
        $file = rand(1000,100000)."-".$_FILES['parameter13']['name'];
        $file_loc = $_FILES['parameter13']['tmp_name'];
        $file_size = $_FILES['parameter13']['size'];
        $file_type = $_FILES['parameter13']['type'];
        $folder="berkas/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
                        
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter13'
            "); 
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 8
    else if($act=='fungsi8'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter14 = $_POST['parameter14'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter14' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter14'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter15']['name'];
            $file_loc = $_FILES['parameter15']['tmp_name'];
            $file_size = $_FILES['parameter15']['size'];
            $file_type = $_FILES['parameter15']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter15'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 9
    else if($act=='fungsi9'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        
        $file = rand(1000,100000)."-".$_FILES['parameter16']['name'];
        $file_loc = $_FILES['parameter16']['tmp_name'];
        $file_size = $_FILES['parameter16']['size'];
        $file_type = $_FILES['parameter16']['type'];
        $folder="berkas/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
                        
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter16'
            ");
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 10
    else if($act=='fungsi10'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter17 = $_POST['parameter17'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter17' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter17'
            "); 
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter18']['name'];
            $file_loc = $_FILES['parameter18']['tmp_name'];
            $file_size = $_FILES['parameter18']['size'];
            $file_type = $_FILES['parameter18']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {       
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter18'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php

    }
    
    //Upload Fungsi 11
    else if($act=='fungsi11'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        
        $file = rand(1000,100000)."-".$_FILES['parameter19']['name'];
        $file_loc = $_FILES['parameter19']['tmp_name'];
        $file_size = $_FILES['parameter19']['size'];
        $file_type = $_FILES['parameter19']['type'];
        $folder="berkas/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
                        
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter19'
            "); 
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 12
    else if($act=='fungsi12'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter20 = $_POST['parameter20'];
        
        $update_berkas =  mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter20' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter20'
            "); 

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter21']['name'];
            $file_loc = $_FILES['parameter21']['tmp_name'];
            $file_size = $_FILES['parameter21']['size'];
            $file_type = $_FILES['parameter21']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {          
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter21'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 13
    else if($act=='fungsi13'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        
        $file = rand(1000,100000)."-".$_FILES['parameter22']['name'];
        $file_loc = $_FILES['parameter22']['tmp_name'];
        $file_size = $_FILES['parameter22']['size'];
        $file_type = $_FILES['parameter22']['type'];
        $folder="berkas/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
                        
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter22'
            "); 
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 14
    else if($act=='fungsi14'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter23 = $_POST['parameter23'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter23' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter23'
            "); 

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter24']['name'];
            $file_loc = $_FILES['parameter24']['tmp_name'];
            $file_size = $_FILES['parameter24']['size'];
            $file_type = $_FILES['parameter24']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {      
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter24'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 15
    else if($act=='fungsi15'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter25 = $_POST['parameter25'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter25' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter25'
            "); 

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter26']['name'];
            $file_loc = $_FILES['parameter26']['tmp_name'];
            $file_size = $_FILES['parameter26']['size'];
            $file_type = $_FILES['parameter26']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter26'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 16
    else if($act=='fungsi16'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter27 = $_POST['parameter27'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter27' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter27'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter28']['name'];
            $file_loc = $_FILES['parameter28']['tmp_name'];
            $file_size = $_FILES['parameter28']['size'];
            $file_type = $_FILES['parameter28']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {          
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter28'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 17
    else if($act=='fungsi17'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter29 = $_POST['parameter29'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter29' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter29'
            "); 

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter30']['name'];
            $file_loc = $_FILES['parameter30']['tmp_name'];
            $file_size = $_FILES['parameter30']['size'];
            $file_type = $_FILES['parameter30']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter30'
                ");
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 18
    else if($act=='fungsi18'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter31 = $_POST['parameter31'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter31' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter31'
            "); 

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter32']['name'];
            $file_loc = $_FILES['parameter32']['tmp_name'];
            $file_size = $_FILES['parameter32']['size'];
            $file_type = $_FILES['parameter32']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {      
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter32'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 19
    else if($act=='fungsi19'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter33 = $_POST['parameter33'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter33' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter33'
            ");
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter34']['name'];
            $file_loc = $_FILES['parameter34']['tmp_name'];
            $file_size = $_FILES['parameter34']['size'];
            $file_type = $_FILES['parameter34']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {            
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter34'
                "); 
            }
        } 
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 20
    else if($act=='fungsi20'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter35 = $_POST['parameter35'];
        $parameter36 = $_POST['parameter36'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter35' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter35'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter36' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter36'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter37']['name'];
            $file_loc = $_FILES['parameter37']['tmp_name'];
            $file_size = $_FILES['parameter37']['size'];
            $file_type = $_FILES['parameter37']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter37'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 21
    else if($act=='fungsi21'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter38 = $_POST['parameter38'];
        $parameter39 = $_POST['parameter39'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter38' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter38'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter39' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter39'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter40']['name'];
            $file_loc = $_FILES['parameter40']['tmp_name'];
            $file_size = $_FILES['parameter40']['size'];
            $file_type = $_FILES['parameter40']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {        
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter40'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 22
    else if($act=='fungsi22'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter41 = $_POST['parameter41'];
        $parameter42 = $_POST['parameter42'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter41' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter41'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter42' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter42'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter43']['name'];
            $file_loc = $_FILES['parameter43']['tmp_name'];
            $file_size = $_FILES['parameter43']['size'];
            $file_type = $_FILES['parameter43']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {           
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter43'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 23
    else if($act=='fungsi23'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter44 = $_POST['parameter44'];
        $parameter45 = $_POST['parameter45'];
        $parameter46 = $_POST['parameter46'];
        $parameter47 = $_POST['parameter47'];
        $parameter48 = $_POST['parameter48'];
        $parameter49 = $_POST['parameter49'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter44' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter44'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter45' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter45'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter46' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter46'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter47' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter47'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter48' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter48'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter49' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter49'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter50']['name'];
            $file_loc = $_FILES['parameter50']['tmp_name'];
            $file_size = $_FILES['parameter50']['size'];
            $file_type = $_FILES['parameter50']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {           
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter50'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 24
    else if($act=='fungsi24'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter51 = $_POST['parameter51'];
        $parameter52 = $_POST['parameter52'];
        $parameter53 = $_POST['parameter53'];
        $parameter54 = $_POST['parameter54'];
        $parameter55 = $_POST['parameter55'];
        $parameter56 = $_POST['parameter56'];

        $update_berkas =mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter51' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter51'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter52' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter52'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter53' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter53'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter54' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter54'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter55' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter55'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter56' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter56'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter57']['name'];
            $file_loc = $_FILES['parameter57']['tmp_name'];
            $file_size = $_FILES['parameter57']['size'];
            $file_type = $_FILES['parameter57']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {        
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter57'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 25
    else if($act=='fungsi25'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter58 = $_POST['parameter58'];
        $parameter59 = $_POST['parameter59'];
        $parameter60 = $_POST['parameter60'];
        $parameter61 = $_POST['parameter61'];
        $parameter62 = $_POST['parameter62'];
        $parameter63 = $_POST['parameter63'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter58' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter58'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter59' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter59'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter60' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter60'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter61' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter61'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter62' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter62'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter63' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter63'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter64']['name'];
            $file_loc = $_FILES['parameter64']['tmp_name'];
            $file_size = $_FILES['parameter64']['size'];
            $file_type = $_FILES['parameter64']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                
                            
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter64'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 26
    else if($act=='fungsi26'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter65 = $_POST['parameter65'];
        $parameter66 = $_POST['parameter66'];
        $parameter67 = $_POST['parameter67'];
        $parameter68 = $_POST['parameter68'];
        $parameter69 = $_POST['parameter69'];
        $parameter70 = $_POST['parameter70'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter65' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter65'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter66' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter66'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter67' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter67'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter68' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter68'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter69' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter69'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter70' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter70'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter71']['name'];
            $file_loc = $_FILES['parameter71']['tmp_name'];
            $file_size = $_FILES['parameter71']['size'];
            $file_type = $_FILES['parameter71']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {          
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter71'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 27
    else if($act=='fungsi27'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter72 = $_POST['parameter72'];
        $parameter73 = $_POST['parameter73'];
        $parameter74 = $_POST['parameter74'];
        $parameter75 = $_POST['parameter75'];
        $parameter76 = $_POST['parameter76'];
        $parameter77 = $_POST['parameter77'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter72' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter72'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter73' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter73'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter74' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter74'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter75' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter75'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter76' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter76'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter77' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter77'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter78']['name'];
            $file_loc = $_FILES['parameter78']['tmp_name'];
            $file_size = $_FILES['parameter78']['size'];
            $file_type = $_FILES['parameter78']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {            
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter78'
                ");
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 28
    else if($act=='fungsi28'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter79 = $_POST['parameter79'];
        $parameter80 = $_POST['parameter80'];
        $parameter81 = $_POST['parameter81'];
        $parameter82 = $_POST['parameter82'];
        $parameter83 = $_POST['parameter83'];
        $parameter84 = $_POST['parameter84'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter79' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter79'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter80' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter80'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter81' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter81'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter82' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter82'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter83' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter83'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter84' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter84'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter85']['name'];
            $file_loc = $_FILES['parameter85']['tmp_name'];
            $file_size = $_FILES['parameter85']['size'];
            $file_type = $_FILES['parameter85']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {          
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter85'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }

    //Upload Fungsi 29
    else if($act=='fungsi29'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter86 = $_POST['parameter86'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter86' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter86'
            "); 

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter87']['name'];
            $file_loc = $_FILES['parameter87']['tmp_name'];
            $file_size = $_FILES['parameter87']['size'];
            $file_type = $_FILES['parameter87']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter87'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 30
    else if($act=='fungsi30'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter88 = $_POST['parameter88'];
        $parameter89 = $_POST['parameter89'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter88' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter88'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter89' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter89'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter90']['name'];
            $file_loc = $_FILES['parameter90']['tmp_name'];
            $file_size = $_FILES['parameter90']['size'];
            $file_type = $_FILES['parameter90']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {            
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter90'
                ");
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 31
    else if($act=='fungsi31'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter91 = $_POST['parameter91'];
        $parameter92 = $_POST['parameter92'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter91' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter91'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter92' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter92'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter93']['name'];
            $file_loc = $_FILES['parameter93']['tmp_name'];
            $file_size = $_FILES['parameter93']['size'];
            $file_type = $_FILES['parameter93']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {            
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter93'
                ");
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 32
    else if($act=='fungsi32'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter94 = $_POST['parameter94'];
        $parameter95 = $_POST['parameter95'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter94' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter94'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter95' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter95'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter96']['name'];
            $file_loc = $_FILES['parameter96']['tmp_name'];
            $file_size = $_FILES['parameter96']['size'];
            $file_type = $_FILES['parameter96']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {           
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter96'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 33
    else if($act=='fungsi33'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter97 = $_POST['parameter97'];
        $parameter98 = $_POST['parameter98'];
        $parameter99 = $_POST['parameter99'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter97' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter97'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter98' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter98'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter99' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter99'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter100']['name'];
            $file_loc = $_FILES['parameter100']['tmp_name'];
            $file_size = $_FILES['parameter100']['size'];
            $file_type = $_FILES['parameter100']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter100'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 34
    else if($act=='fungsi34'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter101 = $_POST['parameter101'];
        $parameter102 = $_POST['parameter102'];
        $parameter103 = $_POST['parameter103'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter101' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter101'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter102' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter102'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter103' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter103'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter104']['name'];
            $file_loc = $_FILES['parameter104']['tmp_name'];
            $file_size = $_FILES['parameter104']['size'];
            $file_type = $_FILES['parameter104']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {       
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter104'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 35
    else if($act=='fungsi35'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter105 = $_POST['parameter105'];
        $parameter106 = $_POST['parameter106'];
        $parameter107 = $_POST['parameter107'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter105' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter105'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter106' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter106'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter107' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter107'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter108']['name'];
            $file_loc = $_FILES['parameter108']['tmp_name'];
            $file_size = $_FILES['parameter108']['size'];
            $file_type = $_FILES['parameter108']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {       
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter108'
                ");
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 36
    else if($act=='fungsi36'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter109 = $_POST['parameter109'];
        $parameter110 = $_POST['parameter110'];
        $parameter111 = $_POST['parameter111'];

        $update_berkas =mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter109' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter109'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter110' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter110'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter111' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter111'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter112']['name'];
            $file_loc = $_FILES['parameter112']['tmp_name'];
            $file_size = $_FILES['parameter112']['size'];
            $file_type = $_FILES['parameter112']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {        
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter112'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 37
    else if($act=='fungsi37'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter113 = $_POST['parameter113'];
        $parameter114 = $_POST['parameter114'];
        $parameter115 = $_POST['parameter115'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter113' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter113'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter114' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter114'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter115' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter115'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter116']['name'];
            $file_loc = $_FILES['parameter116']['tmp_name'];
            $file_size = $_FILES['parameter116']['size'];
            $file_type = $_FILES['parameter116']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {       
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter116'
                ");
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 38
    else if($act=='fungsi38'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter117 = $_POST['parameter117'];
        $parameter118 = $_POST['parameter118'];
        $parameter119 = $_POST['parameter119'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter117' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter117'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter118' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter118'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter119' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter119'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter120']['name'];
            $file_loc = $_FILES['parameter120']['tmp_name'];
            $file_size = $_FILES['parameter120']['size'];
            $file_type = $_FILES['parameter120']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter120'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 39
    else if($act=='fungsi39'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter121 = $_POST['parameter121'];
        $parameter122 = $_POST['parameter122'];
        $parameter123 = $_POST['parameter123'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter121' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter121'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter122' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter122'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter123' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter123'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter124']['name'];
            $file_loc = $_FILES['parameter124']['tmp_name'];
            $file_size = $_FILES['parameter124']['size'];
            $file_type = $_FILES['parameter124']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter124'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 40
    else if($act=='fungsi40'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter125 = $_POST['parameter125'];
        $parameter126 = $_POST['parameter126'];
        $parameter127 = $_POST['parameter127'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter125' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter125'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter126' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter126'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter127' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter127'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter128']['name'];
            $file_loc = $_FILES['parameter128']['tmp_name'];
            $file_size = $_FILES['parameter128']['size'];
            $file_type = $_FILES['parameter128']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter128'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 41
    else if($act=='fungsi41'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter129 = $_POST['parameter129'];
        $parameter130 = $_POST['parameter130'];
        $parameter131 = $_POST['parameter131'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter129' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter129'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter130' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter130'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter131' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter131'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter132']['name'];
            $file_loc = $_FILES['parameter132']['tmp_name'];
            $file_size = $_FILES['parameter132']['size'];
            $file_type = $_FILES['parameter132']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {          
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter132'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 42
    else if($act=='fungsi42'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter133 = $_POST['parameter133'];
        $parameter134 = $_POST['parameter134'];
        $parameter135 = $_POST['parameter135'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter133' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter133'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter134' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter134'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter135' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter135'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter136']['name'];
            $file_loc = $_FILES['parameter136']['tmp_name'];
            $file_size = $_FILES['parameter136']['size'];
            $file_type = $_FILES['parameter136']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {         
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter136'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 43
    else if($act=='fungsi43'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter137 = $_POST['parameter137'];
        $parameter138 = $_POST['parameter138'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter137' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter137'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter138' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter138'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter139']['name'];
            $file_loc = $_FILES['parameter139']['tmp_name'];
            $file_size = $_FILES['parameter139']['size'];
            $file_type = $_FILES['parameter139']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter139'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 44
    else if($act=='fungsi44'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter140 = $_POST['parameter140'];
        $parameter141 = $_POST['parameter141'];

        $update_berkas =mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter140' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter140'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter141' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter141'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter142']['name'];
            $file_loc = $_FILES['parameter142']['tmp_name'];
            $file_size = $_FILES['parameter142']['size'];
            $file_type = $_FILES['parameter142']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter142'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 45
    else if($act=='fungsi45'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter143 = $_POST['parameter143'];
        $parameter144 = $_POST['parameter144'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter143' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter143'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter144' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter144'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter145']['name'];
            $file_loc = $_FILES['parameter145']['tmp_name'];
            $file_size = $_FILES['parameter145']['size'];
            $file_type = $_FILES['parameter145']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter145'
                "); 
            }
        } 
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 46
    else if($act=='fungsi46'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter146 = $_POST['parameter146'];
        $parameter147 = $_POST['parameter147'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter146' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter146'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter147' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter147'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter148']['name'];
            $file_loc = $_FILES['parameter148']['tmp_name'];
            $file_size = $_FILES['parameter148']['size'];
            $file_type = $_FILES['parameter148']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter148'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 47
    else if($act=='fungsi47'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter149 = $_POST['parameter149'];
        $parameter150 = $_POST['parameter150'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter149' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter149'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter150' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter150'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter151']['name'];
            $file_loc = $_FILES['parameter151']['tmp_name'];
            $file_size = $_FILES['parameter151']['size'];
            $file_type = $_FILES['parameter151']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter151'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 48
    else if($act=='fungsi48'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter152 = $_POST['parameter152'];
        $parameter153 = $_POST['parameter153'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter152' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter152'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter153' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter153'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter154']['name'];
            $file_loc = $_FILES['parameter154']['tmp_name'];
            $file_size = $_FILES['parameter154']['size'];
            $file_type = $_FILES['parameter154']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter154'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 49
    else if($act=='fungsi49'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter155 = $_POST['parameter155'];
        $parameter156 = $_POST['parameter156'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter155' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter155'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter156' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter156'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter157']['name'];
            $file_loc = $_FILES['parameter157']['tmp_name'];
            $file_size = $_FILES['parameter157']['size'];
            $file_type = $_FILES['parameter157']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter157'
                ");
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 50
    else if($act=='fungsi50'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter158 = $_POST['parameter158'];
        $parameter159 = $_POST['parameter159'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter158' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter158'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter159' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter159'
            ");
        
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter160']['name'];
            $file_loc = $_FILES['parameter160']['tmp_name'];
            $file_size = $_FILES['parameter160']['size'];
            $file_type = $_FILES['parameter160']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter160'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 51
    else if($act=='fungsi51'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter161 = $_POST['parameter161'];
        $parameter162 = $_POST['parameter162'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter161' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter161'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter162' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter162'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter163']['name'];
            $file_loc = $_FILES['parameter163']['tmp_name'];
            $file_size = $_FILES['parameter163']['size'];
            $file_type = $_FILES['parameter163']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter163'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 52
    else if($act=='fungsi52'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter164 = $_POST['parameter164'];
        $parameter165 = $_POST['parameter165'];
        
        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter164' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter164'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter165' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter165'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter166']['name'];
            $file_loc = $_FILES['parameter166']['tmp_name'];
            $file_size = $_FILES['parameter166']['size'];
            $file_type = $_FILES['parameter166']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter166'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 53
    else if($act=='fungsi53'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter167 = $_POST['parameter167'];
        $parameter168 = $_POST['parameter168'];
        
        $update_berkas =  mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter167' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter167'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter168' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter168'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter169']['name'];
            $file_loc = $_FILES['parameter169']['tmp_name'];
            $file_size = $_FILES['parameter169']['size'];
            $file_type = $_FILES['parameter169']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter169'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 54
    else if($act=='fungsi54'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter170 = $_POST['parameter170'];
        $parameter171 = $_POST['parameter171'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter170' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter170'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter171' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter171'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter172']['name'];
            $file_loc = $_FILES['parameter172']['tmp_name'];
            $file_size = $_FILES['parameter172']['size'];
            $file_type = $_FILES['parameter172']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter172'
                ");
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 55
    else if($act=='fungsi55'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter173 = $_POST['parameter173'];
        $parameter174 = $_POST['parameter174'];
        $parameter175 = $_POST['parameter175'];

        $update_berkas =  mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter173' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter173'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter174' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter174'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter175' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter175'
            ");
        
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter176']['name'];
            $file_loc = $_FILES['parameter176']['tmp_name'];
            $file_size = $_FILES['parameter176']['size'];
            $file_type = $_FILES['parameter176']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter176'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 56
    else if($act=='fungsi56'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter177 = $_POST['parameter177'];
        $parameter178 = $_POST['parameter178'];
        $parameter179 = $_POST['parameter179'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter177' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter177'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter178' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter178'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter179' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter179'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter180']['name'];
            $file_loc = $_FILES['parameter180']['tmp_name'];
            $file_size = $_FILES['parameter180']['size'];
            $file_type = $_FILES['parameter180']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter180'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 57
    else if($act=='fungsi57'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter181 = $_POST['parameter181'];
        $parameter182 = $_POST['parameter182'];
        $parameter183 = $_POST['parameter183'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter181' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter181'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter182' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter182'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter183' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter183'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter184']['name'];
            $file_loc = $_FILES['parameter184']['tmp_name'];
            $file_size = $_FILES['parameter184']['size'];
            $file_type = $_FILES['parameter184']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter184'
                "); 
            }
        }        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 58
    else if($act=='fungsi58'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter185 = $_POST['parameter185'];
        $parameter186 = $_POST['parameter186'];
        $parameter187 = $_POST['parameter187'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter185' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter185'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter186' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter186'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter187' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter187'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter188']['name'];
            $file_loc = $_FILES['parameter188']['tmp_name'];
            $file_size = $_FILES['parameter188']['size'];
            $file_type = $_FILES['parameter188']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter188'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 59
    else if($act=='fungsi59'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter189 = $_POST['parameter189'];
        $parameter190 = $_POST['parameter190'];
        $parameter191 = $_POST['parameter191'];

        $update_berkas =mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter189' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter189'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter190' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter190'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter191' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter191'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter192']['name'];
            $file_loc = $_FILES['parameter192']['tmp_name'];
            $file_size = $_FILES['parameter192']['size'];
            $file_type = $_FILES['parameter192']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter192'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 60
    else if($act=='fungsi60'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter193 = $_POST['parameter193'];
        $parameter194 = $_POST['parameter194'];
        $parameter195 = $_POST['parameter195'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter193' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter193'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter194' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter194'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter195' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter195'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter196']['name'];
            $file_loc = $_FILES['parameter196']['tmp_name'];
            $file_size = $_FILES['parameter196']['size'];
            $file_type = $_FILES['parameter196']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter196'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 61
    else if($act=='fungsi61'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter197 = $_POST['parameter197'];
        $parameter198 = $_POST['parameter198'];
        $parameter199 = $_POST['parameter199'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter197' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter197'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter198' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter198'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter199' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter199'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter200']['name'];
            $file_loc = $_FILES['parameter200']['tmp_name'];
            $file_size = $_FILES['parameter200']['size'];
            $file_type = $_FILES['parameter200']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter200'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 62
    else if($act=='fungsi62'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter201 = $_POST['parameter201'];
        $parameter202 = $_POST['parameter202'];
        $parameter203 = $_POST['parameter203'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter201' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter201'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter202' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter202'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter203' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter203'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter204']['name'];
            $file_loc = $_FILES['parameter204']['tmp_name'];
            $file_size = $_FILES['parameter204']['size'];
            $file_type = $_FILES['parameter204']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter204'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 63
    else if($act=='fungsi63'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter205 = $_POST['parameter205'];
        $parameter206 = $_POST['parameter206'];
        $parameter207 = $_POST['parameter207'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter205' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter205'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter206' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter206'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter207' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter207'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter208']['name'];
            $file_loc = $_FILES['parameter208']['tmp_name'];
            $file_size = $_FILES['parameter208']['size'];
            $file_type = $_FILES['parameter208']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter208'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 64
    else if($act=='fungsi64'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter209 = $_POST['parameter209'];
        $parameter210 = $_POST['parameter210'];
        $parameter211 = $_POST['parameter211'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter209' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter209'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter210' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter210'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter211' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter211'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter212']['name'];
            $file_loc = $_FILES['parameter212']['tmp_name'];
            $file_size = $_FILES['parameter212']['size'];
            $file_type = $_FILES['parameter212']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter212'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 65
    else if($act=='fungsi65'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter213 = $_POST['parameter213'];
        $parameter214 = $_POST['parameter214'];
        $parameter215 = $_POST['parameter215'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter213' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter213'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter214' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter214'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter215' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter215'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter216']['name'];
            $file_loc = $_FILES['parameter216']['tmp_name'];
            $file_size = $_FILES['parameter216']['size'];
            $file_type = $_FILES['parameter216']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter216'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 66
    else if($act=='fungsi66'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter217 = $_POST['parameter217'];
        $parameter218 = $_POST['parameter218'];
        $parameter219 = $_POST['parameter219'];

        $update_berkas =mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter217' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter217'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter218' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter218'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter219' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter219'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter220']['name'];
            $file_loc = $_FILES['parameter220']['tmp_name'];
            $file_size = $_FILES['parameter220']['size'];
            $file_type = $_FILES['parameter220']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter220'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 67
    else if($act=='fungsi67'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter221 = $_POST['parameter221'];
        $parameter222 = $_POST['parameter222'];
        $parameter223 = $_POST['parameter223'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter221' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter221'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter222' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter222'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter223' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter223'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter224']['name'];
            $file_loc = $_FILES['parameter224']['tmp_name'];
            $file_size = $_FILES['parameter224']['size'];
            $file_type = $_FILES['parameter224']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter224'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 68
    else if($act=='fungsi68'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter225 = $_POST['parameter225'];
        $parameter226 = $_POST['parameter226'];
        $parameter227 = $_POST['parameter227'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter225' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter225'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter226' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter226'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter227' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter227'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter228']['name'];
            $file_loc = $_FILES['parameter228']['tmp_name'];
            $file_size = $_FILES['parameter228']['size'];
            $file_type = $_FILES['parameter228']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter228'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 69
    else if($act=='fungsi69'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter229 = $_POST['parameter229'];
        $parameter230 = $_POST['parameter230'];
        $parameter231 = $_POST['parameter231'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter229' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter229'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter230' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter230'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter231' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter231'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter232']['name'];
            $file_loc = $_FILES['parameter232']['tmp_name'];
            $file_size = $_FILES['parameter232']['size'];
            $file_type = $_FILES['parameter232']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter232'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 70
    else if($act=='fungsi70'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter233 = $_POST['parameter233'];
        $parameter234 = $_POST['parameter234'];
        $parameter235 = $_POST['parameter235'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter233' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter233'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter234' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter234'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter235' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter235'
            ");
        
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter236']['name'];
            $file_loc = $_FILES['parameter236']['tmp_name'];
            $file_size = $_FILES['parameter236']['size'];
            $file_type = $_FILES['parameter236']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter236'
                "); 
            }
        }        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 71
    else if($act=='fungsi71'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter237 = $_POST['parameter237'];
        $parameter238 = $_POST['parameter238'];
        $parameter239 = $_POST['parameter239'];

        $update_berkas =  mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter237' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter237'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter238' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter238'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter239' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter239'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter240']['name'];
            $file_loc = $_FILES['parameter240']['tmp_name'];
            $file_size = $_FILES['parameter240']['size'];
            $file_type = $_FILES['parameter240']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter240'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 72
    else if($act=='fungsi72'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter241 = $_POST['parameter241'];
        $parameter242 = $_POST['parameter242'];
        $parameter243 = $_POST['parameter243'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter241' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter241'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter242' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter242'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter243' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter243'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter244']['name'];
            $file_loc = $_FILES['parameter244']['tmp_name'];
            $file_size = $_FILES['parameter244']['size'];
            $file_type = $_FILES['parameter244']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter244'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 73
    else if($act=='fungsi73'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter245 = $_POST['parameter245'];
        $parameter246 = $_POST['parameter246'];
        $parameter247 = $_POST['parameter247'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter245' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter245'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter246' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter246'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter247' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter247'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter248']['name'];
            $file_loc = $_FILES['parameter248']['tmp_name'];
            $file_size = $_FILES['parameter248']['size'];
            $file_type = $_FILES['parameter248']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter248'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 74
    else if($act=='fungsi74'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter249 = $_POST['parameter249'];
        $parameter250 = $_POST['parameter250'];
        $parameter251 = $_POST['parameter251'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter249' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter249'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter250' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter250'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter251' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter251'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter252']['name'];
            $file_loc = $_FILES['parameter252']['tmp_name'];
            $file_size = $_FILES['parameter252']['size'];
            $file_type = $_FILES['parameter252']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter252'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 75
    else if($act=='fungsi75'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter253 = $_POST['parameter253'];
        $parameter254 = $_POST['parameter254'];
        $parameter255 = $_POST['parameter255'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter253' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter253'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter254' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter254'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter255' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter255'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter256']['name'];
            $file_loc = $_FILES['parameter256']['tmp_name'];
            $file_size = $_FILES['parameter256']['size'];
            $file_type = $_FILES['parameter256']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter256'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 76
    else if($act=='fungsi76'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter257 = $_POST['parameter257'];
        $parameter258 = $_POST['parameter258'];
        $parameter259 = $_POST['parameter259'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter257' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter257'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter258' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter258'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter259' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter259'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter260']['name'];
            $file_loc = $_FILES['parameter260']['tmp_name'];
            $file_size = $_FILES['parameter260']['size'];
            $file_type = $_FILES['parameter260']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter260'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 77
    else if($act=='fungsi77'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter261 = $_POST['parameter261'];
        $parameter262 = $_POST['parameter262'];
        $parameter263 = $_POST['parameter263'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter261' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter261'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter262' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter262'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter263' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter263'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter264']['name'];
            $file_loc = $_FILES['parameter264']['tmp_name'];
            $file_size = $_FILES['parameter264']['size'];
            $file_type = $_FILES['parameter264']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter264'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 78
    else if($act=='fungsi78'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter265 = $_POST['parameter265'];
        $parameter266 = $_POST['parameter266'];
        $parameter267 = $_POST['parameter267'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter265' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter265'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter266' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter266'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter267' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter267'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter268']['name'];
            $file_loc = $_FILES['parameter268']['tmp_name'];
            $file_size = $_FILES['parameter268']['size'];
            $file_type = $_FILES['parameter268']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter268'
                "); 
            }
        } 
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 79
    else if($act=='fungsi79'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter269 = $_POST['parameter269'];
        $parameter270 = $_POST['parameter270'];
        $parameter271 = $_POST['parameter271'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter269' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter269'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter270' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter270'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter271' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter271'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter272']['name'];
            $file_loc = $_FILES['parameter272']['tmp_name'];
            $file_size = $_FILES['parameter272']['size'];
            $file_type = $_FILES['parameter272']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter272'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 80
    else if($act=='fungsi80'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter273 = $_POST['parameter273'];
        $parameter274 = $_POST['parameter274'];
        $parameter275 = $_POST['parameter275'];

        $update_berkas =mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter273' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter273'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter274' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter274'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter275' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter275'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter276']['name'];
            $file_loc = $_FILES['parameter276']['tmp_name'];
            $file_size = $_FILES['parameter276']['size'];
            $file_type = $_FILES['parameter276']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter276'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 81
    else if($act=='fungsi81'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter277 = $_POST['parameter277'];
        $parameter278 = $_POST['parameter278'];
        $parameter279 = $_POST['parameter279'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter277' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter277'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter278' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter278'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter279' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter279'
            ");
        
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter280']['name'];
            $file_loc = $_FILES['parameter280']['tmp_name'];
            $file_size = $_FILES['parameter280']['size'];
            $file_type = $_FILES['parameter280']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter280'
                "); 
            }
        }        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 82
    else if($act=='fungsi82'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter281 = $_POST['parameter281'];
        $parameter282 = $_POST['parameter282'];
        $parameter283 = $_POST['parameter283'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter281' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter281'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter282' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter282'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter283' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter283'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter284']['name'];
            $file_loc = $_FILES['parameter284']['tmp_name'];
            $file_size = $_FILES['parameter284']['size'];
            $file_type = $_FILES['parameter284']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter284'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 83
    else if($act=='fungsi83'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter285 = $_POST['parameter285'];
        $parameter286 = $_POST['parameter286'];
        $parameter287 = $_POST['parameter287'];

        $update_berkas =mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter285' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter285'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter286' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter286'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter287' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter287'
            ");
        
        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter288']['name'];
            $file_loc = $_FILES['parameter288']['tmp_name'];
            $file_size = $_FILES['parameter288']['size'];
            $file_type = $_FILES['parameter288']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                
                
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter288'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 84
    else if($act=='fungsi84'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter289 = $_POST['parameter289'];
        $parameter290 = $_POST['parameter290'];
        $parameter291 = $_POST['parameter291'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter289' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter289'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter290' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter290'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter291' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter291'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter292']['name'];
            $file_loc = $_FILES['parameter292']['tmp_name'];
            $file_size = $_FILES['parameter292']['size'];
            $file_type = $_FILES['parameter292']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter292'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 85
    else if($act=='fungsi85'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter293 = $_POST['parameter293'];
        $parameter294 = $_POST['parameter294'];
        $parameter295 = $_POST['parameter295'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter293' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter293'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter294' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter294'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter295' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter295'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter296']['name'];
            $file_loc = $_FILES['parameter296']['tmp_name'];
            $file_size = $_FILES['parameter296']['size'];
            $file_type = $_FILES['parameter296']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' WHERE berkas_nik='$nik' AND berkas_semester='$semester' AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter296'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 86
    else if($act=='fungsi86'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter297 = $_POST['parameter297'];
        $parameter298 = $_POST['parameter298'];
        $parameter299 = $_POST['parameter299'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter297' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter297'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter298' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter298'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter299' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter299'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter300']['name'];
            $file_loc = $_FILES['parameter300']['tmp_name'];
            $file_size = $_FILES['parameter300']['size'];
            $file_type = $_FILES['parameter300']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter300'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 87
    else if($act=='fungsi87'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter301 = $_POST['parameter301'];
        $parameter302 = $_POST['parameter302'];
        $parameter303 = $_POST['parameter303'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter301' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter301'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter302' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter302'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter303' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter303'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter304']['name'];
            $file_loc = $_FILES['parameter304']['tmp_name'];
            $file_size = $_FILES['parameter304']['size'];
            $file_type = $_FILES['parameter304']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter304'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 88
    else if($act=='fungsi88'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter305 = $_POST['parameter305'];
        $parameter306 = $_POST['parameter306'];
        $parameter307 = $_POST['parameter307'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter305' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter305'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter306' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter306'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter307' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter307'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter308']['name'];
            $file_loc = $_FILES['parameter308']['tmp_name'];
            $file_size = $_FILES['parameter308']['size'];
            $file_type = $_FILES['parameter308']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter308'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 89
    else if($act=='fungsi89'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter309 = $_POST['parameter309'];
        $parameter310 = $_POST['parameter310'];
        $parameter311 = $_POST['parameter311'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter309' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter309'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter310' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter310'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter311' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter311'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter312']['name'];
            $file_loc = $_FILES['parameter312']['tmp_name'];
            $file_size = $_FILES['parameter312']['size'];
            $file_type = $_FILES['parameter312']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter312'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 90
    else if($act=='fungsi90'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter313 = $_POST['parameter313'];
        $parameter314 = $_POST['parameter314'];
        $parameter315 = $_POST['parameter315'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter313' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter313'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter314' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter314'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter315' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter315'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter316']['name'];
            $file_loc = $_FILES['parameter316']['tmp_name'];
            $file_size = $_FILES['parameter316']['size'];
            $file_type = $_FILES['parameter316']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter316'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 91
    else if($act=='fungsi91'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter317 = $_POST['parameter317'];
        $parameter318 = $_POST['parameter318'];
        $parameter319 = $_POST['parameter319'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter317' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter317'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter318' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter318'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter319' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter319'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter320']['name'];
            $file_loc = $_FILES['parameter320']['tmp_name'];
            $file_size = $_FILES['parameter320']['size'];
            $file_type = $_FILES['parameter320']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter320'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 92
    else if($act=='fungsi92'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter321 = $_POST['parameter321'];
        $parameter322 = $_POST['parameter322'];
        $parameter323 = $_POST['parameter323'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter321' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter321'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter322' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter322'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter323' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter323'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter324']['name'];
            $file_loc = $_FILES['parameter324']['tmp_name'];
            $file_size = $_FILES['parameter324']['size'];
            $file_type = $_FILES['parameter324']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter324'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 93
    else if($act=='fungsi93'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter325 = $_POST['parameter325'];
        $parameter326 = $_POST['parameter326'];
        $parameter327 = $_POST['parameter327'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter325' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter325'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter326' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter326'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter327' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter327'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter328']['name'];
            $file_loc = $_FILES['parameter328']['tmp_name'];
            $file_size = $_FILES['parameter328']['size'];
            $file_type = $_FILES['parameter328']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter328'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 94
    else if($act=='fungsi94'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter329 = $_POST['parameter329'];
        $parameter330 = $_POST['parameter330'];
        $parameter331 = $_POST['parameter331'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter329' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter329'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter330' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter330'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter331' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter331'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter332']['name'];
            $file_loc = $_FILES['parameter332']['tmp_name'];
            $file_size = $_FILES['parameter332']['size'];
            $file_type = $_FILES['parameter332']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter332'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 95
    else if($act=='fungsi95'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter329 = $_POST['parameter333'];
        $parameter330 = $_POST['parameter334'];
        $parameter331 = $_POST['parameter335'];

        $update_berkas = mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter333' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter333'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter334' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter334'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter335' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter335'
            ");

        if($update_berkas){
            $file = rand(1000,100000)."-".$_FILES['parameter336']['name'];
            $file_loc = $_FILES['parameter336']['tmp_name'];
            $file_size = $_FILES['parameter336']['size'];
            $file_type = $_FILES['parameter336']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter336'
                "); 
            }
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 96
    else if($act=='fungsi96'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter337 = $_POST['parameter337'];
        $parameter338 = $_POST['parameter338'];
        $parameter339 = $_POST['parameter339'];
        
        $file = rand(1000,100000)."-".$_FILES['parameter340']['name'];
        $file_loc = $_FILES['parameter340']['tmp_name'];
        $file_size = $_FILES['parameter340']['size'];
        $file_type = $_FILES['parameter340']['type'];
        $folder="berkas/";
        
        // new file size in KB
        $new_size = $file_size/1024;  
        // new file size in KB
        
        // make file name in lower case
        $new_file_name = strtolower($file);
        // make file name in lower case
        
        $final_file=str_replace(' ','-',$new_file_name);
        
        if(move_uploaded_file($file_loc,$folder.$final_file))
        {
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter337' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter337'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter338' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter338'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter339' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter339'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter340'
            "); 
        }
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 97
    else if($act=='fungsi97'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter341 = $_POST['parameter341'];
        $parameter342 = $_POST['parameter342'];
        $parameter343 = $_POST['parameter343'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter341' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter341'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter342' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter342'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter343' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter343'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter344']['name'];
            $file_loc = $_FILES['parameter344']['tmp_name'];
            $file_size = $_FILES['parameter344']['size'];
            $file_type = $_FILES['parameter344']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter344'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 98
    else if($act=='fungsi98'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter345 = $_POST['parameter345'];
        $parameter346 = $_POST['parameter346'];
        $parameter347 = $_POST['parameter347'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter345' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter345'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter346' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter346'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter347' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter347'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter348']['name'];
            $file_loc = $_FILES['parameter348']['tmp_name'];
            $file_size = $_FILES['parameter348']['size'];
            $file_type = $_FILES['parameter348']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter348'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 100
    else if($act=='fungsi100'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter353 = $_POST['parameter353'];
        $parameter354 = $_POST['parameter354'];
        $parameter355 = $_POST['parameter355'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter353' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter353'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter354' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter354'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter355' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter355'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter356']['name'];
            $file_loc = $_FILES['parameter356']['tmp_name'];
            $file_size = $_FILES['parameter356']['size'];
            $file_type = $_FILES['parameter356']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter356'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 101
    else if($act=='fungsi101'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter357 = $_POST['parameter357'];
        $parameter358 = $_POST['parameter358'];
        $parameter359 = $_POST['parameter359'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter357' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter357'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter358' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter358'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter359' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter359'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter360']['name'];
            $file_loc = $_FILES['parameter360']['tmp_name'];
            $file_size = $_FILES['parameter360']['size'];
            $file_type = $_FILES['parameter360']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter360'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 102
    else if($act=='fungsi102'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter361 = $_POST['parameter361'];
        $parameter362 = $_POST['parameter362'];
        $parameter363 = $_POST['parameter363'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter361' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter361'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter362' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter362'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter363' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter363'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter364']['name'];
            $file_loc = $_FILES['parameter364']['tmp_name'];
            $file_size = $_FILES['parameter364']['size'];
            $file_type = $_FILES['parameter364']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter364'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 103
    else if($act=='fungsi103'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter365 = $_POST['parameter365'];
        $parameter366 = $_POST['parameter366'];
        $parameter367 = $_POST['parameter367'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter365' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter365'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter366' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter366'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter367' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter367'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter368']['name'];
            $file_loc = $_FILES['parameter368']['tmp_name'];
            $file_size = $_FILES['parameter368']['size'];
            $file_type = $_FILES['parameter368']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter368'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 104
    else if($act=='fungsi104'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter369 = $_POST['parameter369'];
        $parameter370 = $_POST['parameter370'];
        $parameter371 = $_POST['parameter371'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter369' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter369'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter370' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter370'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter371' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter371'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter372']['name'];
            $file_loc = $_FILES['parameter372']['tmp_name'];
            $file_size = $_FILES['parameter372']['size'];
            $file_type = $_FILES['parameter372']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter372'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 105
    else if($act=='fungsi105'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter373 = $_POST['parameter373'];
        $parameter374 = $_POST['parameter374'];
        $parameter375 = $_POST['parameter375'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter373' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter373'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter374' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter374'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter375' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter375'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter376']['name'];
            $file_loc = $_FILES['parameter376']['tmp_name'];
            $file_size = $_FILES['parameter376']['size'];
            $file_type = $_FILES['parameter376']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter376'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 106
    else if($act=='fungsi106'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter377 = $_POST['parameter377'];
        $parameter378 = $_POST['parameter378'];
        $parameter379 = $_POST['parameter379'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter377' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter377'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter378' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter378'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter379' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter379'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter380']['name'];
            $file_loc = $_FILES['parameter380']['tmp_name'];
            $file_size = $_FILES['parameter380']['size'];
            $file_type = $_FILES['parameter380']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter380'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 107
    else if($act=='fungsi107'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter381 = $_POST['parameter381'];
        $parameter382 = $_POST['parameter382'];
        $parameter383 = $_POST['parameter383'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter381' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter381'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter382' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter382'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter383' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter383'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter384']['name'];
            $file_loc = $_FILES['parameter384']['tmp_name'];
            $file_size = $_FILES['parameter384']['size'];
            $file_type = $_FILES['parameter384']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter384'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 108
    else if($act=='fungsi108'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter385 = $_POST['parameter385'];
        $parameter386 = $_POST['parameter386'];
        $parameter387 = $_POST['parameter387'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter385' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter385'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter386' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter386'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter387' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter387'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter388']['name'];
            $file_loc = $_FILES['parameter388']['tmp_name'];
            $file_size = $_FILES['parameter388']['size'];
            $file_type = $_FILES['parameter388']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter388'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 109
    else if($act=='fungsi109'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter389 = $_POST['parameter389'];
        $parameter390 = $_POST['parameter390'];
        $parameter391 = $_POST['parameter391'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter389' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter389'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter390' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter390'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter391' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter391'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter392']['name'];
            $file_loc = $_FILES['parameter392']['tmp_name'];
            $file_size = $_FILES['parameter392']['size'];
            $file_type = $_FILES['parameter392']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter392'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 110
    else if($act=='fungsi110'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter393 = $_POST['parameter393'];
        $parameter394 = $_POST['parameter394'];
        $parameter395 = $_POST['parameter395'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter393' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter393'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter394' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter394'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter395' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter395'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter396']['name'];
            $file_loc = $_FILES['parameter396']['tmp_name'];
            $file_size = $_FILES['parameter396']['size'];
            $file_type = $_FILES['parameter396']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter396'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 111
    else if($act=='fungsi111'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter397 = $_POST['parameter397'];
        $parameter398 = $_POST['parameter398'];
        $parameter399 = $_POST['parameter399'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter397' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter397'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter398' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter398'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter399' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter399'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter400']['name'];
            $file_loc = $_FILES['parameter400']['tmp_name'];
            $file_size = $_FILES['parameter400']['size'];
            $file_type = $_FILES['parameter400']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter400'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 112
    else if($act=='fungsi112'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter401 = $_POST['parameter401'];
        $parameter402 = $_POST['parameter402'];
        $parameter403 = $_POST['parameter403'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter401' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter401'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter402' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter402'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter403' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter403'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter404']['name'];
            $file_loc = $_FILES['parameter404']['tmp_name'];
            $file_size = $_FILES['parameter404']['size'];
            $file_type = $_FILES['parameter404']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter404'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 113
    else if($act=='fungsi113'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter405 = $_POST['parameter405'];
        $parameter406 = $_POST['parameter406'];
        $parameter407 = $_POST['parameter407'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter405' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter405'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter406' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter406'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter407' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter407'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter408']['name'];
            $file_loc = $_FILES['parameter408']['tmp_name'];
            $file_size = $_FILES['parameter408']['size'];
            $file_type = $_FILES['parameter408']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter408'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 114
    else if($act=='fungsi114'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter409 = $_POST['parameter409'];
        $parameter410 = $_POST['parameter410'];
        $parameter411 = $_POST['parameter411'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter409' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter409'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter410' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter410'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter411' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter411'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter412']['name'];
            $file_loc = $_FILES['parameter412']['tmp_name'];
            $file_size = $_FILES['parameter412']['size'];
            $file_type = $_FILES['parameter412']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter412'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 115
    else if($act=='fungsi115'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter413 = $_POST['parameter413'];
        $parameter414 = $_POST['parameter414'];
        $parameter415 = $_POST['parameter415'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter413' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter413'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter414' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter414'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter415' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter415'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter416']['name'];
            $file_loc = $_FILES['parameter416']['tmp_name'];
            $file_size = $_FILES['parameter416']['size'];
            $file_type = $_FILES['parameter416']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter416'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 116
    else if($act=='fungsi116'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter417 = $_POST['parameter417'];
        $parameter418 = $_POST['parameter418'];
        $parameter419 = $_POST['parameter419'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter417' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter417'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter418' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter418'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter419' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter419'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter420']['name'];
            $file_loc = $_FILES['parameter420']['tmp_name'];
            $file_size = $_FILES['parameter420']['size'];
            $file_type = $_FILES['parameter420']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter420'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 117
    else if($act=='fungsi117'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter421 = $_POST['parameter421'];
        $parameter422 = $_POST['parameter422'];
        $parameter423 = $_POST['parameter423'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter421' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter421'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter422' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter422'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter423' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter423'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter424']['name'];
            $file_loc = $_FILES['parameter424']['tmp_name'];
            $file_size = $_FILES['parameter424']['size'];
            $file_type = $_FILES['parameter424']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter424'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 118
    else if($act=='fungsi118'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter425 = $_POST['parameter425'];
        $parameter426 = $_POST['parameter426'];
        $parameter427 = $_POST['parameter427'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter425' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter425'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter426' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter426'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter427' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter427'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter428']['name'];
            $file_loc = $_FILES['parameter428']['tmp_name'];
            $file_size = $_FILES['parameter428']['size'];
            $file_type = $_FILES['parameter428']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter428'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 119
    else if($act=='fungsi119'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter429 = $_POST['parameter429'];
        $parameter430 = $_POST['parameter430'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter429' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter429'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter430' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter430'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter431']['name'];
            $file_loc = $_FILES['parameter431']['tmp_name'];
            $file_size = $_FILES['parameter431']['size'];
            $file_type = $_FILES['parameter431']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter431'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 120
    else if($act=='fungsi120'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter432 = $_POST['parameter432'];
        $parameter433 = $_POST['parameter433'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter432' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter432'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter433' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter433'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter434']['name'];
            $file_loc = $_FILES['parameter434']['tmp_name'];
            $file_size = $_FILES['parameter434']['size'];
            $file_type = $_FILES['parameter434']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter434'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 121
    else if($act=='fungsi121'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter435 = $_POST['parameter435'];
        $parameter436 = $_POST['parameter436'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter435' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter435'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter436' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter436'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter437']['name'];
            $file_loc = $_FILES['parameter437']['tmp_name'];
            $file_size = $_FILES['parameter437']['size'];
            $file_type = $_FILES['parameter437']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter437'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 122
    else if($act=='fungsi122'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter438 = $_POST['parameter438'];
        $parameter439 = $_POST['parameter439'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter438' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter438'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter439' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter439'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter440']['name'];
            $file_loc = $_FILES['parameter440']['tmp_name'];
            $file_size = $_FILES['parameter440']['size'];
            $file_type = $_FILES['parameter440']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter440'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 123
    else if($act=='fungsi123'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter441 = $_POST['parameter441'];
        $parameter442 = $_POST['parameter442'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter441' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter441'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter442' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter442'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter443']['name'];
            $file_loc = $_FILES['parameter443']['tmp_name'];
            $file_size = $_FILES['parameter443']['size'];
            $file_type = $_FILES['parameter443']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter443'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 124
    else if($act=='fungsi124'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter444 = $_POST['parameter444'];
        $parameter445 = $_POST['parameter445'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter444' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter444'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter445' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter445'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter446']['name'];
            $file_loc = $_FILES['parameter446']['tmp_name'];
            $file_size = $_FILES['parameter446']['size'];
            $file_type = $_FILES['parameter446']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter446'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 125
    else if($act=='fungsi125'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter447 = $_POST['parameter447'];
        $parameter448 = $_POST['parameter448'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter447' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter447'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter448' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter448'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter449']['name'];
            $file_loc = $_FILES['parameter449']['tmp_name'];
            $file_size = $_FILES['parameter449']['size'];
            $file_type = $_FILES['parameter449']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter449'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 126
    else if($act=='fungsi126'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter450 = $_POST['parameter450'];
        $parameter451 = $_POST['parameter451'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter450' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter450'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter451' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter451'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter452']['name'];
            $file_loc = $_FILES['parameter452']['tmp_name'];
            $file_size = $_FILES['parameter452']['size'];
            $file_type = $_FILES['parameter452']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter452'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 127
    else if($act=='fungsi127'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter453 = $_POST['parameter453'];
        $parameter454 = $_POST['parameter454'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter453' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter453'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter454' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter454'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter455']['name'];
            $file_loc = $_FILES['parameter455']['tmp_name'];
            $file_size = $_FILES['parameter455']['size'];
            $file_type = $_FILES['parameter455']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter455'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 128
    else if($act=='fungsi128'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter456 = $_POST['parameter456'];
        $parameter457 = $_POST['parameter457'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter456' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter456'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter457' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter457'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter458']['name'];
            $file_loc = $_FILES['parameter458']['tmp_name'];
            $file_size = $_FILES['parameter458']['size'];
            $file_type = $_FILES['parameter458']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter458'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 129
    else if($act=='fungsi129'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter459 = $_POST['parameter459'];
        $parameter460 = $_POST['parameter460'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter459' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter459'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter460' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter460'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter461']['name'];
            $file_loc = $_FILES['parameter461']['tmp_name'];
            $file_size = $_FILES['parameter461']['size'];
            $file_type = $_FILES['parameter461']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter461'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 130
    else if($act=='fungsi130'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter462 = $_POST['parameter462'];
        $parameter463 = $_POST['parameter463'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter462' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter462'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter463' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter463'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter464']['name'];
            $file_loc = $_FILES['parameter464']['tmp_name'];
            $file_size = $_FILES['parameter464']['size'];
            $file_type = $_FILES['parameter464']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter464'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 131
    else if($act=='fungsi131'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter465 = $_POST['parameter465'];
        $parameter466 = $_POST['parameter466'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter465' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter465'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter466' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter466'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter467']['name'];
            $file_loc = $_FILES['parameter467']['tmp_name'];
            $file_size = $_FILES['parameter467']['size'];
            $file_type = $_FILES['parameter467']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter467'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 132
    else if($act=='fungsi132'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter468 = $_POST['parameter468'];
        $parameter469 = $_POST['parameter469'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter468' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter468'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter469' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter469'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter470']['name'];
            $file_loc = $_FILES['parameter470']['tmp_name'];
            $file_size = $_FILES['parameter470']['size'];
            $file_type = $_FILES['parameter470']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter470'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 133
    else if($act=='fungsi133'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter471 = $_POST['parameter471'];
        $parameter472 = $_POST['parameter472'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter471' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter471'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter472' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter472'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter473']['name'];
            $file_loc = $_FILES['parameter473']['tmp_name'];
            $file_size = $_FILES['parameter473']['size'];
            $file_type = $_FILES['parameter473']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter473'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 134
    else if($act=='fungsi134'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter474 = $_POST['parameter474'];
        $parameter475 = $_POST['parameter475'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter474' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter474'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter475' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter475'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter476']['name'];
            $file_loc = $_FILES['parameter476']['tmp_name'];
            $file_size = $_FILES['parameter476']['size'];
            $file_type = $_FILES['parameter476']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter476'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 135
    else if($act=='fungsi135'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter477 = $_POST['parameter477'];
        $parameter478 = $_POST['parameter478'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter477' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter477'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter478' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter478'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter479']['name'];
            $file_loc = $_FILES['parameter479']['tmp_name'];
            $file_size = $_FILES['parameter479']['size'];
            $file_type = $_FILES['parameter479']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter479'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 136
    else if($act=='fungsi136'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter480 = $_POST['parameter480'];
        $parameter481 = $_POST['parameter481'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter480' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter480'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter481' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter481'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter482']['name'];
            $file_loc = $_FILES['parameter482']['tmp_name'];
            $file_size = $_FILES['parameter482']['size'];
            $file_type = $_FILES['parameter482']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter482'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 137
    else if($act=='fungsi137'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter483 = $_POST['parameter483'];
        $parameter484 = $_POST['parameter484'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter483' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter483'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter484' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter484'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter485']['name'];
            $file_loc = $_FILES['parameter485']['tmp_name'];
            $file_size = $_FILES['parameter485']['size'];
            $file_type = $_FILES['parameter485']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter485'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 138
    else if($act=='fungsi138'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter486 = $_POST['parameter486'];
        $parameter487 = $_POST['parameter487'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter486' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter486'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter487' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter487'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter488']['name'];
            $file_loc = $_FILES['parameter488']['tmp_name'];
            $file_size = $_FILES['parameter488']['size'];
            $file_type = $_FILES['parameter488']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter488'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 139
    else if($act=='fungsi139'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter489 = $_POST['parameter489'];
        $parameter490 = $_POST['parameter490'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter489' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter489'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter490' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter490'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter491']['name'];
            $file_loc = $_FILES['parameter491']['tmp_name'];
            $file_size = $_FILES['parameter491']['size'];
            $file_type = $_FILES['parameter491']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter491'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 140
    else if($act=='fungsi140'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter492 = $_POST['parameter492'];
        $parameter493 = $_POST['parameter493'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter492' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter492'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter493' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter493'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter494']['name'];
            $file_loc = $_FILES['parameter494']['tmp_name'];
            $file_size = $_FILES['parameter494']['size'];
            $file_type = $_FILES['parameter494']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter494'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 141
    else if($act=='fungsi141'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter495 = $_POST['parameter495'];
        $parameter496 = $_POST['parameter496'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter495' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter495'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter496' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter496'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter497']['name'];
            $file_loc = $_FILES['parameter497']['tmp_name'];
            $file_size = $_FILES['parameter497']['size'];
            $file_type = $_FILES['parameter497']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter497'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 142
    else if($act=='fungsi142'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter498 = $_POST['parameter498'];
        $parameter499 = $_POST['parameter499'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter498' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter498'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter499' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter499'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter500']['name'];
            $file_loc = $_FILES['parameter500']['tmp_name'];
            $file_size = $_FILES['parameter500']['size'];
            $file_type = $_FILES['parameter500']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter500'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 143
    else if($act=='fungsi143'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter501 = $_POST['parameter501'];
        $parameter502 = $_POST['parameter502'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter501' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter501'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter502' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter502'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter503']['name'];
            $file_loc = $_FILES['parameter503']['tmp_name'];
            $file_size = $_FILES['parameter503']['size'];
            $file_type = $_FILES['parameter503']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter503'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 144
    else if($act=='fungsi144'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter504 = $_POST['parameter504'];
        $parameter505 = $_POST['parameter505'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter504' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter504'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter505' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter505'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter506']['name'];
            $file_loc = $_FILES['parameter506']['tmp_name'];
            $file_size = $_FILES['parameter506']['size'];
            $file_type = $_FILES['parameter506']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter506'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 145
    else if($act=='fungsi145'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter507 = $_POST['parameter507'];
        $parameter508 = $_POST['parameter508'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter507' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter507'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter508' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter508'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter509']['name'];
            $file_loc = $_FILES['parameter509']['tmp_name'];
            $file_size = $_FILES['parameter509']['size'];
            $file_type = $_FILES['parameter509']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter509'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 146
    else if($act=='fungsi146'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter510 = $_POST['parameter510'];
        $parameter511 = $_POST['parameter511'];
        $parameter512 = $_POST['parameter512'];
        $parameter513 = $_POST['parameter513'];
        $parameter514 = $_POST['parameter514'];
        $parameter515 = $_POST['parameter515'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter510' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter510'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter511' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter511'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter512' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter512'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter513' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter513'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter514' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter514'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter515' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter515'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter516']['name'];
            $file_loc = $_FILES['parameter516']['tmp_name'];
            $file_size = $_FILES['parameter516']['size'];
            $file_type = $_FILES['parameter516']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter516'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 147
    else if($act=='fungsi147'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter517 = $_POST['parameter517'];
        $parameter518 = $_POST['parameter518'];
        $parameter519 = $_POST['parameter519'];
        $parameter520 = $_POST['parameter520'];
        $parameter521 = $_POST['parameter521'];
        $parameter522 = $_POST['parameter522'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter517' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter517'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter518' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter518'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter519' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter519'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter520' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter520'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter521' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter521'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter522' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter522'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter523']['name'];
            $file_loc = $_FILES['parameter523']['tmp_name'];
            $file_size = $_FILES['parameter523']['size'];
            $file_type = $_FILES['parameter523']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter523'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 148
    else if($act=='fungsi148'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter524 = $_POST['parameter524'];
        $parameter525 = $_POST['parameter525'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter524' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter524'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter525' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter525'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter526']['name'];
            $file_loc = $_FILES['parameter526']['tmp_name'];
            $file_size = $_FILES['parameter526']['size'];
            $file_type = $_FILES['parameter526']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter526'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 149
    else if($act=='fungsi149'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter527 = $_POST['parameter527'];
        $parameter528 = $_POST['parameter528'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter527' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter527'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter528' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter528'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter529']['name'];
            $file_loc = $_FILES['parameter529']['tmp_name'];
            $file_size = $_FILES['parameter529']['size'];
            $file_type = $_FILES['parameter529']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter529'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 150
    else if($act=='fungsi150'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter530 = $_POST['parameter530'];
        $parameter531 = $_POST['parameter531'];
        $parameter532 = $_POST['parameter532'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter530' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter530'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter531' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter531'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter532' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter532'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter533']['name'];
            $file_loc = $_FILES['parameter533']['tmp_name'];
            $file_size = $_FILES['parameter533']['size'];
            $file_type = $_FILES['parameter533']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter533'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 151
    else if($act=='fungsi151'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter534 = $_POST['parameter534'];
        $parameter535 = $_POST['parameter535'];
        $parameter536 = $_POST['parameter536'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter534' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter534'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter535' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter535'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter536' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter536'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter537']['name'];
            $file_loc = $_FILES['parameter537']['tmp_name'];
            $file_size = $_FILES['parameter537']['size'];
            $file_type = $_FILES['parameter537']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter537'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 152
    else if($act=='fungsi152'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter538 = $_POST['parameter538'];
        $parameter539 = $_POST['parameter539'];
        $parameter540 = $_POST['parameter540'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter538' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter538'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter539' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter539'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter540' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter540'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter541']['name'];
            $file_loc = $_FILES['parameter541']['tmp_name'];
            $file_size = $_FILES['parameter541']['size'];
            $file_type = $_FILES['parameter541']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter541'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 153
    else if($act=='fungsi153'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter542 = $_POST['parameter542'];
        $parameter543 = $_POST['parameter543'];
        $parameter544 = $_POST['parameter544'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter542' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter542'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter543' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter543'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter544' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter544'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter545']['name'];
            $file_loc = $_FILES['parameter545']['tmp_name'];
            $file_size = $_FILES['parameter545']['size'];
            $file_type = $_FILES['parameter545']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter545'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 154
    else if($act=='fungsi154'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter546 = $_POST['parameter546'];
        $parameter547 = $_POST['parameter547'];
        $parameter548 = $_POST['parameter548'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter546' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter546'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter547' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter547'
            ");
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter548' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter548'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter549']['name'];
            $file_loc = $_FILES['parameter549']['tmp_name'];
            $file_size = $_FILES['parameter549']['size'];
            $file_type = $_FILES['parameter549']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter549'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 155
    else if($act=='fungsi155'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter550 = $_POST['parameter550'];
        $parameter551 = $_POST['parameter551'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter550' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter550'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter551' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter551'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter552']['name'];
            $file_loc = $_FILES['parameter552']['tmp_name'];
            $file_size = $_FILES['parameter552']['size'];
            $file_type = $_FILES['parameter552']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter552'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 156
    else if($act=='fungsi156'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter553 = $_POST['parameter553'];
        $parameter554 = $_POST['parameter554'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter553' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter553'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter554' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter554'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter555']['name'];
            $file_loc = $_FILES['parameter555']['tmp_name'];
            $file_size = $_FILES['parameter555']['size'];
            $file_type = $_FILES['parameter555']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter555'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 157
    else if($act=='fungsi157'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter556 = $_POST['parameter556'];
        $parameter557 = $_POST['parameter557'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter556' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter556'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter557' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter557'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter558']['name'];
            $file_loc = $_FILES['parameter558']['tmp_name'];
            $file_size = $_FILES['parameter558']['size'];
            $file_type = $_FILES['parameter558']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter558'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 158
    else if($act=='fungsi158'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter559 = $_POST['parameter559'];
        $parameter560 = $_POST['parameter560'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter559' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter559'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter560' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter560'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter561']['name'];
            $file_loc = $_FILES['parameter561']['tmp_name'];
            $file_size = $_FILES['parameter561']['size'];
            $file_type = $_FILES['parameter561']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter561'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 159
    else if($act=='fungsi159'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter562 = $_POST['parameter562'];
        $parameter563 = $_POST['parameter563'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter562' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter562'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter563' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter563'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter564']['name'];
            $file_loc = $_FILES['parameter564']['tmp_name'];
            $file_size = $_FILES['parameter564']['size'];
            $file_type = $_FILES['parameter564']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter564'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 160
    else if($act=='fungsi160'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter565 = $_POST['parameter565'];
        $parameter566 = $_POST['parameter566'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter565' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter565'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter566' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter566'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter567']['name'];
            $file_loc = $_FILES['parameter567']['tmp_name'];
            $file_size = $_FILES['parameter567']['size'];
            $file_type = $_FILES['parameter567']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter567'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }
    
    //Upload Fungsi 161
    else if($act=='fungsi161'){
        $nik = $_POST['nik'];
        $semester = $_POST['semester'];
        $tahun_ajaran = $_POST['tahun_ajaran'];
        $parameter568 = $_POST['parameter568'];
        $parameter569 = $_POST['parameter569'];
        
        $update_berkas=mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter568' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter568'
            "); 
            
            mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$parameter569' 
            WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
            AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter569'
            ");
        
        if($update_berkas){
            
            $file = rand(1000,100000)."-".$_FILES['parameter570']['name'];
            $file_loc = $_FILES['parameter570']['tmp_name'];
            $file_size = $_FILES['parameter570']['size'];
            $file_type = $_FILES['parameter570']['type'];
            $folder="berkas/";
            
            // new file size in KB
            $new_size = $file_size/1024;  
            // new file size in KB
            
            // make file name in lower case
            $new_file_name = strtolower($file);
            // make file name in lower case
            
            $final_file=str_replace(' ','-',$new_file_name);
            
            if(move_uploaded_file($file_loc,$folder.$final_file))
            {
                mysql_query("UPDATE tbl_berkas SET keterangan_ekts='$final_file' 
                WHERE berkas_nik='$nik' AND berkas_semester='$semester' 
                AND berkas_tahun_ajaran='$tahun_ajaran' AND kategori_isianekts='parameter570'
                "); 
            }
            
        }
        
        ?>
            <script>
                alert('Data Anda Berhasil Di Perbaharui');
                window.location.href='ekts.php?semester=<?php echo $semester;?>&tahun_ajaran=<?php echo $tahun_ajaran;?>&nik=<?php echo $nik;?>';
            </script>
        <?php
    }

?>