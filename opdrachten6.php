<?php
function IsPrimeOrNot($n)
{
 for($i=2; $i<$n; $i++) {
if($n % $i ==0)  {
 return 0;
    }
    }
  return 1;
 }
// Pass The Number For check if it is prime or not
$a = IsPrimeOrNot(5);
if ($a==0)
 echo 'This is not a Prime Number.....'."\n";
else
 echo 'This is a Prime Number..'."\n";
?>