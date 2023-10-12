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
      Resultado do processo
    </h1>
</header>
<main>
  <?php
    $nome = $_GET["nome"] ?: "sem nome";
    $sobrenome = $_GET["sobrenome"] ?: "desconhecido";
    echo "<p>É um prazer te conhecer, $nome $sobrenome! Este é o meu site!";
  ?>
  <a href="javascript:history.go(-1)">Voltar</a>
</main>
</body>
</html>