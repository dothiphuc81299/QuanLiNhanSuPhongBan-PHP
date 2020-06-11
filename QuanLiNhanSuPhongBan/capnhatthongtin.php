<?php 
	ob_start();
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8" />
    <style>


    </style>
    <link rel="stylesheet" type="text/css" href="./public/style.css">
</head>

<body>
    <header> <?php include "./includes/header.php"; ?></header>
    <div id="main">
        <article><?php 
	ob_start();
?>
            <div class="wrapper">
                <?php	
				$mysql = new mysqli('localhost','root','','dulieu');
				$mysql->set_charset('utf8');
				if(mysqli_connect_error()){
				echo 'Có lỗi kết nối database'.mysqli_connect_error();}
				// if(isset($_POST['CapNhat']))
				//  {
				// 	$idpb = $_POST['tenpb'];
				// 	$tenpb=$_POST['idpb'];
				// 	$rs= "UPDATE phongban set tenPB=' $tenpb' WHERE IDPB= '$idpb' ";
				// 	echo $rs;
				//  }
				if(isset($_POST['CapNhat']))
				 {
				 	$idpb = $_POST['idpb'];
					$tenpb=$_POST['tenpb'];
				$sql="UPDATE phongban set tenPB=' $tenpb' WHERE IDPB= 'PB1' ";
				// if ($mysql->query($sql) === TRUE) {
				// 	echo "update thành công";
				// } else {
				// 	echo "Update thất bại: " . $conn->error;
				// }
				if (mysqli_query($mysql, $sql)) {

					header('Location:xemthongtinNV1.php');}
											else {
					echo "Lỗi: " . $sql . "<br>" . mysqli_error($mysql);
													}
			}
			
				$mysql->close();
			?>
               
            </div>

        </article>
        <nav> <?php include "./includes/navigation.php"; ?></nav>
        <!-- <aside>Aside</aside> -->
    </div>
    <footer> <?php include "./includes/footer.php"; ?></footer>
</body>

</html>
<?php ob_end_flush();?>