<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/cabecalho.php";

$lista = array(
    array("img" => "/Programador-Web-2/img/curology-DGH1u80sZik-unsplash.jpg", "texto" => "produto1"),
    array("img" => "/Programador-Web-2/img/lumin-1mp7rF7_j2I-unsplash.jpg", "texto" => "produto2")
)
?>

<?php foreach ($lista as $item) : ?>
    <div class="card">
        <div class="imgCard">
            <img src="<?= $item["img"] ?>" alt="" width="300rem">
        </div>
        <div class="text">
            <?= $item["texto"] ?>
        </div>
    </div>
<?php endforeach; ?>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/rodape.php";
?>