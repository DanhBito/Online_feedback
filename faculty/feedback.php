<?php 
$q=mysqli_query($conn,"select * from feedback where faculty_id='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($q);
if($r==false)
{
echo "<h3 style='color:Red'>No any records found ! </h3>";
}
else
{
?>

<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_feedback.php?id='+id;
     }
}
</script>	


<div class="row">
	<div class="col-sm-12" style="color:orange;">
		<h1 align="center" >Feedback</h1>
	</div>
</div>
<div class="row">

<div class="col-sm-12">

<table class="table table-bordered">

	<thead >
	
	<tr class="success">
		<th>TT</th>
		<th>Sinh Viên</th>
		<th>Giáo Viên</th>
		<th>Câu hỏi 1</th>
		<th>Câu hỏi 2</th>
		<th>Câu hỏi 3</th>
		<th>Câu hỏi 4</th>
		<th>Câu hỏi 5</th>
		<th>Câu hỏi 6</th>
		<th>Câu hỏi 7</th>
		<th>Câu hỏi 8</th>
		<th>Câu hỏi 9</th>
		<th>Câu hỏi 10</th>
		<th>Câu hỏi 11</th>
		<th>Câu hỏi 12</th>
		<th>Câu hỏi 13</th>
		<th>Câu hỏi 14</th>

		</tr>
		</thead>
		
		<?php
		$i=1;
	while($row=mysqli_fetch_array($q))
		{
			echo "<tr>";
			echo "<td>".$i."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>".$row[4]."</td>";
			echo "<td>".$row[5]."</td>";
			echo "<td>".$row[6]."</td>";
			echo "<td>".$row[7]."</td>";
			echo "<td>".$row[8]."</td>";
			echo "<td>".$row[9]."</td>";
			echo "<td>".$row[10]."</td>";
			echo "<td>".$row[11]."</td>";
			echo "<td>".$row[12]."</td>";
			echo "<td>".$row[13]."</td>";
			echo "<td>".$row[14]."</td>";
			echo "<td>".$row[15]."</td>";
			echo "<td>".$row[16]."</td>";
			//echo "<td><a href='#' onclick='deletes($row[id])'>Delete</a></td>";
			echo "</tr>";
		$i++;
		}
		
		?>
		
	
		
</table>
</div>
</div>
<?php }?>