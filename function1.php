
<?php
include("config.php");
if(isset($_post[submit]))
{
	$Firstname=$_post['Firstname'];
	$Secondname=$_post['Secondname'];
	$DOB=$_post['DOB'];
	$Course=$_post['Course'];
	$Gender=$_post['Gender'];
	$Semester=$_post['Semester'];
	$Address=$_post['Address'];
	$Phone_no=$_post['Phone_no'];
	$E-mail=$_post['E-mail'];


   $result=mysqli_query($db,"insert into student1 values('$Firstname','$Secondname','$DOB','$Course','$Gender','$Semester','$Address','$Phone_no','$E-mail')");
   if($result)
   {
	header("location:insert.php")
   }
   else
   {
	echo "failed"
   }
}
?>


