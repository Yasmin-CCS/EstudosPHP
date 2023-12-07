<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício PHP</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <?php
    // Capturando os dados do Formulario do próprio arquivo
    $valor1 = $_GET['v1'] ?? 0;
    $valor2 = $_GET['v2'] ?? 0;

  ?>
  <main>
    <h1>Somador de Valores</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <!-- Esse código colocado dentro de action serve para mandar os valores do arquivo para o próprio arquivo -->
      <label for="v1">Valor 1</label>
      <input type="number" name="v1" id=v1 value="<?=$valor1?>">
  <!-- Esse "< ?=" é uma forma de escrever o < ?php echo de maneira simplificada quando o echo é o único comando ali dentro -->
      <label for="v2">Valor 2</label>
      <input type="number" name="v2" id=v2 value="<?=$valor2?>">
      <input type="submit" value="Somar">
  </main>

  <section id="resultado">
    <h2>Resultado da Soma</h2>
    <?php
    $soma = $valor1 + $valor2;
    print "<p>A soma entre os valores $valor1 e $valor2 é igual a $soma"
    ?>
  </section>
</body>
</html>