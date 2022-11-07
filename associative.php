<?php
 

$color = array( "yellow","red","orange","black","white","blue","pink");
 

  $rcolor = array_rand( $color, 2 );

  echo "<pre>";
  print_r($rcolor);
  echo "</pre>";
  
  echo $color[$rcolor[0]]. "<br>";
  echo $color[$rcolor[1]]
 ?>