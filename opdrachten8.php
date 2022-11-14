<?php
/*Write a PHP function that checks whether a string 
is all lowercase*/ 
$uppercaseText =  "HELLO WORLD!";
$lowercaseText = "string";


    function checkIfTextIsLowerOrUpperCase($text){
        
        if (ctype_lower($text)) {
            echo $text . ' is all lowercase letters.';
        } else {
            echo $text . ' is uppercase.';
        }        
        echo "<br>";
    }

    checkIfTextIsLowerOrUpperCase($uppercaseText);
    checkIfTextIsLowerOrUpperCase($lowercaseText);
?>