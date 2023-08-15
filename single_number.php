<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> Single Number </h1>";

    function singleNumber($array)
    {
        $a = 0;
        foreach($array as $val)
        {
            // XOR Operator : https://xor.pw/#
            $a = $a ^ $val;
        }

        return $a;
    }   

    // Example 1 : [2, 3, 2, 4, 4]
    // Example 2 : [4, 5, 9, 5, 4, 2, 10, 2, 10]
    
    $result = singleNumber($array = [4, 5, 9, 5, 4, 2, 10, 2, 10]);

    echo $result;
?>