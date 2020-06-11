<?php 
	session_start();
	ob_start();
	$mysql = new mysqli('localhost','root','','dulieu');
	$mysql->set_charset('utf8');
	if(mysqli_connect_error()){
	echo 'Có lỗi kết nối database'.mysqli_connect_errno();
		}
	if(isset($_SESSION['check'])){
		$dem=0;
		foreach($_SESSION['check'] as $key){
			$sql = "DELETE FROM nhanvien WHERE IDNV = '$key'";
			if (mysqli_query($mysql, $sql)) {
				
				$dem=1;
				} else {
				echo "Lỗi: " . $sql . "<br>" . mysqli_error($mysql);
					}
		}
		if($dem==1){header('Location:xemthongtinNV1.php');}
	}
	
	$mysql->close();
	ob_end_flush();
?>