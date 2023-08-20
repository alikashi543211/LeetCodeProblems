<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> Valid Anagram </h1>";

    function validAnagram($t, $s)
    {
        $t_hashset = $s_hashset = [];
        for($i = 0; $i < strlen($t); $i++)
        {
            (isset($t_hashset[$t[$i]])) ? $t_hashset[$t[$i]]++ : $t_hashset[$t[$i]] = 1;
        }
        for($j = 0; $j < strlen($s); $j++)
        {
            (isset($s_hashset[$s[$j]])) ? $s_hashset[$s[$j]]++ : $s_hashset[$s[$j]] = 1;
        }
        foreach($t_hashset as $tKey => $tVal)
        {
            if(isset($s_hashset[$tKey]))
            {
                if($s_hashset[$tKey] != $tVal)
                {
                    return false;
                }
            }else{
                return false;
            }
        }
        return true;
    }   

    // Example 1 : $t = "anagram", $s = "nagaram"
    // Example 2 : $t = "car", $s = "tac"
    
    $result = validAnagram("anagram", "nagaram");
    if($result)
    {
        echo('<h1> True </h1>');
    }else{
        echo('<h1> False </h1>');
    }
?>