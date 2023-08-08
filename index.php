<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Simple Calculator</title>
</head>

<body>
    <div class="form">
        <form action="" method="post" class="calc">
            <input tabindex="1" type="number" name="number1" placeholder="Enter numer" class="calc__num1">
            <span class="operation">
                <select tabindex="2" name="operator" class="calc__operator">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="mult">*</option>
                    <option value="div">/</option>
                </select>
            </span>
            <input tabindex="3" type="number" name="number2" placeholder="Enter numer" class="calc__num2">
            <input tabindex="4" type="submit" name="complete" class="button" value="Equel">
        </form>
        <div class="calculation">
            <?php

            if (isset($_POST["complete"])) {
                if (empty($_POST["number1"]))
                    $number1 = 0.0;
                else
                    $number1 = $_POST["number1"];
                if (empty($_POST["number2"]))
                    $number2 = 0.0;
                else
                    $number2 = $_POST["number2"];

                if ($_POST["operator"] == "plus")
                    $res = $number1 + $number2;
                else if ($_POST["operator"] == "minus")
                    $res = $number1 - $number2;
                else if ($_POST["operator"] == "mult")
                    $res = $number1 * $number2;
                else if ($_POST["operator"] == "div") {
                    if ($number2 == 0) {
                        echo "Divide by zero forbidden! ";
                        $res = INF;
                    } else
                        $res = $number1 / $number2;
                }

                echo "Result = ", $res;
            }

            ?>
        </div>
    </div>
</body>

</html>