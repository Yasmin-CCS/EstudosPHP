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
    $num = $_POST["numero"] ?? 0;

    echo "<p>Analisando o número ". number_format($num, 3, ",", ".") ." informado pelo usuário:</p>";


    $int = (int) $num;
    $fra = $num - $int;

    echo "<ul><li>A parte inteira do número é ". number_format($int, 0, ",","."). "</li>";
    echo "<li>A parte fracionária do número é:".number_format($fra, 3, ",", ".")."</li></ul>";
  ?>
  <br>
  <a href="javascript:history.go(-1)">Voltar</a>
</main>
</body>
</html>