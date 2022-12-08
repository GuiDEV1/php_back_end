
<?php 
foreach($_POST as $pos=> $valor) {
    $$pos=$valor;
}
// $uf = $_POST["uf"];
// $email=$_POST["email"];


echo "UF: $uf<br>: $email<br>Senha: $senha";
?>