<?php

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