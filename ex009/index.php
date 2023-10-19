<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Analisador de Número Real</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>
      Analisador de Número Real
    </h1>
  </header>
  <section>
    <form action="cardy.php" method="post">
      <label for="numero">Número Real:</label>
        <input type="number" name="numero" id="idNumero" step="0.001">

      <input type="submit" value="Analisar">
    </form>
  </section>
</body>
</html>