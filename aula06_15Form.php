<?php
 $uf=array("SP","RJ","MG","ES","AM","BA","SC","RO","RR","TO","AP","PB");
sort($uf)
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="Post" action="recebe.php">
        E-mail <input type="email" name="email" id="email"> <br>
        Senha: <input type="password" name="senha" id="senha"> <br>
        Selecione UF <br>
        <select name="uf" id="uf">
           
            <?php
            foreach($uf as $post=>$valor) {
              echo "<option value='$valor'>$valor</option>";
            }
            ?> 
        </select>
        <input type="submit" value="enviar">
    </form>
    
</body>
</html>

