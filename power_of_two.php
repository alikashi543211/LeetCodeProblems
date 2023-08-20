<?php
    echo "<h1 style='margin-top:40px;text-align:center;'>Power of Two - Leetcode </h1>";

    function powerOfTwo($number)
    {
        if($number < 1)
        {
            return false;
        }
        while($number % 2 == 0)
        {
            $number = $number / 2;
        }

        return $number == 1;
    } 

    // Example 1 : 16
    // Example 2 : 256
    // Example 3 : 9
    // Example 4 : 128
    
    $result = powerOfTwo(256);
    if( $result)
    {
        echo "<h1>True</h1>";
    }else{
        echo "<h1>False</h1>";
    }
?>