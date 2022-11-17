
<?php
$aluno["Curso"] = "TADS";
$aluno["nome"] = "Guilherme";
$aluno["ra"] = 12345667;

echo "<pre>"; print_r($aluno);echo "</pre>";
echo "<hr>Nome:" .$aluno["nome"];
echo "<hr>RA:" .$aluno["ra"];
echo "<hr>Curso:" .$aluno["Curso"];
?>