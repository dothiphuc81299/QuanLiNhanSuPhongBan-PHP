<?php 
	ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./public/style.css">
</head>

<body>
    <header> <?php include "./includes/header.php"; ?></header>
    <div id="main">
        <article>	<?php
	$id = $_REQUEST['idpb'];
	$link = mysqli_connect("localhost","root","")or die("Could not connect to MySql Database");
	mysqli_select_db($link,"DULIEU");
	mysqli_set_charset($link, 'UTF8'); //hiển thị tiếng việt
	$sql = "SELECT *FROM nhanvien
	WHERE IDPB = '$id'";
	$result = mysqli_query($link,$sql);
	echo '<table border = "1" width = "100%">';
	echo '<caption>Du lieu bang nhan viên</caption>';
	
	echo '<tr><th>IDNV</th><th>Ho ten</th><th>IDPB</th><th>Địa chỉ</th></tr>';
	while($row = mysqli_fetch_assoc($result)){
		$idnv = $row['IDNV'];
		$hoten = $row['hoten'];
		$idpb = $row['IDPB'];
		$diachi = $row['diachi'];
		echo '<tr><td>'.$idnv.'</td><td>'.$hoten.'</td><td>'.$idpb.'</td><td>'.$diachi.'</td></tr>';
	}
	echo '</table>';
	mysqli_close($link);

?>
			</article>
        <nav> <?php include "./includes/navigation.php"; ?></nav>
        <!-- <aside>Aside</aside> -->
    </div>
    <footer> <?php include "./includes/footer.php"; ?></footer>
</body>

</html>
<?php ob_end_flush();?>