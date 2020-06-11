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
   $myID=$_REQUEST['IDPB'];
   $link=mysqli_connect('localhost','root',"") or
   die("Khong the ket noi den CSDL MySQL");
   mysqli_select_db($link,"dulieu");
   $sql="SELECT * FROM phongban WHERE IDPB='$myID'";
   $result=mysqli_query($link,$sql);
   $row=mysqli_fetch_array($result);
?>


<form method='POST' action="xulicapnhat.php?IDPB=<?php echo $row['IDPB'];?>">
 <table>
  <caption> Câp nhật thông tin phòng ban </caption>
     <tr>
      <td>IDPB:</td>
      <td><input type="text" name="IDPB" disabled value="<?=$myID?>"></td>
      </tr>
       <tr>
        <td>Tenpb:</td>
        <td><input type="text" name="tenphongban" value="<?=$row['tenPB']?>"> </td>
        </tr>
        <tr>
        <td>Mota:</td>
        <td><input type="text" name="mota" value="<?=$row['mota']?>"> </td>
        </tr>
        <tr>
       <td colspan="2" align="center"> 
		<input type="submit" value="Cậpnhật" name ="submit"> 
    <input type="reset" value="Reset"> 
    </td>
      </tr>
 </table>
</form>

</div>
        </div>
    </section>
</section>

<footer> <?php include "./includes/footer.php"; ?></footer>
<?php ob_end_flush();?>