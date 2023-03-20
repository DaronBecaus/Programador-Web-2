<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/planta.php";
class Laranja extends Planta
{ // classe laranja herda de planta

    function crescer()
    { // vai dar erro enquanto a função abstrata crescer da classe pai nao for definida
        echo "crescendo";
        echo "<br>";
    }
}
