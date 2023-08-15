<?php
function input_validate(...$operands)
{

    if (!in_array($operands[0], ['+', '-', '*', '/'])) {
        throw new Exception('Selected operation is not processed');
    }
    $oper = $operands[0];


    if (!is_numeric($operands[1]) || !is_numeric($operands[2])) {
        throw new Exception('Try to enter any valid numbers again');
    }
    $number1 = (float) $operands[1] ?? 0;
    $number2 = (float) $operands[2] ?? 0;

    if (($oper === '/') && ($number2 === 0.0)) {
        throw new Exception('Division by zero forbidden!');
    }
    return [$oper, $number1, $number2];
}

function calculate(...$operands)
{
    $res = NULL;
    $errors = NULL;
    try {
        [$oper, $number1, $number2] = input_validate(...$operands);
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
