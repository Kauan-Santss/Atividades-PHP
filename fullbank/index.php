<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fullbank</title>
  <link rel="stylesheet" href="../styles-global.css" />
</head>

<body>
  <form method="GET" action="aumento-salario.php">
    <h1>Calculo Aumento de Salário</h1>
    
    <div class="input-group">
      <label for="nomeDoFuncionario">Nome Do Funcionário</label>
      <input type="text" name="nomeDoFuncionario" id="nomeDoFuncionario" required/>
    </div>

    <div class="input-group">
      <label for="destino">Salario Atual</label>
      <input type="number" name="salarioAtual" id="salarioAtual" required/>
    </div>

    </div>

    <button>Enviar</button>
  </form>
</body>

</html>