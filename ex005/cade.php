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
      Resultado Final
    </h1>
</header>
<main>
  <?php
    $numero = $_GET["numero"] ?: "Número não informado";
    $antecessor = $_GET["numero"] - 1;
    $sucessor = $_GET["numero"] + 1;

    echo "<p>O número escolhido foi $numero<br>O seu antecessor é $antecessor<br>O seu sucessor é $sucessor";
  ?>
  <a href="javascript:history.go(-1)">Voltar</a>
</main>
</body>
</html>