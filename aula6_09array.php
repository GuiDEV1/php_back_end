<?php
/*
Desafio:
Montar um array bidimensaional com os valores abaixo:
água, avião, submarino
água,água,destroyer
porta-aviões, água, água

Mostra a saída abaixo, um em cada linha:
avião
submarino
destroyer
porta-aviões
*/

// Array e seus valores bimendisional. 
$elementos = array(
    array("água","avião","submarino"),
    array("água","água","destroyer"),
    array("porta-aviões","água","submarino")
);

echo "Elemento1: " . $elementos[0][1] . "<br>" . "Elemento2: " . $elementos[0][2] . "<br>" . "Elemento3: " . $elementos[1][2] . "<br>" . "Elemento4: " . $elementos[2][0];
//echo "<hr> <pre>"; print_r($GET); echo "</pre>"
?>