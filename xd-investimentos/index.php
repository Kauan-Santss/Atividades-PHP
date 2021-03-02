<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XD-Investimentos</title>
  <link rel="stylesheet" href="../styles-global.css" />
</head>

<body>
  <form method="GET" action="conversao-monetaria.php">
    <h1>Conversão Monetária</h1>
    
    <div class="input-group">
      <label for="valorEmReal">Valor em Real</label>
      <input type="number" name="valorEmReal" id="valorEmReal" required/>
    </div>

    <label for="moedaConversao">Moeda de Conversão</label>

    <div>
      <input type="radio" name="moedaConversao" id="valorDolar" value="dolar" required/>
      <label for="moedaConversao">Dolar</label>
    </div>
    <div>
      <input type="radio" name="moedaConversao" id="valorEuro" value="euro" required/>
      <label for="moedaConversão">Euro</label>
    </div>

    </div>

    <button>Enviar</button>
  </form>
</body>

</html>