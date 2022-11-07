<?php
 
 
 // with unset()
  $cities= ["bangalore","gwalior","delhi"];
  
  unset($cities[2]);
  
		echo "<pre>";
		
  print_r($cities);
  
		echo "</pre>";
		
		
// with array_splice()		
  $cities= ["bangalore","gwalior","delhi"];
  
  array_splice($cities,1,2);
  
		echo "<pre>";
		
  print_r($cities);
  
		echo "</pre>";
		
		
	// with array_diff()
  $cities= ["bangalore","gwalior","delhi"];
  
  $cities=array_diff($cities,["gwalior"]);
  
		echo "<pre>";
		
  print_r($cities);
  
		echo "</pre>";
			
		
?>