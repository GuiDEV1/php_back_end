<?php
$aluno = array (
    array("TBD","Fulano","12345678"),
    array("TRC","Beltrano","12345678"),
    array("TADS","Silcrano","12345678")
);

echo "<br>Curso " . $aluno[0][0] . "<br> Nome: " . $aluno[0][1] . "<br> RA:" . $aluno[0][2];
echo "<hr>Curso " . $aluno[1][0] . "<br> Nome: " . $aluno[1][1] . "<br> RA:" . $aluno[1][2];
echo "<br>Curso " . $aluno[2][0] . "<br> Nome: " . $aluno[2][1] . "<br> RA:" . $aluno[2][2];

echo "<hr>" . $aluno[2][1];
?>