<?php  include 'connection.php';?>
<!doctype html>
<html>
<head>
	<title> </title>
</head>

<body>
 <div>
		<form action="" method="POST">
		      <input type="text" name="student_name" placeholder="student_name"> <br><br>
			  <input type="text" name="student_email" placeholder="student_email"> <br><br>
			  <input type="text" name="student_age" placeholder="student_age"> <br><br>
			  <input type="submit" name="save_button" value="save"> 
			  <button><a  href="view.php">view</a></button>
			   
		
		</form>
 </div>
 
 <?php
   if(isset($_POST['save_button']))
   {
	   $sname=$_POST['student_name'];
	   $semail=$_POST['student_email'];
	   $sage=$_POST['student_age'];
	   
	   $query="INSERT INTO curd(student_name,student_email,student_age) VALUE('$sname','$semail','$sage')";
	   $data=mysqli_query($con,$query);
   }
 ?>

</body>
</html>




