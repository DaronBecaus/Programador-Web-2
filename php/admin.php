<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/cabecalho.php";
$logado = false;
if (!$logado) { //verifica se está logado
    header("Location: /Programador-Web-2/index.php"); //usamos função header para redirecionar
}
?>
se você está qui, vpcê esta logado
<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/rodape.php";
?>