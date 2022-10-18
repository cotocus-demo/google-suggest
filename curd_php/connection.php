<?php

$host="localhost";
$user="root";
$password="";
$db="demo";

$con = mysqli_connect($host,$user, $password, $db);
if($con)
{
	echo ".";
}
else
{
	echo "db not connect";
}
?>