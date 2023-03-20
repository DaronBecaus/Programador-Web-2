<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/animal.php";
class Gato extends Animal
{
    public function getAlimentacao()
    {
        return $this->alimentacao; // posso acessar e modificar a propriedade alimentação pq ela eh protegida então a classe gato sendo herdeira de animal tem o direito de acesso
    }

    public function setAlimentacao($ali)
    {
        $this->alimentacao = $ali;
    }

    /* public function getTeste(){
        return $this->teste; // nao posso acessar nem modificar a propriedade teste pq ela eh privada a classe animal
    } */

    /* public function fazBarulho() // eu posso nas classes filhas sobrescrever os métodos da classe pai
    {
        echo "miau miau";
        echo "<br>";
    } */
}
