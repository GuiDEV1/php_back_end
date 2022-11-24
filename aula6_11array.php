<?php
//Exemplo 2:
$receita=array(
    "Ingredientes" => "farinha<br>ovos<br>fermento<br>leite",
    "preparo"=> "bater tudo e colcoar na forma untada",
    "conertura" => "chocolate granulado(diet)"
);

foreach ($receita as $bolo=>$forno) {
 echo "$bolo: $forno<br>";
}

?>