<?php
// operador ternario:
$a = 500;
$b = 120;
$c = 200;
$d = ($a<=$b) ? "safe" : "foi de base";
$e = ($a>=$c) ? "Boa meu nobre" : "foi de base";
echo "d = " . $d . "<br>e = ". $e;
?>