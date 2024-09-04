
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estante web</title>
    <link rel="stylesheet" href="../css/style.css"> <!--Se conceta com CSS-->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
    </style>

</head>
<body>
    <header> <!--Cabeça-->
        <div class="logo-busca">
            <h1 class="fonte_special_elite">Estante Web</h1> <!--Depois adciona a logo também-->
            <form action=""> <!--Formulário/ action: significa quem receberá-->
                <div class="caixa_busca">
                    <div class="icone_pesquisa">
                        <img src="../imgs/busca.svg" alt="" width="20px" height ="20px"> 
                    </div>
                    <div class="alinhar_input">
                        <input  type="search" name="busca" id="busca" >
                    </div>
                    <div class="icone_pesquisa">
                        <img src="../imgs/microfone.svg" alt="" width="20px" height ="20px">
                    </div>
                </div>
            </form>

        </div>
    </header>
    <nav> <!--seção de navegação-->
        <a href="../index.html">Início</a> <!--links das seções-->
        <a href="quem_somos.html">Quem Somos</a>
        <a href="contato.html">Contato</a>
        <a href="favoritos.html" class="alinhar_verticalmente"><img src="../imgs/star.png" alt="" width="20px" height ="20px">Favoritos</a>
        <a href="login.html">Login</a>

    </nav>
    
    <main class="centralizar_main"> <!--principal-->

        <!-- O container que vai conter -->
        <div class ="box_gerenciar_livros">
            <div class="titulo_container">
                <a href="configuracao.html">
                    <img  src="../imgs/icone_config.svg" alt="" width="30px" heigth ="30px">
                </a>
                <h2>Gerenciar Livros</h2>
                
                <a href="retroceder_pagina.php">
                    <img class="icone_retroceder" src="../imgs/icone_retroceder.svg" alt="" width="30px" heigth ="30px">
                </a>
            </div>

            <!-- Body box:Gerenciar Livros -->
            
                <div class="buttoes_vertical">

                    <!-- adicionar Livro -->
                    <button class="botoes_gerenciar_livros" type="submit"> <a href="/ellen_karla/Estante-Web/views/adicionar_livro.php" class = "tira_decoration">Adicionar Livro</a></button>
                  
                    <!-- Editar Livro -->
                    <button class="botoes_gerenciar_livros" type="reset"><a href="/ellen_karla/Estante-Web/views/editar_livro.php" class = "tira_decoration">Editar Livro</a></button>
                </div> 
            
        </div>
           
    </main> 

    <footer>
        <div id="copy">
            &copy; Estante Web
        </div>
        <div>
            Todos os direitos reservados
        </div>
        <div class="img-fim">
            <img src="../imgs/facebook.svg"alt="" width="30px" height="30px">
            <img src="../imgs/instagram.svg"alt="" width="30px" height="30px">
        </div>
    </footer> <!--rodapé-->
    
</body>
</html>