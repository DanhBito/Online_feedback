<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

mysqli_query($conn,"insert into contact values('','$n','$m','$e','$msg',now())");
	
$err="<font color='green'>Chúng tối sẽ liên lạc với bạn sau!!</font>";	

}

?>

        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    
                    </li>
                   
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8">
                <h3><font color="#00FF33">Liên Lạc Với Chúng Tôi </font></h3>
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
				    <div class="control-group form-group">
                        
						
						<div class="controls">
                            <label>Họ Tên:</label>
                            <input type="text" class="form-control" name="n" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Số điện thoại</label>
                            <input type="number" class="form-control" name="m" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Địa Chỉ Email</label>
                            <input type="email" class="form-control" name="e" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Lời Nhắn:</label>
                            <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="save" class="btn btn-primary">Gửi</button>
					<h1></h1>
                </form>
            </div>
			<div class="col-md-4" style="margin-top:30px">
                <h3>Thông Tin Liên Lạc Chi Tiết</h3>
                <p>
                    102 Mai Xuân Thưởng, Thành Phố Nha Trang<br>Trường Đại Học Thông Tin Liên Lạc<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>: (+84) 337-136172</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="mailto:0337136172danh@gmail.com">duydanh@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Giờ Làm Việc</abbr>: Thứ 2 -Thứ 6: 6:00 AM đến 11:00 AM</p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        
            <!-- Contact Details Column -->
            
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <!-- /.row -->

    <br/><br/>
    
    </div>
    <!-- /.container -->
