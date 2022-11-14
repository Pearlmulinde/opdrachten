<?php
//Write a function to sort an array. 
$cars = array("Volvo", "BMW", "Toyota");
sort($cars); 

    $clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>