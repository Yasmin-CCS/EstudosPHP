<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>
  <h1>Regrinhas</h1>
  <?php
	$nome = "Gustavo";
	$sobrenome = "Guanabara";
	const PAIS = "Brasil";
	echo "Muito prazer, $nome $sobrenome! Você mora no " . PAIS;
	echo "<h1>Regras do PHP</h1>.<p>1. Variáveis sempre começam com o símbolo $</p><p>2. O segundo pode ser letra ou o símolo _</p><p>3. Aceita caracteres [a-z], [A-Z] e [ _ ]</p><p>4. Aceita caracteres da tabela ASCII a partir de 128 (ou seja, caracteres especiais e acentos)</p><p>5. Case sensitive</p><p>6. Existem palavras reservadas</p>";
	
	echo "<h1>Boas Práticas</h1>.<p>1.Tente dar nomes claros e de ácil identificação</p><p>2. Evite nomes muito curtos ou muito longos</p><p>3. Defina um padrão e siga em todo o projeto</p><p>4. Para variáveis, dê preferência e letras minúsculas</p><p>5. Para constantes, dê preferência a letras maiúsculas</p><p>6. Use camelCase para métodos e atributos</p><p>7. Use Snake_Case para nomear constantes </p>";
	
  echo "<h1>Categorias de Tipos Primitivos</h1>.<p>Os tipos primitivos são divididos em 3 categorias:</p><p>1. Escalares (int, string boolean...)</p><p>2. Compostos(array, object)</p><p>3. Especiais(null, mixed...)</p>";


	echo "<h2>Tipos Primitivos Escalares</h2>.<p>O PHP tem tipagem fraca, não é preciso declarar o tipo de variável ao cria-lás, ele vai entender qual é a partir do seu conteúdo. Os tipos primitivos escalaress são:</p><p>1. String</p><p>2. Int</p><p>3. Float ou Double (São a mesma coisa no PHP)(real não existe mais no PHP)</p><p>4. Boolean (se der um echo no boolear, vai aparecer 0 ou 1)</p>";
  echo "<p>Também é possível fazer a coerção de tipo, ou seja, obrigar o PHP a usar um tipo específico na variável, para isso basta colocar o tipo desejado entre parênteses logo após à atribuíção. Ex: '$ num = (integer) 8';</p>";

  
  echo "<h3>Tipos Números</h3>.<p>O PHP tem formas diferentes de representar números e cada um deles vai começar com um 'código'</p><p>1. hexadecimal - 0x .Ex: 0x1A é um número em hexadecimal, se vc escrever isso no código, vai retornar: 26</p><p>2. Binário - 0b Ex: 0b1011 é um número em binário, se vc escrever isso no código, vai retornar: 11</p><p>3. Octal - 0. Ex: 010 é um número em octal, se vc escrever isso no código, vai retornar 8</p><p>Ou seja, é importante prestar atenção na forma de escrever os números porque dependendo da forma que você escrever ele pode retornar um número totalmente diferente por estar interpretando ele com base em alguma dessas regras</p>";

  echo "<h3>Os 4 Tipos de String</h3>.<p>1. Double Quoted - Aspas duplas \"\", nela há interpretação de conteúdo dando até pra usar emojis. Ex: escrevi: \ u{1F418}, apareceu: \u{1F418}. </br></br>Ou seja, se você precisar que a String interprete uma variável, por exemplo, vai precidar usar a Double Quoted. Para constantes será necessário fazer a concatenação com o operador '.' que é o ponto. Ex: </br></br>const ESTADO = RJ; </br>echo ''Moro no''.ESTADO;. </br></br>Além das constantes, isso pode acontecer para resultados de funções também, como de data por exemplo.</p><p>2. Single Quoted - Aspas simples ' ', não interpreta o conteúdo, nem emojis, variáveis, constantes, nada. É possível colocar aspas duplas dentro de aspas simples ou aspas simples dentro de aspas duplas</p><p>3. Heredoc - 3 sinais de menor e uma palavra em maiúsculo. Ex:</br></br> <<< TESTE</br> BLABLA</br>BLA</br>TESTE;</br></br> Você pode escrever o que quiser, ele interpreta tudo e ainda interpreta multiplas linhas, ou seja, vc escreve ENTER normal como se fosse um texto no word e ele vai interpretar</p><p>4. Nowdoc - Igual a Here doc mas não interpreta nada</p>";

  echo "<h2>Tipos Primitivos Compostos</h2>.<p>1. Array - para construir o Array é só usar [ ]. Ex: $ lista = [6, 2.5, 'Maria'], perceba que é possível misturar vários tipos escalares dentro de um mesmo array</p><p>2. Object - para fazer o objeto é necessário fazer uma classe (com atributos e tudo bonitinho) e depois usar um construtor para atribuí-la a uma váriável. Ex: </p><p>class Nome_do_objeto {</p><p> privare string $atributo;</p><p> } </p><p>variavelDoObj = new Nome_do_objeto;</p>";
  $lista = [6, 2.5, "Maria", 3, false];
  class Nome_do_objeto{
    private string $atributo;
  }
  $variavelDoObj = new Nome_do_objeto;


  echo "<p>Aqui está um de cada:</p>";
  var_dump($lista);
  echo "<p></p>";
  echo "<p>Dei um var_dump e perceba que ele vai indicar o index de cada um, o valor e o tipo</p>";
  var_dump($variavelDoObj);

  echo "<h3>Macetins</h3>";
  echo "<p>Concatenador de Strings é o ponto .</p>";
  echo "<p>1. Na dúvida do tipo de uma variável, você pode usar o comando var_dump, ele mostra o valor da variável e o tipo dela. Ex: acima declarei a variàvel '$ nome = Gustavo', vou colocar um comando var_dump ao lado:</p>";
  var_dump($nome);
  echo "<p>Ele mostra o tipo: String e o número (7) que é o número de caracteres</p>";
  ?>

</body>
</html>