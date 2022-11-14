<?php
try {

  $x = 4;
  $y = 0;

  if ($y==0) {
      throw new Exception('Division by zero.');
  }
  echo $x/$y;

} catch(Exception $e){     
    
    echo $e->getMessage()."\n"; 

} finally {
 
    echo "Try again\n";

}
?>

