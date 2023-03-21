<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/cabecalho.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/carro.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/gato.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/laranja.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/movimento.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/planta.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/cachorro.php";

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
echo "-----------------------------------";
echo "<br>";
$carro2 = new Carro('vermelho', 2); //instanciando um novo objeto carro dessa vez através do construtor
echo $carro2->cor;
echo "<br>";
echo $carro2->qtd_portas;
echo "<br>";
echo "-----------------------------------";
echo "<br>";
/* $carro->modelo = 'bmw'; //tentando definir um propriedade privada
echo $carro->modelo; //tentando acessar um propriedade privada */
echo $carro->getModelo(); //acessando propriedade via getter
$carro->setModelo('bmw'); //definindo valor via setter
echo $carro->getModelo();
echo "<br>";
echo "-----------------------------------";
echo "<br>";
$animal = new Animal(); // posso instanciar objeto da classe pai
var_dump($animal);
echo "<br>";
echo $animal->fazBarulho();

$gato = new Gato(); // posso instanciar objeto da classe filha
var_dump($gato);
echo "<br>";
echo $gato->fazBarulho(); // herdou as propriedades e métodos da classe pai

$animal->qtd_patas = 4; // qtd_patas é publico então posso fazer essa modificação

/* $animal->alimentação = "herbívoro"; // nao posso fazer o mesmo com os outros limitadores de aceso
$animal->teste = "testando"; */

$gato->qtd_patas = 4;
/* $gato->alimentação = "carnívoro";
$gato->teste = "testando"; */

echo $gato->getAlimentacao();
echo "<br>";
echo $gato->getTeste();
echo "<br>";

$gato->setAlimentacao('carnívoro');
$gato->setTeste('testando');

echo $gato->getAlimentacao();
echo "<br>";
echo $gato->getTeste();
echo "<br>";
echo "-----------------------------------";
echo "<br>";

//$planta = new Planta(); // nao posso instanciar objetos de classes abstratas, tem que instanciar das filhas
$laranja = new Laranja();
var_dump($laranja);
echo "<br>";
$laranja->crescer(); // o objeto da classe filha age normalmente e utilizar o método implementado
echo "<br>";
echo "-----------------------------------";
echo "<br>";

$gato->andarParaFrente();
echo "<br>";
echo "-----------------------------------";
echo "<br>";

Animal::brincar(); // acessando um método estático nome da classe::nome do método
$animal->brincar(); // o método pode ser acessado pelo objeto também
echo "<br>";
echo "-----------------------------------";
echo "<br>";
$cachorro = new Cachorro();
echo $cachorro->fazBarulho();
?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/rodape.php";
?>