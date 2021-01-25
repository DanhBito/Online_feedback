<?php 
extract($_POST);
if(isset($sub))
{
$user=$_SESSION['user'];

$sql=mysqli_query($conn,"select * from feedback where student_id='$user' and faculty_id='$faculty'");
$r=mysqli_num_rows($sql);

if($r==true)
{
echo "<h2 style='color:red'>You already given feedback to this faculty</h2>";
}
else
{
$query="insert into feedback values('','$user','$faculty','$quest1','$quest2','$quest3','$quest4','$quest5','$quest6','$quest7','$quest8','$quest9','$quest10','$quest11','$quest12','$quest13','$quest14',now())";

mysqli_query($conn,$query);

echo "<h2 style='color:green'>Thank you </h2>";
}
}


?>
<form method="post">
<fieldset>
<center><u>Phản Hồi</u></center><br>
 
<fieldset>



<h3>Vui lòng cho câu trả lời của bạn về câu hỏi sau bằng cách dánh dấu vào điểm đã cho trên thang điểm:</h3>


<button type="button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:3px">Rất tốt 5</button>
<button type="button" style="font-size:7pt;color:white;background-color:Brown;border:2px solid #336600;padding:3px">Tốt 4</button>
<button type="button" style="font-size:7pt;color:white;background-color:blue;border:2px solid #336600;padding:3px">Bình thường 3</button>
<button type="button" style="font-size:7pt;color:white;background-color:Black;border:2px solid #336600;padding:3px"> Tệ 2</button>
<button type="button" style="font-size:7pt;color:white;background-color:red;border:2px solid #336600;padding:3px">Quá tệ 1</button><br>

<table class="table table-bordered" style="margin-top:50px">
<tr>

<th> Chọn giảng viên :</th>
<td>
<select name="faculty" class="form-control">
	<?php
$sql=mysqli_query($conn,"select * from faculty where semester='".$users['semester']."'");
	while($r=mysqli_fetch_array($sql))
	{
	echo "<option value='".$r['email']."'>".$r['Name']."</option>";
	}
		 ?>
</select>
</td>
</tr>
</table>


<h3>1-Tài Liệu Khóa Học</h3>
<table class="table table-bordered">
<tr>
<td><b>1:</b> Giáo viên cung cấp đề cương môn học có kế hoạch, nội dung hàng tuần với danh sách sách văn bản cần thiết:</td>  
<td><input type="radio" name="quest1" value="5" required> 5
  <input type="radio" name="quest1" value="4">4
  <input type="radio" name="quest1" value="3"> 3
<input type="radio" name=" quest1" value="2">2
<input type="radio" name="quest1" value="1">1</td>
</tr>
  
<tr>
<td><b>2:</b>Mục tiêu khóa học, kết quả học tập và tiêu chí chấm điểm rất rõ ràng:</td> 
<td><input type="radio" name="quest2" value="5" required>5
  <input type="radio" name="quest2" value="4">4
  <input type="radio" name="quest2" value="3">3
<input type="radio" name=" quest2" value="2">2
<input type="radio" name="quest2" value="1">1</td>
</tr>

<tr>
<td>
<b>3:</b>Khóa học tích hợp các khái niệm lý thuyết với các ví dụ trong thế giới thực:</td> 
<td>
<input type="radio" name="quest3" value="5" required> 5
  <input type="radio" name="quest3" value="4">4
  <input type="radio" name="quest3" value="3"> 3
<input type="radio" name="quest3" value="2">2
<input type="radio" name="quest3" value="1">1</td>
</tr>
</table>

<h3>2-Giảng dạy</h3>
 <table  class="table table-bordered" >
<Td><b>4:</b> Giáo viên đúng giờ, đến đúng giờ và ra về đúng giờ:</td>
<td> <input type="radio" name="quest4" value="5" required> 5
  <input type="radio" name="quest4" value="4">4
  <input type="radio" name="quest4" value="3"> 3
<input type="radio" name="quest4" value="2">2
<input type="radio" name="quest4" value="1">1
</td>

<tr>
<td>
<b>5:</b> Giáo viên giỏi trong việc khơi gợi hứng thú với nội dung khóa học:</td>
<td> 
<input type="radio" name="quest5" value="5" required> 5
<input type="radio" name="quest5" value="4">4
  <input type="radio" name="quest5" value="3"> 3
