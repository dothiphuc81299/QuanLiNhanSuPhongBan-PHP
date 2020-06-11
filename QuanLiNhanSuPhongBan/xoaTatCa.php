<?php 
ob_start();
	$mysql = new mysqli('localhost','root','','dulieu');
	$mysql->set_charset('utf8');
	$sql = "DELETE FROM nhanvien";
	$result= $mysql->query($sql);
	header('Location:xemthongtinNV1.php');
	ob_end_flush();
?>