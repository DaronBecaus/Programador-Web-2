<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/cabecalho.php";

class Carro
{ //define uma classe em php
    public $cor; //propriedades são características que você deseja representar
    public $qtd_portas;
    private $modelo;
    public function buzinar()
    { //métodos são ações que você deseja que os objetos realizem
        echo "bi";
    }
    //definindo um método construtor para criação de objetos com propriedades instanciadas
    //nesse caso o valor padrão para os para metros e null para tornar a criação do objeto com seu valor definido opcional
    function __construct($cor = null, $qtd_portas = null)
    {
        $this->cor = $cor;
        //a palavra this refere-se a propriedade da classe definida la no incio então $this->cor != cor
        //$this->cor = propriedade da classe
        //$cor = parâmetro utilizado no construtor
        $this->qtd_portas = $qtd_portas;
    }
    public function getModelo()
    { //função getter que retorna o valor de uma propriedade
        return $this->modelo;
    }
    public function setModelo($modelo)
    { //função setter que define o valor de uma propriedade
        $this->modelo = $modelo;
    }
}

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