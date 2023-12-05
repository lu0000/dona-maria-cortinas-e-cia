<?php
    require "arrays.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css" rel="stylesheet">
    <title>Dona Maria Cortinas & Cia</title>
</head>

<body>
    <header>
        <div class="logo-topo">
            <a href="index.php"><img src="imagens/elementos-do-site/logo-dona-maria-1.png"></a>
        </div>
        
        <div class="barra-pesquisa">
            <form action="" method="post">
                <label>
                    <input type="text" id="nome" name="nome" placeholder="O que você procura?" required>
                </label>

                <button><img src="imagens/elementos-do-site/lupa.png"></button>
            </form>
        </div>

        <div id="menu-topo">
            <ul>
                <li><a href="paginas/login.html"><img src="imagens/elementos-do-site/entrar.png"></a></li>
                <li><a href="paginas/favoritos.html"><img src="imagens/elementos-do-site/favoritos.png"></a></li>
                <li><a href="paginas/carrinho.html"><img src="imagens/elementos-do-site/carrinho.png"></a></li>
            </ul>
        </div>

    </header>

    <main><!--Corpo do Site-->

        <div class="banner-top"><!--Banner-->
            <a href="">
                <img src="imagens/banner/cortinas-banner.jpg" alt="banner">
            </a>
        </div>

        <section class="categorias"><!--Categorias-->
            <div class="cat">
                <h1>Cortinas</h1>
                <div><a href="paginas/cortinas.php"><img src="imagens/cortinas/1.jpg" alt=""></a></div>
            </div>
            <div class="cat">
                <h1>Percianas</h1>
                <div><a href="paginas/percianas.php"><img src="imagens/persianas/1.jpg" alt=""></a></div>
            </div>
            <div class="cat">
                <h1>Divisoria hospitalares</h1>
                <div><a href="paginas/divisoriashospitalares.php"><img src="imagens/divisorias hospitalares/1.jpg" alt=""></a></div>
            </div>
            <div class="cat">
                <h1>Toldos</h1>
                <div><a href="paginas/toldos.php"><img src="imagens/toldos/1.jpg" alt=""></a></div>
            </div>
        </section>

        <section class="categoria">

            <div class="banner-categoria"><!--Banner-->
                <a href="">
                    <img src="imagens/banner/banner-promocao.png" alt="banner da categoria">
                </a>
            </div>

            <div class="titulo-categoria"><h1>Peças em Promoção</h1></div>
            
            <div class="bloco-itens">
                <?php
                    foreach($produtos as $i => $f){
                        if($f["tela_inicial"] == "promocao"){
                ?>
                <div class="itens">
                <a href="paginas/visualizar.php?i=<?=$i?>">
                    <div class="itens-img"><img src="<?=$f["foto"]?>" alt="<?=$f["descricao"]?>"></div>
                    <div class="itens-descricao">
                        <div><p class="texto-limitado"><?=$f["nome"]?></p></div>
                        <p><s><?=$f["preco_cortado"]?></s></p>
                        <h1><?=$f["preco"]?></h1>
                    </div>
                </a>
                </div>
                <?php
                    }}
                ?>
            </div>
                
        </section>

        <section class="categoria">

            <div class="banner-categoria"><!--Banner-->
                <a href="">
                    <img src="imagens/banner/banner-mais-vendidas.png" alt="banner da categoria">
                </a>
            </div>

            <div class="titulo-categoria"><h1>Peças mais Vendidas</h1></div>
            
            <div class="bloco-itens">
            <?php
                    foreach($produtos as $i => $f){
                        if($f["tela_inicial"] == "mais vendidas"){
                ?>
                <div class="itens">
                <a href="paginas/visualizar.php?i=<?=$i?>">
                    <div class="itens-img"><img src="<?=$f["foto"]?>" alt="<?=$f["descricao"]?>"></div>
                    <div class="itens-descricao">
                        <div><p class="texto-limitado"><?=$f["nome"]?></p></div>
                        <h1><?=$f["preco"]?></h1>
                    </div>
                </a>
                </div>
                <?php
                    }}
                ?>
            </div>
                
        </section>

        <section class="categoria">

            <div class="banner-categoria"><!--Banner-->
                <a href="">
                    <img src="imagens/banner/banner-novidade.png" alt="banner da categoria">
                </a>
            </div>

            <div class="titulo-categoria"><h1>Novidades</h1></div>
            
            <div class="bloco-itens">
            <?php
                    foreach($produtos as $i => $f){
                        if($f["tela_inicial"] == "mais vendidas"){
                ?>
                <div class="itens">
                <a href="paginas/visualizar.php?i=<?=$i?>">
                    <div class="itens-img"><img src="<?=$f["foto"]?>" alt="<?=$f["descricao"]?>"></div>
                    <div class="itens-descricao">
                        <div><p class="texto-limitado"><?=$f["nome"]?></p></div>
                        <h1><?=$f["preco"]?></h1>
                    </div>
                    </a>
                </div>
                <?php
                    }}
                ?>
            </div>
                
        </section>
        
    </main>

    <footer><!--Rodapé do Site-->
            <p>© 2023 Dona Maria Cortinas e Cia. Todos os direitos reservados</p>    
    </footer>
</body>

</html>
