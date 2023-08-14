<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Simple Calculator</title>
</head>

<body>
    <div class="form">
        <form action="" method="post" class="calc">
            <input tabindex="1" type="number" name="number1" placeholder="Enter number" class="calc__num1">
            <span class="operation">
                <select tabindex="2" name="operator" class="calc__operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </span>
            <input tabindex="3" type="number" name="number2" placeholder="Enter number" class="calc__num2">
            <input tabindex="4" type="submit" name="complete" class="button" value="Equel">
        </form>
        <div class="calculation">
            <?php
            // 1. check operator in + - * / in_array($oper, ['+', '-', '*'])
            // 2. check num1 num2 are numbers is_numeric(), is_int() '58' 58
            // 0. check wheter required fields exist in POST $num1 = (float) $_POST['num1'] ?? 0;
            // 4. div with 0

            // if (isset($_POST["complete"])) {      if (count($_POST) > 0)
            $errors = [];

            if (count($_POST) > 0) {
                if (!in_array($_POST["operator"], ['+', '-', '*', '/'])) {
                    exit('Choose one of the following operations + - * /');
                } else {
                    $oper = $_POST["operator"];
                }
                if (!is_numeric($_POST["number1"]) || !is_numeric($_POST["number2"])) {
                    exit('Enter numbers to make calculate!');
                } else {
                    $number1 = (float) $_POST['number1'] ?? 0;
                    $number2 = (float) $_POST['number2'] ?? 0;
                }
                if (($oper === '/') && ($number2 === 0.0)) {
                    exit('Division by zero forbiden!');
                }

                $res = match ($oper) {
                    '+' => $number1 + $number2,
                    '-' => $number1 - $number2,
                    '*' => $number1 * $number2,
                    '/' => $number1 / $number2,
                };

                echo "Result = ", $res;
            }

            ?>
        </div>
    </div>
</body>

</html>