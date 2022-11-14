<?php
function printMat($n)
{
    $arr = array();
    for ($i = 0;$i < $n;$i++)
    {

        for ($j = 0;$j < $n;$j++)
        {
            if ($i == $j)
            { // if row=column=> fill the matrix with 0
                $arr[$i][$j] = 0;
            }
            else if ($i > $j)
            { // if row>columns=> fill matrix with -1
                $arr[$i][$j] = - 1;
            }
            else
            { // if row<columns=> fill matrix with 1
                $arr[$i][$j] = 1;
            }
        }
    }
    for ($i = 0;$i < $n;$i++)
    { // printing the array
        for ($j = 0;$j < $n;$j++)
        {
            echo $arr[$i][$j] . " ";
        }
        echo PHP_EOL;
    }
}
?>