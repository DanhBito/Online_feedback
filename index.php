<?php
session_start();
 require('dbconfig.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#66CCFF">
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF">Online feedback System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php"><i class="fa fa-home fa-fw"></i>Trang Chủ</a>
                    </li>
					
					<li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php?info=about"><i class="fa fa-home fa-fw"></i>Hệ Thống</a>
                    </li>
					
					<li>
                        <a style="color:#FFFFFF" href="index.php?info=registration"><i class="fa fa-sign-out fa-fw"></i>Đăng Ký</a>
                    </li>	

                    <li class="dropdown">
                        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Đăng Nhập<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="index.php?info=login">Sinh Viên</a></li>
                        <li><a href="index.php?info=faculty_login">Khoa</a></li> 
                        <li><a href="admin">Admin</a></li> 
                        </ul>
                    </li> 

                    <li>
                        <a style="color:#FFFFFF" href="index.php?info=contact"><i class="fa fa-phone fa-fw"></i>Liên Lạc</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <?php 
        @$info=$_GET['info'];
        if($info!=""){                    
            if($info=="about"){
                include('about.php');
            }
            else if($info=="contact"){
                include('contact.php');
            }else if($info=="login"){
                include('login.php');
            }else if($info=="faculty_login"){
                include('faculty_login.php');
            }else if($info=="registration"){
                include('registration.php');
            }
        }
    ?>

<!-------------- slider start --------------->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                
                <div class="fill" style="background-image:url('images/feedback.jpg');"></div>
				<div class="carousel-caption">
                    
                </div>
            </div>
           
            <div class="item">
                <div class="fill" style="background-image:url('images/feedback1.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			 <div class="item">
                <div class="fill" style="background-image:url('./images/feedback2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
               
				
				
				
	
	
				
				
				
			<div class="col-sm-10" style="margin-top:60px;margin-bottom:80px">
				<h2>Tóm Tắt Hệ Thống</h2>
                    <p>Ở đây chúng tôi phát triển hệ thống phản hồi của giảng viên, thường được sử dụng để đánh giá giảng viên dựa trên hiệu suất....Ở đây chúng tôi có 2 mô-đun là <b>quản trị viên</b> và <b>sinh viên</b>.</p>
                    <p><b style="color: #ff0000dc;">Quản trị viên </b>là người tạo tài khoản sinh viên bằng cách thêm tất cả thông tin sinh viên và chỉ định tên người dùng và mật khẩu. Quản trị viên sẽ kiểm tra kết quả sau khi tất cả sinh viên đã nhập phản hồi</p>
                    <p><b style="color: #ff0000dc;">Sinh viên </b>là người đưa ra đánh giá về các giảng viên trên tinh thần khách quan và góp ý. Sinh viên sẽ được người quản trị viên cấp phát tài khoản và mật khẩu để đăng nhập.</p>
			</div>
			
			
			
			
				<?php  ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:15px;height:40px; background:#66CCFF">
		<span style="color:#FFFFFF">Lập trình bởi ....... Danh Khôi Khang </span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000   //changes the speed
    })
    </script>

</body>

</html>
