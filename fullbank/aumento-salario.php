<?php

if(!isset($_GET["nomeDoFuncionario"]) 
|| !isset($_GET["salarioAtual"])){

  //redirecionar o usuário para a tela index.php
  header("location: index.php");
}

$nomeDofuncionario = $_GET["nomeDoFuncionario"];
$salarioAtual = $_GET["salarioAtual"];

$salarioNovo = 0;

if($salarioAtual <= 5000){
    $salarioNovo = ($salarioAtual / 100) * 20 + $salarioAtual;
}
else{
    $salarioNovo = ($salarioAtual / 100) * 10 + $salarioAtual;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calculo Aumento de Salário</title>
</head>
<body>
    <h1>Novo Salário: R$ <em> <?=$salarioNovo?> </em></h1>
    <h1>O salário do <?= $nomeDofuncionario ?> foi de R$ <?= $salarioAtual ?> para R$ <em><?= number_format($salarioNovo, 2, ",", ".") ?></em></h1>
</body>
</html>