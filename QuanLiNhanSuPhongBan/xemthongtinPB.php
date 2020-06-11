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
                <table class="table table-bordered table-striped table-condensed">
                    <thead>
                        <tr>
                            <th>ID Deparment</th>
                            <th>Name</th>
                            <th class="numeric">View Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   	
                            $link = mysqli_connect("localhost","root","")or die("Could not connect to MySql Database");
                            mysqli_select_db($link,"DULIEU");
                            mysqli_set_charset($link, 'UTF8'); //hiển thị tiếng việt
                            $sql = 'SELECT *FROM phongban';
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                $IDPB = $row['IDPB'];
                                $tenpb = $row['tenPB'];
        
                                echo '<tr><td>'.$IDPB.'</td><td>'.$tenpb.'</td><td><a href = "xemThongTinPBChiTiet.php?IDPB='. $row['IDPB'].'">View</a></a></td></tr>';
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