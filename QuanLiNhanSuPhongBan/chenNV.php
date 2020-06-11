<?php 
	ob_start();
?>
<?php include "./includes/header.php"; ?>
<?php include "./includes/navigation.php"; ?>
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-9 main-chart">
                <!--CUSTOM CHART START -->
                <div class="border-head">
                    <h3>INFORMATION</h3>
                </div>


                <div class="wrapper">
                    <?php	
				$mysql = new mysqli('localhost','root','','dulieu');
				$mysql->set_charset('utf8');
				if(mysqli_connect_error()){
				echo 'Có lỗi kết nối database'.mysqli_connect_errno();}
				$dem =0;
				if(isset($_POST['submit'])){
					$maNV = $_POST['maNV'];
 					$name = $_POST['name'];
					$diachi = $_POST['diachi'];
					$IDPB = $_POST['tenPB'];
					//ktra xem da co MaNV trong database chưa
					$sqlMaNV = "SELECT IDNV FROM nhanvien";
					$resultNV = $mysql->query($sqlMaNV);
					while($arrMaNV= mysqli_fetch_assoc($resultNV)){
						foreach($arrMaNV as $key){
							if($maNV==$key){
								echo '<span>Mã nhân viên này đã có</span>';
								$dem =1;
								break;
							}
						}
					}
					if($dem == 0){
						$sqlAdd = "INSERT INTO nhanvien(IDNV,hoten,IDPB,diachi) VALUES('$maNV','$name','$IDPB','$diachi')";
						echo $sqlAdd;
						if (mysqli_query($mysql, $sqlAdd)) {
							header('Location:xemthongtinNV1.php');
} 						else {
							echo "Lỗi: " . $sql . "<br>" . mysqli_error($mysql);
}
						//$resultAdd = $mysql->query($sqlAdd);
						//$arr= mysqli_fetch_assoc($resultAdd);
						//print_r($arr);
						//header('Location:xemthongtinNV1.php');
					}
		
				}
			?>

                    <form action="" method="post">
                        <p class="title">Chen thong tin nhan vien</p>
                        <p>
                            <label>Mã NV :</label>
                            <input type="text" name="maNV" value="" />
                        </p>
                        <p>
                            <label>Họ tên : </label>
                            <input type="text" name="name" id="username" />
                        </p>
                        <p>
                            <label>Dia chi :</label>
                            <input type="text" name="diachi" id="diachi" />
                        </p>
                        <p>
                            <label>Tên PB</label>
                            <select name="tenPB">
                                <?php 
						$sqlPB = "SELECT IDPB, tenPB FROM phongban";
						$resultPB = $mysql->query($sqlPB);
						while($arrPB = mysqli_fetch_assoc($resultPB)){
					?>
                                <option value="<?php echo $arrPB['IDPB'];?>"><?php echo $arrPB['tenPB'];?></option>
                                <?php }?>
                            </select>
                        </p>
                        <p>
                            <input type="submit" value="Thêm" name="submit" />
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <!-- /row -->
    </section>
</section>
<?php include "./includes/footer.php"; ?>
<?php ob_end_flush();?>