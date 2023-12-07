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
    $numero = $_GET['numero'] ?? 0;

  ?>
  <main>
    <h1>Informe um número</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <!-- Esse código colocado dentro de action serve para mandar os valores do arquivo para o próprio arquivo -->
      <label for="numero">Numero</label>
      <input type="number" name="numero" id=numero value="<?=$numero?>">
  <!-- Esse "< ?=" é uma forma de escrever o < ?php echo de maneira simplificada quando o echo é o único comando ali dentro -->

      <input type="submit" value="Dividir">
  </main>

  <section id="resultado">
    <h2>Resultado final</h2>
    <?php
    $raizQuadrada = $numero**(1/2);
    $raizCubica = $numero**(1/3);

    print "<p>Analisando o número $numero, temos:</p>
    <ul>
    <li> A sua raiz quadrada é <span>$raizQuadrada</span></li>
    <li> A sua raiz cúbica é <span>$raizCubica</span></li>
    </ul>";
    ?>
  </section>
</body>
</html>