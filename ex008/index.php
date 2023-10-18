<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício com internacionalização de valores</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>
      Conversor de Moedas Internacionalizado e Conectado à API do Banco Central v2.0
    </h1>
  </header>
  <section>
    <form action="cardi.php" method="get">
      <label for="numero">Quantos R$ você tem na carteira:</label>
        <input type="string" name="numero" id="idNumero">

      <input type="submit" value="Converter">
    </form>
  </section>
</body>
</html>