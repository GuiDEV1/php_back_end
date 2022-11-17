<?php
$aluno = array (
    "curso" => "TADS",
    "Nome" => "Fulano",
    "RA" => 12345678
);

echo "<pre>"; print_r($aluno);echo "</pre>";
echo "<hr>Nome: " , $aluno["Nome"];
echo "<br>RA: " . $aluno["RA"];
echo "<br>Curso: " . $aluno["curso"];
?>