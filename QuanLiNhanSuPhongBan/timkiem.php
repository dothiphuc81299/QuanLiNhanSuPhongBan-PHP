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
                    <form action="xulitimkiem.php" method="post">
                        <p class="title">Tìm kiếm</p>
                        <p>
                            <label>Mã NV</label>
                            <input type="text" name="idnv" id="username" />
                        </p>
                        <p>
                            <label>Tên NV</label>
                            <input type="text" name="name" id="password" />
                        </p>
                        <p>
                            <input type="submit" name="submit" value="OK" />
                            <input type="reset" name="reset" value="Reset" />
                            <input type="button" name="cancel" value="Cancel" />
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