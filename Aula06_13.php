
<?php
$nomes=array("Fulano","Beltrano","Sicrano","Beltranos","sicrano");
$resultado=array_unique($nomes);
foreach($resultado as $pos=>$valor) {
echo "Nomes[$pos]:" . $valor;
echo "<br>";
}
?>