<input type="radio" name="quest5" value="2">2
<input type="radio" name="quest5" value="1">1</td>
</tr>
<tr>
<td><b>6:</b> Thầy giỏi giải thích về mọi chủ đề:</td>
<td>
 <input type="radio" name="quest6" value="5" required> 5
  <input type="radio" name="quest6" value="4">4
  <input type="radio" name="quest6" value="3"> 3
<input type="radio" name=" quest6" value="2">2
<input type="radio" name="quest6" value="1">1</td>
</tr>

<tr><td>
<b>7:</b> Trình bày của giáo viên rõ ràng, dễ hiểu:</td>
<td> <input type="radio" name="quest7" value="5" required> 5
  <input type="radio" name="quest7" value="4">4
  <input type="radio" name="quest7" value="3"> 3
<input type="radio" name="quest7" value="2">2
<input type="radio" name="quest7" value="1">1</td>
<tr>
<td>
<b>8:</b> Giáo viên sử dụng tốt các phương pháp / cách dạy đổi mới:</td><td> 
<input type="radio" name="quest8" value="5" required> 5
  <input type="radio" name="quest8" value="4">4
  <input type="radio" name="quest8" value="3">3
<input type="radio" name="quest8" value="2">2
<input type="radio" name="quest8" value="1">1</td>
</tr>
<tr>
<td>
<b>9:</b> Giáo viên luôn sẵn sàng trợ giúp trong giờ học và ngoài giờ học:</td> 
<td><input type="radio" name="quest9" value="5" required>5
  <input type="radio" name="quest9" value="4">4
  <input type="radio" name="quest9" value="3"> 3
<input type="radio" name="quest9" value="2">2
<input type="radio" name="quest9" value="1">1</td>
</tr>
<tr>
<td>
<b>10:</b> Giáo viên đã hoàn thành toàn bộ khóa học theo đề cương khóa học:</td>
<td>
 <input type="radio" name="quest10" value="5" required> 5
  <input type="radio" name="quest10" value="4">4
  <input type="radio" name="quest10" value="3"> 3
<input type="radio" name="quest10" value="2">2
<input type="radio" name="quest10" value="1">1</td>
</tr>
</table>

<h3>3-Đánh Giá Lớp Học</h3>
 <table  class="table table-bordered" >
<tr>
<td><b>11:</b>Giáo viên luôn công bằng và vô tư:</td>
<td>
 <input type="radio" name="quest11" value="5" required> 5
  <input type="radio" name="quest11" value="4">4
  <input type="radio" name="quest11" value="3"> 3
<input type="radio" name="quest11" value="2">2
<input type="radio" name="quest11" value="1">1</td>
</tr>
<tr>
<td><b>12:</b>Các đánh giá được thực hiện được kết nối rõ ràng để tối đa hóa các mục tiêu học tập:</td>
<Td>
 <input type="radio" name="quest12" value="5" required> 5
  <input type="radio" name="quest12" value="4">4
  <input type="radio" name="quest12" value="3"> 3
<input type="radio" name="quest12" value="2">2
<input type="radio" name="quest12" value="1">1</td>
</tr>
</table>

<b>13:</b>Điều tôi thích:<br><br>
<center>
<textarea name="quest13" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center><br><br>
<b>14:</b>Những điều tôi không thích:<br><br>
<center>
<textarea name="quest14" rows="5" cols="60" id="comments" style="font-family:sans-serif;font-size:1.2em;">

</textarea></center>

<p align="center"><button type="submit" style="font-size:7pt;color:white;background-color:brown;border:2px solid #336600;padding:7px" name="sub">Gửi</button></p>


</form>
</fieldset>


<!--<a href="transport.html"><p align="right"><button type="Button"style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Next</button></p></a>
<a href="About.php"><p align="right"><button type="Button" style="font-size:7pt;color:white;background-color:green;border:2px solid #336600;padding:7px">Back</button></p></a>-->

</div><!--close content_item-->
      </div><!--close content-->   
	
	</div><!--close site_content-->  	
  
    
    </div><!--close main-->
  </form>
<center>