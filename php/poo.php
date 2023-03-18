<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/carro.php";

$carro = new Carro(); //instanciando um objeto dessa classe
echo $carro->cor; //acessando uma propriedade do objeto
echo "<br>";
var_dump($carro->cor); //mais detalhes sobre a variável
echo "<br>";
$carro->buzinar(); //chamando um método do objeto
echo "<br>";
$carro->cor = "preto"; //atribuindo um valor para a propriedade
echo $carro->cor; //acessando novamente para ver o valor atualizado
echo "<br>";
echo "------";
echo "<br>";
$carro2 = new Carro('vermelho', 2); //instanciando um novo objeto carro dessa vez através do construtor
echo $carro2->cor;
echo "<br>";
echo $carro2->qtd_portas;
echo "<br>";
echo "------";
echo "<br>";
/* $carro->modelo = 'bmw'; //tentando definir um propriedade privada
echo $carro->modelo; //tentando acessar um propriedade privada */
echo $carro->getModelo(); //acessando propriedade via getter
$carro->setModelo('bmw'); //definindo valor via setter
echo $carro->getModelo();
echo "<br>";
?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/rodape.php";
?>