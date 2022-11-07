<?php  include 'connection.php';?>
<a href="index.php">home</a>
<table border="1px" cellpadding="10px" cellspacing="0">
<tr>
    <th>student_name</th>
	<th>student_email</th>
	<th>student_age</th>
	<th colspan=2>action</th>
</tr>
<?php
   $query="SELECT * FROM curd";
   $data=mysqli_query($con,$query); 
   $result=mysqli_num_rows($data);
   if($result)
   {
	   while($row=mysqli_fetch_array($data))
	   {
		   ?>
		   <tr>
				<td><?php echo $row['student_name']; ?>
				</td>
				<td><?php echo $row['student_email']; ?>
				</td>
				<td><?php echo $row['student_age']; ?>
				</td>
				<td><a href="update.php?id=<?php echo $row['id']; ?>">edit</a> </td>
				<td><a href=" delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
			</tr>	
			<?php
	   }
   }
   else
   {
	   ?>
	   <tr>
			<td>no records</td>
	   </tr>
	   <?php
   }  
      ?>
</table> 