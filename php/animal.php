<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/movimento.php";
class Animal implements Movimento // criando uma classe que implementa uma interface
{
    public $qtd_patas; // modificador de acesso publico fica disponível em qualquer lugar
    protected $alimentacao; // modificador de acesso protegido so eh acessado na classe e nas herdeiras
    private $teste; // modificador de acesso privado so eh acessado na própria classe

    public function fazBarulho()
    {
        echo "barulho generico";
        echo "<br>";
    }

    public function getTeste()
    {
        return $this->teste; // posso acessar a propriedade teste aqui
    }
    public function setTeste($teste)
    {
        $this->teste = $teste; // posso modificar a propriedade teste aqui
    }

    public function andarParaFrente() // a classe eh obrigada a implementar o corpo do método da interface que esta utilizando
    {
        echo "andando para frente";
        echo "<br>";
    }

    public static function brincar()
    { // uma função estática nao precisa ser acessada através de um objeto da classe
        echo "brincando";
        echo "<br>";
    }
}
