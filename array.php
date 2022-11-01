<?php
		$num = array(21,23,34,45,1,4,5,);
		 sort($num);

	   $numlength = count($num);
		 for($t = 0; $t < $numlength; $t++) 
		 {
		    echo $num[$t];
		   
		 }
		 
		 
		 echo "<br><br>";
		 echo "<br>";
		 
		 
		 
		 $num = array(21,23,34,45,1,4,5,);
		 rsort($num);

	   $numlength = count($num);
		 for($t = 0; $t < $numlength; $t++) 
		 {
		    echo $num[$t];
			echo "<br>";
		   
		 }
		 
		 echo "<br>";
		 echo "<br>";
		 
		 $team = array("shivam"=>"20", "ravi"=>"22", "abhi"=>"24");
         asort($team);

         foreach($team as $value => $value_v) 
		 {
         echo "Key=" . $value . ", Value=" . $value_v;
         echo "<br>";
         }

          echo "<br>";
		 echo "<br>";
		 
		 $team = array("shivam"=>"20", "ravi"=>"22", "abhi"=>"24");
         ksort($team);

         foreach($team as $value => $value_v) 
		 {
         echo "Key=" . $value . ", Value=" . $value_v;
         echo "<br>";
		 }
		 
		 
		 echo "<br>";
		 echo "<br>";
		 
		 $team = array("shivam"=>"20", "ravi"=>"22", "abhi"=>"24");
         arsort($team);

         foreach($team as $value => $value_v) 
		 {
         echo "Key=" . $value . ", Value=" . $value_v;
         echo "<br>";
		 }
		 
		 
		 
		 echo "<br>";
		 echo "<br>";
		 
		 $team = array("shivam"=>"20", "ravi"=>"22", "abhi"=>"24");
         krsort($team);

         foreach($team as $value => $value_v) 
		 {
         echo "Key=" . $value . ", Value=" . $value_v;
         echo "<br>";
		 }

?>
