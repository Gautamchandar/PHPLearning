<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hey</h1>
    <?php
        define('val', 20); //Declare constant
        echo "The answer of val is: ".val;

        $val2 = 20;
        $val3 = val + $val2;
        echo "<br> The val3 value is: ".$val3;
    ?>
</body>
</html>