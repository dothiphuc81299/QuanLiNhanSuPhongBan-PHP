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
                            <th class="numeric">ID Deparment</th>
                           
                            <th class="numeric">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                            $IDPB=$_REQUEST['IDPB'];
                            $link = mysqli_connect("localhost","root","")or die("Could not connect to MySql Database");
                            mysqli_select_db($link,"DULIEU");
                            mysqli_set_charset($link, 'UTF8'); //hiển thị tiếng việt
                            $sql = "SELECT * FROM phongban where IDPB='$IDPB'";
                            $result = mysqli_query($link,$sql);
                            while($row = mysqli_fetch_assoc($result)){
                                $IDPB = $row['IDPB'];

                                $mota=$row['mota'];
                                echo '<tr><td>'.$IDPB.'</td><td>'.$mota.'</td></tr>';
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