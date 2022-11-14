<?php
$weeklyTemps = [
    "Maandag" => [ 
    	"Groningen" => 25,
        	"Assen" => 12,
       	 "Emmen" => 19
    ],
     "Dinsdag" => [ 
    	"Groningen" => 26,
        "Assen" => 28,
        "Emmen" => 19
    ],
     "Woensdag" => [ 
    	"Groningen" => 16,
        "Assen" => 30,
        "Emmen" => 35
    ]
];
$array=[];
    // for ($i= 0; $i<3; $i++){

$temp = array();
foreach ($weeklyTemps as $item) {
    foreach ($item as $key=>$value)
     {
        $temp[$key] = max(isset($temp[$key]) ? $temp[$key] : $value,$value);
        $var= $temp[$key];
         
    }
    // array_push($array,$var);
}
    
//  array_push($array,$key);
 echo '<pre>';
 print_r($temp);
 echo '<pre>';

// print_r("The highest temperature in " ."$key is $value");
// echo  $temp[$key];
?>

