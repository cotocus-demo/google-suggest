<?php
include("config.php");
$result=mysqli_query($db,"select * from student1 order by id desc");
<!doctype html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <h1>STUDENT DETAILS</h1>

<form action="function.php" method="post">
Firstname: <input type="text" name="name"><br>

Secondname:<input type="text" name="name"><br>

DOB:<input type="date" name="DOB"><br>

Course:<input type="text" name="course"><br>

Gender:<input type="text" name="gender"><br>

Semester:<input type="text" name="semester"><br>

Address:<input type="text" name="address"><br>

Phone_no: <input type="number" name="number"><br>

E-mail: <input type="text" name="email"><br>

             <input type="submit" name="submit">
			 
</form>

<table border="2">
   <tr>
          <th> Firstname </th>
		  <th> Secondnamename </th>
		  <th> DOB </th>
		  <th> Course </th>
		  <th> Gender </th>
		  <th> Semester </th>
		  <th> Address </th>
		  <th> Phone_no </th>
		  <th> E-mail </th>
   
   
   </tr>
   
<?php
  while($res=mysqli_fetch_array($result))
  {
	  echo '<tr>';
	  echo '<td>' .$res['Firstname'].'</td>';
	  echo '<td>' .$res['Secondnamename'].'</td>';
	  echo '<td>' .$res['DOB'].'</td>';
	  echo '<td>' .$res['Course'].'</td>';
	  echo '<td>' .$res['Gender'].'</td>';
	  echo '<td>' .$res['Semester'].'</td>';
	  echo '<td>' .$res['Address'].'</td>';
	  echo '<td>' .$res['Phone_no'].'</td>';
	  echo '<td>' .$res['E-,mail'].'</td>';
	  
	  echo '</tr>';
  }




</body>
</html>