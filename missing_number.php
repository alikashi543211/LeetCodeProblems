<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> Missing Number </h1>";

    function missingNumber($array)
    {
        $n = count($array);
        $expectedTotal = ( $n * ( $n + 1 ) ) / 2;
        $total = 0;
        foreach($array as $number)
        {
            $total = $total + $number;
        }
        return $expectedTotal - $total;
    }   

    // Example 1 : [0,1,2,4,5,6]
    // Example 2 : [0,1,2,3,4,6,7,8,9]
    
    $result = missingNumber([0,1,2,3,4,6,7,8,9]);

    echo('<h1>' . $result . '</h1>');
?>