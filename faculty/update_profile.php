<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update faculty set Name='$n',position	='$position',specialized='$specialized',semester='$sem',mobile='$mob',	password='$pass' where email='".$_SESSION['faculty_login']."'");	

$err="<font color='green'>Cập Nhật Thành Công</font>";

	}

$con=mysqli_query($conn,"select * from faculty where email='".$_SESSION['faculty_login']."'");

$res=mysqli_fetch_assoc($con);	
//print_r($res);
?>


<!--<h3 class="page-header">Update Profile</h3>
--><div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Họ Và Tên:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Chức Vụ:</label>
            	<input type="text" value="<?php echo @$res['position'];?>" name="position" class="form-control" required>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" readonly="true" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mật Khẩu :</label>
          <input type="text" value="<?php echo @$res['password'];?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Chuyên Nghành:</label>
  <input type="text"  name="specialized" value="<?php echo @$res['specialized'];?>" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Học kỳ</label>
  <input type="text"  name="sem" value="<?php echo @$res['semester'];?>" class="form-control" required>
        </div>
    </div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Số điện thoại:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Cập Nhật">
        </div>
  	</div>
	</form>


</div>
