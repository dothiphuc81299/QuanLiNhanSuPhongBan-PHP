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
	ob_start();
	session_start();
	$link = mysqli_connect("localhost","root","")or die("Could not connect to MySql Database");
	mysqli_select_db($link,"DULIEU");
	mysqli_set_charset($link, 'UTF8'); //hiển thị tiếng việt
	$sql = 'SELECT *FROM nhanvien';
	$result = mysqli_query($link,$sql);
	echo '<table  class="table table-bordered table-striped table-condensed">';
	echo '<caption>Dữ liệu bảng nhân viên</caption>';
	echo '<form method = "post">';
	echo '<tr><th>IDNV</th><th>Ho ten</th><th>IDPB</th><th>Địa chỉ</th><th>Xóa</th></tr>';
	while($row = mysqli_fetch_assoc($result)){
		$idnv = $row['IDNV'];
		$hoten = $row['hoten'];
		$idpb = $row['IDPB'];
		$diachi = $row['diachi'];
		echo '<tr><td>'.$idnv.'</td><td>'.$hoten.'</td><td>'.$idpb.'</td><td>'.$diachi.
		'</td><td><input type = "Checkbox" name = "delAll[]" value = "'.$idnv.'" /></td></tr>';
	}
	//echo'</form>';
	echo '</table>';
	
	mysqli_close($link);
?>

                <?php 
	if(isset($_POST['submit'])){
		header('Location:chenNV.php');
	}
	if(isset($_POST['DEL'])){
		$_SESSION['check'] = $_POST['delAll'];
		header('Location:xoa.php');
	}
	if(isset($_POST['DELALL'])){
		header('Location:xoaTatCa.php');
    }
     if(isset($_POST['CapNhat']))
   {
         header('Location:capNhat.php');
     }
	
	ob_end_flush();
?>

                <input type="submit" name="submit" value="Chen NV" />
                <input type="submit" name="DELALL" value="Xoa tat ca" />
                <input type="submit" name="DEL" value="Xoa" />
                <input type="submit" name="CapNhat" value="CapNhat" />
                </form>
            </div>
        </div>
        <!-- /row -->
    </section>
</section>

<footer> <?php include "./includes/footer.php"; ?></footer>
<?php ob_end_flush();?>