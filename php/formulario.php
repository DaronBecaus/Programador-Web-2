<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/cabecalho.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $texto = $_GET['text'];
}
?>

você digitou: <?= $texto ?>
<!-- <- Isto é a mesma coisa que isto -> -->
<?php //echo $texto 
?>

<form action="formulario.php" method="get">
    <label for="text">Texto</label>
    <input type="text" name="text" id="text">
    <input type="submit" value="Enviar">
</form>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/rodape.php";
?>