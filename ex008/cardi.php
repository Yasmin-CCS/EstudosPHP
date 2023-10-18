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
    Conversor de Moedas v2.0
    </h1>
</header>
<main>
  <?php
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'02-21-2023\'&@dataFinalCotacao=\'02-26-2023\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    $dados = json_decode(file_get_contents($url), true);
    
    //teste para ver os dados do Json
    // var_dump($dados);

    $cotacao = $dados["value"][0]["cotacaoCompra"];

    echo "<br>A cotação foi de $cotacao<br>";

    $real = $_GET["numero"] ?: "Número não informado";
    $dolar = $_GET["numero"] / $cotacao;

    echo "Essa forma de fazer pegando os números e formatando do jeito que eu quero, inclusive escolhendo onde quero usar ponto ou virgula no nome";
    echo " R\$" . number_format($real, 2, ",", ".") . "equivalem a US\$ " . number_format($dolar, 2, ",", ".");

    echo "<br><br>Já essa é a forma de fazer determinando um tipo de formatação padrão de acordo com o idioma, então caso eu precise alterar o idioma é só alterar o país que ele se adapta sozinho.";
    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    echo "<br>Seus " . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a ".  numfmt_format_currency($padrao, $dolar, "USD")
  ?>
  <br>
  <a href="javascript:history.go(-1)">Voltar</a>
</main>
</body>
</html>