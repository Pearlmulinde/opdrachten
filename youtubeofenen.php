
<?php

$dayOfWeek = date("W");

switch ($dayOfWeek){
    
    case 1:
        echo "it is Monday";
        break;
     case 2:
        echo "it is tuesday";
         break;
    case 3:
         echo "it is wednesday";
         break;
     case 4:
         echo "it is thursday";
         break;
    case 5:
         echo "it is friday";
        break;
    case 6:
        echo "it is saturday";

        case 7:
            echo "it is sunday";
};

?>