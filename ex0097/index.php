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
    $nota1 = $_GET['nota1'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 0;
    $nota2 = $_GET['nota2'] ?? 0;
    $peso2 = $_GET['peso2'] ?? 0;
  ?>
  <main>
    <h1>Insira as médias</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <!-- Esse código colocado dentro de action serve para mandar os valores do arquivo para o próprio arquivo -->
      <label for="nota1">1° Valor</label>
      <input type="nota1" name="nota1" id=nota1 value="<?=$nota1?>">
      <label for="peso1">1° Peso</label>
      <input type="peso1" name="peso1" id=peso1 value="<?=$peso1?>">
  <!-- Esse "< ?=" é uma forma de escrever o < ?php echo de maneira simplificada quando o echo é o único comando ali dentro -->
      <label for="nota2">1° Valor</label>
      <input type="nota2" name="nota2" id=nota2 value="<?=$nota2?>">
      <label for="peso2">1° Peso</label>
      <input type="peso2" name="peso2" id=peso2 value="<?=$peso2?>">

      <input type="submit" value="Calcular Médias">
  </main>

  <section id="resultado">
    <h2>Resultado final</h2>
    <?php
    $mediaAritmetica = ($nota1 + $nota2)/2 ;
    $mediaPonderada = (($nota1*$peso1) + ($nota2*$peso2))/($peso1+$peso2) ;

    print "<p>Analisando os valores $nota1 e $nota2</p>
    <ul>
    <li>Média Aritmética Simples <span> entre os valores é igual a $mediaAritmetica</li>
    <li>Média Aritmética Ponderada <span> entre os valores é igual a $mediaPonderada</li>
    </ul>";
    ?>
  </section>
</body>
</html>