<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 php</title>
</head>
<body>
    <?php
    $nome = "Guilherme";
    $dia = 14;
    $mes = " Setembro";
    $ano = 2022;
    // const em php 
    define("CEP", "01020-123");
    //$cep = "01020-123";
    define("MEDIA", 9.8);

    $junta=$dia."/".$mes."/".$ano."<br>";
    // como chama const em php.
    echo MEDIA;

   // var_dump($mes);
    ?>
</body>
</html>