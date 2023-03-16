<?php
require_once "cabecalho.php"
?>

Olá Mundo (Com html) <!-- esse é um html -->
 <br>
<?php
echo "Olá Mundo (Com PHP)"; //esse vem do php
//isso eh um comentário em php
echo "<br>"; //imprimindo na tela uma tag html usando php

$nome; //assim criamos variáveis em php
$nome = "Felipe"; //atribuindo um valor
echo $nome;
echo "<br>";

//algumas funções internas para strings

echo strlen($nome); //retorna o tamanho da string
echo "<br>";

echo strrev($nome); //reverte a string
echo "<br>";

echo str_replace("Mundo", "Pessoas", "Ola Mundo"); //substitui uma string
echo "<br>";

//algumas funções internas para números

$numero = 1;
$num = 3.14;

var_dump(is_int($numero)); //var_dump outra forma de exibir dados na tela, despeja informações sobre uma variável
echo "<br>";
var_dump(is_int($num));
echo "<br>";

echo (int)$num; //converter um tipo em inteiro
echo "<br>";
var_dump(is_float($numero)); //vamos ver se $numero tem um valor do tipo float (false)
echo "<br>";
$numero = (float)$numero; //agora convertendo e salvando esse valor
echo "<br>";
var_dump(is_float($numero)); //verificando novamente (true)
echo "<br>";

echo pi(); //retornar o valor de pi
echo "<br>";

echo min(0, 150, 30); //retorna o menor valor
echo "<br>";
echo max(0, 150, 30); //retorna o maior valor
echo "<br>";

echo abs(-2); //retorna o valor absoluto (positivo)
echo "<br>";

echo sqrt(64); //retorna a raiz quadrada
echo "<br>";

echo round(0.8); //arredondar
echo "<br>";

echo rand(); //retorna um valor aleatório, para limitar a abrangência dos valores colocamos parâmetros nos parenteses
echo "<br>";

echo rand(1, 10);
echo "<br>";

$valor = pi();
echo number_format($valor, 2); //formato um numero
echo "<br>";
?>

<?php
require_once "rodape.php"
?>