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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <a href="../index.php">Inicio</a>
            <a href="/Programador-Web-2/php/sobre.php">Sobre</a>
            <a href="/Programador-Web-2/php/produtos.php">Produtos</a>
            <a href="/Programador-Web-2/php/admin.php">Admin</a>
            <?php if ($login) : ?>
            <!-- testa se o login é verdadeiro -->
            <a href="#">Ola, <?php echo $nome_usr; ?>
                <span class="material-symbols-outlined">login</span>
            </a> <!-- se sim exibe o nome do usuário e o ícone person -->
            <?php else : ?>
            <!-- senão -->
            <a href="#">
                <span class="material-symbols-outlined">logout</span>
            </a> <!-- exibe o ícone de login -->
            <?php endif; ?>
            <!-- encerra o if -->
        </nav>
    </header>