<?php
  

$team1 = array("shivam","dharmu sir","raj sir");
  
 
$team2 = array("rahul","roshan","avinash");
  

$team3 = array_merge($team1, $team2);
  
echo "<pre>";
print_r($team3);
echo "</pre>";
  
?>