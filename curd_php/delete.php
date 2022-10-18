<?php  include 'connection.php';
$id=$_GET['id'];
$query="DELETE FROM student WHERE id='$id'";
$data=mysqli_query($con,$query);
?>