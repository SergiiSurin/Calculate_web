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
        <form action="../src/calculate.php" method="post" class="calc">
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

    </div>
</body>

</html>