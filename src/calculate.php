<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Simple Calculator</title>
</head>

<body>
    <div class="calculation">
        <?php
        include './functions.php';

        if (count($_POST) > 0) {
            $operands = [$_POST["operator"], $_POST["number1"], $_POST["number2"]];
            [$data, $error] = calculate(...$operands);

            if (isset($data)) {
                echo '<p class="result"> Result = ' . $data . '</p>';
            } else {
                echo '<p class="error"> Error = ' . $error . '</p>';
            }
        }

        ?>
    </div>
</body>

</html>