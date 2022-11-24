<?php
$uf = array("sp","rj","mg","es","ba");
foreach ($uf as $pos =>$valor) {
    echo "[$pos] => $valor<br>";
}

echo "<hr>";

$estudante=array(
    "ra" => 12345678,
    "nome" => "Astrucio",
    "av1" => 9,
    "av2" => 7
);

foreach ($estudante as $pos=> $valor) {
 echo "$pos: $valor<br>";
}

?>