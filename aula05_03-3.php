<?php
//algoritimo par ou impar
if (count($_POST)==0) {
    echo "Execute primeiro o formulario";
    exit();
}

$num =$_POST["num"];
$ra = $_POST["ra"];
$res = ($num % 2 == 0) ? "$num par" : "$num impar";

echo "$res <hr>";
echo  "<h2>Seu RA:</h2> $ra";

//  if ($num % 2 == 0) {
//    echo "$num é par";
//  }
//  else {
//     echo "$num é impar";
//  }



 

 
?>