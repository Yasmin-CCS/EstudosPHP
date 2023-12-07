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
  <pre>
  <?php
    setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

    session_start();
    $_SESSION["teste"] = "FUNCIONOU!";

    echo "<h1>SuperGlobal GET</h1>";
    var_dump($_GET);

    echo "<h1>SuperGlobal POST</h1>";
    var_dump($_POST);

    echo "<h1>SuperGlobal REQUEST</h1>";
    var_dump($_REQUEST);

    echo "<h1>SuperGlobal COOKIE</h1>";
    var_dump($_COOKIE);

    echo "<h1>SuperGlobal SESSION</h1>";
    var_dump($_SESSION);

    echo "<h1>SuperGlobal SESSION</h1>";
    var_dump($_SESSION);

    echo "<h1>SuperGlobal ENV</h1>";
    var_dump($_ENV);

    echo "<h1>SuperGlobal SERVER</h1>";
    var_dump($_SERVER);

    echo "<h1>SuperGlobal GLOBALS</h1>";
    var_dump($GLOBALS);
    
  ?>
  <br>
  <a href="javascript:history.go(-1)">Voltar</a>
</pre>
</main>
</body>
</html>