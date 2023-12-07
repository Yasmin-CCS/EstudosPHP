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
    $dividendo = $_GET['dividendo'] ?? 0;
    $divisor = $_GET['divisor'] ?? 0;

  ?>
  <main>
    <h1>Anatomia de uma Divisão</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <!-- Esse código colocado dentro de action serve para mandar os valores do arquivo para o próprio arquivo -->
      <label for="dividendo">Dividendo</label>
      <input type="number" name="dividendo" id=dividendo value="<?=$dividendo?>">
  <!-- Esse "< ?=" é uma forma de escrever o < ?php echo de maneira simplificada quando o echo é o único comando ali dentro -->
      <label for="divisor">Divisor</label>
      <input type="number" name="divisor" id=divisor value="<?=$divisor?>">
      <input type="submit" value="Dividir">
  </main>

  <section id="resultado">
    <h2>Resultado da Divisão</h2>
    <?php
    $resto = $dividendo%$divisor;
    $resultadoReal = $dividendo/$divisor;
    $resultadoInteiro = (int) $resultadoReal;
    print "<p>A soma entre os valores $dividendo e $divisor é igual a $resultadoInteiro e o resto é igual a $resto"
    ?>
  </section>
</body>
</html>