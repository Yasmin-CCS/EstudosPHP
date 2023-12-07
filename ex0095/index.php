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
    $divisor = 1380;

  ?>
  <main>
    <h1>Informe seu salário</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <!-- Esse código colocado dentro de action serve para mandar os valores do arquivo para o próprio arquivo -->
      <label for="dividendo">Salário (R$)</label>
      <input type="number" name="dividendo" id=dividendo value="<?=$dividendo?>">
  <!-- Esse "< ?=" é uma forma de escrever o < ?php echo de maneira simplificada quando o echo é o único comando ali dentro -->
  
  <input type="submit" value="Dividir">
  <p>Considerando o salário múnimo de <span>R$ 1.380,00</span>
  </main>

  <section id="resultado">
    <h2>Resultado Final</h2>
    <?php
    $resto = $dividendo%$divisor;
    $resultadoReal = $dividendo/$divisor;
    $resultadoInteiro = (int) $resultadoReal;
    print "<p>Quem recebe um salário de R$ $dividendo ganha <span> $resultadoInteiro salarios mínimos<span> + R$ $resto"
    ?>
  </section>
</body>
</html>