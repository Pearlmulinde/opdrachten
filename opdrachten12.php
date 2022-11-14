<ul>
<?php
$color = array('white','green','red');
sort($color);

$clength = count($color);
for($x = 0; $x < $clength; $x++) {
  echo '<li>' . $color[$x] . '</li>';
  echo "<br>";
}
?>
</ul>

