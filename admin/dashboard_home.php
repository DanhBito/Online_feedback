<h1 align="center" style="text-decoration:underline"><a href="">Admin </a></h1>
<?php 
//all complaints
$qq=mysqli_query($conn,"select * from faculty ");
$rows=mysqli_num_rows($qq);			
echo "<h2 style='color:green'>Số Khoa : $rows</h2>";	

//all emegency compalints
$q=mysqli_query($conn,"select * from user");
$r1=mysqli_num_rows($q);			
echo "<h2 style='color:orange'>Tổng sinh viên : $r1</h2>";	


//all users
$q2=mysqli_query($conn,"select * from feedback");
$r2=mysqli_num_rows($q2);			
echo "<h2 style='color:black'>Tống số phản hồi đã được gửi : $r2</h2>";	


					

?>
