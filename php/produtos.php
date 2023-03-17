<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/cabecalho.php";

/* Criando um array de arrays e salvando na variável lista */
$lista = array(
    //cada array representa um produto
    //os arrays aqui são associativos (pares de chaves de valor)
    //criei duas chaves (img, texto)
    //as chaves apontam para o respectivo valor
    //podemos associar isso ao resultado de uma busca no banco de dados
    array("img" => "/Programador-Web-2/img/curology-DGH1u80sZik-unsplash.jpg", "texto" => "produto1"),
    array("img" => "/Programador-Web-2/img/lumin-1mp7rF7_j2I-unsplash.jpg", "texto" => "produto2")
)
//agora a variável lista contem os valores referentes aos produtos
?>
<!-- Agora podemos utilizar o foreach para iterar sobre cada item do array e fazermos o que quiser com ele como por exemplo exibi-los de forma personalizada -->
<!-- Dentro do foreach eu passo a variável que representa o array ($lista) e itero cada item me referindo a ele como $item (variável local criada para esse proposito apenas) -->
<div class="containerCards">
    <?php foreach ($lista as $item) : ?>
        <!-- Crio uma estrutura de exibição dos dados (nesse caso um card) -->
        <div class="card">
            <div class="imgCard">
                <!-- Dinamicamente eu preencho a cada iteração os valore da tag img o valor do item atual na chave ['img']. pense que esse seria o titulo da coluna da tabela no banco de dados que armazena os dados da imagem do produto da interação atual -->
                <img src="<?= $item["img"] ?>" alt="" width="300rem">
            </div>
            <div class="text">
                <!-- O mesmo eh feito a cada iteração para alocar dinamicamente o texto do produto -->
                <?= $item["texto"] ?>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- preciso encerrar o foreach -->
</div>

<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/Programador-Web-2/php/rodape.php";
?>