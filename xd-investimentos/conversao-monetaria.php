<?php

if(!isset($_GET["valorEmReal"]) 
|| !isset($_GET["moedaConversao"])){

  //redirecionar o usuário para a tela index.php
  header("location: index.php");
}

$valorEmReal = $_GET["valorEmReal"];
$moedaConversao = $_GET["moedaConversao"];

$valorConversao = 0;

if($moedaConversao == "dolar"){
    $valorConversao = $valorEmReal / 5.41;
}
else if ($moedaConversao == "euro") {
    $valorConversao = $valorEmReal / 6.57;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Conversão monetária</title>
</head>
<body>
    <h1>Total a converter: R$ <em> <?=$valorEmReal?> </em></h1>
    <h1> Valor convertido de <?=$moedaConversao?> : <em><?= number_format($valorConversao, 2, ",", ".") ?></em></h1>
</body>