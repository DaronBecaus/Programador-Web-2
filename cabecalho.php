<?php
$login = true;
$nome_usr = "Daniel";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="sobre.php">Sobre</a>
            <a href="produtos.php">Produtos</a> <!--  -->
            <?php if($login): ?>
                <a href="#">Ola, <?php echo $nome_usr; ?>
                    <span class="material-symbols-outlined">login</span>
                </a>
            <?php else: ?>
                <a href="#">
                    <span class="material-symbols-outlined">logout</span>
                </a>
            <?php endif; ?>
        </nav>
    </header>