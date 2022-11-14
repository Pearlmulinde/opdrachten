<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>



<br>
<?php
// loop through 
associative array

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<br>
<?php
// output the age of ben 
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is" . $age['Ben'] . "years old.";
?>
