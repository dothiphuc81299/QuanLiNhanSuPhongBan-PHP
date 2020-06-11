
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
$link=mysqli_connect("localhost","root","") or die("Could not connect to database");
mysqli_select_db($link,"dulieu");
mysqli_set_charset($link,'utf8');
$sql='SELECT * from phongban';
$result=mysqli_query($link,$sql);
echo '<table class="table table-bordered table-striped table-condensed">';
echo '<caption> Du lieu bang phong ban </caption>';
echo '<tr><th>IDPB</th><th>Ten Phong Ban</th><th>Mo ta</th><th>Cap Nhat</th></tr>';
while($row=mysqli_fetch_assoc($result))
{
    echo '<tr><th>' .$row['IDPB'].'</th><th>' .$row['tenPB'].'</th> <th>' .$row['mota'].'</th><th align="center"><a href="formCapNhat.php?IDPB=' .$row['IDPB'].'">update</a></th></tr>';
}

echo '</table>';
mysqli_close($link);
?>

</div>
        </div>
    </section>
</section>

<footer> <?php include "./includes/footer.php"; ?></footer>
<?php ob_end_flush();?>