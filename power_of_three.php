<?php
    echo "<h1 style='margin-top:40px;text-align:center;'>Power of Three - Leetcode </h1>";

    function powerOfThree($number)
    {
        if($number < 1)
        {
            return false;
        }
        while($number % 3 == 0)
        {
            $number = $number / 3;
        }

        return $number == 1;
    }

    // Example 1 : 27
    // Example 2 : 52
    // Example 3 : 9
    // Example 4 : 82
    
    $result = powerOfThree(3);
    if( $result)
    {
        echo "<h1>True</h1>";
    }else{
        echo "<h1>False</h1>";
    }
?>