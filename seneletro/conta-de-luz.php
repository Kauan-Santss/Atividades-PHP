<?php

if(!isset($_GET["nomeCliente"]) 
|| !isset($_GET["endereco"]) 
|| !isset($_GET["consumo"])){

  //redirecionar o usuário para a tela index.php
  header("location: index.php");
}

$nomeCliente = $_GET["nomeCliente"];
$endereco = $_GET["endereco"];
$consumo = $_GET["consumo"];

$consumoTotal = 0;

if ($consumo > 120){
    $consumoTotal = $consumo * 0.42;
}
else{
    $consumoTotal = $consumo * 0.32;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Calculo de Frete PHL</title>
</head>
<body>
    <h1>Nome do Cliente: <em> <?=$nomeCliente?> </em></h1>
    <h1>Endereço: <em> <?=$endereco?> </em></h1>
    <h1>Total a pagar: R$ <em> <?=number_format($consumoTotal, 2, ",", ".")?></em> </h1>
  <!-- Se o valor do pedágio for maior que 100, exibir em vermelho -->
  <?php
    if($consumo > 120){
      echo "<h1>Consumo: <em style='color: red'> $consumo</em> kWh </h1>";
    }else{
      echo "<h1>Consumo: <em style='color: red'> $consumo</em> kWh </h1>";
    }
  ?>
  
</body>
</html>