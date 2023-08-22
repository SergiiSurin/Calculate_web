<?php
function input_validate($operator, $num1, $num2)
{

    if (!in_array($operator, ['+', '-', '*', '/'])) {
        throw new Exception('Selected operation is not processed');
    }
    $oper = $operator;


    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new Exception('Try to enter any valid numbers again');
    }
    $number1 = (float) $num1 ?? 0;
    $number2 = (float) $num2 ?? 0;

    if (($oper === '/') && ($number2 === 0.0)) {
        throw new Exception('Division by zero forbidden!');
    }
    return [$oper, $number1, $number2];
}

function calculate($oper, $number1, $number2)
{
    $res = NULL;
    $errors = NULL;
    try {
        input_validate($oper, $number1, $number2);
        $res = match ($oper) {
            '+' => $number1 + $number2,
            '-' => $number1 - $number2,
            '*' => $number1 * $number2,
            '/' => $number1 / $number2,
        };
    } catch (Exception $e) {
        $errors = $e->getMessage();
    }
    return [$res, $errors];
}
