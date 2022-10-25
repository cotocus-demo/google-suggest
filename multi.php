<!doctype html>
<html>

		<head>
				<title> Multiplication table </title>
		</head>
		
		<body>
				<form name="frm">
				Enter the number...
				<input type= "number" name="n">
				<br>
				<br>
				
				<input type="submit" name="sub">
				</form>
				
				<?php
				
						@$x = $_POST['n'];
						@$shi = $_POST['n'];
						if($shi)
							
						for($i=1; $i<=10; $i++)
						{
						$sum=$x*$i;
						echo "$x * $i = $sum <br>";
						}
				?>
		</body>
</html>