<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/animal.php";
class Cachorro extends Animal
{
    public function fazBarulho()
    {
        echo "au au";
        echo "<br>";
    }
}
