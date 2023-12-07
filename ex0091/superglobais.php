<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Desafio PHP</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>
    Analisador de Número Real
    </h1>
</header>
<main>
  <?php
    echo "<h1>SuperGlobal GET</h1>";
    var_dump($_GET);

    echo "<h1>SuperGlobal POST</h1>";
    var_dump($_POST);

    echo "<h1>SuperGlobal REQUEST</h1>";
    var_dump($_REQUEST);
  ?>
  <br>
  <a href="javascript:history.go(-1)">Voltar</a>
</main>
</body>
</html>