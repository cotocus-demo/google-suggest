<?php

   $cookie_name = "user";
    $cookie_value = "shivaa"; 
   
    setcookie($cookie_name,$cookie_value, time() + (86400 * 30), "/");
   
   
?>

<html>
		<head>
				<title> cookies </title>
		</head>
		
		<body>
		
		<?php
		if(isset($_COOKIE[$cookie_name]))
		{
				echo "cookie is not set yet";
		}
		else
		{
		echo "$_COOKIE[$cookie_name]";
		}
		
		?>
		
		</body>
</html>