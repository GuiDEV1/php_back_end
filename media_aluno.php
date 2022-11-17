<?php
// algoritimo que calcula media dos alunos:

if (count($_POST)==0) {
  echo "Execute primeiro o formulário!";
  exit();
}


$name = $_POST["aluno"];
$av1 = $_POST["av1"];
$av2 = $_POST["av2"];
$res = ($av1 + $av2) / 2;

 if ($res >= 6) {
   echo "Parabens $name você passou de ano com a nota $res";
 }
 else {
    echo "infelizmente $name você não passou de ano com a nota $res";
 }
?>