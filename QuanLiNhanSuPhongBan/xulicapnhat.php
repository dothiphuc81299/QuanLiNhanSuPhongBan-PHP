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
                    $tenpb=$_REQUEST['tenphongban'];
                    $mota=$_REQUEST['mota'];
                    $myID=$_REQUEST['IDPB'];
                    $link=mysqli_connect("localhost","root","")
                    or die("Khong the ket noi den CSDL MySQL");
                    mysqli_select_db($link,"dulieu");
                    $sql="UPDATE phongban SET TenPB='$tenpb'WHERE IDPB='$myID'";
                    $result=mysqli_query($link,$sql);
                    $row=mysqli_fetch_array($result);
                    header("Location:capnhat.php");
                ?>
            </div>
        </div>
    </section>
</section>

<footer> <?php include "./includes/footer.php"; ?></footer>
<?php ob_end_flush();?>