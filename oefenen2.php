<?php 
 $range =7;
  //write your code here
  function fibonacci($range){
    if ($range== 0 || $range == 1){
      return $range;
    } else{
      return (fibonacci($range-1) + fibonacci($range-2));
    }
    
  }
  
  echo (fibonacci($range));

?> 