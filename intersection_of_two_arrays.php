<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> Intersection Of Two Arrays </h1>";

    function intersectionOfTwoArrays($nums1, $nums2)
    {
        $result = [];
        foreach($nums1 as $n)
        {
            if(in_array($n, $nums2))
            {
                array_push($result, $n);
            }
        }
        return $result;
    }   

    // Example 1 : [1,2,2,1] and [2,2]
    // Example 2 : [4,9,5] and [9,4,9,8,4]
    
    $result = intersectionOfTwoArrays([1,2,2,1], [2,2]);

    print_r($result);
?>