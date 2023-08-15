<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> Number of One Bits - Leetcode </h1>";

    function numberOfOneBits($number)
    {
        
        $count = 0;
        while($number != 0 )
        {
            $q = floor($number / 2);
            $r = $number % 2;
            if($r == 1)
            {
                $count++;
            }
            $number = $q;
        }
        return $count;
        
    }   

    // Example 1 : n = 00000000000000000000000000001011 ( 11 )
    // Example 2 : n = 00000000000000000000000010000000 ( 128 )
    // Example 3 : n = 11111111111111111111111111111101 ( 4294967293 )
    
    $result = numberOfOneBits(4294967293);

    echo "<h1>" . $result . "</h1>";
?>