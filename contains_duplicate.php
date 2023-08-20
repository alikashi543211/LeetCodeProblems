<?php
    echo "<h1 style='margin-top:40px;text-align:center;'>Contains Duplicate - Leetcode </h1>";

    function containsDuplicate($array)
    {
        $hashset = [];
        foreach($array as $n)
        {
            if(isset($hashset[$n]))
            {
                return true;
            }else{
                $hashset[$n] = 1;
            }
        }
        return false;
    }   

    // Example 1 : [1,2,3]
    // Example 2 : [1,3,3]
    // Example 3 : [1,2,2,3,3,3,3]
    // Example 4 : [1,2,3,4,5,3,3]
    
    $result = containsDuplicate([1,2,3,4,5,3,3]);
    if( $result)
    {
        echo "<h1>True</h1>";
    }else{
        echo "<h1>False</h1>";
    }
?>