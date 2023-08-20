<?php
    echo "<h1 style='margin-top:40px;text-align:center;'>FizzBuzz - Leetcode </h1>";

    function fizzBuzz($number)
    {
        $result = [];
        for($i = 1; $i <= $number; $i++)
        {
            if($i % 15 == 0)
            {
                array_push($result, "FizzBuzz");
            }elseif($i % 3 == 0)
            {
                array_push($result, "Fizz");
            }elseif($i % 5 == 0)
            {
                array_push($result, "Buzz");
            }else{
                array_push($result, (string) $i);
            }
        }
        return $result;
    }   

    // Example 1 : n = 16
    // Example 2 : n = 32
    
    $result = fizzBuzz(32);
    print_r( $result);
?>