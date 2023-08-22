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
            <input tabindex="1" type="text" name="number1" class="calc__num">
            <span>
                <select tabindex="2" name="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>
            </span>
            <input tabindex="3" type="text" name="number2" class="calc__num">
            <input tabindex="4" type="submit" class="button" value="equals">
        </form>
        <div class="calculation">
            <?php
            include __DIR__ . '/../src/functions.php';
            if (count($_POST) > 0) {
                calculation();
            }
            ?>
        </div>
    </div>
</body>

</html>