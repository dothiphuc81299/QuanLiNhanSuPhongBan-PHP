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
                <caption>Result</caption>;
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>FullName</th>
                            <th class="numeric">ID Deparment</th>
                            <th class="numeric">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
				$idnv = $_POST['idnv'];
				$name = $_POST['name'];
				$link = mysqli_connect("localhost","root","")or die("Could not connect to MySql Database");
				mysqli_select_db($link,"DULIEU");
				mysqli_set_charset($link, 'UTF8');
				$sql = "SELECT *FROM nhanvien WHERE IDNV = '$idnv' OR hoten = '$name'";
				$result = mysqli_query($link,$sql); //tra ve so ban ghi
				while($row = mysqli_fetch_assoc($result)){
					$idnv1 = $row['IDNV'];
					$hoten = $row['hoten'];
					$idpb = $row['IDPB'];
					$diachi = $row['diachi'];
					echo '<tr><td>'.$idnv1.'</td><td>'.$hoten.'</td><td>'.$idpb.'</td><td>'.$diachi.'</td></tr>';		
				}	
				mysqli_close($link);
		?>

                    </tbody>
                </table>
            </div>
        </div>
        <!-- /row -->
    </section>
</section>
<?php include "./includes/footer.php"; ?>
<?php ob_end_flush();?>