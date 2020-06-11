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
                <?php 
			   if(isset($_POST['submit'])){
				$username = $_POST['user'];
				$password = $_POST['password'];			
				$password=md5($password);
				// echo md5($password);
				//ktra xem co taikhoan nay hay chua
				//ket noi den CSDL DULIEU
				$link1 = mysqli_connect("localhost","root","")or die("Could not connect to MySql Database");
				mysqli_select_db($link1,"DULIEU");
				mysqli_set_charset($link1, 'UTF8');
				//cau lenh tim kiem
				$sql1 = "SELECT *FROM taikhoan";
				$result1 = mysqli_query($link1,$sql1); //tra ve so ban ghi
				$kq = 0;
				while($row1 = mysqli_fetch_assoc($result1)){//kiem tra dang nhap co dung tai khoan va pass k
					if(($username==$row1['user'])&&($password==$row1['password']) ){
						$kq = -1; //tai khoan dung
						break;
					}
				}
				if($kq==-1){
					print("login scucee");
						header('Location:xemthongtinNV1.php');
					}else {	
						echo '<span>Ban nhap sai username hoac password</span><br>';}
				mysqli_close($link1);
			}
			    ?>
            </div>
        </div>
        <!-- /row -->
    </section>
</section>
<?php include "./includes/footer.php"; ?>
<?php ob_end_flush();?>