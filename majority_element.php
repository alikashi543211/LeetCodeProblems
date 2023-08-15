<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> Majority Element </h1>";

    function majorityElement($array)
    {
        $majority = 0;
        $majorityNum = 0;
        $hashset = [];
        for($i = 0; $i < count($array); $i++)
        {
            if(isset($hashset[$array[$i]]))
            {
                $hashset[$array[$i]]++;
            }else{
                $hashset[$array[$i]] = 1;
            }
        }

        foreach($hashset as $num => $freq)
        {
            if($freq > $majority)
            {
                $majority = $freq;
                $majorityNum = $num;
            }
        }

        return $majorityNum;
    }   

    // Example 1 : [2,2,1,1,1,2,2]
    // Example 2 : [3,2,3]
    
    $result = majorityElement($array = [3,2,3]);

    echo $result;
?>