<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>
    Conversor de Moedas v1.0
    </h1>
</header>
<main>
  <?php
    $numero = $_GET["numero"] ?: "Número não informado";
    $dolar = $_GET["numero"] / 5.22;


    echo "<p>Seus R$ $numero equivalem a <strong>US$ $dolar </strong>.<br><strong>*Cotação fixa de R$ 5,22</strong> informada diretamente no código";
  ?>
  <br>
  <a href="javascript:history.go(-1)">Voltar</a>
</main>
</body>
</html>