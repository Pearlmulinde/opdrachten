
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
foreach ($weeklyTemps as $day => $data) {
    echo 'De hoogste temperatuur op ' . $day . ' was ';
    $city = array_search( max($data) , $data);
    echo $data[$city] . ' &#8451 in ' . $city . '.<br>'; 
}

?>    