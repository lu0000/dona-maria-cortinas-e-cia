<?php
    require "../arrays.php";

    if(isset($_GET["i"])){
    $i = $_GET ["i"];
    $f = $produtos[$i];
}else {
    header("location: visualizar.php");
    die;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../estilo.css" rel="stylesheet">
    <title>Dona Maria Cortinas & Cia</title>
</head>

<body>
    <header>
        <div class="logo-topo">
            <a href="../index.html"><img src="../imagens/elementos-do-site/logo-dona-maria-1.png"></a>
        </div>
        
        <div class="barra-pesquisa">
            <form action="" method="post">
                <label>
                    <input type="text" id="nome" name="nome" placeholder="O que você procura?" required>
                </label>

                <button><img src="../imagens/elementos-do-site/lupa.png"></button>
            </form>
        </div>

        <div id="menu-topo">
            <ul>
                <li><a href="login.html"><img src="../imagens/elementos-do-site/entrar.png"></a></li>
                <li><a href="favoritos.html"><img src="../imagens/elementos-do-site/favoritos.png"></a></li>
                <li><a href="carrinho.html"><img src="../imagens/elementos-do-site/carrinho.png"></a></li>
            </ul>
        </div>
    </header>

    <main><!--Corpo do Site-->
    <section id="visualizar">
            <div class="visualizarproduto">
                <div class="visualizarimg">
                    <img src="../<?=$f["foto"]?>">
                </div>
            </div>
            <div class="infor">
                <h1 class="tituloinfor"><?=$f["nome"]?></h1>
                <h3 class="precoinfor"><?=$f["preco"]?> de 12x de sem juros</h3>
                <p class="titulo_descricao">Mais Informações:<p>
                <p class="descricao"><?=$f["descricao"]?><p>
                <button class="botao" type="button">Comprar agora</button>
                <button class="botao" type="button">Adicionar Carrinho</button>
            </div>
	</section>
    </main>

    <footer><!--Rodapé do Site-->
            <p>© 2023 Dona Maria Cortinas e Cia. Todos os direitos reservados</p>    
    </footer>

</body>
</html>