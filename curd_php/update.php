<?php  include 'connection.php';
$id=$_GET['id'];
$select="SELECT * FROM curd WHERE id='$id'";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
?>

<div>
		<form action="" method="POST">
		      <input value="<?php echo $row['student_name']?>" type="text" name="student_name" placeholder="student_name"> <br><br>
			  <input value="<?php echo $row['student_email']?>" type="text" name="student_email" placeholder="student_email"> <br><br>
			  <input value="<?php echo $row['student_age']?>" type="text" name="student_age" placeholder="student_age"> <br><br>
			  <input type="submit" name="update_button" value="update"> 
			  <button><a  href="view.php">back</a></button>
			   
		
		</form>
</div>

<?php
   if(isset($_POST['update_button']))
   {
	   $sname=$_POST['student_name'];
	   $semail=$_POST['student_email'];
	   $sage=$_POST['student_age'];
	   
	   $update="UPDATE curd SET student_name='$sname', student_email='$semail', student_age='$sage' WHERE id='$id'";
	   $data=mysqli_query($con,$update);
   }
 ?>

 