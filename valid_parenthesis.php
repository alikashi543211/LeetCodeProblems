<?php
    echo "<h1 style='margin-top:40px;text-align:center;'> Valid Parenthesis </h1>";

    function validParenthesis($s)
    {
        $s_stack = [];
        for($i = 0; $i < strlen($s); $i++)
        {
            if(count($s_stack) > 0 && $s[$i] == ')' && $s_stack[count($s_stack) - 1] == '(')
            {
                array_pop($s_stack);
            }elseif(count($s_stack) > 0 && $s[$i] == '}' && $s_stack[count($s_stack) - 1] == '{')
            {
                array_pop($s_stack);
            }elseif(count($s_stack) > 0 && $s[$i] == ']' && $s_stack[count($s_stack) - 1] == '[')
            {
                array_pop($s_stack);
            }else{
                array_push($s_stack, $s[$i]);   
            }

        }

        if(count($s_stack) > 0)
        {
            return false;
        }
        return true;
    }

    // Example 1 : ()
    // Example 2 : ()[]{}
    // Example 3 : (]
    
    // Custom Example 1 : [(]{}]()[]{)}
    // Custom Example 1 : [({}[()])]
    // Custom Example 1 : [(){}[]((]
    
    if (validParenthesis("[(){}[]((]"))
    {
        echo "True";
    }else{
        echo "False";
    }
?>