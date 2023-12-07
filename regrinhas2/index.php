<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
  <link rel="stylesheet" href="stylet.css">

</head>

<body>
  <main>
    <h1>Regrinhas2</h1>
    <?php
        echo "<h2>Super Globais</h2>.
                <p>As superglobais no PHP são arrays especiais que estão sempre disponíveis em todos os escopos do script. Elas são chamadas de 'superglobais' porque podem ser acessadas de qualquer lugar no código, sem a necessidade de usar a palavra-chave global. Em outras palavras: as superglobais _GET e _POST são apenas arrays que foram montados com os dados que foram enviados em um formulário http via GET e POST</p>
                <p>São as principais</p>
                  <ul class='listaNumerica'>
                    <li> \$_POST</li>
                    <li> \$_GET</li>
                    <li> \$_REQUEST</li>
                    <li> \$_COOKIE: envia pequenas variaveis que ficam salvas no seu navegador</li>
                    <li> \$_FILES: se você fizer upload de um arquivo essa é a superglobal que você vai utilizar para pegar esse arquivo</li>
                    <li> \$_SESSION: permite o uso de variáveis de sessão (que não são perdidas entre a navegação entre páginas)</li>
                    <li> \$_ENV: Variáveis de ambiente do servidor</li>
                    <li> \$_SERVER</li>
                    <li> \$GLOBALS: mostra o dado de todas as outras superglobais (é mais pesada pode deixar o código lento)</li>
                  </ul>
                  <h2>Operadores Aritméticos</h2>
                  <p> São eles</p>
                  <ul class='listaNumerica'>
                  <li>+  Adição</li>
                  <li>-  Subtração</li>
                  <li>*  Multiplicação</li>
                  <li>/  Divisão</li>
                  <li>%  Módulo: calcula o resto de divisões inteiras</li>
                  <li>** Exponenciação: calcula potencia</li>
                  </ul>
                  ";
    ?>
  </main>

</body>

</html>