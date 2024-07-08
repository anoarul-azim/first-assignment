<?php
    $num1=4;
    $num2=5;
    $num3=6;

    if ($num1 >= $num2 && $num1 >=$num3) {
        $highest = $num2;
    } elseif ($num2 >= $num1 && $num2 >= $num3){
        $highest = $num2;
    } else {
        $highest = $num3;
    }
        
    
    
    echo "The highest number is: ". $highest;

?>