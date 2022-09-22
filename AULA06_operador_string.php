<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador string</title>
</head>
<body>
    <?php
    $a = "Maria";
    echo "$a <br>";
    $b = "Leopoldina";
    echo "$b <br>";
    echo $a . $b;
    $b .= $a;
    echo "<br> $b";
    ?>
    
</body>
</html>