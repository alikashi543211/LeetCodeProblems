<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> First Unique Character - Leetcode </h1>";

    function firstUniqueCharacter($string)
    {
        $s_hashset = [];
        for($i = 0; $i < strlen($string); $i++)
        {
            isset($s_hashset[$string[$i]]) ? $s_hashset[$string[$i]]++ : $s_hashset[$string[$i]] = 1;
        }
        for($j = 0; $j < strlen($string); $j++)
        {
            if($s_hashset[$string[$j]] == 1)
            {
                return $j;
            }
        }
        return -1;
    }   

    // Example 1 : "abcabd"
    // Example 2 : "abkbak"
    
    $result = firstUniqueCharacter("abkmabk");
    echo "<h1>Index = " . $result . "</h1>";
?>