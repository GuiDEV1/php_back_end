<?php
 $aluno = array (
     "nome" => "Guilherme",
     "ra" => 123455667,
     "av1" => 10,
     "av2" => 8
 );
 echo "<pre>";
 print_r($aluno);echo "</pre> <hr>";

 $res =  ($aluno["av1"] + $aluno["av2"]) / 2;

 echo "A média do aluno: " . $aluno["nome"] . " foi de: " . $res;

//echo "<pre>";print_r($_GET);echo "</pre>";
?>