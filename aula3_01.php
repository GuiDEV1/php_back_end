<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3</title>
</head>
<body>
    <?php
    $nome = 'Guilherme';
    $dia = 21;
    $mes = "junho";
    $ano = 2001;
    $anoCompleto = $dia . " de " . $mes . " de " . $ano;
    echo($nome . " seu aniversário é: " . $anoCompleto . "<hr>");
    $junta = $dia . $ano;
    var_dump($junta);
    ?>
    
</body>
</html>