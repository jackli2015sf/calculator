<?php

class calculator
{

    function binaryCompute($n1, $n2, $op)
    {

        if ($op == "*")
            return $n1 * $n2;
        if ($op == "/")
            return $n1 / $n2;
        if ($op == "%")
            return $n1 % $n2;
        if ($op == "+")
            return $n1 + $n2;
        if ($op == "-")
            return $n1 - $n2;

    }

    //input is an array of, each element is either a number or operator
    //first, compute the sub result with operators  *,/,%, and store the results and + - into $array
    // then scan left to right of $array and compute the final result
    function compute($input)
    {
        $array = array();
        $val = $input[0];
        $i = 1;

        $result = null;
        while ($i < count($input)) {
            $operator = $input[$i];
            if ($operator == "+" || $operator == "-") {
                array_push($array, $val);
                array_push($array, $operator);
                $val = $input($i + 1);
                $i += 2;
                continue;
            }
            while ($i < count($input) && ($operator == "*" || $operator == "/" || $operator == "%")) {
                $operator = $input[$i];
                $val = binaryCompute($val, $input[$i + 1], $operator);

                $i += 2;
            }
        }

        $i = 1;

        if (count($array) > 0) {
            $result = $array[0];
            while ($i < count($array)) {
                $result = binaryCompute($result, $array[$i + 1], $array[$i]);
                $i += 2;
            }
        }
        return $result;

    }
}

?>