<?php 
echo $_SESSION['faculty_login'];
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>Điền đầy đủ thông tin</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where password='$op' and email='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$sql=mysqli_query($conn,"update faculty set password='$np' where email='".$_SESSION['faculty_login']."'");
	
	$err="<font color='blue'>Cập Nhật Mật Khẩu Thành Công </font>";
	}
	else
	{
	$err="<font color='red'>Nhập Lại Mật Khẩu Sai </font>";
	}
}

else
{

$err="<font color='red'>Sai Mật Khẩu Cũ </font>";

}
}
}

?>
<h2 align="center">Đổi Mật Khẩu</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Nhập Mật Khẩu Cũ</div>
		<div class="col-sm-5">
		<input type="password" name="op" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Nhập Mật Khẩu</div>
		<div class="col-sm-5">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Nhập Lại Mật Khẩu</div>
		<div class="col-sm-5">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Đổi mật Khẩu" name="save" class="btn btn-success"/>
		<input type="reset"  class="btn btn-success"/>
		</div>
	</div>
</form>	
