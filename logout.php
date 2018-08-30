<?php  session_start();
if(isset($_SESSION['namauser']))
{
	session_destroy();
	header('Location:index.php?status=Anda sudah Keluar');
}else{
	session_destroy();
	header('Location:index.php?status=Silahkan Login!');
}
?>