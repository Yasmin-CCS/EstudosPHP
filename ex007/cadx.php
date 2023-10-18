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
    $min = 0;
    $max = 100;
    $numero = mt_rand($min, $max);


    echo "Gerando um número aleatório entre $min e $max... \n";
    echo "O número escolhido foi $numero";
  ?>
  <br>
  <a href="javascript:history.go(-1)">Voltar</a>
</main>
</body>
</html>