
      
      <?php
         $marks = array( 
            "c++" => array (
               "practicals" => 22,
               "internal1" => 23,	
               "internal2" => 24
            ),
            
            "php" => array (
               "practicals" => 23,
               "internal1" => 24,	
               "internal2" => 25
            ),
            
            "java" => array (
               "practicals" => 25,
               "internal1" => 26,	
               "internal2" => 27
            )
         );
         
         
         echo "Marks for c++ in practicals : " ;
         echo $marks['c++']['practicals'] . "<br />"; 
         
         echo "Marks for php in internal1 : ";
         echo $marks['php']['internal1'] . "<br />"; 
         
         echo "Marks for java in internal2 : " ;
         echo $marks['java']['internal2'] . "<br />"; 
      ?>
   
