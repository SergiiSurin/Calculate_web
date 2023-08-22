<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Simple Calculator</title>
</head>

<body>
    <div class="form">
        <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" class="calc">
            <input tabindex="1" type="number" name="number1" value=0 class="calc__num">
            <span>
                <select tabindex="2" name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </span>
            <input tabindex="3" type="number" name="number2" value=0 class="calc__num">
            <input tabindex="4" type="submit" class="button" value="equals">
        </form>
        <div class="calculation">
            <?php
            include __DIR__ . '/../src/functions.php';

            if (count($_POST) > 0) {
                $oper = $_POST["operator"];
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];

                list($data, $error) = calculate($oper, $number1, $number2);

                if (isset($data)) {
                    echo '<p class="result"> Result = ' . $data . '</p>';
                } else {
                    echo '<p class="error"> Error = ' . $error . '</p>';
                }
            }
            ?>
        </div>
    </div>
</body>

</html>