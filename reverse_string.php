<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> Reverse String </h1>";

    function reverseString($string)
    {
        $a_pointer = 0;
        $b_pointer = strlen($string) - 1;
        while($a_pointer <= $b_pointer)
        {
            $temp = $string[$a_pointer];
            $string[$a_pointer] = $string[$b_pointer];
            $string[$b_pointer] = $temp;
            
            $a_pointer++;
            $b_pointer--;
        }
        return $string;
        
    }   

    // Example 1 : "hello"
    // Example 2 : "john"
    
    $result = reverseString("hello");

    echo('<h1>' . $result . '</h1>');
?>