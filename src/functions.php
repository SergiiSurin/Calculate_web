<?php

function parcing_input()
{
    $oper = $_POST["operator"];
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    return [$oper, $number1, $number2];
}

function validate_input($op, $num1, $num2)
{

    if (!in_array($op, ['+', '-', '*', '/'])) {
        throw new Exception('Selected operation is not processed');
    }
    $oper = $op;

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
    $res = match ($oper) {
        '+' => $number1 + $number2,
        '-' => $number1 - $number2,
        '*' => $number1 * $number2,
        '/' => $number1 / $number2,
    };
    return $res;
}

function output_result($res, $error)
{
    if (isset($res)) {
        echo '<p class="result"> Result = ' . $res . '</p>';
    } else {
        echo '<p class="error"> Error = ' . $error . '</p>';
    }
}

function calculation()
{
    $res = NULL;
    $error = NULL;
    list($oper, $number1, $number2) = parcing_input();
    try {
        list($oper, $number1, $number2) = validate_input($oper, $number1, $number2);
        $res = calculate($oper, $number1, $number2);
    } catch (Exception $e) {
        $error = $e->getMessage();
    }
    output_result($res, $error);
}
