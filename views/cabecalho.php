<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ellen_karla/Estante-Web/auth/auth.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante web</title>
    <script src="script.js/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css"> <!--Se conceta com CSS-->
    <!--Importando a letra Special elite-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>

</head>
<body>
    <header> <!--Cabeça-->
        <div class="logo-busca">
            <h1 class ="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
            <form role="search" action="" method="get"> <!--Formulário/ action: significa quem receberá/ role="search: tornar a pesquisa acessível"-->
<!-- Depois apago -->
                <div class="caixa_busca">

                    <!--<div class="icone_pesquisa">
                        <img src="imgs/busca.svg" alt="" width="20px" height ="20px"> 
                    </div>
                    <div class="alinhar_input">
                        <input  type="search" name="busca" id="busca" >
                    </div>
                    <div class="icone_pesquisa">
                        <img src="imgs/microfone.svg" alt="" width="20px" height ="20px">
                    </div> -->
                    <button type="submit" class="icone_pesquisa">
                        <img src="imgs/busca.svg" alt="Buscar" width="20" height="20">
                    </button>
                    <input type="search" name="titulo" id="busca" placeholder="Pesquise por título" autocomplete="off">
                    <button type="button" class="icone_pesquisa">
                        <img src="imgs/microfone.svg" alt="Pesquisar por voz" width="20" height="20">
                    </button>
                </div>
                <!--type=especifica que tipo de processamento nesse caso é de busca/ name="busca: identifica o campo de entrada -->
            </form>
        </div>
    </header>
    <nav> <!--seção de navegação-->
        <a href="index.php">Início</a> <!--links das seções-->
        <a href="views/quem_somos.php">Quem Somos</a>
        <a href="views/contato.php">Contato</a>
        <a href="views/favoritos.php" class="alinhar_verticalmente"><img src="imgs/star.png" alt="" width="20px" height ="20px">Favoritos</a>
        <a href="views/login.php">Login</a>

    </nav>