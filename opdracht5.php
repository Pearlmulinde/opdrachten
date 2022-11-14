<!DOCTYPE html>
<html>
  
<body>
<table width="270px" border="1px" cellspacing="0px">
    <?php  
    echo "chess";
    $value = 0;
    
    for($col = 0; $col < 8; $col++) {
        echo "<tr>";
        $value = $col;

        for($row= 0; $row < 8; $row++){
            if($value%2==0) {
            echo  
            "<td height =30px width=30px bgcolor=black></td>";
            $value++;  
            } else {
                echo
                "<td height = 30px width = 30px bgcolor=white>";
                $value++;
            }
        }
        echo "</tr>";
    }
        ?>
    </table>
</body>
  
</html>
 