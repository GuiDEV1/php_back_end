<?php
$num=array(1,2,3,4,5);
print_r($num);
$nome1=array("Fulano","Beltrano","Sicrano");
$nome2=array("Fulano","Beltrano","Sicrano");
$nome3=array("Fulano","Beltrano","Sicrano");
$nome4=array("Fulano","Beltrano","Sicrano");
echo "<h3>Original</h3>";
echo "<pre>";print_r($nome1);echo "</pre>";
asort($nome1);
echo "<h3>asort</h3>";
echo "<pre>";print_r($nome1);echo "</pre>";
sort($nome2);
echo "<h3>sort</h3>";
echo "<pre>";print_r($nome2);echo "</pre>";
arsort($nome3);
echo "<h3>arsort</h3>";
echo "<pre>";print_r($nome3);echo "</pre>";
krsort($nome4);
echo "<h3>krsort</h3>"; 
?>