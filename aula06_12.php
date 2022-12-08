
<?php
 $nomes = array("Fulano","beltrano","Astrogildo","Bete","Sicrano");
 $total = count($nomes);
 $ult = count($nomes)-1;
 echo "Foram econtrados $total nomes no array.<br>";
 echo "Primeiro valor do array: ".$nomes[0]. "<br>";
 echo "Ultimo valor do array: ".$nomes[count($nomes)-1];
 echo "<hr>";
 for ($i=0;$i<count($nomes);$i++) {
     echo $nomes[$i]."<br>";
 }


?>